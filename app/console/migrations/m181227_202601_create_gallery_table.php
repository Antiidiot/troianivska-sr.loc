<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery`.
 */
class m181227_202601_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'nameGallery'=>$this->string(),
            'images_id'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);

        $this->createIndex(
            'idx-gallery-images_id',
            'gallery',
            'images_id'
        );

        $this->addForeignKey(
            'fk-gallery-images_id',
            'gallery',
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
            'fk-gallery-images_id',
            'gallery'
        );

        $this->dropIndex(
            'idx-gallery-images_id',
            'gallery'
        );

        $this->dropTable('gallery');
    }
}
