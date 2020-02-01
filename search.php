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
   <h1>
       Search
   </h1> 
   <br>
   <form method="GET">
   <table class="table">
       <tr>
           <td>
               book title
           </td>
           <td>
               <input type="text"class="form-control"name="getbooktitle">
           </td>
       </tr>
       <tr>
           <td>

           </td>
           <td>
               <button type="submit" class="btn btn-warning"name="submit">
                   search
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
    $booktitle=$_GET["getbooktitle"];
    $Servername="localhost";
$Dbusername="root";
$Dbpassword="";
$Dbname="mydb2";
$connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
$sql="SELECT  `bookcode`,  `author`, `description`, `price`, `publisher` FROM `bookdetails` WHERE `booktitle`='$booktitle'"; 
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
echo "<table class='table'><tr><td>bookcode</td><td>$bookcode</td></tr>
<tr><td>author</td><td>$author</td></tr>
<tr><td>description</td><td>$description</td></tr>
<tr><td>price</td><td>$price</td></tr>
<tr><td>publisher</td><td>$publisher</td></tr>";
    }
}
else
{
    echo"invalid";
}
}
?>