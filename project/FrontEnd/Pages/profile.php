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
    <?php include "../Components/Navbar.php";?>
    <nav class="main-admin-container">
      <nav class="at-a-glance-cards">
        <div class="card at-a-glance-card">
          <div class="card-body">
            <h5 class="card-title">Name</h5>
            <div class="card-icon-and-count">
              <i class="fa-solid fa-person pe-3" style="font-size: 1.5rem;"></i>
              <h2 class="card-text">John Doe</h2>
            </div>
          </div>
        </div>
        <div class="card at-a-glance-card">
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
              <div class="card-settings">
                <i class="fa-solid fa-user-minus pe-1" style="font-size: 1rem;"></i>
                <h6 class="card-text">delete account</h6>
              </div>
              <div class="card-settings">
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
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ex, tempor eget est eget, vestibulum tincidunt enim. Nam maximus condimentum vestibulum. Ut eu tellus eu dolor mollis ornare tempor finibus mi. Cras vulputate nunc imperdiet magna porta, nec lacinia nibh vulputate. Proin ut tellus pretium, molestie nulla bibendum, bibendum est. Suspendisse ornare, massa eu blandit eleifend, ante nulla varius massa, tempor auctor odio ligula ullamcorper leo. Nullam sed dui vel lorem lobortis tincidunt. Praesent tincidunt ex nisl, sit amet vehicula magna consequat in. Aliquam sed erat at mauris pulvinar sollicitudin non vitae justo. Vivamus aliquet nisl enim, sit amet vehicula neque suscipit a.</td>
                <td>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-user-pen action-btn"></i>
                </th>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ex, tempor eget est eget, vestibulum tincidunt enim. Nam maximus condimentum vestibulum. Ut eu tellus eu dolor mollis ornare tempor finibus mi. Cras vulputate nunc imperdiet magna porta, nec lacinia nibh vulputate. Proin ut tellus pretium, molestie nulla bibendum, bibendum est. Suspendisse ornare, massa eu blandit eleifend, ante nulla varius massa, tempor auctor odio ligula ullamcorper leo. Nullam sed dui vel lorem lobortis tincidunt. Praesent tincidunt ex nisl, sit amet vehicula magna consequat in. Aliquam sed erat at mauris pulvinar sollicitudin non vitae justo. Vivamus aliquet nisl enim, sit amet vehicula neque suscipit a.</td>
                <td>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-user-pen action-btn"></i>
                </th>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ex, tempor eget est eget, vestibulum tincidunt enim. Nam maximus condimentum vestibulum. Ut eu tellus eu dolor mollis ornare tempor finibus mi. Cras vulputate nunc imperdiet magna porta, nec lacinia nibh vulputate. Proin ut tellus pretium, molestie nulla bibendum, bibendum est. Suspendisse ornare, massa eu blandit eleifend, ante nulla varius massa, tempor auctor odio ligula ullamcorper leo. Nullam sed dui vel lorem lobortis tincidunt. Praesent tincidunt ex nisl, sit amet vehicula magna consequat in. Aliquam sed erat at mauris pulvinar sollicitudin non vitae justo. Vivamus aliquet nisl enim, sit amet vehicula neque suscipit a.</td>
                <td>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-user-pen action-btn"></i>
                </th>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ex, tempor eget est eget, vestibulum tincidunt enim. Nam maximus condimentum vestibulum. Ut eu tellus eu dolor mollis ornare tempor finibus mi. Cras vulputate nunc imperdiet magna porta, nec lacinia nibh vulputate. Proin ut tellus pretium, molestie nulla bibendum, bibendum est. Suspendisse ornare, massa eu blandit eleifend, ante nulla varius massa, tempor auctor odio ligula ullamcorper leo. Nullam sed dui vel lorem lobortis tincidunt. Praesent tincidunt ex nisl, sit amet vehicula magna consequat in. Aliquam sed erat at mauris pulvinar sollicitudin non vitae justo. Vivamus aliquet nisl enim, sit amet vehicula neque suscipit a.</td>
                <td>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-user-pen action-btn"></i>
                </th>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ex, tempor eget est eget, vestibulum tincidunt enim. Nam maximus condimentum vestibulum. Ut eu tellus eu dolor mollis ornare tempor finibus mi. Cras vulputate nunc imperdiet magna porta, nec lacinia nibh vulputate. Proin ut tellus pretium, molestie nulla bibendum, bibendum est. Suspendisse ornare, massa eu blandit eleifend, ante nulla varius massa, tempor auctor odio ligula ullamcorper leo. Nullam sed dui vel lorem lobortis tincidunt. Praesent tincidunt ex nisl, sit amet vehicula magna consequat in. Aliquam sed erat at mauris pulvinar sollicitudin non vitae justo. Vivamus aliquet nisl enim, sit amet vehicula neque suscipit a.</td>
                <td>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-user-pen action-btn"></i>
                </th>
                <th scope="row action-btns">
                  <i class="fa-solid fa-trash action-btn"></i>
                </th>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit ex, tempor eget est eget, vestibulum tincidunt enim. Nam maximus condimentum vestibulum. Ut eu tellus eu dolor mollis ornare tempor finibus mi. Cras vulputate nunc imperdiet magna porta, nec lacinia nibh vulputate. Proin ut tellus pretium, molestie nulla bibendum, bibendum est. Suspendisse ornare, massa eu blandit eleifend, ante nulla varius massa, tempor auctor odio ligula ullamcorper leo. Nullam sed dui vel lorem lobortis tincidunt. Praesent tincidunt ex nisl, sit amet vehicula magna consequat in. Aliquam sed erat at mauris pulvinar sollicitudin non vitae justo. Vivamus aliquet nisl enim, sit amet vehicula neque suscipit a.</td>
                <td>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </td>
                <th scope="row action-btns">
                  <i class="fa-solid fa-user-pen action-btn"></i>
                </th>
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