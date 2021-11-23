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
<form method="POST" action="log.php" class="formulary">
<p class="text-white fs-2">LOGIN</p>
							<label for="username" class="text-white">Username:</label><br>
							<input type="text" name="username" placeholder="your username"><br><br>
							<label for="password" class="text-black"> Password</label> <br>
							<input type="password" name="password" placeholder="password"><br><br>
						    <input class="btn btn-success" type="submit" name="Login" value="Login">
</form>

						<h1><b> If you don't have an account, <a href="register.php"> register here</a></b></h1> 
						 <?php
							if (isset($_GET['info']) && $_GET['info']=='wrong')
							{
								echo '<p style="text-align:center; color:red;"> username or password is not good. </p>';
							} else if (isset($_GET['info']) && $_GET['info']=='empty')
							{
								echo '<p style="text-align:center; color:red;"> nu ati introdus toate valorile</p>';
							} else if (isset($_GET['info']) && $_GET['info']=='userdoesntexist')
							{
								echo '<p style="text-align:center; color:red;"> username does not exist.</p>';
							}
              else if (isset($_GET['info']) && $_GET['info']=='ok')
							{
								echo '<p style="text-align:center; color:red;">ok</p>';
							}
						?>	
</body>
</html>