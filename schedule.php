<?php include './includes/header.php'; ?>

<!-- ================= SCHEDULE PICKUP PAGE ================= -->
<link rel="stylesheet" href="assets/css/schedule-style.css">

<section class="schedule-hero">
  <div class="container">
    <h1>Schedule Your Laundry Pickup</h1>
    <p>Convenient doorstep pickup and delivery — Fresh, fast, and eco-friendly service across Surat.</p>
  </div>
</section>

<section class="schedule-form-section">
  <div class="container">
    <h2>Book Your Laundry Pickup</h2>
    <p class="section-subtitle">Fill out the form below, and our team will reach out to confirm your booking.</p>

    <form action="submit_schedule.php" method="POST" class="pickup-form animate-fadeInUp">
      <!-- Name -->
      <div class="input-group">
        <input type="text" name="name" id="name" required />
        <label for="name">Full Name</label>
      </div>

      <!-- Phone -->
      <div class="input-group">
        <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required />
        <label for="phone">Phone Number</label>
      </div>

      <!-- Email -->
      <div class="input-group">
        <input type="email" name="email" id="email" required />
        <label for="email">Email Address</label>
      </div>

      <!-- Address -->
      <div class="input-group">
        <textarea name="address" id="address" rows="3" required></textarea>
        <label for="address">Pickup Address</label>
      </div>

      <!-- Service Type -->
      <div class="input-group">
        <select name="service" id="service" required>
          <option value="">Select Service</option>
          <option value="Laundry By KG">Laundry By KG</option>
          <option value="Dry Cleaning">Dry Cleaning</option>
          <option value="Steam Ironing">Steam Ironing</option>
          <option value="Shoe Cleaning">Shoe Cleaning</option>
          <option value="Curtain Cleaning">Curtain Cleaning</option>
        </select>
      </div>

      <!-- Pickup Date -->
      <div class="input-group">
        <input type="date" name="pickup_date" id="pickup_date" required />
        <label for="pickup_date">Pickup Date</label>
      </div>

      <!-- Time Slot -->
      <div class="input-group">
        <select name="pickup_time" id="pickup_time" required>
          <option value="">Select Time Slot</option>
          <option value="Morning (8AM - 12PM)">Morning (8AM - 12PM)</option>
          <option value="Afternoon (12PM - 4PM)">Afternoon (12PM - 4PM)</option>
          <option value="Evening (4PM - 8PM)">Evening (4PM - 8PM)</option>
        </select>
      </div>

      <!-- Notes -->
      <div class="input-group">
        <textarea name="notes" id="notes" rows="3"></textarea>
        <label for="notes">Additional Instructions (Optional)</label>
      </div>

      <!-- Submit -->
      <button type="submit" class="submit-btn">Confirm Pickup</button>
    </form>
  </div>
</section>

<section class="service-cta">
  <div class="cta-content">
    <h2>Need Help Scheduling?</h2>
    <p>Contact our support team via WhatsApp for instant assistance.</p>
    <a href="https://wa.me/919000000000" class="cta-btn" target="_blank">
      <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
    </a>
  </div>
</section>

<?php include './includes/footer.php'; ?>
