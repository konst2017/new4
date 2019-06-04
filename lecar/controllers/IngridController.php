<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Ingrid;
use app\models\Blud;
use app\models\Skr;
use Yii;
use yii\data\Pagination;


class IngridController extends AppController{



    public function actionIndex(){
$hitk = Ingrid::find()->
 
all();      
return $this->render('index', compact('hitk'));

       }
 public function actionSearch(){
        $ing1 = trim(Yii::$app->request->get('ing1'));
         $ing2 = trim(Yii::$app->request->get('ing2'));
           $ing3 = trim(Yii::$app->request->get('ing3'));
         $ing4 = trim(Yii::$app->request->get('ing4'));
           $ing5 = trim(Yii::$app->request->get('ing5'));
  $hitk = skr::find()->
limit(100)->
all();
       foreach($hitk as $hits): 
?>
<?php $skr=$hits->name ;

     ?>
<?php
	  endforeach;										

 if ($skr=="")   $skr="net";
     

        $query = Blud::find()->
 where(['and',['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
['not like', 'ing1', [$skr]],
['not like', 'ing2', [$skr]],
['not like', 'ing3', [$skr]],
['not like', 'ing4', [$skr]],
['not like', 'ing5', [$skr]],
 ])->
 
limit(100)->
all(); 

$query4 = Blud::find()->
 where(['and',['or',['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]]],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]],
 
 ['and',
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]]],

 ['not like', 'ing1', [$skr]],
['not like', 'ing2', [$skr]],
['not like', 'ing3', [$skr]],
['not like', 'ing4', [$skr]],
['not like', 'ing5', [$skr]],
])->
 limit(100)->

all(); 



$query3 = Blud::find()->
 where(['and',['or',['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]]],
['not like', 'ing1', [$skr]],
['not like', 'ing2', [$skr]],
['not like', 'ing3', [$skr]],
['not like', 'ing4', [$skr]],
['not like', 'ing5', [$skr]],
 ])->
 
limit(100)->
all(); 


$query2 = Blud::find()->
 where(['and',['or',['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 
 ['and',
 ['or like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]]
 ],
 
 ['and',
 ['or like', 'ing4', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['or like', 'ing5', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing1', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing2', [$ing1,$ing2,$ing3,$ing4,$ing5]],
 ['not like', 'ing3', [$ing1,$ing2,$ing3,$ing4,$ing5]]]],
['not like', 'ing1', [$skr]],
['not like', 'ing2', [$skr]],
['not like', 'ing3', [$skr]],
['not like', 'ing4', [$skr]],
['not like', 'ing5', [$skr]],
 ])->
 
limit(100)->
all(); 

   

      
        return $this->render('search', compact('query','query4','query3','query2','ing1','ing2','ing3','ing4','ing5'));
    }



}

