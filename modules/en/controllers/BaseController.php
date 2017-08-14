<?php

namespace app\modules\en\controllers;

use Yii;
use yii\web\Controller;
use app\models\Meau;

class BaseController extends Controller
{
    public $layout = 'main_en';
    
    public function init()
    {
        $module = Yii::$app->controller->module->id;
        $meauList = (new Meau)->getMeauList();
        foreach ($meauList as &$row) {
            $row['url'] = str_replace('zh_cn', 'en', $row['url']);
            if(!empty($row['show'])){
                $row['show'] = unserialize($row['show']);
                foreach ($row['show'] as &$sval) {
                    if(strpos($sval['link'],'zh_cn') === false){
                        $sval['link'] .= '/en';
                    }
                    else{
                        $sval['link'] = str_replace('zh_cn', 'en', $sval['link']);
                    }
                }
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
