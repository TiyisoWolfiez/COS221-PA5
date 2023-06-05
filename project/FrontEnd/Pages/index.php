<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/home.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Winery SA | Home</title>
</head>
<body>
    <?php
     include "../Components/Navbar.php";
     if(isset($_SESSION['adminkey']))header("Location: admin.php");
     ?>
     <div class="landing-page-bg">
       <div class="landing-page-container">
           <h1>Welcome to <br> Winery SA <i class="fa-solid fa-wine-glass pe-3" style="font-size: 5rem;"></i></h1>
           <h3>Guiding you to the finest wines in South Africa</h3>
   
           <h4>scroll down</h4>
           <div class="chevron-container">
             <i class="fa-solid fa-chevron-down" onclick="document.getElementById('home-page-content').scrollIntoView({behavior: 'smooth'});"></i>
           </div>
       </div>
     </div>

    <div class="home-page-content" id="home-page-content">
        <div class="card mb-3 card-info-container" style="max-width: 540px; height: 200px; max-height: 200px; overflow: hidden;">
            <div class="row g-0">
              <div class="col-md-4">
                <img class="card-img-top " src="https://images.unsplash.com/photo-1504279577054-acfeccf8fc52?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>Connected</strong></h5>
                  <p class="card-text">Our company's well-established connections with top wineries worldwide will reassure you. Second only to our exceptional service quality.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 card-info-container" style="max-width: 540px; height: 200px; max-height: 200px; overflow: hidden;">
            <div class="row g-0">
              <div class="col-md-4">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1547595628-c61a29f496f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>Quality</strong></h5>
                  <p class="card-text">We ensure our selection reflects the current accuracy of wine reviews and trends, unveiling undiscovered wines and wineries for your exploration.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 card-info-container" style="max-width: 540px; height: 200px; max-height: 200px; overflow: hidden;">
            <div class="row g-0">
              <div class="col-md-4">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1578911373434-0cb395d2cbfb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>Variety</strong></h5>
                  <p class="card-text">With our extensive network of connections, we effortlessly link you to an exquisite array of wines encompassing diverse types and flavors.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 card-info-container" style="max-width: 540px; height: 200px; max-height: 200px; overflow: hidden;">
            <div class="row g-0">
              <div class="col-md-4">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1491924778227-f225b115dd5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>Trustworthy</strong></h5>
                  <p class="card-text">We diligently verify all wineries, their associated wines, and managers, ensuring your utmost security and peace of mind.<br><br><br><i>Rest assured, you are in safe hands.</i></p>
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
    const titleIcon = document.querySelector(".title-icon");
    const titleText = document.querySelector(".title-text");
    const titleWines = document.querySelector(".title-wines");
    const titleWineries = document.querySelector(".title-wineries");

    const titleUsername = document.querySelector(".title-username");
    const titleLogout = document.querySelector(".title-logout");

    window.addEventListener("scroll", () => {
        if(window.scrollY > 300){
          navEl.classList.add("navbar-scroll");
          titleIcon.style.color = "#414141";
          titleText.style.color = "#414141";
          titleWines.style.color = "#414141";
          titleWineries.style.color = "#414141";

          titleUsername.style.color = "#414141";
          if(titleLogout)titleLogout.style.color = "#414141";
        }
        else{ 
          navEl.classList.remove("navbar-scroll");
          titleIcon.style.color = "white";
          titleText.style.color = "white";
          titleWines.style.color = "white";
          titleWineries.style.color = "white";

          titleUsername.style.color = "white";
          if(titleLogout)titleLogout.style.color = "white";
        }
    });
  </script>
</body>
</html>