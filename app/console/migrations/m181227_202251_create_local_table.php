<?php

use yii\db\Migration;

/**
 * Handles the creation of table `local`.
 */
class m181227_202251_create_local_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('local', [
            'id' => $this->primaryKey(),
            'region'=>$this->string(),
            'district'=>$this->string(),
            'village'=>$this->string(),
            'street'=>$this->string(),
            'postIndex'=>$this->integer(),
            'phone'=>$this->string(),
            'fax'=>$this->string(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('local');
    }
}
