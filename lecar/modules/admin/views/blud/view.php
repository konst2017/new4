<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\blud */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bluds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blud-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'ing1',
            'ing2',
            'ing3',
            'ing4',
            'ing5',
          
        ],
    ]) ?>

</div>
