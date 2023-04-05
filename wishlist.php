<?php
 //connect to the database
$sql3 = mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($sql3,"instore")or die(mysqli_error());
 //file properties
@$file = $_FILES['image']['tmp_name'];
if (!isset($file))
echo "please select an image";
else {
 $username = $_SESSION['username'];
 @$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $image_name = addslashes($_FILES['image']['name']);
 @$image_size = getimagesize($_FILES['image']['tmp_name']);
 $Brand = addslashes($_POST['Brand']);
 $Product_code = addslashes($_POST['Product_code']);
 $Reward_points = addslashes($_POST['Reward_points']);
 $Availability = addslashes($_POST['Availability']);
 $Price_old = addslashes($_POST['Price_old']);
 $Price_new = addslashes($_POST['Price_new']);
 $Price_tax = addslashes($_POST['Price_tax']);
 $Reward_points = addslashes($_POST['Reward_points']);
 if ($image_size==FALSE)
 echo "That's Not an Image";
 else{
if(!$insert = mysqli_query($sql3, "INSERT INTO wishlist VALUES ('','$image_name','$image','$Brand','$Product_code','$Reward_points','$Availability','$Price_old','$Price_new','$Price_tax','$Reward_points','$username')"))
echo "Problem Upoading Image";
else {
$lastid = mysqli_insert_id($sql3);
echo "<div style=margin-left:4%; border=1>Image Uploaded.<p>Your image:</p ><img src=savedimage.php?id=$lastid width=20% height=15%></div>";
}
 }
}
?>