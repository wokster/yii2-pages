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
              <div class="box-tools pull-right"><?=\yii\bootstrap\Html::a(\rmrevin\yii\fontawesome\FA::icon('plus'),['create'],['class'=>'btn btn-box-tool'])?></div>
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
            'redirect',
            'seo_title',
            'seo_description',
            'seo_keywords',
            ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                        </div>
        </div>
    </div>
</div>
