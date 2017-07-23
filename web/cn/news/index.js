$(function(){
    var newsPage = {

        init: function(){
            this.getDom();
            this.trickA();
        },

        getDom: function(){
            this.newsA = $('.clearfix');
        },

        trickA: function(){
            var me = this;

            me.newsA.unbind().bind('click', function(){
                var url = $(this).attr('data-url');
                window.location.href = url;
            });
        }

    };

    newsPage.init();
})