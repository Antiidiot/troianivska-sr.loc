<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $nameGallery
 * @property int $images_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Images $images
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['images_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nameGallery'], 'string', 'max' => 255],
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
            'nameGallery' => 'Name Gallery',
            'images_id' => 'Images ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasOne(Images::className(), ['id' => 'images_id']);
    }
}
