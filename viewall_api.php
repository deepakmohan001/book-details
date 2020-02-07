<?php
$r=array();
    
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb2";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
$sql="SELECT  `bookcode`,  `author`, `description`, `price`, `publisher` FROM `bookdetails`  "; 
$result=$connection->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())

    {
$bookcode=$row["bookcode"];
$author=$row["author"];
$description=$row["description"];
$price=$row["price"];
$publisher=$row["publisher"];
$r["data"][]=$row;
    }
    echo json_encode($r);
}
else
{
echo "invalid";
}


?>