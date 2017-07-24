<?php
    use app\assets\AppAsset;
    
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/support/service.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    // AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/support/service.js");
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
        <div class="support-pic-left">
            <img src="/cn/support/khfup.jpg">
        </div>
        <div class="support-pic-right">
            <h3>客户服务</h3>
            <p class="title-p">公司秉持—科技创新、诚信服务、持续改进、满足用户的质量方针坚持客户至上，品质先行的原则</p>
            <p class="cont-p">
                我们自成立以来一直不懈努力，凭借优越的产品质量性能、良好的品牌声誉及雄厚的价格竞争力，已经建立稳固而广泛的客户群。我们一般以自身的销售及客服人员服务客户，具体而言，在三大运营商方面，我们在北京设立办事处，专门提供客户支援并了解客户需求。
            </p>
            <p class="cont-p">
                我们还设立销售支持部，专门解答客户对于我们产品的疑问。我们通过不仅指派销售代表，更指派技术人员去到各地方服务团队，以便更为妥善地回应客户的技术请求。地方服务团队一般须于24小时内作出回应，并于48小时内解决客户服务请求。我们运营一个电话服务中心，提供全天候服务。此外，我们的合营公司和联营公司遍布中国，便于我们更快速地相应客户的需求。
            </p>
            <p class="tel-p">
                电话: <a href="tel:010-62633320">010-62633320</a>&emsp;&emsp;
                手机：<a href="tel:13031060853">13031060853</a>&emsp;&emsp;
                传真：<a href="tel:010-62611638">010-62611638</a>
            </p>
        </div>
    </div>
</div>