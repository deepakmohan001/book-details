<?php
if(isset($_POST["getbookcode"]))
{
    $bookcode=$_POST["getbookcode"];
    $booktitle=$_POST["getbooktitle"];
    $author=$_POST["getauthor"];
    $description=$_POST["getdescription"];
    $price=$_POST["getprice"];
    $publisher=$_POST["getpublisher"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb2";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="INSERT INTO `bookdetails`(`bookcode`, `booktitle`, `author`, `description`, `price`, `publisher`)
     VALUES ($bookcode,'$booktitle','$author','$description',$price,'$publisher')";
     $result=$connection->query($Sql);
     if($result===TRUE)
     {
         $r["status"]="success";
     }
     else{
        $r["status"]="error";
     }
       echo json_encode($r);
    }
     ?>