<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Customer ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Restaurant ID</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "kyliemer_Homework3";
$password = "ChunkyMonkey01!";
$dbname = "kyliemer_Homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Customer_ID, Customer_FirstName, Customer_LastName, Restaurant_ID FROM Customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["Customer_ID"]?></td>
    <tx><a href="Customer-Restaurant.php?id="<?=$row["Customer_FirstName"]?>?=$row["Customer_FirstName"]?></a></td>
    <td><?=$row["Customer_LastName"]?></td>
    <td><?=$row["Restaurant_ID"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
