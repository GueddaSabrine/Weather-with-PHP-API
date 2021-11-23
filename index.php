<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <link rel="stylesheet" href="weather.css">

    <title>Weather</title>
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

    <div class="container cardweather">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mt-5 p-5 rounded">
          <h1 id="w-location"></h1>
          <h3 class="text-white" id="w-desc"></h3>
          <h3 id="w-string"></h3>
          <img id="w-icon" />
          <ul id="w-details" class="bg-transparent list-group mt-3 text-black fs-2 fw-bold fst-italic text-white">
            <li class="bg-transparent list-group-item , fas fa-tint fs-3 text-white fw-bold" id="w-humidity" id="w-humidity"></li>
            <li class="bg-transparent list-group-item , fas fa-thermometer-half fs-3 text-black fw-bold" id="w-feels-like"></li>
            <li class="bg-transparent list-group-item , fas fa-wind fs-3 text-danger fw-bold" id="w-wind"></li>
          </ul>
          <hr />
          <button
            type="button"
            class="btn btn-success"
            data-toggle="modal"
            data-target="#locModal"
          >
            Change Location
          </button>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="locModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="locModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="locModalLabel">Choose Location</h5>
            <button
              type="button"
              class="Close btn btn-danger"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="w-form">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" class="form-control" name="city" />
              </div>
              <!-- <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" class="form-control" />
              </div> -->
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >
              Close
            </button>
            <button id="w-change-btn" type="button" class="btn btn-success">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>
    

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
    <script type="module" src="app.js"></script>
  </body>
</html>
