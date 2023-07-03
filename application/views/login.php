<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,maximum-scale=1.0, user-scalable=0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
      html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>

<body class="text-center">
      


    <form class="form-signin" id="formlogin" method="post" action="<?php echo base_url() ?>login/checkLogin">
        <img class="mb-4" src="https://thumbnail.imgbin.com/20/16/0/imgbin-rs-domain-name-co-internet-org-rs-logo-BR1S84jyKjEbhsaRynE6ZnHJr_t.jpg" alt="" width="72">
        <div id="loginFormInput" >
        <h5 class="mb-3 font-weight-normal">Silahkan Login</h5>
        <?php if($this->session->flashdata('message_login_error')): ?>
      <div class="invalid-feedback">
          <?php $this->session->flashdata('message_login_error') ?>
      </div>
    <?php endif ?>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block bg-pamobvit" type="submit">Sign in</button>
        </div>
    </form>
    
    
</body>

</html>