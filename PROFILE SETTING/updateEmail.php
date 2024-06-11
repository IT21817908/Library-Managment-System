<?php
    session_start();
    include "../ConnectDataBase/connect.php";
    $userMail = $_SESSION['usersession'];

    $sqli = "SELECT * from registration where Email ='{$userMail}';";
    $result = mysqli_query($connect ,$sqli );
    $record = mysqli_fetch_assoc($result);

    

    if(isset($_POST['submit1'])){
        $newMail = $_POST['newEmail'];

        echo $newMail;

        $sqlStatement = "UPDATE registration SET Email = '{$newMail}' where Email ='{$userMail}';";
        
        $result = mysqli_query($connect ,$sqlStatement );
        header("location: ../loging/loging.html");

    }


?>