<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Reservation System</title>
  <!-- Bootstrap CSS -->
  <scrip src="//unpkg.com/alpinejs" defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar .nav-link {
      align-items: center;
      display: flex;
      height: 100%;
      margin-right: 40px;
      font-size: 20px;
    }

    .navbar-brand img {
      height: 80px;
      width: auto;
    }

    .custom-btn {
      background-color: white;
      color: black;
      border: 2px solid darkgray;
    }

    .custom-btn:hover {
      background-color: rgb(66, 66, 66);
      color: white;
    }

    .footer .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 1.5rem;
    }

    .footer a:hover {
      text-decoration: none;
      color: #D96F38;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-center justify-content-lg-between">

      <!-- Logo Only for Smaller Screens -->
      <a class="navbar-brand d-lg-none" href="#"><img src="{{ asset('images/logo-nav.png') }}" alt="Hotel Urban Nest Logo"></a>

      <!-- Toggler -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav Items -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rooms.html">Rooms</a>
          </li>
          <!-- Logo for Larger Screens -->
          <li class="nav-item d-none d-lg-flex">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/logo-nav.png') }}" alt="Hotel Urban Nest Logo"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bookings/create">Book Now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Images</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <main>
          {{$slot}}
        </main>
        <footer class="footer mt-auto py-3 bg-dark text-white">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 text-center">
                <img src="{{ asset('images/logo-small.png') }}" alt="">
                <h5 class="mt-3">Hotel Urban Nest</h5>
                <p>888 Rue Ville, MONTREAL, QUEBEC, H8L 1E4, CANADA</p>
                <p>Toll Free: +1-866-888-8888 | Direct: +1-514-888-8888</p>
              </div>
              <div class="col-12 col-md-12 text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ad quo ut, quod temporibus dignissimos.
                </p>
                <div class="social-icons">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
              <div class="col-12 col-md-12 text-center">
                <a href="#">Privacy Policy</a> | <span> All rights reserved. &copy; 2023</span>
              </div>
            </div>
          </div>
        </footer>
        <x-flash-message />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

      </body>
      
      </html>