<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Ingrid */

$this->title = 'Create Ingrid';
$this->params['breadcrumbs'][] = ['label' => 'Ingrids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingrid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
