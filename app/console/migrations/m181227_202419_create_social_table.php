<?php

use yii\db\Migration;

/**
 * Handles the creation of table `social`.
 */
class m181227_202419_create_social_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('social', [
            'id' => $this->primaryKey(),
            'socialName'=>$this->string()->notNull(),
            'images_id'=>$this->integer()->notNull(),
            'url'=>$this->string()->unique(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createIndex(
            'idx-social-images_id',
            'social',
            'images_id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-social-images_id',
            'social',
            'images_id',
            'images',
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
            'fk-social-images_id',
            'social'
        );

        $this->dropIndex(
            'idx-social-images_id',
            'social'
        );

        $this->dropTable('social');
    }
}
