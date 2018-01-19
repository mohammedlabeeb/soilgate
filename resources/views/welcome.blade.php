<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> SoilGate | Home </title>
<link href="{{URL::asset('assets/landing/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('assets/landing/js/jquery-1.11.0.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{URL::asset('assets/landing/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Appliance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!--google fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{URL::asset('assets/landing/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/landing/js/easing.js')}}"></script>
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- //end-smoth-scrolling -->
<!-- animated-css -->
        <link href="{{URL::asset('assets/landing/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
        <script src="{{URL::asset('assets/landing/js/wow.min.js')}}"></script>
        <script>
         new WOW().init();
        </script>
<!-- animated-css --> 
</head>
<body>
<!--banner start here-->
 <div class="banner">
    <div class="container">
        <div class="banner-main">
             <div class="logo wow bounceInLeft" data-wow-delay="0.1s">
                <h1><a href="{{ url('/') }}/"><img src="{{URL::asset('assets/landing/images/logo-w.png')}}" /></a></h1>
             </div>
            <div class="top-nav-w3layouts">
                <div class="menu" >
                    <a href="#" id="m_nav_menu" class="navicon"></a> 
                    <div class="toggle"> 
                        <ul id="m_nav_list" class="toggle-menu">
                            
                            <li class="m_nav_item"><a href="#about" class="navicon1 scroll"> How it Works</a></li>
                            <li class="m_nav_item"><a href="#services" class="navicon1 scroll"> Products</a></li>
                            <li class="m_nav_item"><a href="#faqs" class="navicon1 scroll"> FAQs</a></li>
                            <li class="m_nav_item"><a href="#gallery" class="navicon1 scroll"> Gallery</a></li>
                            <li class="m_nav_item"><a href="#contact" class="navicon1 scroll"> Contact</a></li>
                            @if (Auth::guest())
                            <li class="m_nav_item nav-btn"><a href="{{ url('/login') }}" class=" "> Login</a></li>
                            <li class="m_nav_item nav-btn"><a href="{{ url('/register') }}" class=" "> Signup</a></li>
                             @else
                              <li class="m_nav_item nav-btn"><a href="{{ url('/home') }}" class=" "> {{ Auth::user()->name }}</a></li>
                            <li class="m_nav_item nav-btn"><a href="{{ url('/logout') }}" class=" "> Logout</a></li>
                             @endif
                        </ul>
                    </div> 
                </div>   
                <!-- menu-js -->
                <script>
                    $('.navicon').on('click', function (e) {
                      e.preventDefault();
                      $(this).toggleClass('navicon--active');
                      $('.toggle').toggleClass('toggle--active');
                    });
                    
                </script>
                <script>
                    $('.navicon1').on('click', function (e) {  
                        e.preventDefault();  
                        $('.toggle').toggleClass('toggle--active');
                        $('.navicon').toggleClass('navicon--active');
                    });
                </script> 
                <!-- //menu-js -->
            </div>
          <div class="clearfix"> </div>
          <div class="home-contents">
            <div class="info-text wow fadeIn" data-wow-delay="0.1s">
                SoilGate is the innovative system which allow you to monitor the water content , humidity level and other parameters in your cultivation and tillage tracking and making them available in the cloud for the easy access 24/7 from your PC and smartphone
            </div>

            <div class="button-outer">
                
                
               
                <a href="{{ url('/register') }}" class="btn btn-signup wow fadeInRight" data-wow-delay="0.3s">SIGN UP</a>
                 <span class="ortext">OR</span>
                <a href="{{ url('/login') }}" class="btn btn-signin wow fadeInLeft" data-wow-delay="0.2s">LOGIN
                <span>Already Registered?</span>
                </a>


            </div>
            <div class="onetotow wow fadeInRight" data-wow-delay="1s">
                <span class="topnexttext">New to SoilGate? See how it works</span>
                <a href="#about" class="scroll wow bounce" data-wow-delay="1s"><i class="fa fa-chevron-down"></i></a>
            </div>
          </div>
        </div>
    </div>
 </div>
<!--banner end here-->
<!--about start here-->
<div class="about" id="about">
    <div class="container">
        <div class="about-main">
             <div class="changer-main">
                    <span class="devide-line w3-agile"> </span>
                 <div class="about-block">
                    <div class="changer-left wow bounceInLeft" data-wow-delay="0.1s">
                        <h3>How it works</h3>
                         <p>Soilgate is the innovative system which allows you to monitor the most important parameter of your tillage and cultivation. Whatever you are a farmer or are in need to monitor some parameters of the ground where your cultivations are you will get the data you need. Soilgate allows you to have the view at glance of the status of your soil remotely on your pc or smartphone. All data like high precision geographical location of the probes and actual value of relative humidity, temperature ph etc. will be acquired and visualized remotely and safely stored on a cloud database.</p>
                    </div>
                    <div class="changer-right wow bounceInRight" data-wow-delay="0.1s">
                        <iframe width="500" height="350" src="https://www.youtube.com/embed/u_4AbkgRoqo" frameborder="0" allowfullscreen></iframe>
                    </div>
                     <div class="clearfix"> </div>
                     <div class="ch-bott1 agile">
                        <span class="botted"> </span>
                     </div>
                 </div>
                 <div class="about-block-snd">
                    <div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a3.png')}}" alt="">
                    </div>
                    <div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
                        <h3>What is soilgate</h3>
                        <p>Soilgate is the advance integrated system which will let you know the status of your soil to optimize the delivery of water and save this important resource. But will also give important information about temperature of the soil and dispersion of nutriments. Water is limited resource and Soilgate helps in using only where and when is required. </p>
                    </div>
                      <div class="clearfix"> </div>
                      <div class="ch-bott1 agile">
                        <span class="botted"> </span>
                     </div>
                </div>
                <div class="about-block agileits-w3layouts">
                    <div class="changer-left-trd wow bounceInLeft" data-wow-delay="0.1s">
                        <h3>The system</h3>
                        <p>The heart of the system is the “SoilGate.Node”. It’s sophisticated electronic unit lithium battery powered capable of working in the harshest possible conditions. No external power is required each unit is also equipped by a solar panel which will keep charged the lithium battery. </p>
                    </div>
                    <div class="changer-right-trd wow bounceInRight" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a2.png')}}" alt="">
                    </div>
                     <div class="clearfix"> </div>
                     <div class="ch-bott1 w3-agile">
                        <span class="botted"> </span>
                     </div>
                </div>

                <div class="about-block-snd">
                    <div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a3.png')}}" alt="">
                    </div>
                    <div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
                        <h3>The functioning</h3>
                        <p>Each Node acquires at regular intervals the actual GPS location of the unit and the actual values of the temperature and humidity probes. The high range Wi-Fi transmitter embedded in the unit will hook to any wireless network and will send the data to the “SoilGate.Cloud”. If a wireless network is not available you can use our dedicated “Soil Gate Router” designed to work outside</p>
                    </div>
                      <div class="clearfix"> </div>
                      <div class="ch-bott1 agile">
                        <span class="botted"> </span>
                     </div>
                </div>
                <div class="about-block agileits-w3layouts">
                    <div class="changer-left-trd wow bounceInLeft" data-wow-delay="0.1s">
                        <h3>The interface</h3>
                        <p>Through the dedicated web interface you can visualize on a Google map where your nodes are located and check the relevant values of humidity, temperature etc. you can graph the trend of the soil parameters and many more things. With the interface you can easily add a new node to the grid. </p>
                    </div>
                    <div class="changer-right-trd wow bounceInRight" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a2.png')}}" alt="">
                    </div>
                     <div class="clearfix"> </div>
                     <div class="ch-bott1 w3-agile">
                        <span class="botted"> </span>
                     </div>
                </div>

                <div class="about-block-snd">
                    <div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a3.png')}}" alt="">
                    </div>
                    <div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
                        <h3>The installation</h3>
                        <p>Installation is quite simple. Just plug SoilGate.node in your pc or smarphone usb connection and program the credential to access the network. Bring the unit to installation location stick the probes in the ground down to a depth of 20cm or more connect the probes to the “SoilGate.Node” and turn it on. You are done!</p>
                    </div>
                      <div class="clearfix"> </div>
                      <div class="ch-bott1 agile">
                        <span class="botted"> </span>
                     </div>
                </div>
                <div class="about-block agileits-w3layouts">
                    <div class="changer-left-trd wow bounceInLeft" data-wow-delay="0.1s">
                        <h3>Registering of the device on the cloud</h3>
                        <p>Log in to Soilgate.Cloud page simply follow the instruction. Name your Cultivations eg. Tomatos, Eggplant, Water Melon and register all your nodes linking them to your relevant actual Soilgate Cultivation. </p>
                    </div>
                    <div class="changer-right-trd wow bounceInRight" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a2.png')}}" alt="">
                    </div>
                     <div class="clearfix"> </div>
                     <div class="ch-bott1 w3-agile">
                        <span class="botted"> </span>
                     </div>
                </div>      

                <div class="about-block-snd">
                    <div class="changer-left-snd wow bounceInLeft" data-wow-delay="0.1s">
                         <img src="{{URL::asset('assets/landing/images/a3.png')}}" alt="">
                    </div>
                    <div class="changer-right-snd wow bounceInRight" data-wow-delay="0.1s">
                        <h3>Monitor</h3>
                        <p>Check in real time the critical parameter of your soil and decide if you need to add water or to take some actions to optimize your cultivation.</p>
                    </div>
                      <div class="clearfix"> </div>
                      <div class="ch-bott1 agile">
                        <span class="botted"> </span>
                     </div>
                </div>
                                            
             </div>        
        </div>
    </div>
</div>
<!--about end here-->
<!--services strat here-->
<div class="services" id="services">
    <div class="container">
        <div class="service-main">
             <div class="w3ser-top w3-agileits">
                <h3>Soilgate Products</h3>
             </div>
              <div class="service-bottom agileits-w3layouts-bottom">
                 <div class="col-md-5 ser-left wow bounceInLeft" data-wow-delay="0.1s">
                    <img src="{{URL::asset('assets/landing/images/ser-lft.png')}}" alt="">
                 </div>
                 <div class="col-md-7 ser-right wow bounceInRight" data-wow-delay="0.1s">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                         veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                           anim id est laborum.</p>
                 </div>
                <div class="clearfix"> </div>
             </div>
        </div>
    </div>
</div>
<!--services end here-->
<!--services strat here-->
<div class="services" id="faqs">
    <div class="container">
        <div class="service-main">
             <div class="w3ser-top w3-agileits">
                <h3>Faqs</h3>
             </div>
              <div class="faq-bottom agileits-w3layouts-bottom">
                 
                 <div class="col-md-12 ser-right wow bounceInRight" data-wow-delay="0.1s">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Which is the precision of GPS?</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">SoilGate.Node uses high precision 56channels gps which can guarantee a precision
of less than 1m in positioning</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Which is transmission range of wifi</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">This can depend on several factors and obstacle on soil, but in open field the
standard range can reach 60-70m and can be extended up to 200m with additional
antenna.
</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Which is duration of the battery</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">The standard duration of the battery is about one week in complete absence of sun
light</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How long will it take get full charge on the battery by solar panel?</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">The full charge of the battery from 0% will be completed with an exposition of about
4 -5 hours and will guarantee autonomy of about one week.</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Can be the battery charger via USB?</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Yes but it’s an option</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Which kind of battery are used in Node?</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">The last generation of LiPo type are used </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Do you have other option of battery?</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Yes the LTO version of Soilgate.Node uses the most advanced type of lithium battery the Lithium Titanate which can be fully charged in less than 6mins by an external
source in case of persistent lack of sun.</div>
                      </div>
                    </div>
                 </div>
                 </div>
                <div class="clearfix"> </div>
             </div>
        </div>
    </div>
</div>
<!--services end here-->
<!--gallery start here-->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="gallery-main w3-agileits">
            <div class="gallery-top-w3ls">
                <h3>Gallery</h3>
            </div>
            <div class="gallery-bottom agileits-w3layouts">
                <!---->
                 <ul id="flexiselDemo3">
                        <li><img src="{{URL::asset('assets/landing/images/ap1.png')}}" class="img-responsive" alt=""/></li>
                        <li><img src="{{URL::asset('assets/landing/images/ap2.png')}}" class="img-responsive" alt=""/></li>
                        <li><img src="{{URL::asset('assets/landing/images/ap3.png')}}" class="img-responsive" alt=""/></li>
                        <li><img src="{{URL::asset('assets/landing/images/ap2.png')}}" class="img-responsive" alt=""/></li>
                     </ul>
                </div>
                 <script type="text/javascript">
                    $(window).load(function() {
                        
                        $("#flexiselDemo3").flexisel({
                            visibleItems: 3,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,            
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: { 
                                portrait: { 
                                    changePoint:480,
                                    visibleItems: 1
                                }, 
                                landscape: { 
                                    changePoint:640,
                                    visibleItems: 2
                                },
                                tablet: { 
                                    changePoint:768,
                                    visibleItems: 2
                                }
                            }
                        });
                        
                    });
                    </script>
                    <script type="text/javascript" src="{{URL::asset('assets/landing/js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
</div>
<!--gallery end here-->
<!--contact start here-->
<div class="contact wthree" id="contact">
    <div class="container">
        <div class="contact-main">
            <div class="contact-top">
                <h3>Contact Us</h3>
            </div>
            <div class="contact-bottom">
                <div class="contact-left agileinfo wow bounceInLeft" data-wow-delay="0.1s">
                    <h4>Contact Info</h4>
                    <form action="#" method="post"> 
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input type="text" name="Email" placeholder="Email" required="">
                        <input type="text" name="Subject" placeholder="Subject" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="contact-right agileinfo wow bounceInRight" data-wow-delay="0.1s">
                    <div class="contact-rit-info wthree">
                        <h4>Address</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p> consectetur adipiscing elit</p>
                        <p>1043 Berlin</p>
                        <p>Germany</p>
                        <p>Telephone :7585 869 545</p>
                        <p>Email : <a href="mailto:info@example.com">lorem@example.com</a></p>
                    </div>
                    <div class="social-icons">
                        <h4>Follow us :</h4>
                        <ul>
                            <li><a href="#"><span class="fb"> </span> </a></li>
                            <li><a href="#"><span class="twit"> </span></a></li>
                            <li><a href="#"><span class="gmail"> </span></a></li>
                            <li class="no-mar"><a href="#"><span class="pin"> </span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--contact end here-->
<!--copy rights start here-->
<div class="copy-right">
    <div class="container">
         <div class="copy-rights-main wow zoomIn" data-wow-delay="0.1s">
            <p>© 2016 Appliance. All Rights Reserved | Design by  <a href="http://labeebmohammed.com/" target="_blank">LM</a> </p>
         </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div> 
<!--copy rights end here-->
</body>
</html>