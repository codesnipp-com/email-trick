<?php
$sname = $_POST['sName'];
$from = $_POST['sEmail'];
$to = $_POST['rEmail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:'.$from . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script language='javascript'>alert('Operation Successfull')</script>";
echo "<script language='javascript'>history.back(-1)</script>";



?>