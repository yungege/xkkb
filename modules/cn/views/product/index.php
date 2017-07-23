<?php
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/product/index.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/product/index.js");

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

    <div class="product-list">
        <p class="product-title">
            <a href="">层绞式通信光缆</a>
        </p>

        <div class="product-cj">
            <ul class="product-cj-ul">
                <li>
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
                <li>
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
                <li style="margin-bottom: 12px;">
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
                <li style="margin-bottom: 12px;">
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
            </ul>
        </div>

        <a href="#" class="look-more">查看更多...</a>
    </div>

    <div class="product-list">
        <p class="product-title">
            <a href="">中心束管式通信光缆</a>
        </p>

        <div class="product-cj">
            <ul class="product-cj-ul">
                <li style="margin-bottom: 12px;">
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
                <li style="margin-bottom: 12px;">
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
            </ul>
        </div>

        <a href="#" class="look-more">查看更多...</a>
    </div>
    
    <div class="product-list" style="margin-bottom: 10;">
        <p class="product-title">
            <a href="">电力光缆</a>
        </p>

        <div class="product-cj">
            <ul class="product-cj-ul">
                <li style="margin-bottom: 12px;">
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
                <li style="margin-bottom: 12px;">
                    <div class="product-li-left" style="background-image: url(/cn/product/xp.jpg);">
                    </div>
                    
                    <div class="product-li-right">
                        <h4>层绞式铠装通信光缆</h4>
                        <span><i></i>型号：GYTA</span><br>
                        <span><i></i>敷设方式：管道、架空</span>
                    </div>
                    <a href="#" class="product-more">查看详情</a>
                </li>
            </ul>
        </div>

        <a href="#" class="look-more">查看更多...</a>
    </div>

    <div class="product-page-more">
        <?= LinkPager::widget([
                'pagination' => $pages,
                'nextPageLabel' => 'L', 
                'prevPageLabel' => 'N',
                // 'firstPageLabel' => '首页', 
                // 'lastPageLabel' => '尾页',
            ]);
        ?>
    </div>
</div>