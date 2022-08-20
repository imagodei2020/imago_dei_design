<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imago Dei Design - Home</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <nav class="main_nav">
    <ul class="main_nav_items" id="dropdown_click">
      <li class="main_nav_item"><a href="index.php">Home</a></li>
      <li class="main_nav_item"><a href="about.php">About</a></li>
      <li class="main_nav_item"><a href="social.php">Social</a></li>
      <li class="main_nav_item"><a href="contact.php">Contact</a></li>
      <li class="main_nav_item"><a href="blog.php">Blog</a></li>
      <li class="main_nav_item"><a href="store.php">Merch</a></li>
      <li class="main_nav_item main_nav_right"><a href="signin.php">Sign-In</a></li>
      <li class="main_nav_item main_nav_right"><a href="signup.php">Sign-Up</a></li>
      <li class="main_nav_item dropdown_icon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
    </ul>
  </nav>
  <div class="container" id="section_1_gradient">
    <div class="row">
      <div class="col_6">
        <div class="leftside_col">
          <h1 class="large">Imago Dei Design</h1>
          <h1 class="large">Made For Developers By Developers!</h1>
        </div>
      </div>
      <div class="col_6">
        <div class="rightside_col">
          <div class="logo_container">
            <img class="logo" src="images/imago_logo.webp">
          </div>
        </div>
      </div>
    </div>
  </div>
  <header>
    <h1 class="section_2_header">Tier Packages</h1>
  </header>
  <div class="container">
    <div class="row">
      <div class="col_4">
        <div class="box">
          <div class="icon">
            <img src="">
      </div>
      <label>Tier 1 Package</label>
      <p></p>
    </div>
  </div>
</div>
</div>
  <footer class="main_footer">
    <div class="row">
      <div class="col_3">
        <h1>Company</h1>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="social.php">Social</a></li>
        </ul>
      </div>
      <div class="col_3">
        <h1>Products</h1>
        <ul>
          <li><a href="store.php">Merch</a></li>
          <li><a href="#">Android Apps</a></li>
          <li><a href="tutorials.php">Tutorials</a></li>
        </ul>
      </div>
      <div class="col_3">
        <h1>Learn More</h1>
        <ul>
          <li><a href="#">Developers</a></li>
          <li><a href="#">Imago Dei Design</a></li>
          <li><a href="#">Hackers</a></li>
        </ul>
      </div>
      <div class="col_3">
        <h1>Support</h1>
        <ul>
          <li><a href="#">Help</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
  </div>
  <div class="row">
  <div class="col_11">
    <h3 class="copyright">Copyright &copy;:<?php echo date('Y'); ?> | <em>Imago Dei Design</em> | All Rights Reserved!</h3>
  </div>
  </div>
  </footer>
  <script src="mobile.js"></script>
</body>
</html>
