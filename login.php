<?php
  include_once 'private/include_this.php';
  if ($database_conn->connect_errno) {
    echo '
      <div class="alert alert-danger">
        <strong>Error: </strong>
        Cannot connect to database: ('.$database_conn->connect_errno.') '.$database_conn->connect_error.'
      </div>
      <br><p></p>
    ';
  }
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //do authentication
    //TODO: prepared statements to authenticate
    //https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php
    echo 'PLACEHOLDER: Method was post';
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Radialbog9">
    <meta name="generator" content="">
    <title>Sign In · Inventory System</title>
    <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="./img/icon_256.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
<!--
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
-->
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2019-<?php echo Date("Y");?> Radialbog9</p>
</form>
</body>
</html>
