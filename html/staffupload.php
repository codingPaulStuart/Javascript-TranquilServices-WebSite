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
    <title>Tranquil Services - Staff only upload Page</title>
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
                <h1 class="display-4">Staff Profile Upload</h1>
                <p class="lead">
                    Staff only Page, Please upload information for new member to be displayed on About Page</p>
            </div>
        </div>

        <!-- Main Body of Site -->


        <div class="jumbotron alert-info mx-auto my-5 w-75">
            <h2 class="display-8 text-success">Staff Profiling</h1>
                <p class="lead">Make sure you have all documents and image of staff with you.</p>
                <hr class="my-4">

                <!-- Form -->
                <form>

                    <div class="row">
                        <div class="col">
                            <label for="empFirst">Employee First</label>
                            <input type="text" id="empFirst" name="empFirst" class="form-control form-control-sm"
                                placeholder="First">
                        </div>
                        <div class="col">
                            <label for="empLast">Employee Surname</label>
                            <input type="text" id="empLast" name="empLast" class="form-control form-control-sm"
                                placeholder="Last">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="empID">Employee ID</label>
                            <input type="text" id="empID" name="empID" class="form-control form-control-sm"
                                placeholder="Please ensure only 4 characters long">
                        </div>
                        <div class="col">
                            <label for="empTitle">Employee Title</label>
                            <input type="text" id="empTitle" name="empTitle" class="form-control form-control-sm"
                                placeholder="for example; Psychologist, Finance etc.">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="empCV">CV information</label>
                        <textarea class="form-control" id="empCV" name="empCV" rows="3"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="empDesc">Career Achievements</label>
                        <textarea class="form-control" id="empDesc" name="empDesc" rows="3"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="empFile">Staff Image upload</label>
                        <input type="file" class="form-control-file" id="empFile" name="empFile">
                    </div>

                    <div>
                        <hr class="my-4" />
                        <input class="btn btn-success btn-sm text-white float-right px-5" type="submit" name="submit"
                            value="Submit">
                    </div>
                </form> <!-- Form End -->
                <!-- PHP scripting to submit data to database -->
                <?php

                // PHP connection
                include '../php/tranquilconnect.php';

                if (isset($_POST['submit'])) {

                    // Need to change these once check DB at home
                    $empform_first = mysqli_real_escape_string($conn, $_REQUEST['empFirst']);
                    $empForm_last = mysqli_real_escape_string($conn, $_REQUEST['empLast']);
                    $empForm_ID = mysqli_real_escape_string($conn, $_REQUEST['empID']);
                    $empform_Title = mysqli_real_escape_string($conn, $_REQUEST['empTitle']);
                    $empForm_CV = mysqli_real_escape_string($conn, $_REQUEST['empCV']);
                    $empForm_Desc = mysqli_real_escape_string($conn, $_REQUEST['empDesc']);
                    $empForm_image = addslashes(file_get_contents($_FILES['empFile']['tmp_name']));
                    //attempt to insert data into table - all insert queries should be on one line
                    $sql = "INSERT INTO temployee (employeeID, employeeTitle, employeeFirst, employeeLast, employeeCV, employeeDesc, employeeImage) VALUES ('$empForm_ID', '$empForm_Title', '$empForm_first', '$empForm_last', '$empForm_CV','$empForm_Desc','$empForm_image')";
                    //if it worked, show message
                    if (mysqli_query($conn, $sql)) {
                        echo "<p>Records added successfully.</p>";
                    } else {
                        //if not, show error
                        echo "<p>ERROR: Was not able to execute $sql. ";
                        echo mysqli_error($conn) . "</p>";
                    }
                }
                ?>
        </div>

    </div> <!-- End of Container -->


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