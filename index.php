<!--main1-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link rel="stylesheet" type="text/css" href="css/animal-list.css">

</head>
<body>
    <h1>Welcome to animal site</h1>

<p class="p1">
    Welcome to our animal site,
     where you can learn all about the fascinating 
     world of wildlife! <br>
      From majestic lions to adorable
      puppies, we have information on a wide variety of 
      animals from around the globe. <br>
       Whether you're a nature 
      lover, a pet owner, or just curious about the creatures
       that share our planet, you'll find something of interest 
       here.

</p>

<nav> 
    <ul>
         <li>
            <a href="extrapages.php">More</a>
        </li> 
        <li>
            <a href="index.php">About</a>
        </li>
         <li>
            <a href="login.php">Registration</a>
    </ul>
 </nav> 

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="no time">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="pending">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="worning on it">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



<form method="post">
    <input type="submit" name="submit" value="Registration">
</form>

<?php
if(isset($_POST['submit'])){
    echo "Location: login.php" ;
}
?>

<script src="path/to/bootstrap.min.js"></script>

</body>
</html>