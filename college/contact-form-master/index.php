<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://kit.fontawesome.com/7414e22221.js"></script>
  <title>Contact Us</title>
</head>
<body>
  
	<nav class="navbar">
		<div class="content">
		  <div class="logo">
			<a href="#">St. Paul's College</a>
		  </div>
		  <ul class="menu-list">
			<div class="icon cancel-btn">
			  <i class="fas fa-times"></i>
			</div>
			<li><a href="../index.php">Home</a></li>
			<li><a href="../index.php">About Us</a></li>
			<li><a href="../index.php">Contact Us</a></li>
			<li><a href="../index.php">Services</a></li>
			<li><a href="../index.php">More</a></li>
		  </ul>
		  <div class="icon menu-btn">
			<i class="fas fa-bars"></i>
		  </div>
		</div>
	  </nav>

  <section id="heading">
    <div class="container heading-grid">
      <div class="heading-wrap">
        <h1>Get in Touch</h1>
        <p>Do you need more information? Please contact us to find more about our information and services</p>
      </div>
    </div>
  </section>

  <section id="form-box" class="animated jackInTheBox">
    <div class="container">
      <div class="form-box form-box-grid">
        <div class="form-info">
          <h3>Contact information</h3>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> NH-27, Nr.Ashirwad Hotel, ORE via, ABUROAD - 307026(Raj.)</li>
            <li><i class="fas fa-mobile-alt"></i>+91 9928400050</li>
            <li><i class="fas fa-envelope"></i>stpaulcollegeaburoad@gmail.com</li>
          </ul>
        </div>
  
        <div class="form-input">
          <h3>Send us a message</h3>
          <form action="" method="POST">
            <p>
              <label for="Full-Name">Full Name</label>
              <input type="text" name="Name" placeholder="Enter Your Name..." required>
            </p>
            <p>
              <label for="Contact Number">Phone Number</label>
              <input type="Number" name="Number" placeholder="Enter Your Number..." required>
            </p>
            <p class="full">
              <label for="email">Email address</label>
              <input type="email" name="Email" placeholder="Email Here..." required>
            </p>
            <p class="full">
              <label for="message">Your message</label>
              <textarea name="Message" required></textarea>
            </p>
            <p class="full">
              <button type="submit" name="submit">Submit</button>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
<footer>
    <p>Copyright &copy; <script>document.write(new Date().getfullyear());</script>, 2021 by Nikhil Kumar</p>
  </footer>
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $Name = $_POST['Name'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    $insertquery = " insert into contact(Name,Number,Email,Message)
     values('$Name','$Number','$Email','$Message') ";

    $res = mysqli_query($con,$insertquery);

    if($res){
      ?>
      <script>
        alert("data insert properly");
      </script>
      <?php
    }else{
      ?>
      <script>
        alert("data not insert properly");
      </script>
      <?php
    }
}



?>