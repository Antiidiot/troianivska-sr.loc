<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use common\models\Images;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property int $status
 * @property int $category_id
 * @property int $images_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Category $category
 * @property Images $images
 */
class Posts extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

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
            [['content'], 'string'],
            [['status', 'category_id', 'images_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['images_id'], 'exist', 'skipOnError' => true, 'targetClass' => Images::className(), 'targetAttribute' => ['images_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок статті',
            'description' => 'Короткий опис',
            'content' => 'Текст статті',
            'status' => 'Статус: опублікована | не опублікована',
            'category_id' => 'Розділ статті',
            'images_id' => 'Назва картинки',
        ];
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return ($this->images->alias) ? '/img/uploads/'.$this->images->alias : '/img/uploads/photo.png';
    }


    /**
     * @return mixed
     */
    public static function getCategoryList()
    {
        return Category::find()->select(['nameCategory', 'id'])->indexBy('id')->column();
    }

    /**
     * @return mixed
     */
    public static function getImgListAlias()
    {
        return Images::find()->select(['alias', 'id'])->indexBy('id')->column();
    }


    public static function getImgListName()
    {
        return Images::find()->select(['name', 'id'])->indexBy('id')->column();
    }
    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->hasOne(Images::className(), ['id' => 'images_id']);
    }
}
