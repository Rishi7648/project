<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- About section starts -->
<section class="about">
   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="About Us">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <ul>
            <P>User-Friendly Interface:</span> Navigate our platform with ease and convenience.</P>
            <P> Your data and transactions are protected with  security measures</P>
            <p> Detailed design: Access comprehensive property details, including images </p>
            <P> Responsive design:Enjoy a seamless experience on any device, whether mobile, tablet, or desktop</P>
         </ul>
         <p>Join us today to explore, buy, and sell houses with confidence. Your dream property is just a few clicks away!</p>
      </div>
   </div>
</section>
<!-- About section ends -->

<!-- What We Offer section starts -->
<section class="offer">
   <h2 class="section-title">What We Offer</h2>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-1.png" alt="Buy House">
         <h3>Buy Properties</h3>
         <p>Browse a wide range of properties, including  houses, in your preferred locations. Use our intuitive search filters to find your dream house based on your specific requirements.</p>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="Sell House">
         <h3>Sell Properties</h3>
         <p>List your property effortlessly with detailed descriptions and images.  our platform ensures your listing gets the visibility it deserves.</p>
      </div>
   </div>
</section>
<!-- What We Offer section ends -->

<?php include 'components/footer.php'; ?>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
