<?php
@extends ('home_controller.php');
@extends ('blade_header.php')
@extends ('blade_menu.php');
@extends ('blade-footer.php');
<form
   <div class="form-group">
      <label form ="input-email">pole_news</label>
      <input type="pole_news" id="input-email" placeholder="Укажите название новой новости">
      <input type="input_news" id="input-news" placeholder="Отправка новости">
   </div>
   <div class="form-news">
      <label form="input-form-news">Опишите новую новость:</label>
      <input type="form-news" id="input-password" placeholder="Отправка описанной новости">
   </div>
   <div class="form-group form-check">
       <label form="input-form-news">Кратко опишите новость:</label>
      <label class="form-check-label" form="remember">Отправка краткой описанной новости</label>
   </div>
   <div class = "form-button" >
      <button type="input" class="btn-input">Запомнить меня</button>
      <button type="submit" class="btn btn-primary">Отправить</button>
   </div>
</form>

public function index() 
{
   return view('admin.categories.index');
}