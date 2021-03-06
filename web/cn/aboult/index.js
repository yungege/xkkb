window.onload = function(){
    jQuery("#gc").slide({
        titCell:".hd ul",
        mainCell:".bd ul",
        autoPage:true,
        effect:"left",
        // autoPlay:true,
        vis:4,
        trigger:"click"
    });

    jQuery("#ck").slide({
        titCell:".hd ul",
        mainCell:".bd ul",
        autoPage:true,
        effect:"left",
        // autoPlay:true,
        vis:4,
        trigger:"click"
    });

    var changePic = {
        init: function(){
            this.getDom();
            this.changePic();
            this.scroolTo();
        },
        getDom: function(){
            this.changeBtn = $('.aboult-pic-btn li');
            this.gc = $('.aboult-pic-wrap-gc');
            this.ck = $('.aboult-pic-wrap-ck');
            this.scroolBtn = $('.product-inner-item');
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
        },

        scroolTo: function(){
            var me = this;

            me.scroolBtn.unbind().bind('click', function(){
                var scroolTop = $(this).attr('data-to');
                $('html, body').animate({  
                    scrollTop: $(scroolTop).offset().top
                }, 1000, 'easeInOutQuart');
            })
            
        },

    }

    changePic.init();
}

window.$ = jQuery.noConflict();
$(document).ready(function(){
    var slider = new MasterSlider();
    slider.setup('masterslider' , {
        width:500,
        height:713,
        space:5,
        view:'basic'
    });
    slider.control('arrows');   
    slider.control('scrollbar' , {dir:'h'});    
    slider.control('thumblist' , {autohide:false ,dir:'v',arrows:false});
});