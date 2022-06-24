<?php 
session_start();
ob_start();
include("include/db.php");
include("include/session_fail_redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>List of All Article</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta title="Basic PHP Project">
      <link rel="stylesheet" type = "text/css" href="css/project.css">
</head>
<body>

<?php include("include/header.php");?>
<h2>Article List</h2>

<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td width="5%"><div align="center"><b>S.N.</b></div></td>
        <td width="20%"><div align="center"><b>Title</b></div></td>
        <td width="10%"><div align="center"><b>Author</b></div></td>
        <td width="50%"><div align="center"><b>Content</b></div></td>
        <td width="15%"><div align="center"><b>&nbsp;</b></div></td>
    </tr>
    <?php
    $sql="select * from article";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $r=1;
    while($rows = $result->fetch_assoc()){
        $pos=strpos($rows['content'], ' ', 50);
        $content = substr($rows['content'],0,$pos );
        $id = $rows['id'];
        ?>

        
        <tr>
            <td><div align="center"><?php echo $r; ?></div></td>
            <td><div align="center"><?php echo $rows['title'];  ?> </div></td>
            <td><div align="center"><?php echo $rows['author']; ?> </div></td>
            <td><div align="center"><?php echo $content; ?> </div></td>
            <td><div align="center"><a href="editarticle.php?id=<?php echo $id; ?>"> [ Edit ]</a></div></td>
        </tr>
            <?php $r++;
    }
}

?> 
</table>


<?php 
include("include/footer.php");
?>
