<?php 
require_once("highcharts/php/connection.php");
?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
    ${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Reporte Estadistico',
            x: -20 //center
        },
        subtitle: {
            text: 'Cantidad de Comentarios por Publicación',
            x: -20
        },
        xAxis: {
            categories: [
            <?php 
            $sql = "SELECT * FROM feed";
            $result = mysqli_query($connection,$sql);
            while ($database = mysqli_fetch_array($result))
            {
            ?>
                '<?php echo $database["PostID"]; ?>',
            <?php
            }
            ?>
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de Comentarios'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Cantidad',
            data: [
            <?php 
            $sql = "SELECT * FROM feed";
            $result = mysqli_query($connection,$sql);
            while ($database = mysqli_fetch_array($result))
            {
            ?>
                <?php echo $database["Comments"] ?>,
            <?php
            }
            ?>
            ]
        }]
     });
  });
</script>
    <div class="row">
        <div class="col-lg-12" style="background-color: #3f6699; margin: 0 auto; text-align: center">
            <h1 style="color: white">Facebook</h1>
                <div id="container" style="min-width: 310px; height: 600px; margin: 0 auto;">
                </div>
                <a href="<?php echo base_url();?>fb" style="margin: 0 auto; color: white; font-size: 35px; display: inline-block;">Regresar</a>
        </div>
    </div>     

<!--                 <a href="index.php/welcome" align="center" style="padding-top: 30%; border: 1px solid blue;"> Regresar</a> -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>