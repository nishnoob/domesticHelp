<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <!--NAVBAR-->
    <div class="head-plank text-center">
      <div class="row">
        <span class="col-md-4 col-md-offset-4">
          <a class="navtext" href="index.html">HOUSEHOLD HELP</a>
        </span>
        <span class="col-md-1 col-md-offset-3">
          <a class="navtext" href="index.html">Admin</a>
        </span>
      </div>
    </div>
    
    <!--TYPE-->
    <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-lg selected">All</button>
      <button type="button" class="btn btn-lg">Maid</button>
      <button type="button" class="btn btn-lg">Carpenter</button>
      <button type="button" class="btn btn-lg">Electrician</button>
    </div>
    <div class="container jumb">
      <div class="jumbotron">
      
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "pass";
          $dbname = "mine";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          else
            echo "Connected successfully";

          $sql = "SELECT * from domHelp";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "id: " . $row["dhID"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
              }
          } else {
              echo "0 results";
          }
          $conn->close();
        ?>

      </div>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>