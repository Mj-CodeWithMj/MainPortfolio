<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Contact</title>
</head>
<body>
  <!-- header bar start  -->
  <?php
    include("files/header.php");
  ?>
  <!-- header bar end  -->

  <!-- contact us section start -->
   <section id="contact-us">
    <div class="contact-usMainDiv">
      <div class="contact-usMainHeading">
        <h1>Contact Us</h1>
      </div>
      <div class="contact-usMainContent">
        <div class="googleMapLocation">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364.1097093932801!2d73.61766497403559!3d22.765852698423735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39609a575a328083%3A0x27e25c9640abf4de!2sRoyal%20Apartment!5e0!3m2!1sen!2sin!4v1696183689699!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="WrittenLocation">
          <h2>Location</h2>
          <p>Flat no 6 royal tower Godhra,389001</p>
        </div>
        <div class="email-call">
          <div class="email">
            <h2>Email</h2>
            <p>murtuza78@gmail.com</p>
          </div>
          <br>
          <div class="call">
            <h2>Call</h2>
            <p>+91 84691 89653</p>
          </div>
        </div>


        
        <div class="contact-usForm">
          <form action="" method="post">
              <div class="form-row">
                  <input type="text" id="name" name="name" placeholder="Enter your Name" required>
                  <input type="email" id="email" name="email" placeholder="Enter your Email" required>
              </div>
              <input type="text" id="subject" name="subject" placeholder="Enter a subject" required>
              <textarea id="message" name="message" placeholder="Any Message For Me" required></textarea>
              <button type="submit">Send</button>
          </form>
          <!-- php start  -->
          <?php
             if ($_POST) {

                $name=$_POST['name'];
                $email=$_POST['email'];
                $subject=$_POST['subject'];
                $message=$_POST['message'];

                include("files/connectins.php");

                $con->query("INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
               
                if ($con) {
                    echo "<script>alert('Data Inserted SuccessFully')</script>";
                }else {
                    echo "<script>alert('Data Insertion Failed')</script>";
                }
             }
            ?>
            <!-- php end  -->
      </div>
      

      </div>
    </div>
   </section>
  <!-- contact us section end -->
  
   <!-- footer  start -->
   <?php
    include("files/footer.php");
  ?>
  <!-- footer  end -->
  <script src="js/basic.js"></script>

</body>
</html>