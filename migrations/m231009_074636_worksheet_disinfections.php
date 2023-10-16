<?php

use yii\db\Migration;

/**
 * Class m231009_074636_worksheet_disinfections
 */
class m231009_074636_worksheet_disinfections extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('worksheet_disinfections', [
            'id' => $this->primaryKey(56),
            'object_id' => $this->integer(),
            'type' => $this->string(255)->notNull(),
            'organization_name' => $this->string(255),
            'adress' => $this->string(255),
            'boxs' => $this->text()->notNull(),
            'area_all' => $this->double()->notNull(),
            'init' => $this->string(50)->notNull()->defaultValue('м²'),
            'method_id' => $this->integer()->notNull(),
            'type_id' => $this->integer()->notNull(),
            'medicine_name' => $this->string(255)->notNull(),
            'dosage' => $this->string(255)->notNull(),
            'time' => $this->integer(),
            'date_event' => $this->integer()->notNull(),
            'report_date' => $this->integer()->notNull(),
            'create_user_id' => $this->integer()->notNull(),
            'start_procassing' => $this->string(255),
            'end_procassing' => $this->string(255),
            'exposition_time' => $this->time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231009_074636_worksheet_disinfections cannot be reverted.\n";

        return false;
    }
    */
}
