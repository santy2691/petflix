<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PETFLIX</title>
            <!-- bootstrap css -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost/slick/slick.css"> 
        <link rel="stylesheet" href="http://localhost/slick/slick-theme.css"> 
        
            <!-- bootstrap icon set/font -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- custom CSS -->
        <link rel="stylesheet" href="http://localhost/css/app.css">
        <link rel="stylesheet" href="http://localhost/css/style.css"> 
</head>

<body style="background: url('https://www.publicdomainpictures.net/pictures/30000/velka/film-background-13340679666UC.jpg');">
    <!-- Logo -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
            <div class="container-fluid">
                <section class="logo navbar-brand">
                    <img src="img/logo.svg" alt="petflix logo">
                </section>
                <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-outline-primary me-2">Log In</button>
                </a>
            </div>
        </nav>
    </header>

    <div style="margin: 270px">
        <blockquote class="blockquote text-white text-center">
            <h1> Unlimited movies, TV shows, and more.</h1>
            <h2>Watch anywhere.</h2>
            <h3>Ready to watch? Enter your email to create or restart your membership.</h3>
        </blockquote>
        <form action="{{ route('register') }}" method="get">
            <div class="input-group  input-group-lg mb-3">
                <input type="text" class="form-control" name="email">
                <div class="input-group-append">
                    <button class="btn btn-secondary btn-lg" type="submit">GET STARTED ></button>
                </div>
            </div>
        </form>
    </div>

    <footer class="d-flex w-100 text-white" style="position: fixed;margin-bottom: 0px;bottom: 0px;">
        <h3 class="col-auto ms-auto me-3">&#169; 2022<img src="img/logo.svg" alt="petflix logo">. All rights reserved.</h3>
    </footer>
</body>

</html>