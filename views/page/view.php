<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model wokster\pages\models\Page */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="btn-group">
                        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                        'confirm' => 'Вы уверены, что хотите безвозвратно удалить страницу?',
                        'method' => 'post',
                        ],
                        ]) ?>
                    </div>
                </div>
                <div class="box-body">
                    <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'title',
                        'url:url',
                        'redirect',
                        'seo_title',
                        'seo_description',
                        'seo_keywords',
                        'text:raw'
                                                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
