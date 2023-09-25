<?php
require 'connect.php';

//Get user inputs  from the form
$email=$_POST['email'];
$comment=$_POST['comment'];

$sql="INSERT INTO comments(email,comment)VALUES('$email','$comment')";
$result=$conn->query($sql);

if($result){
    echo "<p>Comment sent successfully</p>";
}else{
    echo "<p>Failed to send a comment</p>";
}

$conn->close();
?>