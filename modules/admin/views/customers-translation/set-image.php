<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php if($model->image): ?>
    <?= Html::img('@web/images/uploads/' . $model->image->name, ['class'=>'', 'alt' => ''])?>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'image')->fileInput()->label('Upload Image', ['style' => 'margin-top:20px']) ?>
    <button class="btn btn-success">Upload</button>
<?php ActiveForm::end() ?>