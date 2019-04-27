<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="oop.js" type="text/javascript"></script>
    <link href="page.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>profile</title>
</head>
<body>

<?php
session_start();
include_once('connect.php');
?>
        <div>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="addcourse.php">AddCourse For Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="page.php">Add Student</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="addc.php">Add CourseToSTD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="payment.php">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="coursedetail.php">Coursedetail</a>
                </li>
              </ul>
            </div>
    </nav>
                </nav>
    </div>
    <form method='POST' action=''>  
    <div class="container">
    <div >
        <table class="table" style="margin-bottom : 0px;">
            <thead class="thead-dark">
                <tr>
                    <th><center>
                        <h4>Profile</h4>
                    </center></th>
                </tr>
            </thead>
        </table>
    </div>

    <div>
      <div class="card-profile-stats">
        <div class="card-profile-stats-intro">
          <img class="card-profile-stats-intro-pic" src="https://pbs.twimg.com/profile_images/732634911761260544/OxHbNdTF.jpg" alt="profile-image" />
          <div class="card-profile-stats-intro-content">
            <h3> Name :<?php echo $_SESSION['name']; ?></h3>
            <p> ID :<?php echo $_SESSION['id']; ?></small></p>
            
            </div>
          </div> <!-- /.card-profile-stats-intro-content -->
          </div>
        </div> <!-- /.card-profile-stats-intro -->
      
        <hr />
      
        <div class="card-profile-stats-container" >
          <div class="card-profile-stats-statistic">
            <b><span class="stat" style='font : bold;'>Age :     <?php echo $_SESSION['age']; ?></span></b>
          </div> <!-- /.card-profile-stats-statistic -->
          <div class="card-profile-stats-statistic">
            <b><span class="stat">Tel :     <?php echo $_SESSION['tel']; ?></span></b>
          </div> <!-- /.card-profile-stats-statistic -->
          <div class="card-profile-stats-statistic">
            <b><span class="stat">Date :     <?php echo $_SESSION['date']; ?></span></b>
          </div> <!-- /.card-profile-stats-statistic -->
        </div> <!-- /.card-profile-stats-container -->
        <hr />
      
        <div class="card-profile-stats-more">
        <p><b>Course</b></p>
            <b><p>
            <?php 
            if ($_SESSION["cal"] == 1) {
              echo "<table class='table'>";
              echo "<thead class='thead-dark'>
              <tr>
                  <th scope='col'>#</th>
                  <th scope='col'>Course ID</th>
                  <th scope='col'>Course Name</th>
                  <th scope='col'>Desciption</th>
                  <th scope='col'>Cost</th>
              </tr>
            </thead>
            <tbody>";
            $sum = 0;
            foreach($_SESSION['course'] as $value) {
              $query = "SELECT * FROM course WHERE  cname = '$value' ";
              $result = mysqli_query($conn, $query); 
              $row = mysqli_fetch_assoc($result);
              echo "<tr>";
              echo "<th scope = 'row'> </th>";
              echo "<td>" .$row["id"]."</td>"; 
              echo "<td>" .$value.  "</td> ";
              echo "<td>" .$row["ds"] .  "</td> ";
              echo "<td>" .$row["cost"].  "</td> ";  
              $sum = $sum + $row["cost"];  
              echo "</tr>";}
              echo "</tbody>
            </table>";
          }
             ?>
            </p>
            <p> 
              Cost :
              <?php 
              echo $_SESSION['cost']; 
              session_write_close();
            
              ?>
            </p></b>
            <button class="btn btn-secondary btn-lg btn-block" onclick="location.href='addc.php'" type="button">Add Course</button>

            
        </div> <!-- /.card-profile-stats-more -->
      </div> <!-- /.card-profile-stats -->
      
      
      
      
    </div>
  </div>
  </form>

</body>
</html>








          