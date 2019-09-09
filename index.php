<!DOCTYPE html>
<html>
<head>
	<title>Substituidor</title>
</head>
<body>
	<h1 >Substituidor</h1>
	<br>
	<form method="POST">

	Frase:<br>
	<input type="text" name="frase"><br><br>
	Procurar por:<br>
	<input type="text" name="procurar"><br><br>
	Trocar por:<br>
	<input type="text" name="trocar"><br><br>
	<input type="submit" name="Substitui">

 </form>

</body>
</html>
<?php 

if(isset($_POST['frase']) && empty($_POST['frase']) == false){
	$frase = addslashes($_POST['frase']);
	$procurar = addslashes($_POST['procurar']);
	$trocar = addslashes($_POST['trocar']);

  $palavra = str_replace($procurar,$trocar,$frase );

  echo "Frase:" ." ".$frase."<br>";
   echo "Frase:" ." ".$palavra;


       


}


?>