<?php

use app\models\Kategori;
use app\models\Supplier;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">
<?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Form Tambah Produk...:)',
        ]);
    ?>

<?php $form = ActiveForm::begin(['action'=>['produk/create'],'method' => 'post']); ?>

<div class="form-group">
    <?= Html::activelabel($model, 'kategori_id',['class'=>'label-control']) ?>
    <?= Html::activeDropDownList($model, 'kategori_id',ArrayHelper::map(Kategori::find()->all(), 'id_kategori', 'nama_kategori'),['class'=>'form-control']) ?>
</div>

<div class="form-group">
    <?= Html::activelabel($model, 'supplier_id',['class'=>'label-control']) ?>
    <?= Html::activeDropDownList($model, 'supplier_id',ArrayHelper::map(Supplier::find()->all(), 'id_supplier', 'nama_supplier'),['class'=>'form-control']) ?>
</div>

    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <?= $form->field($model, 'harga_produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
