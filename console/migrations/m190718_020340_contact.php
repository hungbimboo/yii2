<?php

use yii\db\Migration;

/**
 * Class m190718_020340_contact
 */
class m190718_020340_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
  /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $tableOptions = null;
            if ($this->db->driverName === 'mysql') {
                // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
                $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            }

            $this->createTable('{{%contact}}', [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull()->unique(),
                'email' => $this->string(100)->notNull()->unique(),
                'subject' => $this->string()->notNull(),
                'body' => $this->string()->notNull(),

                'created_at' => $this->integer()->notNull(),
                'updated_at' => $this->integer()->notNull(),
            ], $tableOptions);
        }

        public function down()
        {
            $this->dropTable('{{%contact}}');
        }
}
