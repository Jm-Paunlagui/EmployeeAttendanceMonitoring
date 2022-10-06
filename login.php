<?php
 include "config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body class="bg-light">
<main class="page login-page">
    <section class="bg-light clean-block clean-form dark mb-0">
        <div class="container">
            <div class="block-heading mb-0 pt-5 mt-5">
                <img alt="logo" src="<?php echo BASE_URL . "/assets/img/logo-light.png"; ?>" style="width: 150px;">
                <h3 class="fs-2 fw-bold text-info pt-0 mt-3 mb-3" style="font-family: Itim, serif;"><sup><span style="color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) ;">Employee Attendance Monitoring System</span></sup><br></h3>
            </div>
            <form class="fw-light mt-0 pt-4 pb-4" style="height: 400px;" method="post">
                <h2 class="fw-semibold text-info mb-4 mt-0">Sign In</h2>
                <div class="mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input class="form-control item" type="text" id="username" name="username" ></div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" id="password" name="password"></div>
                <span class="text-info ps-0 ms-0">Forgot Password/Reset Password</span>
                <div class="mb-3"></div>
                <button type="submit" name="submit" class="btn btn-primary" >Log In</button>
            </form>
        </div>
    </section>
</main>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
<script src="assets/js/vanilla-zoom.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>

