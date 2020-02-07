<?php
if(isset($_POST["getbooktitle"]))
{
    $booktitle=$_POST["getbooktitle"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb2";
$connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
$sql="SELECT  `bookcode`,  `author`, `description`, `price`, `publisher` FROM `bookdetails` WHERE `booktitle`='$booktitle'"; 
$result=$connection->query($sql);
if($result->num_rows>0)
{
    $r=array();
    while($row=$result->fetch_assoc())

    {
$r["data"][]=$row;
    }
}
echo json_encode($r);

}
?>