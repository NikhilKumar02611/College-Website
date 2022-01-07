<?php
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filterable Image Gallery | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <nav id="space">
    <div class="logo">St. Paul's</div>
<input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
<li><a class="active" href="../index.php">Home</a></li>
<li><a href="../index.php">About</a></li>
<li><a href="../index.php">Services</a></li>
<li><a href="#gallery">Gallery</a></li>
<li><a href="../our cources/cources.php">Cources</a></li>
</ul>
</nav>
  <header id="bottom">
    <h1>Gallery Page</h1>
    
  </header>

<section id=pic>
  <div class="wrapper">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="Fresher">Fresher</span>
        <span class="item" data-name="Sports">Sports</span>
        <span class="item" data-name="Fairewell">Fairewell</span>
        <span class="item" data-name="Aanandam">Aanandam</span>
        <span class="item" data-name="Other">Other</span>
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="all"><span><img src="images/compition1.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="all"><span><img src="images/grow more.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/fresher.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr8.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr1.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr2.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr3.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr4.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr5.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr6.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr12.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr7.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr9.jpg" alt=""></span></div>
      <div class="image" data-name="Fresher"><span><img src="images/image/fr11.jpg" alt=""></span></div>
      <div class="image" data-name="Sports"><span><img src="images/sports week.jpg" alt="" height="175px"></span></div>
      <div class="image" data-name="Sports"><span><img src="images/img-5.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/farewell.jpg" alt="" height="175px"></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/farewell party.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw1.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw2.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw3.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw6.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw5.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw11.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw7.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw8.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw9.jpg" alt=""></span></div>
      <div class="image" data-name="Fairewell"><span><img src="images/image/fw10.jpg" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an11.JPG" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an15.JPG" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an6.JPG" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an4.JPG" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an19.jpg" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an17.jpg" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an19.jpg" alt=""></span></div>
      <div class="image" data-name="Aanandam"><span><img src="images/image/an18.jpg" alt=""></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/fun1.jpg" alt=""></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/fun2.jpg" alt=""></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/fun3.jpg" alt=""></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/g3.jpg" alt=""></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/fun4.jpg" alt="" height="200px" width="300px"></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/np.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/np1.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/td1.jpg" alt=""></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/fw12.jpg" alt="" height="200px" width="300px"></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/g1.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/g2.jpg" alt="" height="200px"></span></div>
      <div class="image" data-name="Other"><span><img src="images/image/fun6.jpeg" alt="" height="200px"></span></div>
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>
</section>

<footer>
  <p>Copyright &copy; <script>document.write(new Date().getfullyear());</script>, 2021 by nikhil kumar</p>
</footer>
  <script src="script.js"></script>

</body>
</html>
