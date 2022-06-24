<?php 
session_start();
ob_start();
include("include/db.php");
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

    <?php
    $sql="select * from article Order by id DESC";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $r=1;
    while($rows = $result->fetch_assoc()){
        $pos=strpos($rows['content'], ' ', 200);
        $content = substr($rows['content'],0,$pos ).'...';
        $id = $rows['id'];
        $photo=$rows['photo'];
        if($photo !=''){
            $display_image = $photo;
        }else{
            $display_image = 'default.jpg';
        }
        ?>
    <!-- <div class="article_pg">
        <div class="img_holder">
            <img src="images/nepal.jpg">
        </div>
        <div class="article_box">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non turpis tincidunt, molestie nisi vel, venenatis lacus. Phasellus commodo risus fermentum ultrices tempor. Phasellus maximus nulla non leo...</p>
            <div class="action">
                <a href="detailarticle.php?id=<?php echo $id; ?>">View Detail</a>  <a href="editarticle.php?id=<?php echo $id; ?>">Edit</a><a href="functions.php?action=del&&id=<?php echo $id; ?>" onClick="return confirm_delete()">Delete</a>
            </div>
        </div>
    </div> -->


    <div class="article_pg">
        <div class="img_holder">
            <img src="<?php echo 'upload/'.$photo;?>">
        </div>
        <div class="article_box">
            <!-- <h3> <?php echo $rows['title'];?></h3> -->
            <p> <?php echo $content;?></p>
            <div class="action">
                <a href="detailarticle.php?id=<?php echo $id; ?>">Read More</a>
            <?php   
             if(isset($_SESSION['login']) || $_SESSION['login'] =="login" ) { ?>
                <a href="editarticle.php?id=<?php echo $id; ?>">Edit</a><a href="functions.php?action=del&&id=<?php echo $id; ?>" onClick="return confirm_delete()">Delete</a>
            <?php }?>
            </div>
        </div>
    </div>

        <!-- <tr>
            <td><div align="center"><?php echo $r; ?></div></td>
            <td><div align="center"><?php echo $rows['title'];  ?> </div></td>
            <td><div align="center"><?php echo $rows['author']; ?> </div></td>
            <td><div align="center"><?php echo $content; ?> </div></td>
            <td><div align="center">[<a href="detailarticle.php?id=<?php echo $id; ?>">Detail</a> | <a href="editarticle.php?id=<?php echo $id; ?>">Edit</a> | <a href="functions.php?action=del&&id=<?php echo $id; ?>" onClick="return confirm_delete()">Delete</a> ]</div></td>
        </tr> -->
    
<?php 
    }
}

?> 


<?php 
include("include/footer.php");
?>
<script language="javascript">
    function confirm_delete(){
        var $report=confirm("Are you sure you want to delete this record");
        return $report;
}
</script>