<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num1">
	<input type="number" name="num2">
	<span>+</span><input type="radio" name="topla" >
	<span>-</span><input type="radio" name="cix" >
	<span>*</span><input type="radio" name="vir">
	<span>/</span><input type="radio" name="bol">
	<input type="submit" value="Hesabla " name="submit">



</form>
</body>
</html>

<?php
// forması yuxarıda verilen besit hesablama masını yazın

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$hesabla = "";
if (isset($_POST['submit'])) {
	if (isset($_POST['topla'])) {
		$hesabla = $num1 + $num2;
	} else if (isset($_POST['cix'])) {
		$hesabla = $num1 - $num2;
	} else if (isset($_POST['vir'])) {
		$hesabla = $num1 * $num2;
	} else if (isset($_POST['bol'])) {
		$hesabla = $num1 / $num2;
	}

	echo "<p>Netice:$hesabla</p>";
}
?>