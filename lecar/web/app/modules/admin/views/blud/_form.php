<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ing1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ing2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ing3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ing4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ing5')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
