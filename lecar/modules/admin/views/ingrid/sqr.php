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


$this->title = 'Sqr Ingrid: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ingrids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="blud-form">

  
<form method="get" action="<?= \yii\helpers\Url::to(['ingrid/search'])?>">
   
   
   
<select id="phone" name="ing1">
			                    			<option class="all-cate">Все ингридиенты</option>

<?php foreach($hitr as $hits): ?>

<option><?= $hits->name?></option>

	 <?php endforeach;?>										
	
		                    		</select>

    </div>
    
<br><br><br>
 <button class="tm-button tm-button-wide">Скрыть ингридиент</button>  
    </form>


</div>
