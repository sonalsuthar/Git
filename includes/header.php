<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sparQlean Laundry Service</title>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

  <!-- Font Awesome (Icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="icon" type="image/png" href="logo.png">
  <!-- About Page CSS -->
<link rel="stylesheet" href="assets/css/about-style.css?v=3.0">

  <!-- Services Page CSS -->
  <link rel="stylesheet" href="assets/css/services-style.css?v=2.0">

  <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="./assets/js/script.js"></script>
</head>

<header id="header">
  <nav class="navbar">
    <div class="logo">
      <a href="index.php"><img src="./assets/images/logo-2.png" alt="SparQlean"></a>
    </div>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>

      <li class="dropdown">
        <a href="./services-main.php">Services <i class="fa-solid fa-chevron-down"></i></a>
        <ul class="dropdown-menu">
          <li><a href="./laundry-services.php">Laundry By KG</a></li>
          <li><a href="./dry-cleaning-services.php">Dry Cleaning</a></li>
          <li><a href="./shoe-cleaning-services.php">Shoe Cleaning</a></li>
          <li><a href="./curtain-cleaning-services.php">Curtain Cleaning</a></li>
          <li><a href="./steam-ironing-services.php">Steam Ironing</a></li>
        </ul>
      </li>

      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="review.php">Reviews</a></li>
      <li><a href="schedule.php">Schedule Pickup</a></li>
    </ul>

    <button class="cta-btn" id="openModal">Book Now</button>
  </nav>
</header>


 <!-- ================= MODAL ================= -->
  <div class="modal" id="serviceModal">
    <div class="modal-content">
      <span class="close-btn" id="closeModal">&times;</span>
      <h2>Request Service</h2>

      <input type="text" placeholder="Your Name">
      <input type="text" placeholder="Phone Number">
      <input type="text" placeholder="coupon Code (if any)">
      <textarea placeholder="Address"></textarea>

      <select>
        <option selected disabled>Select Service</option>
        <option>Washing</option>
        <option>Ironing</option>
        <option>Dry Cleaning</option>
        <option>Express Service</option>
      </select>

      <button class="submit-btn">Submit</button>
    </div>
  </div>
