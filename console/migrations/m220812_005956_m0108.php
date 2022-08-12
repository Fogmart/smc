<?php

use yii\db\Migration;

/**
 * Class m220812_005956_m0108
 */
class m220812_005956_m0108 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user_info` CHANGE `balnce` `balance` DECIMAL(10,0) NULL DEFAULT 0;  ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220812_005956_m0108 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220812_005956_m0108 cannot be reverted.\n";

        return false;
    }
    */
}
