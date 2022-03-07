<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Petflix</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">

    <!-- bootstrap icon set/font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- custom CSS (carousel) -->
    <link rel="stylesheet" href="{{ asset('css/carousel-slick.css') }}">
    @yield('css')

</head>

<body>
    <!-- main container -->
    <div class="container-fluid bg-dark text-white main-cont p-0 pt-5 d-flex flex-wrap">
        <!-- header/navbar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
                <div class="container-fluid">
                    <!-- navbar non collapsed -->
                    <section class="logo navbar-brand">
                        <img src="{{ asset('img/logo.svg') }}" alt="petflix logo">
                    </section>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- navbar collapsed -->
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse row" id="navbarNav">
                            <section class="menu col-lg-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item ms-lg-1">
                                        <a href="/home"
                                            class="d-flex align-items-center
                                                justify-items-center">
                                            <!-- home icon -->
                                            <i class="bi-house me-1"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ms-lg-4">
                                        <a href="{{route('lista')}}"
                                            class="d-flex align-items-center
                                                justify-items-center">
                                            <!-- list icon -->
                                            <i class="bi-card-list me-1"></i>
                                            <span>My lists</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="search col-lg-6 col-md-6">
                                <form method="POST" action={{ route('searchVids') }}
                                    class="d-flex
                                        align-items-center
                                        justify-items-center">
                                    @csrf
                                    <input name="title" class="form-control me-2" type="search"
                                        placeholder={{ $searchTerm ?? 'Search' }} aria-label="Search"
                                        value="{{ $searchTerm ?? '' }}"">
                                    <!-- search icon -->
                                    <button type=" submit" class="btn text-light">
                                    <i class="bi-search"></i>
                                    </button>
                                </form>
                                @if (!isset($searchTerm))
                                    @error('title')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @endif
                            </section>
                            <div class="col-lg">
                                <section
                                    class="user_avatar d-flex
                                        justify-content-lg-end">
                                    <a href="user_settings"
                                        class="profile-pic
                                            text-center">
                                        <!-- user icon -->
                                        <i class="bi bi-person-circle"></i>
                                        <p>{{ Auth::user()->name}}</p>
                                    </a>
                                </section>
                            </div>
                            <!-- logout section -->
                            <div class="col-1 logout">
                                <div class="d-flex flex-col text-center">
                                    <a href="{{ route('logout') }}">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <p>Logout</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <!-- footer -->
        <footer class="d-flex w-100 mt-auto">
            <h3 class="col-auto ms-auto me-3">&#169; 2022<img src="img/logo.svg" alt="petflix logo">. All rights
                reserved.</h3>
        </footer>

    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>

</html>
