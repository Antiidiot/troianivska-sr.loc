<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m181227_202205_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'nameCategory' => $this->string()->unique()->notNull(),
            'link' => $this->string()->unique()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createIndex(
            'idx-category-nameCategory',
            'category',
            'nameCategory'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            'idx-category-nameCategory',
            'category'
        );

        $this->dropTable('category');
    }
}
