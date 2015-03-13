<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\AttendanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>


<div class="customers-attendance-list">
    <?php
    $gridColumns = [ 
        [
            'attribute' => 'DropinDate',
            'format' => ['date', 'php:d M Y'],
            'hAlign' => 'center',
            'vAlign' => 'middle',
            'width' => '30px',            
        ],
        [
            'class' => 'kartik\grid\BooleanColumn',
            'attribute' => 'Dropin',
            'vAlign' => 'middle',
        ],
        [
            'class' => 'kartik\grid\BooleanColumn',
            'attribute' => 'Doctor',
            'vAlign' => 'middle',
        ],
        [
            'class' => 'kartik\grid\BooleanColumn',
            'attribute' => 'Lawyer',
            'vAlign' => 'middle',
        ],
        [
            'attribute' => 'Observation',
            'vAlign' => 'middle',
        ],
//        [
//            'class' => 'kartik\grid\ActionColumn',
//        ],
    ];
    ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'responsive' => true,
        'resizableColumns' => false,
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'pjax' => true, // pjax is set to always true for this demo
        'hover' => true,
        'toolbar' => false,
//        'panel' => [
//            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Previous visits</h3>',
//            'type' => 'info',
//            'footer' => false,
//        ],
        'panel' => false,
        'columns' => $gridColumns,
    ]);
    ?>


</div>
