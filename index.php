<html>
<body>
<form action="" method="post">
Valeur 1:
<input type="text" name="no1"><br>
Valeur 2:
<input type="text" name="no2"><br>
<input type="submit" name="submit" value="SUM "><br>
</form>
</body>
</html>
<?php
$sum="";
if(isset($_POST['submit']))
{
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$sum=$no1+$no2;
	
}
?>
Resultat:<?php echo $sum; ?>