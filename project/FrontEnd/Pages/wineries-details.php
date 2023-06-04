<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/winery-details.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Wineries</title>
</head>
<body>
<?php 
    include "../Components/Navbar.php";
    if(isset($_SESSION['adminkey']))header("Location: admin.php");
    if(!isset($_SESSION["WineryData"]))header("Location: wineries.php");
    if(isset($_SESSION["WineryData"]))$WineryData = $_SESSION["WineryData"];
    ?>
    <div class="elements-container">
        <div class="img-container">
            <img src="<?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_imageURL'];?>" class="winery-image"/>
        </div>
        <h1 class="winery-name"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_name'];?> 
            <small class="text-body-secondary">
            <?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['isVerified'] == 1 ? "verified" : "not verified";?> 
            </small></h1>
        <div class="website-container mb-3">
            <div class="card w-50">
                <div class="card-body">
                    <h5 class="card-title">Winery description</h5>
                    <p class="card-text"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['description'];?></p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_websiteURL'];?></li>
                    <li class="list-group-item"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['11'];?></li>
                    <li class="list-group-item"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['region_name'];?></li>
                </ul>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">Wines count</h3>
                    <div class="card-icon-and-count">
                        <i class="fa-solid fa-wine-glass pe-3" style="font-size: 1.5rem;"></i>
                        <h2 class="card-text Total-wines"><?php if(isset($_SESSION["WinesCount"]))echo $_SESSION["WinesCount"];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../Components/Footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script>
    const navEl = document.querySelector(".navbar-noscroll");

    window.addEventListener("scroll", () => {
        if(window.scrollY > 300)navEl.classList.add("navbar-scroll");
        else navEl.classList.remove("navbar-scroll");
    });
  </script>
</body>
</html>
