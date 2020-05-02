<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_produk') ?>

    <?= $form->field($model, 'kategori_id') ?>

    <?= $form->field($model, 'supplier_id') ?>

    <?= $form->field($model, 'nama_produk') ?>

    <?= $form->field($model, 'satuan') ?>

    <?= $form->field($model, 'stok') ?>

    <?= $form->field($model, 'discount') ?>

    <?= $form->field($model, 'harga_produk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
