<?php
session_start();
if ($_POST['logOut'])
{
unset($_SESSION['admin']);
?>

<script>
	document.location="index.php"
</script>

<?php
}
?>

<!doctype html>
<head>
	<title>Панель администратора | BF</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon1.ico">
	<meta charset="utf-8">
	<script type="text/javascript" src="js/conajax.js"></script> 
	<link type='text/css' href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>


		<div class="logo" align='center'>                            
    		<a href="index.php"><img src="img//logo/logo3.png" alt="Body factory"></a>                            
		</div>
		<div id="header" align='center'>Панель администратора
			<form action="" method="post">
				<input type="submit" name="logOut" value="Выйти" class="btn btn-success"  style="margin-top:20px">
			</form>
		</div>


<div id="left-menu">
	<ul>
		<li><a href="menu.php">Меню</a></li>
		<li><a href="kategory.php">Категории</a></li>
		<li><a href="tovar.php">Товары</a></li>
		<li><a href="zakaz.php">Заказы</a></li>
	</ul>
</div>
<div id="article">