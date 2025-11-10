<?php include './includes/header.php'; ?>

<!-- ================= REVIEWS PAGE ================= -->
<link rel="stylesheet" href="assets/css/review-style.css">

<section class="reviews-hero">
  <div class="container">
    <h1>Customer Reviews</h1>
    <p>We’re proud to serve Surat with premium fabric care. Here’s what our happy customers say.</p>
  </div>
</section>

<section class="reviews-section">
  <div class="container">
    <?php
    // Placeholder reviews (replace with MySQL fetch later)
    $reviews = [
      [
        'name' => 'Sonal Mehta',
        'rating' => 5,
        'comment' => 'Excellent service! Clothes came back fresh, neatly folded, and delivered on time. Highly recommend SparQlean!',
        'date' => 'Oct 2025'
      ],
      [
        'name' => 'Saurabh Patel',
        'rating' => 4,
        'comment' => 'Dry cleaning was spotless, especially for my suits. The pickup and delivery was seamless.',
        'date' => 'Sep 2025'
      ],
      [
        'name' => 'Shifa Khan',
        'rating' => 5,
        'comment' => 'Super fast express service. My clothes looked brand new. Loved the eco-friendly detergents!',
        'date' => 'Sep 2025'
      ],
      [
        'name' => 'Sohil Pathan',
        'rating' => 5,
        'comment' => 'Affordable pricing and professional handling. Definitely using again for my college wear!',
        'date' => 'Nov 2025'
      ]
    ];
    ?>

    <div class="reviews-grid">
      <?php foreach ($reviews as $review): ?>
        <div class="review-card animate-fadeInUp">
          <div class="review-header">
            <div class="avatar"><?= strtoupper($review['name'][0]); ?></div>
            <div class="review-info">
              <h4><?= htmlspecialchars($review['name']); ?></h4>
              <div class="stars">
                <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                  <i class="fa-solid fa-star"></i>
                <?php endfor; ?>
              </div>
              <small><?= htmlspecialchars($review['date']); ?></small>
            </div>
          </div>
          <p class="review-text"><?= htmlspecialchars($review['comment']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= ADD REVIEW FORM ================= -->
<section class="add-review-section">
  <div class="container">
    <h2>Share Your Experience</h2>
    <p>Your feedback helps us keep improving and serving you better.</p>

    <form action="submit_review.php" method="POST" class="review-form">
      <div class="input-group">
        <input type="text" name="name" id="name" required />
        <label for="name">Full Name</label>
      </div>

      <div class="input-group">
        <select name="rating" id="rating" required>
          <option value="">Rate Our Service</option>
          <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
          <option value="4">⭐⭐⭐⭐ Good</option>
          <option value="3">⭐⭐⭐ Average</option>
          <option value="2">⭐⭐ Poor</option>
          <option value="1">⭐ Very Bad</option>
        </select>
      </div>

      <div class="input-group">
        <textarea name="comment" id="comment" rows="4" required></textarea>
        <label for="comment">Your Review</label>
      </div>

      <button type="submit" class="submit-btn">Submit Review</button>
    </form>
  </div>
</section>

<?php include './includes/footer.php'; ?>
