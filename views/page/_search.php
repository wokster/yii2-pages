<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model wokster\pages\models\PageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-search row">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<div class="col-xs-3">    <?= $form->field($model, 'id') ?>

</div><div class="col-xs-3">    <?= $form->field($model, 'title') ?>

</div><div class="col-xs-3">    <?= $form->field($model, 'text') ?>

</div><div class="col-xs-3">    <?= $form->field($model, 'redirect') ?>

</div><div class="col-xs-3">    <?= $form->field($model, 'url') ?>

</div>    <div class="form-group col-xs-12">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
