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

    $this->title = 'Contact Us';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">Contact Us</p>
    </div>
</div>

<div class="contact-wrap">
    <h1>Contact Us</h1>

    <div class="contact-cont">
        <div class="contact-left">
            <h4>Beijing Xinke Kaibang Technology Co. Ltd.</h4>
            <div class="contact-type contact-addr-div contact-addr">
                <p>Addr：</p>
                <p>Changping District, Beijing, Machikou Industrial Park on both sides of the Straits</p>
                <p style="padding-top: 5px;">A1801Room, duhui building, baoan district, shenzhen city</p>
            </div>
            <!-- <p class="contact-type contact-addr">Addr：Changping District, Beijing, Machikou Industrial Park on both sides of the Straits</p> -->
            <p class="contact-type contact-tel">Tel：010-62633320</p>
            <p class="contact-type contact-cz">Fax：010-62611638</p>
            <p class="contact-type contact-wx">Wechat：13031060853</p>
        </div>
        <div class="contact-right">
            <div id="allmap"></div>
        </div>
    </div>
    
</div>
