<?php

namespace app\common\controllers;

use Yii;
use yii\web\Controller;

/**
* BaseController
*/
class BaseController extends Controller
{
	// post请求
	public function httpGet($apiAction, $params = []) {
		$response = Yii::$app->httpclient->get('http://api.p3.org' . $apiAction, $params);
		return json_decode($response, true);
	}

	// post请求
	public function httpPost($apiAction, $params = []) {
		$response = Yii::$app->httpclient->post('http://api.p3.org' . $apiAction, $params);
		return json_decode($response, true);
	}
	
}