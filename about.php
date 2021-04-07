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
?><!doctype html>
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
	<title>About <?php echo $project_name ?></title>
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="About <?php echo $project_name ?>" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="About <?php echo $project_name ?>" href="comments/feed/index.html" />
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
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/8.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.2" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index2df4.html?p=8' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7981.json?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2Fabout-page%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedd292?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2Fabout-page%2F&amp;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style></head>

<body id="top-gap-fixed-header" class="page-template page-template-page-templates page-template-template-aboutpage page-template-page-templatestemplate-aboutpage-php page page-id-8">
		
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
<div class="pt-md-5 AboutPageBannerImage">
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


<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path AllBreadcrumbs">
            <a href="https://wp.w3layouts.com/coffee" rel="nofollow">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;About page        </ul>
    </div>
</section>
<!-- //about breadcrumb -->



<!-- AboutPage about section -->

<section>
    </section>

<section class="w3l-aboutblock1 py-5" id="bottom">
    <div class="container py-lg-5 py-md-3 AboutPageAbout">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="title-small mb-3">
                    About Us</h5>
                <h3 class="title-big">
                    The Coffee Masters                </h3>
                <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Non quae.</p>
                <ul class="rating-star mt-5">
                    <li><span class="fa fa-star"></span></li>
                    <li><span class="fa fa-star"></span></li>
                    <li><span class="fa fa-star"></span></li>
                    <li><span class="fa fa-star"></span></li>
                    <li><span class="fa fa-star-o"></span></li>
                </ul>
                <h3 class="title-small mt-2">
                    "Best cafe in London. Ever!”                </h3>
                <p>“Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut diam libero erat. Aenean faucibus nibh et justo cursus.”                </p>
                <h3 class="title-star mt-3">
                    - Peter Johnson, Chef                </h3>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 ">
                <img src="wp-content/themes/coffee/assets/images/about3.jpg"
                    alt="" class="radius-image img-fluid">
            </div>
        </div>
    </div>
</section>

<section>
    </section>

<!-- AboutPage about section -->





<!-- AboutPage Services -->

<section>
    </section>

<section class="w3l-about2 py-5">
    <div class="container py-lg-5 AboutPageServices">
        <div class="row cwp23-content">

            <div class="col-lg-6">
                <h5 class="title-small mb-3">
                    Who we are                </h5>
                <h3 class="title-big">
                    Did you Know? About our restaurant                </h3>
                <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula.
                    Semper at tempufddfel. consectetur sit adipisicing elit, et sed do eiusmod tempor, Lorem ipsum
                    consectetur sit amet adipisicing elit. Non quae, dolor consectetur adipisicing elit, et sed tempor.</p>
                <img src="wp-content/themes/coffee/assets/images/signature.png"
                    class="img-fluid signature" width="300px" alt="my photo">
            </div>

            <div class="col-lg-6 cwp23-text align-self mt-lg-0 mt-5">
                <div class="cwp23-text-cols">

                                                            <div class="column">
                        <span
                            class="fa fa-globe"
                            aria-hidden="true"></span>
                        <a
                            href="#url">The best World sorts</a>
                        <p>consectetur adipisicing elit, et sed do eiusmod tempor Lorem ipsum sit amet.                        </p>
                    </div>
                    
                                                            <div class="column">
                        <span
                            class="fa fa-coffee"
                            aria-hidden="true"></span>
                        <a
                            href="#url">Many points of sale</a>
                        <p>consectetur adipisicing elit, et sed do eiusmod tempor Lorem ipsum sit amet.                        </p>
                    </div>
                    
                                                            <div class="column">
                        <span
                            class="fa fa-delicious"
                            aria-hidden="true"></span>
                        <a
                            href="#url">Professional baristas</a>
                        <p>consectetur adipisicing elit, et sed do eiusmod tempor Lorem ipsum sit amet.                        </p>
                    </div>
                    
                                                            <div class="column">
                        <span
                            class="fa fa-truck"
                            aria-hidden="true"></span>
                        <a
                            href="#url">24/7 fast delivery</a>
                        <p>consectetur adipisicing elit, et sed do eiusmod tempor Lorem ipsum sit amet.                        </p>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    </section>

<!-- //AboutPage Services -->





<!-- AboutPage Stat Section -->

<section>
    </section>

<section class="w3l-aboutblock3 py-5">
    <div class="container py-lg-5 py-md-3 AboutPageStat">
        <div class="row">

            <div class="col-lg-6 align-self">

                <h5 class="title-small mb-3">
                    Become our Dealer</h5>

                <h3 class="title-big">
                    More than 4500+ <br>customers trust us                </h3>

                <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, dolor
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Non quae, fugiat consequatur voluptatem nihil ad. Lorem ipsum dolor sit amet</p>

                <a href="contact-page/index.html"
                    class="btn btn-style btn-primary mt-lg-5 mt-4 mr-2">Become a Dealer</a>

                <a href="contact-page/index.html"
                    class="btn btn-style border-btn mt-lg-5 mt-4">Contact Us</a>

            </div>

            <div class="col-lg-6 mt-lg-0 mt-5 ">
                <img src="wp-content/themes/coffee/assets/images/about.png"
                    alt="" class="radius-image img-fluid">
            </div>

        </div>
    </div>
</section>

<section>
    </section>

<!-- /AboutPage Stat Section -->





<!-- AboutPage Testimonials -->

<section>
    </section>

<section class="w3l-testimonials py-5" id="testimonials">
    <style>
        .w3l-testimonials {
            background: url(wp-content/themes/coffee/assets/images/testimonials.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 0;
        }
    </style>
    <!-- main-slider -->
    <div class="container py-lg-5 py-md-4 mb-md-0 mb-md-5 mb-4 AboutPageTestimonials">
        <div class="heading text-center mx-auto">
            <h5 class="title-small text-center mb-2">
                Great words about Coffee            </h5>
            <h3 class="title-big text-center mb-5">
                What do People say About us            </h3>
        </div>
        <div class="owl-testimonial owl-carousel owl-theme">

            <div class="item">
                <div class="slider-info">
                    <div class="img-circle">
                        <img src="wp-content/themes/coffee/assets/images/t1.jpg"
                            class="img-fluid rounded" alt="client image">
                    </div>
                    <div class="message-info">
                        <span class="fa fa-quote-left mr-2"></span>
                        <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                            accusantium officia quod quasi necessitatibus perspiciatis Harum error provident
                            quibusdam tenetur dolor sit amet.</div>
                        <div class="name">
                            - Johnson                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="slider-info">
                    <div class="img-circle">
                        <img src="wp-content/themes/coffee/assets/images/t2.jpg"
                            class="img-fluid rounded" alt="client image">
                    </div>
                    <div class="message-info">
                        <span class="fa fa-quote-left mr-2"></span>
                        <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                            accusantium
                            officia quod quasi necessitatibus perspiciatis Harum error provident
                            quibusdam tenetur.</div>
                        <div class="name">
                            - Alexander                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="slider-info">
                    <div class="img-circle">
                        <img src="wp-content/themes/coffee/assets/images/t3.jpg"
                            class="img-fluid rounded" alt="client image">
                    </div>
                    <div class="message-info">
                        <span class="fa fa-quote-left mr-2"></span>
                        <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                            accusantium
                            officia quod quasi necessitatibus perspiciatis Harum error provident
                            quibusdam tenetur.</div>
                        <div class="name">
                            - Smith roy                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="slider-info">
                    <div class="img-circle">
                        <img src="wp-content/themes/coffee/assets/images/t4.jpg"
                            class="img-fluid rounded" alt="client image">
                    </div>
                    <div class="message-info">
                        <span class="fa fa-quote-left mr-2"></span>
                        <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                            accusantium
                            officia quod quasi necessitatibus perspiciatis Harum error provident
                            quibusdam tenetur.</div>
                        <div class="name">
                            - Elizabeth                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /main-slider -->
</section>

<section>
    </section>

<!-- AboutPage Testimonials -->





<!-- AboutPage team -->

<section>
    </section>

<section class="w3l-team py-5" id="team">
    <div class="container py-lg-4 py-sm-3 AboutPageTeam">

        <h5 class="title-small text-center mb-2">
            Meet our team</h5>
        <h3 class="title-big text-center">
            Behind the Taste </h3>

        <div class="row text-center justify-content-center">

                                    <div class="team-info col-md-3 col-6 mt-5">
                <div class="column position-relative">
                    <a href="#url">
                        <img src="wp-content/themes/coffee/assets/images/t1.jpg"
                            alt="" class="img-fluid radius-image" />
                    </a>
                </div>
                <h4><a href="#url">
                        John Doe</a></h4>
                <h6>Barista                </h6>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">

                                                                                    <a class="fac"
                                href="https://www.facebook.com/w3layouts/">
                                <span class="fa fa-facebook-official"></span>
                            </a>
                            
                                                                                    <a class="twitter"
                                href="https://twitter.com/W3layouts">
                                <span class="fa fa-twitter"></span>
                            </a>
                            
                                                                                    <a class="instagram"
                                href="https://www.instagram.com/w3layouts_/">
                                <span class="fa fa-instagram"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            
                                    <div class="team-info col-md-3 col-6 mt-5">
                <div class="column position-relative">
                    <a href="#url">
                        <img src="wp-content/themes/coffee/assets/images/t2.jpg"
                            alt="" class="img-fluid radius-image" />
                    </a>
                </div>
                <h4><a
                        href="#url">Alexander</a>
                </h4>
                <h6>Waiter                </h6>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">

                                                                                    <a class="fac"
                                href="https://www.facebook.com/w3layouts/">
                                <span class="fa fa-facebook-official"></span>
                            </a>
                            
                                                                                    <a class="twitter"
                                href="https://twitter.com/W3layouts">
                                <span class="fa fa-twitter"></span>
                            </a>
                            
                                                                                    <a class="instagram"
                                href="https://www.instagram.com/w3layouts_/">
                                <span class="fa fa-instagram"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            
                                    <div class="team-info col-md-3 col-6 mt-5">
                <div class="column position-relative">
                    <a href="#url">
                        <img src="wp-content/themes/coffee/assets/images/t3.jpg"
                            alt="" class="img-fluid radius-image" />
                    </a>
                </div>
                <h4><a
                        href="#url">Martin ker</a>
                </h4>
                <h6>Administrator                </h6>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">

                                                                                    <a class="fac"
                                href="https://www.facebook.com/w3layouts/">
                                <span class="fa fa-facebook-official"></span>
                            </a>
                            
                                                                                    <a class="twitter"
                                href="https://twitter.com/W3layouts">
                                <span class="fa fa-twitter"></span>
                            </a>
                            
                                                                                    <a class="instagram"
                                href="https://www.instagram.com/w3layouts_/">
                                <span class="fa fa-instagram"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            
                                    <div class="team-info col-md-3 col-6 mt-5">
                <div class="column position-relative">
                    <a href="#url">
                        <img src="wp-content/themes/coffee/assets/images/t4.jpg"
                            alt="" class="img-fluid radius-image" />
                    </a>
                </div>
                <h4><a
                        href="#url">Elizabeth</a>
                </h4>
                <h6>Manager                </h6>
                <div class="team-info">
                    <div class="caption">
                        <div class="social-icons-section text-center">

                                                                                    <a class="fac"
                                href="https://www.facebook.com/w3layouts/">
                                <span class="fa fa-facebook-official"></span>
                            </a>
                            
                                                                                    <a class="twitter"
                                href="https://twitter.com/W3layouts">
                                <span class="fa fa-twitter"></span>
                            </a>
                            
                                                                                    <a class="instagram"
                                href="https://www.instagram.com/w3layouts_/">
                                <span class="fa fa-instagram"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</section>

<section>
    </section>

<!-- AboutPage team -->


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