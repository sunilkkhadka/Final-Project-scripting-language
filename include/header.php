<?php
if (isset($_REQUEST['logout']) && $_SESSION['login']) {
  unset($_SESSION['login']);
  session_destroy();
}
if (isset($_SESSION['login']) && $_SESSION['login'] == 'login') {
  $welcome_msg = ($_SESSION['name'] != '') ? 'Welcome, ' . $_SESSION['name'] : '';
  $log_in_out = '<a href="index.php?logout">[ LogOut ]</a>';
} else {
  $welcome_msg = '';
  $log_in_out = '<a href="login.php">[ Login ]</a>';
}
?>
<header>
  <p class="logintext"><span id="welcome"><?php echo $welcome_msg; ?></span>&nbsp;<?php echo $log_in_out; ?></p>
  <a href="index.php"><img src="imagevs/profile.jpg" alt="profile picture" title="santosh dhital"></a>
  <h2>Personal Blog</h2>
</header>
<div class="main">
  <div class="nav">
    <ul>
      <li><a href="index.php">Home Page</a></li>
      <li><a href="about.php">About Me</a></li>
      <hr>
      <li><a href="listarticle.php">Articles</a></li>
      <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'login') { ?>
        <li><a href="addarticle.php">Add Articles</a></li>
      <?php } ?>
      <hr>
      <li><a href="imagemap.php">Image Map</a></li>
      <li><a href="contact.php">Contact</a></li>

    </ul>
  </div>

  <div class="content">