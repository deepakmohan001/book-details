<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="book.php">Book details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit.php">Edit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">Delete</a>
          </li>
        </ul>
      </nav>      
      <h2>
        Edit
    </h2>
    <form method="GET">
    <table class="table">
        <tr>
            <td>
                bookcode
            </td>
            <td>
                <input type="text" class="form-control"name="getbookcode">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" class="btn btn-danger"name="submit">
                    Edit
                </button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_GET["submit"]))
{
$bookcode=$_GET["getbookcode"];
$Servername="localhost";
$Dbusername="root";
$Dbpassword="";
$Dbname="mydatabase";
$connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
$sql="SELECT  `booktitle`, `author`, `description`, `price`, `publisher` FROM `bookdetails` WHERE `bookcode`=$bookcode";
$result=$connection->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $booktitle=$row["booktitle"];
        $author=$row["author"];
        $description=$row["description"];
        $price=$row["price"];
        $publisher=$row["publisher"];

        echo "<form method='POST'><table class='table'> <tr> <td> booktitle</td> <td> <input type='text'name='updatetitle' value='$booktitle'/> </td> </tr>
        <tr> <td> author </td> <td><input type='text'name='updateauthor' value='$author' </td> </tr>
        <tr> <td> description </td> <td> <input type='text'name='updatedescription' value='$description'</td> </tr>
        <tr><td>price</td><td><input type='text'name='updateprice'value='$price'</td></tr>
        <tr><td>publisher</td><td><input type='text'name='updatepublisher'value='$publisher</td></tr>
        <tr><td><button type='submit' value='$bookcode' name='updatebutton' class='btn btn-success'/>update</button> <br> </form>";
    }
}
else{
    echo "invalid";
}
}
if(isset($_POST["updatebutton"]))
{
    $uptitle=$_POST["updatetitle"];
    $upauthor=$_POST["updateauthor"];
    $updescription=$_POST["updatedescription"];
    $upprice=$_POST["updateprice"];
    $uppublisher=$_POST["updatepublisher"];
    $bkcode=$_POST['updatebutton'];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb2";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="UPDATE `bookdetails` SET `booktitle`= '$uptitle',`author`='$upauthor',`description`='$updescription',`price`= $upprice,`publisher`=$uppublisher WHERE `bookcode`=$bkcode";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo "successfuly updated";
    }
    else{
        echo "error";
    }
}
?>