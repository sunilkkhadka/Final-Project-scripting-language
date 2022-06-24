<?php 
session_start();
ob_start();
include("include/db.php");
include("include/session_fail_redirect.php");

if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $author = $_POST["author"];
        $content = $_POST["content"];

        $tpath= "upload/";
        $tpath= $tpath.basename($_FILES["photo"] ["name"]);
        move_uploaded_file($_FILES['photo']['tmp_name'], $tpath);
        $uploadedphoto=$_FILES["photo"]["name"];
        if($uploadedphoto==''){
            $uploadedphoto='';
        }

        $sql = "INSERT INTO article(title, author, content,photo) VALUES ('".$title."','".$author."','".$content."','".$uploadedphoto."')";
        if ($conn->query($sql) == TRUE) {
        echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
        //header('location:listarticle.php');
        } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
        }
        echo "<script>
          window.location = 'listarticle.php';
      </script>";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Sample Project</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>

<?php include("include/header.php");?>
<h2>Add New Article</h2>
<form name="editarticle" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <fieldset>
    <legend>Please Fill All the field</legend>
    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" style="width: 100%">
    </p>
    <p>
        <label for="author">Author Full Name:</label>
        <input type="text" name="author" id="author" style="width: 100%">
    </p>
    <p>
        <label for="content">Content:</label>
        <textarea name="content" rows="10" cols="150" style="width: 100%"></textarea>
    </p>
    <p>
        <label for="photo">Photo:</label>
        <input name="photo" type="file" id="photo">
      </p>
    <input type="submit" name="submit" value="submit">
    </fieldset>
</form>


<?php 
include("include/footer.php");
?>
