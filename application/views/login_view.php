<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/main.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/signin.css')?>">
</head>
<body class="text-center" data-new-gr-c-s-check-loaded="14.977.0" data-gr-ext-installed="">
    <form class="form-signin" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <img class="mb-4 logo-pic" src="<?php echo base_url('/assets/images/sandbox.png')?>" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
      <label for="inputEmail" class="sr-only">NIP</label>
      <input type="text" name="nip" id="inputNIP" class="form-control pl-4 pr-4" placeholder="NIP" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control pl-4 pr-4" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      <br><a href="help.html" target="_blank">Butuh Bantuan?</a>
      <p class="mt-5 mb-3 text-muted">© SandBox Copyright 2020</p>
    </form>

</body>
</html>