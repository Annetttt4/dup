<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Status;
use kartik\date\DatePicker;

$this->title = 'Статистика';
?>

<section class="section section-top section-full">
    <div class="container">
    <div class="text-right"
            <a href="#" class="btn btn-primary">
                    <?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
            </a>
</div>