<!DOCTYPE html>
<html>
<head>
<title> Main form </title>
<style>
 	body{background: #f7f7f7;}
	.contact-form{margin:0px auto; width: 600px;padding: 10px;font-family: arial;background: white;box-shadow:4px 1px 10px 0px black;}
	label{display: inline-block;width: 150px;}
	input[type="text"]{width:300px;margin-bottom:15px;padding: 10px;}
	textarea{width:320px; height: 200px;}
</style>
</head>
<body>



<div class="contact-form">

	<form method="post" action="process.php">

		<label>Sender's Name:</label>
		<input type="text" name="sName"><br>

		<label>Sender's email:</label>
		<input type="text" name="sEmail"><br>


		<label>Receiver's email:</label>
		<input type="text" name="rEmail"><br>

		<label>Subject :</label>
		<input type="text" name="subject"><br>

		<label>Message Content:</label> 
		<textarea name="message"></textarea>

		<br /><br />
		<input type="submit" value="Submit">
 		<input type="reset" value="Reset">
	</form>
</div>


</body>
</html>
