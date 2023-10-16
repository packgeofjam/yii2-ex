<?php

use yii\db\Migration;

/**
 * Class m231010_115212_create_user_status
 */
class m231010_115212_create_user_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'status', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231010_115212_create_user_status cannot be reverted.\n";

        return false;
    }

}
