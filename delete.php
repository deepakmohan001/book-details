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
      <form method="POST">
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

          </td>
          <td>
          <button type="submit" name="getsubmit"class="btn btn-danger">delete</button>
          </td>
          </tr>
          </table>
          </form>
</body>
</html>
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
          echo"details deleted";
      }
      else
      {
          echo $connection->error;
      }
}
?>