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
	<title><?php echo $project_name ?></title>
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="<?php echo $project_name ?> Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $project_name ?> Feed" href="comments/feed/index.html" />
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
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/7.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.2" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed9c46.json?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1ed6?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2F&amp;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style></head>

<body id="top-gap-fixed-header" class="home page-template page-template-page-templates page-template-template-homepage page-template-page-templatestemplate-homepage-php page page-id-7">
		
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

	<!--header-->
	
     <?php include "header.php"; ?>

<!-- Banner slider -->
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
  <div class="companies20-content">
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view">
            <style>
              .w3l-main-slider .banner-view {
                background: url(wp-content/themes/coffee/assets/images/banner1.jpg);
                background-size: cover;
              }
            </style>
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                  <h5 class="BannerSlider">
                    Coffee time <span>is a chance to slowdown</span>                  </h5>
                  <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    quisquam, doloremque placeat aut numquam ipsam. </p>

                  <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2"
                    href="reservation.php?id=<?php echo $id; ?>">
                    Book a table</a>

                  <a class="btn btn-style btn-white mt-sm-5 mt-4" href="about.php?id=<?php echo $id; ?>">
                    About us</a>

                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top1">
            <style>
              .w3l-main-slider .banner-view.banner-top1 {
                background: url(wp-content/themes/coffee/assets/images/banner2.jpg);
                background-size: cover;
              }
            </style>
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                  <h5>
                    Coffee <span>makes us fresh & Active</span>                  </h5>
                  <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    quisquam, doloremque placeat aut numquam ipsam. </p>

                  <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2"
                    href="reservation.php?id=<?php echo $id; ?>">
                    Book a table</a>

                  <a class="btn btn-style btn-white mt-sm-5 mt-4" href="about.php?id=<?php echo $id; ?>">
                    About us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2">
            <style>
              .w3l-main-slider .banner-view.banner-top2 {
                background: url(wp-content/themes/coffee/assets/images/banner3.jpg);
                background-size: cover;
              }
            </style>
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                  <h5>
                    We provide <span>the best taste coffee</span>                  </h5>
                  <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
		                quisquam, doloremque placeat aut numquam ipsam. </p>

                  <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2"
                    href="reservation.php?id=<?php echo $id; ?>">
                    Book a table</a>

                  <a class="btn btn-style btn-white mt-sm-5 mt-4" href="about.php?id=<?php echo $id; ?>">
                    About us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3">
            <style>
              .w3l-main-slider .banner-view.banner-top3 {
                background: url(wp-content/themes/coffee/assets/images/banner4.jpg);
                background-size: cover;
              }
            </style>
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg">
                  <h5>
                    We offer <span>you the best coffee product</span>                  </h5>
                  <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    quisquam, doloremque placeat aut numquam ipsam. </p>

                  <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2"
                    href="reservation.php?id=<?php echo $id; ?>">
                    Book a table</a>

                  <a class="btn btn-style btn-white mt-sm-5 mt-4" href="about.php?id=<?php echo $id; ?>">
                    About us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
    <!-- <div class="icon-pos">
            <a href="#bottom"><span class="fa fa-arrow-down"></span></a>
        </div> -->
  </div>
</section>
<!-- /main-slider -->

<section>
  </section>

<!-- //Banner slider -->






<!--  HomePage About Section -->

<section>
  </section>


<section class="w3l-index3" id="bottom">
  <div class="midd-w3 py-5">
    <div class="container py-lg-5 py-md-3 HomePageAbout">
      <div class="row">
        <div class="col-lg-6 about-right-faq align-self">
          <h5 class="title-small mb-3">
            Our Skills</h5>
          <h3 class="title-big">
            We make the delicious coffee for the coffee lovers.          </h3>
          <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
            ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Non quae, fugiat consequatur voluptatem nihil ad. Lorem ipsum dolor sit amet</p>
          <a href="#url"
            class="btn btn-style border-btn mt-lg-5 mt-4">Know More</a>
        </div>
        <div class="col-lg-6 left-wthree-img text-right mt-lg-0 mt-5 ">
          <img
            src="wp-content/themes/coffee/assets/images/about.jpg"
            alt="" class="radius-image img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  </section>

<!-- // HomePage About Section -->





<!-- HomePage Services -->

<section>
  </section>

<section class="w3l-homeblock2 pb-5" id="services">
  <div class="container py-lg-5 py-md-4 HomePageServices">

    <div class="grids-area-hny main-cont-wthree-fea row justify-content-center">

                  <div class="col-lg-3 col-sm-6 grids-feature mt-5">
        <div class="area-box">
          <span
            class="fa fa-coffee"></span>
          <h4><a href="#url"
              class="title-head">Types of Coffee</a>
          </h4>
          <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed doloramet laoreet.</p>
        </div>
      </div>
      
                  <div class="col-lg-3 col-sm-6 grids-feature mt-5">
        <div class="area-box">
          <span
            class="fa fa-glass"></span>
          <h4><a href="#url"
              class="title-head">Bean Varieties</a>
          </h4>
          <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed doloramet laoreet.</p>
        </div>
      </div>
      
                  <div class="col-lg-3 col-sm-6 grids-feature mt-5">
        <div class="area-box">
          <span
            class="fa fa-pagelines"></span>
          <h4><a href="#url"
              class="title-head">Coffee & Pastry</a>
          </h4>
          <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed doloramet laoreet.</p>
        </div>
      </div>
      
                  <div class="col-lg-3 col-sm-6 grids-feature mt-5">
        <div class="area-box">
          <span
            class="fa fa-envira"></span>
          <h4><a href="#url"
              class="title-head">Coffee to go</a>
          </h4>
          <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed doloramet laoreet.</p>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section>
  </section>

<!-- //HomePage Services -->






<!--  HomePage Content with Photo Section -->

<section>
  </section>

<section class="w3l-homeblock3">
  <div class="midd-w3 py-5">
    <div class="container py-lg-5 py-md-3 HomePageCWP">
      <div class="row">

        <div class="col-lg-6 ">
          <img
            src="wp-content/themes/coffee/assets/images/bg.jpg"
            alt="" class="radius-image img-fluid">
        </div>

        <div class="col-lg-6 mt-lg-0 mt-3 about-right-faq align-self">
          <h3 class="title-big">
            The Easiest and most convenient way to make coffee          </h3>
          <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel.</p>

          <ul class="w3l-lists mt-4">
            <li><span class="fa fa-check" aria-hidden="true"></span>
              1 cup unsweetened cocoa powder            </li>
            <li><span class="fa fa-check" aria-hidden="true"></span>
              1/2 cup butter, cut into 1–inch pieces            </li>
            <li><span class="fa fa-check" aria-hidden="true"></span>
              1 1/4 cups granulated sugar            </li>
            <li><span class="fa fa-check" aria-hidden="true"></span>
              1/2 cup firmly packed dark brown sugar            </li>
            <li><span class="fa fa-check" aria-hidden="true"></span>
              1 1/4 tsp baking soda</li>
            <li><span class="fa fa-check" aria-hidden="true"></span>
              Add a Insulated Coffee Flask / Shaker & a Cafe Cap            </li>
          </ul>

        </div>

      </div>
    </div>
  </div>
</section>

<section>
  </section>

<!--  //HomePage Content with Photo Section -->





<!--  HomePage Videos section -->

<section>
  </section>


<section class="w3l-homeblock4 py-5" id="video">
  <div class="video-recipe py-lg-5 py-md-3">
    <div class="container HomePageVideos">

      <div class="row">

        <div class="col-lg-5 align-self">
          <h3 class="title-big">
            Do you want to retain the video recipe?          </h3>
          <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat consequatur voluptatem nihil ad. Lorem ipsum dolor sit amet</p>
        </div>

        <div class="col-lg-7 mt-lg-0 mt-5 ">
          <div class="row">

            <div class="col-md-6">
              <iframe src="https://www.youtube.com/embed/0S4MlIuUx5k" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              <h3 class="video-title mt-4">
                Gather more information from coffee              </h3>
            </div>

            <div class="col-md-6 mt-md-0 mt-5">
              <iframe src="https://www.youtube.com/embed/3Bv8dOca-70" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              <h3 class="video-title mt-4">
                Work with green and roasted coffee provides              </h3>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
  </section>

<!--  //HomePage Videos section -->






<!-- HomePage Branches Section-->

<section>
  </section>

<section class="w3l-homeblock5 py-5">
  <div class="container py-lg-5 py-md-3 HomePageBranches">
    <div class="row">
      <div class="col-lg-6 about-right-faq align-self">
        <h3 class="title-big">
          Sale and Delivery Points        </h3>
        <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel.</p>
        <h3 class="title-small mt-5">
          Where to buy our coffee        </h3>
        <ul class="w3l-lists mt-4">
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              Brazil (10) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              Canada (17) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              Australia (19) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              America (15) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              London (02) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              Russia (05) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              Mexico (27) </a>
          </li>
          <li><a href="#url"><span class="fa fa-check" aria-hidden="true"></span>
              England (06) </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5 ">
        <img
          src="wp-content/themes/coffee/assets/images/map.jpg"
          alt="" class="radius-image img-fluid">
      </div>
    </div>
  </div>
</section>

<section>
  </section>

<!-- //HomePage Branches Section-->





<!-- HomePage cover -->

<section>
  </section>

<div class="w3l-bg-image">
  <style>
    .w3l-bg-image {
      background: url(wp-content/themes/coffee/assets/images/banner4.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      -webkit-background-size: cover;
      -o-background-size: cover;
      -moz-background-size: cover;
      -ms-background-size: cover;
    }
  </style>
  <div class="bg-mask py-5">
    <div class="container py-lg-5 py-4 HomePageCover">
      <div class="text-align text-center py-lg-4 py-md-3">
        <h3>
          Discover The Taste Of Real Coffee        </h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
					looking at its layout.</p>
      </div>
    </div>
  </div>
</div>

<section>
  </section>

<!-- //HomePage cover -->





<!-- HomePage Timing and Reservation -->

<section>
  </section>


<section class="w3l-homeblock7 py-5">
    <div class="container py-lg-5 py-md-3 HomePageTaR">
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-4">
                <h3 class="title-big">Opening Hours and Reservations.</h3>
                <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     dignissimos quis soluta sapiente aperiam quod.</p>
            </div>
            <div class="col-lg-4 col-sm-6 col-8">
                <img src="wp-content/themes/coffee/assets/images/middle.png" alt="" class="radius-image img-fluid">
            </div>
            <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                <ul class="w3l-lists mb-md-5 mb-4">
                    <h3 class="title-small"> Opening Hours: </h3>
                    
                    <li>Monday – Friday // 09:00 - 06:00</li>
                    <li>Saturday // 10:00 – 01:00</li>
                    <li>Sunday // CLOSED</li>                </ul>
                <ul class="w3l-lists">
                    <h3 class="title-small"> Reservation numbers: </h3>
                    <li>
                    <a href="tel:+(21)-255-999-8888"><span class="fa fa-phone"></span> 
                    +(21)-255-999-8888</a></li>
                    <li>
                    <a href="tel:+(21)-255-999-8899"><span class="fa fa-phone"></span> 
                    +(21)-255-999-8899</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
  </section>

<!-- //HomePage Timing and Reservation -->






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