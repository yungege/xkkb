window.onload = function(){
    jQuery("#gc").slide({
        titCell:".hd ul",
        mainCell:".bd ul",
        autoPage:true,
        effect:"left",
        autoPlay:true,
        vis:4,
        trigger:"click"
    });

    jQuery("#ck").slide({
        titCell:".hd ul",
        mainCell:".bd ul",
        autoPage:true,
        effect:"left",
        autoPlay:true,
        vis:4,
        trigger:"click"
    });

    var changePic = {
        init: function(){
            this.getDom();
            this.changePic();
        },
        getDom: function(){
            this.changeBtn = $('.aboult-pic-btn li');
            this.gc = $('.aboult-pic-wrap-gc');
            this.ck = $('.aboult-pic-wrap-ck');
        },
        changePic: function(){
            var me = this;

            me.changeBtn.unbind().bind('click', function(){
                var dom = $(this).attr('data-name');
                me.changeBtn.removeClass('aboult-pic-btn-active');
                $(this).addClass('aboult-pic-btn-active');

                if(dom == 'gc'){
                    me.ck.fadeOut(0);
                    me.gc.fadeIn(200);
                }
                else{
                    me.gc.fadeOut(0);
                    me.ck.fadeIn(200);
                }
            });
        }
    }

    changePic.init();
}