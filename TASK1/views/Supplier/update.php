<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */

$this->title = 'Update Supplier: ' . $model->id_supplier;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_supplier, 'url' => ['view', 'id' => $model->id_supplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplier-update">
<?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'Form Update Supplier...:)',
        ]);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
