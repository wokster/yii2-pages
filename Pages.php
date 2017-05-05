<?php

namespace wokster\pages;

class Pages extends \yii\base\Module
{
    public $controllerNamespace = 'wokster\pages\controllers';
    public $defaultRoute = 'page';

    public function init()
    {
        parent::init();
    }
}
