<?php
 $CurrentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="cpy-noti disp-none">
  Copied !.
</div>

<!-- Empty array of Copy Buttons in JS  -->
<script type="text/javascript">
  const copyBtn = [];
  const copyText = [];
</script>


<nav id="NavigationBar" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
      <a class="navbar-logoHyperlink" href="index.php">
        <img src="images/LogoCss4.png" alt="logo" width="100" height="50">
      </a>
      <button class="left-sidebarMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">
        <i class="bi bi-three-dots-vertical"></i>
      </button>
      <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle"
        id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link <?php if($CurrentPage == 'index.php'){ echo 'pageActive' ;} ?> text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if($CurrentPage == 'aboutus.php'){ echo 'pageActive' ;} ?> " href="aboutus.php">aboutus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if($CurrentPage == 'contactus.php'){ echo 'pageActive' ;} ?> " href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link nav-opt-documentation" href="documentation/gettingstarted.php">Documentation</a>
          </li>
        </ul>
      </div>
      <div class="gitLink collapse navbar-collapse position-absolute top-0 end-0">
        <a href=""><i class="bi bi-github"></i></a>
      </div>
  </nav>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <!-- <h5 class="" > -->
      <a class=" offcanvas-title navbar-logoHyperlink" href="index.php" id="offcanvasRightLabel">
        <img src="images/LogoCss4.png" alt="logo" width="100" height="50">
      </a>
      <!-- </h5> -->
      <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active text-white <?php if($CurrentPage == 'index.php'){ echo 'pageActive' ;} ?> " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($CurrentPage == 'aboutus.php'){ echo 'pageActive' ;} ?> " href="aboutus.php">aboutus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($CurrentPage == 'contactus.php'){ echo 'pageActive' ;} ?> " href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link nav-opt-documentation" href="documentation/gettingstarted.php">Documentation</a>
        </li>
      </ul>
      <hr style="border:1px solid white">
      <div class="gitLink">
        <a href=""><i class="bi bi-github"></i></a>
      </div>
    </div>
  </div>