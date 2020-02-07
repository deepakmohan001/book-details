<?php
if(isset($_POST["getsubmit"]))
{
    $bookcode=$_POST["getbookcode"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="mydb2";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="DELETE FROM `bookdetails` WHERE `bookcode`=$bookcode";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        $r["status"]="success";
    }
    else
    {
        $r["status"]="error";
    }
    echo json_encode($r);
}
?>