<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Abiturients');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Abiturient'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'surname',
            'name',
            'lastname',
            'phone',
            //'email:email',
            //'klass',
            //'orientation',
            //'GPA',
            //'status',
            //'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
