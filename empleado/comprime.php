<?php
$rutaImagenOriginal ='../file/'.$nombre;

# La abrimos como un recurso. Nota: uso imagecreatefromjpeg porque es una JPEG, si fuera
# una PNG, usa imagecreatefrompng
$imagenOriginal = imagecreatefromjpeg($rutaImagenOriginal);

# Y la volvemos a guardar usando imagejpeg indicando la calidad como tercer argumento
# Lo mismo, lo hago con imagejpeg porque es JPEG, si fuera PNG ya sabes, ¿cierto?
$rutaImagenComprimida ='../file/'.$nombre;
$calidad = 8; // Valor entre 0 y 100. Mayor calidad, mayor peso
imagejpeg($imagenOriginal, $rutaImagenComprimida, $calidad);
//printf("La imagen comprimida ha sido guardada en %s", $rutaImagenComprimida);