<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="oop.js" type="text/javascript"></script>
    <link href="page.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="checkbox.css" type='text/css'>
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
                <li class="nav-item active">
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
    </nav>
        </div>
        <form method='POST' action=''>
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
                session_start();
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
                $a = array();
                $i=0;
                while($row = mysqli_fetch_array($result)) { 
                echo "<tr>";
                echo "<th scope = 'row'><input type='checkbox' name='ch[]' value=".$row['cname']." ></th>";
                echo "<td>" .$row["id"] .  "</td> "; 
                echo "<td>" .$row["cname"] .  "</td> ";  
                echo "<td>" .$row["ds"] .  "</td> ";
                echo "<td>" .$row["cost"] .  "</td> ";
                echo "</tr>";
                $a[$i] = $row["cname"];
                $i = $i+1;
            }
                echo "</tbody>
              </table>";
              echo "<table class='table' style='margin-bottom : 0px;'>
              <thead class='thead-dark'>
                  <tr>
                      <th><center>
                          <h4>Add Number of STudent</h4>
                          <input class='input-group-field' type='number' name='num' placeholder='num'>
                      </center></th>
                  </tr>
              </thead>
              </table>";
              echo "<button type='submit' class='btn btn-secondary btn-lg btn-block' name='submit'>Add Course</button>";

            if (isset($_POST['submit'])){
                $sd = 0;
                $n = $_POST['num'];
                $ar = array();
                for($s=0; $s < (count($_POST["ch"])); $s++)
                {  
                  foreach($a as $value){ 
                    if(($_POST["ch"][$s]) == $value){
                        $ar[$sd] = $value;
                        $sd = $sd+1;
                    }
                  }
                }
                $_SESSION['num'] = $n;
                $_SESSION['course'] = $ar;
            }
            
        }
            ?> 
    </div>
  </form>
</body>
</html>