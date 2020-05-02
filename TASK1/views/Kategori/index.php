<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Daftar Kategori...:)',
        ]);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <?php if( Yii::$app->user->can('admin'))
        {
            ?>
        <?= Html::a('Create Kategori', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp') ?>
        <?= Html::a('Lazy-Load', ['lazy-load'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp') ?>
        <?= Html::a('Active Record', ['active-record-kategori'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp') ?>
        <?= Html::a('Manage Kategori', ['manage-kategori'], ['class' => 'btn btn-warning']) ?>
        <?php } ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> items',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori',
            'nama_kategori',
            'deskripsi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
