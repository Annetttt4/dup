<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Orientation;
use app\models\Status;

/* @var $this yii\web\View */
/* @var $model app\models\Abiturient */
/* @var $form ActiveForm */
?>
<div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 ">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '+7 (999) 999 99 99',]); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'klass') ?>
        <?= $form->field($model, 'orientation')->dropdownList(
    Orientation::find()->select(['name', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Выберети направление']
);?>
        <?= $form->field($model, 'GPA') ?>
        <?= $form->field($model, 'status')->dropdownList(
    Status::find()->select(['name', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Выберети статус']
);?>
        <?= $form->field($model, 'date') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- form -->
