<h3><?= $message ?? ''; ?></h3>
<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post" class='d-flex justify-content-center'>
    <div class='border border-5 border-dark center rounded-3'>
    <h2>Авторизация</h2>
        <div class="column">
       <label>Логин<br><input type="text" name="login"></label>
       <label>Пароль<br><input type="password" name="password"></label>
       <button>Войти</button>
</div>
    </div>
   </form>
<?php endif;