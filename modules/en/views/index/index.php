<?php
    use app\assets\AppAsset;
    $this->title = '新科凯邦';
?>
<div class="banner-wrap">
    <div class="js-silder">
       <div class="silder-scroll">
            <div class="silder-main">
            <?php foreach ($banner as $bkey => $brow) : ?>
                <div class="silder-main-img" data-color="<?= $brow['meau_color'] ?>">
                    <a href="<?= $brow['url'] ?>">
                        <img src="<?= $brow['img'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach ?>
            </div>
        </div>
        <div class="js-silder-ctrl"></div>
    </div>
</div>

<div class="pro-list-wrap">
    <div class="pro-list-div">
        <div class="pic">
            <h4>新闻中心</h4>
            <img src="<?= $newsList[0]['cover'] ?>" style="margin-top: -45px;">
        </div>
        <div class="pic-content">
            <ul>
                <?php foreach ($newsList as $news): ?>
                    <li data-img="<?= $news['cover'] ?>"><a href="/zh_cn/news/<?= $news['id'] ?>?ca_f=<?= $news['category'] ?>">•&nbsp;<?= $news['title'] ?></a></li>
                <?php endforeach ?>
                <li><a href="/zh_cn/news"><img src="/cn/index/more.png" alt="更多..."></a></li>
            </ul>
        </div>
    </div>
    <div class="pro-list-div">
        <div class="pic">
            <h4>关于我们</h4>
            <img src="/cn/index/2.jpg">
        </div>
        <div class="pic-content">
            <ul>
                <li data-img="/cn/index/2.jpg"><a href="/zh_cn/aboult">•&nbsp;新科凯邦 激情欢聚.乐享草原</a></li>
                <!-- <li><a href=""><img src="/cn/index/more.png" alt="更多..."></a></li> -->
            </ul>
        </div>
    </div>
    <div class="pro-list-div">
        <div class="pic" style="">
            <h4>解决方案</h4>
            <img src="<?= $supList[0]['pic'] ?>" style="height: 184px;max-width: none;margin-left: -220px;">
        </div>
        <div class="pic-content">
            <ul>
                <?php foreach ($supList as $news): ?>
                    <li data-img="<?= $news['pic'] ?>"><a href="/zh_cn/support/<?= $news['id'] ?>">•&nbsp;<?= $news['title'] ?></a></li>
                <?php endforeach ?>
                <li><a href="/zh_cn/support"><img src="/cn/index/more.png" alt="更多..."></a></li>
            </ul>
        </div>
    </div>
    <div class="pro-list-div" style="margin-right: 0;">
        <div class="pic">
            <h4>应用案例</h4>
            <img src="<?= $caseList[0]['cover'] ?>" style="margin-top: -45px;">
        </div>
        <div class="pic-content">
            <ul>
                <?php foreach ($caseList as $case): ?>
                    <li data-img="<?= $case['cover'] ?>"><a href="/zh_cn/case/<?= $case['id'] ?>">•&nbsp;<?= $case['title'] ?></a></li>
                <?php endforeach ?>
                <li><a href="/zh_cn/case"><img src="/cn/index/more.png" alt="更多..."></a></li>
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