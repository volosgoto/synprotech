<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CustomersTranslation */

$this->title = Yii::t('app', 'Create Customers Translation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customers Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
