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


            <div class="py-lg-4 py-md-3">
      <div class="container CoffeeFooter">
        

        <div class="row grid-col-2 bottom-copies justify-content-center">

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