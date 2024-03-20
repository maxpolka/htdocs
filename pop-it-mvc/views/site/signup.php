<h3><?= $message ?? ''; ?></h3>
<form method="post" class='d-flex justify-content-center'>
   <div class='border border-5 border-dark center rounded-3'>
   <div>
      <h2>Регистрация</h2>
      <div class="column">
   <!--<label>Логин<br><input type="text" name="name" placeholder="Kripper2004" required></label>-->
   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <label>Логин<br><input type="text" name="login" placeholder="Kripper2004" required></label>
   <label>Пароль<br><input type="password" name="password" placeholder="****" required></label>   
   <button>Зарегистрировать</button>
   
   <!--<h2>Регистрация</h2>
      <div class="column">
   <label>Имя<br><input type="text" name="name" placeholder="Иван" required></label>
   <label>Фамилия<br><input type="text" name="surname" placeholder="Иванов" required></label>
   <label>Отчество<br><input type="text" name="patronymic" placeholder="Иванович" required></label>
   <label>Логин<br><input type="text" name="login" placeholder="Kripper2004" required></label>
   <label>Пароль<br><input type="password" name="password" placeholder="****" required></label>                      
   <label>Пол<br><select name="gender" id="gender">
      <option value="none">Я не знаю</option>
      <option value="man">Мужчина</option>
      <option value="woman">Женщина</option>
   </select></label>
   <label>Дата рождения<br><input type="date" name="date" required></label>
   <label>Адрес прописки<br><input type="text" name="visa" placeholder="Ул. Ленина 61" required></label>
   <label>Должность<br><input type="text" name="post" required></label>
   <label>Подразделение<br><input type="text" name="subdivision" required></label>
   <button>Зарегистрироваться</button>-->
</div>
</div>
</div>
</form> 