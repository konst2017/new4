<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use app\models\Blud;
use app\models\Ingrid;
use yii\data\Pagination;
?>

<div class="blud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php $x = 0;
while ($x <5):

     $x++; ?>
   
   
<select id="phone" name="Blud[ing<?php echo"$x";?>]">
			                    			<option class="all-cate">Все ингридиенты</option>

<?php foreach($hitr as $hits): ?>

<option><?= $hits->name?></option>

	 <?php endforeach;?>										
	
		                    		</select>
<?php endwhile; ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
