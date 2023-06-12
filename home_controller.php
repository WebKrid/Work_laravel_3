<?php 
@extends home_controller.php;
@extends blade_header.php;
@extends blade_main.php;
@extends blade_menu.php;
@extends blade-footer.php;
namespace home_Controller;

use Request;

class homecontroller extends controller {
   public function index() {
      return <<php
      <h1>Информация о будущем агрегаторе</h1>
      <a href="controller.php">Переход на страницу категорий</a>
   }
   <div class="form-group"</div>
   label form="login">login: </label>
<input id="login" type="login" required />
<input type="Веддите пароль и логин " value="#" />
      label for="userPassword">Password: </label>
<input id="password" type="password" required />
<input type="Отправить" value="#" />

<div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" form="remember">Запомнить меня</label>
    </div>
}


