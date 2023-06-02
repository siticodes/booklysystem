<?php

include 'config.php';

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutbg.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We want to help you to find the stories you love! Open your mind to endless possibilities. Read what you want,
			when you want! Where your imagination comes alive. Where everything you need to know is onlyan arms's length away!</p>
         <p>The bookstore that reads you while you read them. Where fantasy and fiction come true. Come for the book, leave with the knowledge.
			Take a look at our menu, we have the answers you're looking for. Where the books are the best companions. Enjoy a new world inside a book.</p>
		 <p>“You think your pain and your heartbreak are unprecedented in the history of the world, but then you read. It was books that taught me that the things that
			tormented me most were the very things that connected me with all the people who were alive, who had ever been alive.” ― James Baldwin</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="developer">

   <h1 class="title">DEVELOPERS</h1>

   <div class="box-container">
   
	  <div class="box">
        <img src="images/arinah.jpeg" alt="">
        <b><p>NUR ARINAH IZZATI BINTI MOHD AFAZI</p></b>
		<p>2020834486</p>
        <h3>DEVELOPER 1</h3>
      </div>
	  
	  <div class="box">
        <img src="images/afiqah.jpeg" alt="">
        <b><p>NURUL AFIQAH NAJWA BINTI ABDULLAH</p></b>
		<p>2020828686</p>
        <h3>DEVELOPER 2</h3>
      </div>
	  
	  <div class="box">
        <img src="images/hasbi.jpeg" alt="">
        <b><p>NUR BATRISYIA HASBI BINTI HASMADI</p></b>
		<p>2020601748</p>
        <h3>DEVELOPER 3</h3>
      </div>
	  
	  <div class="box">
        <img src="images/siti.jpeg" alt="">
        <b><p>SITI NURHALIZA BINTI MAT KHAMIS</p></b>
		<p>2020476478</p>
        <h3>DEVELOPER 4</h3>
      </div>

      <div class="box">
        <img src="images/suhaila.jpeg" alt="">
        <b><p>WAN NOR SUHAILA BINTI WAN ADNAN</p></b>
		<p>2020489186</p>
         <h3>DEVELOPER 5</h3>
      </div>
   </div>
</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/penulis1.jpg" alt="">
         <h3>HANNA ALKAF</h3>
      </div>

      <div class="box">
         <img src="images/penulis2.jpeg" alt="">
         <h3>DANIEL SILVA</h3>
      </div>

      <div class="box">
         <img src="images/penulis3.jpeg" alt="">
         <h3>COLLEEN HOOVER</h3>
      </div>

      <div class="box">
         <img src="images/penulis4.jpeg" alt="">
         <h3>HERNAN DIAZ</h3>
      </div>

      <div class="box">
         <img src="images/penulis5.jpeg" alt="">
         <h3>DANI SHAPIRO</h3>
      </div>

      <div class="box">
         <img src="images/penulis6.jpeg" alt="">
         <h3>JOHN GRISHAM</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>