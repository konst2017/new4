<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
      <title>Админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php
//        $this->registerJsFile('js/html5shiv.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
//        $this->registerJsFile('js/respond.min.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
    ?>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<?php $this->beginBody() ?>
<br><br>
<h1 align="center"> Админ Панель </h1>
<br><br>

<?php if(!Yii::$app->user->isGuest): ?>

									  <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Р’С‹С…РѕРґ)</a></li>
<?php endif;?>

						
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
			
							<div>
								<nav id="menu1">
  

<ul>
										 


<li><a href="<?=\yii\helpers\Url::to(['/admin']) ?>" class="active">Главная</a></li>

                                <li class="dropdown"><a href="#">Ингридиенты<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['ingrid/index']) ?>">Список </a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['ingrid/create']) ?>">Добавить ингридиент</a></li>
  <li><a href="<?=\yii\helpers\Url::to(['ingrid/skr']) ?>">Скрыть ингридиент</a></li>
 <li><a href="<?=\yii\helpers\Url::to(['ingrid/skroh']) ?>">Удалить из скрытых ингридиентов</a></li>
                                    </ul>
                                </li>
 
<li class="dropdown"><a href="#">Лекарство<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['blud/index']) ?>">Список </a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['blud/create']) ?>">Добавить лекарство</a></li>
                                    </ul>
                                </li>

                             
								
										</ul>
									
    



						</nav>
					
			</div>
			<!-- END MAIN-MENU-AREA -->
			<!-- Start Mobile-menu -->
			
			<!-- End Mobile-menu -->
		</header>
		<!-- HEADER AREA END -->
<?= $content ?>

<div class="footer-area">
			<!-- Footer Start -->
			
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>