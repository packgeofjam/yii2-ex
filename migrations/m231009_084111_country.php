<?php

use yii\db\Migration;

/**
 * Class m231009_084111_country
 */
class m231009_084111_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'code' => $this->char(2)->notNull(),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue('0'),
        ]);
        $this->addPrimaryKey('pk_code', 'country', 'code');
        $this->insert('country', [
            'code' => 'AU',
            'name' => 'Australia',
            'population' => 24016400,
        ]);
        $this->insert('country', [
            'code' => 'BR',
            'name' => 'Brasil',
            'population' => 205722000,
        ]);
        $this->insert('country', [
            'code' => 'CA',
            'name' => 'Canada',
            'population' => 35985751,
        ]);
        $this->insert('country', [
            'code' => 'RU',
            'name' => 'Russia',
            'population' => 146519759,
        ]);
        $this->insert('country', [
            'code' => 'US',
            'name' => 'United States',
            'population' => 322976000,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231009_084111_country cannot be reverted.\n";

        return false;
    }
    */
}
