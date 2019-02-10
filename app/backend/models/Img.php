<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.11.2018
 * Time: 21:25
 */

namespace backend\models;


use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 *
 * @property bool|string $path
 * @property string name
 */
class Img extends ActiveRecord
{
    public $img;
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'imgload';
    }

    public function rules()
    {
        return [
            [['alt','title','name'], 'string'],
            [['alt','title','name','img'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title'=>'title',
            'alt'=>'alt',
        ];
    }

    /**
     * @param UploadedFile $fileImg
     * @return string
     */
    public function loadImg(UploadedFile $fileImg)
    {
        $filename=$this->generateName($fileImg);
        $fileImg->saveAs($this->getPath().$filename);
        $this->name=$filename;
    }

    /**
     * @return bool|string
     */
    public function getPath()
    {
        return Yii::getAlias(('@loadImg'));
    }


    public function generateName($fileImg)
    {
        return strtolower(md5(uniqid($fileImg->basename))).'.'.$fileImg->extension;
    }
}