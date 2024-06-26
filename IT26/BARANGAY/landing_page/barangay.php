<!DOCTYPE html>
<html lang="en">

<head>
  <title>Brangay Profiling</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="barangay.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/307a1a6a59.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--home start-->
  <div id="home" class="invi-div"></div>
  <header class="header">
    <input type="checkbox" id="check" />
    <label for="check" class="icon">
      <i class="bx bx-menu" id="menu-icon"></i>
      <i class="bx bx-right-arrow-circle" id="close-icon"></i>
    </label>
    <nav class="nav">
      <a href="#home" style="--i: 0">Home</a>
      <a href="#about" style="--i: 1">About</a>
      <a href="#service" style="--i: 2">Service</a>
      <a href="#map" style="--i: 3">Map</a>
      <a href="/IT26/BARANGAY/faq/faq.php" style="--i: 4">FAQ</a>
    </nav>
    <div class="btn-div">
      <button class="btnLogin-popup btn-popup"><span>Login</span></button>
      <button class="btnContact-popup btn-popup"><span>Contact us</span></button>
    </div>
  </header>
  <div class="container-wrapper">
    <div class="wrapper">
      <span class="icon-close">
        <ion-icon name="close-outline"></ion-icon>
      </span>

      <div class="form-box login">
        <h2><b>Employee Login</b></h2>
        <form class="" action="" method="post" autocomplete="off">
          <div class="input-box">
            <input type="text" name="usernameemail" required value="">
            <label for="">Username</label>
          </div>
          <div class="input-box">
            <input type="password" name="password" required value="">
            <label for="">Password</label>
          </div>
          <button type="submit" class="btn" id="btn-con" name="submit">Login</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container-wrapper">
    <div class="wrapper wrappers">
      <span class="icon-close closes">
        <ion-icon name="close-outline"></ion-icon>
      </span>

      <div class="form-box contact">
        <h2><b>Get in touch to us</b></h2>
        <form id="con-form" action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="b2279cbc-c09a-4c6a-b047-372d74c39efd">
          <div class="input-box">
            <input id="name-con" name="Name" type="text" required autocomplete="off" />
            <label>Name</label>
          </div>
          <div class="input-box">
            <input id="email-con" name="Email" type="email" required  autocomplete="off"/>
            <label>Email</label>
          </div>
          <div class="input-box">
            <input id="number-con" name="Number" type="text" required autocomplete="off" />
            <label>Phone number</label>
          </div>
          <div class="input-box area-box">
            <textarea class="text-area" name="Message" id="message" rows="4"
              placeholder="Tell us your concern..."></textarea>
          </div>
          <button type="submit" class="btn" id="btn-con" onclick="clearContact( )">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <div  class="p-1 text-white text-center logo-text">
    <div class="container">
      <div class="p-1 div-1">
        <div class="p-1 logo-div">
          <img class="logo img-responsive" src="LOGO.png" alt="logo" />
        </div>

        <div class="text-main">
          <p class="para-1">Discover the -</p>
          <h1>
            Barangay profiling<br />
            Davao City
          </h1>
          <p class="para-2">
            The most exciting district of Matina, Davao, get your opportunity
            to move forward together.
          </p>
          <div class="main-icon">
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="p-1 div-2">
        <div class="img-fluid captain-pic">
          <img class="cap-img" src="grim.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!--home end-->

  <!--about start-->
  <div id="about" class="container mt-5 landing about-div">
    <div class="container about-content">
      <div class="container rectangle left"></div>
      <div>
        <div class="about-line">
          <p>
            About us
          <div class="line-p"></div>
          </p>
        </div>
        <h1>If you change your city, you're changing the world</h1>
        <p>Barangay Matina is determined to address everything that hinder its way to be the best.</p>
      </div>
      <div class="container rectangle right"></div>
    </div>
  </div>

  <div class="container mt-5 carouse">
    <div class="row container">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="hong2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>First slide label</h2>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="hong2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Second slide label</h2>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="hong3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Third slide label</h2>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div id="mission" class="p-1 text-white text-center barangay-div">
    <div class="container div-about">
      <div class="about-mis">
        <h2><b>Our Barangay</b></h2>

        <div id="carouselExampleCaptionss" class="carousel slide text-ca" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item text-ab active">

              <div class="text-cont">
                <h2>Goal</h2>
                <h5>Our overarching goal is to create a dynamic and inclusive 
                  community where every resident feels empowered to actively participate in 
                  shaping the future of Barangay [Name]. By fostering a culture of inclusivity,
                   accountability, and shared responsibility, we aim to build strong social connections, 
                   promote civic engagement, and inspire positive change that enhances the quality of life 
                   for all residents. Through collaborative efforts and collective action, we believe that Barangay 
                   [Name] can truly thrive as a beacon of progress and prosperity in our region.</h5>
              </div>
            </div>
            <div class="carousel-item  text-ab">

              <div class="text-cont">
                <h2>Mission</h2>
                <h5>Barangay [Name] is committed to realizing the following key goals: to create a dynamic and inclusive
                   community where every resident feels empowered to actively participate in shaping the future of 
                   Barangay [Name]. Through proactive engagement, transparent governance, and collaboration with
                    stakeholders, we strive to establish an environment where residents are encouraged to voice their
                     opinions, contribute their skills, and work towards common goals that benefit the entire community.</h5>
              </div>
            </div>
            <div class="carousel-item  text-ab">

              <div class="text-cont">
                <h2>Vission</h2>
                <h5>At Barangay [Name], our vision is to cultivate a thriving and harmonious community, 
                  where every resident is empowered to contribute towards sustainable progress. We envision 
                  a place where individuals from diverse backgrounds come together, fostering a sense of unity, 
                  cooperation, and collective responsibility towards building a better future for generations to come.</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionss"
            data-bs-slide="prev">
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionss"
            data-bs-slide="next">
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="about-mis">
        <div class="b-who">
          <div class="who-cont">
            <h2><b>Who we are</b></h2>
          </div>
          <div class="who-cont">
            <h5>Barangay [Name] is a vibrant community, rich in history and culture, founded on [Date]. 
              \Our residents, diverse in background and united in purpose, form the heart and soul of our barangay.
               Together, we celebrate our traditions, support one another, and work towards common goals. With
                a spirit of inclusivity and cooperation, we strive to create a welcoming environment where every 
                voice is heard and every individual is valued. In Barangay [Name], we are committed to building a
                 brighter future for all, guided by the principles of unity, integrity, and progress.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--about end-->

  <!--service start-->

  <div id="service" class="custom-shape-divider-top-1710351725">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
        opacity=".25" class="shape-fill"></path>
      <path
        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
        opacity=".5" class="shape-fill"></path>
      <path
        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
        class="shape-fill"></path>
    </svg>
  </div>

  <div class="container service-main">

    <div class="container title-head">
      <h1 class="title">
        <span class="title-word title-word-1">visit</span>
        <span class="title-word title-word-2">our</span>
        <span class="title-word title-word-3">online</span>
        <span class="title-word title-word-4">service</span>
      </h1>
    </div>

    <div class="service-div">
      <div class="services">

        <div class="serv-img ">
          <img class="img-fluid" src="cert.svg" alt="">
        </div>

        <div class="serv-cont">
          <h5>barangay Certification</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="/IT26/BARANGAY/clearance/clearance.php"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid " src="cert2.svg" alt="">
        </div>

        <div class="serv-cont">
          <h5>Business permit</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="/IT26/BARANGAY/business/bussiness.php"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="cert3.svg" alt="">
        </div>

        <div class="serv-cont">
          <h5>certificate of indigency</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="/IT26/BARANGAY/cIndigency/indegency.php"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <!-- <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="cert4.svg" alt="">
        </div>

        <div class="serv-cont">
          <h5>Barangay Health Certificate</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href=""><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>
 -->
      <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="cert5.svg" alt="">
        </div>

        <div class="serv-cont">
          <h5>Certificate of Residency</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="/IT26/BARANGAY/cResidence/residence.php"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>

      <div class="services">

        <div class="serv-img">
          <img class="img-fluid" src="cert6.svg" alt="">
        </div>

        <div class="serv-cont">
          <h5>barangay ID</h5>
        </div>

        <div class="serv-icon">
          <div class="icon-serv">
            <a href="/IT26/BARANGAY/cID/ID.php"><i class='bx bx-chevron-right'></i></a>
          </div>
        </div>

      </div>


    </div>
  </div>

  <div id="map" class="custom-shape-divider-bottom-1710438899">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
        opacity=".25" class="shape-fill"></path>
      <path
        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
        opacity=".5" class="shape-fill"></path>
      <path
        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
        class="shape-fill"></path>
    </svg>
  </div>


<div class="map-main">

  <div class="container map-title">
    <p>Visit us</p>
    <p>you can get in touch to us onsite</p>
  </div>

  <div class="container map-div">
    <div class="div-map">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4708.6937741997335!2d125.5921364935042!3d7.065109550355031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d65ac7d3493%3A0xa54471a513d5fc70!2sUniversity%20of%20Mindanao%20-%20Matina!5e0!3m2!1sen!2sph!4v1710439952235!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>
  </div>
</div>


<footer class="footer">
  <div class="container footer-con">
    <div class="row con-row">

      <div class="div-log">
      <div class="footer-col footer-logo-div">
        <img class="logo-footer img-responsive" src="LOGO.png" alt="logo" />
      </div>
      </div>

      <div class="footer-col">
        <h4>Page</h4>
        <ul class="footer-ul">
          <li><a href="#about">about us</a></li>
          <li><a href="#service">our services</a></li>
          <li><a href="#map">map</a></li>
          <li><a href="#mission">mission</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>get help</h4>
        <ul class="footer-ul">
          <li><a href="/IT26/BARANGAY/faq/faq.php">FAQ</a></li>
          <li><a href="/IT26/BARANGAY/termsCond/terms.php">Terms & Conditions</a></li>
          <li><a href="/IT26/BARANGAY/disclaimer/disclaimer.php">Disclaimer</a></li>
          <li><a href="/IT26/BARANGAY/privacy/privacy.php">privacy policy</a></li>
        </ul>
      </div>       

      <div class="footer-col footer-icons">
        <h4>follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

  <script src="barangay.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
</body>

</html>

