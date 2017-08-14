<?php
    use app\assets\AppAsset;
    
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/support/service.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    // AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/support/service.js");
    $c = Yii::$app->request->get('ca_f');

    $this->title = '技术支持.客户服务';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">Service</p>
    </div>
</div>

<div class="support-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="<?= ($fcl['id'] == 12) ? ('/en/support/service?lang=en&ver='.microtime(true).'&ca_f='.$fcl['id']) : ('/en/support?lang=en&ver='.microtime(true).'&ca_f='.$fcl['id']) ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['en_cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <div class="support-pic">
        <div class="support-pic-left">
            <img src="/cn/support/khfup.jpg">
        </div>
        <div class="support-pic-right">
            <h3 style="margin-bottom:50px;">Customer Service</h3>
            <p class="title-p">
                Company uphold - scientific and technological innovation, integrity services, continuous improvement, and meet the quality policy of users, adhere to the "customer first, quality first" principle
            </p>
            <p class="cont-p">
                Since its inception, we have been unremitting efforts, with superior product quality performance, good brand reputation and strong price competitiveness, has established a stable and extensive customer base. We usually serve our customers with our own sales and customer service. Specifically, in the three major operators, we set up offices in Beijing to provide customer support and understand customer needs.
            </p>
            <p class="cont-p">
                We have also set up sales support department to answer our customers' questions about our products. By assigning not only sales representatives, but also assigning technical personnel to local service teams to better respond to customer technical requests. The local service team usually responds within 24 hours and resolves customer service requests within 48 hours. We operate a telephone service center that provides all-weather service. In addition, our joint venture company and joint venture company are all over China, so that we can meet the needs of our customers more quickly.
            </p>
            <p class="tel-p">
                Tel: <a href="tel:010-62633320">010-62633320</a>&emsp;&emsp;
                Mobile：<a href="tel:13031060853">13031060853</a>&emsp;&emsp;
                Fax：<a href="tel:010-62611638">010-62611638</a>
            </p>
        </div>
    </div>
</div>