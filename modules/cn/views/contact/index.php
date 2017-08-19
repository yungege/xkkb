<?php
    use app\assets\AppAsset;
    AppAsset::register($this);
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/contact/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addCss($this, 'http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css');
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    AppAsset::addScript($this, 'http://api.map.baidu.com/api?v=2.0&ak=KUkNWUT6oWTdAk9XpGPcGM7HGEU42h1i');
    AppAsset::addScript($this, 'http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js');
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/contact/index.js");

    $this->title = '联系我们';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">联系我们</p>
    </div>
</div>

<div class="contact-wrap">
    <h1>联系我们</h1>

    <div class="contact-cont">
        <div class="contact-left">
            <h4>北京新科凯邦科技有限公司</h4>
            <div class="contact-type contact-addr-div contact-addr">
                <p>地址：北京市昌平区马池口两岸共盈工业园西二区</p>
                <p style="padding-left: 3em;padding-top: 5px;">深圳市宝安区都汇大厦A座1801室</p>
            </div>
            <p class="contact-type contact-tel">电话：010-62633320</p>
            <p class="contact-type contact-cz">传真：010-62611638</p>
            <p class="contact-type contact-wx">微信：13031060853</p>
        </div>
        <div class="contact-right">
            <div id="allmap"></div>
        </div>
    </div>
    
</div>
