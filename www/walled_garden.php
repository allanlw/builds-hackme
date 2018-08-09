<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Builds.Hack.Me - About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
              <li class="active"><a href="/walled_garden.php">Walled Garden</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <h1>Walled Garden</h1>
<p>Solve 1024 captchas to get a reward.</p>
<form action="/walled_garden.php" method="get">
<?php
if (!isset($_GET['name']) || empty($_GET['name'])) { ?>
  <p>Enter your name to get started:</p>
  <p><input type="text" name="name"></p>
<?php
} else {
$name = $_GET['name'];
?>
  <p>Name:</p>
  <p><input type="text" name="name" value="<?=$name?>"></p>
<?php
if (isset($_GET['captcha'])) {
  if ($_GET['captcha'] == file_get_contents("/tmp/captcha_".$name.".txt")) {
    ?> <p> Captcha correct!</p> <?php
    $solved = file_get_contents("/tmp/solved_".$name.".txt") + 1;
  } else {
    ?> <p>Captcha incorrect :(</p> <?php
    $solved = file_get_contents("/tmp/solved_".$name.".txt");
  }
  if (!$solved) { $solved = 0; }
  if ($solved >= 1024) {
    ?><p>Congrats! Here is your key: KEY{GodIHopeYouScriptedThis}</p><?php
  }
  file_put_contents("/tmp/solved_".$name.".txt", $solved);
  ?>
  <p>Solved <?=$solved?> captchas</p> <?php
}
?>
<p>Copy this value to the field below:</p>
<pre><?php
  $next = dechex(rand());
  file_put_contents("/tmp/captcha_".$name.".txt", $next);
  print $next;
?></pre>
<p><input type="text" name="captcha"></p>
<?php
}
?>
<p><input type="submit" value="submit"></p>
</form>
    </div> <!-- /container -->
  </body>
</html>
