var HoverImg = {

    init: function (){
        this.getDom();
        this.changeImg();
        this.topPos();
    },

    getDom: function (){
        this.picLis = $('.pic-content ul li');
        this.picCover = $('.pro-list-div');
    },

    changeImg: function (){
        var me = this,
            timer = null;
        me.picLis.unbind().bind('mouseenter', function(){
            var ms = 1,
                picArea = $(this).parent().parent().prev().children('img'),
                picUrl = $(this).attr('data-img');
            if(timer !== null){
                clearInterval(timer);
                timer = null;
            }
            timer = setInterval(function(){
                if(ms == 1){
                    if(picUrl){
                        picArea.attr('src', picUrl);
                    }
                    clearInterval(timer);
                    timer = null;
                }
                else{
                    ms ++;
                }
                
            }, 250);
            
        });
    },

    topPos: function(){
        var me = this;
            
        me.picCover.unbind().bind('mouseenter', function(){
            var picDiv = $(this).children('.pic');
            picDiv.stop().animate({
                'bottom': '110px',
            },{ 
                easing: 'easeOutExpo', 
                duration: 600,
            });
            
        }).bind('mouseleave', function(){
            var picDiv = $(this).children('.pic');
            picDiv.stop().animate({
                'bottom': '0px',
            },{ 
                easing: 'easeOutExpo', 
                duration: 600,
            });
                    
        });
    },

};

$(function(){
    $(".js-silder").silder({
        auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
        speed: 30,//轮播图运动速度
        sideCtrl: false,//是否需要侧边控制按钮
        defaultView: 0,//默认显示的索引
        interval: 5000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
        activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
        bottomCtrl: true,
    });
})

// window.onload = function(){

//     $(".js-silder").silder({
//         auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
//         speed: 30,//轮播图运动速度
//         sideCtrl: false,//是否需要侧边控制按钮
//         defaultView: 0,//默认显示的索引
//         interval: 5000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
//         activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
//         bottomCtrl: true,
//     });

//     HoverImg.init();
// }