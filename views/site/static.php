<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Orientation;
use app\models\Status;
use app\models\Abiturient;
use kartik\date\DatePicker;

$this->title = 'Статистика';
?>

<section class="section section-top section-full">
    <div class="container">
    <div class="text-right"
            <a href="#" class="btn btn-primary">
                    <?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
            </a>
            <div class="col-md-8 col-lg-8 ">                
</div>
</div>
<div class="container">
        <div class="rectangel">
        <div class="row">
  <div class="col-md-6"><h2>Общее количество </h2>  </div>
  <div class="col-md-6"><?=$all[0];?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Поступили </h2>  </div>
  <div class="col-md-6"><?=$all[1];?>  </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Не прошли </h2>  </div>
  <div class="col-md-6"><?=$all[2];?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Отказались  </h2>  </div>
  <div class="col-md-6"><?=$all[3]?> </div>
</div>
                <div class="center"><h1> По направлениям</h1></div>

                <h2 class="center">Телекоммуникаци </h2> 

                <div class="row">
  <div class="col-md-6"><h2>Общее количество   </h2>  </div>
  <div class="col-md-6"><?=$all[4]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Поступили   </h2>  </div>
  <div class="col-md-6"><?=$all[5]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Не прошли   </h2>  </div>
  <div class="col-md-6"><?=$all[6]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Отказались </h2>  </div>
  <div class="col-md-6"><?=$all[7]?> </div>
</div>
                <h2 class="center">Информационные технологии </h2> 


                <div class="row">
  <div class="col-md-6"><h2>Общее количество   </h2>  </div>
  <div class="col-md-6"><?=$all[8]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Поступили   </h2>  </div>
  <div class="col-md-6"><?=$all[9]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Не прошли   </h2>  </div>
  <div class="col-md-6"><?=$all[10]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Отказались </h2>  </div>
  <div class="col-md-6"><?=$all[11]?> </div>
</div>

                <h2 class="center">Экономика </h2> 
                <div class="row">
  <div class="col-md-6"><h2>Общее количество   </h2>  </div>
  <div class="col-md-6"><?=$all[12]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Поступили   </h2>  </div>
  <div class="col-md-6"><?=$all[13]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Не прошли   </h2>  </div>
  <div class="col-md-6"><?=$all[14]?> </div>
</div>
<div class="row">
  <div class="col-md-6"><h2>Отказались </h2>  </div>
  <div class="col-md-6"><?=$all[15]?> </div>
</div>
</div>
               


        