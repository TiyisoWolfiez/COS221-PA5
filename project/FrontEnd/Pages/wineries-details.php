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
    <div class="elements-container mb-3">
        <div class="img-container">
            <img src="<?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_imageURL'];?>" class="winery-image"/>
            <div class="img-cover">
                <h1 class="winery-name"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_name'];?> 
                    <small class="text-body-secondary" style="color: var(--app-theme-col) !important;">
                    <?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['isVerified'] == 1 ? "verified" : "not verified";?> 
                    </small>
                </h1>
            </div>
        </div>
        <div class="website-container mb-3">
            <div class="card w-50">
                <div class="card-body">
                    <h5 class="card-title">Winery description</h5>
                    <p class="card-text"><?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['description'];?></p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="<?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_websiteURL'];?>" class="text-decoration-underline">
                            <?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_websiteURL'];?>
                        </a>
                    </li>
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
        <div class="wines-container list-group">
            <h2 class="text-center mb-3 text-dark">All wines asocciated with <?php if(isset($_SESSION["WineryData"]))echo $WineryData[0]['winery_name'];?> </h2>
            <table class="table mb-3">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Wine Name</th>
                    <th scope="col"><i class="fa-solid fa-circle-notch"></i> &nbsp; varietal</th>
                    <th scope="col"><i class="fa-solid fa-cubes-stacked"></i> &nbsp; carbonation and &nbsp; sweetness </th>
                    <th scope="col"><i class="fa-regular fa-calendar"></i> &nbsp; year_bottled </th>
                </tr>
                </thead>
                <tbody class="">
                    <?php 
                    if(isset($_SESSION["Wines"])){
                        $wines = $_SESSION["Wines"];
                        $count = 1;
                        foreach($wines as $obj){
                            echo '<tr class="wineryElement">'.
                                '<th scope="row">'. $count .'</th>'.
                                '<td>'. $obj["wine_name"] .'</td>'.
                                '<td>'. $obj["varietal"] .'</td>'.
                                '<td>'. $obj["carbonation"] .' • '. $obj["sweetness"] .'</td>'.
                                '<td>'. $obj["year_bottled"] .'</td>'.
                            '</tr>';
                            $count += 1;
                        }
                    }
                    ?>
                </tbody>
            </table>
            <button class="btn btn-primary btns-click mb-3" style="width: 150px; margin-left: auto; margin-right: auto;" onmouseup="loadMoreData()">Load More</button>
            
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

    const loadMoreData = function(){
        const xhttpObject = new XMLHttpRequest();
        switchOnLoader();
        xhttpObject.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200){
                const res = JSON.parse(this.responseText);
                switchOffLoader();
                const table = document.querySelector(".wines-container .table tbody");
                table.innerHTML = "";

                for(let i = 0; i < res.data.length; ++i){
                    table.innerHTML += '<tr class="wineryElement">' +
                                            '<th scope="row">'+ (i + 1) + '</th>' +
                                            '<td>'+ res.data[i].wine_name + '</td>'+
                                            '<td>'+ res.data[i].varietal +'</td>'+
                                            '<td>'+ res.data[i].carbonation +' • ' + res.data[i].sweetness +'</td>'+
                                            '<td>'+ res.data[i].year_bottled +'</td>'+
                                        '</tr>';
                }
            }
        };

        xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=LOAD_MORE_WINES");
        xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttpObject.send();
    }

    const switchOnLoader = function(){
        const websiteContainer = document.querySelector(".elements-container");
        websiteContainer.innerHTML += '<div class="spinner-container">' +
                                        '<div class="spinner-grow text-success" role="status">' +
                                            '<span class="sr-only">Loading...</span>' +
                                        '</div>' +
                                    '</div>';
    }

    const switchOffLoader = function(){document.querySelector(".spinner-container").remove();}
  </script>
</body>
</html>
