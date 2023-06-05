<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/admin.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Admin</title>
</head>
<body>
    <?php 
      include "../Components/Navbar.php";
      if(!isset($_SESSION['adminkey']))header("Location: index.php");
    ?>
    <nav class="main-admin-container">
      <nav class="at-a-glance-cards">
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total wineries</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-store pe-2" style="font-size: 1.5rem;"></i>
              <h2 class="card-text Total-wineries">0</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total wines</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-wine-glass pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text Total-wines">0</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total tourists</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-person pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text Total-tourists">0</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total managers</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-people-roof pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text Total-managers">0</h2>
            </div>
          </div>
        </div>
      </nav>
      <nav class="list-of-various-elements">
        <nav class="navigation-tabs-for-list">
          <div class="btn btn-primary btns-click" onmouseup="viewWineries()">view wineries</div>
          <div class="btn btn-primary btns-click" onmouseup="viewManagers()">view managers wineries</div>
          <div class="btn btn-primary btns-click" data-bs-toggle="modal" data-bs-target="#addwinery">Add winery</div>
        </nav>
        <nav class="container-of-data list-group">
          <table class="table mb-3">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Winery Name</th>
                <th scope="col">link</th>
                <th scope="col invisible-row-col">#</th>
              </tr>
            </thead>
            <tbody class=""></tbody>
          </table>
          <button class="btn btn-primary btns-click" style="width: 150px; margin-left: auto; margin-right: auto;" onmouseup="loadMoreData()">Load More</button>
        </nav>
      </nav>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="addwinery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Add new winery</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="winery-name-input" class="form-label text-dark">Winery name</label>
              <input type="text" class="form-control" id="winery-name-input">
            </div>
            <div class="mb-3">
              <label for="winery-imageurl-input" class="form-label text-dark">Winery image url</label>
              <input type="text" class="form-control" id="winery-imageurl-input">
            </div>
            <div class="mb-3">
              <label for="winery-websiteurl-input" class="form-label text-dark">Winery website url</label>
              <input type="text" class="form-control" id="winery-websiteurl-input">
            </div>
            <div class="mb-3">
              <label for="winery-location-input" class="form-label text-dark">Winery location address</label>
              <input type="text" class="form-control" id="winery-location-input">
            </div>
            <div class="mb-3">
              <label for="winery-country-input" class="form-label text-dark">Country of winery</label>
              <input type="text" class="form-control" id="winery-country-input">
            </div>
            <div class="mb-3">
              <label for="winery-region-input" class="form-label text-dark">Region of winery</label>
              <input type="text" class="form-control" id="winery-region-input">
            </div>
            <div class="mb-3 input-group">
              <span class="input-group-text text-dark">Longitude and latitude</span>
              <input type="text" aria-label="longitude" class="form-control" id="longitude">
              <input type="text" aria-label="latitude" class="form-control"  id="latitude">
            </div>
            <div class="mb-3">
              <label for="winery-managerid-input" class="form-label text-dark">Winery manager id</label>
              <input type="text" class="form-control" id="winery-managerid-input">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="winery-isVerified-input">
              <label class="form-check-label text-dark" for="winery-isVerified-input">is a verified winery</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control text-dark" placeholder="Winery description" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2 text-dark">Winery description</label>
            </div>
            <div class="form-error-container mb-3">
              <label for="text-danger" class="text-danger"></label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btns-click-gray" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btns-click" style="background-color: var(--app-theme-col);" onmouseup="addWinery()" data-bs-dismiss="modal">Create new winery</button>
          </div>
        </div>
      </div>
    </div>
  
    <!-- delete confirm -->
        <!-- Modal -->
    <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Confirm deletion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="text-dark" class="text-dark">Are you sure you want to delete this winery</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btns-click-gray" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary btns-click" style="background-color: var(--app-theme-col);" onmouseup="deleteWinery()" data-bs-dismiss="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  
  <script src="../Client/admin.js"></script>
</body>
</html>