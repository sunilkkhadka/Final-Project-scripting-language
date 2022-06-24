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

    <!-- <h2>About Me</h2>
    <p>Hello there,</p>
    <p>Its me Santosh Dhital, Professional Web Developer From Nepal.</p>
    <p>Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is simply copy that serves to fill a space without actually saying anything meaningful. ... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <p><strong>Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is simply copy that serves to fill a space without actually saying anything meaningful. ... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong></p>
    <img src="images/slider1.jpg" alt="Presentation" title="Class Presentation">
    <p>Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is simply copy that serves to fill a space without actually saying anything meaningful. ... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <p>Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is simply copy that serves to fill a space without actually saying anything meaningful. ... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <p>Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is simply copy that serves to fill a space without actually saying anything meaningful. ... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->

     <?php
    $sql="select * from article where id = 2";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $r=1;
    while($rows = $result->fetch_assoc()){
      ?>
      <h2><?php echo $rows['title'];?></h2>
      
     <?php   $photo=$rows['photo'];
        if($photo !=''){
            echo "<img src='upload/$photo'>";
        }
        ?>
        <p><?php echo $rows['content'];?><p>


      <?php
          }
        }
      ?>


<?php 
include("include/footer.php");
?>