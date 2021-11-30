<?php
/**
 * Team:Yongshou Palace, NKU
 * Coding by Yuan Zhenzhi, 2021/11/27
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= '<br>' ?>

    <?= $form->field($model, 'email') ?>

    <?= '<br>' ?>

    <?= $form->field($model, 'message') ?>
    
    <?= '<br>' ?>

    <?= $form->field($model, 'id') ?>

    <?= '<br>' ?>

    <?php echo $form->field($model, 'hide') ?>
    
    <?= '<br>' ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
