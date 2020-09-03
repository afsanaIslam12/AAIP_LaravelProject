<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAIP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/cd26900da2.js" crossorigin="anonymous"></script>

</head>
<body>



      <style>
        .dropdown:hover>.dropdown-menu{
            display:block;
        }
    </style>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse_target">
                {{-- <a class="navbar-brand" href="#"><img src="logomain.png"></a> --}}
                <a class="navbar-brand" href="#"><img src="img/logo1.png" style="height: 70px; width: 90px;"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/about">About Us</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/services">News</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/event">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/alumni-directory">Alumni Directory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/student-directory">Student Directory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Monirul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/home">Logout</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                            Signup
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown_target">
                            <a class="dropdown-item" href="{{ url('/') }}/alumni-register">Alumni Signup</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/') }}/student-register">Student Signup</a>
                        </div>
                    </li> --}}

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                            Login
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown_target">
                            <a class="dropdown-item" href="{{ url('/') }}/alumni-login">Alumni Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/') }}/student-login">Student Login</a>
                        </div>
                    </li> --}}

                </ul>
        </div>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>





    <!-- End Navigation -->





    <div>
        @yield('content2')
    </div>






<!-- Start Footer -->
    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
              <h2 class="foothead">AAIP</h2>
              <p class="footpara">AAIP is an integrated communication platform for alumni and students. AAIP exists to support the goals of the students as well as the institution and to strengthen the ties between the alumni, students and the community. AAIP has all the activities of the alumni association maintained online.</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
              <h2 class="foothead">Useful Link</h2>
              <ul>
                <li><a href="#">Event</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
              <h2 class="foothead">Follow Us</h2>
              <p class="footpara"> Please follow us on our social media platform facebook, twitter, linkedin, pinterest in order to keep updated and to know more about AAIP.</p>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 segment-four sm-mb-30">
              <h2 class="foothead">Our Address</h2>
              <p class="footpara">United City, Madani Avenue, Badda, Dhaka-1212</p>
            </div>
          </div>
        </div>
      </div>
      <p class="footer-bottom-text" style="color: white;">Copyright &copy; 2020 AAIP. All Rights Reserved</p>
    </footer>
<!-- End Footer -->



<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<!-- <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script> -->
<!--- End of Script Source Files -->


</body>
</html>
