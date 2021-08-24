<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Войти в личный кабинет</title>
	<link rel="stylesheet" href="css/login_admin.css">
	<link rel="icon" href="" type="image/x-icon">
	<link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Публикация статьи</h1>
      <form method="post" action="">
          <p><input type="text" name="category" value="" placeholder="Раздел (php, laravel)"></p>
          <p><input type="text" name="title" value="" placeholder="Название статьи"></p>
          <p><input type="text" name="excerpt" value="" placeholder="Отрывок"></p>
          <p><textarea name="message" rows="10" cols="30" placeholder="Содержание"></textarea></p>
          <p class="submit"><input type="submit" name="commit" value="Опубликовать"></p>
      </form>
    </div>
  </section>
</body>
</html>
