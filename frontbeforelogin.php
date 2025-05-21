<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Section</title>
  <link rel="stylesheet" href="styles1.css">
  <title>Electricity Commission</title>
</head>
<body>
  <div class="menu-overlay" id="menuOverlay">
    <span class="close-menu" onclick="toggleMenu()">&times;</span>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul> 
  </div>
  <header class="top-bar">
    <!-- Menu Section -->
    <div class="menu-section" onclick="toggleMenu()">
      <span class="menu-icon">☰</span>
      <span class="menu-text">Menu</span>
    </div>
    |
    <!-- Toll-Free Section -->
    <div class="contact-section">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHrGfK6bLTnqRjOORgRJ_lcp07x14MQdGE9A&s" alt="Home Icon" class="icon home-icon">
      <span>Toll Free - 1950</span>
    </div>
    |
    <!-- Social Media Section -->
    <div class="social-section">
      <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/667px-2023_Facebook_icon.svg.png" alt="Facebook" class="icon"></a>
      <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/198px-Instagram_logo_2016.svg.png?20210403190622" alt="Instagram" class="icon"></a>
      <a href="#"><img src="https://img.freepik.com/free-vector/new-2023-twitter-logo-x-icon-design_1017-45418.jpg?semt=ais_hybrid" alt="Twitter" class="icon"></a>
      <a href="#"><img src="https://www.iconpacks.net/icons/2/free-youtube-logo-icon-2431-thumb.png" alt="YouTube" class="icon"></a>

    </div>
    
    <!-- Accessibility Links -->
    <div class="accessibility-section">
        |
      <a href="#">Screen Reader Access</a> |   
      <a href="#service-container">Skip to Main Content</a> |
    </div>
    
    <!-- Font Size Controls -->
    <div class="font-size-section">
        <button>English+</button>
        <span class="separator">|</span>
        <button>Hindi+</button>
    </div>
    <span class="separator">|</span>
    <!-- Sign In Button -->
  <div class="language-section">
    <button onclick="window.location.href='login.php'" aria-label="Sign in to your account">
      Sign In
    </button>
  </div>

  
  </header>
   <!---->
   <div  class="logo-bar">
    <div class="logo-section">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWMZQfeoShTagdm3mUvO4gHyhuZnMJxvNhiw&s" alt="Election Commission Logo" class="logo">
      <div class="logo-text">
        <h1>भारत सरकार विद्युत मंत्रालय</h1>
        <p>GOVERNMENT OF INDIA MINISTRY OF POWER</p>
      </div>
    </div>
    <div class="search-section">
      <input type="text" placeholder="Search..." class="search-bar"><span></span>
      <button class="search-button">
        <img src="https://cdn-icons-png.flaticon.com/512/54/54481.png" alt="Search Icon" class="search-image">
      </button>
    </div>
    </div>
    <!-- Placeholder for slides -->
    <div class="slider-container">
        <div class="slides">
          <div class="slide"><img src="https://powermin.gov.in/sites/default/files/styles/slider_1024x422/public/Power_for_All.jpg?itok=67oTwqjJ" alt="Slide 1"></div>
          <div class="slide"><img src="https://powermin.gov.in/sites/default/files/styles/slider_1024x422/public/UJALA1.png?itok=YGftv199" alt="Slide 3"></div>
          <div class="slide"><img src="https://powermin.gov.in/sites/default/files/styles/slider_1024x422/public/One_Nation_One_Grid_0.png?itok=ebfFkr2W" alt="Slide 4"></div>
        </div>
        <button id="service-container" class="nav-button prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="nav-button next" onclick="moveSlide(1)">&#10095;</button>
      </div>


    <!--Plain box-->
    <div class="sliding-banner">
        <p>Save Energy, Save Money, Save Nation, Save the planet</p>
      </div>
    <!--Container-->
    <div  class="service-container">
        <!-- Box 1 -->
        <div class="service-box">
          <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/electric-7407691-6135080.png?f=webp&w=512" alt="Quick Pay Icon" class="icon">
          <p>Quick pay</p>
        </div>
    
        <!-- Box 2 -->
        <div class="service-box">
          <img src="https://cdn.iconscout.com/icon/free/png-512/free-electricity-bill-icon-download-in-svg-png-gif-file-formats--invoice-bulb-e-wallet-pack-commerce-shopping-icons-1538115.png?f=webp&w=512" alt="Outage Icon" class="icon">
          <p>Know Your Outage</p>
        </div>
    
        <!-- Box 3 -->
        <div class="service-box">
          <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/electricity-bill-icon-download-in-svg-png-gif-file-formats--invoice-payment-receipt-electrician-pack-miscellaneous-icons-11520173.png?f=webp&w=512" alt="New Connection Icon" class="icon">
          <p>New Connection</p>
        </div>
    
        <!-- Box 4 -->
        <div class="service-box">
            <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/electricity-5493930-4764678.png?f=webp&w=512" alt="Service Status Icon" class="icon">
            <p>View Latest Bill</p>
          </div>
    
        <!-- Box 5 -->
        <div class="service-box">
          <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/pay-machine-1944464-1642181.png?f=webp&w=512" alt="Section Icon" class="icon">
          <p>Electricity Bill</p><p> Calculator</p>
        </div>
    
        <!-- Box 6 -->
        <div class="service-box">
          <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/dashboard-5173422-4312477.png?f=webp&w=512" alt="Bills Icon" class="icon">
          <p>Dashboard</p>
        </div>
    
        <!-- Box 7 -->
        <div class="service-box">
            <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/police-complain-4234386-3516890.png?f=webp&w=512" alt="Complaint Icon" class="icon">
            <p>Register Complaint</p>
          </div>
      </div>
      <!--Plain box-->
      <div class="below">
        <br>
      </div>
    <br>
      <!--Poll/Complain box-->
      <div class="poll-heading">
        <h2>POLL</h2>
        <div class="underline"></div>
      </div>
      
      <div class="poll-container">
        <!-- Poll Box 1 -->
        <div class="poll-box">
          <h3>Rate the Online Services Provided by Government Of India Ministry Of Power</h3><br>
          <form id="service-rating-form">
            <input type="checkbox" id="excellent" name="service-rating" value="Excellent">
            <label for="excellent">Excellent</label><br>
    
            <input type="checkbox" id="verygood" name="service-rating" value="Very good">
            <label for="verygood">Very good</label><br>
    
            <input type="checkbox" id="good" name="service-rating" value="Good">
            <label for="good">Good</label><br>
    
            <input type="checkbox" id="better" name="service-rating" value="Could be better">
            <label for="better">Could be better</label><br>
    
            <button type="button" class="submit-btn" onclick="submitPoll('service-rating')">Submit</button>
          </form>
        </div>
    
        <!-- Poll Box 2 -->
        <div class="poll-box">
          <h3>Which Online Service Do You Find the Most Satisfying?</h3><br>
          <form id="satisfying-service-form">
            <input type="checkbox" id="quickpay" name="satisfying-service" value="Quickpay - Online payment">
            <label for="quickpay">Quickpay - Online payment</label><br>
    
            <input type="checkbox" id="newconn" name="satisfying-service" value="New Connection Application">
            <label for="newconn">New Connection Application</label><br>
    
            <input type="checkbox" id="register" name="satisfying-service" value="Register Complaint/Service">
            <label for="register">Register Complaint/Service</label><br>
    
            <input type="checkbox" id="mobile" name="satisfying-service" value="Register Mobile no/Email">
            <label for="mobile">Register Mobile no/Email</label><br>
    
            <input type="checkbox" id="other" name="satisfying-service" value="Other Online services">
            <label for="other">Other Online services</label><br>
    
            <button type="button" class="submit-btn" onclick="submitPoll('satisfying-service')">Submit</button>
          </form>
        </div>
      </div>
      <br><br>
      <!--Footer-->
      <footer class="footer">
        <div>
            <h3>QUICK LINKS</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Overview</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#term">Disclaimer & Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div>
            <h3>IMPORTANT LINKS</h3>
            <ul class="important-links">
                <li><a href="#">Central Electricity Regulatory Commission</a></li>
                <li><a href="#">Ministry of Power Government of India</a></li>
                <li><a href="#">Central Electricity Regulatory Commission (CERC)</a></li>
                <li><a href="#">Central Electricity Authority</a></li>
                <li><a href="#">NTPC Limited</a></li>
                <li><a href="#">Central Power Research Institute (CPRI)</a></li>
                <li><a href="#"></a>	Damodar Valley Corporation (DVC)</li>
                <li><a href="#">National Power Training Institute (NPTI)</a></li>
            </ul>
        </div>
        <div>
            <h3>HEADQUARTERS</h3>
            <p>This website belongs to Ministry of Power Govt. of India, Shram Shakti Bhawan, Rafi Marg, New Delhi-1</p>
            <br>
            <h3 id="term">Terms & Conditions</h3>
            <p>Though all efforts have been made to ensure the accuracy and currency of the content on this website, the same should not be construed as a statement of law or used for any legal purposes. In case of any ambiguity or doubts, users are advised to verify / check with the Department(s) and / or other source(s), and to obtain appropriate professional advice.</p>
        </div>
        <div>
            <h3>About Government Of India Ministry Of Power</h3>
            <br>
            <p>This is the Official Portal of the Government of India, designed, developed and hosted by the National Informatics Centre (NIC), a premier ICT organization of the Government of India under the aegis of the Ministry of Electronics & Information Technology.</p>
            <br>
            <div class="social-icons">
                <a href="#"><img src="https://img.freepik.com/free-vector/new-2023-twitter-logo-x-icon-design_1017-45418.jpg?semt=ais_hybrid" alt="X"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/198px-Instagram_logo_2016.svg.png?20210403190622" alt="Instagram"></a>
                <a href="#"><img src="https://img.freepik.com/premium-vector/linkedin-square-logo-vector_667864-115.jpg?w=826" alt="LinkedIn"></a>
                <a href="#"><img src="https://www.iconpacks.net/icons/2/free-youtube-logo-icon-2431-thumb.png" alt="YouTube"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/667px-2023_Facebook_icon.svg.png" alt="Facebook"></a>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        &copy; 2025 GOVERNMENT OF INDIA MINISTRY OF POWER Ltd. All rights reserved.
        <p>This website belongs to Ministry of Power Govt. of India, Shram Shakti Bhawan, Rafi Marg, New Delhi-1
            Hosted by National Informatics Centre (NIC)
            </p>
            <p>Last Updated on: 27 Mar 2025</p>
            <br>
    </div>

      <!--Script-->
      <script>
        function toggleMenu() {
            document.getElementById("menuOverlay").classList.toggle("active");
        }
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;
        function moveSlide(direction) {
        if (direction === 'next') {
            currentIndex++;
            if (currentIndex >= totalSlides) {
                currentIndex = 0; // Loop back to the first slide
                }
            } else if (direction === 'prev') {
                currentIndex--;
                if (currentIndex < 0) {
                    currentIndex = totalSlides - 1; // Loop back to the last slide
                    }
                }
                slides.style.transform = `translateX(-${currentIndex * 100}%)`;
            }
            // Attach event listeners for manual navigation
        document.querySelector(".prev").addEventListener("click", () => moveSlide('prev'));
        document.querySelector(".next").addEventListener("click", () => moveSlide('next'));

        function submitPoll(formId) {
    const form = document.getElementById(`${formId}-form`);
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const selectedValues = [];

    checkboxes.forEach((checkbox) => {
        if (checkbox.checked) {
            selectedValues.push(checkbox.value);
        }
    });

    if (selectedValues.length === 0) {
        alert("Please select at least one option before submitting.");
    } else {
        alert(`You selected: ${selectedValues.join(', ')}`);
    }
}



      </script>
      
      
</body>
</html>
