<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Alert;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <!-- Showing Alert -->
    <?php
        echo Alert::widget([
            'options' =>[
                'class' => 'alert-info',//alert-danger, alert-info, alert-warning, alert-success
            ],
            'body' => 'About Creator...',
        ]);
    ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="site-control">
    <tr>
        <td colspan = "2">Nama</td>
        <td colspan="1">:</td>
        <td colspan="4">Vicktor L Desrony</td>
    </tr>
    </div>
    <div class="site-about">
    <tr>
        <td colspan = "2">NIM</td>
        <td colspan="1">:</td>
        <td colspan="4">11319028</td>
    </tr>
    </div>
    <div class="site-about">
    <tr>
        <td colspan = "2">Prodi</td>
        <td colspan="1">:</td>
        <td colspan="4">D3 Teknologi Informasi</td>
    </tr>
    </div>

    
</div>
