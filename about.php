<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>About Me</title>
</head>
<body>

  <!-- header bar start  -->
  <?php
    include("files/header.php");
  ?>
  <!-- header bar end  -->

  <!-- about me content start  -->
  <section id="about-me">
    <div class="about-me-text-all-content">
      <div class="about-me-heading">
        <h1>A WEB DEVLOPER & PROGRAMER</h1>
      </div>  
      <div class="about-me-main-content-text">
<?php 

include("files/connectins.php");
// $con=mysqli_connect("localhost","root","","portfolioweb");

 $data=$con->query("select * from add_about");

 while($row=$data->fetch_object())

{

?>
        <p><?php echo $row->para1; ?></p>
        <br>
        <p><?php echo $row->para2; ?></p>
        <br>
        <P><?php echo $row->para3; ?></P>

<?php  

}

?> 
      </div>
      <div class="eduction-details-heading">
        <h2>Education</h2>
      </div>
      <div class="about-me-main-content-text-eduction">
        <div class="eduction-details">
          <p class="name">Saifee Jamali English Medium High School</p>
          <p class="course">10+2</p>
          <p class="year">March-2020</p>
          <hr>
        </div>
        <br>
        <div class="eduction-details">
          <p class="name">The Maharaja Sayajirao University of Baroda</p>
          <p class="course">B.Com</p>
          <p class="year">March-2023</p>
          <hr>
        </div>
        <br>
        <div class="eduction-details">
          <p class="name">Parul University Baroda</p>
          <p class="course">MCA</p>
          <p class="year">March-2025</p>
          <hr>
        </div>
      </div>
    </div>
  </section>
  <!-- about me content end  -->

  <!-- currently working with technology on about me page start  -->
  <section id="current-working-tech">
    <div class="current-working-tech-main-div">
      <div class="heading-text">
        <h1>I am Currently Workig With Technology</h1>
        <br>
        <p>STILL UPGRADING SKILL'S TO MAKE SELF MORE BETTER</p>
      </div>
      <div class="image-of-current-working-tech">
<?php 

include("files/connectins.php");
// $con=mysqli_connect("localhost","root","","portfolioweb");

 $data=$con->query("select * from add_tech");

 while($row=$data->fetch_object())

{

?>
        <div class="image-container">
          <img src="admin/image/<?php echo $row->techImage; ?>" alt="<?php echo $row->techName; ?> logo">
          <span class="image-name"><?php echo $row->techName; ?></span>
        </div>
        
<?php  

}

?> 
      </div>
    </div>
   </section>
  <!-- currently working with technology on about me page end  -->

  
  <!-- footer  start -->
  <?php
    include("files/footer.php");
  ?>
  <!-- footer  end -->
  <script src="js/basic.js"></script>

</body>
</html>