<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
          <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kalayatan Express Cargo LPP</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

         <link href="css/owl.carousel.css" rel="stylesheet">
    	<link href="css/owl.theme.default.css" rel="stylesheet">

        <link href="css/royalslider.css" rel="stylesheet">
		<link href="css/rs-default.css" rel="stylesheet">
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

    </head>



	<body id="page-top" class="index">
    	<!-- Navigation -->
    	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container-contact">
                <div class="col-lg-7"></div>
                <div class="col-lg-5 col-xs-12">
                    <span class="contact-span-left"><img src="img/Forma 1-1.png"/>&nbsp;&nbsp; +91 8956655252</span>
                    <span class="contact-span-right"><img src="img/Forma 1.png"/>&nbsp;&nbsp; info@kalayatancargo.com</span>
                </div>
            </div>
    		<div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand img-responsive" href="#page-top"><img src="img/Vector Smart Object.png"/></a>
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
                            <a href="#serve">Industries</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#support">Support</a>
                        </li>
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
                        <span class="name-head">WELCOME TO KALAYATAN CARGO</span>

                        <div class="welcome-msg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>-->
                <div class="ship-quote">
                      <!--<span class="col-lg-3"></span>-->
                      <a href="#" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-toggle="modal" data-target="#working_on_modal1"><span class="ship changecolor">TRACK A SHIPMENT</span></a>
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
                        <span class="our-values-head2">Kalayatan Cargo</span>
                    </span>
               </div>
               <div class="col-lg-12">
                    <div class="welcome">

                      <h1 class="captionhead"> Door To Door Services Across 40 Cities<br> Over 40 Years Of Trust<br> 1 Million Deliveries And Counting....</h1>
                           	We specialize in providing express solutions across Maharashtra and Gujarat.Our specially designed fleet of pack body vehicles ensures safe transportation of materials under all weather conditions.Kalayatan represents a symbiotic combination of Elegance and Hardwork.It represents the additional dimension in whatever we do.It's the additional mile we walk to meet your requirements.It's the additional care we take to deliver your goods.It's the additional efforts we take to understand your business to serve you better.Kalayatan represents our ethos guiding us through your humble beginnings in 1974
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
                        <a class=""  href="branch.php">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" data-icon="map-marker" data-container-transform="translate(6)" viewBox="6 0 20 32" x="0px" y="0px" height="70%" width="100%" style=" margin-top: -150px;" class="supportIcons replaced-svg"><path d="M10 0c-5.5 0-10 4.5-10 10 0 7.5 10 22 10 22s10-14.5 10-22c0-5.5-4.5-10-10-10zm0 5c2.8 0 5 2.2 5 5s-2.2 5-5 5-5-2.2-5-5 2.2-5 5-5z" transform="translate(6)"></path></svg>
                     <span class="welcome3-content-head"></span>

                            <div class="welcome3-content-body"></div>

                           <div class="brochure center-block changecolor">Branch Locator</div>
                            </a>
                        </div>

                        <div class="col-lg-7 col-sm-12 col-xs-12 welcome3-image">


                       <a  href="brochure.php"><div class="brochure center-block " style="border:1px solid #1cbcb4;    margin-top: 348px;width: 39%; text-align: center;font-weight: 600;border-radius: 10px;margin-right: 60px;font-size: 19px; background-color: rgba(0, 0, 0, 0.16);" >Download brochure</div></a>

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
                    	<img class="img-responsive" src="img/Layer 6666.jpg"/>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 value">

                    <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <span class="ind-head-prior"></span>
      <span class="ind-head">Our Values</span> <br /> <br />
      <p style="color:#5E5E5E;"></p>

                <div class="col-lg-12" style="margin-top:70px;">
                        <div class="col-lg-4 text-center">
                    	<img src="img/Layer 3.png"/><br/>
                     	<span class="our-values-row-head">Commitment</span>
                        <p style="font-size:15px;">We believe in fulfilling our commitment to our stakeholders</p>
                     </div>
              		<div class="col-lg-4 text-center">
                    	<img src="img/Layer 4.png"/><br/>
                    	<span class="our-values-row-head">Transparency</span>
                        <p style="font-size:15px;">We believe in total transparency in dealings with all our stakeholders</p>
                     </div>
                     <div class="col-lg-4 text-center">
                     	<img src="img/Layer6.png"/><br/>
                     	<span class="our-values-row-head">Artistic Hardwork</span>
                        <p style="font-size:15px;">We believe in striking the perfect blend of art and hardwork</p>
                     </div>
                     <div class="col-lg-12 text-center">
              	<div class="col-lg-6 text-center">
                	<div class="col-lg-12 text-center">
                     	<div class="col-lg-3 text-center"></div>
                        <div class="col-lg-9 text-center">
                        	<img src="img/Layer 7-1.png"/><br/>
                            <span class="our-values-row-head">Continuous Improvement</span>
                            <p style="font-size:15px;">We believe improvement is a continuous process and we strive to get better everyday</p>
                         </div>
                         <!--<div class="col-lg-2 text-center"></div>-->
                   </div>
                </div>
                <div class="col-lg-6 text-center">
                	<div class="col-lg-12 text-center">
                        <div class="col-lg-9 text-center">
                        	<img src="img/Layer8.png"/><br/>
                            <span class="our-values-row-head">Employee Welfare</span>
                            <p style="font-size:15px;">We believe our greatest assets are our employees and we strive towards their growth,development and satisfaction</p>
                        </div>




                        </div>
                    </div>

      </div>

</div>      </div>

      <div class="item">

<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 value1">
                		<span class="ind-head-prior"></span>
                    	<span class="ind-head">Mission</span> <br /> <br />

                        <p style="color:#5E5E5E;"></p>

                       <h4 style="color:#5E5E5E;margin-top:120px;margin-left: 45px;">To provide seamless connectivity and logistics services to industry and commerce.</h4>





      </div>

</div>


       <div class="item">

<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 value2">
                		<span class="ind-head-prior"></span>
                    	<span class="ind-head">Vision</span> <br /> <br />

                        <p style="color:#5E5E5E;"></p>

                       <p style="color:#5E5E5E;margin-top:120px;text-align:left;margin-left:45px;">To become a top player in the in the logistics industry in India. We see ourselves amongst the top service providers of logistics and allied services.

Be prompt in understanding changing Industry needs and be a market leader in providing value-based Logistics services

To carve out a niche for ourselves on the basis of best practices and top notch service quality.

To cultivate a culture of mutual trust and growth for the benefit of all employees of the company</p>





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
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Request A Quote</h3>
    				<div class="col-lg-12">
                            <form action="mail/quote.php" method="post">
                                <input type="text" name="fullName" placeholder="Full Name" class="contact-form-control"/><br/>
                                <input type="text" name="email" placeholder="Email" class="contact-form-control"/><br/>
                                <input type="text" name="phno" placeholder="Phone Number" class="contact-form-control"/><br/>
                                <textarea name="message" placeholder="Type Message" class="contact-form-control"></textarea><br/>
                                <input type="submit" name="send" value="SEND" class="contact-form-submit"/>
                             </form>
                        </div>

       
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
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Sales Enquiry</h3>
    				<div class="form-group">
						<input type="text" class="form-control" style="background-color:#eeeeee;" id="Full Name" name="Full Name" placeholder="Full Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" style="background-color:#eeeeee;" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control"style="background-color:#eeeeee;" id="mobile" name="mobile" placeholder="Phone Number" required>
					</div>

                    <div class="form-group">
                    <textarea class="form-control" style="background-color:#eeeeee;" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>

        <button type="button" id="submit" name="submit" class="btn btn-primary " style="background-color:#4ab9cf;border-color: #4ab9cf;width:190px;min-height:50px;">SEND MESSAGE </button>
        </form>
        </div>
                        </div>
                	</div>
              	</div>
            </div>
          </div>
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
                    <form>
                    <h3 style="margin-bottom: 25px; text-align: center;">Pick Up Request</h3>
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="firstname" class="form-control" id="exampleInputEmail1" placeholder="First Name">
              </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="lastname" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Your Address</label>
               <!-- <input type="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address">-->
                <textarea rows="4" name="address" placeholder="Enter Your Address" class="form-control"></textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Pincode</label>
                <input type="pincode" class="form-control" id="exampleInputEmail1" placeholder="Pincode">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Description</label>
                <textarea rows="3" name="description" placeholder="Description" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-green pull-right">Submit</button>
            </form>
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
         <div class="container-fluid" style="background-color:#fff;height:1000px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">




          <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:right; margin-right: 50px;
    color: black;"></i></a>




        </nav>

              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">Transportation</h1></center>
              <img class="pull-image-left img-responsive" src="img/Layer55.jpg">  <p> We provide best in class transportation services for your goods. Our fleet of pack body vehicles ensure safe transportation of your goods. We provide part load and full load transportation services which suit the best of your satisfaction. We also provide transport services to and from JNPT.</p>

            </div>
          </div>
          </div>
         <div id="warehousing" class="modal fade" role="dialog">
            <div class="container-fluid" style="background-color:#fff;height:1000px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">




              <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:right; margin-right: 50px;
    color: black;"></i></a>




        </nav>
              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">Warehousing</h1></center>
              <p><img class="pull-image-left" src="img/werehouse1.jpg"> We provide warehousing services to our clients as per their requirement. We offer both short term and long term warehousing services. Our warehouses are located at strategic locations to help our clients to manage their business more effectively.</p>

            </div>
            </div>
          </div>
           <div id="logistics" class="modal fade" role="dialog">
             <div class="container-fluid" style="background-color:#fff;height:1000px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">
        <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:right; margin-right: 50px;
    color: black;"></i></a>
         </nav>
              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">Logistics</h1></center>
       <p><img class="pull-image-left" src="img/logistic1.jpg"> Our presence in transportation and warehousing helps us to provide all round logistics services to our clients. We believe that our expertise in this allows our clients to focus on their core competency. We undertake all activities w.r.t. to inventory management and distribution.</p>
            </div>
            </div>
          </div>
           <div id="custom" class="modal fade" role="dialog">
            <div class="container-fluid" style="background-color:#fff;height:1000px;">


                        <div class="col-lg-12">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="display: block;background:#03a4a5;">
         <a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:45px;float:right; margin-right: 50px;
             color: black;"></i></a>
         </nav>
              <center><h1 style="margin-top:100PX; padding-bottom: 40px;">Customized Solutions</h1></center>
             <p><img class="pull-image-left" src="img/No-vision.jpg">
             <p>We understand the needs of our clients and provide customized solutions that suit the best of their requirements. Our operations team works round the clock to make sure that we meet our client’s requirements and serve them to the best of their satisfaction.
</p>


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
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 services_inner_items zoom">
                    <div class="services_image" style="background-image: url('img/Layer55.jpg')"></div>
                    <div class="services_description">
                        <p>Transportation</p>
                        <div class="services_description_underline"></div>
                        <div class="services_description_content">
                            <span>We provide best in class transportation services for your goods.</span>
                        </div>
                        <a class="services_description_more changecolor" data-toggle="modal" data-target="#transportation">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 services_inner_items">
                    <div class="services_image" style="background-image: url('img/werehouse1.jpg')"></div>
                    <div class="services_description">
                        <p>Warehousing</p>
                        <div class="services_description_underline"></div>
                        <div class="services_description_content">
                            <span>We provide warehousing services to our clients as per their requirement.</span>
                        </div>
                        <a class="services_description_more changecolor" data-toggle="modal" data-target="#warehousing">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 services_inner_items">
                    <div class="services_image" style="background-image: url('img/logistic1.jpg')"></div>
                    <div class="services_description">
                        <p>Logistics</p>
                        <div class="services_description_underline"></div>
                        <div class="services_description_content">
                            <span>Our presence in transportation and warehousing helps us to provide all round logistics services to our clients.</span>
                        </div>
                        <a class="services_description_more changecolor" data-toggle="modal" data-target="#logistics">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 services_inner_items">
                    <div class="services_image" style="background-image: url('img/No-vision.jpg')"></div>
                    <div class="services_description">
                        <p>Customized Solutions</p>
                        <div class="services_description_underline"></div>
                        <div class="services_description_content">
                            <span>We understand the needs of our clients and provide customized solutions that suit the best .... </span>
                        </div>
                        <a class="services_description_more changecolor" data-toggle="modal" data-target="#custom">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- INDUSTRIES WE SERVE -->
     <section class="ind-serve" id="serve">
        <div class="container">
            <div class="col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center bg-white">
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ind-serve-img">
                    	<img class="img-responsive" src="img/Layer 1.jpg"/>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ind-serve-content">
                		<span class="ind-head-prior"></span>
                    	<span class="ind-head">INDUSTRIES WE SERVE</span> <br /> <br />

                        <p style="color:#5E5E5E;"></p>
                        <div class="col-lg-12">
                        	<div class="col-md-6 ">
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-lg-12 col-sm-12  col-xs-12 bottom-ind">
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
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-in-cont" data-toggle="modal" data-target="#working_on_modal2">
                 <span class="ind-bottom-head-prior"></span>
                 <span class="ind-bottom-head">
                       <span class="ind-bottom-head1">Franchise</span>
                       <span class="ind-bottom-head2">Enquiry</span>
                 </span>
             </div>
        </div>

        <div class="clearfix"></div>
	</section>



    <!-- Support section-->
    <section id="support" class="support-section">
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
                        <!--<div><input type="reset" id="pincode_reset" class="support-right-reset"/></div>-->
               </div>
               <div class="col-lg-6 col-md-12 support-right" id="track_shipment">
                    <div class="support-right-head">Track Your Shipment</div>
                    <div class="support-right-head-ul"></div>
                    <div class="col-lg-6 col-lg-offset-3">
                        <img src="img/animated-working-on-it-sign.gif"/>
                    </div>
                        <!--<div><input type="reset" id="track_shipment_reset" class="support-right-reset"/></div>-->
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
                        <!--<i class="fa fa-plus-circle" aria-hidden="true"></i>-->
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
                            <input type="button" onclick="feedbackSubmit()" id="feedback_submit" class="support-right-submit changecolor" value="Submit"/></div>
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
                                    Margaret Tower, Canada Corner , Nashik-422002
                                </p>
                                <span class="contact-inner-head">Sales Office Address:</span>
                                <p>
                                    Kalayatan Cargo, <br/>
                                    B 329,Pranik Chambers,<br/>
                                    Saki Vihar Road, Near Saki Naka Junction, Saki Naka,<br/>
                                    Andheri East, Mumbai - 400072
                                </p>
                                <span class="contact-inner-head">Telephones:</span>
                                <p>
                                    02228575861/62
                                </p>
                                <span class="contact-inner-head">Email:</span>
                                <p>
                                    info@kalayatancargo.com<br/>
                                    sales@kalayatancargo.com
                                </p>
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="mail/sendMessage.php" method="post">
                                <input type="text" name="fullName" placeholder="Full Name" class="contact-form-control"/><br/>
                                <input type="text" name="email" placeholder="Email" class="contact-form-control"/><br/>
                                <input type="text" name="phno" placeholder="Phone Number" class="contact-form-control"/><br/>
                                <textarea name="message" placeholder="Type Message" class="contact-form-control"></textarea><br/>
                                <input type="submit" name="send" value="SEND" class="contact-form-submit"/>
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
                    <div class="footer-above-inner1 col-lg-4 col-md-4 col-sm-4">
                        <div class="footer-logo"><img src="img/Vector Smart Object copy 9.png"/></div>
                        <p class="footer-logo-content">Established in 1974, we are the pioneers in Courier and Cargo services in the Western Maharashtra Industrial belt. We originally began as a courier service for Industry and Commerce. Sensing the changes in business environment we entered the Cargo Industry in 1995. We began as a daily parcel service between Nashik and Mumbai, have now expanded our gamut of services and offerings. We specialize in providing express cargo solutions across Maharashtra and Gujarat. We provide customized solutions that suits your business needs.</p>
                    </div>
                    <div class="footer-above-inner2 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                       	 <div class="col-lg-12 col-md-12 col-sm-12">
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
                       </div>
                    </div>
                    <div class="footer-above-inner3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                        	<div class="col-lg-4 col-md-4 col-sm-4"></div>
                        	<div class="col-lg-4 col-md-4 col-sm-4 quick_link"><span class="">Menu</span></div>
                            <div class="col-lg-4 col-md-4 col-sm-4"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	<div class="col-lg-4 col-md-4 col-sm-4"></div>
                        	<div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="menu_div"><a href="#">Home</a></div>
                                <div class="menu_div"><a href="#">Services</a></div>
                                <div class="menu_div"><a href="#">Support</a></div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="menu_div"><a href="#">About Us</a></div>
                                <div class="menu_div"><a href="#">Industries</a></div>
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

                        <div class="col-lg-10 col-md-10 col-sm-12">Copyright &copy; 2017 Kalayatan Cargo.All rights reserved.</div>
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


   </script>



</body>

</html>
