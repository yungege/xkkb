$(function(){
    var hoverMeau = {
        init: function(){
            this.getDom();
            this.hoverIconChange();
        },

        getDom: function(){
            this.categoryBox = $('.product-inner-item');
        },

        hoverIconChange: function(){
            var me = this;

            me.categoryBox.bind('mouseenter', function(){
                var hoverIcon = $(this).attr('data-houver-icon');
                var isActive = $(this).attr('data-active');

                if(isActive == 1) return;
                $(this).children().eq(0).attr('style','background:url('+hoverIcon+') no-repeat center;');
            }).bind('mouseleave', function(){
                var icon = $(this).attr('data-icon');
                var isActive = $(this).attr('data-active');

                if(isActive == 1) return;
                $(this).children().eq(0).attr('style','background:url('+icon+') no-repeat center;');
            });

        },

    };

    hoverMeau.init();
})