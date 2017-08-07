<?php

namespace app\modules\cn\controllers;

use Yii;
use yii\web\Controller;
use app\models\Meau;

class BaseController extends Controller
{
    
    public function init()
    {
        $meauList = (new Meau)->getMeauList();
        foreach ($meauList as &$row) {
            if(!empty($row['show'])){
                $row['show'] = unserialize($row['show']);
            }
        }

        $this->view->params['meauList'] = $meauList;
    }

    protected function out($data = array()){
        header('Content-type: application/json');
        $res = [
            'code' => 200,
            'msg' => '操作成功',
            'data' => $data
        ];
        exit(json_encode($res));
    }

    protected function error($msg = ''){
        header('Content-type: application/json');
        $res = [
            'code' => -1,
            'msg' => !empty($msg) ? $msg : '操作失败',
            'data' => []
        ];
        exit(json_encode($res));
    }

}
