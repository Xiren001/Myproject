<!DOCTYPE html>
<html lang="en">

<head>
  <title>Brangay Profiling</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bussiness.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/307a1a6a59.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
</head>

<body>
  <!--home start-->
  <div id="faq" class="invi-div"></div>
  <header class="header">
    <input type="checkbox" id="check" />
    <label for="check" class="icon">
      <i class="bx bx-menu" id="menu-icon"></i>
      <i class="bx bx-right-arrow-circle" id="close-icon"></i>
    </label>
    <nav class="nav">
      <a href="/IT26/BARANGAY/landing_page/barangay.php" style="--i: 0">Home</a>
    </nav>
  </header>



  <div class="p-1 text-white text-center logo-text">

    <div class="container log-h">
      <div class="p-1 logo-div">
        <img class="logo img-responsive" src="LOGO.png" alt="logo" />
      </div>
      <div class="p-1 h1-div">
        <h1> Barangay Business Permit </h1>
      </div>
    </div>


    <div class="custom-shape-divider-bottom-1711486951">
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
  </div>

  <div class="back">
    <div class="container req">
      <div class="req-div">
        <p><b>Note:</b> Please make sure to provide accurate information in the form below. Processing of Barangay Business Permit may take up to 1-2hrs. Make sure to upload the needed files and follow the instructions carefully. For Gcash payments, please provide the reference number in the designated field. Thank you.</p>
      </div>
    </div>

    <div class="container form-div">
          <form action="" method="">

            <fieldset class="f1">
              <div>
              <label for="tracking">Tracking code</label>
              <input type="text" id="tracking" name="tracking" readonly>
              </div>
            </fieldset>

            <fieldset class="f2">
              <div>
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Enter Your Full Name">
              </div>
              <div>
              <label for="address">Address</label>
              <input type="text" id="address" name="address" placeholder="Enter Your Address">
              </div>
              <div>
              <label for="dateb">Date of Birth</label>
              <input type="date" id="dateb" name="dateb" >
              </div>
              </fieldset>

              <fieldset class="f3">
              <div>
              <label for="number">Contact Number</label>
              <input type="number" id="number" name="number" placeholder="Enter Your Contact No.">
              </div>
              <div>
              <label for="date">Pick-up date</label>
              <input type="date" id="date" name="date">
              </div>
            </fieldset>

            <fieldset class="f4">
              <div>
                <div>
              <label for="upload_file">Upload Community Tax Certificate (Cedula)</label>
              <input type="file" name="upload_file" class="form-control"  id="upload_file" accept="image/*" onchange="getImagePreview(event)">
                </div>
                <div id="preview" class="img-area col-md-4" data-img="">
                  <i class='bx bxs-cloud-upload icon-UP'></i>
                  <h3>Upload Image</h3>
                  <p>Image size must be less than <span>2MB</span></p>
               </div>
               </div>
              <div>
                <div>
              <label for="upload_file_sig">Upload DTI Business Name Registration</label>
              <input type="file" name="upload_file_sig" class="form-control"  id="upload_file_sig" accept="image/*" onchange="getImagePreview1(event)">
                </div>
                <div id="preview1" class="img-area col-md-4" data-img="">
                  <i class='bx bxs-cloud-upload icon-UP'></i>
                  <h3>Upload Image</h3>
                  <p>Image size must be less than <span>2MB</span></p>
               </div>
               </div>
            </fieldset>

            <fieldset class="f5">
              <div>
              <label for="payment">Payment Method:</label>
              <select id="payment" name="payment">
                <option value="cash">Cash on Pick-up</option>
                <option value="Gcash">Gcash</option>
              </select>
              <p>Note: For Gcash you can send it to this number 09922521838</p>
              </div>
              <div>
              <label for="ref">Reference No: (for Gcash Payment only)</label>
              <input type="text" id="ref" name="ref" placeholder="Enter Gcash Reference No.">
              </div>
            </fieldset>

            <fieldset>
              <label for="bio">Purpose</label>
              <textarea id="bio" name="bio" placeholder="Enter Purpose "></textarea>
            </fieldset>

            <button class="submit-btn" type="submit">Submit</button>
          </form>
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
            <li><a href="/IT26/BARANGAY/landing_page/barangay.php">about us</a></li>
            <li><a href="/IT26/BARANGAY/landing_page/barangay.php">our services</a></li>
            <li><a href="/IT26/BARANGAY/landing_page/barangay.php">map</a></li>
            <li><a href="/IT26/BARANGAY/landing_page/barangay.php">mission</a></li>
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

  <script src="bussiness.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    // Function to generate a random alphanumeric string of a specified length
    function generateRandomString(length) {
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      let result = '';
      for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters[randomIndex];
      }
      return result;
    }

    // Function to generate a tracking code in the specified format
    function generateTrackingCode() {
      const parts = [];
      for (let i = 0; i < 8; i++) {
        parts.push(generateRandomString(4)); // Generate a group of 4 alphanumeric characters
      }
      return parts.join('-'); // Join the parts with dashes to form the tracking code
    }

    // Get the input field for tracking code
    const trackingInput = document.getElementById('tracking');

    // Generate a tracking code when the document is ready
    document.addEventListener('DOMContentLoaded', function() {
      // Set the generated tracking code to the input field
      trackingInput.value = generateTrackingCode();
    });
  </script>
</body>

</html>