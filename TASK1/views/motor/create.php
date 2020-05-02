<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Motor */

$this->title = 'Create Motor';
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
