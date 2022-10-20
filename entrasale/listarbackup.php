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
  <h2 align="center" style="color:#00F">Asistencia</h2>
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
      </tr><?php } ?>
      
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
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
