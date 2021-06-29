<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Войти в личный кабинет</title>
	<link rel="stylesheet" href="css/login_admin.css">
	<link rel="icon" href="" type="image/x-icon">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Войти в личный кабинет</h1>
      <form method="post" action="">
        <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Запомнить меня
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Войти"></p>
      </form>
    </div>

    <div class="login-help">
      <a href="index.html">Забыли пароль?</a> Восстановите его!
    </div>
  </section>
</body>
</html>
