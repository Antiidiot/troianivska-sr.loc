<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property int $id
 * @property string $logo
 * @property string $copyright
 * @property string $developer
 * @property int $local_id
 * @property int $social_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Local $local
 * @property Social $social
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['local_id', 'social_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['logo', 'copyright', 'developer'], 'string', 'max' => 255],
            [['local_id'], 'exist', 'skipOnError' => true, 'targetClass' => Local::className(), 'targetAttribute' => ['local_id' => 'id']],
            [['social_id'], 'exist', 'skipOnError' => true, 'targetClass' => Social::className(), 'targetAttribute' => ['social_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'copyright' => 'Copyright',
            'developer' => 'Developer',
            'local_id' => 'Local ID',
            'social_id' => 'Social ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocal()
    {
        return $this->hasOne(Local::className(), ['id' => 'local_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocial()
    {
        return $this->hasOne(Social::className(), ['id' => 'social_id']);
    }
}
