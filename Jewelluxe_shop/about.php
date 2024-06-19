<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading" style="background-image: url('bg.png'); background-size: cover; background-position: center; min-height: 25vh;">>
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why JEWELLUXE?</h3>
            <p> Our pieces are crafted with care by Zoe, ensuring top-notch quality and attention to detail.Stand out with our one-of-a-kind jewelry designs, created with passion and creativity. Shop confidently knowing that your information is safe with us. We prioritize your security and privacy. eceive your jewelry quickly and hassle-free with our fast shipping options.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what JEWELLUXE provides?</h3>
            <p> Explore our beautiful collection of rings, necklaces, bracelets, and earrings crafted with care by Zoe. Each piece is designed to be elegant and timeless.

From everyday essentials to statement pieces, we have something for every style and occasion.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>At JEWELLUXE, our jewelry is made by Zoe, a talented 20-year-old girl. She's passionate about creating beautiful pieces that people love. Zoe personally designs and oversees everything, from picking out the materials to making sure each piece is perfect.</p>
            
        </div>

    </div>

</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>