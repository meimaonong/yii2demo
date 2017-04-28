<?php

namespace app\controllers;

use yii\rest\ActiveController;

class TeacherController extends ActiveController
{
    public $modelClass = 'app\models\teacher';

    public function actions()
    {
        $actions = parent::actions();

        // 禁用"delete" 和 "create" 动作
        unset($actions['delete'], $actions['create']);

        // 使用"prepareDataProvider()"方法自定义数据provider 
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }



    public function prepareDataProvider()
    {
    	print_r(['name'=>'qdd']);exit;
        return ['name'=>'qcc', 'sex'=>1];
    }
}