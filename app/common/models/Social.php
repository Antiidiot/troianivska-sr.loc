<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "social".
 *
 * @property int $id
 * @property string $socialName
 * @property int $images_id
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Site[] $sites
 * @property Images $images
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['images_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['socialName', 'url'], 'string', 'max' => 255],
            [['url'], 'unique'],
            [['images_id'], 'exist', 'skipOnError' => true, 'targetClass' => Images::className(), 'targetAttribute' => ['images_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'socialName' => 'Social Name',
            'images_id' => 'Images ID',
            'url' => 'Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSites()
    {
        return $this->hasMany(Site::className(), ['social_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasOne(Images::className(), ['id' => 'images_id']);
    }
}
