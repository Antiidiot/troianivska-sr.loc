<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "local".
 *
 * @property int $id
 * @property string $region
 * @property string $district
 * @property string $village
 * @property string $street
 * @property int $postIndex
 * @property string $phone
 * @property string $fax
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Site[] $sites
 */
class Local extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'local';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['postIndex'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['region', 'district', 'village', 'street', 'phone', 'fax'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region' => 'Region',
            'district' => 'District',
            'village' => 'Village',
            'street' => 'Street',
            'postIndex' => 'Post Index',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSites()
    {
        return $this->hasMany(Site::className(), ['local_id' => 'id']);
    }
}
