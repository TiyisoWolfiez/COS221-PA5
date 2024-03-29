<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/manager.css">
    <script src="https://kit.fontawesome.com/d271141ba3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="../Assets/wine-glass-solid.svg" />
    <title>Winery SA | Manager</title>
</head>
<body>
    <?php 
      include "../Components/Navbar.php";
      if(!isset($_SESSION['managerkey']) || !isset($_SESSION['adminkey']))header("Location: index.php");
    ?>
    <nav class="main-admin-container">
      <nav class="at-a-glance-cards">
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total wineries</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-store pe-2" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">133150</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total wines</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-wine-glass pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">11350</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total tourists</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-person pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">115870</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Total managers</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-people-roof pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">54955</h2>
            </div>
          </div>
        </div>
      </nav>
      <nav class="list-of-various-elements">
        <nav class="navigation-tabs-for-list">
          <div class="btn btn-primary btns-click">view winery</div>
          <div class="btn btn-primary btns-click">view wine</div>
          <div class="btn btn-primary btns-click">view user</div>
          <div class="btn btn-primary btns-click">view managers</div>
          <div class="btn btn-primary btns-click">view admin</div>

          <div class="divider"></div>

          <div class="btn btn-primary btns-click">Add winery</div>
          <div class="btn btn-primary btns-click">Add wine</div>
          <div class="btn btn-primary btns-click">Add user</div>
          <div class="btn btn-primary btns-click">Add managers</div>
          <div class="btn btn-primary btns-click">Add admin</div>
        </nav>
        <nav class="container-of-data list-group">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Handle</th>
                <th scope="col invisible-row-col">#</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
          
            </tbody>
          </table>
        </nav>
      </nav>
    </nav>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>