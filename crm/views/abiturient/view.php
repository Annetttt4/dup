<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->surname;
//$this->params['breadcrumbs'][] = ['label' => 'Crm', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
<div class="workers-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'surname',
            'name',
            'lastname' ,
            'phone',
            'email',
            // ['attribute' => 'skilsName','label' => 'Skills', 'value'=>'skils0.name'],
           
            'klass' ,
            'orientation',
            'GPA',
            'status',
            'date',
        ],
    ]) ?>


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