<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\References */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="references-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'publish_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
