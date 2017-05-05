<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model wokster\pages\models\Page */

$this->title = 'Редактировать страницу: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="page-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
