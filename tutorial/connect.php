<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $conn=mysquli_connect('localhost','root','','seller info') or die('connection failed' .mysquli_connect_error());

if (isset($_POST['Name']) && isset($_POST['Last Name']) && isset($_POST['Phone-Number']) && isset($_POST['E-mail']) && isset($_POST['Gender']) && isset($_POST['Product-Name'] ) && isset($_POST['About-product'])){
    $Name=$_POST['Name'];
    $LastName=$_POST['LastName'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Email=$_POST['Email'];
    $Gender=$_POST['Gender'];
    $Productname=$_POST['Productname'];
    $AboutProduct=$_POST['AboutProduct'];



$squli="INSERT INTO 'seller info' ('Name','Last Name','PhoneNumber','E-mail','Gender','ProductName','AboutProduct') VALUES('$Name','$LastName','$PhoneNumber','$Email',$Gender','$product name','$aboutproduct')";
$query=mysquli_query($conn,$squli);
if($query){
    echo 'entry successfull';
}
else{
    echo"error occoured"
}
}
}
?>
