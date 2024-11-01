<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <title>Experiance</title>
</head>
<body>
  <!-- header bar start  -->
  <?php
    include("files/header.php");
  ?>
  <!-- header bar end  -->

  <!-- experiance content start  -->
   <section id="experiance">
    <div class="experianceMainDiv">
      <div class="experianceMainHeading">
        <h1>Experiance</h1>
      </div>
      <div class="coverLine">
        <p>"Dynamic professional with a strong foundation in office management and a passion for technology, seeking to leverage my administrative and web development skills in an IT role."</p>
      </div>
      <hr>
      <div class="experianceConetnt">
<?php 

include("files/connectins.php");
// $con=mysqli_connect("localhost","root","","portfolioweb");

 $data=$con->query("select * from add_experiance");

 while($row=$data->fetch_object())
 
{

?>
 
        <div class="experianceSubHeadings">
          <h4><?php echo $row->heading; ?></h4>
        </div>
        <div class="subtosubHeadings">
          <h4><?php echo $row->subHeading; ?></h4>
        </div>
        <div class="experiancedetailstext">
          <ul>
            <li><?php echo $row->para1; ?></li>
            <li><?php echo $row->para2; ?></li>
            <li><?php echo $row->para3; ?></li>
          </ul>
        </div>
        <br>
        <hr>
<?php  

}

?>
      </div>
    </div>
   </section>
  <!-- experiance content end  -->


   <!-- footer  start -->
   <?php
    include("files/footer.php");
  ?>
  <!-- footer  end -->
  <script src="js/basic.js"></script>

</body>
</html>