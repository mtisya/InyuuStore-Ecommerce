<?php
  if(!isset($_POST['submit']))
	{
	$connection= mysqli_connect("localhost","root","");
	//Select Database
	mysqli_select_db($connection,"instore");
	if($connection){
	 echo "<br><br>Connection Established";
	 }
	else
	 {
	 echo "Connection fail" .die (mysqli_error($connection));
	}	
	//Insert Into Database
	$firstname = $_POST['firstname'];
	$lastname =$_POST['lastname'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$fax = $_POST['fax'];
	$company = $_POST['company'];
	$company_id = $_POST['company_id'];
	$address_1 = $_POST['address_1'];
	$address_2 = $_POST['address_2'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode']; 
	$country_id = $_POST['country_id'];
	$zone_id = $_POST['zone_id'];
	$newsletter = $_POST['newsletter'];
	$password = $_POST['password'];
	$md5password = md5($_POST['password']);
	$sql="INSERT INTO register  VALUES ('$firstname','$lastname','$email','$telephone','$fax','$company','$company_id','$address_1','$address_2','$city','$postcode','$country_id','$zone_id','$newsletter','$md5password')";
	$insert= mysqli_query($connection,$sql);
	if ($insert)
	{
	echo "<br><br>";
	}
	else
     {
	echo "<br><br>" . mysqli_error($connection);
	} 
//if there are any errors, I set $error_stat to 1 and put the errors in the $message:
   if (empty($_POST['firstname'])) {
      echo " Please enter your firstname."."<br/>";
   }
else
{ 
echo "<h2>Registration Successful!</h2>";
header("location:login.html");
}
}
?> 
