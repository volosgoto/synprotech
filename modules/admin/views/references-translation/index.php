<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReferencesTranslationSerch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'References Translations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="references-translation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create References Translation'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'year',
            'locale_id',
            'customer_id',
            'project_image',
            //'project_title',
            //'customer_image',
            //'customer_title',
            //'project_body:ntext',
            //'customer_body:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
