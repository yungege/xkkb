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
    <meta content="width=device-width,user-scalable=no" id="viewport" name="viewport">
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

    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="/widget/mslider/css/vc-ie8.css" media="screen"><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="/widget/mslider/css/ie7.css" type="text/css" media="screen"/><![endif]-->

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style type="text/css">
        body{
            font-family: "ProximaNova,Arial,Sans-serif";
        }
        .footer-meau > div{
            margin-right: 60px;
        }
    </style>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
    $meauLayout = $this->params['meauList'];
?>
<div class="wrap">
    <div class="header">
        <div class="lang">
            <span>Country/Lang</span>
            <span class="lang-sline">|</span>
            <select name="lang">
                <option value="en">English</option>
                <option value="zh_cn">中国-简体中文</option>
            </select>
        </div>
        <div class="xkkb-meau">
            <div class="logo"><a href="/en"><img src="/imgs/logo.png"></a></div>

            <div class="meaus-wrap">
                <div class="meaus-wrap-meau">
                <?php foreach ($meauLayout as $key => $row): ?>
                    <?php if($key < 7): ?>
                    <a href="<?= $row['url'] ?>" class="<?= $key == $this->params['activeMeau'] ? 'layout-meau-active' : '' ?>">
                        <?= $row['en_meau'] ?>
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
                                    $li =  '<li style="'.$margin.'"><a href="'.$sRow['link'].'"><img src="'.$sRow['url'].'" width="100" height="120"><div><span style="display:inline-block;line-height:18px;padding-top:15px;width:100px;">'.Html::encode($sRow['en_title']).'</span></div></a></li>';
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
                <i class="fa fa-search" aria-hidden="true"></i>
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
                <h5>About us</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="/en/aboult">Company</a>
                    </li>
                    <li>
                        <a href="/en/aboult">Culture</a>
                    </li>
                    <li>
                        <a href="/en/aboult">Related resources</a>
                    </li>
                </ul>
            </div>
            <div class="product">
                <h5>Product</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="/en/product">Outdoor Optical Fiber Cable</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994100.6915&ca_f=2">Indoor Optical Fiber Cable</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994259.8186&ca_f=3">Datasheet Center</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994278.4116&ca_f=4">FTTH</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994299.8783&ca_f=5">Optical Patch Cord</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994301.5977&ca_f=6">Optical Transmission Equipment</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994308.7209&ca_f=7">Integrated Wiring</a>
                    </li>
                    <li>
                        <a href="/en/product?lang=en&ver=1501994314.445&ca_f=8">Security Monitoring</a>
                    </li>
                </ul>
            </div>
            <div class="show">
                <h5>Application</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="/en/case">Data Center</a>
                    </li>
                    <li>
                        <a href="/en/case">Monitoring</a>
                    </li>
                </ul>
            </div>
            <div class="show">
                <h5>Supporing</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="/en/support">Solution</a>
                    </li>
                    <li>
                        <a href="/en/support/service?lang=en&ver=1501994359.7889&ca_f=12">Service</a>
                    </li>
                </ul>
            </div>
            <div class="news">
                <h5>News</h5>
                <ul class="footer-ul">
                    <li>
                        <a href="/en/news">Industry News</a>
                    </li>
                    <li>
                        <a href="/en/news?lang=en&ver=1501994391.4437&ca_f=10">Company News</a>
                    </li>
                </ul>
            </div>
            <div class="contact">
                <h5 style="width: 54px;">Contact</h5>
                <ul class="footer-ul">
                    <li style="color:#6fafe8;" id="show-div">Leaving Message</li>
                </ul>
                <div class="phone">
                    <span>Hotline：</span>
                    <a href="tel:010-62633320">010-62633320</a>
                    <p class="ewm">
                        <img src="/imgs/ewm.jpg" width="120">
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="common-info">
        <p>Address：Changping District, Beijing,Machikou Industrial Park on both sides of the Straits</p><!-- 北京市昌平区马池口两岸共盈工业园西二区 -->
        <p>Beijing Xinkekaibang Technology Co. Ltd.&emsp;Copyright&emsp;京ICP备14060324号-2</p>
        <p>Tel：010-62633320&emsp;Mobile：13031060853&emsp;Fax：010-62611638</p>
    </div>
</div>
<div class="fix-contact">
    <div class="fix-contact-inner">
        <form name="cont-form">
            <div class="int-div">
                <input type="text" name="name" id="name" placeholder="姓名">
                <span class="int-name"></span>
            </div>
            <div class="int-div">
                <input type="text" name="mobile" id="mobile" placeholder="手机 (必填)">
                <span class="int-mobile"></span>
            </div>
            <div class="int-div">
                <input type="text" name="email" id="email" placeholder="Email">
                <span class="int-email"></span>
            </div>
            <div class="int-div">
                <input type="text" name="address" id="address" placeholder="地址">
                <span class="int-addr"></span>
            </div>
            <div class="int-div">
                <textarea rows="4" name="desc" id="desc" placeholder="选择成就未来 财富就此开始"></textarea>
            </div>
            <button type="button" id="sub">Send</button>
            <button type="button" id="clo">Close</button>
        </form>
    </div>
</div>

<!-- 侧边固定菜单 -->
<div class="fix-right-wrmp">
    <ul>
        <li class="fix-go-top">Top</li>
        <li class="fix-at-me">@Me</li>
    </ul>
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

        var cont = {

            init: function(){
                this.getDom();
                this.showDialog();
                this.hideDialog();
                this.postData();
                this.search();
                this.showOrHideTopBtn();
                this.getDialog();
                this.selectLang();
            },
            getDom:function(){
                this.form = $('form[name=cont-form]');
                this.showBtn = $('#show-div');
                this.subBtn = $('#sub');
                this.nameInt = $('#name');
                this.mobileInt = $('#mobile');
                this.emailInt = $('#email');
                this.addrInt = $('#address');
                this.descInt = $('#desc');
                this.formArea = $('.fix-contact');
                this.closeBtn = $('#clo');
                this.searchBtn = $('.fa-search');
                this.searchVal = $('input[name=search]');
                this.toTop = $('.fix-go-top');
                this.showAtMe = $('.fix-at-me');
                this.selectLangBtn = $('select[name=lang]');
            },
            showDialog: function(){
                var me = this;

                me.showBtn.unbind().bind('click', function(){
                    me.formArea.fadeIn(200);
                });
            },
            hideDialog: function(){
                var me = this;

                me.closeBtn.unbind().bind('click', function(){
                    me.formArea.fadeOut(200);
                });
            },
            postData: function(){
                var me = this;

                me.subBtn.unbind().bind('click', function(){
                    var data = me.form.serialize();
                    $.post('/cont', data, function(json){
                        if(json.code == 200){
                            alert('感谢留言,工作人员会尽快与您联系.');
                            me.formArea.fadeOut(200);
                        }
                        else{
                            alert(json.msg);
                        }
                        return false;
                    });
                });
            },

            search: function(){
                var me = this;
                me.searchBtn.unbind().bind('click', function(){
                    var words = $.trim(me.searchVal.val());
                    if(!words) return false;

                    window.location.href = '/en/product/search?kw='+words;
                });
            },

            showOrHideTopBtn: function(){
                var me = this;
                
                $(window).scroll(function(){
                    var sc = $(window).scrollTop();
                    if(sc >= 520){
                        me.toTop.show();
                    }
                    else{
                        me.toTop.hide();
                    }
                });

                me.toTop.unbind().bind('click', function(){
                    $('body,html').animate({scrollTop:0},1000,'easeInOutQuart');
                });
                
            },

            getDialog: function(){
                var me = this;
                me.showAtMe.unbind().bind('click', function(){
                    me.showBtn.trigger('click');
                })
            },

            selectLang: function(){
                var me = this;
                me.selectLangBtn.unbind().bind('change', function(){
                    var lang = $(this).val(),
                        url = window.location.href;
                    url = url.replace('en', lang);
                    window.location.href = url;
                });
            },
        };

        cont.init();

    })()

</script>
</body>
</html>
<?php $this->endPage() ?>