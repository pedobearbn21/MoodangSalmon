<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="page.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
    session_start();
    include_once('connect.php');
    if(isset($_POST['submit'])){
        $id =   $conn->real_escape_string($_POST['id']);
        $name =   $_POST['cname'];
        $ds =  $_POST['ds'];
        $cost = $conn->real_escape_string($_POST['cost']);
        $sql = "INSERT INTO course (id, cname, ds,cost)
        VALUES ('$id', '$name', '$ds','$cost')";
        if (mysqli_query($conn, $sql)) {  
        }
        }
    
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
                <li class="nav-item">
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
    <div class="container">
        <div class="row">
                <div class="col" style="margin-top : 30px;">
                  <form method="POST" action="">
                    <div class="form-icons">
                      <h4>Register for Class</h4>
                  
                      <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-user"></i>
                        </span>
                        <input class="input-group-field" type="text" placeholder="Class Name" name = "cname">
                      </div>
                  
                      <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <input class="input-group-field" type="text" placeholder="Description" name = "ds">
                      </div>
                      <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <input class="input-group-field" type="number" placeholder="ID Course" name = "id">
                      </div>
                      <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <input class="input-group-field" type="number" placeholder="Cost" name = "cost" >
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name = 'submit'>Add Class Here!</button>
                  </form>
                </div>
        </div>
        
    </div>
</body>
</html>