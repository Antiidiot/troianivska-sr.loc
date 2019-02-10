<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 */
class m181227_202639_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'status' => $this->integer()->defaultValue(0),
            'category_id' => $this->integer(),
            'images_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

        ]);


        $this->createIndex(
            'idx-posts-category_id',
            'posts',
            'category_id'
        );

        $this->addForeignKey(
            'fk-posts-category_id',
            'posts',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-posts-category_id',
            'posts'
        );

        $this->dropIndex(
            'idx-posts-category_id',
            'posts'
        );

        $this->dropTable('posts');
    }
}
