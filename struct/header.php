<head>
	<meta charset="utf-8">        
	<meta http-equiv="x-ua-compatible" content="ie=edge">        
	<title>Body factory</title>        
	<meta name="description" content="">        
	<meta name="viewport" content="width=device-width, initial-scale=1">	        
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon1.ico">        
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
<body>        
	<header>            
		<div class="header-main">                
			<div class="container">                    
				<div class="header-content">                        
					<div class="row">                            
						<div class="col-lg-3 col-md-3 col-sm-12">                                
							<div class="logo">                                    
								<a href="index.php"><img src="img//logo/logo4.png" alt="Body factory"></a>                                
							</div>                            
						</div>
						<div class="search">
							<form action='search.php' method='get'>
								<input type="search" name='word' class="search-form" autocomplete="off" placeholder="Поиск в каталоге">
								<i type='submit' name='word' class="fa fa-search"></i>
							</form>
						</div>                                                        
						<div class="col-lg-3 col-md-3 col-sm-4">                                
							<div class="header-r-cart">                                    
								<li><a class="cart" href="show-cart.php" id="cart">											
									<?php											
									if (isset($_SESSION['summa']))											
									echo "<p align='center'>Сумма: <span id='summCart'>".$_SESSION['summa']." ₽</span>";											
									else											
									echo "<p align='center'>Сумма: <span id='summCart'> 0 ₽</span>";											
									?>											
									</p>										
									</a>                                    
								</li>                                
							</div>                            
						</div>                        
					</div>                    
				</div>                    
			</div>            
		</div>            
		<div class="mainmenu-area hidden-sm hidden-xs">                
			<div id="sticker">                     
				<div class="container">                        
					<div class="row">                               
						<div class="col-lg-12 col-md-12 hidden-sm">                                
							<div class="mainmenu">                                    
								<nav>                                        
									<ul id="nav">			                                            
									<?php											
									$STH = $DBH->query('SELECT * from menu order by idM');  											
									$row=$STH->fetchAll(PDO::FETCH_ASSOC);											
									foreach ($row as $rowone){											
										echo "<li class='current'><a href='catalog.php?idM=".$rowone['idM']."' class='dropdown-toggle'>".$rowone['nazM']."</a>";											
										?>											
										<ul class="sub-menu">											
											<?php											
											$STH1 = $DBH->prepare('SELECT * from kategory where idM=?');  											
											$STH1->execute(array($rowone['idM']));											
											$row1=$STH1->fetchAll(PDO::FETCH_ASSOC);											
											foreach ($row1 as $rowtwo){											
												echo "<li><a href='show-kat.php?idK=".$rowtwo['idK'] . "'>".$rowtwo['nazK']."</a></li>";											
												}											
												?>											
										</ul>											
										</li>											
										<?php											
										}											
										?>                                        
									</ul>                                    
								</nav>                                
							</div>                                    
						</div>                        
					</div>                    
				</div>                
			</div>                  
		</div>		
	</header>	
</body>
	<!--===============SCRIPT=================-->		
	<script src="js/vendor/jquery-1.11.3.min.js"></script>		
	<script src="js/bootstrap.min.js"></script>    
	<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="lib/nivo-slider/home.js" type="text/javascript"></script>	
	<script src="js/wow.min.js"></script>		
	<script src="js/jquery.meanmenu.js"></script>	
	<script src="js/owl.carousel.min.js"></script>	
	<script src="js/jquery-price-slider.js"></script>		
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>		
	<script src="js/jquery.sticky.js"></script>	
	<script src="js/jquery.elevateZoom-3.0.8.min.js"></script>		
	<script src="js/plugins.js"></script>		
	<script src="js/main.js"></script>	
	<script type="text/javascript" src="js/cart.js"></script> 