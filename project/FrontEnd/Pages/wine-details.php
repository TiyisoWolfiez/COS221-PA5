<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/wine-details.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Wines</title>
</head>
<body>
    <?php
    include "../Components/Navbar.php";
    if(isset($_SESSION['adminkey']))header("Location: admin.php");
    ?>
    <!-- ----------------------------Filter Tab------------------------------------- -->
    <!-- ----------------------------Tab END --------------------------------------- -->

    <!-- ------------------------------Beginning-Wine-Details------------------------------- -->

    <div id="add_wine" style="margin-bottom: 20px">
    </div>
    <!-- --------------------------------End-Wine-Details------------------------------ -->


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
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify18QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-xxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous"></script> -->
  <script src="../Client/wine-details.js" type="text/javascript"></script>
</body>
</html>