<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Abiturient */

$this->title = Yii::t('app', 'Create Abiturient');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abiturients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abiturient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
