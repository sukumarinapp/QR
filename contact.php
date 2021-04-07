<?php
include "admin/config.php";
$page = "Home";
$center_id = $_GET['center_id'];
$table_id = $_GET['table_id'];
$sql = "select * from users where id=$center_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$project_name = $row['project_name'];
$email = $row['email'];
$mobile = $row['mobile'];
$address = $row['address'];
$map = $row['map'];
$photo  = $row['photo'];
?>
<!doctype html>
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="author" content="W3Layouts.com" />

	<!-- Google fonts -->
	<link href="http://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600&amp;display=swap" rel="stylesheet">
	<!-- google fonts -->

	<link href="wp-content/themes/coffee/assets/css/style-liberty.css" rel="stylesheet">
	<title>Contact <?php echo $project_name ?></title>
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Contact <?php echo $project_name ?>" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Contact <?php echo $project_name ?>" href="comments/feed/index.html" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/wp.w3layouts.com\/coffee\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min4c7e.css?ver=5.6.2' media='all' />
<link rel='stylesheet' id='w3layouts-style-css'  href='wp-content/themes/coffee/style8a54.css?ver=1.0.0' media='all' />
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/17" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.2" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='indexd8eb.html?p=17' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed071d.json?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2Fcontact-page%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed100e?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2Fcontact-page%2F&amp;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style></head>

<body id="top-gap-fixed-header" class="page-template page-template-page-templates page-template-template-contactpage page-template-page-templatestemplate-contactpage-php page page-id-17">
		
	<style>
		span.w3l-icon.-back span.fa {
			position: static;
			color: #e6ebff;
		}

		#w3lDemoBar.w3l-demo-bar {
			top: 0;
			right: 0;
			bottom: 0;
			z-index: 9999;
			padding: 40px 5px 10px;
			padding-top: 70px;
			background: #0D1326;
			border-top-left-radius: 9px;
			border-bottom-left-radius: 9px;
		}

		#w3lDemoBar.w3l-demo-bar a {
			display: block;
			color: #e6ebff;
			text-decoration: none;
			line-height: 24px;
			opacity: .6;
			margin-bottom: 20px;
			text-align: center;
		}

		#w3lDemoBar.w3l-demo-bar span.w3l-icon {
			display: block;
		}

		#w3lDemoBar.w3l-demo-bar a:hover {
			opacity: 1;
		}

		#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
			color: #e6ebff;
		}

		#w3lDemoBar.w3l-demo-bar .responsive-icons {
			margin-top: 30px;
			border-top: 1px solid #41414d;
			padding-top: 40px;
		}

		#w3lDemoBar.w3l-demo-bar .demo-btns {
			border-top: 1px solid #41414d;
			padding-top: 30px;
		}

		#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
			font-size: 26px;
		}

		#w3lDemoBar.w3l-demo-bar .no-margin-bottom {
			margin-bottom: 0;
		}

		.toggle-right-sidebar span {
			background: #0D1326;
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			color: #e6ebff;
			border-radius: 50px;
			font-size: 26px;
			cursor: pointer;
			opacity: .5;
		}

		.pull-right-demo-bar {
			float: right;
			position: fixed;
			right: 0px;
			top: 150px;
			width: 90px;
			z-index: 99999;
			text-align: center;
		}

		/* ============================================================
						RIGHT SIDEBAR SECTION
						============================================================ */

		#right-sidebar {
			width: 90px;
			position: fixed;
			z-index: 1000;
			right: 0px;
			top: 0;
			margin-top: 140px;
			-webkit-transition: all .5s ease-in-out;
			-moz-transition: all .5s ease-in-out;
			-o-transition: all .5s ease-in-out;
			transition: all .5s ease-in-out;
			overflow-y: auto;
		}


		/* ============================================================
						RIGHT SIDEBAR TOGGLE SECTION
						============================================================ */

		.hide-right-bar-notifications {
			margin-right: -300px !important;
			-webkit-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			transition: all .3s ease-in-out;
		}



		@media (max-width: 992px) {
			#w3lDemoBar.w3l-demo-bar a.desktop-mode {
				display: none;

			}
		}

		@media (max-width: 767px) {
			#w3lDemoBar.w3l-demo-bar a.tablet-mode {
				display: none;

			}
		}

		@media (max-width: 568px) {
			#w3lDemoBar.w3l-demo-bar a.mobile-mode {
				display: none;
			}

			#w3lDemoBar.w3l-demo-bar .responsive-icons {
				margin-top: 0px;
				border-top: none;
				padding-top: 0px;
			}

			#right-sidebar,
			.pull-right-demo-bar {
				width: 90px;
			}

			#w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
				margin-bottom: 0;
			}
		}
	</style>
	<div class="pull-right-demo-bar toggle-right-sidebar">
		<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
	</div>

	<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
		<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

			<div id="w3lDemoBar" class="w3l-demo-bar">
				<div class="demo-btns">
					<a href="https://w3layouts.com/?p=4763800000001155">
						<span class="w3l-icon -back">
							<span class="fa fa-arrow-left"></span>
						</span>
						<span class="w3l-text">Back</span>
					</a>
					<a href="https://w3layouts.com/?p=4763800000001155">
						<span class="w3l-icon -download">
							<span class="fa fa-download"></span>
						</span>
						<span class="w3l-text">Download</span>
					</a>
					<a href="https://w3layouts.com/checkout/?add-to-cart=4763800000001155" class="no-margin-bottom-mobile">
						<span class="w3l-icon -buy">
							<span class="fa fa-shopping-cart"></span>
						</span>
						<span class="w3l-text">Buy</span>
					</a>
				</div>
				<!---<div class="responsive-icons">
												<a href="#url" class="desktop-mode">
														<span class="w3l-icon -desktop">
																<span class="fa fa-desktop"></span>
														</span>
												</a>
												<a href="#url" class="tablet-mode">
														<span class="w3l-icon -tablet">
																<span class="fa fa-tablet"></span>
														</span>
												</a>
												<a href="#url" class="mobile-mode no-margin-bottom">
														<span class="w3l-icon -mobile">
																<span class="fa fa-mobile"></span>
														</span>
												</a>
										</div>-->
			</div>
			<div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003" style="overflow: hidden; outline: none;">
			</div>
		</div>
	</div>
     <?php include "header.php"; ?>

	<!--header-->
	
	
<div class="inner-banner text-center pt-md-5">
<div class="pt-md-5 ContactPageBannerImage">
  <style>
    .inner-banner {
      background: url(wp-content/themes/coffee/assets/images/innerbanner.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      min-height: 180px;
      position: relative;
      z-index: 0;
    }
  </style>
</div>
</div>

<!-- contact breadcrumb -->
<section class="w3l-breadcrumb">
  <div class="container">
    <ul class="breadcrumbs-custom-path AllBreadcrumbs">
      <a href="https://wp.w3layouts.com/coffee" rel="nofollow">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Contact page    </ul>
  </div>
</section>
<!-- //contact breadcrumb -->



<!-- Contact section -->

<section>
  </section>

<!-- contact-form -->
<section class="w3l-contact-6 py-5" id="contact">
  <div class="contact-info py-lg-4 py-md-3">
    <div class="container ContactSection">
      <div class="title-content mb-5">
        <h5 class="title-small text-center mb-2">
          Contact us</h5>
        <h3 class="title-big text-center mb-5">
          Get in touch with us</h3>
      </div>
      <div class="grid contact-grids pt-3">

                        <div class="contact-left">
                              <div class="grid">
            <span class="fa fa-map-marker"></span>
            <div class="location-info">
              <span>Address</span>
              <p>
                2005 Stokes Isle Apt. 896, dolor sit sed at ipsum, Coffee Cafe Center, Vacaville 10010, USA.              </p>
            </div>
          </div>
          
                              <div class="grid">
            <span class="fa fa-envelope-o"></span>
            <div class="email-info">
              <span>Have any Questions?</span>
              <a href="mailto:mail@examplemail.com">
                mail@examplemail.com</a>
            </div>
          </div>
          
                              <div class="grid">
            <span class="fa fa-phone"></span>
            <div class="email-info">
              <span>Phone Number</span>
              <a href="tel:(123) 456-78-90">
                (123) 456-78-90</a><br>
              <a href="tel:(+12) 255 456-78-90">
                (+12) 255 456-78-90</a>
            </div>
          </div>
          
        </div>
        

                        <div class="contacts12-main ContactForm">
                    <form action="#" method="post"
            class="signin-form">
            <div class="input-grids">
              <div>
                <label class="form-field"
                  for="w3lName">Name</label>
                <input type="text" name="w3lName" id="w3lName"
                  placeholder="e.g. Jhon Smith" class="contact-input" />

              </div>
              <div>
                <label class="form-field"
                  for="w3lSender">Email Address</label
                  class="form-field">
                <input type="email" name="w3lSender" id="w3lSender"
                  placeholder="e.g. example@mail.com" class="contact-input" />

              </div>
            </div>

            <div>
              <label class="form-field"
                for="w3lSubect">Subject</label
                class="form-field">
              <input type="text" name="w3lSubject" id="w3lSubect"
                placeholder="e.g. Subject" class="contact-input" />

            </div>
            <div>
              <label class="form-field"
                for="w3lMessage">Message</label
                class="form-field">
              <textarea name="w3lMessage" id="w3lMessage"
                placeholder="Type your message here" required=""></textarea>

            </div>
            <div class="text-right">
              <button class="btn btn-style btn-primary submit">Submit</button>
            </div>
          </form>
        </div>
        

      </div>
    </div>
</section>
<!-- //contact-form -->

<section>
  </section>

<!-- /contact-section -->




<!-- Contact Map section -->

<section>
  </section>

<!-- contact-map -->
<section class="w3l-contact-6">
  <div id="contacts4-block" class="contact-map">
    <div class="">
      <div class="contact ContactPageMap text-center">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
          frameborder="0" style="border:0" allowfullscreen></iframe>


                        <div class="cont-details ContactPageOpeningHours">
          <h5>Opening hours</h5>

          <div class="opening-info-day">
            <span
              class="opening-left">Monday:</span><span
              class="opening-right">9 AM - 4 PM</span>
          </div>

          <div class="opening-info-day">
            <span
              class="opening-left">Tuesday:</span><span
              class="opening-right">9 AM - 4 PM</span>
          </div>

          <div class="opening-info-day">
            <span
              class="opening-left">Wednesday:</span><span
              class="opening-right">9 AM - 4 PM</span>
          </div>

          <div class="opening-info-day">
            <span
              class="opening-left">Thursday:</span><span
              class="opening-right">9 AM - 4 PM</span>
          </div>

          <div class="opening-info-day">
            <span
              class="opening-left">Friday:</span><span
              class="opening-right">9 AM - 4 PM</span>
          </div>

          <div class="opening-info-day">
            <span
              class="opening-left">Saturday:</span><span
              class="opening-right">9 AM - 4 PM</span>
          </div>

          <div class="opening-info-day">
            <span
              class="opening-left">Sunday:</span><span
              class="opening-right">Closed</span>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section>
  </section>

<!-- //Contact Map section -->


     <?php include "footer.php"; ?>

<!-- //footer -->








<!-- move top -->
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<!-- Template JavaScript -->
<script src="wp-content/themes/coffee/assets/js/jquery-3.3.1.min.js"></script>

<!-- demo-bar js -->
<script src="wp-content/themes/coffee/assets/js/jquery-2.2.4.min.js"></script>
<script src="wp-content/themes/coffee/assets/js/demobar-script.js"></script>
<!-- demo-bar js -->

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<script src="wp-content/themes/coffee/assets/js/theme-change.js"></script>

<!-- js for portfolio lightbox -->
<script src="wp-content/themes/coffee/assets/js/jquery-2.1.4.min.js"></script>
<script src="wp-content/themes/coffee/assets/js/jquery.chocolat.js"></script>
<!--light-box-files -->
<script type="text/javascript ">
  $(function () {
    $('.w3_portfolio_grid a').Chocolat();
  });
</script>
<!-- /js for portfolio lightbox -->

<script src="wp-content/themes/coffee/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="wp-content/themes/coffee/assets/js/bootstrap.min.js"></script>


<script src='wp-content/themes/coffee/js/navigation8a54.js?ver=1.0.0' id='w3layouts-navigation-js'></script>
<script src='wp-includes/js/wp-embed.min4c7e.js?ver=5.6.2' id='wp-embed-js'></script>

</body>


</html>