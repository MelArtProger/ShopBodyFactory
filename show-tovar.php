<?php
session_start();
require "inc.php";
require "func/connect.php";
?>

<head>
    <meta charset="utf-8">
    <title>
		<?php
		$STH1 = $DBH->prepare('SELECT * from tovar where idT=?');  
		$STH1->execute(array($_GET['idT']));
		$row=$STH1->fetch();
		echo $row['nazT'].' | BF';
		?>
	</title>
</head>

<?php
require "struct/dostavka.php";
require "struct/header.php";
?>

<section>
	<div align='center' style='margin-top:20px; margin-bottom:20px;'>
		<h2>
			<?php
			$STH1 = $DBH->prepare('SELECT * from tovar where idT=?');  
			$STH1->execute(array($_GET['idT']));
			$row=$STH1->fetch();
			echo $row['nazT'];
			?>
		</h2>	
	</div>
</section>

<?php
$STH = $DBH->prepare('SELECT * from tovar where idT=:idT');  
$STH->bindParam(':idT', $_GET['idT']);
$STH->execute();
$row=$STH->fetch();
echo "<br>";
echo "<br>";
echo "<div class='col-md-3' align='center'><table cellpadding='20' cellspacing='20'><img id='target' class='photo' src='PhotoT/".$row['photoT']."'style='width:300px; height:300px'></div>";
echo "<div class='col-md-3' align='center' style='width:300px'><p><h4><br>".$row['nazT']."</div>";
echo "<div class='col-md-3' align='center' style='width:300px'><p><H3>Цена: ".$row['priceProd']."<span> ₽</span></table></div>";

echo "<div class='col-md-6' align='center'><h2><ins>Описание:</h2></ins><br><br>".$row['opisanie']."<br></div>";
echo "<div class='col-md-6' align='center'><div class='btn-cart'><br><br><button id='fly' class='button add-to-cart' type='button' align='center' onclick='javascript:toCart()'style='margin-bottom:40%'>Добавить</button></div></div>";
?>

<?php
require "struct/footer.php";
require "struct/policy.php";
?>		

<script type="text/javascript">
    $(document).ready(function () {
    $("#fly").click(function () {
    var target = $("#target");
    var pos = target.position();
	var clone = target.clone()
	.css({ position: 'absolute', 'z-index': '1000', top: pos.top, left: pos.left })
	.appendTo("table")
	.animate({top: -270, left:1280, opacity: 0.05 , width: 50, height: 50}, 1500, function() { 
	clone.remove(); 
	});
    });
    });
</script>