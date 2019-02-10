<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $nameCategory
 * @property string $link
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Posts[] $posts
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nameCategory', 'link'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nameCategory', 'link'], 'string', 'max' => 255],
            [['nameCategory'], 'unique'],
            [['link'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameCategory' => 'Назва розділу',
            'link' => 'Посилання',
            'created_at' => 'Дата створення',
            'updated_at' => 'Дата редагування',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Posts::className(), ['category_id' => 'id']);
    }
}
