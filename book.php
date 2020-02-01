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
      <form method="GET">
      <table class="table">
          <tr>
              <td>
                  Book Code
              </td>
              <td>
                  <input type="number"name="getbookcode"class="form-control">
              </td>
          </tr>
          <tr>
              <td>
                  Booktitle
              </td>
              <td>
                  <input type="text"name="getbooktitle"class="form-control">
              </td>
          </tr>
          <tr>
              <td>
                  Author
              </td>
              <td>
                  <input type="text"name="getauthor"class="form-control">
              </td>
          </tr>
          <tr>
              <td>
                  Description
              </td>
              <td>
                  <input type="text"name="getdescription"class="form-control">
              </td>
          </tr>
          <tr>
              <td>
                  Price
              </td>
              <td>
                  <input type="number"name="getprice"class="form-control">
              </td>
          </tr>
          <tr>
              <td>
                  Publisher
              </td>
              <td>
                  <input type="text"name="getpublisher"class="form-control">
              </td>
          </tr>
          <tr>
              <td>

              </td>
              <td>
                  <button type="submit"name="submit"class="btn btn-success">submit
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
    $booktitle=$_GET["getbooktitle"];
    $author=$_GET["getauthor"];
    $description=$_GET["getdescription"];
    $price=$_GET["getprice"];
    $publisher=$_GET["getpublisher"];
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
         echo "successful";
     }
     else{
         echo "invalid";
     }
}
?>