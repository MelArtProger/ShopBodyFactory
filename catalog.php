<?php
session_start();
require "inc.php";
require "func/connect.php";
?>

<head>
    <meta charset="utf-8">
    <title>
		<?php
		$STH1 = $DBH->prepare('SELECT * from menu where idM=?');  
		$STH1->execute(array($_GET['idM']));
		$row=$STH1->fetch();
		echo $row['nazM'].' | BF';
		?>
	</title>
</head>

<?php
require "struct/dostavka.php";
require "struct/header.php";
?>
	
<section align='center'>
	<div align='center' style='margin-top:20px; margin-bottom:20px;'>
		<h2>
			<?php
			$STH1 = $DBH->prepare('SELECT * from menu where idM=?');  
			$STH1->execute(array($_GET['idM']));
			$row=$STH1->fetch();
			echo $row['nazM'];
			?>
		</h2>	
	</div>
</section>


<?php
$STH = $DBH->prepare('SELECT * from tovar,kategory where tovar.idK=kategory.idK and idM=?');  
$STH->execute(array($_GET['idM']));
$row=$STH->fetchAll(PDO::FETCH_ASSOC);
foreach ($row as $row1)
echo "<div class='col-md-3' align='center'><table cellpadding='20' cellspacing='20'><a href='show-tovar.php?idT=".$row1['idT']."'>
<img src='PhotoT/".$row1['photoT']."' style='width:300px; height:300px'></div>
<div class='col-md-3' align='center'style='width:300px'><br><h4><p>".$row1['nazT']."</a></div>
<div class='col-md-3' align='center'style='width:300px'><h4><p>Цена: ".$row1['priceProd']."<span> ₽</span></table></div>";
?>
	
<?php
require "struct/footer.php";
require "struct/policy.php";
?>
