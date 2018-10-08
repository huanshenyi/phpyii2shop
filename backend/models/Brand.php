<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string $name
 * @property string $intro
 * @property string $logo
 * @property int $sort
 * @property int $status
 */
class Brand extends \yii\db\ActiveRecord
{
    public $imgFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'],'required'],
            [['sort', 'status'], 'integer'],
            [['name', 'intro', 'logo'], 'string', 'max' => 255],
            ['imgFile','file','extensions'=>['jpg','png','gif']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ブランド名',
            'intro' => 'ブランド紹介',
            'logo' => 'ロゴ',
            'sort' => '配列',
            'status' => 'ステータス',
        ];
    }
}
