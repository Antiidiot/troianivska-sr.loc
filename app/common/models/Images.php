<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string $name
 * @property string $alt
 * @property string $alias
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Gallery[] $galleries
 * @property Posts[] $posts
 * @property Social[] $socials
 */
class Images extends ActiveRecord
{

    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
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
            [['name', 'alt'], 'required'],
            [['name', 'alt', 'alias', 'created_at', 'updated_at'], 'safe'],
            [['name', 'alt', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Назва картинки',
            'alt' => 'Опис',
            'image' => 'Завантажити картинку',
        ];
    }

    /**
     * @param UploadedFile $fileImg
     */
    public function loadImg(UploadedFile $fileImg)
    {
        $fileImg->saveAs($this->getPath().'/'.$this->getImgName($fileImg->name).'.'.$fileImg->extension);

        $this->alias=$this->getImgName($fileImg->name).'.'.$fileImg->extension;
    }

    public function getImgName($name)
    {
        return sha1($name);
    }

    public function getPath()
    {
        return Yii::getAlias('@saveFolderImg');
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return '/img/uploads/'.$this->alias;
    }

//    /**
//     * @return mixed
//     */
//    public function getGalleries()
//    {
//        return $this->hasMany(Gallery::className(), ['images_id' => 'id']);
//    }
//
//    /**
//     * @return \yii\db\ActiveQuery
//     */
//    public function getPosts()
//    {
//        return $this->hasMany(Posts::className(), ['images_id' => 'id']);
//    }
//
//    /**
//     * @return \yii\db\ActiveQuery
//     */
//    public function getSocials()
//    {
//        return $this->hasMany(Social::className(), ['images_id' => 'id']);
//    }
}
