<?php
session_start();
?>
<link type='text/css' href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<?php
require "inc.php";
require "func/connect.php";
if (!isset($_SESSION['admin']))
{
	require "struct/checkAdmin.php";
}
else
{
require "struct/header.php";
?>

<script src="js/jquery-2.0.2.min.js"></script>

<?php
if (isset($_POST['change-status']))
{
	if ($_POST['statusZ']=='on')
	{
		$STH=$DBH->prepare('update zakaz set statusZ=1 where idZ=?');
		$STH->execute(array($_GET['idZ']));
		
	}
}
$a=array($_GET['idZ']);
$STH = $DBH->prepare('SELECT * from zakaz where idZ=?'); 
$STH->execute($a);
$row=$STH->fetch();
echo "<p><b>Фамилия: </b>".$row['famU'];
echo "<p><b>Имя: </b>".$row['loginU'];
echo "<p><b>Город: </b>".$row['addrGor'];
echo "<p><b>Улица: </b>".$row['addrUl'];
echo "<p><b>Дом: </b>".$row['addrDom'];
echo "<p><b>Квартира: </b>".$row['addrKv'];
echo "<p><b>Телефон: </b>".$row['phoneDost'];
echo "<p><b>Дата заказа: </b>".$row['datZ'];
echo "<p><b>Планируемая дата доставки: </b>".$row['datPost'];
echo "<br>";
echo "<br>";
$STH = $DBH->prepare('SELECT * from zakaz,tovar,zakaztovar where zakaz.idZ=zakaztovar.idZ and tovar.idT=zakaztovar.idT and zakaztovar.idZ=?'); 
$STH->execute($a);
$row1=$STH->fetchAll();
echo "<table border=1 class='table-zakaz'><tr>";
echo "<th>Товар</th><th>Количество</th><th>Цена</th></tr>";
foreach ($row1 as $row)
{
	echo "<tr><td>".$row['nazT']."</td><td>".$row['kolvo']."</td><td>".$row['pricePok']."₽</td></tr>";
}
echo "</table>";
echo "<form action='show-zakaz.php?idZ=".$row['idZ']."' method='post'>";
if ($row['statusZ']==1)
echo "<input type='checkbox' name='statusZ' checked disabled>Выполнен";
else
echo "<input type='checkbox' name='statusZ'>Выполнен";
echo "<input type='submit' class='button' name='change-status' value='Изменить'></form>";
require "struct/footer.php";	
}
?>