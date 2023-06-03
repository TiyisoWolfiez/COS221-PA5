<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/profile.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Profile</title>
</head>
<body>
    <?php 
      include "../Components/Navbar.php";
      if(!isset($_SESSION['username']))header("Location: index.php");
      if(isset($_SESSION['adminkey']))header("Location: admin.php");
    ?>
    <nav class="main-admin-container">
      <nav class="at-a-glance-cards">
        <div class="card at-a-glance-card" data-bs-toggle="modal" data-bs-target="#changeUsername">
          <div class="card-body">
            <h5 class="card-title">Name</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-person pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">
                <?php if(isset($_SESSION['username']))echo $_SESSION['username'];
                      else echo '';
                ?>
              </h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card" data-bs-toggle="modal" data-bs-target="#changePassword">
          <div class="card-body">
            <h5 class="card-title">Password</h5>
            <div class="card-icon-and-count">
              <i class="fa-regular fa-eye-slash pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">**********</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total reviews by you</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-file-invoice pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">115870</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Other settings</h5>
            <div class="card-icon-and-count">
              <div class="card-settings" data-bs-toggle="modal" data-bs-target="#confirmDeleteAccount">
                <i class="fa-solid fa-user-minus pe-1" style="font-size: 1rem;"></i>
                <h6 class="card-text">delete account</h6>
              </div>
              <div class="card-settings" data-bs-toggle="modal" data-bs-target="#confirmLogout">
                <i class="fa-solid fa-arrow-right-from-bracket pe-1" style="font-size: 1rem;"></i>
                <h6 class="card-text">logout</h6>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <nav class="list-of-various-elements">
        <nav class="container-of-data list-group">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Review description</th>
                <th scope="col">Stars</th>
                <th scope="col invisible-row-col">#</th>
                <th scope="col invisible-row-col">#</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </nav>
      </nav>
    </nav>
  
    <!-- delete account confirm -->
      <!-- Modal -->
      <div class="modal fade" id="confirmDeleteAccount" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Confirm deletion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="text-dark" class="text-dark">Are you sure you want to delete your account</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" style="background-color: var(--app-theme-col);" onmouseup="deleteMyAccount()" data-bs-dismiss="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- username change -->
        <!-- Modal -->
        <div class="modal fade" id="changeUsername" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Change username</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="username-input" class="form-label text-dark">Enter your new username</label>
                <input type="text" class="form-control" id="username-input">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: var(--app-theme-col);" onmouseup="changeUserName()" data-bs-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- password change -->
        <!-- Modal -->
        <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Change Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                <label for="password-input" class="form-label text-dark">Enter your new password</label>
                <input type="password" class="form-control" id="password-input">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: var(--app-theme-col);" onmouseup="changePassword()" data-bs-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- edit review -->
        <!-- Modal -->
        <div class="modal fade" id="editReview" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Edit review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="form-floating mb-3">
                  <textarea class="form-control text-dark" placeholder="Winery description" id="reviewdescription" style="height: 100px"></textarea>
                  <label for="floatingTextarea2 text-dark">Review description</label>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" style="background-color: var(--app-theme-col);" onmouseup="editReview()" data-bs-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- delete review confirm -->
        <!-- Modal -->
        <div class="modal fade" id="confirmDeleteReview" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Confirm deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label for="text-dark" class="text-dark">Are you sure you want to delete this review</label>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" style="background-color: var(--app-theme-col);" onmouseup="deleteReview()" data-bs-dismiss="modal">Yes</button>
              </div>
            </div>
          </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="../Client/profile.js"></script>
</body>
</html>