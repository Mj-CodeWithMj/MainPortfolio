<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Home</title>
</head>
<body>

  <!-- header bar start  -->
  <?php
    include("files/header.php");
  ?>
  <!-- header bar end  -->

  <!-- hero section start  -->
   <section id="hero-section">
    <div class="main-div-hero">
      <div class="leftSidetext">
        <h1>Hello It's Me Murtuza Jamali</h1>
        <h3>Working as devloper</h3>
      </div>

<?php 

include("files/connectins.php");
// $con=mysqli_connect("localhost","root","","portfolioweb");

 $data=$con->query("select * from add_hero");

 while($row=$data->fetch_object())

{

?>
      <div class="rightSideimage">
        <img src="admin/image/<?php echo $row->heroImage; ?>" alt="Murtuza jamali My Own Image">
      </div>
<?php  

}

?>  
    </div>
   </section>
  <!-- hero section end  -->
  <!-- main section as about me on index page start -->
  <section id="main-contetn-section">
    <div class="main-contetn-div">
      <div class="left-para">
        <h1>A WEB DEVELOPER & PROGRAMMER</h1>
        <br><br>
        <p>Welcome to my digital playground! I'm Murtuza Jamali, a dedicated web designer with a keen eye for aesthetics and a passion for creating seamless online experiences.</p>
        <br>
        <p>Whether you're an entrepreneur looking to establish your online presence or a company aiming to revamp your website, you're in the right place. Let's embark on a journey to transform your ideas into visually stunning and highly functional websites.</p>
      </div>
      <div class="right-para">
        <p>I eat, sleep, and breathe web design. With a background in Master in Computer Application, I have honed my skills to blend creativity with technical proficiency. My design philosophy is simple: clean, user-friendly interfaces that leave a lasting impression. I believe that every website should not only look amazing but also offer intuitive navigation and exceptional performance.</p>
        <br>
        <img src="image/about-me-image3.jpg" alt="its Me Murtuza Jamali">
        <br><br>
        <p>Beyond the world of pixels and codes, I find inspiration in art, nature, and the ever-evolving digital landscape. I thrive on challenges and am constantly pushing my creative boundaries to deliver designs that resonate with your audience.</p>
        <br><br>
        <button class="index-page-about-me-read-more-btn">Read More</button>
      </div>
    </div>
  </section>  
  <!-- main section as about me on index page end -->
  <!-- currently working with technology on index page start  -->
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
  <!-- currently working with technology on index page end  -->
   
   <!-- footer  start -->
   <?php
    include("files/footer.php");
  ?>
  <!-- footer  end -->
  <script src="js/basic.js"></script>
</body>
</html>