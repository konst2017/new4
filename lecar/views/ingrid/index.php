  <p>Выберите 5 ингридиентов и нажмите ввод</p>
<form method="get" action="<?= \yii\helpers\Url::to(['ingrid/search'])?>">
<?php
use yii\data\Pagination;

use app\controllers\CategoryController;


$x = 0;
while ($x <5):

     $x++;
?>
<?php if( !empty($hitk) ): ?>
										


<select id="phone" name="ing<?php echo"$x";?>">
			                    			<option class="all-cate">Все ингридиенты</option>

<?php foreach($hitk as $hits): ?>

<option><?= $hits->name?></option>

	 <?php endforeach;?>										
	
		                    		</select>


<?php endif; ?>

<?php
endwhile;
?>

<br><br><br>
 <button class="tm-button tm-button-wide">Ввод</button>  
</form>