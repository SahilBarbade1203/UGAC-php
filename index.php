<?php
require_once "pdo.php";
if (isset($_POST["first"]) && isset($_POST["last"]) && isset($_POST["rollnumber"]) && isset($_POST["department"]) && isset($_POST["hostel"])) {
  $sql = "INSERT INTO INFO (Rollnumber ,Firstname , Lastname ,Department , Hostel) VALUES (:rollnumber ,:first , :last , :department , :hostel)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ":rollnumber" => $_POST["rollnumber"],
    ":first" => $_POST["first"],
    ":last" => $_POST["last"],
    ":department" => $_POST["department"],
    ":hostel" => $_POST["hostel"]
  ));
}
?>

<?php
if (isset($_POST["delete"]) && isset($_POST["user_id"])) {
  $sql = "DELETE FROM INFO WHERE user_id = :zip";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':zip' => $_POST["user_id"]));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Info</title>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="/Users/sahilbarbade/Downloads/okk/ugac.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="shadow-lg navbar navbar-expand-lg navbar-light bg-light sticky-top" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <table>
          <tr>
            <td><img src="ugac.png" alt="UGAC" width="120" height="100" class="d-inline-block align-text-top"></td>
            <td style="padding-left: 40px;"><span class="navbar-text"><em><b><i> Student Information Portal</i></b></em></span></td>
          </tr>
        </table>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Student Database</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#block_1">Add Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#block_2">View</a>
            </li>
          </ul>
          <form class="d-flex mt-3 mt-lg-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 650px; background-image:url(1507098576phpIeW02o.jpeg) ; background-size: cover;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Sign Up</h1>
            <p>Update your information with latest credentials</p>
            <p><a class="btn btn-lg btn-primary" href="#block_1">Sign Up</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="height: 650px; background-image: url(infinity2.jpg);background-size: cover;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Browse</h1>
            <p>Check out the current student database.</p>
            <p><a class="btn btn-lg btn-primary" href="#block_2">View</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="height:650px ; background-image: url(1507098550phptQ33Ej.jpeg);background-size: cover;">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Update</h1>
            <p>Delete your expired credentials for better view.</p>
            <p><a class="btn btn-lg btn-primary" href="#block_2">Delete</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section id="block_1">
    <div class="b-example-divider" style="height: 100px;"></div>
  </section>
  <div class="container my-5" style="height: 650px;">
    <div class="shadow-lg p-5 bg-body-tertiary rounded-3" style="height: 636px;">
      <div class="alert alert-dark" role="alert">
        <h1 class="text-center display-6"><b> Plug In Your Credentials</b></h1>
      </div>
      <form method="post">
        <div class="row">
          <div class="mb-3 col">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="first" aria-describedby="emailHelp" placeholder="John">
          </div>
          <div class="mb-3 col">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="last" placeholder="Smith">
          </div>
        </div>
        <div class="mb-3 col">
          <label for="Rollnumber" class="form-label">Roll Number</label>
          <input type="number" class="form-control" id="rollnumber" name="rollnumber" placeholder="e.g. 210040131">
        </div>
        <div class="mb-3 col">
          <label for="Department" class="form-label">Department</label>
          <select type="text" class="form-select" id="department" name="department" placeholder="Civil Department">
            <option value="1">Aerospace Department</option>
            <option value="2">Bioscience and Bioengineering Department</option>
            <option value="3">Chemical Department</option>
            <option value="4">Chemistry Department</option>
            <option value="5">Civil Department</option>
            <option value="6">Computer Science Department</option>
            <option value="7">Economics Department</option>
            <option value="8">Earth Science Department</option>
            <option value="9">Humanities and Social Science Department</option>
            <option value="11">Mathematics Department</option>
            <option value="12">Mechanical Department</option>
            <option value="13">Metallurgical Department</option>
            <option value="14">Physics Department</option>
          </select>
        </div>
        <div class="mb-3 col">
          <label for="Hostel" class="form-label">Hostel</label>
          <select type="text" class="form-select" id="hostel" name="hostel" placeholder="e.g. H1">
            <option value="1">H1</option>
            <option value="2">H2</option>
            <option value="3">H3</option>
            <option value="4">H4</option>
            <option value="5">H5</option>
            <option value="6">H6</option>
            <option value="7">H7</option>
            <option value="8">H8</option>
            <option value="9">H9</option>
            <option value="10">H10</option>
            <option value="11">H11</option>
            <option value="12">H12</option>
            <option value="13">H13</option>
            <option value="14">H14</option>
            <option value="15">H17</option>
            <option value="16">H18</option>
            <option value="17">Tansa</option>
          </select>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="check" name="checkbox">
          <label class="form-check-label" for="check">Agree to all permissions and conditions</label>
        </div>
        <button type="submit" class="w-100 btn btn-primary btn-lg;"><a class="btn btn-lg btn-primary" href="#block_2" value="Submit">Submit</a></button>
      </form>
    </div>
  </div>
  <section id="block_2">
    <div class="shadow-lg container my-5">
      <div class="p-5 text-center bg-body-tertiary rounded-3">
        <table class="table table-striped-columns align-middle ">
          <thead>
            <tr>
              <th>Roll Number</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Department</th>
              <th>Hostel</th>
            </tr>
          </thead>
          <?php
          $depar = array(
            "Aerospace Department", "Bioscience and Bioengineering Department", "Chemical Department", "Civil Department", "Computer Science Department
        Economics Department", "
        Earth Science Department", "
        Humanities and Social Science Department",
            "Mathematics Department",
            "Mechanical Department",
            "Metallurgical Department",
            "Physics Department"
          );
          $options = array("H1", "H2", "H3", "H1", "H4", "H5", "H6", "H7", "H8", "H9", "H10", "H11", "H12", "H13", "H14");
          $stmt = $pdo->query("SELECT user_id, Rollnumber ,Firstname , Lastname ,Department , Hostel FROM INFO");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>";
            echo ($row["Rollnumber"]);
            echo ("</td><td>");
            echo ($row["Firstname"]);
            echo ("</td><td>");
            echo ($row["Lastname"]);
            echo ("</td><td>");
            echo ($row["Department"]);
            echo ("</td><td>");
            echo $row["Hostel"];
            echo ("</td><td>");
            echo ("<table>");
            echo ("<tr><td>");
            echo ('<form method = "post"><input type="hidden" ');
            echo ('name = "user_id" value="' . $row['user_id'] . '">' . "\n");
            echo ('<input type = "submit" class="btn btn-outline-success rounded-pill" value="Delete" name="delete">');
            echo ("\n</form>\n");
            echo ("</td></tr>");
            echo ("<tr><td>");
            echo ("<p><a class='btn btn-warning rounded-pill' href='#block_1'>Create</a></p>");
            echo ("</td></tr>");
            echo ("</table>");
            echo ("</td></tr>");
          }
          ?>
        </table>
      </div>
    </div>
  </section>


</body>

</html>