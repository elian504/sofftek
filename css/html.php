<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="http://localhost/index.php" method="get">
        <p>numero:  <input type="number" name="numero"></p>
<p><input type="submit" value="enviar"></p>
    </form>
</body>
</html>
<?php
$n = $_GET["numero"];

if($n==1000){
    echo"has ganado";

}
else {
    echo"perdiste";
}
?>