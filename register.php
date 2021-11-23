<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <link rel="stylesheet" href="weather.css">
    <title>Register</title>
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
      <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block">Today's Weather!</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="register.php">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div>
     <form action="registerDb.php" method="POST" class="formulary"> <!-- get ne masque pas le mot de passe -->
     <p class="text-white fs-2">REGISTER</p>
            <label class="text-white" for="firstName">First Name</label> <br>
            <input type="text" name="firstname" placeholder="First Name"><br><br>
            <label class="text-white" for="lastName">Last Name</label> <br>
            <input type="text" name="lastname" placeholder="Last name"><br><br>
            <label class="text-black" for="username">Username</label> <br>
            <input type="text" name="username" placeholder="Username"><br><br>
            <label class="text-black" for="password">Password</label> <br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <label class="text-black" for="password">Confirm Password</label> <br>
            <input type="password" name="password2" placeholder="Password"><br><br>
            <input class="btn btn-success" type="submit" name="Login" value="Login"> <br>    
            <br>
    </form>
    
          <?php
            // if ( isset($_GET['info'])&& $_GET['info']=='ok'){
            // echo '<p style="text-align:center;color:green;"> The account has been created.</p>';
            // }
            // else 
            if(isset($_GET['info']) && $_GET['info']=='error')
            {
            echo '<p style="text-align:center;color:red;"> An error has appeared.</p>';
            } else if(isset($_GET['info']) && $_GET['info']=='exists')
            {
            echo '<p style="text-align:center;"> Username already exist. </p>';
            }
            else if(isset($_GET['info']) && $_GET['info']=='errorPassword')
            {
            echo '<p style="text-align:center;"> Password it\'s not the same. </p>';
            }
            ?>
    </div>
 </div>        

</body>
</html>