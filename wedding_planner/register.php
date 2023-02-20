<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/register.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <!-- <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div> -->

         <!-- <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div> -->
<!-- 
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div> -->
       <!--    <div class="main" style="background-color: #;">
    <p class="sign" align="center">Sign in</p>
    <form class="form1">
      <input class="un " type="text" align="center" placeholder="Username">
      <input class="pass" type="password" align="center" placeholder="Password">
      <a class="submit" align="center">Sign in</a>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
            
                
    </div> -->
        <div class="holder">
        <div class="parent">
            <h3 style="color: #F779EC;">Sign Up</h3>
            <form action="">
                <div>
                    <input type="text" placeholder="Name *" required>
                    <span class="border"></span>
                </div>
                <div>
                    <input type="email" placeholder="Email *" required>
                    <span class="border"></span>
                </div>
                <div>
                    <input type="password" placeholder="Password *" required>
                    <span class="border"></span>
                </div>
                <div>
                    <input type="password" placeholder="Confirm Password *" required>
                    <span class="border"></span>
                </div>
                <input type="submit" value="LOGIN" class="private-inp">
                <p >
                    Have Account?
                    <a style="color: #F779EC;" href="#">Login Here</a>
                </p>
            </form>
            <h4>Or Register With</h4>
            <!-- <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google-plus-g"></i>
            </div> -->
        </div>
        <div class="" style="text-align: center;margin-top: -100px;">
             
                <a class="btn btn-primary" style="border-radius: 15px;width: 30px; background-color: #1DA1F2; padding: 0px;" href="#!" role="button"
              ><i class="fab fa-twitter me-2"></i></a>
              <a class="btn btn-primary" style="border-radius: 15px;width: 30px; background-color: #3B5998; padding: 0px;"" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-primary" style="border-radius: 15px;width: 30px;background-color: #DB4437; padding: 0px;"" href="#!" role="button"
              ><i class="fab fa-google-plus-g"></i></a>

            </div>
        </div>
    </div>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- <section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/service-1.jpg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-2.jpg" alt="">
            <div class="content">
               <h3>wedding registory</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-3.jpg" alt="">
            <div class="content">
               <h3>guest list</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-4.jpg" alt="">
            <div class="content">
               <h3>wedding cake</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-5.jpg" alt="">
            <div class="content">
               <h3>wedding ceremony</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-6.jpg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<!-- <?php @include 'footer.php'; ?>
 -->
</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>