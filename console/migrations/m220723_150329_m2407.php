<?php

use yii\db\Migration;

/**
 * Class m220723_150329_m2407
 */
class m220723_150329_m2407 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user` CHANGE `username` `username` VARCHAR(255) NULL; ');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220723_150329_m2407 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220723_150329_m2407 cannot be reverted.\n";

        return false;
    }
    */
}
