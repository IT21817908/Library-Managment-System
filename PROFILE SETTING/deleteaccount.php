<?php
    session_start();
    include "../ConnectDataBase/connect.php";
    $userMail = $_SESSION['usersession'];
    $sqli = "SELECT * from registration where Email ='{$userMail}' ;";
    $result = mysqli_query($connect  ,$sqli );
    $record = mysqli_fetch_assoc($result);

    if(isset($_POST['submit5'])){
        $sqlStatement = "DELETE FROM registration WHERE Email ='{$userMail}' ;";
        
        $result = mysqli_query($connect  ,$sqlStatement );
        header("location:../loging/loging.html");

    }


?>