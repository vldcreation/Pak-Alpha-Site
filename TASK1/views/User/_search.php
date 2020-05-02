<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'pass') ?>

    <?= $form->field($model, 'sPass') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'tglLahir') ?>

    <?php // echo $form->field($model, 'isActive') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
