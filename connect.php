<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','sell') or die('connection failed' .mysquli_connect_error());

if (isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['product'] ) && isset($_POST['about'])){
    $Name=$_POST['name'];
    $LastName=$_POST['lname'];
    $PhoneNumber=$_POST['phone'];
    $Email=$_POST['email'];
    $Gender=$_POST['gender'];
    $Productname=$_POST['product'];
    $AboutProduct=$_POST['about'];



$squli="INSERT INTO 'sell' ('name','lname','phone','email','gender','product','about') VALUES('$name','$lname','$phone','$email',$gender','$product','$about')";
$query=mysqli_query($conn,$squli);
if($query){
    echo 'entry successfull';
}
else{
    echo"error occoured";
}
}
}
?>
