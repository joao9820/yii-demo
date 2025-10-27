<?php
use yii\helpers\Html;

//Com o yii\widgets não estava utilizando as classes corretas do bootstrap4
use yii\bootstrap4\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>

  <?= $form->field($model, 'name')->label('Nome') ?>
  <?= $form->field($model, 'email')->label('E-mail') ?>

  <div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?> 
  </div>

<?php ActiveForm::end() ?>