<?php session_start(); 
    $title='About Us';
    include './includes/top.php';
    ?>
    <style>
    body {
      background-color: #f8f9fa;
    }
    .about-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    p {
      font-size: 18px;
      line-height: 1.6;
    }
  </style>

<div class="container">
    <div class="about-container">
      <h2>About Us</h2>
      <p>Welcome to our Library Seat Booking System! We are passionate about providing an efficient and convenient platform for students and library patrons to reserve seats in advance.</p>
      <p>Our mission is to streamline the process of securing a seat in the library, saving you time and ensuring a stress-free study environment.</p>
      <p>With our user-friendly interface and advanced booking features, you can easily browse available seats, select your preferred spot, and reserve it with just a few clicks.</p>
      <p>We understand the importance of having a dedicated space for studying and research, and we are committed to helping you make the most out of your library experience.</p>
      <p>Thank you for choosing our Library Seat Booking System. We look forward to serving you!</p>
    </div>
  </div>
    <?php
    include './includes/bottom.php';
?>