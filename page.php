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
<?php
    session_start();
    include_once('connect.php');
    if(isset($_POST['submit'])){
        $id =   $conn->real_escape_string($_POST['ID']);
        $Name =   $_POST['Name'];
        $tel =  $conn->real_escape_string($_POST['Tel']);
        $age =  $conn->real_escape_string($_POST['age']);
        $date =  $conn->real_escape_string($_POST['date']);
        $sql = "INSERT INTO member (id, name, tel,age,date)
        VALUES ('$id', '$Name', '$tel','$age','$date')";
        if (mysqli_query($conn, $sql)) {  
        $_SESSION['id']   = $id;
        $_SESSION['name']  = $Name;
        $_SESSION['age']  = $tel;
        $_SESSION['tel']  = $age;
        $_SESSION['course']  = '';
        $_SESSION['cost'] = 0;
        $_SESSION['date'] = $date;
        $_SESSION["cal"] = 0;
        header('location:profile.php');
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
                <li class="nav-item active">
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
                  <h4>Add Member(Student)</h4>
              
                  <div class="input-group">
                    <span class="input-group-label">
                      <i class="fa fa-user"></i>
                    </span>
                    <input class="input-group-field" type="number" name="ID" placeholder="ID">
                  </div>
              
                  <div class="input-group">
                    <span class="input-group-label">
                      <i class="fa fa-user"></i>
                    </span>
                    <input class="input-group-field" type="text" name="Name" placeholder="Name">
                  </div>
                  <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-user"></i>
                        </span>
                        <input class="input-group-field" type="number" name="Tel" placeholder="Tel">
                  </div>
                  <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-user"></i>
                        </span>
                        <input class="input-group-field" type="number" name="age" placeholder="age">
                  </div>
                  <div class="input-group">
                        <span class="input-group-label">
                          <i class="fa fa-user"></i>
                        </span>
                        <input class="input-group-field" type="text" name="date" placeholder="Date Range(YYYY/MM/DD -- YYYY/MM/DD)">
                  </div>
                </div>
                <button type="submit" class="btn btn-secondary btn-lg btn-block" name='submit'>Add Member(Student)</button>
                </form>
            <div>
    </div>
    </div>
    
</body>
</html>