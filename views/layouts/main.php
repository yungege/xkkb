<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--ie使用edge渲染模式-->
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <meta name="renderer" content="webkit"><!--360渲染模式-->
    <meta name="format-detection" content="telephone=notelphone=no, email=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="apple-touch-fullscreen" content="yes"/><!-- 是否启用 WebApp 全屏模式，删除苹果默认的工具栏和菜单栏 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/><!-- 设置苹果工具栏颜色:默认值为 default，可以定为 black和 black-translucent-->
    <meta http-equiv="Cache-Control" content="no-siteapp" /><!-- 不让百度转码 -->
    <meta name="HandheldFriendly" content="true"><!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
    <meta name="MobileOptimized" content="320"><!-- 微软的老式浏览器 -->
    <meta name="screen-orientation" content="portrait"><!-- uc强制竖屏 -->
    <meta name="x5-orientation" content="portrait"><!-- QQ强制竖屏 -->
    <meta name="browsermode" content="application"><!-- UC应用模式 -->
    <meta name="x5-page-mode" content="app"><!-- QQ应用模式 -->
    <meta name="msapplication-tap-highlight" content="no"><!-- windows phone 点击无高光 -->

    <link rel="icon" href="/imgs/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
    $meauLayout = $this->params['meauList'];
?>
<div class="wrap">
    <!-- <div class="fix-meau-wrap">
        <div class="fix-meau-div">
            <ul class="fix-meau-ul" id="fix-meau-ul-1">
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
                <li style="margin-right: 0">
                    <a href="">
                        <img src="/imgs/0_08.jpg" width="100" height="112">
                        <div>
                            <i>*</i>
                            <span>公司简介</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="fix-meau-ul" id="fix-meau-ul-2">
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
                <li style="margin-right: 0">
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
    </div> -->
    <div class="header">
        <div class="lang">
            <span>选择国家/语言</span>
            <span class="lang-sline">|</span>
            <select name="lang">
                <option value="cn">中国-简体中文</option>
                <option value="en">English</option>
            </select>
        </div>
        <div class="xkkb-meau">
            <div class="logo"><a href="/cn"><img src="/imgs/logo.png"></a></div>
            <!-- <ul class="meau-first" style="border-bottom:1px solid red;">
            <?php foreach ($meauLayout as $key => $row): ?>
                <?php if($key < 7): ?>
                <li>
                    <a href="<?= $row['url'] ?>"><?= $row['meau'] ?></a>
                </li>
                <?php endif ?>
            <?php endforeach ?>
            </ul> -->
            <div class="meaus-wrap">
                <div class="meaus-wrap-meau">
                <?php foreach ($meauLayout as $key => $row): ?>
                    <?php if($key < 7): ?>
                    <a href="<?= $row['url'] ?>"><?= $row['meau'] ?></a>
                    </a>
                    <?php endif ?>
                <?php endforeach ?>
                </div>
                <div class="meaus-wrap-hide">
                    <?php
                        ob_start();
                        foreach ($meauLayout as $subKey => $subRow) {
                            $ul = '<ul class="fix-meau-ul" id="fix-meau-ul-'.($subKey+1).'" '.(!empty($subRow['show']) ? 'data-item="1"' : 'data-item="0"').'>';
                            if(!empty($subRow['show'])){
                                foreach ($subRow['show'] as $sKey => $sRow) {
                                    if($sKey == (count($subRow['show'])-1)){
                                        $margin = "margin-right:0;";
                                    }
                                    else{
                                        $margin = '';
                                    }
                                    $li =  '<li style="'.$margin.'"><a href="'.$sRow['link'].'"><img src="'.$sRow['url'].'" width="100" height="120"><div><i>*</i><span>'.Html::encode($sRow['title']).'</span></div></a></li>';
                                     $ul .= $li;
                                }
                            }
                            $ul .= '</ul>';
                            echo $ul;
                        }
                        ob_end_flush();
                    ?>
                </div>
            </div>

            <div class="search">
                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                <input type="text" name="search">
            </div>
        </div>
    </div>

    <div class="content-wrap">
        <?php echo $content; ?>
    </div>

    <div class="footer-wrap">
        <div class="footer-meau">
            <div class="about">
                <h5>关于我们</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="">公司简介</a>
                    </li>
                    <li>
                        <a href="">公司文化</a>
                    </li>
                    <li>
                        <a href="">相关资源</a>
                    </li>
                </ul>
            </div>
            <div class="product">
                <h5>产品展示</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="">公司简介</a>
                    </li>
                    <li>
                        <a href="">公司文化</a>
                    </li>
                    <li>
                        <a href="">相关资源</a>
                    </li>
                    <li>
                        <a href="">公司简介</a>
                    </li>
                    <li>
                        <a href="">公司文化</a>
                    </li>
                    <li>
                        <a href="">相关资源</a>
                    </li>
                </ul>
            </div>
            <div class="show">
                <h5>应用案例</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="">机房应用</a>
                    </li>
                    <li>
                        <a href="">监控应用</a>
                    </li>
                </ul>
            </div>
            <div class="show">
                <h5>技术支持</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="">解决方案</a>
                    </li>
                    <li>
                        <a href="">客户服务</a>
                    </li>
                </ul>
            </div>
            <div class="news">
                <h5>技术支持</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="">行业新闻</a>
                    </li>
                    <li>
                        <a href="">新科凯邦</a>
                    </li>
                </ul>
            </div>
            <div class="contact">
                <h5>联系我们</h5>
                <div class="phone">
                    <span>全国服务热线：</span>
                    <i class="tel"><tel>010-62633320</tel></i>
                    <p class="ewm">
                        <img src="/imgs/ewm.jpg" width="120">
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="common-info">
        <p>地址：北京市昌平区马池口两岸共盈工业园西二区</p>
        <p>北京新科凯邦科技有限公司&emsp;版权所有&emsp;京ICP备14060324号-2</p>
        <p>电话：010-62633320&emsp;手机：13031060853&emsp;传真：010-62611638</p>
    </div>
</div>
<?php $this->endBody() ?>
<script>
    !(function(){
        var overArea = $('.meaus-wrap');
        var meaus = $('.meaus-wrap-meau a');
        var meausWrap = $('.meaus-wrap-hide');

        overArea.unbind().bind('mouseenter', function(){
            meausWrap.addClass('meaus-wrap-show');
        }).bind('mouseleave', function(){
            meausWrap.removeClass('meaus-wrap-show');
        })

        meaus.each(function(i){
            var className = 'fix-meau-ul-' + (i+1);

            $(this).unbind().bind('mouseenter', function(){
                $('.fix-meau-ul').fadeOut(0);
                $('#'+className).fadeIn(200);
            })
        })

    })()
</script>
</body>
</html>
<?php $this->endPage() ?>