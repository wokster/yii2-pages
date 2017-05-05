<?php

use yii\db\Migration;

class m170504_124749_pages extends Migration
{
    public function safeUp()
    {
        $this->createTable('page',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string(255)->notNull(),
                'url' => $this->string(255)->notNull(),
                'redirect' => $this->string(255),
                'text' => $this->text(),
            ]
        );
        $this->createIndex(
            'page-url',
            'page',
            'url'
        );
    }

    public function safeDown()
    {
        echo "m170504_124749_pages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170504_124749_pages cannot be reverted.\n";

        return false;
    }
    */
}
