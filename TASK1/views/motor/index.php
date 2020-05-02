<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Motors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Motor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'motorId',
            'motorName',
            'motorPrice',
            'motorDiscount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
