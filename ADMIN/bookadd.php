<?php

include "../ConnectDataBase/connect.php";

if(isset($_POST['submit']))
{
    $bookName = $_POST['bookName'];
    $uploadImage = $_POST['uploadImage'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $language = $_POST['language'];
    $catagoy = $_POST['catagoy'];
    $discription = $_POST['discription'];
    $uploadPage = $_POST['uploadPage'];

    if(isset($_FILES['uploadImage']['name']))
    {
        $image_name = $_FILES['uploadImage']['name'];

       
        if($image_name != "")
        {
            
            $ext = end(explode(".", $image_name));

            
            $image_name = "BOOK-Name-".rand(0000,9999).".".$ext;


            $source_path = $_FILES['uploadImage']['tmp_name'];
            $destination_path = "images/bookcover/".$image_name;

            
            $upload = move_uploaded_file($source_path, $destination_path);

            if($upload == false)
            {
                echo "<div class='error'>Failed to upload image</div>";
                die();
            }
        }
    }
    else
    {
        $image_name = ""; 

    }

    if(isset($_FILES['uploadPage']['name']))
    {
        $image_name1 = $_FILES['uploadPage']['name'];

       
        if($image_name1 != "")
        {
            
            $ext = end(explode(".", $image_name1));

            
            $image_name1 = "Page-Name-".rand(0000,9999).".".$ext;


            $source_path2 = $_FILES['uploadPage']['tmp_name'];
            $destination_path2 = "images/pages/".$image_name1;

            
            $upload = move_uploaded_file($source_path2, $destination_path2);

            if($upload == false)
            {
                echo "<div class='error'>Failed to upload image</div>";
                die();
            }
        }
    }
    else
    {
        $image_name = ""; 

    }
    
    $sql = "INSERT INTO book (name,image_name,author,price,language,category,description,page) 
            VALUES ('$bookName','$image_name','$author',$price,'$language','$catagoy','$discription','$image_name1')";

    $result = mysqli_query($connect, $sql);

    header ("Location: admin.php");
    

}