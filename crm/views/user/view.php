<section class="section section-top section-full">
    <div class="container">

<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Abiturient;
use app\models\Orientation;

$this->title = $model->surname;
//$this->params['breadcrumbs'][] = ['label' => 'Crm', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
 <div class="text-right"
            <a href="#" class="btn btn-primary">
                    <?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
</a>
</div>
<div class="workers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="rectangel">
    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-hover',
        ],
        'attributes' => [
            'id',
            ['attribute' => 'surname','label' => 'Фамилия','contentOptions'=>['style'=>'width:60%']],
            ['attribute' => 'name','label' => 'Имя'],
            ['attribute' => 'lastname' ,'label' => 'Отчество'], 
        ],
    ]) ?>
    </div>

    <div class="rectangel">
     <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-hover',
        ],
        
        'attributes' => [
            ['attribute' => 'email','label' => 'E-mail','contentOptions'=>['style'=>'width:60%']],
            ['attribute' =>  'phone','label' => 'Телефон'],
            ['attribute' => 'klass','label' => 'Класс'],
            ['attribute' =>  'GPA','label' => 'Средний балл аттестата','options' => ['width' => '200']], 
               
        ],
        
    ]) ?>
    </div>

    <div class="rectangel">
      <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-hover',
        ],
        'attributes' => [
            ['attribute' => 'orientation','label' => 'Направление','value'=>$model->orientation0->name,'contentOptions'=>['style'=>'width:60%']],
            ['attribute' =>  'status','label' => 'Статус','value'=>$model->status0->name],
            ['attribute' =>  'date','label' => 'Дата','value'=>Yii::$app->formatter->asDate($model->date)],      
        ],
    ]) ?>

    </div>
<p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'вы правда хотите удалить элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
</div>