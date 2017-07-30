$(function(){
    var map = new BMap.Map('allmap');
    var poi = new BMap.Point(116.198413,40.174508);
    map.centerAndZoom(poi, 15);
    map.enableScrollWheelZoom();

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                    '地址：北京市昌平区马池口两岸共盈工业园西二区<br/>' +
                    '电话：010-62633320<br/>传真：010-62611638<br/>' +
                    '微信：13031060853' +
                  '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
            title  : "北京新科凯邦科技有限公司",      //标题
            width  : 270,             //宽度
            height : 85,              //高度
            panel  : "panel",         //检索结果面板
            enableAutoPan : true,     //自动平移
            searchTypes   :[
                BMAPLIB_TAB_SEARCH,   //周边检索
                BMAPLIB_TAB_TO_HERE,  //到这里去
                BMAPLIB_TAB_FROM_HERE //从这里出发
            ]
        });
    var marker = new BMap.Marker(poi); //创建marker对象
    marker.enableDragging(); //marker可拖拽
    marker.addEventListener("click", function(e){
        searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
    searchInfoWindow.open(marker);
})