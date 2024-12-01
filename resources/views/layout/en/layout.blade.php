<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Riydig Marketing Agency">
    <!-- openraph -->
    <meta property="og:site_name" content="RIYDIG MARKETING AGENCY IN EGYPT" />

    <meta property="og:title" content="RiyDig Marketing Agency" />
    <meta property="og:type" content="Marketing Agency In Egypt" />
    <meta property="og:locale:alternate" content="eg_AR" />
    <meta property="og:locale:alternate" content="en_EG" />
    <meta property="og:url" content="https://riydig.agency" />
    <meta property="og:image" content="/assets/media/purple.png"/>
    <title>RIYDIG</title>
    @vite('resources/js/app.js')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <!-- All CSS files -->
    <!-- <link rel="stylesheet" href="/assets/css/ihover.css"> -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="/assets/css/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Meow+Script&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    


</head>

<body>
  
<div id="preloader">
        <span class="loader"><img src="/assets/media/Logo.gif"></span>
    </div>

    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper">

        <!-- Header Area Start -->
        <header class="header-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/"><img alt="" src="/assets/media/logo_White.png" style="height: 44px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto ms-auto mainmenu">
                            <li class="menu-item-has-children fs-24 fw-4 pt-2">
                                <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                            
                            </li>

                            <li class="menu-item fs-24 fw-4 pt-2">
                                <a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a>
                            </li>
                            <li class="menu-item fs-24 fw-4 pt-2">
                                <a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
                            </li>
                            <li class="logo"> <a class="menu-item text-center" href="/"><img alt="" src="/assets/media/logo_White.png" style="width: 200px;"></a> </li>
                            <li class="menu-item-has-children fs-24 fw-4 pt-2">
                                <a href="/portfolio"  class="{{ Request::is('portfolio') ? 'active' : '' }}">Projects</a>
                        
                            </li>
                            <li class="menu-item fs-24 fw-4 pt-2"><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                            <li class="menu-item fs-24 fw-4 pt-2 me-0"><a href="/blogs" class="{{ Request::is('blogs') ? 'active' : '' }}">Blogs</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            
        </header>
        <!-- Header Area end -->
        @yield('route')
       <!-- Footer Area Start -->
       <footer class="footer-1">
          <div class="container">
                <h1 class="text-center fs-91 color-dark-2">READY TO DISCUSS<br> YOUR <b class="color-primary">IDEAS?</b></h1>
                <div class="text-center">
                    <a class="cus-btn light" href="/contact">Let's Talk</a>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                       <ul class="contact unstyled">
                        <li><a href="mailto:innovate@riydig.agency"><i class="fal fa-envelope"></i> innovate@riydig.agency</a></li>
                        <li><a href="tel:+201009496843"><i class="fal fa-phone"></i>+20 100 949 6843</a></li>
                        <li><a href="https://wa.me/+201040489757?text=hello, i'm coming from RiyDig Agency" target="__blank"><i class="fal fab fa-whatsapp"></i>+20 104 048 9757</a></li>
                       

                        <li><a href="https://maps.app.goo.gl/E39k18egdH5MBRuF7" target="__blank"><i class="fal fa-map-marker-alt"></i>Nasr City, Cairo</a></li>
                       </ul>
                    </div>
                    <div class="col-lg-4">
                    <ul class="contact unstyled">
                    <li><a href="tel:+201040489757"><i class="fal fa-phone"></i>+20 104 048 9757</a></li>
                       </ul>
                        <ul class="social-links unstyled text-center">
                            <li class="d-inline-block me-2"><a href="https://www.snapchat.com/add/riydigagency11?share_id=0TMjj7zT2xw&locale=en-US" class="pt-4 pb-4 text-center pe-2 ps-2 br-15"><i class="fab fa-snapchat fs-24"></i></a></li>
                            <li class="d-inline-block me-2"><a href="https://www.linkedin.com/company/alriyada/?viewAsMember=true" class="pt-4 pb-4 text-center pe-3 ps-3 br-15"><i class="fab fa-linkedin fs-24"></i></a></li>
                            <li class="d-inline-block me-2"><a href="https://www.tiktok.com/@riydig?_t=8rTHDFRT2gi&_r=1" class="pt-4 pb-4 text-center pe-2 ps-2 br-15"><i class="fab fa-tiktok fs-24"></i></a></li>
                            <li class="d-inline-block me-2"><a href="https://www.instagram.com/riydigagency/" class="pt-4 pb-4 text-center pe-3 ps-3 br-15"><i class="fab fa-instagram fs-24"></i></a></li>
                            <li class="d-inline-block me-2"><a href="https://x.com/riydigmarketing" class="pt-4 pb-4 text-center pe-3 ps-3 br-15"><i class="fab fa-x-twitter fs-24"></i></a></li>
                            <li class="d-inline-block me-2"><a href="https://www.facebook.com/profile.php?id=61568276301960" class="pt-4 pb-4 text-center pe-3 ps-3 br-15"><i class="fab fa-facebook fs-24"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                      <img src="/assets/media/logo_Black.png">
                  </div> 
                    <!-- <div class="col-lg-4">
                        <h3 class="color-gray-2 fs-24 newsletter-link"><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#newsletterModal">Subscribe To Our Newsletter!</a></h3>
                    </div> -->
                </div>
              <p class="text-center  mb-4">©2024 All rights are reserved by Alriyada</p>
          </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Newletter Modal-->
        <div class="modal fade" id="newsletterModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="row mt-64 mb-64">
                            <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2">
                                <form method="get" action="/index-1">
                                    <div class="form-group mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="Your email address">
                                    </div>
                                    <button type="submit" class="cus-btn light mt-4">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- Jquery Js -->

    <script src="/assets/js/vendor/jquery-3.6.3.min.js" ></script>
<script src="/assets/js/vendor/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>


<script src="/assets/js/vendor/slick.min.js" ></script>
<script src="/assets/js/vendor/jquery-appear.js"></script>
<script src="/assets/js/vendor/jquery-validator.js"></script>
<script src="{{ asset('assets/js/vendor/sal.js')}}" ></script>
<script src="/assets/js/vendor/isotope.pkgd.min.js"></script>



<script src="/assets/js/app.js" ></script>


<!-- <script src="/assets/js/ihover.js" ></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <script>



//             var maxData = 5;
// 	let i=2;

	
// 	$(document).ready(function(){
// 		var radius = 500;
// 		var fields = $('.itemDot');
// 		var container = $('.dotCircle');
// 		var width = container.width();
//  radius = width/2.5;
 
// 		 var height = container.height();
// 		var angle = 0, step = (2*Math.PI) / fields.length;
// 		fields.each(function() {
// 			var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
// 			var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
// 			if(window.console) {
// 				console.log($(this).text(), x, y);
// 			}
			
// 			$(this).css({
// 				left: x + 'px',
// 				top: y + 'px'
// 			});
// 			angle += step;
// 		});
		
		
// 		$('.itemDot').click(function(){
			
// 			var dataTab= $(this).data("tab");
// 			$('.itemDot').removeClass('active');
// 			$(this).addClass('active');
// 			$('.CirItem').removeClass('active');
// 			$( '.CirItem'+ dataTab).addClass('active');
// 			i=dataTab;
			
// 			$('.dotCircle').css({
// 				"transform":"rotate("+(360-(i-1)*36)+"deg)",
// 				"transition":"2s"
// 			});
// 			$('.itemDot').css({
// 				"transform":"rotate("+((i-1)*36)+"deg)",
// 				"transition":"5s"
// 			});
			
			
// 		});
		
    
    
// 		setInterval(function(){
// 			var dataTab= $('.itemDot.active').data("tab");
// 			if(dataTab>maxData||i>maxData){
// 			dataTab=1;
// 			i=1;
// 			}
// 			$('.itemDot').removeClass('active');
// 			$('[data-tab="'+i+'"]').addClass('active');
// 			$('.CirItem').removeClass('active');
// 			$( '.CirItem'+i).addClass('active');
// 			i++;
			
			
// 			$('.dotCircle').css({
// 				"transform":"rotate("+(360-(i-2)*36)+"deg)",
// 				"transition":"2s"
// 			});
// 			$('.itemDot').css({
// 				"transform":"rotate("+((i-2)*36)+"deg)",
// 				"transition":"1s"
// 			});
			
// 			}, 5000);
		
// 	});


window.addEventListener('load', () => {
  const images = document.querySelectorAll('.lazyload');

  images.forEach(image => {
    const img = new Image();
    img.src = image.src;
  });
});
        </script>


</body>

</html>