<form method="post" class='d-flex justify-content-center'>
   <div class='border border-5 border-dark center rounded-3'>
   <div>
      <h2>Выбор по<br> подразделению</h2>
      <div class="column">
   <label>Подразделение<br><select name="subdivision" id="subdivision">
      <option value="none">Первое</option>
      <option value="one">Второе</option>
      <option value="two">Третье</option>
   </select><button id="department_button">Выбор</button></label>
   <ul class='list_ul'>
         <li>Первое</li>
         <li>Второе</li>
         <li>Третье</li>
         <li>Четвертое</li>
      </ul>
      <strong>Средний возраст: XX</strong>
      <?= $srvozrast ?>
</div>
</div>
</div>
</form> 
