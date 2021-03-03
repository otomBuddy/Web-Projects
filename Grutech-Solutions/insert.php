<?php
$conn = mysqli_connect('localhost', 'id16081888_gurutech_db','Benard@dmin60');

if (!$conn) {
echo ' Not connected to server';
}
if(!mysqli_select_db($conn,'id16081888_gurutech'))
{
echo 'Database not connected';
}

$Name= $_POST['name'];
$Mail= $_POST['email'];
$Enq= $_POST['enquiry'];

$sql="INSERT INTO form(name,email,enquiry) VALUES('$Name','$Mail','$Enq')";

if(!mysqli_query($conn,$sql)){
echo 'Not inserted';
}
else{
echo 'data inserted successfully';
}
header("refresh:2; url=index.html");

?>