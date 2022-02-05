<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@700&display=swap" rel="stylesheet">
    <!--J Query UI StyleSheet -->
    <link rel="stylesheet" href="jquery-ui.min.css">
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="../css/style1.css" />
    <title>Tranquil Services</title>
</head>

<body>

    <div class="container bg-info">

        <div class=" p-3 bg-primary">
            <div class="container">
                <img class="singleToneLogo" src="../img/logo.png">
            </div>
        </div>

        <!--Nav Bar-->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Links to left hand side of Nav Bar-->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" href="../html/index.php">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="../html/news.php">Articles <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="../html/contact.php">Contact <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="../html/about.php">About <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <!-- Search in Nav Bar -->
                <form class="form-inline my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav> <!-- End of Nav Bar -->

        <!-- Main Body of Site -->

        <div class="jumbotron mt-0 p-5 bg-success text-white ">
            <div class="container">
                <h1 class="display-4">Services </h1>
                <p class="lead">
                    Welcome to Tranquil Services, a place where you can feel comfortable and safe and get the support
                    you need.
                    Please take a look at our range of services below to find out more about what we offer.</p>
            </div>
        </div>

        <!-- Main animation Nav Wheel -->
        <div id="animateMain">
            <div class="radial-menu" id="radialAnimate">
                <div class="menu-item1" id="councillAnimate"></div>
                <div class="menu-item2" id="financeAnimate"> </div>
                <div class="menu-item3" id="mentalAnimate"> </div>
                <div class="menu-item4" id="familyAnimate"> </div>
                <div class="menu-item5" id="lifeAnimate"> </div>
                <div class="menu-item6" id="closeAnimate"> </div>
                <div class="mask" id="homeIcon"><i class="fa fa-home fa-3x"></i></div>
            </div>

            <!-- Main Animation Text Display -->
            <!-- Javascript Rendering Occurs inside these Divs -->
            <div class="showHideDisplay jumbotron" id="showHideDisplay1"></div>
            <div class="showHideDisplay jumbotron" id="showHideDisplay2"></div>
            <div class="showHideDisplay jumbotron" id="showHideDisplay3"></div>
            <div class="showHideDisplay jumbotron" id="showHideDisplay4"></div>
            <div class="showHideDisplay jumbotron" id="showHideDisplay5"></div>

        </div>
        <!--End of collapsalbe section -->

    </div> <!-- End of Container Body -->

    <!-- Footer -->
    <div class="container">
        <footer class="page-footer font-small bg-primary text-white  mt-0">

            <div class="footer-copyright text-center py-3">
                © Copyright IT Works - <?php include "../php/footer.php"; ?>
            </div>




        </footer>
    </div> <!-- Footer End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- JQuery UI -->
    <script src="external/jquery/jquery.js"></script>
    <script src="jquery-ui.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script1.js"></script>
</body>

</html>