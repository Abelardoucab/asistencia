<?php
$f1=$_GET['f1'];
$f2=$_GET['f2'];
echo " $f1    $f2";
$fecha1=$f1;  $fecha2=$f2;
$dia1=substr($fecha1,8,2);    $mes1=substr($fecha1,5,2);  $ano1= substr($fecha1,0,4); 
$dia2=substr($fecha2,8,2);    $mes2=substr($fecha2,5,2);  $ano2= substr($fecha2,0,4); 

$fecha11=$dia1."-".$mes1."-".$ano1;
$fecha22=$dia2."-".$mes2."-".$ano2;
$fecha111=$fecha11; $fecha222=$fecha22;
$fecha111=strtotime($fecha111); $fecha222=strtotime($fecha222);
echo "<br> fecha1=$fecha11   fecha22=$fecha22";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asistencia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 align="center" style="color:#00F">Asistencia <?php echo "$fecha11 / $fecha22  " ?></h2>
  <p align="center"><img src="../img/logo.jpg" width="163" height="107"></p>
  <p>Coloque una coincidencia en bucar..:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
       <th>CI</th>
        <th>Empleado</th>
        <th>Fecha</th>
        <th>Dia</th>
        <th>HoraE</th>
         <th>Llegó</th>
          <th>Tiempo</th>
           <th>Status</th>
            <th>HoraS</th>
             <th>Salio</th>
              <th>Tiempo</th>
               <th>Status</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php $sw=0;
	include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM emp INNER JOIN resumen ON emp.ci = resumen.ci")or die ("Error al extraer datos"); ;
while ($sacar=mysqli_fetch_array($conn))

{
	
	$fechabd= $sacar['fecha'];
	$fechat=strtotime($fechabd);
if(($fechat >= $fecha111) && ($fechat <= $fecha222)){	
	$sw++;
	$ci= $sacar['ci'];
    $emp=$sacar['nom']." ".$sacar['ape'];
	$fecha=$sacar['fecha'];
	$dia=$sacar['dia'];
	$he=$sacar['horaentrada'];
	$entro=$sacar['entro'];
	$tiempo1=$sacar['difent'];
	$statusent=$sacar['statusent'];
	$hs=$sacar['horasalida'];
	$salio=$sacar['salio'];
	$tiempo2=$sacar['difsal'];
	$satussal=$sacar['statussal'];
?>
      <tr>
        <td><?php echo $ci ?></td>
     <td><?php echo $emp ?></td>
        <td><?php echo $fecha ?></td>
          <td><?php echo $dia ?></td>
            <td><?php echo $he ?></td>
             <td><?php echo $entro ?></td>
               <td><?php echo $tiempo1 ?></td>
                <td><?php echo $statusent ?></td>
                   <td><?php echo $hs ?></td>
                    <td><?php echo $salio ?></td>
                       <td><?php echo $tiempo2 ?></td>
                          <td><?php echo $satussal ?></td>
      </tr><?php }} ?>
      
    </tbody>
  </table>
  
  
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
