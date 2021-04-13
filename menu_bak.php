<?php
include "admin/config.php";
$page = "Menu";
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
$payment_type = $row['payment_type'];

$sql = "select b.* from posord a,poskot b where a.hotel_id=$center_id and a.order_id=b.order_id and a.tblnub='$table_id' and a.status='Pending'";
$result = mysqli_query($conn, $sql);
$cart_quantity = 0;                    
while($row = mysqli_fetch_array($result)){
  $cart_quantity = $cart_quantity + $row['itmqty'];
}
?>
<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
<link rel="alternate" type="application/rss+xml" title="Coffee WordPress Theme &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Coffee WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />
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
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/12.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.2" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index678b.html?p=12' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed49b4.json?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2Fmenu-page%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed8bb0?url=https%3A%2F%2Fwp.w3layouts.com%2Fcoffee%2Fmenu-page%2F&amp;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style></head>
<style type="text/css">
        .qty .count {
            color: #000;
            display: inline-block;
            vertical-align: top;
            font-size: 25px;
            font-weight: 700;
            line-height: 30px;
            padding: 0 2px
            ;min-width: 35px;
            text-align: center;
        }
        .qty .plus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            }
        .qty .minus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            background-clip: padding-box;
        }
<body id="top-gap-fixed-header" class="page-template page-template-page-templates page-template-template-menupage page-template-page-templatestemplate-menupage-php page page-id-12">
		
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
	<!--<div class="pull-right-demo-bar toggle-right-sidebar">
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

</br>
<!-- Menu breadcrumb -->
<!--<section class="w3l-breadcrumb">
  <div class="container">
    <ul class="breadcrumbs-custom-path AllBreadcrumbs">
      <a href="https://wp.w3layouts.com/coffee" rel="nofollow">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Menu page    </ul>
  </div>
</section>-->
<!-- //Menu breadcrumb -->






<div class="w3l-menublock py-5">
  <!-- menu block -->
  <div id="w3l-menublock" class="text-center">
    <div class="container-fluid MenuPageMenuItems" >
 <?php
                            $sql2 = "select * from category ORDER BY id";
                            $result2 = mysqli_query($conn, $sql2);
                            $i=0;
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                            	$i++;
                            ?>
                          <input id="tab<?php echo $row2['id']; ?>" type="radio" name="tabs" <?php if($i==1) echo "checked"; ?> >
      <label class="tabtle" for="tab<?php echo $row2['id']; ?>"><?php echo $row2['category_name']; ?></label>
							<?php } ?>
	
     			 <?php
						$sql = "select a.*,b.category_name from project a,category b where a.category_id=b.id and a.status='In Stock' and a.center_id='$center_id' ORDER BY project_name";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
      <section id="content<?php echo $row['category_id']; ?>" class="tab-content text-left">
        <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
        <div class="row menu-body">
          <!-- Section starts: Appetizers -->
          <div class="col-lg-3">
		   </div>
		   
          <div class="col-lg-6 menu-section pr-lg-5">
            <!-- Item starts -->

                       
            <div class="menu-list"> 
              <img
                src="admin/photo/<?php echo $row['photo']; ?>"
                alt="" class="radius-image img-fluid">
              <div>
                <div class="row border-dot no-gutters">
                  <div class="col-8 menu-list-name">
                    <h6><?php echo $row['project_name']; ?></h6>
                  </div>
                  <div class="col-4 menu-list-price text-right">
                    <h6>&#2352;<?php echo $row['pricing']; ?></h6>
                  </div>
              </div>
              	<?php if($payment_type!=1){ ?>
                <div class="col-12 quantity_span text-right pull-right" style="padding-top: 5px">
				  	<span class="add_button_span" >
					<button  class="pull-right btn btn-sm btn-danger font-weight-bold add_qty" >ADD</button>
					</span>
					<span class="plus_minus_span qty" style="display: none">
						<input type="hidden" class="id" value="<?php echo $row['id']; ?>" />
 						<input type="hidden" class="center_id" value="<?php echo $row['center_id']; ?>" />
 						<input type="hidden" class="project_name" value="<?php echo $row['project_name']; ?>" />
 						<input type="hidden" class="pricing" value="<?php echo $row['pricing']; ?>" />
                    	<span class="minus bg-danger">-</span>
                    	<input style="color:black" readonly="readonly" type="text" maxlength="2" size="2" class="qty_text" name="qty_text" value="0">
                    	<span class="plus bg-success">+</span>
                	</span>
			  	</div>
			    <?php } ?>
            </div>
          </div>
        </div>
      </section>
	  <?php } ?>
    </div>
  </div>
  <!-- menu block -->
</div>
<?php if($payment_type!=1){ ?>
<nav class="navbar fixed-bottom navbar-expand-lg">
	<button type="button" id="order_button" class="btn btn-lg btn-danger font-weight-bold" onclick="place_order()" />Place Order</button>
	<?php
      if($cart_quantity>0){
      ?>
      <a class="btn btn-lg btn-danger font-weight-bold" href="cart.php?hotel_id=<?php echo $center_id; ?>&tblnub=<?php echo $table_id; ?>">View Bill</a>
      <?php
      }
      ?>
</nav>
<?php } ?>	
<!-- //MenuPage Menu section -->
<footer>
<?php include "menu_footer.php" ?>

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


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #aaaa55">
        <div class="modal-body" id="modalbody"></div>
        <div class="text-center" style="text-align: center !important">
          <button type="button" onclick="cancel_order()"  class="btn btn-info btn-sm text-center" >Cancel</button>
          <button id="confirm_button" type="button" onclick="confirm_order()" class="btn btn-info btn-sm text-center" >Confirm</button>
        </div>
      </div>
    </div>
  </div>



<script type="text/javascript">
  var item_obj = {};

  function cancel_order(){
    if (confirm("All items will be removed. Are you Sure?") == true) {
      window.location.href = "menu.php?center_id=<?php echo $center_id; ?>&table_id=<?php echo $table_id; ?>";
    }
  }

  function confirm_order() {
    $("#confirm_button").attr("disabled","true");
    var item_selected = false;
    var sales = new Array();
    var hotel_id = "<?php echo $center_id; ?>";
    var tblnub = "<?php echo $table_id; ?>";
    for (var key in item_obj) {
      if(item_obj[key]['qty']>0){
        item_selected=true;
        var record = {
          'itmcod': key,
          'itmrat': item_obj[key]['itmrat'],
          'itmnam': item_obj[key]['itmnam'],
          'quantity': item_obj[key]['qty']
        };
        sales.push(record);
      }
    }
      var sales_data = JSON.stringify(sales);
      console.log(sales_data);
      $.ajax({
          type: 'POST',
          url: 'save_sales.php',
          data: {
          	  hotel_id: hotel_id,
          	  tblnub: tblnub,	
              sales: sales_data
          },
          success: function (response) {
          	  console.log(response);
	          window.location.href = "cart.php?hotel_id=<?php echo $center_id; ?>&tblnub=<?php echo $table_id; ?>";
          },
          error : function(error){
              console.log(error);
          }
      });
  }
  function place_order() {
    var item_selected = false;
    var sales = new Array();
    for (var key in item_obj) {
      if(item_obj[key]['qty']>0){
        item_selected=true;
        var record = {
          'itmcod': key,
          'itmrat': item_obj[key]['itmrat'],
          'itmnam': item_obj[key]['itmnam'],
          'quantity': item_obj[key]['qty'],
          'center_id': item_obj[key]['center_id']
        };
        sales.push(record);
        console.log(record);
      }
    }
    if(!item_selected){
      alert("Please add an item");
      return;
    }

    $("#myModal").modal({backdrop: 'static', keyboard: false});
    var html='<div class="table-responsive"><table class="table table-bordered table-striped">';
    html+='<tbody>';    
    var i=0;
    for (var key in item_obj) {
      if(item_obj[key]['qty']>0){
        var rate=item_obj[key]['itmrat'];
        rate = parseInt(rate, 10);
        html+='<tr  id="addr'+i+'">';
        html += "<td style='text-align: left;font-weight:bold' colspan='2'>"+item_obj[key]['itmnam']+"<br>&#2352;"+rate+"<br>";
        html +='<div class="qty text-center" style="text-align:center !important">';
        html +="<span onclick='minus_item("+i+","+key+",this)' class='minus bg-info'>-</span>";
        html +='<input style="color:black" readonly="readonly" type="text" maxlength="2" size="2" class="quantity" value="'+item_obj[key]['qty']+'">';
        html +="<span onclick='plus_item("+i+","+key+",this)' class='plus bg-info'>+</span>";
        html +="<span style='font-weight:bold;color:red;vertical-align:middle' onclick='remove_item("+i+","+key+")' class='fa fa-2x fa-trash-o pull-right'></span>";
        html +='</div>';
        html += "</td></tr>";
        i++;
      }
    }
    html+='</tbody>';    
    html +='</table></div>';
    $("#modalbody").html(html);
  }  

  function minus_item(row,id,self){
    var divUpd = $(self).parent().parent().find('.quantity');
    newVal = parseInt(divUpd.val(), 10) - 1;
    item_obj[id]['qty'] = newVal;
    if (newVal >= 1) {
      divUpd.val(newVal);
      return;
    }else{
      var item_selected = false;
      $("#addr" + row).remove();
      item_obj[id]['qty'] = 0;
      for (var key in item_obj) {
        if(item_obj[key]['qty']>0){
          item_selected=true;
        }
      }
      if(!item_selected){
        window.location.href = "menu.php?center_id=<?php echo $center_id; ?>&table_id=<?php echo $table_id; ?>";
      }
    }
  }

  function plus_item(row,id,self){
    var divUpd = $(self).parent().parent().find('.quantity');
    newVal = parseInt(divUpd.val(), 10) + 1;
    divUpd.val(newVal);
    item_obj[id]['qty'] = newVal;
  }

  function remove_item(row,id){
    var item_selected = false;
    $("#addr" + row).remove();
    item_obj[id]['qty'] = 0;
    for (var key in item_obj) {
      if(item_obj[key]['qty']>0){
        item_selected=true;        
      }
    }
    if(!item_selected){
      window.location.href = "menu.php?center_id=<?php echo $center_id; ?>&table_id=<?php echo $table_id; ?>";
    }
  }

  $('.modal').on('show.bs.modal', function (ev) { // prevent body from scrolling when modal opens
    $('body').bind('touchmove', function(e){
        if (!$(e.target).parents().hasClass( '.modal' )){ //only prevent touch move if it is not the modal
            e.preventDefault()
        }
    })
  })
  $('.modal').on('hide.bs.modal', function (e) { //unbind the touchmove restrictions from body when modal closes
      $('body').unbind('touchmove');
  })
</script>
<script>
(function (global) {

	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };
	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {
        
		noBackPlease();

		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };
		
    };

})(window);
</script>

<script>
$(document).ready(function () {
	
	$('.add_qty').click(function () {
		var object1 = $(this).parent().parent('.quantity_span'); 
		var object2 = $(object1).find(".add_button_span");
		var object3 = $(object1).find(".plus_minus_span");
		var object4 = $(object1).find(".qty_text");
		$(object4).val("1");
		var itmcod = $(object1).find(".id").val();
		var center_id = $(object1).find(".center_id").val();
		var itmnam = $(object1).find(".project_name").val();
		var itmrat = $(object1).find(".pricing").val();
		item_obj[itmcod] = {};
		item_obj[itmcod]['qty'] = 1;
		item_obj[itmcod]['center_id'] = center_id;
		item_obj[itmcod]['itmnam'] = itmnam;
		item_obj[itmcod]['itmrat'] = itmrat;
		$(object2).hide();
		$(object3).show();
	});

	$('.plus').click(function () {
		var object1 = $(this).parent(); 
		var object2 = $(object1).find(".qty_text");
		var v = parseInt($(object2).val());
		v = v + 1;
		object2.val(v);
		var itmcod = $(object1).find(".id").val();
		var center_id = $(object1).find(".center_id").val();
		var itmnam = $(object1).find(".project_name").val();
		var itmrat = $(object1).find(".pricing").val();
		item_obj[itmcod] = {};
		item_obj[itmcod]['qty'] = v;
		item_obj[itmcod]['itmrat'] = itmrat;
		item_obj[itmcod]['itmnam'] = itmnam;
		item_obj[itmcod]['center_id'] = center_id;
		console.log(itmrat);
	});

	$('.minus').click(function () {
		var object1 = $(this).parent(); 
		var object2 = $(object1).find(".qty_text");
		var v = parseInt($(object2).val());
		v = v - 1;
		object2.val(v);
		var object3 = $(this).parent().parent('.quantity_span'); 
		var object4 = $(object3).find(".add_button_span");
		var object5 = $(object3).find(".plus_minus_span");
		var itmcod = $(object1).find(".id").val();
		var center_id = $(object1).find(".center_id").val();
		var itmnam = $(object1).find(".project_name").val();
		var itmrat = $(object1).find(".pricing").val();
		item_obj[itmcod] = {};
		item_obj[itmcod]['qty'] = v;
		item_obj[itmcod]['itmrat'] = itmrat;
		item_obj[itmcod]['itmnam'] = itmnam;
		item_obj[itmcod]['center_id'] = center_id;
		if(v == 0){
			$(object5).hide();
			$(object4).show();
		}		
	});
});	
</script>	
</body>


</html>