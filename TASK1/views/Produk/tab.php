<?php
    use yii\bootstrap\Tabs;

    echo Tabs::widget([
        'items' =>[
        [
            'label' => 'Tab 1',
            'content' => $this->render('index',['dataProvider'=>$dataProvider, 'searchModel' => $searchModel]),
            'active' => true
        ],
        [
            'label' => 'Tab 2',
            'content' => $this->render('_form2',['model' => $model]),
        ],

    ],
    
    ]);
?>