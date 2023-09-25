<?php?
require 'connect.php';

//Get user inputs from the form
$apartment=$_POST['apartment'];
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$payment_method=$_POST['payment_method'];

$sql="INSERT INTO booked_orders(apartment,full_name,email,contact,date,gender,payment_method)";
$result=$contact->query($sql);

if($result){
    echo "<p>Order placed successfully</p>";
}else{
    echo "<p>Failed to place an order</p>";
}

$conn->close();
?>