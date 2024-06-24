<?php

use yii\db\Migration;

/**
 * Class m240624_171428_user_info
 */
class m240624_171428_user_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_info', [
            'id' => $this->string(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_info');
    }
}
