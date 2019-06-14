<section class="section section-top section-full">
    <div class="container">
<?php
use yii\helpers\Html;

$this->title = 'Редактировать : ' . $model->surname;
?>

<div class="text-right"
            <a href="#" class="btn btn-primary">
                    <?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
            </a>
</div>
<div class="workers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>