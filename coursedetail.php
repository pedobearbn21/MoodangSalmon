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
    <title>Document</title>
</head>
<body>
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
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="addc.php">Add CourseToSTD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="payment.php">Payment</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="coursedetail.php">Coursedetail</a>
                </li>
              </ul>
            </div>
    </nav>
                </nav>
    </div>
        <div>
          <table class="table" style="margin-bottom : 0px;">
                            <thead class="thead-dark">
                                <tr>
                                    <th><center>
                                        <h4>Profile</h4>
                                    </center></th>
                                </tr>
                            </thead>
          </table>
          <?php
          if (1 == 1){
                include_once('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                $query = "SELECT * FROM course ORDER BY id asc" or die("Error:" . mysqli_error()); 

                $result = mysqli_query($conn, $query); 
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
                while($row = mysqli_fetch_array($result)) { 
                echo "<tr>";
                echo "<th scope = 'row'> </th>";
                echo "<td>" .$row["id"] .  "</td> "; 
                echo "<td>" .$row["cname"] .  "</td> ";  
                echo "<td>" .$row["ds"] .  "</td> ";
                echo "<td>" .$row["cost"] .  "</td> ";
                echo "</tr>";}
                echo "</tbody>
              </table>";

            }
            ?>
        </div>
</body>
</html>