<h2>Добавление подразделения</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post" class='d-flex justify-content-center'>
<div class='border border-5 border-dark center rounded-3 column'>
       <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
<label>
    Название подразделения<br><input type="text" name="Name"></label>
   <button>Добавить подразделения</button>
</div>
</form>