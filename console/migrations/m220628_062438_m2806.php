<?php

use yii\db\Migration;

/**
 * Class m220628_062438_m2806
 */
class m220628_062438_m2806 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `orders` ADD `desctipt` TEXT NULL AFTER `price`;');
        $this->execute('ALTER TABLE `user_info` ADD `city_id` int(11)  NULL AFTER `type_id`;');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220628_062438_m2806 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220628_062438_m2806 cannot be reverted.\n";

        return false;
    }
    */
}
