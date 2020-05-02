<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */

$this->title = $model->id_produk;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produk-view">


    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'View Produk...',
        ]);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_produk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_produk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda yakin ingin menghapus item ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_produk',
            [
                'attribute' => 'id_kategori',
                'label' => 'Kategori Name',  //Label dilihat di prooduk.php
                'value' => $model->kategori->nama_kategori,
            ],
            [
                'attribute' =>'id_supplier',
                'label' => 'Supplier Name',
                'value' => $model->supplier->nama_supplier,
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
                    return Yii::$app->formatter->asCurrency($model->harga_produk,'Rp');
                },
            ],
        ],
    ]) ?>

</div>
