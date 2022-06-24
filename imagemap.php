<?php 
session_start();
ob_start();
include("include/db.php");
include("include/session_fail_redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Illustration of Image Map</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>
<?php include("include/header.php");?>

<h2>Illustration of Image Map</h2>
<p>Please Move your mouse over different location of Image. It redirect you in different web pages as you click on different location.</p>
<!-- Image Map Generated by http://www.image-map.net/ -->
<img src="images/slider1.jpg" usemap="#image-map">

<map name="image-map">
    <area target="" alt="Teacher" title="Teacher" href="teacher.html" coords="2,1,165,350" shape="rect">
    <area target="" alt="First Bench" title="First Bench" href="firstbench.html" coords="310,350,305,309,303,267,308,258,417,233,488,260,747,350,499,350,445,350" shape="poly">
    <area target="" alt="glass" title="glass" href="glass.html" coords="658,208,29" shape="circle">
    <area target="" alt="Copy" title="Copy" href="copy.html" coords="315,154,29" shape="circle">
</map>




<?php 
include("include/footer.php");
?>