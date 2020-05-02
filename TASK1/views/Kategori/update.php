<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = 'Update Kategori: ' . $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">
<?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-success',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Update Kategori...:)',
        ]);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
