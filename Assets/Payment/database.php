<?php
$pcode=$_REQUEST["pcode"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$mobile=$_REQUEST["mobile"];
$address=$_REQUEST["address"];
$host='localhost';
$user='root';
$password='';
$database='shop';
$con=mysqli_connect($host,$user,$password);
if(!$con){
    die('Connection Failed');
}
// echo "Connected Succesfully <br>";

mysqli_select_db($con,$database);
mysqli_query($con,"insert into orders values('$pcode','$name','$email','$mobile','$address')");
echo"Your Order has Been Placed Successfully <br><br> Thanks For Ordering";
?>