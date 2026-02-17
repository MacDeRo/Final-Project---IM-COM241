<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Group 1 University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/new logo group 1.png">
    <!-- Removed inline <style> tag, all CSS is now in style.css -->
</head>
<body class="home-template">
<nav class="navbar navbar-expand-lg navbar-template">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/new logo group 1.png" width="60" style="margin-right:10px;"> Group 1 University
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <div class="dropdown">
        <span class="profile-icon dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor:pointer;"><i class="fa fa-user"></i></span>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
          <li><a class="dropdown-item" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="main-card">
  <div class="left">
    <h1>Welcome to Group 1 University</h1>
    <div class="desc">We are open for registration<br>Join us and start your journey today.</div>
    <div class="register-box">
      <input type="text" placeholder="Your email or username">
      <button>Sign in</button>
    </div>
    <div style="color:#888; font-size:1rem; margin-top:10px;">12. Group 1 University</div>
  </div>
  <div class="right d-flex align-items-center justify-content-center" style="background: #f7d469;">
    <div style="background: #eeb6e9; border-radius:24px; width:340px; height:150px; display:flex; align-items:center; justify-content:center; box-shadow:0 4px 24px rgba(0,0,0,0.10);">
      <img src="img/new logo group 1.png" alt="Group 1 University Logo" style="max-width:140px; max-height:110px; width:auto; height:auto;">
    </div>
  </div>
</div>
<div class="container side-cards" style="max-width:1100px;">
  <div class="row">
    <div class="col-md-6 col-lg-4 mb-3">
      <div class="side-card">
        <div class="side-card-title">School supply</div>
        <div>Learn more about our resources and materials for students.</div>
        <button class="side-card-btn">Read more</button>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-3">
      <div class="side-card">
        <div class="side-card-title">Offline classes</div>
        <div>Learn about our in-person class options and schedules.</div>
        <button class="side-card-btn">Read more</button>
      </div>
    </div>
  </div>
</div>
<section id="about" class="d-flex justify-content-center align-items-center flex-column mt-5">
  <div class="card mb-3 card-1" style="max-width: 900px;">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center justify-content-center">
        <div style="background: #eeb6e9; border-radius:24px; width:100%; height:110px; display:flex; align-items:center; justify-content:center; box-shadow:0 4px 24px rgba(0,0,0,0.10);">
          <img src="img/new logo group 1.png" alt="Group 1 University Logo" style="max-width:100px; max-height:90px; width:auto; height:auto;">
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">About Us</h5>
          <p class="card-text">
            Group 1 University is dedicated to fostering academic excellence, innovation, and personal growth. Our vibrant community empowers students to achieve their dreams and make a positive impact on the world. Join us as we shape the future together.
          </p>
          <p class="card-text"><small class="text-muted">Group 1 University</small></p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="text-center text-light mt-4" style="color:#222 !important; background:transparent;">
    Copyright &copy; 2026 Group 1 University. All rights reserved.
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>