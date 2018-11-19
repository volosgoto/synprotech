<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReferencesTranslation */

$this->title = Yii::t('app', 'Create References Translation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'References Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="references-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
