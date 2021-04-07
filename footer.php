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

<!-- footer -->
<footer>
  <section class="w3l-footer-29-main py-5">


            <div class="footer-29 py-lg-4 py-md-3">
      <div class="container CoffeeFooter">
        <div class="d-grid grid-col-4 footer-top-29">

          <div class="footer-list-29 footer-1">
            <h6 class="footer-title-29">
              Contact Us</h6>

            <ul>

                                          <li>
                <p><span class="fa fa-map-marker"></span>
                  <?php echo $address ?></p>
              </li>
              
                                          <li><a href="tel:<?php echo $mobile ?>"><span class="fa fa-phone"></span>
                  <?php echo $mobile ?></a></li>
              
                                          <li><a href="mailto:<?php echo $email ?>" class="mail"><span
                    class="fa fa-envelope-open-o"></span> <?php echo $email ?></a></li>
              
            </ul>


                                    <div class="main-social-footer-29 FooterSocial">

                                          <a href="https://www.facebook.com" class="facebook"><span
                  class="fa fa-facebook"></span></a>
              
                                          <a href="https://twitter.com/" class="twitter"><span
                  class="fa fa-twitter"></span></a>
              
                                          <a href="https://myaccount.google.com"
                class="google-plus"><span class="fa fa-google-plus"></span></a>
              
                                          <a href="https://in.linkedin.com" class="linkedin"><span
                  class="fa fa-linkedin"></span></a>
              
            </div>
            
          </div>

          <div class="footer-list-29 footer-2">
                      </div>


                              <div class="footer-list-29 footer-3 FooterNewsletter">
            <h6 class="footer-title-29">
              Newsletter </h6>

            <p class="mb-3">Get in your inbox the latest News</p>

            <form action="#" class="subscribe" method="post">
              <input type="email" name="Email"
                placeholder="Email" required="">
              <button><span class="fa fa-envelope-o"></span></button>
            </form>

            <p>Subscribe and get our weekly newsletter. We'll never share your email address            </p>

          </div>
          
          <div class="footer-list-29 footer-4">
                          
          </div>

        </div>

        <div class="row grid-col-2 bottom-copies justify-content-center">

                              <p class="copy-footer-29 CopyRights col-lg-6">&copy; 2021            All Rights Reserved by            <a href="https://w3layouts.com/">
              W3Layouts.</a>
            </p>
          
                               

          <ul class="list-btm-29 col-lg-6 text-lg-right text-center">
                    
        </div>

      </div>
    </div>
    
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <!-- /move top -->

  </section>

</footer>