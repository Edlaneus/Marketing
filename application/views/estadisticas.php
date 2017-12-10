<?php
include("assets/db.php");

		$fi = $_GET['fi'];//fechas por get 
		$ff = $_GET['ff'];


		//extraccion array de datos
		$res = mysql_query("SELECT COUNT(id) as total,fecha FROM registros WHERE tipo = 1 AND fecha BETWEEN '$fi' AND '$ff' GROUP BY FECHA ORDER BY fecha ASC");
		while($arr = mysql_fetch_array($res))
		{
			$arrayhombres[$arr['fecha']] = array(
							'fecha' 	=> $arr['fecha'],
							'total' 	=> $arr['total'],
							);	
		}

		$res1 = mysql_query("SELECT COUNT(id) as total,fecha FROM registros WHERE tipo = 2 AND fecha BETWEEN '$fi' AND '$ff' GROUP BY FECHA ORDER BY fecha ASC");
		while($arr = mysql_fetch_array($res1))
		{
			$arraymujeres[$arr['fecha']] = array(
							'fecha' 	=> $arr['fecha'],
							'total' 	=> $arr['total'],
							);	
		}

		$res2 = mysql_query("SELECT COUNT(id) as total,fecha FROM registros WHERE tipo = 3 AND fecha BETWEEN '$fi' AND '$ff' GROUP BY FECHA ORDER BY fecha ASC");
		while($arr2 = mysql_fetch_array($res2))
		{
			$arrasindato[$arr2['fecha']] = array(
							'fecha' 	=> $arr2['fecha'],
							'total' 	=> $arr2['total'],
							);	
		}


		$fechaInicio    = strtotime($fi);
		$fechaFin       = strtotime($ff);

		/*
		echo "<pre>";
		print_r($arrayhombres);
		echo "</pre>";
		*/
?>	

	<div class="container">
		<div class="row">
			<table border="1" style="margin: 0 auto; width: 60%; margin-top: 2%; margin-right: 2%; margin-left: 21%;">
				<tr>
					<td>
						<h4 class="text-center">Likes</h4>
					</td>
					<td>
						<h4 class="text-center">Comenatarios</h4>
					</td>
					<td>
						<h4 class="text-center">Compartidas</h4>
					</td>

				</tr>
			</table>
<!-- 					<div class="col-xs-6 col-sm-6 col-md-3">
						<img class="img-responsive img-thumbnail" src="img/img1.jpg">
						<h4 class="text-center">Regalo</h4>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<img class="img-responsive img-thumbnail" src="img/img2.jpg">
						<h4 class="text-center">Amigos</h4>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<img class="img-responsive img-thumbnail" src="img/img3.jpg">
						<h4 class="text-center">Compañia</h4>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<img class="img-responsive img-thumbnail" src="img/img4.jpg">
						<h4 class="text-center">Spinning</h4>
					</div> -->

			<!--<div class="clearfix visible-sm"></div>-->			
			</div>
		</div>
	</div>