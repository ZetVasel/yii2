<?php

use app\models\Base;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;

$dataProvider = new ActiveDataProvider([
    'query' => Base::find(),
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'defaultOrder' => ['last_modify' => SORT_ASC]
    ]
]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'internal_id',
        'last_modify',
        'regulator'
    ]
]);