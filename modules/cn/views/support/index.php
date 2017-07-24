<?php
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;
    
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/support/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    // AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/support/index.js");
    $c = Yii::$app->request->get('ca_f');
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">技术支持</p>
    </div>
</div>

<div class="support-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="<?= ($fcl['id'] == 12) ? ('/zh_cn/support/service?lang=zh_cn&ver='.microtime(true).'&ca_f='.$fcl['id']) : ('/zh_cn/support?lang=zh_cn&ver='.microtime(true).'&ca_f='.$fcl['id']) ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <div class="support-pic">
        <?php foreach ($support_list as $val) : ?>
            <div class="support-pic-list">
                <span><?= $val['title'] ?></span>
                <a href="/zh_cn/support/<?= $val['id'] ?>" target="__blank">
                    <img src="<?= $val['pic'] ?>">
                </a>
            </div>
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