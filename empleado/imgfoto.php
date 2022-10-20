<?php
//error_reporting(0);
$idaux=0;$kkk=0;$k=0;$id=0;
$ci=$_POST['ci'];
//include'borraimg.php';

$nombre = strtolower( $ci.$_FILES['imagen']['name']);
//echo "nombre=$nombre id=$id  idf=$idf <br>"; 
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta =  strtolower("../file/" .$ci.$_FILES['imagen']['name']);
$destino = strtolower( "../file/".$nombrer);
$resultado = @move_uploaded_file( $_FILES["imagen"]["tmp_name"], $ruta);
$pesa=$ci.$_FILES['imagen']['size'];
//echo "pessa=$pesa";
if($pesa>3000000000000){$foto=$ruta; include ('comprime.php');}
if (!empty($resultado)){

              //  @mysqli_query($conexion,"INSERT INTO fotos VALUES ('". $nombre."','" . $destino . "')"); 
              //  echo "el archivo ha sido movido exitosamente";

                }else{

                    echo "Error al subir el archivo";

                    }
			
				$nombress="../file/" .$nombre;
					//echo "nombre=$nombre  nombress=$nombress";
					$nombre2="$nombre";
					include '../conectar/link.php';
$query =  "INSERT into fotos(foto,destino,ci)values('" . $nombre. "','" . $destino. "','" . $ci. "')";
$success = $conn->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn->error);
 
}
				?>
				
                <form name="f11" id="f11" action="veteconsulta3.php" method="post">
  <input name="id" hidden="true" type="text" id="id" value="<?=$id?>"/>
</form>
</form>
<center><table width="121" height="117" border="1">
  <tr>
            <td><img src='<?php echo "../file/".$nombre ?>' alt="" width='113' height='113' class="zoom" /></td>
  </tr>
</table></center>
