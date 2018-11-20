<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReferencesTranslationSerch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="references-translation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'locale_id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'project_image') ?>

    <?php // echo $form->field($model, 'project_title') ?>

    <?php // echo $form->field($model, 'customer_image') ?>

    <?php // echo $form->field($model, 'customer_title') ?>

    <?php // echo $form->field($model, 'project_body') ?>

    <?php // echo $form->field($model, 'customer_body') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
