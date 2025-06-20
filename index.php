
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TimeZion - Watches</title>
  <link rel="stylesheet" href="index.css">
  
</head>
<body>
  <nav id="navbar">
    <div id="logo">
      <p>TimeZion</p>
    </div>

    <div class="hamburger" id="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <div class="nav-center" id="navCenter">
      <div class="nav-links">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Kids</a></li>
          <li><a href="#">All Watches</a></li>
        </ul>
      </div>
      <div class="login-buttons">
       <a href="signup.php?form=login"> <button class="login">Login</button></a>
        <a href="signup.php?form=login"> <button class="login">Sign-up</button></a>
      </div>
    </div>
  </nav>
                                                                 <!-- second section -->
    <section id="second-page">
  <div class="image-video-wrapper">
    <div class="slider"> 
      <div class="slides" id="slideContainer">
        <img src="w1.jpg" alt="">
        <img src="w2.jpg" alt="">
        <img src="w3.jpg" alt="">
        <img src="w4.jpg" alt="">
        <img src="w5.jpg" alt="">
      </div>
    </div>
    <div class="video-box">
      <video autoplay loop muted playsinline disablepictureinpicture>
        <source src="video-mp4.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</section>

<!-- Watch Gallery Section -->
<section id="watch-gallery">
  <h2 class="gallery-title">Brands</h2>
  <div class="watch-container">
    <div class="watch-card">
      <img src="police.jpg" alt="Watch 1">
      <p class="brand-name">police</p>
    </div>
    <div class="watch-card">
      <img src="fossil.jpeg" alt="Watch 2">
      <p class="brand-name">Fossil</p>
    </div>
    <div class="watch-card">
      <img src="casio.jpeg" alt="Watch 3">
      <p class="brand-name">Casio</p>
    </div>
    <div class="watch-card">
      <img src="titan.jpeg" alt="Watch 4">
      <p class="brand-name">Titan</p>
    </div>
    <div class="watch-card">
      <img src="klein.jpeg" alt="Watch 5">
      <p class="brand-name">Daniel Klein</p>
    </div>
  </div>
</section>

<!-- Know TimeZion Section -->
<footer class="footer-section">
  <div class="footer-container">
    <div class="footer-box about-us">
      <h3>About Us</h3>
      <p>TimeZion is a premium watch brand that combines elegance, durability, and style. Our mission is to provide timeless luxury at your fingertips.</p>
    </div>

    <div id="contact" class="footer-box contact-us">
      <h3>Contact Us</h3>
      <form class="complaint-form">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Complaint..." rows="3" required></textarea>
        <button type="submit">Submit</button>
      </form>
      <p class="helpline">📞 Helpline: +91-9876543210</p>
    </div>

    <div class="footer-box follow-us">
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="https://www.instagram.com/xvdvicky?igsh=MWo1aXFyanB5bG02Yw=="><img src="insta.jpeg" alt="Instagram"></a>
        <a href="#"><img src="facebook.png" alt="Facebook"></a>
        <a href="#"><img src="twitter.png" alt="Twitter"></a>
      </div>
    </div>
  </div>
</footer>

                                <!-- all rights  -->
<footer class="watch-footer">
  <div class="footer-content">
    <p>&copy; 2025 <strong>TimeZion - The Watch Store.</strong>. All rights reserved.</p>
    <p> Titan Company Limited.</p>
  </div>
</footer>




  <script>
    const hamburger = document.getElementById('hamburger');
    const navCenter = document.getElementById('navCenter');

    hamburger.addEventListener('click', () => {
      navCenter.classList.toggle('active');
    });
                        //  image slides loop
    const slides = document.getElementById('slideContainer');
    const images = slides.querySelectorAll('img');
    let index = 0;

    setInterval(() => {
      index = (index + 1) % images.length;
      slides.style.transform = `translateX(-${index * 100}%)`;
    }, 2000);
  </script>
</body>
</html>



