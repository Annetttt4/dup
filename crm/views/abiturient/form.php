<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Abiturient */
/* @var $form ActiveForm */
?>
<div class="form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'klass') ?>
        <?= $form->field($model, 'orientation') ?>
        <?= $form->field($model, 'GPA') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'date') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- form -->
