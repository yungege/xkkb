<?php
    use app\assets\AppAsset;
?>
<div class="banner-wrap">
    <div class="js-silder">
       <div class="silder-scroll">
            <div class="silder-main">
                <div class="silder-main-img">
                    <img src="/cn/index/banner_01.jpg" alt="">
                </div>
                <div class="silder-main-img">
                    <img src="/cn/index/banner_01.jpg" alt="">
                </div>
                <div class="silder-main-img">
                    <img src="/cn/index/banner_01.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="js-silder-ctrl"></div>
    </div>
</div>
<div class="pro-list-wrap">
    <div class="pro-list-div">
        <div class="pic">
            <img src="/cn/index/1.jpg">
        </div>
        <div class="pic-content">
            <ul>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
            </ul>
        </div>
    </div>
    <div class="pro-list-div">
        <div class="pic">
            <img src="/cn/index/2.jpg">
        </div>
        <div class="pic-content">
            <ul>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
            </ul>
        </div>
    </div>
    <div class="pro-list-div">
        <div class="pic">
            <img src="/cn/index/3.jpg">
        </div>
        <div class="pic-content">
            <ul>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
            </ul>
        </div>
    </div>
    <div class="pro-list-div">
        <div class="pic">
            <img src="/cn/index/4.jpg">
        </div>
        <div class="pic-content">
            <ul>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
                <li><a href="">2017年世界大战即将开始印度吃翔结束</a></li>
            </ul>
        </div>
    </div>
</div>
<?php
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/jQueryLbWy/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/index/index.css"); 
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/widget/jQueryLbWy/wySilder.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/index/index.js");
?>