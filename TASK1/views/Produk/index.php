<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-index">

    <!-- Showing Alert -->
    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Berikut adalah daftar Produk Pak Alpha...',
        ]);
    ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?php if( Yii::$app->user->can('admin'))
        {
            ?>
        <?= Html::a('Create Produk', ['create'], ['class' => 'btn btn-success']) ?>
        &nbsp&nbsp&nbsp
        <?= Html::a('Manage Produk', ['manage-produk'], ['class' => 'btn btn-info']) ?>
        <?php }?>
    </p>
    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => 'Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> items',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_produk',
            [
                'attribute' => 'kategori_id',
                'label' => 'Kategori Name',
                'value' => function($model){
                    return $model->kategori->nama_kategori;
                },
            ],
            [
                'attribute' => 'supplier_id',
                'label' => 'Supplier Name',
                'value' => function($model){
                    return $model->supplier->nama_supplier;
                },
            ],
            'nama_produk',
            'satuan',
            [
                'attribute' => 'stok',
                'value' => function($model){
                    return $model->stok." ".$model->satuan;
                },
            ],
            [
                'attribute' => 'harga_produk',
                'value' => function($model){
                    return Yii::$app->formatter->asCurrency($model->harga_produk,'Rp'); //use Yii
                },
            ],

             [
                 'class' => 'yii\grid\ActionColumn',
                 'template' => '{view}{update}{delete}',
            ],  //Field Action dengan default menampilkan semua action
        ],
    ]); ?>


</div>
