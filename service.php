<?php session_start(); 
    $title='Service';
    include './includes/top.php';
?>

    <style>
    body {
      background-color: #f8f9fa;
    }
    .services-container {
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
    .service-item {
      margin-bottom: 30px;
    }
    .service-icon {
      font-size: 36px;
      color: #007bff;
    }
    .service-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .service-description {
      font-size: 18px;
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="services-container">
      <h2>Our Services</h2>
      <div class="service-item">
        <div class="service-icon">
          <i class="bi bi-calendar-check"></i>
        </div>
        <div class="service-content">
          <div class="service-title">Seat Reservation</div>
          <div class="service-description">Effortlessly book your preferred seat in advance to ensure a comfortable and productive study session.</div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-icon">
          <i class="bi bi-clock-history"></i>
        </div>
        <div class="service-content">
          <div class="service-title">Flexible Time Slots</div>
          <div class="service-description">Choose from a variety of time slots that suit your schedule, allowing you to study at your convenience.</div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-icon">
          <i class="bi bi-calendar-event"></i>
        </div>
      </div>
      <div class="service-item">
        <div class="service-icon">
          <i class="bi bi-check2-square"></i>
        </div>
        <div class="service-content">
          <div class="service-title">User-friendly Interface</div>
          <div class="service-description">Navigate through our intuitive interface with ease, making the booking process simple and hassle-free.</div>
        </div>
      </div>
    </div>
  </div>

 <?php
    include './includes/bottom.php';
?>