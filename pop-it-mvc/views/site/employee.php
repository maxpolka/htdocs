<h3><?= $message ?? ''; ?></h3>
<form method="post" class='d-flex justify-content-center'>
   <div class='border border-5 border-dark center rounded-3'>
   <div>
      <h2>Добавить сотрудника<br> в отдел кадров</h2>
      <div class="column">
   <label>Сотрудник<br><select name="gender" id="gender">
      <option value="none">Сальников илья Иванович</option>
      <option value="man">Дмитрий Данилов Растович</option>
      <option value="woman">Кирим Шен Шенович</option>
   </select>
   </label>
   <label>Пол<br><select name="gender" id="gender">
      <option value="none">Я не знаю</option>
      <option value="man">Мужчина</option>
      <option value="woman">Женщина</option>
   </select></label>
   <label>Дата рождения<br><input type="date" name="date" required></label>
   <label>Адрес прописки<br><input type="text" name="visa" placeholder="Ул. Ленина 61" required></label>
   <label>Должность<br><select name="employee" id="employee">
      <option value="none">Сотрудник подразделения </option></select></label>
   <label>Подразделение<br><select name="department" id="department">
      <option value="none">Первое</option>
      <option value="one">Второе</option>
      <option value="two">Третий</option>
   </select></label>
   <button id="emp_button">Добавить</button>
</div>
</div>
</div>
</form> 