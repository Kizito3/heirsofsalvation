<?php

    include('conn.php');
    $subheading = $_POST['subheading'];
    $write = $_POST['write_up'];

    $banner_img = $_FILES['banner_img']['tmp_name'];
    $banner_img_name = $_FILES['banner_img']['name'];

    if(!$subheading || !$write || !$banner_img)
    {
        $error = 'All Information Are Required to Add An Image!!';
        include('Add_images.php');
        exit;
    }


    $ext = pathinfo($banner_img_name, PATHINFO_EXTENSION);

    if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
    {
        $image_extenstion = 'ok';
    }
    else{
        $error = 'File uploaded must be JPG or PNG';
        include('Add_images.php');
        exit;
    }

    $query = "insert into images set subheading = '$subheading', write_up = '$write'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        $last_id = mysqli_insert_id($conn);
        $filename = $last_id.'.'.$ext;
        $uploaded_file = "../uploads/$filename";
        


        move_uploaded_file($banner_img,$uploaded_file);

        $query = "update images set images = '$uploaded_file' where id = '$last_id'";
        $result = mysqli_query($conn,$query);

        $success = 'Images has been updated';
        include('Add_images.php');
        exit;

    }
    else{
        $error = 'The banner already exists';
        include('Add_images.php');
        exit;
    }




    
?>