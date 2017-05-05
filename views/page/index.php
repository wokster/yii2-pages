<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel wokster\pages\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index row">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="col-xs-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <span class="label label-default">записей <?= $dataProvider->getCount()?> из <?= $dataProvider->getTotalCount()?></span>
                <div class="box-tools pull-right">
                    <?= \kartik\export\ExportMenu::widget([
                        'dataProvider' => $dataProvider,
                        'template' => '<a href="'.\yii\helpers\Url::toRoute('create').'" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Создать страницу</a>{columns}{menu}',
                        'fontAwesome' => true,
                        'columnSelectorOptions' => ['label'=>"что экспортировать"],
                        'dropdownOptions' => ['label'=>"как экспортировать"]
                    ])?>                </div>
            </div>
            <div class="box-body">
                        <?= GridView::widget([
            'summary' => '',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            [
                'attribute'=>'project_id',
                'filter' => \wokster\pages\models\Page::getProjectList(),
                'value'=>function($data){ return $data->project;}
            ],
            'redirect',
            ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                        </div>
        </div>
    </div>
</div>
