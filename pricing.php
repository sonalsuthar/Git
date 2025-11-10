<?php include './includes/header.php'; ?>

<!-- ================= PRICING PAGE ================= -->
<link rel="stylesheet" href="assets/css/pricing-style.css">

<section class="pricing-section animate-fadeInUp">
  <div class="container">
    <h2>Our Service Pricing</h2>
    <p class="section-subtitle">Transparent, affordable, and customized for your fabric care needs.</p>

    <?php
    $plans = [
      [
        'title' => 'Laundry By KG',
        'price' => '₹59 / kg',
        'offer' => '30% OFF',
        'desc' => 'Perfect for daily wear and home fabrics. Soft water wash & eco-friendly detergents ensure freshness and fabric safety.',
        'features' => [
          'Eco-wash with soft water',
          'Gentle detergents safe for skin',
          'Perfect folding & packaging',
          'Free pickup & doorstep delivery'
        ],
        'link' => 'schedule.php'
      ],
      [
        'title' => 'Dry Cleaning',
        'price' => '₹149 / piece',
        'offer' => '20% OFF',
        'desc' => 'Ideal for suits, sarees, and luxury fabrics. Spotless, gentle, and handled by professionals.',
        'features' => [
          'Advanced stain removal',
          'Eco-certified solvents',
          'Steam finishing & pressing',
          'Free pickup & delivery'
        ],
        'link' => 'schedule.php'
      ],
      [
        'title' => 'Steam Ironing',
        'price' => '₹10 / item',
        'offer' => '10% OFF',
        'desc' => 'Wrinkle-free, crisp, and ready-to-wear clothes with high-quality steam technology.',
        'features' => [
          'Gentle on all fabrics',
          'No burn or shine marks',
          'Fast same-day delivery'
        ],
        'link' => 'schedule.php'
      ],
      [
        'title' => 'Shoe Cleaning',
        'price' => '₹249 / pair',
        'offer' => 'Flat 25% OFF',
        'desc' => 'Deep cleaning, disinfection, and restoration for all types of footwear.',
        'features' => [
          'Material-safe cleaning',
          'Odor & stain removal',
          'Restoration polish & pack',
          'Express delivery available'
        ],
        'link' => 'schedule.php'
      ],
      [
        'title' => 'Curtain Cleaning',
        'price' => '₹99 / sq. ft.',
        'offer' => null,
        'desc' => 'Dust-free, allergen-safe cleaning that restores color and freshness.',
        'features' => [
          'Steam & vacuum extraction',
          'Fabric-safe detergents',
          'Ready-to-hang delivery'
        ],
        'link' => 'schedule.php'
      ]
    ];
    ?>

    <div class="pricing-grid">
      <?php foreach ($plans as $plan): ?>
        <div class="pricing-card <?= $plan['offer'] ? 'best-offer' : '' ?>">
          <?php if ($plan['offer']): ?>
            <span class="offer-badge"><?= htmlspecialchars($plan['offer']) ?></span>
          <?php endif; ?>

          <h3><?= htmlspecialchars($plan['title']) ?></h3>
          <p class="price"><?= htmlspecialchars($plan['price']) ?></p>
          <p class="desc"><?= htmlspecialchars($plan['desc']) ?></p>

          <ul class="features">
            <?php foreach ($plan['features'] as $feature): ?>
              <li><i class="fa-solid fa-check"></i> <?= htmlspecialchars($feature) ?></li>
            <?php endforeach; ?>
          </ul>

          <a href="<?= htmlspecialchars($plan['link']) ?>" class="pricing-btn">Book Now</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= OFFERS SECTION ================= -->
<section class="offers-section animate-fadeInUp">
  <div class="container">
    <h2>Exclusive Offers & Discounts</h2>
    <p class="section-subtitle">Save more on premium care — valid across Surat city.</p>

    <?php
    $offers = [
      [
        'icon' => 'fa-tag',
        'title' => '30% OFF – New Customer Offer',
        'desc' => 'Get 30% off your first order across all SparQlean services. Limited time only!'
      ],
      [
        'icon' => 'fa-truck-fast',
        'title' => 'Free Pickup & Delivery',
        'desc' => 'Enjoy free doorstep service for all orders above ₹299 — no hidden costs.'
      ],
      [
        'icon' => 'fa-bolt',
        'title' => 'Express 24-Hour Cleaning',
        'desc' => 'Need it fast? Our express cleaning option ensures delivery within 24 hours.'
      ],
      [
        'icon' => 'fa-gift',
        'title' => 'Refer & Earn ₹100',
        'desc' => 'Refer a friend and earn ₹100 off your next service when they place their first order.'
      ]
    ];
    ?>

    <div class="offers-grid">
      <?php foreach ($offers as $offer): ?>
        <div class="offer-card">
          <i class="fa-solid <?= htmlspecialchars($offer['icon']) ?>"></i>
          <h4><?= htmlspecialchars($offer['title']) ?></h4>
          <p><?= htmlspecialchars($offer['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="service-cta animate-fadeInUp">
  <div class="cta-content">
    <h2>Book Your Service Now</h2>
    <p>Experience premium laundry and dry-cleaning with doorstep pickup, eco-safe care, and fast turnaround.</p>
    <a href="schedule.php" class="cta-btn">Schedule Pickup</a>
  </div>
</section>

<?php include './includes/footer.php'; ?>
