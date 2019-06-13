<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abiturient;


class Statistica extends Abiturient{

    function CoutAll(){
       
        $model = new Abiturient();
    
        $count_all=$model::find()->where(['status'=>[2,3,4]])->count();
        $enrol=$model::find()->where(['status'=>[2]])->count();
        $failed=$model::find()->where(['status'=>[4]])->count();
        $refuse=$model::find()->where(['status'=>[3]])->count();
        $tel=$model::find()->where(['status'=>[2,3,4],'orientation'=>[2,3,4]])->count();
        $telEnrol=$model::find()->where(['status'=>[2],'orientation'=>[2,3,4]])->count();
        $telFailed=$model::find()->where(['status'=>[4],'orientation'=>[2,3,4]])->count();
        $telRefuse=$model::find()->where(['status'=>[3],'orientation'=>[2,3,4]])->count();
        $it=$model::find()->where(['status'=>[2,3,4],'orientation'=>[5,6,7,8,9]])->count();
        $itEnrol=$model::find()->where(['status'=>[2],'orientation'=>[5,6,7,8,9]])->count();
        $itFailed=$model::find()->where(['status'=>[4],'orientation'=>[5,6,7,8,9]])->count();
        $itRefuse=$model::find()->where(['status'=>[3],'orientation'=>[5,6,7,8,9]])->count();
        $eco=$model::find()->where(['status'=>[2,3,4],'orientation'=>[10,11,12,13]])->count();
        $ecoEnrol=$model::find()->where(['status'=>[2],'orientation'=>[10,11,12,13]])->count();
        $ecoFailed=$model::find()->where(['status'=>[4],'orientation'=>[10,11,12,13]])->count();
        $ecoRefuse=$model::find()->where(['status'=>[3],'orientation'=>[10,11,12,13]])->count();
        $array=[$count_all,$enrol,$failed,$refuse,$tel,$telEnrol,$telFailed, $telRefuse, $it,$itEnrol,$itFailed,$itRefuse,
        $eco,$ecoEnrol,$ecoFailed,$ecoRefuse
    ];
  
    return $array;
       
    }

    function Year($year){
       
        $model = new Abiturient();
    
        $count_all=$model::find()->where(['status'=>[2,3,4],'year'=>['$year']])->count();
        $enrol=$model::find()->where(['status'=>[2],'year'=>['$year']])->count();
        $failed=$model::find()->where(['status'=>[4],'year'=>['$year']])->count();
        $refuse=$model::find()->where(['status'=>[3],'year'=>['$year']])->count();
        $tel=$model::find()->where(['status'=>[2,3,4],'orientation'=>[2,3,4],'year'=>['$year']])->count();
        $telEnrol=$model::find()->where(['status'=>[2],'orientation'=>[2,3,4],'year'=>['$year']])->count();
        $telFailed=$model::find()->where(['status'=>[4],'orientation'=>[2,3,4],'year'=>['$year']])->count();
        $telRefuse=$model::find()->where(['status'=>[3],'orientation'=>[2,3,4],'year'=>['$year']])->count();
        $it=$model::find()->where(['status'=>[2,3,4],'orientation'=>[5,6,7,8,9],'year'=>['$year']])->count();
        $itEnrol=$model::find()->where(['status'=>[2],'orientation'=>[5,6,7,8,9],'year'=>['$year']])->count();
        $itFailed=$model::find()->where(['status'=>[4],'orientation'=>[5,6,7,8,9],'year'=>['$year']])->count();
        $itRefuse=$model::find()->where(['status'=>[3],'orientation'=>[5,6,7,8,9],'year'=>['$year']])->count();
        $eco=$model::find()->where(['status'=>[2,3,4],'orientation'=>[10,11,12,13],'year'=>['$year']])->count();
        $ecoEnrol=$model::find()->where(['status'=>[2],'orientation'=>[10,11,12,13],'year'=>['$year']])->count();
        $ecoFailed=$model::find()->where(['status'=>[4],'orientation'=>[10,11,12,13],'year'=>['$year']])->count();
        $ecoRefuse=$model::find()->where(['status'=>[3],'orientation'=>[10,11,12,13],'year'=>['$year']])->count();
        $array=[$count_all,$enrol,$failed,$refuse,$tel,$telEnrol,$telFailed, $telRefuse, $it,$itEnrol,$itFailed,$itRefuse,
        $eco,$ecoEnrol,$ecoFailed,$ecoRefuse
    ];
  
    return $array;
       
    }
  
}