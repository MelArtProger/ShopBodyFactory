<body>		
	<div class="brand-area">            
		<div class="container">                 
			<!--div class="brand-content">                    
				<div class="row">                    
				</div>                
			</div-->                
		</div>        
	</div>        
	<div class="service-area">            
            <div class="container">                
                <div class="service-padding">                    
                    <div class="row">                        
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">                            
                            <div class="single-service">                                
                                <span class="fa fa-truck"></span>                                
                                    <h3>Бесплатная доставка при заказе от 2 499 ₽</h3>                            
                            </div>                        
                        </div>                        
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">                            
                            <div class="single-service">                                
                                <span class="fa fa-dropbox"></span>                                
                                    <h3>Огромный ассортимент спортивного питания</h3>                            
                            </div>                        
                        </div>                        
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">                            
                            <div class="single-service">                                
                                <span class="fa fa-calendar-o"></span>                               
                                    <h3>Еженедельная подсортировка ассортимента</h3>                            
                            </div>                        
                        </div>                        
                        <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">                            
                            <div class="single-service">                                
                                <span class="fa fa-comments-o"></span>                                
                                    <h3>Специальные предложения и скидки</h3>                            
                            </div>                        
                        </div>                    
                    </div>                
                </div>                
            </div>        
        </div>
        <div class="footer-widget-area">            
            <div class="container">                
                <div class="footer-widget-padding">                     
                    <div class="row">                        
                            <div class="col-lg-3 col-md-3 col-sm-12">                            							
                                <div class="logo">                            
                                    <a href="index.php"><img src="img//logo/logo3.png" alt="Body factory"></a>                            
                                </div>							                        
                            </div>                        
                            <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">                            
                                <div class="single-widget">                                
                                    <div class="footer-widget-title">                                    
                                        <h3>Категории</h3>                                 
                                    </div>                                 
                                    <div class="footer-widget-list ">                                   
                                        <ul>											
                                            <?php											
                                                $STH = $DBH->query('SELECT * from menu order by idM');  											
                                                $row=$STH->fetchAll(PDO::FETCH_ASSOC);											
                                                foreach ($row as $rowone)											
                                                echo "<li><a href='catalog.php?idM=".$rowone['idM']."'>".$rowone['nazM']."</a>";											
                                            ?>                                    
                                        </ul>                                
                                    </div>                            
                                </div>                        
                            </div>                        
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">                            
                                <div class="single-widget">                                
                                    <div class="footer-widget-title">                                    
                                        <h3>Контакты</h3>                                
                                    </div>                                
                                        <div class="footer-widget-list ">                                    
                                            <ul class="address">                                        
                                                <li><span class="fa fa-map-marker"></span><a href="https://www.google.com/maps/place/%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/@55.582026,37.3855235,9z/data=!3m1!4b1!4m5!3m4!1s0x46b54afc73d4b0c9:0x3d44d6cc5757cf4c!8m2!3d55.755826!4d37.6172999">Mосква</a></li>                                        
                                                <li><span class="fa fa-phone"></span><a href="tel: +7 (499) 768-83-08">+7 (499) 768-83-08</a></li>                                        
                                                <li><span class="fa fa-phone"></span><a href="tel: +7 (499) 900-90-10">+7 (499) 900-90-10</a></li>                                        
                                                <li class="support-link"><span class="fa fa-envelope-o"></span><a href="mailto: BFSport@gmail.com">BFSport@gmail.com</a></li>                                    
                                            </ul>                                
                                        </div>                            
                                    </div>                        
                                </div>                        
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">                            
                                    <div class="single-widget">                                
                                        <div class="footer-widget-list ">
                                        <br><br>                                                             
                                            <a href="https://vk.com/"><img src="img/vk.png" alt="Вконтакте"></a>										
                                            <a href="https://www.instagram.com/"><img src="img/inst.png" alt="Instagram"></a>
                                            <a href="https://web.telegram.org/k/"><img src="img/teleg.png" alt="Telegram"></a>                        
                                        </div>								
                                        <br>																
                                        <p class="payment-image"><img src="img/payment.png" alt=""></p>                            
                                    </div>                        
                                </div>                    
                            </div>                
                    </div>                 
                </div>        
            </div>		
            <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-arrow-up"></i></a>
        </div>  
    </div>      	
</body>
<!--===============SCRIPT=================-->				
<script src="js/jquery.meanmenu.js"></script>	
<script src="js/owl.carousel.min.js"></script>	
<script src="js/jquery-price-slider.js"></script>		
<script src="js/jquery.scrollUp.min.js"></script>	
<script src="js/main.js"></script>	