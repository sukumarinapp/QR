<?php
include "admin/config.php";
$page = "Menu";
$center_id = $_GET['center_id'];
$table_id = $_GET['table_id'];
$sql = "select * from users where id=$center_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$full_name = $row['full_name'];
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
<!DOCTYPE html>
<html lang="en">
<title><?php echo $full_name ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="admin/css/bootstrap.min.css" rel="stylesheet">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
   <style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
</style>
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
        </style>
<body style="max-width: 400px;background-color: black">
<nav>
<div class="w3-top" style="max-width: 400px">


<div class="w3-bar w3-black w3-card" style="max-width: 400px">
<div class="scrollmenu" style="max-width: 400px">
<?php
  $sql2 = "select * from category where id in (select distinct(category_id) from project where center_id=$center_id and status='In Stock') ORDER BY id";
  $result2 = mysqli_query($conn, $sql2);
  $i=0;
  while ($row2 = mysqli_fetch_assoc($result2)) {
    $i++;
?>
<a href="#<?php echo $row2['id']; ?>"><?php echo $row2['category_name']; ?></a>
<?php
  }
?>
</div>
</div>
</div>
</nav>
<!-- Page content -->
<div class="w3-content" >
 <?php
$sql = "select a.*,b.category_name from project a,category b where a.category_id=b.id and a.status='In Stock' and a.center_id='$center_id' ORDER BY a.category_id";
  $result = mysqli_query($conn, $sql);
  $cat=0;
  while ($row = mysqli_fetch_assoc($result)) {
?>
<?php if($cat<>$row['category_id']){  ?>
<div style="min-height: 50px" id="<?php echo $row['category_id']; ?>">
</div>  
<div style="margin-bottom: 5px" class="btn btn-success btn-block font-weight-bold"><?php echo $row['category_name']; ?></div>
<?php }  ?>
<div class="w3-black" >
    <div class="w3-container w3-content w3-padding-64" style="max-width:400px">    
      <div class="w3-padding-20 w3-ul quantity_span pull-right" style="margin-bottom: 5px">
        <img src="admin/photo/<?php echo $row['photo']; ?>" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php echo $row['project_name']; ?></span><span class="w3-large pull-right">&#2352; <?php echo $row['pricing']; ?></span>
        <div><?php echo nl2br($row['description']); ?></div><div class="add_button_span" >
          <button  class="pull-right btn btn-sm btn-danger font-weight-bold add_qty" >ADD</button>
          </div>
          <span class="plus_minus_span qty pull-right" style="display: none">
            <input type="hidden" class="id" value="<?php echo $row['id']; ?>" />
            <input type="hidden" class="center_id" value="<?php echo $row['center_id']; ?>" />
            <input type="hidden" class="project_name" value="<?php echo $row['project_name']; ?>" />
            <input type="hidden" class="pricing" value="<?php echo $row['pricing']; ?>" />
                      <span class="minus bg-danger">-</span>
                      <input style="color:black" readonly="readonly" type="text" maxlength="2" size="2" class="qty_text" name="qty_text" value="0">
                      <span class="plus bg-success">+</span>
                  </span>
      </div>
    <hr>
    </div>  
  </div>
<?php
  $cat=$row['category_id'];
  }
?>
</div>
<script src="wp-content/themes/coffee/assets/js/jquery-2.1.4.min.js"></script>  
<script src="wp-content/themes/coffee/assets/js/bootstrap.min.js"></script>  




<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" >
      <div class="modal-content" style="background-color: white;padding-bottom: 10px">
        <div class="modal-body" id="modalbody"></div>
        <div class="text-center" style="text-align: center !important">
          <button type="button" onclick="cancel_order()"  class="btn btn-info btn-sm text-center" >Cancel</button>
          <button id="confirm_button" type="button" onclick="confirm_order()" class="btn btn-info btn-sm text-center" >Confirm</button>
        </div>
      </div>
    </div>
  </div>
<h1 style="color:white;font-weight:bold"><a class="navbar-brand"><img width="30" height="30" src="admin/photo/logo/<?php echo $photo; ?>" /> <?php echo $full_name; ?></a></h1>
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

<h1 style="color:white;font-weight:bold"><a class="navbar-brand"><img width="30" height="30" src="admin/photo/logo/<?php echo $photo; ?>" /> <?php echo $full_name; ?></a></h1>
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
      $.ajax({
          type: 'POST',
          url: 'save_sales.php',
          data: {
          	  hotel_id: hotel_id,
          	  tblnub: tblnub,	
              sales: sales_data
          },
          success: function (response) {
          	  response=JSON.parse(response);
          	  if(response["status"]=="fail"){
          	  	alert(response["message"]);
          	  	return;
          	  }else{
	          	window.location.href = "cart.php?hotel_id=<?php echo $center_id; ?>&tblnub=<?php echo $table_id; ?>";
          	  }
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
