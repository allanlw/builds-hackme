<?php
error_reporting(E_ALL);
if (!isset($_COOKIE['user']) || empty($_COOKIE['user'])) {
  setcookie("user", "unknown");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Builds.Hack.Me - Hidden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="service" href="/info.xml">
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">Builds.Hack.Me</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about.php">About</a></li>
              <li><a href="/walled_garden.php">Walled Garden</a></li>
              <li class="active"><a href="/hidden.html">Hidden</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
<?php
if ($_COOKIE['user'] != 'admin') {
?>
    <h1>Who are you? Go away</h1>
    <p>You aren't "admin"</p>
<?php
} else {
?>
    <h1>Welcome Admin</h1>
    <p>Here are your ssh credentials in case you forgot:</p>
<iframe width="560" height="315" src="//www.youtube.com/embed/i8u6EodZseg?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
    <p>KEY{HackThePlanet}</p>
    <p>By the way <a href="/hardstuff.zip">here are the files</a> you asked me to hold on to for you.</p>
<?php
}
?>
  </body>
</html>
