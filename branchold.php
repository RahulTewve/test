<!DOCTYPE html>
<?php
	include("connection.php");
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalayatan Cargo</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    
    


    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">
        <a href="index.php"> <i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:left; margin-left: 50px;
            color: black;"></i></a>
         </nav>
 

  


    
         <div class="container welcome2" >
            <div class="row">
               <div class="col-lg-12" style="margin-top:235px;margin-left: 25px;">
                	<span class="head-prior"></span>
                    <span class="our-values-head">Branch Locator</span>
                </div>
               </div>
            
            </div>
        </div>
 <center>
    <div class="form-group has-float-label" style="width:50%;margin-top:80px;">
      <select class="form-control custom-select" id="state" style="height:50px;font-size: 20px;">
              <option selected>Select State</option>
        <?php
                                $result = mysqli_query($connection, "SELECT * FROM vuoto_states");
                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                {
                             ?>
                                   <option value="<?php echo $row["stateid"];?>"><?php echo $row["statename"];?></option>
                             <?php } ?>

        
      </select>

    </div>
    </center>
     <center>
    <div class="form-group has-float-label" style="width:50%;margin-top:50px;">
      <select class="form-control custom-select" id="district" style="height:50px;font-size: 20px;">
        <option selected>Select District</option>
      
      </select>

    </div>
    </center>
       
        
    </header>
    </section>
    
      <!-- >Branch Locator -->
    

   <div class="container welcome2" >
            <div class="row">
               <div class="col-lg-12" style="margin-top:100px;margin-left: 25px;margin-bottom:100px;">
                	<span class="head-prior"></span>
                    <span class="our-values-head">Stations</span>
                </div>
               </div>
            
            </div>
        </div>
    
   
<!-- Stations -->


<div class="container" style="margin-bottom:50px;">
<div class="row" id="branch">
<!--
<div class="col-lg-4 station_col">
  <div class="station_inner">
    <p class="stn_name">Rajkot (Bhaktinagar)</p>
    <div class="gmap_div">
    <iframe class="gmap_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7383.446553766638!2d70.79158957276464!3d22.288469891318723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca111e975f81%3A0x75c5b183746adadc!2sManhar+Plot%2C+Bhakti+Nagar%2C+Rajkot%2C+Gujarat%2C+India!5e0!3m2!1sen!2sin!4v1482928132528" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    <div class="overlay_div"></div>
    </div>
    <p>Sheri No.13, Manhar Plot, Bhaktinagar,<br>
Rajkot<br>
</p>
    <p>Contact No:&nbsp;&nbsp;0281-2466237</p>
    <p>7041601891</p>
  </div>
</div>
                           
                            
							 <div class="col-lg-4 station_col">
  <div class="station_inner">
    <p class="stn_name">Rajkot (Kuwadava)</p>
    <div class="gmap_div">
    <iframe class="gmap_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7379.593841156821!2d70.95006981619723!3d22.361295640896653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b1049f95be75%3A0x943dc6393c57e185!2sKuvadva%2C+Gujarat+360023%2C+India!5e0!3m2!1sen!2sin!4v1482927774121" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    <div class="overlay_div"></div>
    </div>
    <p>6, Lati Plot, Kuwadava, Rajkot</p>
    <p>Contact No:&nbsp;&nbsp;7041601892</p>
    <p></p>
  </div>
</div>
                           
                            
							 <div class="col-lg-4 station_col">
  <div class="station_inner">
    <p class="stn_name">Rajkot (Navagam)</p>
    <div class="gmap_div">
    <iframe class="gmap_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29529.06169931496!2d70.82748024549313!3d22.310820110340295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b6730973a7b5%3A0x3f14671a7d342cc9!2sNavagam%2C+Rajkot%2C+Gujarat+360003%2C+India!5e0!3m2!1sen!2sin!4v1482928313719" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    <div class="overlay_div"></div>
    </div>
    <p>Dam Road, Navagam, Rajkot</p>
    <p>Contact No:&nbsp;&nbsp;0281-2702090</p>
    <p>7041601893</p>
  </div>
</div>
       -->                    
                            
</div>							  

						

</div>
</div>
 
 


	
    
     
   
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-above-inner1 col-md-4">
                        <div class="footer-logo"><img src="img/Vector Smart Object copy 9.png"/></div>
                        <p class="footer-logo-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                   <!-- <div class="footer-above-inner2 col-md-4">
                       	 <div class="col-lg-12">
                         	<div class="col-lg-4 quick_link"><span class="">Quick Links</span></div>
                        	<div class="col-lg-4"> </div><div class="col-lg-4"> </div>
                         </div>
                        <div class="col-lg-12">
                          	<div class="col-lg-4">                            	
                                <div class="quick_link_div"><a href="#" class="quick_link_a">MOVE</a></div>
                                <div class="quick_link_div"><a href="#" class="quick_link_a">MOVE FIRST</a></div>
                                <div class="quick_link_div"><a href="#" class="quick_link_a">BRANCH LOCATOR</a></div>
                            </div>
                            <div class="col-lg-4">
                               <div class="quick_link_div"> <a href="#" class="quick_link_a">MOVE XPReSS</a></div>
                               <div class="quick_link_div"> <a href="#" class="quick_link_a">MOVE DiRECT</a></div>
                               <div class="quick_link_div"> <a href="#" class="quick_link_a">TRANSPORTATION</a></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="quick_link_div"><a href="#" class="quick_link_a">3PL</a></div>
                                <div class="quick_link_div"><a href="#" class="quick_link_a">WAREHOUSING</a></div>
                            </div>
                       </div>
                    </div> -->
                    <div class="footer-above-inner3 col-md-4">
                    	<div class="col-lg-12">
                        	<div class="col-lg-4"></div>
                        	<div class="col-lg-4 quick_link"><span class="">Menu</span></div>
                            <div class="col-lg-4"></div>
                        <div class="col-lg-12">
                        	<div class="col-lg-4"></div>
                        	<div class="col-lg-4">
                                <div class="menu_div"><a href="index.php/#header">Home</a></div>
                                <div class="menu_div"><a href="index.php/#services">Services</a></div>
                                <div class="menu_div"><a href="index.php/#support">Support</a></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="menu_div"><a href="index.php/#our_values">About Us</a></div>
                                <div class="menu_div"><a href="index.php/#serve">Industries</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="col-lg-4"></div>
                        <div class="col-lg-4">Copyright &copy; 2015 Kalayatan Cargo.All rights reserved.</div>
                        <div class="col-lg-4" style="text-align:right;">
                        	<img src="img/Twitter Filled-25 copy 3.png"/>
                            <img src="img/Facebook Filled-25 copy 3.png" style="margin-left:20px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
   
   
   <script src="js/owl.carousel.min.js"></script>
   
   <!-- Custom JS -->
   <script type="text/javascript" src="js/app.js"></script>
   
   <script type="text/javascript">
        window.scrollTo(0,0);
           $("#mainNav").hide();
   	$(document).ready(function () {
           window.scrollTo(0,0);
           $("#mainNav").show();
		
	});
   </script>

<style>
.navbar-custom {
    background: none;
    background: #bbc4c8 !important;
    background: rgba(0, 0, 0, 0) url(../img/navbg.jpg) no-repeat fixed center center / cover;
    padding: 0 !important;
    margin-top: 0 !important;
}
</style>

</body>

</html>
