<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "lampstack";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $repeatpass = $_POST['repeatpass'];

        if ($password == $repeatpass) {
            $endpasswd=password_hash($password,PASSWORD_BCRYPT);

            $sql = "INSERT into register (id,name, email, password)
VALUES ('" . NULL . "','" . $_POST["name"] . "','" . $_POST["email"] . "','" . $endpasswd . "')";

            if ($conn->query($sql) === TRUE) {
                header("Location: login.php");
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
            echo "(Repeat password is incorrect";
        }
    }
    $conn->close();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello there</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Latest compiled JavaScript -->

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" action="register.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="name"
                                                    placeholder="name" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control"
                                                    name="email" placeholder="email" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                    name="password" placeholder="password" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 ">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control"
                                                    placeholder="Email" name="repeatpass" />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary btn-lg" value="Register" name="submit"/>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="../features/PhRegLog.png" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
</body>

</html>