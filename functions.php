<?php
session_start();
ob_start();
// this file contain all the functions
include("include/db.php");
include("include/session_fail_redirect.php");

$action = $_REQUEST['action'];
if($action !='' && $action='del'){
	$id = $_REQUEST['id'];
	$sql=("DELETE FROM article WHERE id = $id");
     if ($conn->query($sql) == TRUE) {
      @unlink("upload/".$photo);
      echo "<script type= 'text/javascript'>alert('Article Deleted Successfully');</script>";
      header('location:listarticle.php');
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
      
}
?>