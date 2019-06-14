<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';

?>
<section class="section section-top section-full">
    <div class="container">
<div class="site-login">
<?= Html::a('CRM', ['index'], ['class' => 'btn btn-success']) ?>
    <h1><?= Html::encode($this->title) ?></h1>
    

    <p>Пожалуйста войдите в систему:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
