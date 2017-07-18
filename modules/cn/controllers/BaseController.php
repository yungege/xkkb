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



}
