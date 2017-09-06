<?php
  require_once('function.php');
  session_start();

  $country=getCountryFromIp();

  
  
 
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="E-Z-GO, Cushman, Jacobsen: Textron Golf brings together golf's most trusted brands, providing the high-performance products needed to get the job done." >
        <title>EZGO Cushman Jacobsen Vehicles | Textron Golf</title>
        <link rel="icon" 
      type="image/png" 
      href="img/textron-golf-favicon.png">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom.css">
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
   
    </head>
    <body>

      
             
                    <header class="cd-header">
                        <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/TextronGolf.png" alt="Textron Golf" /></a>
    </div>

    
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li ><a href="http://www.ezgo.com"><img class="brandIMG" src="img/ezgo-logo.png" alt="E-Z-GO" /> </a></li>
        <li><a href="http://www.cushman.com"><img class="brandIMG" src="img/cushman-logo.png" alt="Cushman" /></a></li>
          <li><a href="http://www.jacobsen.com"><img class="brandIMG"  src="img/jacobsen-logo.png" alt="Jacobsen" /></a></li>
          <li><a href="http://www.tekgps.com"><img class="brandIMG" src="img/tfm-logo.png" alt="Textron Fleet Management" /></a></li>
       
      </ul>
      
     <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  >Parts &amp; Accessories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="shopezgo"><a href="http://www.shopezgo.com">E-Z-GO</a></li>
            <li><a href="http://www.cushman.com/parts-accessories">Cushman</a></li>
            <li><a id="shopjacobsen" href="http://www.shopjacobsen.com">Jacobsen</a></li>
           
          </ul>
        </li>
      </ul>
        
             <ul class="nav navbar-nav navbar-right" >
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find Your Rep<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="ezgoRep" href="http://www.ezgo.com/Home/Other/DistributorLocator">E-Z-GO</a></li>
            <li><a id="cushmanRep" href="http://suat.cushman.drup.txtazure.com/distributor/distr_include.html">Cushman</a></li>
            <li><a href="http://jacobsen.com/dealer-locator/">Jacobsen</a></li>
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
		
	</header>

	<section class="cd-hero">
		<ul class="cd-hero-slider autoplay">
			<li class="selected">
               
				<div class="cd-full-width">
                    <div class="cta-container" id="ezgoCTA">
                    <h2>LEADERS IN INNOVATION</h2>
					<p>UNRIVALED TECHNOLOGY MAKES E-Z-GO VEHICLES IDEAL FOR ANY COURSE.</p>
					<a href="http://www.ezgo.com/Home/Golf" class="cd-btn">LEARN MORE</a>
                    </div>
                    
                    <div class="logo-right">
                    <img src="img/ezgoLogo.png" alt="EZGO logo"/>
                    </div>
					
				</div> <!-- .cd-full-width -->
			</li>

			<li>
				<div class="cd-full-width">
                    <div class="cta-container" id="cushmanCTA">
                        <h2>RELENTLESS FUNCTIONALITY</h2>
					<p>FROM COURSE MAINTENANCE TO RESORT OPERATIONS, CUSHMAN VEHICLES ARE READY TO WORK</p>
				
					<a href="http://www.cushman.com/golf-proturf" class="cd-btn">Learn More</a>
                    </div>
                    <div class="logo-left">
                    <img src="img/cushmanLogoSlider.png" alt="Cushman Logo"/>
                    </div>
                    
                   
					
				</div> <!-- .cd-half-width -->

				
			</li>

			

			<li>
				

				<div class="cd-full-width">
                    <div class="cta-container" id="jacobsenCTA">
                        <!-- CGH 29-Aug-17 NAINC0018586231 fixed spelling of excellence -->
                        <h2>LEGACY OF EXCELLENCE</h2>
					<p>OVER 95 YEARS OF DELIVERING A LEGENDARY QUALITY OF CUT</p>
					<a href="http://www.jacobsen.com" class="cd-btn">Learn More</a>
                    </div>
					 <div class="logo-right">
                    <img src="img/jacobsenlogo.png" alt="Jacobsen Blade Logo"/>
                    </div>
				</div> <!-- .cd-half-width -->
			</li>
            
            <li>
				<div class="cd-full-width">
                    <div class="cta-container" id="tfmCTA">
                    <h2>OPTIMIZE YOUR FLEET</h2>
					<p>INTELLIGENT FLEET MANAGEMENT AND GPS SOLUTIONS DESIGNED FOR YOUR COURSE</p>
					<a href="http://WWW.TEKGPS.COM" class="cd-btn">Learn More</a>
                    </div>
                    <div class="logo-left" id="tfmLogo">
                    <img src="img/tfmLogoWhite.png" alt= "Textron Fleet Management Logo"/>
                    </div>
                    
                    <div class="logo-left" id="tfmLogoMobile">
                    <img src="img/tfmLogo.png" alt= "Textron Fleet Management Logo"/>
                    </div>
                    
                   
					
				</div> <!-- .cd-half-width -->

				
			</li>
		</ul> <!-- .cd-hero-slider -->

		<!-- .cd-slider -->
    	<ul class="cd-slider-arrows">
			<li><a href="#0" class="next-slide">Next</a></li>
			<li><a href="#0" class="prev-slide">Prev</a></li>
		</ul>

	</section> 
       
            
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                    <div class="text-container quote parallax">
                       
                       <h1>ONE PARTNER. THREE BRANDS. ENDLESS SOLUTIONS.</h1>
                      
            </div>
                </div>
            </div>
        <div class="row">
           
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-container">
                        <div class="text-area">
                            <p>Take three of golf’s most respected and trusted brands, E-Z-GO, Cushman and Jacobsen with more than 250 combined years of serving golf courses and resorts around the world. Empower those brands to build proven, high-performance products, and infuse them with innovative technology that makes them more reliable, easier to maintain and more efficient. Build all of it on the bedrock of a Fortune 500 company renowned for brands and products that fuel progress and defend freedom the world over.</p>
 
<p>Then, stand behind every piece of equipment with TechForce™  the industry’s most extensive service network that’s always ready to exceed every expectation. And support it with leadership and service that enables people and companies that love the game to succeed.</p> 
 
                            
                        </div>
            </div>
                </div>
            <div class="col-md-12"><div class="emphasis"><h2>There’s only one partner that can perfect it—Textron Golf</h2></div></div>
            </div>
        <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 mediaBox">
            <iframe  src="https://www.youtube.com/embed/T1iONI_COLI"  allowfullscreen></iframe>
           <div class="text-container">
                           <div class="text-area">
                <h3>ELiTE™ LITHIUM - THE WAIT IS OVER</h3>
                <p>ELiTE Lithium Series - where your benefits go beyond your cost of operation.  This cutting edge technology gives you a reliable car with a power source that does not fade over time.</p>
            </div>
            </div>

            
            
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 mediaBox">
             <iframe   src="https://www.youtube.com/embed/xibkxTUe2DY"  allowfullscreen></iframe>
          <div class="text-container">
            <div class="text-area">
                <h3>DESIGNED BY SUPERINTENDENTS</h3>
                <p>Cushman<sup>&reg;</sup> worked with superintendents nationwide to develop the new Hauler<sup>&reg;</sup>, collecting dozens of ideas that helped us build an extremely hard working vehicle.</p>
            </div>
            </div>
           
            
        </div>
            <div class="col-md-4 col-sm-6 col-xs-12 mediaBox">
             <iframe   src="https://www.youtube.com/embed/4DPINRsGje0" allowfullscreen></iframe>
                <div class="text-container">
                <div class="text-area">
                <h3>95 YEARS OF QUALITY</h3>
                <p>For 95 years Jacobsen has been committed to designing, building and delivering industry-leading turf maintenance equipment, leading to the legendary quality of cut for which Jacobsen is known throughout the world.
</p>
            </div>
                </div>
               
            
        </div>
        </div>
        
        <footer>
            <div class="container-fluid">
        <div class="row">
        <div class="entry col-md-9 col-sm-9 col-xs-12" >
            <h3>Textron Golf</h3>
            <ul class="footerText">
            <li>Phone: <a href="tel:800.241.5855">800.241.5855</a></li>
            </ul>
        
        </div>
        
      
             <div class="entry col-md-3 col-sm-3 col-xs-12" >
                 <span class="copy">&copy; 2017 Textron Specialized Vehicles Inc. All rights reserved.</span>

         
        
        </div>
            
        </div>
            </div>
        </footer>
            


      <script src="js/main.js"></script>   
      <script>regionDependence('<?php echo $country; ?>');</script>
       
    </body>
    
</html>