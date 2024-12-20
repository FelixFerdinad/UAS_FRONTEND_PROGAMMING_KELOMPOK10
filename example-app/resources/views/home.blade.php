<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lifestyle Vibes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet"/>
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

    h2, h3 {
      color: #333;
    }

    .main-content {
      padding: 40px 0;
    }

    .content-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .content-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .content-card:hover {
      transform: translateY(-5px);
    }

    .card-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-title {
      font-size: 1.5rem;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .card-text {
      color: #666;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .category-tag {
      display: inline-block;
      padding: 5px 12px;
      background: #e9ecef;
      border-radius: 20px;
      color: #495057;
      font-size: 0.9rem;
      margin-right: 8px;
      margin-bottom: 8px;
    }

    .read-more {
      display: inline-block;
      padding: 8px 20px;
      background: #2c3e50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: 0.3s ease;
    }

    .read-more:hover {
      background: #1a1a1a;
      color: white;
    }

    .newsletter-section {
      background: linear-gradient(to right, #1a1a1a, #2c3e50) !important;
      padding: 40px;
      border-radius: 15px;
      margin: 40px 0;
      color: white;
      text-align: center;
    }

    .newsletter-section h3 {
      color: white;
      margin-bottom: 20px;
    }

    .newsletter-form {
      max-width: 500px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .trending-topics {
      margin-top: 40px;
    }

    .topic-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 15px;
    }

    .carousel {
      position: relative;
      max-width: fit-content;
      margin: auto;
      overflow: hidden; 
      padding-bottom: 20px;
      }
    .carousel-inner {
      display: flex;
      transition: transform 0.5s ease; 
    }
    
    .carousel-item {
      min-width: 100%; 
      box-sizing: border-box; 
    }

    .carousel-item img {
      width: 100%;
    }

    .carousel-control {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 255, 255, 0.7);
      border: none;
      cursor: pointer;
      padding: 10px;
      border-radius: 50%; 
      z-index: 10;
    }

    .carousel-control:hover {
      background-color: rgba(255, 255, 255, 1);
    }

    /* Form Styling */
    .grid form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap
    }

    .grid input, .grid button {
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ddd;
    }
    
    footer {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
      color: #0059ff;
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
        <a class="navbar-brand" href="#">Lifestyle Vibes</a>
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

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/car.jpg" class="d-block w-100" alt="Pic1">
        </div>
        <div class="carousel-item">
          <img src="img/kayak.jpg" class="d-block w-100" alt="Pic2">
        </div>
        <div class="carousel-item">
          <img src="img/view.jpg" class="d-block w-100" alt="Pic3">
        </div>
        <div class="carousel-item">
          <img src="img/headphone.jpg" class="d-block w-100" alt="Pic4">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <main class="container-lg main-content">
      <section>
        <h2>Discover Your Best Life</h2>
        <p class="lead">Explore curated content on wellness, fashion, travel, and mindful living.</p>
        
        <div class="content-grid">

          <article class="content-card">
            <img src="img/view.jpg" alt="Wellness" class="card-image">
            <div class="card-content">
              <span class="category-tag">Wellness</span>
              <span class="category-tag">Mental Health</span>
              <h3 class="card-title">Morning Routines for Success</h3>
              <p class="card-text">Discover how successful people start their day and build habits that promote wellness and productivity.</p>
              <a href="#" class="read-more">Read More</a>
            </div>
          </article>
    
          <article class="content-card">
            <img src="img/car.jpg" alt="Fashion" class="card-image">
            <div class="card-content">
              <span class="category-tag">Fashion</span>
              <span class="category-tag">Sustainability</span>
              <h3 class="card-title">Sustainable Fashion Guide</h3>
              <p class="card-text">Learn how to build a sustainable wardrobe that's both stylish and environmentally conscious.</p>
              <a href="#" class="read-more">Read More</a>
            </div>
          </article>
    

          <article class="content-card">
            <img src="img/kayak.jpg" alt="Travel" class="card-image">
            <div class="card-content">
              <span class="category-tag">Travel</span>
              <span class="category-tag">Adventure</span>
              <h3 class="card-title">Hidden Gems: Travel 2024</h3>
              <p class="card-text">Explore off-the-beaten-path destinations that promise unique experiences and unforgettable memories.</p>
              <a href="#" class="read-more">Read More</a>
            </div>
          </article>
        </div>
      </section>
    
      <section class="newsletter-section">
        <h3>Stay Updated with Lifestyle Vibes</h3>
        <p>Get weekly insights on wellness, fashion, and mindful living delivered to your inbox.</p>
        <form class="newsletter-form">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter your email">
          </div>
          <button type="submit" class="btn btn-light">Subscribe Now</button>
        </form>
      </section>
    

      <section class="trending-topics">
        <h3>Trending Topics</h3>
        <div class="topic-list">
          <span class="category-tag">#MindfulLiving</span>
          <span class="category-tag">#SustainableFashion</span>
          <span class="category-tag">#WellnessRoutines</span>
          <span class="category-tag">#HealthyRecipes</span>
          <span class="category-tag">#TravelInspiration</span>
          <span class="category-tag">#LifestyleTips</span>
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
</html>