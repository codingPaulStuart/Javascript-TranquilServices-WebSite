<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </meta>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--J Query UI StyleSheet -->
    <link rel="stylesheet" href="jquery-ui.min.css">
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="../css/style1.css" />
    <title>Tranquil Services</title>
</head>

<body>

    <div class="container pb-3 bg-info">

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
                <h1 class="display-4">Contact </h1>
                <p class="lead">
                    If you would like to contact Tranquil services and have someone get back to you please fill in the
                    contact
                    form below. We
                    welcome referrals from general practicioners and directly from the public.</p>
            </div>
        </div>

        <!-- Main Body of Site -->


        <div class="jumbotron alert-info mx-auto my-5 w-75">
            <h2 class="display-8 text-success">Fill in contact form and we will get back to you!</h1>
                <p class="lead">Please provide suitable contact number, email and preferred contact time. We will get
                    back to
                    you within 24 hours</p>
                <hr class="my-4">

                <!-- Form -->
                <form>

                    <div class="row">
                        <div class="col">
                            <label for="firstContact">First name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="First">
                        </div>
                        <div class="col">
                            <label for="lastContact">Surname</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Last">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="emailContact">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="phoneContact">Mobile</label>
                            <input type="text" class="form-control form-control-sm" placeholder="0000 000 000">
                        </div>

                        <div class="col">
                            <label for="checkBoxes">Preferred contact?</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">Email</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">Phone</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <label for="checkBoxes">Preferred time of day</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">9-5 daytime</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">After hours</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="contactTextBox">Message</label>
                        <textarea class="form-control" id="contactTextBox" rows="3"></textarea>
                    </div>

                    <hr class="my-4" />
                    <a class="btn btn-success btn-sm float-right  px-5" href="#" role="button">Submit</a>
        </div>

        </form> <!-- Form End -->

        <!-- End of Main Body -->

    </div> <!-- End of Main Container-->

    <!-- Footer -->
    <div class="container">
        <footer class="page-footer font-small bg-primary text-white  mt-0">

            <div class="footer-copyright text-center py-3">© 2020 Copyright IT Works
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