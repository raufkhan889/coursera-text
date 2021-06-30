<?php
$insert = FALSE;
$errorMessage = FALSE;

if( isset($_POST['name']) && $_POST['name'] !== "" ) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if(!$conn) {
        die("Connection to the database is lost" . mysqli_connect_error());
    }
    //  echo "SuccessFul Connected to Database!";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender']; 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `coronavaccine`.`userinfo` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    // echo $sql; 

    if ($conn->query($sql) == TRUE) {
        $insert = TRUE;
    } 
    else {
        $errorMessage = TRUE;
    }

    $conn->close();
}

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Safty | HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <img src="./Images/covid-form-bg.jpg" alt="">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
        <div class="container">
            <a class="navbar-brand" href="#">Covid-19 Vaccine Centre</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-links">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end of narbar  -->

    <!-- main content  -->
    <div class="container main">

        <h1>Welcome to COVID-19 Vaccine Center, Lahore </h1>
        <p> Enter your details and submit this form to confirm your participation in the vaccine Plan </p>

        <?php
            if ($insert == True){
                echo "<p class='submitted'>Thanks for Submitting form, We'll contact you Soon!</p>";
            } 
            else if ($errorMessage == TRUE) {
                echo "<p class='errorsubmit'>ERROR! Try Again</p>";
            }         
        ?>

        <form action="index.php" method="post">
            <input type="text" id="name" name="name" placeholder="Enter Your Full Name">
            <input type="text" id="age" name="age" placeholder="Enter Your Age">
            <input type="text" id="gender" name="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number">

            <textarea name="other" id="other" cols="30" rows="5"
                placeholder="Enter Any Additional Information . . ."></textarea>

            <div class="btn-flex">
                <button type="submit" id="sent" onclick="checkValid()">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>

</html>