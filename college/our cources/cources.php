<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Personal Portfolio Website - HTML, CSS & Vanilla Javascript</title>
    <link rel="stylesheet" href="cources.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>

    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header id="nav">
      <a href="#" class="brand">St.Paul's</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="../index.php">Home</a>
        <a href="#about">About</a>
        <a href="#services">Registration</a>
        <a href="https://www.shiksha.com/college/st-paul-s-college-of-science-and-management-abu-road-sirohi-76929/placement">Placement</a>
        <a href="https://www.shiksha.com/computer-courses-it-software-chp">More</a>
      </div>
    </header>

    <header id="bottom">
      <h1>Our Coueces</h1>
      <p>Five cources available in our college</p>
    </header>

    <section id="slider">
      <div class="img-slider">
        <div class="slide active">
          <img src="images/bca.png" alt="" height="490px">
          <div class="info">
            <h2>01 BCA</h2>
            <p>Bachlor Of Computer Application</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/BA1.jpg" alt="" height="490px">
          <div class="info">
            <h2>02 BA</h2>
            <p>Bachlor Of Arts</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/bsc2.png" alt="" height="490px">
          <div class="info">
            <h2>03 BSC</h2>
            <p>Bachlor Of Science </p>
          </div>
        </div>
        <div class="slide">
          <img src="images/bba1.png" alt="" height="490px">
          <div class="info">
            <h2>04 BBA</h2>
            <p>Bachlor Of Business Administration</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/B.Com2.jpg" alt="" height="490px">
          <div class="info">
            <h2>05 BCOM</h2>
            <p>Bachlor Of Commerse </p>
          </div>
        </div>
        <div class="navigation">
          <div class="btn active"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
          <div class="btn"></div>
        </div>
      </div>
  
      <script type="text/javascript">
      var slides = document.querySelectorAll('.slide');
      var btns = document.querySelectorAll('.btn');
      let currentSlide = 1;
  
      // Javascript for image slider manual navigation
      var manualNav = function(manual){
        slides.forEach((slide) => {
          slide.classList.remove('active');
  
          btns.forEach((btn) => {
            btn.classList.remove('active');
          });
        });
  
        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
      }
  
      btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
          manualNav(i);
          currentSlide = i;
        });
      });
  
      // Javascript for image slider autoplay navigation
      var repeat = function(activeClass){
        let active = document.getElementsByClassName('active');
        let i = 1;
  
        var repeater = () => {
          setTimeout(function(){
            [...active].forEach((activeSlide) => {
              activeSlide.classList.remove('active');
            });
  
          slides[i].classList.add('active');
          btns[i].classList.add('active');
          i++;
  
          if(slides.length == i){
            i = 0;
          }
          if(i >= slides.length){
            return;
          }
          repeater();
        }, 10000);
        }
        repeater();
      }
      repeat();
      </script>

    </section>
    <header id="bottom">
      <h1>Registration page</h1>
      <p>Click To Registration Button</p>
       </header>

    <section class="services" id="services">
      <div class="title reveal">
        <h2 class="section-title">Student Registration. Apply for Cources </h2>
      </div>  
    </section>
    <section id="reg">
      <a href="../registration page/index.php"><button class='neu'>REGISTRATION HERE</button></a>
    </section>

    <footer class="footer">
      <p>Copyright @2021 by Nikhil. All Rights Reserved.</p>
    </footer>

    <script src="cources.js" charset="utf-8"></script>

  </body>
</html>
