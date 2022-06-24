<?php 
session_start();
ob_start();
include("include/db.php");
include("include/session_fail_redirect.php");

$id=$_REQUEST['id'];
$result=$conn->query("select * from article where id = '$id'");

if($result->num_rows > 0){

    while($rs=$result->fetch_assoc()){
        $title = $rs["title"];
        $author = $rs["author"];
        $content = $rs["content"];
        $photo=$rs['photo'];
        if($photo !=''){
          $display_image = $photo;
        }else{
          $display_image = 'default.jpg';
        }
      }
}

if(isset($_POST["submit"])){
      $editid=$_POST["id"];
      $edittitle = $_POST["title"];
      $editauthor = $_POST["author"];
      $editcontent = $_POST["content"];
      $uploadedphoto=$_FILES["photo"]["name"];
    // Check if the new uploaded photo is empty or not
    if($uploadedphoto==''){
      $newphoto=$photo;
    }else {
      $newphoto=$uploadedphoto;
      //upload photo
      $tpath= "upload/";
      $tpath= $tpath.basename($_FILES["photo"] ["name"]);
      move_uploaded_file($_FILES['photo']['tmp_name'], $tpath);
      @unlink("upload/".$photo);
    }
      $sql=("update article set title='$edittitle', author='$editauthor', content='$editcontent', photo='$newphoto' where id='$editid'");
      if ($conn->query($sql) == TRUE) {
      echo "<script type= 'text/javascript'>alert('Article Update Successfully');</script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
      //header("Location: http://localhost/php/list.php");
      echo "<script>
          window.location = 'listarticle.php';
      </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Edit Article</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>

<?php include("include/header.php");?>
<h2>Edit Article</h2>
<fieldset>
    <legend>Please Fill All the field</legend>
<form name="editarticle" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>" style="width: 100%">
    </p>
    <p>
        <label for="author">Author Full Name:</label>
        <input type="text" name="author" id="author" value="<?php echo $author; ?>" style="width: 100%">
    </p>
    <p>
        <label for="content">Content:</label>
        <textarea name="content" rows="10" cols="50" cols="150" style="width: 100%"><?php echo $content;?></textarea>
    </p>
    <p>
        <img src="<?php echo 'upload/'.$photo;?>" style="width:300px;height:200px;">
    </p>
    <p>
        <label for="photo">Change Photo:</label>
        <input name="photo" type="file" id="photo">
      </p>
    <input type="submit" value="submit" name="submit">
  </form>
</fieldset>


<?php 
include("include/footer.php");
?>
