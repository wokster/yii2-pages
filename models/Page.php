<?php

namespace wokster\pages\models;

use common\widgets\seoformwidget\SeoBehavior;
use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $redirect
 * @property string $url
 * @property string $project_id
 */
class Page extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
    * @inheritdoc
    */
    public function behaviors()
    {
        return [
            'seo' => [
                'class' => SeoBehavior::className(),
                'body_attribute' => 'text',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'url'], 'required'],
            [['project_id'], 'integer', 'min'=>0, 'max'=>2],
            [['project_id'], 'default', 'value'=>1],
            [['text'], 'string'],
            [['title', 'redirect', 'url'], 'string', 'max' => 255],
            [['url'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Контент',
            'redirect' => 'Редирект',
            'url' => 'ЧПУ',
            'project_id' => 'Видимость в проекте',
            'project' => 'Видимость в проекте',
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'redirect' => 'Поле для ссылки на которую будет происходить переадресация. Если не заполнено - эта страница доступна, если заполнено при запросе страницы произойдет редирект по указанному адресу.',
            'project_id' => 'Доступ к странице из разных проектов',
        ];
    }
    public static function getProjectList(){
        return ['везде','только основной', 'только reha'];
    }
    public function getProject(){
        $list = $this->getProjectList();
        return $list[$this->project_id];
    }
}
