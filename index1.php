<?php
    session_start();
    require "inc.php";
    require "func/connect.php";
?>

<head>
    <meta charset="utf-8">
    <title>Каталог | BF</title>
</head>

<?php
    require "struct/dostavka.php";
    require "struct/header.php";
?>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

<section>
	<div align='center' style='margin-top:20px; margin-bottom:20px;'>
			<h2>Каталог</h2> 
	</div>
</section>

<?php
    $STH = $DBH->query('SELECT * from tovar');  
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