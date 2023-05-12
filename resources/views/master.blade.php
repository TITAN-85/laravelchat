<!DOCTYPE html>
<html lang="en">

<head>
    <h1>Master to delete</h1>
    {{-- <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link href="../css/styles.css" rel="stylesheet" />

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}

</head>

<body id="page-top">
    <!-- Navigation-->
    {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="home">The Isle Players</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="services">Services</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('chat') }}">Chat</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="about">About</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="team">Team</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="players">Players</a></li>
                </ul>
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item">{{ __('You are logged in!') }}</li>
                </ul>
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <div class="card-footer">
                        <chat-form class="nav-item" v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                    </div>
                </ul>
            </div>
        </div>
    </nav> --}}



    @yield('content')



    <!-- Footer-->
    {{-- <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; ALEX_IT Website 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <!-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a> -->
                    <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer> --}}


</body>

</html>
