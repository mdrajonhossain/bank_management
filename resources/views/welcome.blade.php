<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Bank Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/fdr')}}">FDR</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/fdrstatus')}}">FDR Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    @include('header')

    <!-- Hero Section -->
    <section class="hero-section text-center py-5 h-screen">
        <div class="container">
            <h1>Welcome to Our Banks</h1>
            <p class="lead">We are here to serve you with the best financial solutions</p>
            <a href="{{url('login') }}" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer class="footer bg-dark text-light text-center py-3">
        <div class="container">
            <span>&copy; 2024 Bank Name. All rights reserved.</span>
        </div>
    </footer> -->

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
