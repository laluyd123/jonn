<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
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

<script>
   setTimeout (function() {
      location.reload();
   }, 3000);
   
</script>

<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `s_name` ORDER BY id DESC";
      // "SELECT MAX(id) FROM `login` 

// $sql = "SELECT MAX(id) FROM `login`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<hr><spam>Id </spam>" . $row["id"]. "<spam> Student Name => </spam>" . $row["name"] . "";
}
echo "";
} else { echo ""; }
$conn->close();



?>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `s_father` ORDER BY id DESC";
      // "SELECT MAX(id) FROM `login` 

// $sql = "SELECT MAX(id) FROM `login`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<hr><spam>Id </spam>" . $row["id"]. "<spam> Father Name => </spam>" . $row["father"] . "";
}
echo "";
} else { echo ""; }
$conn->close();



?>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `contact` ORDER BY id DESC";
      // "SELECT MAX(id) FROM `login` 

// $sql = "SELECT MAX(id) FROM `login`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<hr><spam>Id </spam>" . $row["id"]. "<spam> Student Phone => </spam>" . $row["phone"] . "";
}
echo "";
} else { echo ""; }
$conn->close();



?>


</table>

<hr><hr>
</body>
</html>