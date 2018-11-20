<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContactsTranslation */

$this->title = Yii::t('app', 'Create Contacts Translation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
