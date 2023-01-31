 <!--header-->
 <?php
//  changing an active state using php
 $page = basename($_SERVER['SCRIPT_NAME']);
 
 ?>
 <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="index.php"><i class="fa fa-headphones mr-1"
                            aria-hidden="true"></i>HOS LOGO HERE</a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'index.php') {
                                echo 'active';
                            }?>" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'about.php') {
                                echo 'active';
                            }?>" href="about.php"> About Us  </a>
                        </li>
                        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us <i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="vision.php">Vision and Mission</a>
                  <a class="dropdown-item" href="belief.php">Our Beliefs</a>
                  <a class="dropdown-item" href="history.php">Our History</a>
                  <!-- <a class="dropdown-item" href="#">Certificate</a> -->
                </div>
              </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'services.php') {
                                echo 'active';
                            }?>" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'contact.php') {
                                echo 'active';
                            }?>" href="contact.php">Contact Us</a>
                        </li>
                        <!-- search button -->
                        <div class="search-right">
                            <a href="#search" class="btn" title="search"><span class="fa fa-search"
                                    aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Now</h4>
                                    <form action="#error" method="GET" class="search-box">
                                        <div class="input-search"> <span class="fa fa-search mr-2"
                                                aria-hidden="true"></span><input type="search"
                                                placeholder="Enter Keyword" name="search" required="required"
                                                autofocus="" class="search-popup">
                                        </div>
                                        <button type="submit" class="btn btn-style-white search-btn">Search</button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- //search popup -->
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->