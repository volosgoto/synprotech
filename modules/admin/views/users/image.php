<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php if($model->image): ?>
    <?= Html::img('@web/images/uploads/' . $model->image->name, ['class'=>'w3-image', 'alt' => ''])?>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'image')->fileInput() ?>
    <button>Upload</button>
<?php ActiveForm::end() ?>