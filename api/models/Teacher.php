<?php

namespace app\models;

use yii\db\ActiveRecord;

class Teacher extends ActiveRecord
{
    // 明确列出每个字段，适用于你希望数据表或模型属性
    //修改时不导致你的字段修改（保持后端API兼容性）
    public function fields()
    {
        return [
            // 字段名和属性名相同
            'id',
            // 字段名为"email", 对应的属性名为"email_address"
            'name',
            'sexName' => function ($model) {
                return $model->sex == 1 ? '男' : '女';
            },
            // 字段名为"name", 值由一个PHP回调函数定义
            'intro' => function ($model) {
                return $model->id . ' ' . $model->name . ' ' . $model->sex;
            },
        ];
    }
}