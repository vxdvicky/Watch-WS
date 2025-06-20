<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Signup & Login - TimeZion</title>
  <style>
    * { 
      box-sizing: border-box; 
      font-family: 'Poppins', sans-serif; 
      margin: 0; 
      padding: 0; }
    body {
      /* background: linear-gradient(132deg, #554343,#4b744b,rgb(79, 79, 110),#8d2d5d,#c06f6f,#ffffff); */
      /* background-size: 400% 400%; 
      animation: BackgroundGradient 15s ease infinite; */
       background-image: url('bgg.jpg'); 
  background-size: cover; 
  background-repeat: no-repeat;
  background-position: center;
    
      height: 100vh; 
      overflow-x: hidden;
    
    }
    @keyframes BackgroundGradient {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    header { 
      background-color: rgb(64,64,64); 
      padding: 15px 40px;
     }
    .navbar { 
      display: flex; 
      justify-content: space-between; 
      align-items: center; 
    }
    .navbar .logo { 
      color: #fff; 
      font-size: 24px; 
      font-weight: bold; 
    }
    .navbar ul {
       list-style: none; 
       display: flex; 
       gap: 25px; }
    .navbar ul li a {
      color: #fff; 
      text-decoration: none; 
      font-weight: 500; 
      transition: 0.3s;
    }
    .navbar ul li a:hover {
      background-color: white; 
      color: #0077ff; 
      padding: 8px; 
      border-radius: 20px;
    }
    .container {
      display: flex; 
      flex-wrap: wrap; 
      justify-content: center; 
      align-items: center;
      padding: 20px; 
      gap: 20px;
    }
    .form-section, .image-section {
      flex: 1 1 400px; 
      max-width: 500px; 
      background: linear-gradient(#33335e,#024661,#030b5a);
      padding: 30px; 
      border-radius: 10px; 
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    .form-title h2 {
      font-size: 26px; 
      color: #fff; 
      border-bottom: 2px solid #eee; 
      padding-bottom: 10px;
      display: inline-block; 
      margin-bottom: 20px;
    }
    .form-group { 
      margin-bottom: 20px; 
      width: 100%; 
    }
    label { 
      display: block; 
      margin-bottom: 6px; 
      font-weight: 500; 
      color: #fff; 
    }
    input[type="text"], input[type="tel"], input[type="email"], input[type="password"] {
      width: 100%; 
      padding: 10px 12px; 
      border: none; 
      border-radius: 8px;
      outline: none;
    }
    .gender-options {
       display: flex; 
       gap: 25px; 
       margin-top: 5px; 
       color: white; 
      }
    button {
      padding: 12px; 
      background-color: #862a98;
      color: white; 
      font-size: 16px;
      border: none; 
      border-radius: 8px; 
      cursor: pointer; 
      width: 100%;
    }
    button:hover {
        background-color: #f5314e;
      }
    .image-section img {
      width: 100%; 
      height: 270px; 
      border-radius: 10px;
    }
    .toggle-buttons {
      text-align: center;
       margin-bottom: 20px; 
       display: flex; 
       gap: 10px; 
       justify-content: center;
    }
    .toggle-buttons button {
      width: auto; 
      padding: 10px 20px;
    }
    .logo {
      font-size: 2rem; 
      font-weight: bold; 
      color: white; 
      letter-spacing: 2px;
      background: linear-gradient(270deg, #ff0000, #ff9900, #33cc33, #0099ff, #6600ff, #ecd4de, #ff0000);
      background-size: 1000% 1000%; 
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent; 
      animation: animateText 10s linear infinite;
    }
    @keyframes animateText {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Modal */
    .modal {
      display: none; 
      position: fixed; 
      z-index: 999; 
      left: 0; 
      top: 0;
      width: 100%; 
      height: 100%; 
      background-color: rgba(0,0,0,0.7);
      justify-content: center; 
      align-items: center;
    }
    .modal-content {
      background: white; 
      padding: 25px 30px; 
      border-radius: 8px;
      width: 90%; 
      max-width: 400px;
    }
    .modal-content h3 { 
      margin-bottom: 15px; 
      color: #333; 
    }
    .modal-content input[type="email"] {
      width: 100%; 
      padding: 10px; 
      margin-bottom: 15px;
    }
    .close-modal {
      float: right; 
      cursor: pointer; 
      font-size: 20px; 
      color: #333;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">TimeZion</div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Watches</a></li>
        <li><a href="index.php#contact">About</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <div class="form-section">
      <div class="toggle-buttons">
        <button onclick="showSignup()">Sign Up</button>
        <button onclick="showLogin()">Log In</button>
      </div>

      <!-- Signup Form -->
      <form id="signupForm" action="sdata.php" method="POST" onsubmit="return validateForm()">
        <div class="form-title"><h2>Create Your Account</h2></div>
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input type="text" id="fullName" name="fullName" required />
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="gender-options">
            <label><input type="radio" name="gender" value="Mr." required /> Mr.</label>
            <label><input type="radio" name="gender" value="Miss" required /> Ms.</label>
          </div>
        </div>
        <button type="submit">Sign Up</button>
      </form>

      <!-- Login Form -->
      <form id="loginForm" action="login.php" method="POST" style="display: none;">
        <div class="form-title">
          <h2>Log In</h2>    </div>
        <div class="form-group">
          <label for="loginEmail">Email Address</label>
          <input type="email" id="loginEmail" name="loginEmail" required />
        </div>
        <div class="form-group">
          <label for="loginPassword">Password</label>
          <input type="password" id="loginPassword" name="loginPassword" required />
          <div style="margin-top: 5px;">
            <input type="checkbox" id="showLoginPassword" onclick="toggleLoginPassword()" />
            <label for="showLoginPassword" style="color: #fff;">Show Password</label>
          </div>
        </div>
        <div style="margin-bottom: 15px; text-align: right;">
          <a href="#" style="color: #fff; font-size: 14px; text-decoration: underline;" onclick="openModal()">Forgot Password?</a>
        </div>
        <button type="submit">Log In</button>
      </form>
    </div>
                               <!-- image -->
    <div class="image-section">
      <img src="w4.jpg" alt="Watches" />
      <img src="w3.jpg" alt="Watches" />
    </div>
  </main>

  <!-- Forgot Password Modal -->
  <div id="forgotModal" class="modal">
    <div class="modal-content">
      <span class="close-modal" onclick="closeModal()">&times;</span>
      <h3>Reset Your Password</h3>
      <input type="email" placeholder="Enter your email" />
      <button onclick="alert('Reset link sent to your email')">Send Reset Link</button>
    </div>
  </div>

  <script>
                      //  login/signup hide
    function showLogin() {
      document.getElementById('signupForm').style.display = 'none';
      document.getElementById('loginForm').style.display = 'block';
    }

    function showSignup() {
      document.getElementById('signupForm').style.display = 'block';
      document.getElementById('loginForm').style.display = 'none';
    }

    function toggleLoginPassword() {
      const passwordInput = document.getElementById("loginPassword");
      passwordInput.type = passwordInput.type === "password" ? "text" : "password";
    }

    function validateForm() {
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      const phonePattern = /^[6-9]\d{9}$/;
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }
      if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit Indian phone number.");
        return false;
      }
      return true;
    }

    function openModal() {
      document.getElementById("forgotModal").style.display = "flex";
    }

    function closeModal() {
      document.getElementById("forgotModal").style.display = "none";
    }
  </script>
</body>
</html>
