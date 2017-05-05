<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model wokster\pages\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin([
    ]); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-default">

                <div class="box-header with-border">
                    <h3 class="box-title">Заполните форму</h3>
                </div>

                <div class="box-body">

                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                      <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-xs-12 col-md-12">
                      <?=  $form->field($model, 'text')->widget(\vova07\imperavi\Widget::className(),[
                          'settings' => [
                              'lang' => 'ru',
                              'minHeight' => 200,
                              'pastePlainText' => true,
                              'imageUpload' => \yii\helpers\Url::to(['/main/image/save-redactor-img','id'=>null,'sub'=>'page']),
                              'replaceDivs' => false,
                              'plugins' => [
                                  'fullscreen',
                                  'table'
                              ]
                          ]
                      ]) ?>
                    </div>
                  </div>
            
                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                      <?= $form->field($model, 'redirect')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <?= $form->field($model, 'project_id')->dropDownList($model->getProjectList()) ?>
                    </div>
                  </div>
                  <?= \common\widgets\seoformwidget\SeoFormWidget::widget(['model'=>$model]);?>
                  <div class="row">
                    <div class="col-xs-12 col-md-12">
                      <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
  <?php ActiveForm::end(); ?>
</div>
