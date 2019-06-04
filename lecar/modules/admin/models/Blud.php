<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "blud".
 *
 * @property integer $id
 * @property string $name
 * @property string $ing1
 * @property string $ing2
 * @property string $ing3
 * @property string $ing4
 * @property string $ing5
 */
class Blud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'ing1', 'ing2', 'ing3', 'ing4', 'ing5'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ing1' => 'Ing1',
            'ing2' => 'Ing2',
            'ing3' => 'Ing3',
            'ing4' => 'Ing4',
            'ing5' => 'Ing5',
        ];
    }
}
