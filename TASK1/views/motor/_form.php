<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Motor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'motorName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motorPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motorDiscount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
