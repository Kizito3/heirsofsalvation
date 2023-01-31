<?php
include('admin/examples/conn.php');
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$gender = $_POST['gender'];
$role = $_POST['role'];

if(!$fullname || !$email || !$gender || !$role)
{
    $error = 'Please fill out the required fields';
    include('workers.php');
    exit;
}

$query = "insert into workers set fullname='$fullname', email='$email', phone='$phone', gender='$gender', role='$role'";
$result = mysqli_query($conn,$query);

if($result){
    $success = 'Thank you for filling out this form, God bless you immediately.';
    include('workers.php');
    exit;
}else {
    $error2 = $email. 'already exits in our database';
    include('workers.php');
    exit;
}



?>