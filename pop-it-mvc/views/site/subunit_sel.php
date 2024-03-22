<?php 
/**
 * @var array $subdivisions 
 */
?>

<h2>Выбор подразделения</h2>
<form method="get" class='d-flex justify-content-center'>
<div class='border border-5 border-dark center rounded-3 column'>
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label>Подразделение</label>
            <select name="subdivision">
               <?php if (isset($subdivisions)): ?>
                  <?php foreach ($subdivisions as $subdivision): ?>
                     <option value="<?=$subdivision->ID; ?>"><?=$subdivision->name; ?></option>
                     
                  <?php endforeach ?>
               <?php endif; ?>
            </select>
            <ul>
            <?php if (isset($employees)): ?>
               <?php foreach($employees as $employee): ?>
                  <li><?=$employee->Name; ?></li>
               <?php endforeach; ?>
            <?php endif; ?>
            </ul>
            <button id="subunit_button">Выбор</button>
            
</div>
</form> 