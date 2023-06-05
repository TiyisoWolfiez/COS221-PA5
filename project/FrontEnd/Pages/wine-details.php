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
    <link rel="stylesheet" href="../Styles/profile.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css"> -->
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

    <div id="add_wine" style="margin-bottom: 40px">
    </div>
    <nav class="list-of-various-elements">
        <nav class="container-of-data list-group">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Review description</th>
                <th scope="col">Stars</th>
                <th scope="col">Reviewer</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </nav>
      </nav>
    </nav>
    <!-- --------------------------------End-Wine-Details------------------------------ -->

    <?php include "../Components/Footer.php";?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify18QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-xxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous"></script> -->
  <script src="../Client/wine-details.js" type="text/javascript"></script>
  <!-- <script src="../Client/wineries.js"></script> -->
</body>
</html>