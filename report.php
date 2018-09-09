<html lang="th">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
   <thead>
     <tr>
       <th>firstName</th>
       <th>lastName</th>
       <th>tel</th>
       <th>Email</th>
       <th>address</th>
       <th>gender</th>
     </tr>
   </thead>
   <tbody>
<?php
include("conn/mysqlconn.php");
$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
      <td><?php echo $row["firstname"]; ?></td>
      <td><?php echo $row["lastname"]; ?></td>
      <td><?php echo $row["tel"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["address"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
    </tr>

<?php
    }
} else {
    echo "0 results";
}

?>
</tbody>
</table>
</body>
