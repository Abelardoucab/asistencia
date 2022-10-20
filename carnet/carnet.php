<?php
$sw=0;
$ci=$_GET['ci'];
//$ci=4436612;
include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM emp WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	$nom= $sacar['nom'];
	$ape= $sacar['ape'];
	$cargo=$sacar['cargo'];
    $foto=$sacar['foto'];
	$foto="../file/".$foto;
}
$eslo="Que fácil es Automatizado";
$encabe="República de Colombia<br>Elaboración de Nómina";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Imprime Carnet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="JsBarcode.all.js"></script>
  <script type="text/javascript" language="Javascript">
document.oncontextmenu = function(){return false}
</script>
</head>
<style>
<head>
   <link rel = "stylesheet" type = "text / css" href = "css / site.css" />
   <script type = "text / javascript" src = "js / cssrefresh.js"> </script>
</head>
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 47px;
	top: 88px;
}
#enca{ font-size:16px;}
#eslo{ font-size:11px;}	

#eslo2{ font-size:11px;}
#uno:focus {
  outline: none;
}	

</style>
<body>

<div class="container">
<table width="234" border="0">
  <tr id="ocu">
    <td><button type="button" onClick="imp()" class="btn btn-primary btn-sm">Imprimir</button>&nbsp;&nbsp;<button type="button" onClick="sa()" class="btn btn-danger btn-sm">Salir</button>
      <span style="color:#00F">
      <input name="id"  hidden="true"  type="text" id="id" value="<?=$id?>" size="6">
      </span></td>
  </tr>
</table><br>
<table width="235" bordercolor="#0000FF" border="1">
  <tr>
  <td><table bordercolor="#0000FF" width="95%" border="0" align="center">
      <tr style="color:#00F">
        <td id="enca" colspan="2"><div align="center"><?php echo $encabe ?></div></td>
      </tr>
      <tr>
        <td id="uno" width="138"><div align="center"><img src="../img/logo.jpg" width="115" height="115"></div></td>
        <td width="164"><div align="center"><img   src='<?php echo $foto ?>' alt="" width='90' height='101' class="zoom" img /></div></td>
      </tr >
      <tr style="color:#00F">
        <td id="eslo2" colspan="2"><center>
          <?php echo "Valido Hasta 2022" ?>
        </center></td>
      </tr>
      <tr style="color:#00F">
        <td id="eslo" colspan="2"><center>
          <?php echo $eslo ?>
        </center></td>
      </tr>
      <tr style="color:#00F">
        <td colspan="2"><center>
          <?php echo $ci ?>
        </center></td>
      </tr>
      <tr style="color:#00F">
        <td colspan="2"><center>
          <?php echo $nom ?>
        </center></td>
      </tr>
      <tr style="color:#00F">
        <td colspan="2"><center>
          <?php echo $ape ?>
        </center></td>
      </tr>
      <tr style="color:#00F">
        <td colspan="2"><center>
          <?php echo $cargo ?>
          </center></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><div align="center"> <img id="<?php echo "a".$ci ?>"/>
          <script>JsBarcode('<?php echo "#a".$ci ?>', '<?php echo $ci ?>', {
  format: "code39",
  displayValue: false,
  height: 40,
    fontSize: 20,
	width: 1
  //width: 6,
  
});</script></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
</div>

</body>
</html>
<script>
function imp(){
	document.getElementById('ocu').style.display='none';
	window.print() ;
}
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('Bulindo');
            return false;
        } else {
            return true;
        }
};
function sa(){
	var id=document.getElementById('id').value;
	window.location='inicio.php'
}
</script>