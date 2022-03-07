<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>LOG IN</title>
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
    <div class="modal-dialog" style="margin-top: 180px; margin-bottom:120px">
        <div class="modal-content rounded-5 shadow bg-black opacity-75">
            <div class="modal-header p-5 pb-4 border-bottom-0 text-white">
                <h2 class="fw-bold mb-0 ">LOG IN</h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="{{route('login')}}" method="post">
                    @csrf
                
                    @error('not_valid')
                    <p class="text-danger"> * {{$message}}</p>
                    @enderror

                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" value="{{ old('email')}}">
                        <label for="floatingInput">Email address</label>
                    </div>
                    @error('email')
                      <p class="text-danger"> * {{$message}}</p>
                    @enderror
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <p class="text-danger"> * {{$message}}</p>
                        @enderror
                        <span>
                            <svg width="16" height="16" fill="currentColor" class="bi bi-eye text-white" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </span>
                        <input class="form-check-input" type="checkbox" onclick="myFunction()" id="eye">
                        
                        <script>
                            function myFunction() {
                                var x = document.getElementById("floatingPassword");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                    </div>
                    <hr class="my-4 text-white">
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">LOG IN</button>
                    <small class="text-muted"> New to Petflix? <a href="{{ route('register')}}">Sign Up now</a><br></small>
                </form>
            </div>
        </div>
    </div>
    <footer class="d-flex w-100 text-white" style="position: fixed;margin-bottom: 0px;bottom: 0px;">
        <h3 class="col-auto ms-auto me-3">&#169; 2022<img src="img/logo.svg" alt="petflix logo">. All rights reserved.</h3>
    </footer>
</body>

</html>