<?php
use yii\helpers\Html;

$this->title = 'Редактировать : ' . $model->surname;
//$this->params['breadcrumbs'][] = ['label' => 'Abiturient', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
<div class="workers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>