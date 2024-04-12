<?php session_start(); 
    $title='About Us';
    include './includes/top.php';
   ?>
   <style>
    body {
        background-image:url("./includes/asset/images/login_bg.avif");
        background-size:cover; 
    }
    .contact-container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background-color: rgba(0,0,0,0.7);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .form-label {
      font-weight: bold;
    }
    .social-links {
      text-align: center;
      margin-top: 20px;
    }
    .social-links a {
      margin: 0 10px;
      font-size: 20px;
      color: #007bff;
    }
  </style> 

  <div class="container main-form text-light mx-auto">
    <div class="contact-container">
      <h2>Contact Us</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="social-links">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/123456789"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="mailto:contact@email.com"><i class="far fa-envelope"></i></a>
      </div>
    </div>
  </div>
    <?php
    include './includes/bottom.php';
?>




