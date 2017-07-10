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