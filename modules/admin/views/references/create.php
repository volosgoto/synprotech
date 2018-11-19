<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\References */

$this->title = Yii::t('app', 'Create References');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'References'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="references-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
