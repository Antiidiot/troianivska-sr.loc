<?php

use yii\db\Migration;

/**
 * Handles the creation of table `site`.
 */
class m181227_202448_create_site_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('site', [
            'id' => $this->primaryKey(),
            'logo'=>$this->string(),
            'copyright'=>$this->string(),
            'developer'=>$this->string(),
            'local_id'=>$this->integer(),
            'social_id'=>$this->integer(),
            'created_at'=>$this->timestamp(),
            'updated_at'=>$this->timestamp(),
        ]);

        $this->createIndex(
            'idx-site-local_id',
            'site',
            'local_id'
        );

        $this->addForeignKey(
            'fk-site-local_id',
            'site',
            'local_id',
            'local',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-site-social_id',
            'site',
            'social_id'
        );

        $this->addForeignKey(
            'fk-site-social_id',
            'site',
            'social_id',
            'social',
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
            'fk-site-local_id',
            'site'
        );

        $this->dropIndex(
            'idx-site-local_id',
            'site'
        );

        $this->dropForeignKey(
            'fk-site-social_id',
            'site'
        );

        $this->dropIndex(
            'idx-site-social_id',
            'site'
        );

        $this->dropTable('site');
    }
}
