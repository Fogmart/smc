<?php

use yii\db\Migration;

/**
 * Class m220708_042418_m0107
 */
class m220708_042418_m0107 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->execute('ALTER TABLE `user_info` ADD `doc1` VARCHAR(100) NULL AFTER `balnce`, ADD `doc2` VARCHAR(100) NULL AFTER `doc1`, ADD `doc3` VARCHAR(100) NULL AFTER `doc2`; ');
        $this->execute('CREATE TABLE `support_tickets` (
              `id` int(11) NOT NULL ,
              `src_user_id` int(11) NOT NULL,
              `worker_id` int(11) DEFAULT NULL,
              `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
            ); ');
        $this->execute('ALTER TABLE `support_tickets`   ADD PRIMARY KEY (`id`);');
        $this->execute('ALTER TABLE `support_tickets`  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
        $this->execute('CREATE TABLE `support_messages` ( 
                `id` INT NOT NULL AUTO_INCREMENT ,
                `ticket_id` INT NOT NULL, 
                `user_id` INT NOT NULL , 
                `message` TEXT NOT NULL , 
                `whncrt` INT NOT NULL , PRIMARY KEY (`id`));');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220708_042418_m0107 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220708_042418_m0107 cannot be reverted.\n";

        return false;
    }
    */
}
