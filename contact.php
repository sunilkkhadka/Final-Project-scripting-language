<?php 
session_start();
ob_start();
include("include/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>About MySelf</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>
<?php include("include/header.php");?>


    <h2>Contact</h2>
    
    <p>If you have any Comments or Complements, Please feel Free to Fill this Form. We will Response as Soon as possible.</p>

    <form name="RegForm" action="thankyou.php" onsubmit="return GEEKFORGEEKS()" method="post"> 
		<p>Name: <input type="text" size=65 name="Name"> </p>
		<p>Address: <input type="text" size=65 name="Address"> </p>
		<p>E-mail Address: <input type="text" size=65 name="EMail"> </p>
		<p>Password: <input type="text" size=65 name="Password"> </p>
		<p>Telephone: <input type="text" size=65 name="Telephone"> </p> 
			
		<p>SELECT YOUR COURSE 
			<select type="text" value="" name="Subject"> 
				<option>BTECH</option> 
				<option>BBA</option> 
				<option>BCA</option> 
				<option>B.COM</option>
			</select></p><br><br> 
		<p>Comments: <textarea rows="5" cols="55" name="Comment"> </textarea></p> 
		<p><input type="submit" value="send" name="Submit">	 
			<input type="reset" value="Reset" name="Reset"> 
		</p>		 
	</form> 
	

<?php 
include("include/footer.php");
?>