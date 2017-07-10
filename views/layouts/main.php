<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/imgs/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="header">
        <div class="lang">
            <span>选择国家/语言</span>
            <span class="lang-sline">|</span>
            <select name="lang">
                <option value="cn">中国-简体中文</option>
                <option value="en">English</option>
            </select>
        </div>
        <div class="meau">
            <span class="logo"><a href="/cn"><img src="/imgs/logo.png"></a></span>
            <ul class="meau-first">
                <li>
                    <a href="/cn">首页</a>
                    <div class="meau-second-wrap">
                        <ul class="meau-second">
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="/imgs/0_08.jpg" width="100" height="112">
                                    <div>
                                        <i>*</i>
                                        <span>公司简介</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="">关于我们</a>
                </li>
                <li>
                    <a href="">产品展示</a>
                </li>
                <li>
                    <a href="">应用案例</a>
                </li>
                <li>
                    <a href="">技术支持</a>
                </li>
                <li>
                    <a href="">新闻中心</a>
                </li>
                <li>
                    <a href="">联系我们</a>
                </li>
            </ul>
            <div class="search">
                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                <input type="text" name="search">
            </div>
        </div>
    </div>

    <div class="content">
        <?= $content ?>
    </div>

    <div class="footer">
        
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>