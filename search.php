<?php
	session_start();
	require "inc.php";
	require "func/connect.php";
	require "struct/dostavka.php";
	require "struct/header.php";
?>

<section>
	<div align='center' style='margin-top:20px; margin-bottom:50px;'>
		<h2>По вашему запросу найдено</h2> 
	</div>	
</section>	

<?php
	$connect=mysqli_connect('localhost','root','','diplom');
	if (!connect)
	{
	exit('MySQL Error:' .mysqli_error($connect));
	}
	$word=(isset($_GET['word']))?$_GET['word']:null;
	$word=mysqli_real_escape_string($connect, trim($word));
	if (empty($word))
	{
	echo "<h2 align='center'>Не введено слово!</h2>";
	}
	else if (iconv_strlen($word, 'utf-8')<3)
	{
	echo "<h2 align='center'>Слово не может быть менее трёх символов!</h2>";
	}
	else if (iconv_strlen($word, 'utf-8')>20)
	{    
	echo "<h2 align='center'>Слово не может быть более двадцати символов!</h2>";
	} 
	else
	{     
	$test="%".$word."%";
	$STH=$DBH->prepare("select * FROM tovar WHERE nazT LIKE ?");
	$STH->execute(array($test));
	$row=$STH->fetchAll(PDO::FETCH_ASSOC);
	if ($STH->rowCount()==0) 
	{        
	echo "<h2 align='center'>Ошибка базы данных!</h2>"; 
	}     
	else 
	{
	foreach ($row as $row1)	
	{             
		echo "<div class='col-md-3' align='center'><table cellpadding='20' cellspacing='20'><a href='show-tovar.php?idT=".$row1['idT']."'>
		<img src='PhotoT/".$row1['photoT']."' style='width:300px; height:300px'></div>
		<div class='col-md-3' align='center'style='width:300px'><br><h4><p>".$row1['nazT']."</a></div>
		<div class='col-md-3' align='center'style='width:300px'><h4><p>Цена: ".$row1['priceProd']."<span> ₽</span></table></div>";
	}   
	}           
	}
?>

<?php
	require "struct/footer.php";
	require "struct/policy.php";
?>