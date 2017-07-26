<?php

namespace app\controllers;

class PatienterController extends \yii\web\Controller
{
    public function actionIndex($q)
    {
        $data = [
            ['id' => 1, 'realname' => '李珍', 'idencardnum' => '431339198010097761', 'treatmentnum' => '78901103'],
            ['id' => 2, 'realname' => '刘泽', 'idencardnum' => '177960199003163917', 'treatmentnum' => '91783301'],
            ['id' => 1, 'realname' => '郭帅', 'idencardnum' => '276513199606209103', 'treatmentnum' => '81901133'],
        ];
        echo json_encode($data);
        // Yii::$app->response->format = Response::FORMAT_JSON;
    }

}
