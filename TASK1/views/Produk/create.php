<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */

$this->title = 'Create Produk';
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-create">
    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Form Tambah Produk...:)',
        ]);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
