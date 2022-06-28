<?php

use \yii\db\Migration;

class m2806 extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE `orders` ADD `desctipt` TEXT NULL AFTER `price`;');
        $this->execute('ALTER TABLE `user_info` ADD `city_id` int(11)  NULL AFTER `type_id`;');
    }

    public function down()
    {

    }
//6106542021
}
