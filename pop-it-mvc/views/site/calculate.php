<h2>Подсчет среднего возраста</h2>
<form method="post" class='d-flex justify-content-center'>
<div class='border border-5 border-dark center rounded-3'>
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
<div class="column">
   <select name="Subunit_ID">
      <option value="">Все сотрудники</option>
      <?php foreach($subunits as $subunit): ?>
         <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
      <?php endforeach; ?>
   </select>
   <button>Применить</button>
   
</div><br>
<?= $srvozrast  ?>  

</div>
</form>
