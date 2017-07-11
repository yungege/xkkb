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
    <!-- <img src="/cn/index/banner_01.jpg"> -->
</div>
<?php
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/jQueryLbWy/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/index/index.css"); 
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/widget/jQueryLbWy/wySilder.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/index/index.js");
?>