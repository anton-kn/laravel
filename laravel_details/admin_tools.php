<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/css/general.css">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/admin.css">
      <title>Панель администратора</title>
   </head>
   <body>
      <header class="site_header">
         <div class="center">
            <a class="site_logo" href="">
               <span class="site_logo__short_name">Панель администратора</span>
            </a>
            <nav class="site_menu">
               <ul class="site_menu__list">
                  <li class="site_menu__item">
                     <a class="site_menu__link" href="#">Домой</a>
                  </li>
                  <li class="site_menu__item">
                     <a class="site_menu__link" href="">Выйти</a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <section class="block_sections">
         <div class="block_sections__add">
            <div class="block_sections__add_name">
               <div class="block_sections__title">
                  <h3>Разделы</h3>
               </div>
               <!-- Необходимо доработать путем создания модального окна -->
               <!-- <button id="add_section" class="button" type="button" name="button">+</button> -->
            </div>
            <ul class="block_sections__items">
               <li class="block_sections__item"><a href="#">Домой</a></li>
               <li class="block_sections__item"><a href="#">Laravel</a></li>
               <li class="block_sections__item"><a href="#">PHP</a></li>
               <li class="block_sections__item"><a href="#">Обо мне</a></li>
            </ul>
         </div>
      </section>
      <div class="list_themes">
         <div class="list_themes__title">
            <h3>Темы</h3>
         </div>
         <div class="list_themes__items">
            <nav class="list_themes__items_nav">
               <ul class="">
                  <li class=""></li>
               </ul>
            </nav>
         </div>
      </div>
   </body>
</html>
