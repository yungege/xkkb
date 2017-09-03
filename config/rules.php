<?php
    return [
        // 公共模块
        // '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
        // '<controller:\w+>/<action:\w+>/<id:\d+>'     => '<controller>/<action>',
        // '<controller:\w+>/<action:\w+>'              => '<controller>/<action>',
        // '<module:\w+>/<action:\w+>/<id:\d+>'         => '<module>/default/<action>',
        // '<module:\w+>/<controller:\w+>'              => '<module>/<controller>/index',
        // '<module:\w+>'                               => '<module>/index/index',

        // 中文模块
        'zh_cn'                     => 'cn/index/index',
        'zh_cn/aboult'              => 'cn/index/aboult',
        'zh_cn/product'             => 'cn/product/index',
        'zh_cn/product/search'      => 'cn/product/search',
        'zh_cn/product/<id:\d+>'    => 'cn/product/detail',
        'zh_cn/product/more/<ca_f:\d+>/<ca_s:\d+>'    => 'cn/product/seclist',
        'zh_cn/product/tag/<ca_f:\d+>/<tag:\d+>'      => 'cn/product/tag',
        'zh_cn/news'                => 'cn/news/index',
        'zh_cn/news/<id:\d+>'       => 'cn/news/detail',
        'zh_cn/support'             => 'cn/support/index',
        'zh_cn/support/<id:\d+>'    => 'cn/support/detail',
        'zh_cn/support/service'     => 'cn/support/service',
        'zh_cn/contact'             => 'cn/contact/index',
        'zh_cn/case'                => 'cn/case/index',
        'zh_cn/case/<id:\d+>'       => 'cn/case/detail',
        '/cont'                     => 'cn/index/cont',

        // English模块
        'en'                        => 'en/index/index',
        'en/aboult'                 => 'en/index/aboult',
        'en/product'                => 'en/product/index',
        'en/product/search'         => 'en/product/search',
        'en/product/<id:\d+>'       => 'en/product/detail',
        'en/product/more/<ca_f:\d+>/<ca_s:\d+>'    => 'en/product/seclist',
        'en/product/tag/<ca_f:\d+>/<tag:\d+>'      => 'en/product/tag',
        'en/news'                   => 'en/news/index',
        'en/news/<id:\d+>'          => 'en/news/detail',
        'en/support'                => 'en/support/index',
        'en/support/<id:\d+>'       => 'en/support/detail',
        'en/support/service'        => 'en/support/service',
        'en/contact'                => 'en/contact/index',
        'en/case'                   => 'en/case/index',
        'en/case/<id:\d+>'          => 'en/case/detail',
        'en/cont'                   => 'en/index/cont',
    ];
?>