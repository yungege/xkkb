<?php
use app\assets\AppAsset;
use yii\widgets\LinkPager;
use yii\helpers\Html;

AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/product/index.css");
AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/product/index.js");

$this->title = $sTitle;

?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">产品展示</p>
    </div>
</div>

<div class="product-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/zh_cn/product?lang=zh_cn&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <div class="pro-tag">
        <p>热门标签</p>
        <ul>
            <?php foreach ($tags as $tag): ?>
            <li><a href="/zh_cn/product/tag/<?= $active_category ?>/<?= $tag['id'] ?>?lang=zh_cn" class="<?= Yii::$app->request->get('tag') == $tag['id'] ? 'a-active' : '' ?>"><?= $tag['tag'] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="product-list">
        <p class="product-title">
            <a href=""><?= Html::encode($sTitle) ?></a>
        </p>

        <div class="product-cj">
            <ul class="product-cj-ul">
                <?php foreach ($list as $pky => $pval): ?>
                <li>
                    <div class="product-li-left">
                        <a style="background-image: url(<?= $pval['pro_cover_pic'] ?>);" class="product-li-left-a" href="/zh_cn/product/<?= $pval['id'] ?>?ca_f=<?= $pval['pro_first_type'] ?>&ca_s=<?= $pval['pro_second_type'] ?>&lang=zh_cn&ver=<?= microtime(true) ?>">
                        </a>
            </div>

                    <div class="product-li-right">
                        <h4><?= $pval['pro_name'] ?></h4>
                        <span><i></i>型号：<?= $pval['pro_model'] ?></span><br>
                        <span><i></i><?= $pval['pro_fs_type'] ?></span>
                    </div>
                    <a href="/zh_cn/product/<?= $pval['id'] ?>?ca_f=<?= $pval['pro_first_type'] ?>&ca_s=<?= $pval['pro_second_type'] ?>&lang=zh_cn&ver=<?= microtime(true) ?>" class="product-more">查看详情</a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

    <div class="product-page-more">
        <?= LinkPager::widget([
                'pagination' => $page,
                'nextPageLabel' => 'L', 
                'prevPageLabel' => 'N',
                'firstPageLabel' => '首页', 
                'lastPageLabel' => '尾页',
                'options' => ['class' => 'xkkb-pagination'],
            ]);
        ?>
    </div>
</div>
