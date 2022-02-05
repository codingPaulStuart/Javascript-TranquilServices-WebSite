<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </meta>

    <!-- Custopm PHP -->
    <?php include('../php/employeeConnect.php') ?>
    <!--MUST INCLUDE A LINK TO JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                <h1 class="display-4">About Tranquil Services </h1>
                <p class="lead">
                    Tranquil Services is a people focused support service, aimed at providing help to those who
                    need it in all aspects of our lives, be it physical, mental, social and financial. Our trained,
                    discreet and caring staff are ready to help and together have years of professional experience in
                    helping others manage the difficulties that one can encountered in life.</p>
            </div>
        </div>

        <!-- Main Body of Site -->

        <div class="row mx-3">
            <!-- Col ------------------------------------------------------------------------------------>
            <div class="col">
                <div class="jumbotron alert-info mx-auto my-2 bg-alert ">
                    <div id="" class="mb-4">
                        <?php echo '<img src="data:image;base64,' . base64_encode($emp1_Img) . '"alt="image1" class="img-fluid rounded border border-warning">'; ?>
                    </div>
                    <h2 class="display-8 text-success"><?php echo $emp1_First . " " . $emp1_Last; ?></h2>
                    <p class="lead"><?php echo $emp1_Title; ?></p>
                    <hr class="my-4" />
                    <?php echo $emp1_CV; ?>
                    <hr />
                    <?php echo $emp1_Des; ?>
                </div>
            </div>
            <!--End of col -->
            <!-- Col ------------------------------------------------------------------------------------>
            <div class="col">
                <div class="jumbotron alert-info mx-auto my-2 bg-alert ">
                    <div id="" class="mb-4">
                        <?php echo '<img src="data:image;base64,' . base64_encode($emp2_Img) . '"alt="image1" class="img-fluid rounded border border-warning">'; ?>
                    </div>
                    <h2 class="display-8 text-success"><?php echo $emp2_First . " " . $emp2_Last; ?></h2>
                    <p class="lead"><?php echo $emp2_Title; ?></p>
                    <hr class="my-4" />
                    <?php echo $emp2_CV; ?>
                    <hr />
                    <?php echo $emp2_Des; ?>
                </div>
            </div>
            <!--End of col -->
        </div> <!-- End of Row -->

        <div class="row mx-3">
            <!-- Col ------------------------------------------------------------------------------------>
            <div class="col">
                <div class="jumbotron alert-info mx-auto my-2 bg-alert ">
                    <div id="" class="mb-4">
                        <?php echo '<img src="data:image;base64,' . base64_encode($emp3_Img) . '"alt="image1" class="img-fluid rounded border border-warning">'; ?>
                    </div>
                    <h2 class="display-8 text-success"><?php echo $emp3_First . " " . $emp3_Last; ?></h2>
                    <p class="lead"><?php echo $emp3_Title; ?></p>
                    <hr class="my-4" />
                    <?php echo $emp3_CV; ?>
                    <hr />
                    <?php echo $emp3_Des; ?>
                </div>
            </div>
            <!--End of col -->
            <!-- Col ------------------------------------------------------------------------------------>
            <div class="col">
                <div class="jumbotron alert-info mx-auto my-2 bg-alert ">
                    <div id="" class="mb-4">
                        <?php echo '<img src="data:image;base64,' . base64_encode($emp4_Img) . '"alt="image1" class="img-fluid rounded border border-warning">'; ?>
                    </div>
                    <h2 class="display-8 text-success"><?php echo $emp4_First . " " . $emp4_Last; ?></h2>
                    <p class="lead"><?php echo $emp4_Title; ?></p>
                    <hr class="my-4" />
                    <?php echo $emp4_CV; ?>
                    <hr />
                    <?php echo $emp4_Des; ?>
                </div>
            </div>
            <!--End of col -->
        </div> <!-- End of Row -->

        <div class="row mx-3">
            <!-- Col ------------------------------------------------------------------------------------>
            <div class="col">
                <div class="jumbotron alert-info mx-auto my-2 bg-alert ">
                    <div id="staff_list" class="mb-4">
                    </div>

                </div>
                <!--End of col -->
                <!-- Col ------------------------------------------------------------------------------------>
                <div class="col">
                    <div class="jumbotron alert-info mx-auto my-2 bg-alert ">
                        <div id="" class="mb-4">
                        </div>

                    </div>
                    <!--End of col -->
                </div> <!-- End of Row -->





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
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>
            <!-- JQuery UI -->
            <script src="external/jquery/jquery.js"></script>
            <script src="jquery-ui.min.js"></script>
            <!-- Custom JavaScript -->
            <script src="../js/script2.js"></script>
</body>

</html>