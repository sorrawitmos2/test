<?php
include("conn/mysqlconn.php");
// define variables and set to empty values
$firstname = $lastname = $tel = $email = $address = $gender = $date = $Month = $Year = $typerun = $levelAge = $sizeshirt = $cost_register = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $tel = test_input($_POST["tel"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
  $date = test_input($_POST["date"]);
  $Month = test_input($_POST["Month"]);
  $Year = test_input($_POST["Year"]);
  $typerun = test_input($_POST["typerun"]);
    $levelAge = test_input($_POST["levelAge"]);
    $sizeshirt = test_input($_POST["sizeshirt"]);
    $cost_register = test_input($_POST["cost_register"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $tel;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
echo "<br>";
echo $date;
echo "<br>";
echo $Month;
echo "<br>";
echo $Year;
echo "<br>";
echo $typerun;
echo "<br>";
echo $levelAge;
echo "<br>";
echo $sizeshirt;
echo "<br>";
echo $cost_register;
//insert data
$sql = "INSERT INTO userprofile (firstname,lastname,tel,email,address,gender,date,Month,Year,typerun,levelAge,sizeshirt,cost_register)
VALUES ('$firstname','$lastname','$tel','$email','$address','$gender','$date','$Month','$Year','$typerun','$levelAge','$sizeshirt','$cost_register')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<br><a href="report.php">Visit in report</a>
