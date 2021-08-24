<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/general.css">
      <title>About Laravel</title>
   </head>
   <body>
      <header class="site_header">
         <div class="center">
            <a class="site_logo" href="/">
               <span class="site_logo__short_name">About Laravel</span>
            </a>
            <nav class="site_menu">
               <ul class="site_menu__list">
                  <li class="site_menu__item">
                     <a class="site_menu__link" href="/">Домой</a>
                  </li>
                  <li class="site_menu__item">
                     <a class="site_menu__link" href="/list.php">Laravel</a>
                  </li>
                  <li class="site_menu__item">
                     <a class="site_menu__link" href="#">PHP</a>
                  </li>
                  <li class="site_menu__item">
                     <a class="site_menu__link" href="#">Обо мне</a>
                  </li>
               </ul>
            </nav>
         </div>
          <div id="openNav" class="sidenav">
              <span onclick="openNav();">&#9776</span>
          </div>
          <div class="sidenav_block">
              <div class="sidenav_block__span">
                  <span onclick="closeNav();">&times;</span>
              </div>
              <nav class="site_menu__sidenav">
                  <ul class="site_menu__list__sidenav">
                      <li class="site_menu__item__sidenav">
                          <a class="site_menu__link" href="/">Домой</a>
                      </li>
                      <li class="site_menu__item__sidenav">
                          <a class="site_menu__link" href="/list.php">Laravel</a>
                      </li>
                      <li class="site_menu__item__sidenav">
                          <a class="site_menu__link" href="#">PHP</a>
                      </li>
                      <li class="site_menu__item__sidenav">
                          <a class="site_menu__link" href="#">Обо мне</a>
                      </li>
                  </ul>
              </nav>
          </div>
      </header>
      <div class="page_content">
         <div class="page_banner">
            <div class="center">
               <h1 class="page_banner__title">Добро пожаловать</h1>
            </div>
         </div>
         <div class="center">
            <div class="page_content__padding">
               <div class="columns">
                  <div class="columns_column">
                     <div class="content">
                        <h2>О сайте</h2>
                        <p>Данный сайт представляет из себя своего рода блокнот, в котором мы будем делать заметки про Laravel и PHP.</p>
                        <h2>Laravel</h2>
                        <p>В этом разделе мы постараемся понять как устроен и как работает фреймворк Laravel. Будем делать небольшие заметки на возникающие вопросы. Пояснять возникающие моменты при изучении Laravel.</p>
                        <h2>PHP</h2>
                        <p>В разделе PHP будем делать заметки об инструментах самого языка программирования. Это функции, генераторы и т.д.</p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <div class="site_footer_links">
         <div class="center">
            <div class="site_footer_links__content">
               <ul class="site_footer_links__list">
                  <li class="site_footer_links__item">
                     <a class="site_footer_links__link--github" href="https://github.com/anton-kn">GitHab</a>
                  </li>
                  <li class="site_footer_links__item">
                     <a class="site_footer_links__link--telegramm" href="https://t.me/antonknyazevv">Telegramm</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <footer  class="site_footer">
         <div class="center">
            <span>&#169 А.В.Князев, 2020-2021</span>
         </div>
      </footer>
   <script src="js/index.js"></script>
   </body>
</html>
