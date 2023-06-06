<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $category
 * @property string $name
 * @property string $price
 * @property int $price_old
 * @property string $img
 * @property string $description
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'category', 'price_old'], 'integer'],
            [['description'], 'string'],
            [['name', 'img'], 'string', 'max' => 100],
            [['price'], 'string', 'max' => 10],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Категория',
            'name' => 'Имя',
            'price' => 'Цена',
            'price_old' => 'Прошлая цена',
            'img' => 'Изображение',
            'description' => 'Примечание',
        ];
    }
}
