<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Form;
use app\models\Abiturient;
use app\models\Orientation;


class ShowController extends Controller{
  public $layout='basic';

    public function actionShow(){
        $this->view->title='odna statiya';
        $this->view->registerMetaTag(['name'=> 'keyworks','content'=>'klyhi']);
         $this->view->registerMetaTag(['name'=> 'description','content'=>'opisanie']);
         //$model=Give::find()->all();
        // $model=GIve::find()->orderBy(['id'=>SORT_DESC])->all();//сортировка
      //   $model=Give::find()->asArray()->where('name=Ann')->all();
      //  $model=Give::find()->asArray()->all();//в виде массива
         return $this->render('show',['varInView' => $array]);
      
     }

     
}