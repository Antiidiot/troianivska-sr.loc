<?php

use yii\db\Migration;

/**
 * Handles the creation of table `images`.
 */
class m181227_202021_create_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('images', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'alt' => $this->string()->notNull(),
            'alias' => $this->string()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('images');
    }
}
