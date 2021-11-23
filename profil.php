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
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
      <a class="navbar-brand" href="weather_user.php">
      <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block">Today's Weather!</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
     
            <li class="nav-item">
              <a class="nav-link text-white" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <form class="formulary" id='formProfile' name='profil'> <!-- get ne masque pas le mot de passe -->
     <p class="text-white fs-2">PROFIL</p>
            <label class="text-white" for="firstName">First Name <span id='firstname' class='fas fa-edit'></span></label> <br>
            <input type="text" class='firstname' name="firstname" placeholder="First Name"><br><br>
            <label class="text-white" for="lastName">Last Name <span id='lastname' class='fas fa-edit'></span></label> <br>
            <input type="text" name="lastname"  class='lastname' placeholder="Last name"><br><br>
            <label class="text-black" for="username">Username <span id='username' class='fas fa-edit'></span></label> <br>
            <input type="text" name="username" class='username' placeholder="Username"><br><br>
            <!-- <label class="text-black" for="password">Password <span id='password' class='fas fa-user-edit'></span></label> <br> -->
            <!-- <input type="password" name="password" placeholder="Password"><br><br>  -->
    </form>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
    <script type="module" src="profil.js"></script>
    </body>
</html>