<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lifestyle Theme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
  </head>

  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      height: auto;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow-y: auto;
      overflow-x: hidden; 
    }

    .navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      background: linear-gradient(to right, #1a1a1a, #2c3e50) !important;
      height: 100px;
    }

    .navbar-brand {
      font-size: 2rem;
      font-weight: bold;
      color: #fff !important;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .nav-link {
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: #ffffff !important;
    }
    
    .navbar .form-control {
      background-color: #333;
      color: white;
      border: none;
      padding: 0.5rem;
    }

    .navbar .form-control::placeholder {
      color: #ffffff;
    }

    .navbar .btn-outline-dark {
      color: white;
      border-color: #000000;
    }

    .navbar .btn-outline-dark:hover {
      background-color: #333;
      color: white;
    }

    .about-header {
      text-align: center;
      padding: 60px 0 40px;
      background: linear-gradient(to right, #1a1a1a, #2c3e50);
      color: white;
      margin: -20px -15px 40px;
      border-radius: 0 0 20px 20px;
    }

    .about-header h2 {
      font-size: 2.5rem;
      color: white;
      margin-bottom: 15px;
    }

    .about-header h3 {
      color: #e0e0e0;
      font-weight: 300;
    }

    .about-section {
      background: white;
      border-radius: 15px;
      padding: 40px;
      margin-bottom: 40px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .about-section h3 {
      color: #2c3e50;
      margin-bottom: 20px;
      font-size: 1.8rem;
      border-bottom: 2px solid #e0e0e0;
      padding-bottom: 10px;
    }

    .mission-values {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin: 40px 0;
    }

    .value-card {
      background: #f8f9fa;
      padding: 25px;
      border-radius: 10px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .value-card:hover {
      transform: translateY(-5px);
    }

    .value-icon {
      font-size: 2.5rem;
      color: #2c3e50;
      margin-bottom: 15px;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .team-member {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .member-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .member-info {
      padding: 20px;
      text-align: center;
    }

    .member-name {
      font-size: 1.2rem;
      color: #2c3e50;
      margin-bottom: 5px;
    }

    .member-role {
      color: #666;
      font-style: italic;
      margin-bottom: 15px;
    }

    .stats-section {
      background: linear-gradient(to right, #1a1a1a, #2c3e50) !important;
      padding: 60px 40px;
      border-radius: 15px;
      color: white;
      margin: 40px 0;
      text-align: center;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .stat-item {
      padding: 20px;
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    figure {
      margin: 40px 0;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    figure img {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }

    figcaption {
      background: #f8f9fa;
      padding: 15px;
      text-align: center;
    }

    figcaption a {
      color: #2c3e50;
      text-decoration: none;
    }

    figcaption a:hover {
      text-decoration: underline;
    }

    footer {
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      background: linear-gradient(to right, #1a1a1a, #2c3e50) !important;
      color: white;
      text-align: center;
    }

    .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 1.5em;
    }

    .social-icons a:hover {
      color: #007bff;
    }

    footer small a {
      color: #ccc;
      margin: 0 5px;
      text-decoration: none;
    }

    footer small a:hover {
      text-decoration: underline;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Lifestyle Vibes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/subscribe">Subscribe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/account">Login</a>
              </li>
          </ul>  
        </div>
        <form class="d-flex">
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </div>
          <button class="btn btn-outline-dark ms-2" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main class="container">
      <div class="about-header">
        <h2>About Lifestyle Vibes</h2>
        <h3>Inspiring Better Living Through Mindful Choices</h3>
      </div>
    
      <section class="about-section">
        <h3>Our Story</h3>
        <p>Lifestyle Vibes began in 2020 as a small community of wellness enthusiasts and has grown into a comprehensive platform dedicated to helping people live better, healthier, and more fulfilling lives. We believe that true happiness comes from balance, mindfulness, and a deep connection to the world around us.</p>
        
        <figure>
          <img src="img/view.jpg" alt="Lifestyle Vibes Community" class="img-fluid">
          <figcaption>Our growing community of wellness enthusiasts</figcaption>
        </figure>
      </section>
    
      <section class="about-section">
        <h3>Our Mission & Values</h3>
        <p>Our mission is to inspire and empower individuals to live consciously, making mindful choices that benefit their well-being and the world around them.</p>
        
        <div class="mission-values">
          <div class="value-card">
            <i class="fas fa-heart value-icon"></i>
            <h4>Wellness First</h4>
            <p>Promoting holistic health and well-being in every aspect of life</p>
          </div>
          <div class="value-card">
            <i class="fas fa-balance-scale value-icon"></i>
            <h4>Balance</h4>
            <p>Finding harmony between work, life, and personal growth</p>
          </div>
          <div class="value-card">
            <i class="fas fa-globe value-icon"></i>
            <h4>Sustainability</h4>
            <p>Making choices that benefit both people and planet</p>
          </div>
        </div>
      </section>
    
      <section class="stats-section">
        <h3>Our Impact</h3>
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-number">100K+</div>
            <div class="stat-label">Monthly Readers</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">500+</div>
            <div class="stat-label">Expert Articles</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">50+</div>
            <div class="stat-label">Wellness Experts</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">20+</div>
            <div class="stat-label">Countries Reached</div>
          </div>
        </div>
      </section>
    
      <section class="about-section">
        <h3>Meet Our Team</h3>
        <p>Our diverse team of experts is passionate about sharing knowledge and inspiring positive change in people's lives.</p>
        
        <div class="team-grid">
          <div class="team-member">
            <img src="img/sarah.jpg" alt="Sarah Johnson" class="member-image">
            <div class="member-info">
              <h4 class="member-name">Sarah Johnson</h4>
              <div class="member-role">Founder & Wellness Director</div>
              <p>Certified wellness coach with 10+ years of experience in mindful living and holistic health.</p>
            </div>
          </div>
          
          <div class="team-member">
            <img src="img/michael.jpeg" alt="Michael Chen" class="member-image">
            <div class="member-info">
              <h4 class="member-name">Michael Chen</h4>
              <div class="member-role">Fitness Expert</div>
              <p>Professional trainer specialized in functional fitness and nutrition planning.</p>
            </div>
          </div>
          
          <div class="team-member">
            <img src="img/emma.jpg" alt="Emma Wilson" class="member-image">
            <div class="member-info">
              <h4 class="member-name">Emma Wilson</h4>
              <div class="member-role">Lifestyle Editor</div>
              <p>Fashion and lifestyle expert with a focus on sustainable living practices.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <a>© Lifestyle Vibes, All Rights Reserved</a>
      <div class="social-icons">
        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
      <small>
        <a href="#">Privacy Policy</a> •
        <a href="#">Terms & Conditions</a>
      </small>
    </footer>

  </body>
</html><?php /**PATH C:\SEMESTER3\front-end\UAS\UAS_FRONTEND_PROGAMMING_KELOMPOK10\example-app\resources\views/about.blade.php ENDPATH**/ ?>