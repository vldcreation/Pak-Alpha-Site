<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;
/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = 'Create Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-create">
    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-success',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Tambah Kategori...:)',
        ]);
    ?>  
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
