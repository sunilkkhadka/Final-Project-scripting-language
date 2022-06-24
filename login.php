<?php 
session_start();
ob_start();
include("include/db.php");

// if(isset($_COOKIE['remember']) and $_COOKIE['remember']=='on') {
// 	$user_id=(isset($_COOKIE['user_id']))? $_COOKIE['user_id']:"";
// 	$password=(isset($_COOKIE['password']))? $_COOKIE['password']:"";
// } 

if(isset($_POST['submit']) && $_POST['submit']=='1'){
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
	$sql="select * from tbluser where user_id='$user_id' and password='$password'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	if($result->num_rows > 0){
		$_SESSION['login']='login';						
		$_SESSION['user']=$row['user_id'];
		$_SESSION['name']=$row['name'];
		header( "Location: index.php" );
		//echo "<script>window.location.href = 'index.php';</script>";
	}else{
		echo "Incorrect User Id or Password";
		unset($_SESSION['login']);
		session_destroy();
	} 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Sample Project</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>

  <?php include("include/header.php");?>
 
    <h2>Login with User Credential</h2>
    
	<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">	
	<!--So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, 
	instead of jumping to a different page. This way, the user will get error messages on the same page as the form.-->

	<!--What is the htmlspecialchars() function?

		The htmlspecialchars() function converts special characters to HTML entities.
		This means that it will replace HTML characters like < and > with &lt; and &gt;. 
		This prevents attackers from exploiting the code by injecting HTML or Javascript code 
		(Cross-site Scripting attacks) in forms.-->
		
	<table width="500" border="0" align="center" style="text-align:left" >
		<tr>
			<td>User Id</td>
		    <td>:</td>
		    <td><input type="text" name="user_id" required="required"></td>
		</tr>
		<tr>
		    <td>Password</td>
		    <td>:</td>
		    <td><input type="password" name="password"></td>
		</tr>
		<!-- <tr>
		    <td>&nbsp;</td>
		    <td><input type="checkbox" name="remember" /></td>
		    <td>Remember Password</td>
		</tr> -->
		<tr>
			<td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td><input type="submit"  name="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td>
		</tr>
		    <input type="hidden" name="submit" value="1">
		</table>
	</form>



<?php 
include("include/footer.php");
?>