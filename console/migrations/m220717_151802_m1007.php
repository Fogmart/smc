<?php

use yii\db\Migration;

/**
 * Class m220717_151802_m1007
 */
class m220717_151802_m1007 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user_balance` CHANGE `whn` `whncrt` INT NOT NULL; ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220717_151802_m1007 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220717_151802_m1007 cannot be reverted.\n";

        return false;
    }
    */
}
