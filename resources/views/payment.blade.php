<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PAYMENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

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

<body style="background: url('https://www.publicdomainpictures.net/pictures/30000/velka/film-background-1334067869u9d.jpg');">
    <!-- Logo -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
            <div class="container-fluid">
                <section class="logo navbar-brand">
                    <img src="img/logo.svg" alt="petflix logo">
                </section>
            </div>
        </nav>
    </header>

    <!-- Sign In Card --> 
    <div class="modal-dialog" style="margin-top: 110px; margin-bottom: 15px">
        <div class="modal-content rounded-5 shadow bg-black opacity-75">
            <div class="modal-header p-5 pb-4 border-bottom-0 text-white">
                <h2 class="fw-bold mb-0 ">PAYMENT</h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="/home" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control rounded-4" id="floatingName" placeholder="Name">
                        <label for="floatingName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="lastName" class="form-control rounded-4" id="floatingLastName" placeholder="Last Name">
                        <label for="floatingLastName">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="number" class="form-control rounded-4" id="floatingNumber" placeholder="12341234 12341234">
                        <label for="floatingNumber">12341234 12341234</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="date" class="form-control rounded-4" id="floatingDate" placeholder="DD/MM">
                        <label for="floatingNumber">DD/MM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="code" class="form-control rounded-4" id="floatingCode" placeholder="CCV">
                        <label for="floatingDate">CCV</label>
                    </div>
                    <hr class="my-4 text-white">
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">START MEMBERSHIP</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="d-flex w-100 text-white" style="position: fixed;margin-bottom: 0px;bottom: 0px;">
        <h3 class="col-auto ms-auto me-3">&#169; 2022<img src="img/logo.svg" alt="petflix logo">. All rights reserved.</h3>
    </footer>
</body>

</html>