<?php
	//include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
          <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellspring </title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

         <link href="css/owl.carousel.css" rel="stylesheet">
    	<link href="css/owl.theme.default.css" rel="stylesheet">

        <link href="css/royalslider.css" rel="stylesheet">
		<link href="css/rs-default.css" rel="stylesheet">
        <link href="alertifyjs/css/alertify.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

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

     <style>
     .welcome{
        margin: 1% 7%;
        font-size: 18px;
     }
     .captionhead {
        padding-bottom: 30px;
     }
     .welcome3-content {
        padding-top: 15px !important;
     }
     .welcome3-content h3 {
        text-align: center !important;
     }
     .welcome3-content .small_content{
        
        padding: 5% 10%;
        
     }
	 .cnt{
	 font-size: 19px!important;
	 text-align: left;
	 margin: 0 0 0px!important;
	 }
   .top-25{
    margin-top:25px!important;
   }
     .zoom {
       min-height:320px !important;
     }
     .services_inner_items {
       min-height:300px !important;
     }
     .services_description p {
      float: none;
      text-align: center;
    }
    .services_description {
     box-shadow: none;
   }
   .products li{
    width: 100%;
    text-align: left;
   }
   .industries-content{
    text-align: left!important;
    width:100%;
   }
   .ind-serve {
    padding-bottom: 60px;
  }
  

/*
  .head-prior {
    border-left: solid 18px #43beef!important;
  }
  .contact-form-submit {
    width: 30%;
    background-color: #43beef!important;
  }
  .ind-head-prior {
    border-left: solid 18px #43beef!important;
  }
  .contact-inner-head {
    color: #43beef!important;
  }
  .head-prior1 {
    border-left: solid 18px #43beef!important;
  }
  .welcome3-content {
    background-color: #43beef!important;
  }
*/






     @media (max-width: 700px){
     .welcome3-content{
        height: auto!important;
      }
      .welcome{
        text-align: justify;
      }
      .captionhead {
        text-align: center!important;
        padding-top: 60px!important;
      }
	  .contact-span-right {
        padding-left: 15px;
	  }   
    }
	
	
	
	
	
	.CaptchaWrap { position: relative; }
.CaptchaTxtField { 
  border-radius: 5px; 
  border: 1px solid #ccc; 
  display: block;  
  box-sizing: border-box;
}

#UserCaptchaCode { 
  padding: 15px 10px; 
  outline: none; 
  font-size: 18px; 
  font-weight: normal; 
  font-family: 'Open Sans', sans-serif;
  width: 90%;
}
#CaptchaImageCode { 
  text-align:center;
  margin-top: 15px;
  padding: 0px 0;
  width: 280px;
  overflow: hidden;
}

.capcode { 
  font-size: 46px; 
  display: block; 
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none; 
  cursor: default;
  letter-spacing: 1px;
  color: #ccc;
  font-family: 'Roboto Slab', serif;
  font-weight: 100;
  font-style: italic;
}

.ReloadBtn { 
  background:url('https://cdn3.iconfinder.com/data/icons/basic-interface/100/update-64.png') left top no-repeat;   
  background-size : 100%;
  width: 32px; 
  height: 32px;
  border: 0px; outline none;
  position: absolute; 
  bottom: 30px;
  left : 290px;
  outline: none;
  cursor: pointer; /**/
}
.btnSubmit {
  margin-top: 15px;
  border: 0px;
  padding: 10px 20px; 
  border-radius: 5px;
  font-size: 18px;
  background-color: #1285c4;
  color: #fff;
  cursor: pointer;
}

.error { 
  color: red; 
  font-size: 12px; 
  display: none; 
}
.success {
  color: #1CBCB4;
  font-size: 18px;
  margin-bottom: 15px;
  display: none;
}
	
	
.contact-form-control {	
	margin:3px 0px!important;
}
.btnSubmit{
	margin-left:3px!important;
}
.service-details{
	padding:10px 20px!important;
}
.service-details-head{
	color: #0f252f;
	min-height:100px;
}

.service-details .services_image{
	 box-shadow: inset 0px 0px 125px 75px rgba(30, 77, 101, 0.31)!important;
}
.navbar-brand > img {
    width: 185px;
}
.industries-content {
  padding-top:5px;
}

#contact {
        background-image: url(img/homepage.jpg) !important;
    }
	
	
     </style>

    </head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	


	<body id="page-top" class="index">
    	<!-- Navigation -->
    	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container-contact">
                <div class="col-lg-7"></div>
                <div class="col-lg-5 col-xs-12">
                    <span class="contact-span-left"><img src="img/Forma 1-1.png"/>&nbsp;&nbsp; 9895416009</span>
                    <span class="contact-span-right"><img src="img/Forma 1.png"/>&nbsp;&nbsp; wellspring@gmail.com</span>
                </div>
            </div>
    		<div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand img-responsive" href="#page-top"><img src="img/log.png"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <!--<li class="hidden">
                            <a href="#page-top"></a>
                        </li>-->
                        <li class="page-scroll active">
                            <a href="#header">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#our_values">About Us</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#services">Services</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#serve">Products</a>
                        </li>
                       <!--  <li class="page-scroll">
                            <a href="#support">Support</a>
                        </li> -->
                        <li class="page-scroll">
                            <a href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


    <!-- Header -->
    <section id="header">
    <header>
        <div class="container welcome1">
            <div class="col-lg-12 ns">
                <!--<div class="intro-text col-lg-12"> 

                        <div class="welcome-msg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>-->
                <div class="ship-quote">
                      <!--<span class="col-lg-3"></span>-->
                     <!-- <a href="#" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-toggle="modal" data-target="<?php /*?>#working_on_modal1<?php */?>#working_on_modalsample"><span class="ship changecolor">TRACK A SHIPMENT</span></a>
                      <a href="#" data-toggle="modal" data-target="#working_on_modal_quote" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 quote_spcl">
                      	<span class="quote changecolor" >REQUEST A QUOTE</span></a>
                      <!--<span class="col-lg-3"></span>-->
                </div>

             </div>
         </div>


                <div class='arrow white'>
  <div class='arrowleft'>
  </div>
  <div class='arrowright'>
  </div>
<!--  <div class='bottom'>
  </div>-->

             <div id="chevron">

         <div class="container-fluid welcome2">

            <div class=" welcomepage">
               <div class="col-lg-12">
               		<span class="head-prior1"></span>
                    <span class="our-values-head">
                    	<span class="our-values-head1">Welcome to</span><br/>
                        <span class="our-values-head2">Wellspring </span>
                    </span>
               </div>
               <div class="col-lg-12 ">
                    <div class="welcome">

                      <h1 class="captionhead"> Overview </h1>
                           	  Wellspring consultancy has developed a widely recognised expertise in arranging financing for projects on a limited recourse basis. We are experts in raising long-term, competitively-priced capital. Our creativity and depth of knowledge ensure that our clients receive financially sound and timely solutions for projects across multiple industries
                   	</div>

                </div>
            </div>
        </div>
		</div>
</div>
        <div class="welcome3">
        	<div class="container no_padding" style="margin-top:100px;">
                <div class="col-sx-12">
                   <div class="col-lg-12 ">

                        <div class="col-lg-5 col-sm-12 col-xs-12 welcome3-content">
                          <h3>Company Background</h3>
                          <div class="small_content"> <p class="cnt">Success is trust that others place in you. Having  Wellspring on board not only as a financer but also as an expert advisor we will give your work a seal of quality.</p>

                          <p class="cnt top-25">  Wellspring are respected international importers, exporters, and manufacturer representatives specializing in all types of agricultural products, fertilizers, consumer goods, office supplies, and building materials, combined to form a global commodity trades.</p>

                            <p class="cnt "> </p>
                            <p class="cnt">  </p>
                            <p class="cnt">  </p>
                            <p class="cnt">  </p></div>



                       <!--  <a class=""  href="branch.php">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" data-icon="map-marker" data-container-transform="translate(6)" viewBox="6 0 20 32" x="0px" y="0px" height="70%" width="100%" style=" margin-top: -150px;" class="supportIcons replaced-svg"><path d="M10 0c-5.5 0-10 4.5-10 10 0 7.5 10 22 10 22s10-14.5 10-22c0-5.5-4.5-10-10-10zm0 5c2.8 0 5 2.2 5 5s-2.2 5-5 5-5-2.2-5-5 2.2-5 5-5z" transform="translate(6)"></path></svg>
                     <span class="welcome3-content-head"></span>

                            <div class="welcome3-content-body"></div>

                           <div class="brochure center-block changecolor">Branch Locator</div>
                            </a> -->
                        </div>

                        <div class="col-lg-7 col-sm-12 col-xs-12 welcome3-image">


                       <!-- <a  href="brochure.php"><div class="brochure center-block " style="border:1px solid #1cbcb4;    margin-top: 348px;width: 39%; text-align: center;font-weight: 600;border-radius: 10px;margin-right: 60px;font-size: 19px; background-color: rgba(0, 0, 0, 0.16);" >Download brochure</div></a> -->

                        </div>
                   </div>
               </div>
           </div>
       </div>




    </header>
    </section>

    <!-- Our Values Grid Section -->
  <section class="ind-serve" id="our_values">
        <div class="container">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center bg-white" style="margin-bottom: 50px;">
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ind-serve-img">
                    	<img class="img-responsive" src="img/Layer-6666.jpg"/>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 value">

                    <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
     <!--  <li data-target="#myCarousel" data-slide-to="2"></li> -->


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <span class="ind-head-prior"></span>
      <span class="ind-head">Our Values</span> <br /> <br />
      <p style="color:#5E5E5E;"></p>

                <div class="col-lg-12" style="margin-top:70px;">
                        <div class="col-lg-6 text-center">
                    	<img src="img/Layer 3.png"/><br/>
                     	<span class="our-values-row-head">BUSINESS PLANNING</span>
                        <p style="font-size:15px;"></p>
                     </div>
              		<div class="col-lg-6 text-center">
                    	<img src="img/Layer 4.png"/><br/>
                    	<span class="our-values-row-head">BUSINESS ANALYSIS</span>
                        <p style="font-size:15px;"></p>
                     </div>
                    
                     <div class="col-lg-12 text-center top-25">
              	
				<div class="col-lg-6 text-center">
                        	<img src="img/Layer 7-1.png"/><br/>
                            <span class="our-values-row-head">FINANCIAL PLANNING</span>
                            <p style="font-size:15px;"></p>
                         </div>
				 <div class="col-lg-6 text-center">
                     	<img src="img/Layer6.png"/><br/>
                     	<span class="our-values-row-head">STRATEGY PLANNING</span>
                        <p style="font-size:15px;"></p>
                     </div>
					 
					<!-- <div class="col-lg-6 text-center">
                	<div class="col-lg-12 text-center">
                     	<div class="col-lg-3 text-center"></div>
                        
                         <div class="col-lg-2 text-center"></div>
                   </div>
                </div>-->
					 
               <!-- <div class="col-lg-6 text-center">
                	<div class="col-lg-12 text-center">
                        <div class="col-lg-9 text-center">
                        	<img src="img/Layer8.png"/><br/>
                            <span class="our-values-row-head">Employee Welfare</span>
                            <p style="font-size:15px;">We believe our greatest assets are our employees and we strive towards their growth,development and satisfaction</p>
                        </div>




                        </div>
                    </div>-->

      </div>

</div>      </div>

     <!--  <div class="item">

      <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 value1">
                		<span class="ind-head-prior"></span>
                    	<span class="ind-head">Mission</span> <br /> <br />

                        <p style="color:#5E5E5E;"></p>

                       <h4 style="color:#5E5E5E;margin-top:120px;margin-left: 45px;">To provide seamless connectivity and logistics services to industry and commerce.</h4>

      </div>

</div> -->


       <div class="item">

<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 value2">
                		<span class="ind-head-prior"></span>
                    	<span class="ind-head">Why People Choosing Us</span> <br /> <br />

                        <p style="color:#5E5E5E;"></p>

                       <p style="color:#5E5E5E;text-align:left;margin-left:8%;">


 <p style="color:#5E5E5E;text-align:left;margin-top:100px;margin-left:5%;font-size: 18px;">
                           Business mentors are key that’s why we want to give each of you the time and guidance you deserve. We tailor our financing to the long-term success of your business and help your company to develop to its full potential.
                       </p>
                       <div style="margin-left:5%;"><p class="cnt">Safe & Secure</p>
                       <p class="cnt">Global Solutions</p>
                       <p class="cnt">Trusted Company</p>
                       <p class="cnt">International Experts</p>
                       <p class="cnt">Business Opportunities</p>
                       <p class="cnt">Lifetime Support</p>
                       <p class="cnt">Exclusive Partnerships</p>
                       <p class="cnt">Quality Services</p>
                     </div>
                       


                         <!-- To become a top player in the in the logistics industry in India. We see ourselves amongst the top service providers of logistics and allied services.
Be prompt in understanding changing Industry needs and be a market leader in providing value-based Logistics services

To carve out a niche for ourselves on the basis of best practices and top notch service quality.

To cultivate a culture of mutual trust and growth for the benefit of all employees of the company

-->

</p>

      </div>

</div>



                    </div>

                </div>
            </div>
            </div>



        <div class="clearfix"></div>





	</section>
     <!-- Services Grid Section -->
     <section id="services" class="services_section">


     <div id="working_on_modal_quote" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body popupmodel">
                        <div class="col-lg-12">
                            <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                             <div class="form-area">
       <form role="form" id='id_form'>
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Request A Quote</h3>
    				<div class="col-lg-12">
<!--                            <form <?php /*?>action="mail/sendMessage.php" id="contact_form" method="post"<?php */?>>-->
                                <input type="text" id="Requestname" name="fullName" placeholder="Full Name" class="contact-form-control" required/><br/>
                                <input type="text" id="Requestemail" name="email" placeholder="Email"  class="contact-form-control" required/><br/>
                                <input type="text" id="Requestphone" name="phno" placeholder="Phone Number" class="contact-form-control" required/><br/>
                                <textarea id="Requestmessage" name="message" placeholder="Type Message" class="contact-form-control" required></textarea><br/>

         <button type="submit" id="submit1"  name="submit" class="btn btn-primary mailbutton " style="background-color:#4ab9cf;border-color: #4ab9cf;width:190px;min-height:50px;">SEND MESSAGE &nbsp;&nbsp;&nbsp;<img src="/image/ajax-loader.gif" style="display: none;" id="loading_image"> </button>

<!--</form>-->

                        </div>

        </form>

        </div>
                        </div>
                	</div>
              	</div>
            </div>
          </div>

        <div id="working_on_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body popupmodel">
                        <div class="col-lg-12">
                            <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                             <div class="form-area">
        <form role="form" id="id_form_sales">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Sales Enquiry</h3>
    				<div class="form-group">
						<input type="text" class="form-control" style="background-color:#eeeeee;" id="fullname" name="fullname" placeholder="Full Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" style="background-color:#eeeeee;" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"style="background-color:#eeeeee;" id="mobile" name="number" placeholder="Phone Number" required>
					</div>

                    <div class="form-group">
         <textarea class="form-control" style="background-color:#eeeeee;" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>

        <button type="submit" id="submit"  name="submit" class="btn btn-primary mailbutton " style="background-color:#4ab9cf;border-color: #4ab9cf;width:190px;min-height:50px;">SEND MESSAGE  <img src="image/ajax-loader.gif" style="display: none;" id="loading_image_sales"></button>

        </div>
         </form>

                        </div>
                	</div>
              	</div>
            </div>
          </div>

          <div id="working_on_modal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body popupmodel">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                            <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                             <div class="form-area">
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Sales Enquiry</h3>
    				<div class="form-group">
	<input type="text" class="form-control" style="background-color:#eeeeee;" id="Name of your Company" name="Name of your Company" placeholder="Name of your Company" required>
					</div>
                    <div class="form-group">
	<input type="text" class="form-control" style="background-color:#eeeeee;" id="Locations Interested In" name="Locations Interested In" placeholder="Locations Interested In" required>
					</div>

					<div class="form-group">
						<input type="text" class="form-control"style="background-color:#eeeeee;" id="Phone No" name="Phone No" placeholder="Phone No" required>
					</div>
                    <div class="form-group">
						<input type="text" class="form-control" style="background-color:#eeeeee;" id="Email" name="Email" placeholder="Email" required>
					</div>

                    <div class="form-group">
                    <textarea class="form-control" style="background-color:#eeeeee;" type="textarea" id="Message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>

        <button type="button" id="submit" name="submit" class="btn btn-primary " style="background-color:#4ab9cf;border-color: #4ab9cf;width:190px;min-height:50px;">SEND MESSAGE </button>
        </form>
        </div>
                        </div>
                	</div>
              	</div>
            </div>
          </div>



         </div>



         <div id="transportation" class="modal fade" role="dialog">
         <div class="container-fluid " style="background-color:#fff;height:auto; padding-bottom: 39px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">




          <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:left; margin-left: 50px;
    color: black;"></i></a>




        </nav>

              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">ULTRATECH BPD DIVISION</h1></center>
              <p><img class="pull-image-left img-responsive" src="img/Layer 5new.jpg">
			  <p>UltraTech Cement Ltd. is the largest manufacturer of grey cement, Ready Mix Concrete (RMC) and white cement in India. It is also one of the leading cement producers globally. UltraTech as a brand embodies 'strength', 'reliability' and 'innovation'. Together, these attributes inspire engineers to stretch the limits of their imagination to create homes, buildings and structures that define the new India.</p>
			  <p>Hijaz Buildtech is a building material promoter for Ultratech and we are superstockist for pan Kerala. We do distribution and marketing across Kerala district. We have got a great opportunity to associate with huge projects such as Smart City project, ULCCS limited, Shobha building project at Calicut. We supply our stock for Haya Enterprise Calicut, Conord Lesa Angamaly, Engineering Arcade.</p>
			  </p>
            </div>
          </div>
          </div>
         <div id="warehousing" class="modal fade" role="dialog">
            <div class="container-fluid" style="background-color:#fff;height:auto; padding-bottom: 39px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">




              <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:left; margin-left: 50px;
    color: black;"></i></a>




        </nav>
              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">LOGISTICS</h1></center>
              <p><img class="pull-image-left img-responsive" src="img/werehouse1.jpg">
			  <p>Gati-KWE is an unmatched leader in Express Distribution and Supply Chain Solutions, committed to make their customers’ business always ‘Ahead in reach’ while partnering with them to elegantly customize the delivery offering.</p>
	          <p>Gati-KWE is the most preferred express distribution and supply chain solution provider. Gati-KWE offers services that are customized to the requirements.  We are the channel partner, we are doing a pan India fleet service for Gati.</p>
			   <p></p>
			   </p>
            </div>
            </div>
          </div>
           <div id="logistics" class="modal fade" role="dialog">
             <div class="container-fluid" style="background-color:#fff;height:auto; padding-bottom: 39px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">
        <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:left; margin-left: 50px;
    color: black;"></i></a>
         </nav>
              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">CONSTRUCTION</h1></center>
       <p><img class="pull-image-left" src="img/logistic1.jpg">
	   <p>The expertise of the team at Hijaz Build Tech is behind many construction projects in India. The aesthetics of each building has proven to be strong, environmental friendly and of course, lasting! Our track record includes Schools, Colleges, Automobile Dealerships, Automobile Service Centres, Apartments etc. The quality our team imparts is unparallel and the attention to detail is evident in every millimetre of the projects. We welcome you to get in touch with us for your requirements and our representatives will analyse it and give you a suitable plan.</p>
	   <h3 style="margin-top:20PX; padding-bottom: 0px;">Construction at Harbours</h3>
	   <p>To produce, manufacture, erect, construct, set-up, own, import, export, repair, refurbish, refit, purchase, sell, acquire, lease, hire, charter hire, rent/charter out, lease out, deal, operate in ships/vessels, aircrafts, freight and for any other purpose and to provide rigs, jackets, decks, floating production storage and offloading vessels, offshore platforms, floating and other docks, jetties, supply vessels, tugs, anchor handling vessels, barges and all other types of vessels, structures including floating structures, machinery, equipment, accommodation blocks, helipads, helidecks, apparatus used in or for any kind of activities of drilling and exploration of oils and gases including onshore drilling, offshore drilling, deep water drilling, shallow water drilling, development drilling, marine research, marine exploration and engines, spares and parts of all types and descriptions used for or therein and to provide maintenance, service, support for the same.</p>
       <p>To provide manning, consulting services by deploying crew and officers on vessels, including technical management services, steamer Agency services, stevedoring and shipping services and to operate commercial and non-commercial vessels in India and abroad.</p>
	   <p>To manage, construct, repair, supply, dry docks and float vessels repairing, supply of spares, Floating solutions and services, Construction related services, repair of ports, repair of wharfs in floating of India and Abroad.</p>
	   </p>
            </div>
            </div>
          </div>
           <div id="custom" class="modal fade" role="dialog">
            <div class="container-fluid" style="background-color:#fff;height:auto; padding-bottom: 39px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">
         <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:left; margin-left: 50px;
             color: black;"></i></a>
         </nav>
              <center><h1 style="margin-top:100PX; padding-bottom: 40px; ">Marine Services</h1></center>
            <!-- <p><img class="pull-image-left" src="img/No-vision.jpg">
             <p>We understand the needs of our clients and provide customized solutions that suit the best of their requirements. The service requirements can be different for every client.</p>
			 <p>Our operations team works round the clock to make sure that we meet our client’s requirements and serve them to the best of their satisfaction. It is our expertise and experience in dealing with clients from different industries that helps us provide custom made solutions to our customers.</p>
			 </p>-->
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det1.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Provide manning services to the vessels by deploying crew and officers on board vessels in India or abroad</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det2.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Provide technical management services to the vessel</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det3.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Operate Commercial and non commercial vessels in India and abroad</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det4.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Stevedoring and shipkeroihg services to the vessels in India and abroad</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det5.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Provide Steamer Agency services to the vessels in India and abroad</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det6.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Services related to construction of Ports, wharfs , floating wharfs etc</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det7.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Supply of spares</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 service-details">
                    <div class="services_image" style="background-image: url('img/det8.jpg')"></div>
                    <div class="services_description">
                        <p class="service-details-head">Managing dry docks and afloat vessel repairs</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>details</span>
                        </div>
                        
                    </div>
                </div>
				
			 </div>


          </div>
            </div>
          </div>
        </div>
        </div>
         <div class="container-fluid ">
            <div class="container">
                <div class="col-xs-12">
                    <span class="head-prior"></span>
                    <span class="our-values-head">Our Services</span>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 services_inner">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services_inner_items zoom">
                    <div class="services_image" style="background-image: url('img/Layer 5new.jpg')"></div>
                    <div class="services_description">
                        <p>PETROLEUM PRODUCTS </p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content" style="float:left">
                            <span>Wellspring Trading & consultancy is one of the fastest growing companies in UAE specialized in fesilate Oil and Gas, Marine and Shipping, Fuel Distribution, Refined Energy Products in Commodity trading (LPG, JET FUEL, GAS OIL) and Engineering of equipment supplies and services. Some of our products are JP54,D2 and LNG</span>
                        </div>
                        <!--<a class="services_description_more changecolor" data-toggle="modal" data-target="#transportation">Read More</a>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services_inner_items">
                    <div class="services_image" style="background-image: url('img/werehouse1.jpg')"></div>
                    <div class="services_description">
                        <p>RAW MATERIALS & BUILDING MATERIALS</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content">
                            <span>Iron Ore,Copper Ore,Iron Sand,Nickel Ore,Copper Cathodes,Caustic Soda,Steam Coal,Coking Coal,Green Petroleum Coke,Petroleum Coke,Yellow Corn Germ,Bauxite,Cement,Clinker </span>
                        </div>
                        <!--<a class="services_description_more changecolor" data-toggle="modal" data-target="#warehousing">Read More</a>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services_inner_items">
                    <div class="services_image" style="background-image: url('img/logistic1.jpg')"></div>
                    <div class="services_description">
                        <p>FERTILIZERS</p>
                        <div class="services_description_underline"></div>
                         <div class="services_description_content">
                            <span>Urea (46%),DAP (18-46-0),MAP (11-52-0),MOP (0-0-60),MOP (Standard Pink),Anhydrous Ammonia,N-P-K,UAN 28</span>
                        </div>
                       <!--<a class="services_description_more changecolor" data-toggle="modal" data-target="#logistics">Read More</a> -->
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 services_inner_items">
                    <div class="services_image" style="background-image: url('img/No-vision.jpg')"></div>
                    <div class="services_description">
                        <p>MARINE SERVICES</p>
                        <div class="services_description_underline"></div>
                        <div class="services_description_content">
                            <span></span>
                        </div>
                        <a class="services_description_more changecolor" data-toggle="modal" data-target="#custom">Read More</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


    <!-- INDUSTRIES WE SERVE -->
     <section class="ind-serve" id="serve">
        <div class="container">
            <div class="col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center bg-white">
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ind-serve-img">
                    	<img class="img-responsive" src="img/Layer-1.jpg"/>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ind-serve-content">
                		<span class="ind-head-prior"></span>
                    	<span class="ind-head">Organic Products</span> <br /> <br />

                        <p style="color:#5E5E5E;"></p>
                        <div class="col-lg-12">
                          <div class="col-md-12 ">
                             <span class="industies-head"><span style="color:#b5b4b4">Fresh Fruit And Vegetables</span>  </span>
                               <p class="industries-content ">
                                Our Product Range :
                                <ul class="products">
                                <li>Fresh Fruits</li>
                                <li>Fresh Vegetables</li>
                                <li>Leafy Vegetables</li>
                                <li>Underground / Root Vegetables</li>
                            
                            <p class="industries-content">Wellspring offer great value with our products and services. Introducing innovative ideas in sourcing and exporting, we have managed to improve speed, efficiency and on time delivery. All our operations are supported by a talented, hardworking human resource.</p>
                            <p class="industries-content"><b>100% Natural</b></p>
                            <p class="industries-content">Wellspring Exports carries only the real thing - organic Fresh Fruits and Vegetables and we are dedicated to offering non-GMO products to our customers.</p>
                            <p></p>

                     
                            <p class="industries-content"><b>Always Fresh</b></p>
                            <p class="industries-content">Our dedication to quality ensures that our fruits are picked fresh, shipped fresh, and ready to eat fresh, always</p>
                            <p></p>

                            <p class="industries-content"><b>Organic Products</b></p>
                            <p class="industries-content">All our products are fully certified organic, grown according to international standards, and packed in compostable and renewable packaging materials.</p>
                            <p></p>

                            <p class="industries-content"><b>Best Quality</b></p>
                            <p class="industries-content">We have the highest quality standards which all our produce must meet in order to be fit for your table.</p>
                            <p></p>




                          </div>

                        	<!-- <div class="col-md-6 ">
                            	<span class="industies-head">MOVE</span>
                                <p class="industries-content topMOVE">MOVE is the brainchild of Kalayatan’s Millenial Generation crafted to exclusively serve the E-Commerce industry. Keeping in mind the changing requirements of the industry, MOVE aims to cater to the E-Commerce industry by enabling the players to leverage Kalayatan’s expertise in Logistics. The Management is in the process of creating dedicated infrastructure and resources for this new initiative.</p>  <br />
                               </div>

                            <div class="col-md-6">
                            	<span class="industies-head1 ">MOVE XPReSS</span>
                                <p class="industries-content1 topMOVE">MOVE XPReSS aims to capitalise our rich experience of four decades in 3PL to work with Last Mile Delivery players in E-Commerce. Kalayatan’s strong background in Inter-city goods movement generates value for Last Mile players. We offer a dedicated team of professionals to manage the services under MOVE. This is one of the focus areas of the firm and the Management is committed to provide world-class service.</p><br />
                               </div>
                            <div class="col-md-6">
                                <span class="industies-head" >MOVE FiRST</span>
                                 <p class="industries-content " style="padding-top:48px;">MOVE FiRST is the newest initiative from Kalayatan Group in First Mile Logistics. We work with E-Commerce companies to Pick, Sort, MOVE and Deliver their products within India. At the destination we again SORT the goods and work with Last Mile Delivery players to MOVE and Deliver your goods.</p>
                            </div>

                            <div class="col-md-6">
                                <span class="industies-head1">MOVE DiRECT</span>
                                 <p class="industries-content1 ">MOVE DiRECT delivers goods at the destination. We leverage the network of Last Mile Delivery operators to deliver goods to the consumer. We are looking for Last Mile Delivery partners to associate with us</p>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- <div class="col-lg-12 col-sm-12  col-xs-12 bottom-ind">
           <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 bottom-in-cont" data-toggle="modal" data-target="#working_on_modal">
                  <span class="ind-bottom-head-prior"></span>
                  <span class="ind-bottom-head">
                       <span class="ind-bottom-head1">Sales</span>
                       <span class="ind-bottom-head2">Enquiry</span>
                  </span>
             </div>
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-in-cont" data-toggle="modal" data-target="#working_on_modal1">
		          <span class="ind-bottom-head-prior"></span>
		          <span class="ind-bottom-head">
        	          <span class="ind-bottom-head1">Pick up</span>
                      <span class="ind-bottom-head2">Request</span>
                 </span>
             </div>
     
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-in-cont" data-toggle="modal" data-target="#working_on_modalsample">
            <span class="ind-bottom-head-prior"></span>
                 <span class="ind-bottom-head">
                       <span class="ind-bottom-head1">Franchise</span>
                       <span class="ind-bottom-head2">Enquiry</span>
                 </span>
             </div>
        </div>
 -->         <!--     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-in-cont" data-toggle="modal" data-target="#working_on_modalsample/*<?php /*?>#working_on_modal2<?php */?>"> -->

        <div id="working_on_modalsample" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body popupmodel">
                        <div class="col-lg-12">
                             <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                                     <div class="span3">


                               <!-- <img src="img/animated-working-on-it-sign.gif" style="margin-top:150px;"/>-->
                            </div></div></div>
                            <form role="form" id="id_franchise_enquiry">
              <h3 style="margin-bottom: 25px; text-align: center;">Franchise Enquiry</h3>
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="firstname" class="form-control" id="name" name="fullname" placeholder="First Name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="emailvalue" name="email" placeholder="email" required>
              </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="number" class="form-control" id="contactnumber" name="contactnumber" placeholder="contact" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Your Address</label>
               <!-- <input type="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address">-->
                <textarea rows="4"  placeholder="Enter Your Address" name="address" id="address" class="form-control" required></textarea>
              </div>



              <button type="submit" id="clicker" class="btn btn-green pull-right" >Submit
              <img src="image/ajax-loader_pickup.gif" style="display: none;" id="loading_franchise"></button>
            </form>
                            </div></div></div></div>
 <div id="working_on_modal1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body popupmodel">
                        <div class="col-lg-12">
                             <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                                     <div class="span3">

                                <!--<img src="img/animated-working-on-it-sign.gif" style="margin-top:150px;"/>-->
                            </div>
                        </div>
                	</div>
                    <form role="form" id="id_pickup_request">
              <h3 style="margin-bottom: 25px; text-align: center;">Pick Up Request</h3>
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="firstname" class="form-control" id="firstname" name="fullname" placeholder="First Name">
              </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="lastname" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Your Address</label>
               <!-- <input type="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address">-->
                <textarea rows="4"  placeholder="Enter Your Address" name="address" id="pickupaddress" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Pincode</label>
                <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Description</label>
                <textarea rows="3" name="description" placeholder="description" id="description" class="form-control" required></textarea>
              </div>
              <button type="submit" id="clicker" class="btn btn-green pull-right" >Submit
              <img src="/image/ajax-loader_pickup.gif" style="display: none;" id="loading_image_pickup"></button>
            </form>
              	</div>
            </div>
          </div>
        <div class="clearfix"></div>
	</section>



    <!-- Support section-->
    <!-- <section id="support" class="support-section">
        <div class="container">
            <div class="row support-top">
                 <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                 	<span class="head-prior"></span>
                    <span class="our-values-head">SUPPORT</span>
                    <div class="col-lg-12 col-sm-12 col-xs-12 support-left-main">
                    	<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 support-left-inner-active hyperLink" onclick="supportpages('weightCalculator',this)">

                        	<img src="img/volumetric1.svg" class="supportIcons"/>

                            <div class="support-left-inner-cont">VOLUMETRIC WEIGHT CALCULATOR</div>

                        </div>

                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 support-left-inner hyperLink" onclick="supportpages('pincodesServed',this)">
                             <img src="img/pin1.svg" class="supportIcons"/>
                             <div class="support-left-inner-cont">PINCODES SERVED</div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 support-left-inner hyperLink" onclick="supportpages('trackShipment',this)">
                             <img src="img/shipment1.svg" class="supportIcons" style="margin: 10px 45px;"/>
                             <div class="support-left-inner-cont">TRACK YOUR SHIPMENT</div>
                        </div>
                          <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 support-left-inner hyperLink" onclick="supportpages('feedback',this)">
                            <img src="img/comments1.svg" class="supportIcons"/>
                            <div class="support-left-inner-cont">FEEDBACK</div>
                       </div>
                       <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 support-left-inner hyperLink" onclick="supportpages('faq',this)">
                            <img src="img/info1.svg" class="supportIcons"/>
                            <div class="support-left-inner-cont">FAQ</div>
                       </div>

                  </div>
              </div>
              <div class="col-lg-6 col-md-12 support-right" id="volumetric_calculator">
                  <div class="support-right-head">Volumetric Weight Calculator</div>
                  <div class="support-right-head-ul"></div>
                  <div class="support-right-label">Height*</div>
                  <div><input type="number" class="support-right-text" id="volumetric_height" placeholder="In centimeters"/></div>
                  <div class="support-right-label">Length*</div>
                  <div><input type="number" class="support-right-text" id="volumetric_length" placeholder="In centimeters"/></div>
                  <div class="support-right-label">Width*</div>
                  <div><input type="number" class="support-right-text" id="volumetric_width" placeholder="In centimeters"/></div>
                  <div class="support-right-label">Volumetric Weight (in kg)*</div>
                  <div><input type="number" class="support-right-text" id="volumetric_total_kg" placeholder="0.000kg" disabled/></div>
                  <div class="support-right-label">Volumetric Weight (in pounds)*</div>
                  <div><input type="number" class="support-right-text" id="volumetric_total_pound" placeholder="0.00lb" disabled/></div>
                   <div><input type="reset" id="volumetric_reset" class="support-right-reset changecolor"/></div>
              </div>

              <div class="col-lg-6 col-md-12 support-right" id="pincode_served">
                   <div class="support-right-head">Pincodes Served</div>
                   <div class="support-right-head-ul"></div>
                   <div class="col-lg-6 col-lg-offset-3">
                        <img src="img/animated-working-on-it-sign.gif"/>
                    </div>
                       
               </div>
               <div class="col-lg-6 col-md-12 support-right" id="track_shipment">
                    <div class="support-right-head">Track Your Shipment</div>
                    <div class="support-right-head-ul"></div>
                    <div class="col-lg-6 col-lg-offset-3">
                    <form name="shipment" action="http://kalayatan.southeastasia.cloudapp.azure.com/Kalayatan/GUI/Tracking_New1/Website/TrackConsignment.aspx" method="get" target="_blank" >
                    <div class="support-right-label">Shipment Id *</div>
                  <div><input type="text" name="CONSIGNMENT" class="support-right-text" style="margin-bottom:20px;" required placeholder="Shipment Id"/></div>
                    
                    </div>
                    <br>
                       <input type="submit"  id="feedback_submit" class=" changecolor center-block" style="background: #707070;padding: 14px 27px;color: #fff;margin-top: 26px;font-size: 22px;" value="Check Status"/></div>
                    </form>
                      
               </div>
               <div class="col-lg-6 col-md-12 support-right" id="branch_locator">
                    <div class="support-right-head">Branch Locator</div>
                    <div class="support-right-head-ul"></div>
                    <div class="support-right-label">State*</div>
                    <div><select class="support-right-text" id="state">
                             <option>---Select a State---</option>
                             <?php
                                $result = mysqli_query($connection, "SELECT * FROM vuoto_states");
                                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                {
                             ?>
                                   <option value="<?php echo $row["stateid"];?>"><?php echo $row["statename"];?></option>
                             <?php } ?>
                         </select></div>
                        <div class="support-right-label">District*</div>
                                <div><select class="support-right-text" id="district">
                                   <option>---Select a District---</option>
                            </select></div>
                        <div>
                        <div id="branch"></div>
                        <input type="reset" id="barnch_locator_reset" class="support-right-reset changecolor"/></div>
                     </div>
                     <div class="col-lg-6 col-md-12 support-right" id="faq">
                     	<div class="support-right-head">FAQ</div>
                        <div class="support-right-head-ul"></div>
                        
                        <div class="col-lg-6 col-lg-offset-3">
                        <img src="img/animated-working-on-it-sign.gif"/>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 support-right" id="feedback">
                     	<div class="support-right-head">Feedback</div>
                        <div class="support-right-head-ul" style="margin-bottom:50px;"></div>
                        <form name="feedbackForm" id="feedbackForm">
                        <div><input type="text" class="support-right-text" id="feedback_name" placeholder="Name" name="fname"/></div>

                        <div><input type="text" class="support-right-text" id="feedback_email" placeholder="Email" name="femail"/></div>

                        <div><input type="text" class="support-right-text" id="feedback_phone" placeholder="Phone No." name="fphone"/></div>

                        <div><textarea class="support-right-textarea" id="feedback_message" rows="5" placeholder="Message" name="fmsg"></textarea></div>
                        <div id="success"></div>
                        <div><input type="reset" id="feedback_reset" class="support-right-submit changecolor"/>
                            <input type="submit"  id="feedback_submit" class="support-right-submit changecolor" value="Submit"/></div>
                        </form>
                     </div>
                 </div>
            </div>
        </div>
        <div class="col-lg-12 our_clients">
        	<div class="our_clients_head">
                 <div class="col-lg-4"></div>
                  <div class="col-lg-4">
                    <div class="col-lg-12">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">

                            <span class="ind-head-prior"></span>
                              <span class="ind-head">  Our Clients</span> <br /> <br />
                         </div>
                         <div class="col-lg-3"></div>
                     </div>
                  </div>
                  <div class="col-lg-4"></div>
              </div>
              <div class="clearfix"></div>
              <div class="our_clients_inner col-lg-12">

				<div id="our-clients-demo">

                  <div class="item"><img src="img/cl1.png"/></div>
                  <div class="item"><img src="img/cl2.png"/></div>
                  <div class="item"><img src="img/cl3.png"/></div>
                  <div class="item"><img src="img/cl4.png"/></div>
                  <div class="item"><img src="img/cl5.png"/></div>
                  <div class="item"><img src="img/cl6.png"/></div>
                  <div class="item"><img src="img/cl7.png"/></div>
                  <div class="item"><img src="img/cl8.png"/></div>
                    <div class="item"><img src="img/cl9.png"/></div>

                </div>

              </div>
           </div>
           <div class="clearfix"></div>
    </section>
 -->



    <!-- Contact Section -->
    <section id="contact">
    	<div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <span class="head-prior"></span>
                            <span class="contact-head">Contact Us</span>
                            <div class="contact-inner">
                                <span class="contact-inner-head">Address:</span>
                                <p>
                                  Wellspring Consultancy </br>
                                  Address</br>
                                   </br>
                                   </br> 
								  
                                 
                                </p>
                                <!-- <span class="contact-inner-head">Sales Office Address:</span>
                                <p>
                                    Kalayatan Cargo, <br/>
                                    B 329, Pranik Chambers,<br/>
                                    Saki Vihar Road, Near Saki Naka Junction, Saki Naka,<br/>
                                    Andheri East, Mumbai - 400072
                                </p> -->
                                 
                                <span class="contact-inner-head">GST NO:</span>
                                <p>
                                    
                                </p>
                                 <span class="contact-inner-head">Email:</span>
                                <p>
                                    info@Wellspring.com
                                    
                                </p>
                                <span class="contact-inner-head">Telephone:</span>
                                <p>
                                    000-0000000
                                </p>
                               
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <form id="id_contact" role="form">
                                <input type="text" name="fullName" id="fullName" placeholder="Full Name" class="contact-form-control CaptchaTxtField" required/><br/>
                                <input type="text" name="email" id="E_mail" placeholder="Email" class="contact-form-control CaptchaTxtField" required/><br/>
                                <input type="text" name="phno" id="phno" placeholder="Phone Number" class="contact-form-control CaptchaTxtField" required/><br/>
                                <textarea name="message" id="Messsage_value" placeholder="Type Message"  class="contact-form-control CaptchaTxtField" required></textarea><br/>
                                
						
  <fieldset>
    <span id="SuccessMessage" class="success">Your have successfully entered the captcha.</span>
    <input type="text" id="UserCaptchaCode" class="CaptchaTxtField contact-form-control" placeholder='Enter Captcha - Case Sensitive'>
    <span id="WrongCaptchaError" class="error"></span>
    <div class='CaptchaWrap'>
      <div id="CaptchaImageCode" class="CaptchaTxtField contact-form-control">
        <canvas id="CapCode" class="capcode" width="300" height="80"></canvas>
      </div> 
      <input type="button" class="ReloadBtn" onclick='CreateCaptcha();'>
    </div>
    <input type="button" class="btnSubmit " onclick="CheckCaptcha();" value="Submit">
	<span id="SuccessMail" class="success">Message sent successfully </span>
  </fieldset>

								
								<!--<button type="submit" id="submit" name="send" value="SEND" class="contact-form-submit"/>SEND
                                </button>-->

                             </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>
	
	

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-above-inner1 col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-logo"><img style="width:290px" src="img/log.png"/></div>
                        <p class="footer-logo-content"></p>
                    </div>
                    <div class="footer-above-inner2 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <!--     	 <div class="col-lg-12 col-md-12 col-sm-12">
                         	<div class="col-lg-4 col-md-4 col-sm-4 quick_link"><span class="">Quick Links</span></div>
                        	<div class="col-lg-4 col-md-4 col-sm-4 "> </div><div class="col-lg-4"> </div>
                         </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          	<div class="col-lg-4 col-md-4 col-sm-4 ">
                                <div class="quick_link_div"><a href="#services" class="quick_link_a">MOVE</a></div>
                                <div class="quick_link_div"><a href="#services" class="quick_link_a">MOVE FIRST</a></div>
                                <div class="quick_link_div"><a href="#services" class="quick_link_a">BRANCH LOCATOR</a></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                               <div class="quick_link_div"> <a href="#services" class="quick_link_a">MOVE XPReSS</a></div>
                               <div class="quick_link_div"> <a href="#services" class="quick_link_a">MOVE DiRECT</a></div>
                               <div class="quick_link_div"> <a href="#services" class="quick_link_a">TRANSPORTATION</a></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="quick_link_div"><a href="#services" class="quick_link_a">3PL</a></div>
                                <div class="quick_link_div"><a href="#services" class="quick_link_a">WAREHOUSING</a></div>
                            </div>
                       </div>-->
                    </div>
                    <div class="footer-above-inner3 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                        	<div class="col-lg-4 col-md-4 col-sm-4"></div>
                        	<div class="col-lg-4 col-md-4 col-sm-4 quick_link"><span class="">Menu</span></div>
                            <div class="col-lg-4 col-md-4 col-sm-4"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	<div class="col-lg-4 col-md-4 col-sm-4"></div>
                        	<div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="menu_div"><a href="#header">Home</a></div>
                                <div class="menu_div"><a href="#services">Services</a></div>
                               <!--  <div class="menu_div"><a href="#support">Support</a></div> -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="menu_div"><a href="#our_values">About Us</a></div>
                                <div class="menu_div"><a href="#serve">Products</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-lg-12">

                        <div class="col-lg-10 col-md-10 col-sm-12">Copyright &copy;<?php echo date("Y"); ?> Wellspring Consultancy. All rights reserved.</div>
                        <div class="col-lg-2 col-md-2 col-sm-12" style="text-align:right;">
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

   <script type="text/javascript" src="js/royalslider.min.js"></script>

   
   <script>
   var cd;

$(function(){
  CreateCaptcha();
});

// Create Captcha
function CreateCaptcha() {
  //$('#InvalidCapthcaError').hide();
  var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                    
  var i;
  for (i = 0; i < 6; i++) {
    var a = alpha[Math.floor(Math.random() * alpha.length)];
    var b = alpha[Math.floor(Math.random() * alpha.length)];
    var c = alpha[Math.floor(Math.random() * alpha.length)];
    var d = alpha[Math.floor(Math.random() * alpha.length)];
    var e = alpha[Math.floor(Math.random() * alpha.length)];
    var f = alpha[Math.floor(Math.random() * alpha.length)];
  }
  cd = a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f;
  $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')
  
  var c = document.getElementById("CapCode"),
      ctx=c.getContext("2d"),
      x = c.width / 2,
      img = new Image();

  img.src = "https://pixelsharing.files.wordpress.com/2010/11/salvage-tileable-and-seamless-pattern.jpg";
  img.onload = function () {
      var pattern = ctx.createPattern(img, "repeat");
      ctx.fillStyle = pattern;
      ctx.fillRect(0, 0, c.width, c.height);
      ctx.font="46px Roboto Slab";
      ctx.fillStyle = '#ccc';
      ctx.textAlign = 'center';
      ctx.setTransform (1, -0.12, 0, 1, 0, 15);
      ctx.fillText(cd,x,55);
  };
  
  
}

// Validate Captcha
function ValidateCaptcha() {
  var string1 = removeSpaces(cd);
  var string2 = removeSpaces($('#UserCaptchaCode').val());
  if (string1 == string2) {
    return true;
  }
  else {
    return false;
  }
}

// Remove Spaces
function removeSpaces(string) {
  return string.split(' ').join('');
}

// Check Captcha
function CheckCaptcha() {
  var result = ValidateCaptcha();
  if( $("#UserCaptchaCode").val() == "" || $("#UserCaptchaCode").val() == null || $("#UserCaptchaCode").val() == "undefined") {
    $('#WrongCaptchaError').text('Please enter code given below in a picture.').show();
    $('#UserCaptchaCode').focus();
  } else {
    if(result == false) { 
      $('#WrongCaptchaError').text('Invalid Captcha! Please try again.').show();
      CreateCaptcha();
      $('#UserCaptchaCode').focus().select();
    }
    else { 
      $('#UserCaptchaCode').val('').attr('place-holder','Enter Captcha - Case Sensitive');
      CreateCaptcha();
      $('#WrongCaptchaError').fadeOut(100);
      $('#SuccessMessage').fadeIn(500).css('display','block').delay(5000).fadeOut(250);
	  
	  var email = $("#E_mail").val();
			var name = $("#fullName").val();
			var telephone = $("#phno").val();
			var text = $("#Messsage_value").val();
			var subject = "Get in touch";
			
	  $.ajax({
        type: "POST",
        url: 'http://3.17.29.212/wellspring/send_mail.php',
        data: {email: email, name: name, subject: subject, text: text, telephone: telephone},
        success: function() {
			//$('#SuccessMail').fadeIn(500).css('display','block').delay(5000).fadeOut(250);
			alert(" Message sent successfully ");
			$('#E_mail').val('');
			$('#fullName').val('');
			$('#phno').val('');
			$('#Messsage_value').val('');
        }
        });
    }
  }  
}
   </script>
   
   


  
	
	
	<script>
	 $("#id_contact").on("submit", function(){
	 $('#loading_image_contact').show();
            //    var settings = {
  //"url": "http://jmecouture.com/mailMaster/KalayatanMail/api/index.php/Welcome/contact",
  //"method": "POST",
  //"headers": {
  //  "content-type": "application/x-www-form-urlencoded"
  //},
 // "data": {
  //  "fullName": $('#fullName').val(),
   // "email":  $('#E_mail').val(),
   // "phno":  $('#phno').val(),
   // "Message":  $('#Messsage_value').val(),
   //alert("hai");
		  
		    var email = $("#E_mail").val();
			var name = $("#fullName").val();
			var telephone = $("#phno").val();
			var text = $("#Messsage_value").val();
			var subject = "Get in touch";
			var varData = {
							 "email"      : email , 
							 "name"       : name, 
							 "subject"    : subject, 
							 "text"       : text ,
							 "telephone"  : telephone
						   }; //This is your data in JSON form

			//console.log(varData);
		   // alert("hai");
	  
		  $.ajax({
        //url: "http://hijazbuildtech.com/send_mail.php"   
      });
  

//alert(JSON.stringify(data.fullName));
//$.ajax(settings).done(function (response) {
// $('#loading_image_contact').hide();
 //alert('E-mail successfully Sent');
 //window.location.replace("http://hijazbuildtech.com/");
//});

 });
 </script>

   
   
   
   


   <script type="text/javascript">
        window.scrollTo(0,0);
           $("#mainNav").hide();
   	$(document).ready(function () {
           window.scrollTo(0,0);
           $("#mainNav").show();

	});



    $('.services_inner_items').hover(function(){
      $(".services_inner_items").removeClass("zoom");
          $(this).addClass("zoom");
    })

    $(document).ready(function() {

      $("#our-clients-demo").owlCarousel({

          autoPlay: 1000, //Set AutoPlay to 3 seconds

          items : 5,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]

      });

	   $('#content-slider-1').royalSlider({
		autoHeight: true,
		arrowsNav: false,
		controlNavigation: 'bullets',
		imageScaleMode: 'none',
		imageAlignCenter:false,
		loop: true,
		loopRewind: true,
		numImagesToPreload: 6,
		keyboardNavEnabled: true,
		usePreloader: false,
		 autoPlay:{
		  enabled:true,
		  delay: 3000,
		  pauseOnHover: true
    },

	/*
	 arrowsNav: true,
    autoPlay:{
      enabled:true,
      delay: 6000
    },
    arrowsNavAutoHide: true,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'none',
    imageScaleMode: 'fill',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    numImagesToPreload: 6,
    transitionType: 'fade',
    keyboardNavEnabled: true,
    block: {
      delay: 400
    }
  }).data("royalSlider"); // assign the RS to a variable

  mySliderInstance.ev.on('rsAfterSlideChange', function(event) {

    $( ".hidden1" ).fadeOut('slow');

	*/
  });

    });

 $("#id_form1").on("submit", function(){
	 $('#loading_image').show();
                var settings = {
  "url": "http://jmecouture.com/mailMaster/KalayatanMail/api/index.php/Welcome/requestquote",
  "method": "POST",
  "headers": {
    "content-type": "application/x-www-form-urlencoded"
  },
  "data": {
    "fullName": $('#Requestname').val(),
    "email":  $('#Requestemail').val(),
    "phno":  $('#Requestphone').val(),
    "message":  $('#Requestmessage').val()
  }
}
$.ajax(settings).done(function (response) {
 $('#loading_image').hide();
 //alert('E-mail successfully Sent');
 window.location.replace("http://3.17.29.212/wellspring");
});
return false;
 })

   </script>
   <script>
		 $("#id_form_sales1").on("submit", function(){
	 $('#loading_image_sales').show();
                var settings = {
  "url": "http://jmecouture.com/mailMaster/KalayatanMail/api/index.php/Welcome/sales",
  "method": "POST",
  "headers": {
    "content-type": "application/x-www-form-urlencoded"
  },
  "data": {
    "fullName": $('#fullname').val(),
    "email":  $('#email').val(),
    "phno":  $('#mobile').val(),
    "message":  $('#message').val()
  }
}
$.ajax(settings).done(function (response) {
 $('#loading_image_sales').hide();
 //alert('E-mail successfully Sent');
 //window.location.replace("http://www.kalayatancargo.com/");
});
return false;
 })
		 </script>

<script type="text/javascript"> _linkedin_partner_id = "266275"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=266275&fmt=gif" /> </noscript>
</body>

</html>
