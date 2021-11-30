<?php
/**
 * Team:Yongshou Palace, NKU
 * Coding by Yuan Zhenzhi, 2021/11/27
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= '<br>' ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= '<br>' ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>

    <?= '<br>' ?>



    <?= $form->field($model, 'hide')->textInput() ?>

    <?= '<br>' ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
