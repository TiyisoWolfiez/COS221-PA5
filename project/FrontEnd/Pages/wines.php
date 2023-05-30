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
    <!-- ----------------------------Filter Tab------------------------------------- -->
    <nav style="height: 70px;"></nav><!--buffer for navbar-->
    <nav style="height: 60px;">
      <div class="ms-auto align-items-center d-flex filter-tab" style="height: 60px;">
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-filter pe-2"></i>filters
        </div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">Red</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">Bone Dry</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">White</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">Sparkling</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">Bordeaux</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons">Champagne</div>
      </div>
    </nav>
    <!-- ----------------------------Tab END --------------------------------------- -->

    <!-- ------------------------------Beginning-Wines------------------------------- -->

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
    <!-- </a> -->


    <!-- --------------------------------End-Wines------------------------------ -->
    <div class="modal fade modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Filter Wines</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h6 class="text-dark">Sort by price ranges:</h6>
            <label for="customRange1" class="form-label text-dark">Min price for wines sold at winery: $2000</label>
            <input type="range" class="form-range" id="customRange2">
            <label for="customRange1" class="form-label text-dark">Max price for wines sold at winery: $5000</label>
            <input type="range" class="form-range" id="customRange1">

            <h6 class="text-dark">Sort by rating:</h6>
            <!-- <label for="customRange2" class="form-label">Rating</label> -->
            <input type="range" class="form-range" min="0" max="5" id="customRange2">

            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Varietal</option>
              <option value="1">Chardonnay</option>
              <option value="2">Cabernet Sauvignon</option>
            </select>
            <br>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Color</option>
              <option value="1">Red</option>
              <option value="2">White</option>
              <option value="3">Rosé</option>
            </select>
            <br>

            <div class="filter-modal-buffer"></div>
            <h6 class="text-dark">Carbonation:</h6>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label text-dark" for="inlineCheckbox1">Sparkling</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label text-dark" for="inlineCheckbox2">Semi-sparkling</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Still</label>
            </div>
            <br>
            <br>

            <div class="filter-modal-buffer"></div>
            <h6 class="text-dark">Sweetness:</h6>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label text-dark" for="inlineCheckbox1">All</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label text-dark" for="inlineCheckbox2">Bone Dry</label>
            </div>


            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Dry</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Medium/Off Dry</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Medium Sweet</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Dessert Sweetness</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Very Sweet</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Intensely Sweet</label>
            </div>
            <br>
            <br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Country</option>
              <option value="1">Italy</option>
              <option value="2">South Africa</option>
              <option value="3">France</option>
              <option value="4">Germany</option>
              <option value="5">Spain</option>
              <option value="6">Portugal</option>
              <option value="7">Russia</option>
              <option value="8">Turkey</option>
            </select>

            <br>
            <div class="filter-modal-buffer"></div>
            <br>
            <h6 class="text-dark enteredLocation">Enter a country of Wine's origin :</h6>
            <input type="text" class="form-control" id="enteredLocation" placeholder="Enter country here">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn" style="background-color: var(--app-theme-col);">Update filters</button>
          </div>
        </div>
      </div>
    </div>

    <?php include "../Components/Footer.php";?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify18QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>