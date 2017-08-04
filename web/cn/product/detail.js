$(function(){
    var productDetail = {

        init: function(){
            this.getDom();
            this.changeArea();
        },

        getDom: function(){
            this.h4 = $('.product-detail-meau h4');
            this.showArea = $('.desc-list-div');
        },

        changeArea: function(){
            var me = this;

            me.h4.unbind().bind('click', function(){
                var index = $(this).index();
                $(this).siblings().removeClass('meau-active');
                $(this).addClass('meau-active');

                me.showArea.eq(index).show();
                me.showArea.eq(index).siblings().hide();
            });
        },
    };

    productDetail.init();
})