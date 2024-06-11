<?php

session_start();
include "../ConnectDataBase/connect.php";
$userMail = $_SESSION['usersession'];

echo $userMail;

if(isset($_POST['submit4'])){
    $images = $_FILES['file'];
    $imagefilename = $images['name'];
    echo $imagefilename;
    $imgfiletemp = $images['tmp_name'];
    echo $imgfiletemp;
    $filename_separate = explode('.',$imagefilename);
    $fileextention = strtolower($filename_separate[1]);
    $extentions = array('jpeg','jpg','png');

    if(in_array($fileextention,$extentions)){
        $uploadimage = '../category/profile_img/'.$imagefilename;
        move_uploaded_file($imgfiletemp,$uploadimage);

        $sql = "UPDATE registration SET profile_pic = '{$uploadimage}' WHERE Email ='{$userMail}';";

        $result = mysqli_query($connect ,$sql);

        if($result){
            header("location:../loging/loging.html");
        }else{
            die(mysqli_error($result));
        }

    }
}
?>