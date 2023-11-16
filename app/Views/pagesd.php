<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SD Page</title>
    <link data-n-head="ssr" rel="shortcut icon" type="image/png" href="https://www.nidprotech.com/images/big-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: white;
        }

        .jumbotron {
            background-color: orange;
            color: black;
            padding: 2rem;
            border-radius: 0;
        }

        .btn-primary {
            background-color: white;
            /* สีปุ่ม */
            border-color: white;
            /* สีขอบปุ่ม */
            color: black;
            width: 15%;
        }

        .feature-box {
            text-align: center;
            padding: 3rem;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .footer {
            background-color: orange;
            color: black;
            padding: 1rem 0;
            text-align: center;
        }

        .navbar-brand img {
            max-height: 50px;
            /* ปรับขนาดโลโก้ตามต้องการ */
            margin-right: 20px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://localhost:8080/SD-page">
            <img src="https://www.nidprotech.com/images/news/NID-News-20210129144656.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/SD-page">SD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/3D-page">3D</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/3DSD-page">3DSD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/Cad-cam">CADCAM</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron / Hero Section -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to SD Page</h1>
            <p class="lead">A place where you can find amazing content and services.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <h2>Feature 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h2>Feature 2</h2>
                    <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h2>Feature 3</h2>
                    <p>Integer auctor odio nec magna sollicitudin laoreet.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>