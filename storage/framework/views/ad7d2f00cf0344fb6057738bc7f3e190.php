<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lifestyle Theme</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    flex-direction: column;
  }

  .navbar {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

  .nav-link:hover {
    color: #ffffff !important;
  }

  .navbar .form-control {
    background-color: #333;
    color: white;
    border: none;
  }

  .container-sm {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
    max-width: 600px;
    width: 90%;
  }

  .form-label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 0.5rem;
  }

  .form-control {
    border: 2px solid #eee;
    border-radius: 8px;
    padding: 12px;
    transition: all 0.3s ease;
  }

  .btn-success {
    background-color: #4CAF50;
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .btn-success:hover {
    background-color: #45a049;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
  }

  footer {
    padding: 20px;
    background: linear-gradient(to right, #1a1a1a, #2c3e50);
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
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

  <div class="form-wrapper">
    <div class="container-sm">
      <div class="mb-3">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameInput" placeholder="John Doe">
      </div>
      <div class="mb-3">
        <label for="usernameInput" class="form-label">Username</label>
        <input type="text" class="form-control" id="usernameInput" placeholder="john_doe">
      </div>
      <div class="mb-3">
        <label for="emailInput" class="form-label">Email</label>
        <input type="email" class="form-control" id="emailInput" placeholder="johndoe@example.com">
      </div>
      <div class="mb-3">
        <label for="messageInput" class="form-label">Message</label>
        <textarea class="form-control" id="messageInput" rows="3" placeholder="Recommend me a trending lifestyle!"></textarea>
      </div>
      <button type="button" class="btn btn-success">Subscribe</button>
    </div>
  </div>

  <footer>
    <p>© 2024 Lifestyle Vibes, All Rights Reserved</p>
    <div class="social-icons">
      <a href="https://www.instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://www.twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
    </div>
    <small>
      <a href="#">Privacy Policy</a> •
      <a href="#">Terms & Conditions</a>
    </small>
  </footer>
</body>
</html><?php /**PATH C:\SEMESTER3\front-end\UAS\UAS_FRONTEND_PROGAMMING_KELOMPOK10\example-app\resources\views/subscribe.blade.php ENDPATH**/ ?>