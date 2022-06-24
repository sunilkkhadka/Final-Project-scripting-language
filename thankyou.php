<?php 
session_start();
ob_start();
include("include/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Thank You for your Enquiry.</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>
<?php include("include/header.php");?>
<p>Thank you for your specious time to communicate with us. We will response your Feedback soon. <br/>Thank you once again.</p>
<h5 style="text-align: center"> Your Submitted Data is </h5>
<div style="text-align: center;"> 
  <p>Name: <?php echo $_POST["Name"]; ?></p>
  <p>Address: <?php echo $_POST["Address"]; ?></p> 
  <p>E-mail Address: <?php echo $_POST["EMail"]; ?></p>
  <p>Password:  <?php echo $_POST["Password"]; ?></p>
  <p>Telephone: <?php echo $_POST["Telephone"]; ?></p>
  <p>YOUR COURSE :<?php echo $_POST["Subject"]; ?></p>
  
  </p>
  <p>Comments: <?php echo $_POST["Comment"]; ?></p> <br/><br>
  <p><strong>This is automated mail from system.</strong></p>
</div>


<?php 
include("include/footer.php");
?>
