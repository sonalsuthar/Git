<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sparQlean Laundry Service</title>

  <!-- Google Font (One family everywhere) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">

  <!-- Icons CDN -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

  <link rel="icon" type="image/png" href="logo.png">
</head>

<body>

 <?php include 'header.php';?>

  <!-- ================= HERO ================= -->
  <section class="hero" id="home">
    <div class="hero-content animate-fadeInUp">
      <h1>Premium Laundry & Dry Cleaning</h1>
      <p>Fresh, clean, perfectly pressed clothes — delivered to your doorstep.</p>

      <div class="hero-buttons">
        <button class="btn-primary">Schedule Pickup</button>
        <button class="btn-secondary">Explore Services</button>
      </div>
    </div>
  </section>

  <!-- ================= WHY CHOOSE US ================= -->
 <section class="info-section">
  <h2 class="section-title">Why Choose Us</h2>

  <div class="info-grid">

    <div class="info-card">
      <div class="why-icon"><i class="fa-solid fa-van-shuttle"></i></div>
      <h5>Free Pickup & Delivery</h5>
      <p>Convenient doorstep service.</p>
    </div>

    <div class="info-card">
      <div class="why-icon"><i class="fa-solid fa-sparkles"></i></div>
      <h5>Expert Cleaning</h5>
      <p>Handled by trained professionals with precision.</p>
    </div>

    <div class="info-card">
      <div class="why-icon"><i class="fa-solid fa-bolt"></i></div>
      <h5>Fast Turnaround</h5>
      <p>24-hour delivery available.</p>
    </div>

    <div class="info-card">
      <div class="why-icon"><i class="fa-solid fa-seedling"></i></div>
      <h5>Eco-Friendly</h5>
      <p>Fabric-safe & nature-safe detergents.</p>
    </div>

  </div>
</section>


  <!-- ================= SERVICES ================= -->
    <section class="services" id="services">
      <div class="section-header">
        <h2>Our Premium Services</h2>
        <p>Complete laundry solutions. High-quality results.</p>
      </div>

      <div class="service-grid">

        <div class="service-card">
          <i class="fa-solid fa-soap service-icon"></i>
          <h3>Washing & Ironing</h3>
          <p>Perfect cleaning with crisp finishing.</p>
        </div>

        <div class="service-card">
          <i class="fa-solid fa-hat-cowboy service-icon"></i>
          <h3>Dry Cleaning</h3>
          <p>Special garments treated with care.</p>
        </div>

        <div class="service-card">
          <i class="fa-solid fa-truck service-icon"></i>
          <h3>Pickup & Delivery</h3>
          <p>Fast, free & convenient.</p>
        </div>

        <div class="service-card">
          <i class="fa-solid fa-wind service-icon"></i>
          <h3>Express Service</h3>
          <p>Same-day cleaning available.</p>
        </div>

        <div class="service-card">
          <i class="fa-solid fa-scissors service-icon"></i>
          <h3>Alterations</h3>
          <p>Repairs, hemming, resizing.</p>
        </div>

        <div class="service-card">
          <i class="fa-solid fa-box-open service-icon"></i>
          <h3>Subscription</h3>
          <p>Save more with monthly plans.</p>
        </div>

      </div>
    </section>

  <!-- ================= PRICING ================= -->
  <section class="pricing" id="pricing">
    <div class="section-header">
      <h2>Transparent Pricing</h2>
      <p>No hidden charges — simple & clear.</p>
    </div>

    <div class="pricing-grid">

      <div class="pricing-card">
        <h3>Basic</h3>
        <div class="price">₹499<span>/month</span></div>
        <button class="cta-btn">Get Started</button>
      </div>

      <div class="pricing-card featured">
        <span class="badge">Best Value</span>
        <h3>Premium</h3>
        <div class="price">₹799<span>/month</span></div>
        <button class="cta-btn">Get Started</button>
      </div>

      <div class="pricing-card">
        <h3>Business</h3>
        <div class="price">₹1499<span>/month</span></div>
        <button class="cta-btn">Get Started</button>
      </div>

    </div>
  </section>

  <!-- ================= REVIEWS ================= -->
  <section class="testimonials" id="reviews">
    <div class="section-header">
      <h2>What Customers Say</h2>
      <p>Trusted by hundreds every day.</p>
    </div>

    <div class="testimonial-slider">

      <div class="testimonial-card">
        <div class="testimonial-header">
          <div class="avatar">RS</div>
          <div>
            <h4>Riya Sharma</h4>
            <div class="rating">★★★★★</div>
          </div>
        </div>
        <p>"Amazing quality & timely delivery. Highly recommended!"</p>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-header">
          <div class="avatar">AK</div>
          <div>
            <h4>Amit Kumar</h4>
            <div class="rating">★★★★★</div>
          </div>
        </div>
        <p>"My go-to laundry service. Super reliable."</p>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-header">
          <div class="avatar">PN</div>
          <div>
            <h4>Pooja Nair</h4>
            <div class="rating">★★★★★</div>
          </div>
        </div>
        <p>"Subscription plan helps a lot with my busy schedule."</p>
      </div>

    </div>
  </section>

  <!-- ================= CONTACT ================= -->
  <section class="contact" id="contact">
    <div class="section-header">
      <h2>Contact Us</h2>
      <p>Always happy to help.</p>
    </div>

    <div class="contact-container">

      <div class="contact-info">
        <h3>Get in Touch</h3>

        <div class="info-item">
          <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
          <div><h4>Phone</h4><p>87800 52962</p></div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
          <div><h4>Email</h4><p>info@sparqlean.in</p></div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
          <div><h4>Address</h4><p>G4 Fortune High Street, Adajan, Surat</p></div>
        </div>
      </div>

      <form class="contact-form">
        <div class="form-group">
          <label>Name</label>
          <input type="text" required>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" required>
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea rows="5" required></textarea>
        </div>

        <button class="submit-btn">Send Message</button>
      </form>

    </div>
  </section>

  
  <!-- ================= MODAL ================= -->
  <div class="modal" id="serviceModal">
    <div class="modal-content">
      <span class="close-btn" id="closeModal">&times;</span>
      <h2>Request Service</h2>

      <input type="text" placeholder="Your Name">
      <input type="text" placeholder="Phone Number">
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
  <script src="script.js"></script>

  <?php include 'footer.php';?>

</body>
</html>
