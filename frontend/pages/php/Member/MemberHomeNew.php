<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Authentication/Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="../all.css">
    <link rel="stylesheet" href="fonts.css">
    <script src="../jquery.js"></script>
    <title>full responsive fitness website design tutorial</title>
</head>
<body>

<!-- header section start -->

<header>

<nav>
  <ul>
    <li><a href="#home">home</a></li>
    <li><a href="#feature">features</a></li>
    <li><a href="#about">about</a></li>
    <li><a href="#gallery">gallery</a></li>
    <li><a href="#contact">contact</a></li>
    <li><a href="./MemberProfile.php">Member profile</a></li>
    <li><a href="../Authentication/logout.php">logout</a></li>
    <li><a href="#footer">footer</a></li>
  </ul>
</nav>

<div class="fas fa-bars"></div>

<div class="logo">
  <a href="#"><h1><span>fit</span>ness</h1></a>
</div>

</header>

<!-- header section end -->


<!-- home sectin starts -->

<section id="home">

<h1>get fit don't quit</h1>
<h3>- commit to be fit -</h3>
<a href="#"><button>join us</button></a>


<div class="icons">
  <a href="#" class="fab fa-facebook"></a>
  <a href="#" class="fab fa-twitter"></a>
  <a href="#" class="fab fa-github"></a>
  <a href="#" class="fab fa-pinterest"></a>
</div>

<div class="shape-image">
<img src="shape.png" alt="">
</div>

</section>

<!-- home sectin ends -->

<!-- feature section starts -->

<section id="feature">

<h1>feature</h1>

<div class="card-container">

<div class="card">
  <img src="p1.jpg" alt="">
  <div class="content">
    <h1>heavy weights</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus blanditiis nihil exercitationem ipsum rerum eaque dolores quis laborum adipisci dignissimos!</p>
    <a href="#"><button>learn more</button></a>
  </div>
</div>

<div class="card">
  <img src="p2.jpg" alt="">
  <div class="content">
    <h1>expert trainers</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus blanditiis nihil exercitationem ipsum rerum eaque dolores quis laborum adipisci dignissimos!</p>
    <a href="#"><button>learn more</button></a>
  </div>
</div>

<div class="card">
  <img src="p3.jpg" alt="">
  <div class="content">
    <h1>eco environment</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus blanditiis nihil exercitationem ipsum rerum eaque dolores quis laborum adipisci dignissimos!</p>
    <a href="#"><button>learn more</button></a>
  </div>
</div>

</div>

</section>



<!-- feature section ends -->


<!-- about section starts -->

<section id="about">

<div class="image">
  <img src="pic.png" alt="">
</div>

<div class="content">
  <h1>why you should choose us?</h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mi dui, fringilla quis odio a, convallis dictum metus. Etiam facilisis malesuada iaculis. Ut dapibus lacinia nibh
    <br><br>
    ut ultricies urna rhoncus nec. Phasellus euismod nec felis quis dapibus. Cras malesuada placerat venenatis. Suspendisse fringilla turpis mollis orci facilisis euismod. Nullam at lacus commodo
  </p>

  <h1>
    our gym includes
  </h1>

  <div class="buttons">
    <a href="#"><button>training</button></a>
    <a href="#"><button>exercise</button></a>
    <a href="#"><button>bicycle</button></a>
    <a href="#"><button>treadmill</button></a>
    <a href="#"><button>dumbbell</button></a>
    <a href="#"><button>barbell</button></a>
  </div>
</div>

</section>



<!-- about section starts -->


<!-- gallery section starts -->

<section id="gallery">

  <h1>our latest products</h1>

<div class="image-container">

  <div class="image">
    <img src="img1.jpg" alt="">
    <div class="info">
      <a href="#"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img2.jpg" alt="">
    <div class="info">
      <a href="#"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img3.jpg" alt="">
    <div class="info">
      <a href="#"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img4.jpg" alt="">
    <div class="info">
      <a href="#"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img5.jpg" alt="">
    <div class="info">
      <a href="#"><button>view more!</button></a>
    </div>
  </div>

  <div class="image">
    <img src="img6.jpg" alt="">
    <div class="info">
      <a href="#"><button>view more!</button></a>
    </div>
  </div>

</div>

</section>


<!-- gallery section ends -->



<!-- contact us section starts -->

<section id="contact">

  <form action="">
    <h1>get in touch</h1>
    <input type="text" placeholder="full name">
    <input type="email" placeholder="e-mail">
    <input type="number" placeholder="phone">
    <textarea placeholder="message" cols="30" rows="10"></textarea>
    <input type="submit" value="send">
  </form>

  <div class="image">
    <img src="man.png" alt="">
  </div>

</section>




<!-- contact us section ends -->

<!-- footer sectin starts -->

<section id="footer">

  <div class="footer-container">

    <div class="brand">
      <div class="logo">
        <a href="#"><h1><span>fit</span>ness</h1></a>
      </div>
      <div class="icons">
        <a href="#" class="fab fa-facebook" data-text="facebook"></a>
        <a href="#" class="fab fa-twitter" data-text="twitter"></a>
        <a href="#" class="fab fa-github" data-text="git-hub"></a>
        <a href="#" class="fab fa-pinterest" data-text="pinterest"></a>
      </div>
    </div>

    <div class="contact-info">
      <div class="info">
        <a href="#" class="fas fa-map-marker-alt" data-text="xyz address name"></a>
        <a href="#" class="fas fa-envelope" data-text="example@gmail.com"></a>
        <a href="#" class="fas fa-phone" data-text="+9100000000"></a>
      </div>
    </div>

    <div class="letter">
      <h1>newsletter</h1>
      <p>submit your e-mail for latest updates</p>
      <input type="email" placeholder="e-mail">
      <input type="submit" placeholder="subscribe">
    </div>

  </div>


 

</section>


<!-- footer sectin ends -->











<!-- script starts -->


<script>
  $(document).ready(function(){

    $('.fa-bars').click(function(){
      $(this).toggleClass('fa-times');
      $('nav').toggleClass('nav-toggle');
    });

    $('nav ul li a').click(function(){
      $('.fa-bars').removeClass('fa-times');
      $('nav').removeClass('nav-toggle');
    });


    $(window).scroll(function(){
      if($(window).scrollTop() >= 20){
        $('header').addClass('active');
      }else{
        $('header').removeClass('active');
      }
    });

  });
</script>

</body>
</html>
