<?php
$url = file_get_contents('http://www.bcv.org.ve/');
 
 
//creamos nuevo DOMDocument y cargamos la url
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
//obtenemos todos los div de la url
$divs = $dom->getElementsByTagName( 'div' );
 
//recorremos los divs
foreach( $divs as $div ){
    //si encentramos la clase mc-title nos quedamos con el titulo
    if( $div->getAttribute( 'class' ) === 'row' ){
        $title = $div->nodeValue;
    }
    //si encentramos la clase mr-rating nos quedamos con la puntuacion                      
    if( $div->getAttribute( 'class' ) === 'main-container container' ){
        $rating = $div->nodeValue;
        break;
    }
	
  }
 
 //pintamos el resultado
 // echo 'Titulo: '. $title;

 
// echo 'Puntuación:' . $rating;
 $items = $rating; $items = explode(" ", $items); // echo $items[11]; // word1 echo $items[1]; // word2


   $array = explode("USD", $rating);
 // echo "La posicion 7 es ".$array[1];
  $dolar=$array[1];
   $array2 = explode("Fecha Valor", $rating);
   $fecha=$array2[1];
     $mat = explode(" ", $fecha);
  // echo"____________________________________________________________________________________________-<br>";
   //echo "FECHA= ".$fecha;
   // echo "<br> mat dia=".$mat[2]; echo "<br>";
  // echo "<br> mat mes=".$mat[3]; echo "<br>";
 //  echo "<br> mat ano=".$mat[5]; echo "<br>";
  $hoy=$mat[2]." ".$mat[3]." ".$mat[5];
//  echo $hoy;
//echo"____________________________________________________________________________________________-";

// Declare a variable and initialize it
$geeks =$dolar;
  
// Use preg_match_all() function to check match
preg_match_all('!\d+\.*\d*!', $geeks, $matches);
  
// Display matches result
//print_r($matches);
$d=$matches[0][0].".".$matches[0][1];;
$d2=number_format($d,2,",",".");



echo $d2."*".$hoy;
 ?>