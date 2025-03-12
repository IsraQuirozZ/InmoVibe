<nav class="navbar navbar-expand-md bg-body-tertiary" data-bs-theme="dark">
  <!-- <div class="container-fluid d-flex justify-content-between"> -->
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <i class="fa-solid fa-house"></i>InmoVibe
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse"
      id="navbarNav"
    >
      <ul class="navbar-nav gap-5">
        <?php $current_page = basename($_SERVER['PHP_SELF'])?>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : ''?>" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'properties.php') ? 'active' : ''?>" href="properties.php">PROPERTIES</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'about-us.php') ? 'active' : '' ?>" href="about-us.php">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>" href="contact.php">CONTACT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
