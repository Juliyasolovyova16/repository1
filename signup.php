<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="img/logo_purple.svg" type="image/x-icon">
</head>
    <title>Регистрация</title>
  </head>
  <body class="guides_page">
    <header>
      <div class="nav_panel">
        <div class="container-lg">
          <div class="row navbar">
              <div class="logo col-lg-1">
                <a href="index.html">
                  <img src="img/logo_purple.svg" weight="30px" height="30px">
                </a>
              </div>
              <div class="col-lg-6"></div>
              <div class="nav-links col-lg-4 offset-lg-3">
                <a href="index.html">Главная</a>
                <a href="#" class="active">Уроки</a>
              </div>
              <div class="col-lg-1 user">
                <a href="#">
                  <img src="img/user_purple.svg" height="25px" weight="25px">
                </a>
              </div>
          </div>
        </div>
      </div>
    </header>
    <main class="signup_page">
      <div class="container-lg">
        <?php
          if ($_COOKIE['user'] == ''):

        ?>
        <div class="row">
          <div class="col-lg-6">
          <h3>Зарегестрироваться</h3>
          <form action="check.php" method="post">
          <input type="text" name="login" id="login" placeholder="Введите логин"><br>
          <input type="text" name="name" id="login" placeholder="Введите имя"><br>
          <input type="password" name="password" id="login" placeholder="Введите пароль"><br> 
          <button class="button" type="submit">Зарегестрироваться</button>
          </form>
        </div>
        <div class="col-lg-6">
          <h3>Войти</h3>
          <form action="auth.php" method="post">
          <input type="text" name="login" id="login" placeholder="Введите логин"><br>
          <input type="password" name="password" id="login" placeholder="Введите пароль"><br> 
          <button class="button" type="submit">Войти</button>
          </form>
        </div>
        </div>
      <?php else:?>
        <h3>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a></h3>
      <?php endif;?>
      </div>
    </main>
    <footer class="container-fluid">
      <p>© 2021 - A Complete Guide to Flexbox</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>