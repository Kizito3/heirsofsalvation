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
    include('members.php');
    exit;
}

$query = "insert into members set fullname='$fullname', email='$email', address='$addy', phone='$phone', state='$state', gender='$gender'";
$result = mysqli_query($conn,$query);

if($result){
    $success = 'Thank you for filling out this form, God bless you immediatly.';
    include('members.php');
    exit;
}else{
    $error2 = $email. 'already exists in our database';
    include('members.php');
    exit;
}




?>