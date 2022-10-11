<?php
session_start();
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
$STH = $DBH->query('SELECT * from zakaz'); 
$row=$STH->fetchAll();
if ($STH->rowCount()>0)
{
	echo "<table border=1 class='table-zakaz'><tr>";
	echo "<th>Клиент</th><th>Дата заказа</th><th>Дата доставки</th><th>Обработка</th></tr>";
	foreach($row as $row1)
	{
		if (empty($row1['loginU']))
		{
			echo "<tr><td><a href='show-zakaz.php?idZ=".$row1['idZ']."'>".$row1['famU']."</a></td>";
		}
		echo "<tr><td><a href='show-zakaz.php?idZ=".$row1['idZ']."'>".$row1['loginU']."&nbsp".$row1['famU']." &nbsp</a></td>";
		echo "<td>&nbsp".$row1['datZ']."</td><td>&nbsp".$row1['datPost']."</td><td>&nbsp".$row1['statusZ']."</td></tr>";
	} 
	echo "</table>";
	}
else 
	echo "Открытых заказов нет!";
require "struct/footer.php";	
}
?>