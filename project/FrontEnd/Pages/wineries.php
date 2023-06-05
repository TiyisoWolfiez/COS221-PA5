<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/wineries.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Wineries</title>
</head>
<body>
    <?php 
    include "../Components/Navbar.php";
    if(isset($_SESSION['adminkey']))header("Location: admin.php");
    ?>
    <nav style="height: 70px;"></nav><!--buffer for navbar-->
    <nav style="height: 60px;">
      <div class="ms-auto align-items-center d-flex filter-tab" style="height: 60px;">
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-filter pe-2"></i>filters
        </div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" onmouseup="getAllLocations()">All locations</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt1">Cape Town</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons"id="opt2">Port Elizabeth</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt3">Durban</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt4">Johannesburg</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt5">Pretoria</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt6">East London</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt7">Pietermaritzburg</div>
        <div class="ms-3 btn btn-light btn-rounded rounded-4 border border-dark-subtle filter-buttons" id="opt8">Bloemfontein</div>
      </div>
    </nav>
    <nav class="website-container overflow-y-auto  mb-3 pt-3 pb-3"></nav>

    <!-- filter tab -->
    <div class="modal fade modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Filter wineries</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="filter-modal-buffer"></div>
            <h6 class="text-dark">Locations</h6>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label text-dark" for="inlineCheckbox1">All</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label text-dark" for="inlineCheckbox2">Cape Town</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Port Elizabeth</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Durban</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Johannesburg</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Pretoria</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
              <label class="form-check-label text-dark" for="inlineCheckbox3">East London</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Pietermaritzburg</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
              <label class="form-check-label text-dark" for="inlineCheckbox3">Bloemfontein</label>
            </div>
            <div class="filter-modal-buffer"></div>
            <h6 class="text-dark enteredLocation">Enter a location in South Africa</h6>
            <input type="text" class="form-control" id="enteredLocation" placeholder="Enter location here">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btns-click-gray" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btns-click" style="background-color: var(--app-theme-col);">Update filters</button>
          </div>
        </div>
      </div>
    </div>
    <!-- filter tab -->
    <?php include "../Components/Footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="../Client/wineries.js"></script>
</body>
</html>