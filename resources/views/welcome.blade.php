<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pamana</title>
    @vite('resources/css/landingpage.css')
</head>
<body>
  <x-navbar>
  <!-------------------------------------------my background / hero section or idk--------------------------------------------->
  <section class="hero">
    <div class="hero-text">
      <h1>Premium Surplus Goods from Japan</h1>
      <p>
        Discover authentic Japanese surplus products — electronics, fashion,
        collectibles, and more. Quality checked. Securely shipped.
      </p>
      <div class="hero-buttons">
        <button class="btn-primary">Browse Products</button>
        <button class="btn-secondary">Learn More</button>
      </div>
    </div>

    <div class="hero-image">
      <img src="https://images.unsplash.com/photo-1549692520-acc6669e2f0c" alt="Japan Products">
    </div>
  </section>

  <!--------------------------------my websites features------------------------------->
  <section class="features" id="features">
    <h2>Why Pamana?</h2>

    <div class="feature-grid">
      <div class="feature-card">
        <h3>🇯🇵 Authentic Items</h3>
        <p>Directly sourced surplus goods from trusted Japanese suppliers.</p>
      </div>

      <div class="feature-card">
        <h3>Secure Payments</h3>
        <p>End-to-end encrypted transactions with trusted payment providers.</p>
      </div>

      <div class="feature-card">
        <h3>Fast Shipping</h3>
        <p>Reliable international delivery with real-time tracking.</p>
      </div>
    </div>
  </section>

  <!------------------------------------------- PRODUCTS PREVIEW ----------------------------------->
  <section class="products" id="products">
    <h2>Popular Finds</h2>

    <div class="product-grid">
      <div class="product-card">
        <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f" alt="">
        <h3>Japanese Camera</h3>
        <p>High-quality surplus electronics</p>
      </div>

      <div class="product-card">
        <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f" alt="">
        <h3>Vintage Watch</h3>
        <p>Classic Japanese craftsmanship</p>
      </div>

      <div class="product-card">
        <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c" alt="">
        <h3>Streetwear</h3>
        <p>Authentic surplus fashion</p>
      </div>
    </div>
  </section>

  <!---------------------------------- CTA ------------------------------------->
  <section class="cta" id="contact">
    <h2>Start Exploring Japan Today</h2>
    <p>Join thousands of buyers discovering premium surplus items.</p>
    <button class="btn-primary">Get Started</button>
  </section>

  <!---------------------------------------- FOOTER -------------------------->
  
  <footer>
    <p>© 2026 Japan Surplus. All rights reserved.</p>
  </footer>
</x-navbar>
</body>
</html>
