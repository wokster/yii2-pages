<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model wokster\pages\models\Page */

$this->title = 'Создать страницу';
$this->params['breadcrumbs'][] = ['label' => 'страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$this->registerJs("
$(function(){
  $('#page-title').liTranslit({
  elAlias: $('#page-url')
  });
})
");
?>

