<?php

$ci=$_GET['ci'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <style>
        .image-upload > input{
            display: none;
        }
        .image-upload img{
            width: 130px;
            cursor: pointer;
        }
    </style>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById("file-input").onchange = function() {
                document.getElementById("form").submit();
            }
        }
    </script>
</head>
<body>
<form id="form" action="imgfoto.php" method="post" enctype="multipart/form-data">
    <div class="image-upload">
        <label for="file-input">
          <center>
            <img src="../img/par2.jpg" width="160" height="122">
          </center>
        </label>
   
          <input type="text" hidden="true" name="ci" id="ci"  value="<?=$ci?>">
    
        <input id="file-input" type="file" name="imagen"/>
    </div>
</form>
</body>
</html>