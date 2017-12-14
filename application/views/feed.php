<?php

if(isset($_REQUEST['page']))
{
 require_once('assets/db.php'); // Conexion a la Base de datos
 require_once( 'assets/config.php' ); // Archivo que contiene los datos de la aplicacion de fb (App_ID y el password secreto (App_Secret))
 $token = $config['App_ID']."|".$config['App_Secret']; // Se genera el token con los datos del archivo config.php con el fin 													  //de evitar generar el token desde fuera, ya que solo dura dos horas  													//como maximo un token activo
 
 $pageDetails = getFacebookId(mysqli_real_escape_string($connection,$_REQUEST['page'])); // Obetemos los detalles de la 																						   //pagina lo que buscamos (like, 																							  //comentarios, imagenes , etc.)
 if(!isset($pageDetails->id))
 {
 echo "A ocurrido un error porfavor ingresa un id unico de una pagina de facebook / unico nombre de una pagina de facebook";
 exit;
 }
 $query = "SELECT * FROM pages where PageID='".$pageDetails->id."'"; //Seleccionamos la Pagina que ya existe en la BD
 $result = mysqli_query($connection,$query); // Ejecutamos el Query
 $numResults = mysqli_num_rows($result); // numeros de Resultados
 if($numResults>=1) // si la página se encuentra en la base de datos se ejecuta la consulta de actualización
 {
 $Results = mysqli_fetch_array($result);
 mysqli_query($connection,"UPDATE `pages` SET `Name` = '".mysqli_real_escape_string($connection,$pageDetails->name)."',`Likes` = '".$pageDetails->fan_count."',`Talking` = '".$pageDetails->talking_about_count."' 
 WHERE `id` ='".$Results['id']."' LIMIT 1");
 }
 else //de lo contrario, ejecuta Insertar consulta para una nueva página
 {
 mysqli_query($connection,"INSERT INTO `pages` ( `id` , `PageID` , `Name` , `Likes` , `Talking` )
 VALUES 
 (NULL , '".$pageDetails->id."', '".$pageDetails->name."', '".$pageDetails->fan_count."', '".$pageDetails->talking_about_count."')");
 }

 feedExtract("",$pageDetails->id,$token); //Esta función obtendrá el feed de la página.
 header("Location: view.php");
 exit;
}
else
{
 header("Location: index.php");
 exit;
}
 
// Función para obtener todo el feed de una página con me gusta, comentar, compartir, etc.
function feedExtract($url="",$pageFBID) // $ url contiene la url para las páginas siguientes y $ page contiene la 												   //identificación de la página
{
 global $token, $connection; // conexión de base de datos y token requerido
 
 $url = "https://graph.facebook.com/v2.11/$pageFBID/feed?fields=picture,message,story,created_time,shares,likes.limit(1).summary(true),comments.limit(1).summary(true)&access_token=";
// publicaciones de búsqueda por primera vez
 $response = file_get_contents_curl($url.$token);
 
 $query = "SELECT id FROM pages where pageID='".$pageFBID."'";// seleccione feed ya en la base de datos.
 $result = mysqli_query($connection,$query); // ejecuta el query
 $fieldID = mysqli_fetch_row($result);
 $pageID = $fieldID['0'];
// decodifica los datos del vector en un json
 $get_data = json_decode($response,true);
// ciclo que extre los datos
 for($ic=0;$ic<count($get_data['data']);$ic++)
 {
 // Día, mes y año de extracción
 $date = date_create($get_data['data'][$ic]['created_time']);
 $newDate = date_format($date,'Y-m-d H:i:s');
 
 $story = $get_data['data'][$ic]['message'];
 
 if(!isset($story))
 $story = $get_data['data'][$ic]['story'];
 
 
 $query = "SELECT id FROM feed where PostID='".$get_data['data'][$ic]['id']."'"; 
 $result = mysqli_query($connection,$query); 
 $numResults = mysqli_num_rows($result); 
 if($numResults>=1) 
 {
 //Se actualizan Resultados
 mysqli_query($connection,"update `feed` set 
 `Comments` = '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['comments']['summary']['total_count'])."' , 
 `Likes` = '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['likes']['summary']['total_count'])."', 
 `Shares` = '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['shares']['count'])."' 
 where `PostID` = '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['id'])."'");
 }
 else
 {
 
 // se ponen los datos en valores de consulta
 $dataFeed = "(
 '".mysqli_real_escape_string($connection,$pageID)."', 
 '".mysqli_real_escape_string($connection,$newDate)."',
 '".mysqli_real_escape_string($connection,$story)."',
 '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['picture'])."',
 '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['comments']['summary']['total_count'])."',
 '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['likes']['summary']['total_count'])."',
 '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['shares']['total_count'])."',
 '".mysqli_real_escape_string($connection,$get_data['data'][$ic]['id'])."')";
 
 mysqli_query($connection,"INSERT INTO `feed` (`PageID` , `Date` , `Post` , `Picture` , `Comments` , `Likes` , `Shares` , `PostID` ) VALUES $dataFeed");
 }
 }
 
 // Return message.
 return 1;
}

function getFacebookId($pageID) // Esta función devuelve los detalles de la página de Facebook por su URL
{
 // Se obtiene token del archivo principal
 global $token; 
 $json = file_get_contents_curl('https://graph.facebook.com/'.$pageID.'?fields=fan_count,talking_about_count,name&access_token='.$token); 
 // se decodifica el feed en un jso
 $json = json_decode($json);
 return $json;
}

?>