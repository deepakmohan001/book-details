<?php
if(isset($_POST["bkcode"]))
{
    $uptitle=$_POST["updatetitle"];
    $upauthor=$_POST["updateauthor"];
    $updescription=$_POST["updatedescription"];
    $upprice=$_POST["updateprice"];
    $uppublisher=$_POST["updatepublisher"];
    $bkcode=$_POST["bkcode"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb2";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="UPDATE `bookdetails` SET `booktitle`='$uptitle',`author`='$upauthor',`description`='$updescription',`price`= $upprice,`publisher`='$uppublisher' WHERE `bookcode`=$bkcode";
    $result=$connection->query($sql);
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