<?php
use yii\helpers\Html;

$this->title = 'Создать';
//$this->params['breadcrumbs'][] = ['label' => 'Abiturient', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
<div class="workers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>