window.onload = function(){
    var productPage = {
        init: function(){
            this.getDom();
            this.hoverIcon();
        },

        getDom: function(){
            this.categoryBox = $('.product-inner-item-icon');
        },

        hoverIcon: function(){
            var me = this;

            me.categoryBox.bind('mouseenter', function(){
                var hoverIcon = $(this).parent().attr('data-houver-icon');
                var isActive = $(this).parent().attr('data-active');

                if(isActive == 1) return;
                $(this).attr('style','background:url('+hoverIcon+') no-repeat center;');
            }).bind('mouseleave', function(){
                var icon = $(this).parent().attr('data-icon');
                var isActive = $(this).parent().attr('data-active');

                if(isActive == 1) return;
                $(this).attr('style','background:url('+icon+') no-repeat center;');
            });

        },

        
        },
    };

    productPage.init();

}