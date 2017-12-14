<?php
require_once('assets/db.php');// Database connection
$query = "SELECT * FROM feed order by id asc"; // select page already in database or not query.

$result = mysqli_query($connection,$query); // execute query
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<body>

<div class="row">
<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">

	<div class="container">
	<h2>Ingresar Id de la pagina para obtener las ultimas Publicaciones</h2>

	<form method='post' action='"Location: feed.php"' style="padding-top: 30px; margin-bottom: 3%">Ingresar el Id Unico de la pagina / el nombre unico de la pagina (@nombre): <input type='text' name='page' value="" /><input type=submit /></form>
	</div>
	___________________________________________________________________________________________________________________
	<h2 align="center">Ultimas Publicaciones de la Pagina de Facebook</h2>

	<table border="1" style="margin: 0 auto; width: 60%; margin-top: 2%; margin-right: 2%; margin-left: 21%;">
	  <tr>
		<td>
		<div class="thumbnail">

			<ul class="event-list" style="list-style:none">

		<?php
				while($rowsFeed = mysqli_fetch_array($result))
			{
		?>

			<li>
				<center>
					<img src="<?php echo $rowsFeed['Picture'];?>" style="width: 50%; margin-top: 2%; margin-bottom: 4% border: 10px black; padding-bottom: 2%;" class="img-responsive img-thumbnail"/>	
				</center>
				
	<div class="info" class="center" style="margin: 0 auto; margin-right: 8%;">
				<p class="asc" align="center"><?php echo $rowsFeed['Post'];?></p>
			<ul style="list-style:none; " align="right">
				<li style="width:33%; padding-left: 22%" align="right"><span class="fa fa-thumbs-up"></span> <?php echo $rowsFeed['Likes'];?></li>
				<li style="width:34%; padding-left: 22%"><span class="fa fa-comment"></span> <?php echo $rowsFeed['Comments'];?></li>
				<li style="width:33%; padding-left: 22%"><span class="fa fa-share"></span> <?php echo $rowsFeed['Shares'];?></li>
			</ul>
	</div>
		<div class="social" style="margin: 0 auto; margin-bottom: 2;">
			<ul>
				<li class="facebook" style="width:33%; list-style:none; padding-left: 20%"><a href="https://fb.com/<?php echo $rowsFeed['PostID'];?>" target="_blank"><span class="fa fa-facebook"></span></a></li>
			</ul>
			______________________________________________________________
			</li>
		<?php
			}
		?>
			</ul>
		</div>
		 </td>
	  </tr>
	</table>		
	
</div>

</div>
</body>
</html>