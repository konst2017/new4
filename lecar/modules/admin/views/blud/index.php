<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bluds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blud-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'ing1',
			            'ing2',
            'ing3',
             'ing4',
             'ing5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
