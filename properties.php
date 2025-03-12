<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoVibe</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/6209fab7df.js" crossorigin="anonymous"></script>
    <meta name="description" content="Explore our property listings in Spain and Europe. Find the ideal home for your needs with InmoVibe.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
  <?php include "nav-bar.php"?>
    <section class="properties-head section">
        <h1>Discover the Best Properties</h1>
        <h3>Filter your search to find your dream home.</h3>
        <form action="procesar.php" method="post" class="property-search">
            <div class="location-filter">
              <label class="properties-label" for="location">Location</label>
                <select class="form-select" name="location" id="location" aria-label="Default select example">
                    <option selected="selected">Choose a location</option>
                    <option value="madrid">Madrid</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="valencia">Valencia</option>
                    <option value="londres">Londres</option>
                    <option value="manchester">Manchester</option>
                    <option value="berlin">Berlin</option>
                </select>
            </div>

            <div class="properties-type">
                <label class="properties-label" for="location">Property Type</label>
                <select class="form-select" name="property-type" id="property-type">
                    <option value="house" selected="selected">House</option>
                    <option value="apartment">Apartment</option>
                </select>
            </div>

            <div class="price-range">
            <label class="properties-label price-label" for="location">Price Range</label>
                <input type="range" class="form-range" id="customRange1" name="price-range" min="250000" max="2000000" step="0.5">
                <span id="price-range-value">€200,000S</span>
            </div>

            <!-- <input class="primary-btn disable" type="submit" name="property-search-submit" id="property-search-submit" value="Search"> -->
            <a class="primary-btn" id="property-search-submit"  href="#">Search</a>
        </form>
    </section>
    
  <div class="section">
    <div class="row justify-content-center">
      <!-- CARD 1 -->
      <div class="col-lg-6 col-md-5 mb-4">
        <div class="card">
          <div class="row g-0 flex-lg-row flex-column">
            <div class="col-lg-5">
              <img src="img/MadridApartment1.jpg" class="img-fluid rounded-start custom-img" alt="Modern apartment in Madrid">
            </div>
            <div class="col-lg-7">
              <div class="card-body">
                <h5 class="card-title">Modern Apartment Madrid</h5>
                <p class="card-text">📍 Calle de Velázquez, 45, Salamanca, 28001 Madrid, España</p>
                <div class="property-icons d-flex gap-4">
                  <span><i class="fas fa-bed"></i> 2</span>
                  <span><i class="fas fa-bath"></i> 2</span>
                  <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 85 m²</span>
                  <span><i class="fa-solid fa-car"></i> 1</span>
                </div>
                <div class="card-bottom">
                  <p class="property-price">€250,000</p>
                  <a href="properties.php" class="primary-btn">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-lg-6 col-md-5 mb-4">
        <div class="card">
          <div class="row g-0 flex-lg-row flex-column">
            <div class="col-lg-5">
              <img src="img/CozyHouseBarcelona.jpg" class="img-fluid rounded-start custom-img" alt="Cozy house in Barcelona">
            </div>
            <div class="col-lg-7">
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
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-lg-6 col-md-5 mb-4">
        <div class="card">
          <div class="row g-0 flex-lg-row flex-column">
            <div class="col-lg-5">
              <img src="img/LuxuryVillaMarbella.jpg" alt="Luxury villa in Marbella" class="img-fluid rounded-start custom-img">
            </div>
            <div class="col-lg-7">
              <div class="card-body">
                <h5 class="card-title">Luxury Villa</h5>
                <p class="card-text">📍 Calle Sierra Blanca, 12, 29602 Marbella, Málaga, España</p>
                <div class="property-icons d-flex gap-4">
                  <span><i class="fas fa-bed"></i> 5</span>
                  <span><i class="fas fa-bath"></i> 3</span>
                  <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 100 m²</span>
                  <span><i class="fa-solid fa-car"></i> 3</span>
                </div>
                <div class="card-bottom">
                  <p class="property-price">€1,200,000</p>
                  <a href="properties.php" class="primary-btn">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="col-lg-6 col-md-5 mb-4">
        <div class="card">
          <div class="row g-0 flex-lg-row flex-column">
            <div class="col-lg-5">
              <img src="img/LuxuryFlatLondon.jpg" alt="Luxury flat in London" class="img-fluid rounded-start custom-img">
            </div>
            <div class="col-lg-7">
              <div class="card-body">
                <h5 class="card-title">Luxury Flat</h5>
                <p class="card-text">📍 10 Knightsbridge, London SW1X 7LY, United Kingdom</p>
                <div class="property-icons d-flex gap-4">
                  <span><i class="fas fa-bed"></i> 4</span>
                  <span><i class="fas fa-bath"></i> 3</span>
                  <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 200 m²</span>
                  <span><i class="fa-solid fa-car"></i> 2</span>
                </div>
                <div class="card-bottom">
                  <p class="property-price">€950,000</p>
                  <a href="properties.php" class="primary-btn">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 5 -->
      <div class="col-lg-6 col-md-5 mb-4">
        <div class="card">
          <div class="row g-0 flex-lg-row flex-column">
            <div class="col-lg-5">
              <img src="img/CozyVillaRome.jpg" alt="Cozy Villa in Rome" class="img-fluid rounded-start custom-img">
            </div>
            <div class="col-lg-7">
              <div class="card-body">
                <h5 class="card-title">Cozy Villa</h5>
                <p class="card-text">📍 Via Appia Antica, 125, 00179 Roma, Italia</p>
                <div class="property-icons d-flex gap-4">
                  <span><i class="fas fa-bed"></i> 4</span>
                  <span><i class="fas fa-bath"></i> 3</span>
                  <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 230 m²</span>
                  <span><i class="fa-solid fa-car"></i> 2</span>
                </div>
                <div class="card-bottom">
                  <p class="property-price">€1,200,000</p>
                  <a href="properties.php" class="primary-btn">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 6 -->
      <div class="col-lg-6 col-md-5 mb-4">
        <div class="card">
          <div class="row g-0 flex-lg-row flex-column">
            <div class="col-lg-5">
              <img src="img/ElegantApartmentParis.jpg" alt="Elegant Apartnment in Paris" class="img-fluid rounded-start custom-img">
            </div>
            <div class="col-lg-7">
              <div class="card-body">
                <h5 class="card-title">Elegant Apartment</h5>
                <p class="card-text">📍 Rue de la Paix, 75002 París, Francia</p>
                <div class="property-icons d-flex gap-4">
                  <span><i class="fas fa-bed"></i> 2</span>
                  <span><i class="fas fa-bath"></i> 2</span>
                  <span><i class="fa-solid fa-up-right-and-down-left-from-center"></i> 90 m²</span>
                  <span><i class="fa-solid fa-car"></i> 1</span>
                </div>
                <div class="card-bottom">
                  <p class="property-price">€1,800,000</p>
                  <a href="properties.php" class="primary-btn">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>

  <?php include "footer.html" ?>
  
  <script>
      const priceRangeInput = document.getElementById("customRange1");
      const priceRangeValue = document.getElementById("price-range-value");

      function updatePriceValue() {
        let price = parseInt(priceRangeInput.value).toLocaleString("en-US");
        priceRangeValue.textContent = `€${price}`;
      }

      priceRangeInput.addEventListener("input", updatePriceValue);

      updatePriceValue();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>