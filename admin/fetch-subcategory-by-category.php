<?php
require_once "config.php";
$category_id = $_POST["category_id"];
$result = mysqli_query($conn,"SELECT * FROM sub_category where category_id = $category_id");
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["sub_category_name"];?></option>
<?php
}
?>