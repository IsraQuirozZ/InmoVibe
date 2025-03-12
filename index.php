<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InmoVibe</title>
    <script src="https://kit.fontawesome.com/6209fab7df.js" crossorigin="anonymous"></script>
    <meta name="description" content="InmoVibe: Find your perfect home in Spain and Europe with our wide variety of properties. Start your journey today.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
  <body>
    <?php include "nav-bar.php"?>
    <header class="banner">
      <div class="banner-content col-sm-12">
        <h1>Finding Your New Home Is Simple</h1>
        <p>InmoVibe is your starting point to find the perfect home for you. 
        With our wide variety of options within Spain and Europe, turn your dream into reality with the ideal property.</p>
        <p>Explore our options and start your journey to your new home today!</p>
        <a href="properties.php" class="primary-btn">Start Exploring</a>
      </div>
    </header>
    
    <section class="most-viewed-properties section">
      <h2>Most Viewed</h2>
      <p>Discover more properties and find the one that fits your needs. Start your search today!</p>
      <div class="container py-4">
        <div class="card-group d-flex flex-wrap gap-3 justify-content-space-between">
          <!-- CARD 1 -->
          <div class="card rounded-start rounded-end">
            <img src="img/MadridApartment1.jpg" class="img-fluid rounded-top custom-img" alt="Modern apartment in Madrid">
            <div class="card-body">
              <h5 class="card-title">Modern Apartment Madrid</h5>
              <p class="card-text">📍 Calle de Velázquez, 45, Salamanca, 28001 Madrid, España</p>
              <div class="property-icons d-flex gap-4">
                <span><i class="fas fa-bed"></i> 2</span>
                <span><i class="fas fa-bath"></i> 2</span>
                <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 85 m²</span>
                <span><i class="fa-solid fa-car"></i> 1</span>
              </div>
              <div class="card-bottom d-flex justify-content-between align-items-center mt-3">
                <p class="property-price">€250,000</p>
                <a href="properties.php" class="primary-btn">View</a>
              </div>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="card rounded-start rounded-end">
            <img src="img/CozyHouseBarcelona.jpg" class="img-fluid rounded-top custom-img" alt="Cozy House">
            <div class="card-body">
              <h5 class="card-title">Cozy House</h5>
              <p class="card-text">📍 Carrer de Balmes, 150, Eixample, 08008 Barcelona, España</p>
              <div class="property-icons d-flex gap-4">
                <span><i class="fas fa-bed"></i> 3</span>
                <span><i class="fas fa-bath"></i> 2</span>
                <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 100 m²</span>
                <span><i class="fa-solid fa-car"></i> 1</span>
              </div>
              <div class="card-bottom">
                <p class="property-price">€450,000</p>
                <a href="properties.php" class="primary-btn">View</a>
              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="card rounded-start rounded-end">
            <img src="img/LuxuryVillaMarbella.jpg" class="img-fluid rounded-top custom-img" alt="Luxury Villa">
            <div class="card-body">
              <h5 class="card-title">Luxury Villa</h5>
              <p class="card-text">📍 Avenida Ricardo Soriano, 18, 29601 Marbella, Málaga, España</p>
              <div class="property-icons d-flex gap-4">
                <span><i class="fas fa-bed"></i> 3</span>
                <span><i class="fas fa-bath"></i> 3</span>
                <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 90 m²</span>
                <span><i class="fa-solid fa-car"></i> 2</span>
              </div>
              <div class="card-bottom d-flex justify-content-between align-items-center mt-3">
                <p class="property-price">€300,000</p>
                <a href="properties.php" class="primary-btn">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section-divider">
      <div class="divider"></div>
      <div class="divider"></div>
      <div class="divider"></div>
    </div>
    
    <div class="section">
      <h2>Our Work In 3 Steps</h2>
      <p>At InmoVibe, we make the process of finding your perfect home simple and stress-free.</p>
      <div class="service-cards">
        <!-- SERVICE CARD 1 -->
        <div class="service-card">
          <i class="fa-solid fa-magnifying-glass"></i>
          <h3>Property Research</h3>
          <p>Find your dream house in a few clicks</p>
        </div>
        <!-- SERVICE CARD 2 -->
        <div class="service-card">
          <i class="fa-solid fa-handshake"></i>
          <h3>Secure the Deal</h3>
          <p>We handle all negotiations and paperwork, ensuring that the process is smooth, fast, and stress-free.</p>
        </div>
        <!-- SERVICE CARD 2 -->
        <div class="service-card">
          <i class="fa-solid fa-key"></i>
          <h3>Key Devlivery</h3>
          <p>Finally, we deliver the keys to your new home and ensure you have all the necessary information to settle in comfortably.</p>
        </div>
      </div>
</div>
    <!-- ARREGLAR EL FOOTER -->
    <?php include "footer.html"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
