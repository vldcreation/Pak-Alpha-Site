<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Form Tambah Suppliers...:)',
        ]);
    ?>
    <?php $form = ActiveForm::begin(['action' => ['supplier/create'], 'method' => 'get']); ?>

    <?= $form->field($model, 'nama_supplier')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
        ['class' =>$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
