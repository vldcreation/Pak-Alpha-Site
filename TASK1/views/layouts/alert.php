<?php
use yii\helpers\Html;

if(Yii::$app->session->hasFlash('success')){
    echo '
        <div class="alert alert-success">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::$app->session->getFlash('success').'
        </div>
    ';
}
if(Yii::$app->session->hasFlash('info')){
    echo '
        <div class="alert alert-info">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::$app->session->getFlash('info').'
        </div>
    ';
}
if(Yii::$app->session->hasFlash('warning')){
    echo '
        <div class="alert alert-warning">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::$app->session->getFlash('warning').'
        </div>
    ';
}
if(Yii::$app->session->hasFlash('error')){
    echo '
        <div class="alert alert-error">
            <button type="button" class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            '.Yii::$app->session->getFlash('error').'
        </div>
    ';
}
?>