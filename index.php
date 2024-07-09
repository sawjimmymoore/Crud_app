<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f3e5f5, #e1bee7);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Cinzel', serif;
        }
        .container {
            flex: 1;
        }
        .jumbotron {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .navbar-brand, .nav-link {
            color: #6a1b9a !important;
        }
        .display-4 {
            color: #6a1b9a;
            font-family: 'Great Vibes', cursive;
            font-size: 3rem;
        }
        .lead {
            color: #6a1b9a;
            font-family: 'Cinzel', serif;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }
        footer a {
            color: #6a1b9a;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD App</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="read.php">View Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">𝒲𝑒𝓁𝒸𝑜𝓂𝑒 𝓉𝑜 𝐿𝒜𝒫 𝒮𝓉𝓊𝒹𝑒𝓃𝓉 𝑅𝑒𝑔𝒾𝓈𝓉𝓇𝒶𝓉𝒾𝑜𝓃 𝒜𝓅𝓅</h1>
            <p class="lead">This is a simple CRUD application built with PHP and Bootstrap.</p>
            <hr class="my-4">
            <p>Use the navigation bar to create or view students.</p>
            <a class="btn btn-primary btn-lg" href="create.php" role="button">Add Student</a>
            <a class="btn btn-secondary btn-lg" href="read.php" role="button">View Students</a>
        </div>
    </div>
    <footer class="mt-5">
        <p>Built by <a href="https://www.example.com" target="_blank">JMM&HEPH</a></p>
        <p>Contact us at: <a href="mailto:registercrud.contact@mit.com">registercrud.contact@mit.com</a></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
