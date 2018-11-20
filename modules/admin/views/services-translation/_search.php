<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServicesTranslationSerch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-translation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'service_id') ?>

    <?= $form->field($model, 'locale_id') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'body') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
