<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/wines.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Wines</title>
</head>
<body>
    <?php include "../Components/Navbar.php";?>

    <!-- ------------------------------Beginning-Wines------------------------------- -->
    
    <nav style="height: 70px;"></nav><!--buffer for navbar-->
    <nav style="height: 60px;">
      <div class="ms-auto align-items-center d-flex" style="height: 60px;">
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">
          <i class="fa-solid fa-filter pe-2"></i>filters
        </div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">red wine</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">white wine</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">champagne</div>
      </div>
    </nav>

      <nav class="website-container d-flex justify-content-evenly flex-wrap align-items-center overflow-y-auto">

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=large&IMAGEID=266700" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">RW Chenin Blanc</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">White • Off Dry • Full • Fragrant •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Robertson Winery</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=large&IMAGEID=270525" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">NAMYSTO Rose 2021</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Rose • Fruity •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Quoin Rock</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=medium&IMAGEID=270869" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Stellenzicht Acheulean Red 2018</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Red •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Stellenzicht Vineyards</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=medium&IMAGEID=269514" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Raka Five Maidens 2018</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">White • Dry • Full •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Raka Wines</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=medium&IMAGEID=271080" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Groote Post Unwooded Chardonnay 2022</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">White • Dry • Medium • Fruity •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Groote Post Vineyards</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=medium&IMAGEID=270940" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Mellasat Chardonnay 2019</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">White • Dry • Medium • Herbaceous •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Mellasat Vineyards</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=medium&IMAGEID=269312" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dekker's Valley Shiraz 2018</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Red • Dry • Full • Fruity •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Mellasat Vineyards</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

        <div class="card card-item rounded-2" style="width: 18rem;">

          <div class="img-container">
            <img class="card-img-top" src="https://images.wine.co.za/GetWineImage.ashx?ImageSize=medium&IMAGEID=256907" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Kleine Zalze Methode Cap Classique Brut NV</h5>
            <p class="card-text">An appealing light straw colour. Light with lovely ripe, attractive rounded fruit. Fresh floral nose and an exciting acid balance.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cap_Classique • Off Dry •</li>
            <!-- <li class="list-group-item">60% Pinot Noir, 40% Chardonnay Alc: 12.10  RS: 8.4  pH: 3.05  TA: 6.3</li> -->
            <!-- <li class="list-group-item"><i class = "fas fa-map-marker-alt"></i>Robertson</li> -->
            <li class="list-group-item"><i class="fa fa-home "></i> Kleine Zalze Wines</li>
            <!-- <li class="list-group-item"><i class="fa fa-cutlery "></i> Salads and seafood.</li> -->
          </ul>
        </div>

    </nav>

    <!-- --------------------------------End-Wines------------------------------ -->

    <?php include "../Components/Footer.php";?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify18QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>