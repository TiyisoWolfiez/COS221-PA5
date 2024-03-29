<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/login.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | login/signup</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['adminkey']))header("Location: admin.php");
    ?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row rounded-4 box-area bg-white" >
            <div class="col-md-5 left-box rounded-4">
                <img src="https://images.unsplash.com/photo-1528132596460-787bb7adfd5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=386&q=80" class="rounded-4 img-class"/>
            </div>
            <div class="col-md-7 right-box rounded-right-3 signup-login-box">
                <form action="#" method="post" onsubmit="return validateLogin()" class="needs-validation">
                    <div class="row align-items-center rounded-right-3">
                        <div class="header-text mb-4">
                            <h3>Welcome back to Winery SA</h3>
                            <p>We are glad to see you again</p>
                        </div>
                        <div class="input-group mb-3 was-validated">
                            <input type="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="email address" required/>
                        </div>
                        <div class="input-group mb-3 was-validated">
                            <input type="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" required/>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" class="btn btn-lg w-100 fs-6 login-btn" value="Login">
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6 no-account-btn" onclick="toggleSignUpLogin()">Don't have an account? Signup instead</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6 no-account-btn" onclick="toggleAdminLogin()">I am an admin</button>
                        </div>
                        <p class="text-danger error-container"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="../Client/SignupLogin.js"></script>
</body>
</html>