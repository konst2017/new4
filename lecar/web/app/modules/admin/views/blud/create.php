<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blud */

$this->title = 'Create Blud';
$this->params['breadcrumbs'][] = ['label' => 'Bluds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
