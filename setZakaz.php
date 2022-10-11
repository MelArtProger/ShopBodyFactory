<?php
session_start();
require "inc.php";
require "func/connect.php";
require "struct/dostavka.php";
require "struct/header.php";
?>

<?php	
if (!isset($_POST['endZakaz']))	{		
    $STH = $DBH->prepare('SELECT * from user where loginU=:loginU');  		
    $STH->bindParam(':loginU', $_SESSION['loginU']);
    $STH->execute();		
    $row=$STH->fetch();		
    echo "<div id='endZ' align='center'>";		
    echo "<form action='' method='post'>";		
    echo "<br>";		
    echo "<br>";			
    if (isset($_SESSION['loginU']))		
    {		
        echo "<input name='namU' required placeholder='Имя' class='form-control input-lg input-sm' value=".$row['nameU'].">";		
        echo "<input name='famU' required placeholder='Фамилия' class='form-control input-lg input-sm' value=".$row['famU'].">";		
    }		
    else		
    {		
        echo "<input name='namU' required placeholder='Имя' class='form-control input-lg input-sm'  value=".$row['nameU'].">";
		echo "<input name='famU' required placeholder='Фамилия' class='form-control input-lg input-sm'  value=".$row['famU'].">";
		}
		echo "<input name='phoneDost' required placeholder='Введите номер телефона' maxlength='12' value='+7' class='form-control input-lg input-sm' value".$row['phone'].">";		
        echo "<input name='datPost' readonly class='form-control input-lg input-sm' value=".date("Y-m-d").">";		
        echo "<input name='addrGor' required placeholder='Город' class='form-control input-lg input-sm'>";
        echo "<input name='addrUl' required placeholder='Улица' class='form-control input-lg input-sm'>";
        echo "<input name='addrDom' required placeholder='Дом' class='form-control input-lg input-sm'>";
        echo "<input name='addrKv' required placeholder='Квартира' class='form-control input-lg input-sm'>";		
        echo "<div class='button-actions clearfix' align='center'><input class='button' type='submit' name='endZakaz' value='Оформить' style='margin-top:20px'>";        
        echo "</form></div>";     
    }	
    else	
    {		
        if (!isset($_SESSION['loginU']))			
        $_SESSION['loginU']=$_POST['namU'];		
        $data = array( 'datZ'=>date("Y-m-d"),
					   'loginU' => $_POST['namU'],
                       'famU' => $_POST['famU'],
				       'addrGor' => $_POST['addrGor'],
                       'addrUl' => $_POST['addrUl'],
                       'addrDom' => $_POST['addrDom'],
                       'addrKv' => $_POST['addrKv'],
					   'phoneDost' => $_POST['phoneDost'],  
				       'statusZ' => 0,
				       'datPost' => $_POST['datPost'],);	
                   $STH = $DBH->prepare('INSERT INTO zakaz (datZ, loginU ,famU ,addrGor, addrUl, addrDom, addrKv ,phoneDost , statusZ, datPost) values(:datZ,:loginU,:famU,:addrGor,:addrUl,:addrDom,:addrKv,:phoneDost,:statusZ,:datPost)');  	
                   $f=$STH->execute($data);	$kod=$DBH->lastInsertId();	
                   if ($f>0)	
                   {		
                    $STH = $DBH->prepare('INSERT INTO zakaztovar (idZ ,idT ,kolvo ,pricePok) values(:idZ,:idT,:kolvo,:pricePok)');  
		foreach ($_SESSION['cart'] as $idT=>$kol)		
        {			
            $STHP = $DBH->prepare('SELECT * from tovar where idT=?');  			
            $STHP->execute(array($idT));			
            $row=$STHP->fetch();			
            $data=array ('idZ'=>$kod,'idT'=>$idT,'kolvo'=>$kol,'pricePok'=>$row['priceProd']);			
            $f=$STH->execute($data);		
        }		
        unset($_SESSION['cart']);		
        unset($_SESSION['summa']);		
        echo "<br>";		
        echo "<br>";		
        echo "<br>";	
        echo "<span class='errorCart'><h2 align='center'><input class='button' type='submit' name='endZakaz' href='' value='Оплатить заказ' style='margin-top:20px'></h2>!</span>";	}	
    }
?>

<?php
require "struct/footer.php ";
require "struct/policy.php";
?>	