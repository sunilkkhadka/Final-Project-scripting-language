<?php 
session_start();
ob_start();
include("include/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Article Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>

  <?php include("include/header.php");?>
	<!-- <div class="profile">
		<img src="images/nepal.jpg">
    <h2>Welcome to my profile page</h2>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    
  </div> -->
<!--end of profile-->

<!-- Now We are Fetching from Database -->
 <?php
    $article_id = $_REQUEST['id'];
    $sql="select * from article where id = $article_id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $r=1;
    while($rows = $result->fetch_assoc()){
      ?>

<div class="profile">
   <h2><?php echo $rows['title'];?></h2>
<?php 
  $photo=$rows['photo'];
  if($photo !=''){
      echo "<img src='upload/$photo'>";
  }
  ?>
 
  <p><?php echo $rows['content'];?><p>
</div>

<?php
    }
  }
?>
  

<?php 
include("include/footer.php");
?>
