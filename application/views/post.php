<!--    <div class="container">

       <form class="form-horizontal" action="<?php echo base_url();?>postfb" enctype="multipart/form-data" method="POST" >

       		<div class="form-group">
    		  <label class="col-sm-2 control-label">Mensaje</label>
    		  <div class="col-sm-4">
      	     	 <input type="text" class="form-control" name="msg" placeholder="Nombre">
    		  </div>
  			</div>
        	<div class="form-group">
         	  <label class="col-sm-2 control-label">Imagen</label>
          <div class="col-sm-4">
               <input type="text" class="form-control" name="img" placeholder="Fecha de evento">
            </div>
          </div>
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Publicar</button>
		    </div>
       	</form>
   </div> -->

<?php 
	function get_page_access_token($user_access_token,$id_page)
	{
		$endpoint = $id_page."?fields=access_token,id,name&access_token=".$user_access_token;
		$url = "https://graph.facebook.com/".$endpoint;
		$data = array();
		
		$result = curl($url, $data, "GET");
		
		$tab = json_decode($result, true);
		return $tab["access_token"];
		
	}
 
// Publica en tu muro o en la página
// $ user_access_token == nuestro token, se debe generar cada 2 horas aquí: https://developers.facebook.com/tools/explorer/
// $ id == nuestro id o el id de la página
// $ msg == Aqui se escribe el mensaje
// $ img_url == Aqui Se puede agregar una imagen, pero Solo enlace directo (Acomodarlo para que se pueda subir)
// $ post_as ==> "PAGE" = Publicar en nuestra página || "USUARIO" (o dejar en blanco) = Publicar como nosotros(nombre)
	function posting($user_access_token, $id, $msg, $img_url, $post_as)
	{
		
		$access_token = $user_access_token;
		if ($post_as == "PAGE")
		{
			// Esto generará un access_token para nuestra página
			$access_token = get_page_access_token($user_access_token, $id);
		}
		
		//Datos basicos para el POST
		$endpoint = "feed";
		$data["access_token"] = $access_token;
		$data["message"] = $msg;
		
		if (!empty($img_url))
		{
			// Si queremos publicar una imagen,  Estos son los campos obligatorios
			$endpoint = "photos";
			$data["caption"] = $msg;
			$data["url"] = $img_url;
		}
		
		//Se crea la URL para el envio!
		$url = "https://graph.facebook.com/".$id."/".$endpoint;
		
		
		curl($url, $data, "POST");
		

	}
	
	//Usual curl 
	function curl($url, $data, $method)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER , true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		
		$query = http_build_query($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
		
		$result = curl_exec($ch);
		print_r($result);
		echo "<br>";
		return $result;
	}
	
	//-------------------------------------------------------
	
	$access_token	= "EAACEdEose0cBAF4AbdwwYyzYDcDGmRgzJyLwEE6ZBLzXWLSqYuD6IFZCidNKgucStKNULrOZB6GOQqVcRc3L1EKVePyUXEZApd8yjuBAY54upGNqZCMZCyXuS9WGPw8FZB3nvGU5cQ8td87TP3IbRK3lHHJosLDBZAKQ3oCXJVwcAb5LKqmy5ZBh1cqwaejY7Hi8ZD";
	$id_page 		= "344806002657871";
	$msg 			= "Presentacion de Proyectos de MKT Digital";
	$img_url 		= "https://www.carrerasenlinea.mx/logos/original/logo-instituto-tecnologico-de-colima.png";
	$post_on 		= "PAGE";
	
	//Se realiza el Post($access_user_token, $msg, $img_url, $post_as)
	posting($access_token, $id_page, $msg, $img_url, $post_on);

//Imagenes
	//https://i.pinimg.com/originals/8d/93/23/8d93236238d175b8bf779f46862e8d71.png
	//https://udemy-images.udemy.com/course/750x422/657590_edac_3.jpg
	//https://cdn23.merca20.com/wp-content/uploads/2017/10/bigstock-Digital-Marketing-New-Startup-190890487.jpg
?>

	<div class="container">
		<h1 align="center" style="font-size: 30px; color: #3f6699:">El post se realizo correctamente </h1>
	</div>
