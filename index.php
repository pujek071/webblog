<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form Citra Media|WebAdmin</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form method="post" action="php/log.php?op=in" class="login">
    <p>
      <label for="login">UserName</label>
      <input type="text" name="userid" id="login"  autocomplete="off" value="">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="psw" id="password"  autocomplete="off" value="">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

  </form>
  <center><img height="120" src="img/lo.png" width="280" align="center" title="Citra Media"></center>
</body>
</html>
