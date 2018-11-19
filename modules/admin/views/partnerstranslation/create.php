<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PartnersTranslation */

$this->title = Yii::t('app', 'Create Partners Translation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Partners Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
