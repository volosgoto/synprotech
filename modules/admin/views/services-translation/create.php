<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ServicesTranslation */

$this->title = 'Create Services Translation';
$this->params['breadcrumbs'][] = ['label' => 'Services Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
