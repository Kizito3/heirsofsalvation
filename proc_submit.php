<?php
include('admin/examples/conn.php');
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$addy = $_POST['address'];
$phone = $_POST['phone_number'];
$state = $_POST['state'];
$gender = $_POST['gender'];

if(!$fullname || !$email || !$addy || !$state || !$gender)
{
    $error = 'Please fill out the required fields';
    include('index.php');
    exit;
}

$query = "insert into new_members set fullname = '$fullname', email = '$email', address = '$addy', phone = '$phone', state = '$state', gender='$gender'";
$result = mysqli_query($conn,$query);

if($result){
    $success = 'thank you for filling out this form..Welcome to the family';
    include('index.php');
    exit;
}else{
    $error2 = 'Email already exists';
    include('index.php');
    exit;
}

?>