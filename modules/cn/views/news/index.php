<?php
    use yii\helpers\Html;
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/news/index.css"); 
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/news/index.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">新闻中心</p>
    </div>
</div>

<div class="news-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/zh_cn/news?lang=zh_cn&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <div class="news-cont-wrap">
        <?php foreach ($news_list as $lrow) : ?>
        <dl class="clearfix" data-url="/zh_cn/news/<?= $lrow['id'] ?>?ca_f=<?= $lrow['category'] ?>">
            <dt>
                <img src="<?= $lrow['cover'] ?>" >
            </dt>
            <dd>
                <div class="left-dd">
                    <a target="_blank" href="javascript:void(0)"><?= Html::encode($lrow['title']) ?></a>
                    <p class="p1"><?= Html::encode($lrow['desc']) ?></p>
                    <p class="p2"><?= date('Y-m-d H:i:s', $lrow['ctime']) ?></p>
                </div>
                <div class="dd-more">
                </div>
            </dd>
        </dl>
        <?php endforeach ?>
    </div>

    <div class="new-page-more">
        <?=
            LinkPager::widget([
                'pagination' => $pages,
                'nextPageLabel' => 'N',
                'prevPageLabel' => 'L',
                'options' => ['class' => 'xkkb-pagination'],
            ]);
        ?>
    </div>
</div>