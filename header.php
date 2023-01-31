<script src="https://kit.fontawesome.com/ceb8b66c45.js" crossorigin="anonymous"></script>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo"><img src= "assets/img/2018_Linus_Tech_Tips_logo.svg.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
<ul>
          <li><a class="nav-link scrollto active" href="user_page.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href=" user_page.php #about">About</a></li>
          <li class="dropdown"><a href="user_page.php #services" class="nav-link scrollto"><span>Getting Started</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="assembly.php">How to assemble a System Unit</a></li>
              <li><a href="install.php">How to install an OS for new PC </a></li>
              <li><a href="reset.php">Reset/Format a Computer</a></li>
              <li><a href="troubleshoot.php">Tips for Troubleshooting</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="user_page.php #contact">Contact</a></li>
           <li><a class="nav-link scrollto" href="user_qa.php">Forum</a></li>
          <li><a class="getstarted scrollto" href=" user_page.php #about">Get Started</a></li>
          <li class="dropdown"><a class=" nav-link scrollto"><span><i class="fa-regular fa-circle-user" style="font-size:25px;"></i>Hello, <?php echo $_SESSION['user_name']?></span></a>
            <ul>
              <li><a href="logout.php">Log out</a></li>
            </ul>
          </li>
        </ul>
        <i class ="bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->