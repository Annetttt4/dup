<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Crm';
//$this->params['breadcrumbs'][] = $this->title;
?>




    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="table table-striped" >
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'striped',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            ['attribute'=>'surname', 'label'=>'Фамилия', 'value'=>'surname'],
            ['attribute'=>'name', 'label'=>'Имя', 'value'=>'name'],
            ['attribute'=>'email', 'label'=>'E-mail', 'value'=>'email'],
            //['attribute' => 'orientationName','label' => 'Orientation', 'value'=>'orientation0.name'],
            ['attribute' => 'statusName','label' => 'Статус', 'value'=>'status0.name','format' => 'raw','filter' => [
                0 => 'Подал документы',
                1 => 'Защислен',
                3 => 'Не прошел',
                4 => 'Отказался'
            ],
           /* 'value' => function ($model, $key, $index, $column) {
                $active = $model->{$column->attribute} === 1;
                return \yii\helpers\Html::tag(
                    'span',
                    $active ? 'Yes' : 'No',
                    [
                        'class' => 'label label-' . ($active ? 'success' : 'danger'),
                    ]
                );
            },*/
        ],
            //'orientation',
            //'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
