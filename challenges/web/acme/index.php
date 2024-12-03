<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="CMNatic">
    <title>ACKme DiagnoseIT</title>

    
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- Core libraries bootstrap & jquery -->
    <script src="./js/bootstrap5.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JS code -->
    <script src="./js/script.js"></script>

  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./img/icon.svg" alt="" width="52" height="32" class="d-inline-block align-text-top">ACKme IT Services</a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="#">Dashboard</a>
          <a class="nav-link" href="#">Help Desk</a>
          <a class="nav-link active" href="#">DiagnoseIT</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="highlight-clean">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">DiagnoseIT</h2>
                        <p class="text-center">Use this handy web application to test the availability of a device by entering it's <b>IP address</b> in the field below. For example, <b>127.0.0.1</b></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding-left: 30%; margin-top: -5%; width: 300px; display: inline-block;">
            <div class="input-group">
              <form action="index.php" method="get">

              <input class="form-control" type="text" placeholder="127.0.0.1" name="address"><button class="btn btn-primary" type="submit" style="padding-right: 30%; padding-left: 30%; width: 300px; display: inline-block;">Execute</button></form>
          </div>
        </div>
    </div>
</div>

  </body>
</html>

<?php
if (isset($_GET["address"])) {
    $command = $_GET["address"];
    echo "<p><b>Here is your command: </b>$command</p>";

    echo "<p><b>Output: </b>$result</p>";

    $result = passthru("/bin/ping -c 4 ".$_GET["address"]);

}

?>
