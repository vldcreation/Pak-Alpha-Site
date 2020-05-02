<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">
    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Daftar Suppliers...:)',
        ]);
    ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if( Yii::$app->user->can('admin'))
        {
            ?>
    <p>
        <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp') ?>
        <?= Html::a('Lazy-Load', ['lazy-load'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp') ?>
        <?= Html::a('Active-Record', ['active-record-supplier'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp') ?>
        <?= Html::a('Manage Supplier', ['manage-supplier'], ['class' => 'btn btn-warning']) ?>
    </p>
        <?php } ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> items',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'nama_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
