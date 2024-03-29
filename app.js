var marker;
var map = new AMap.Map("container", {
    center: [100.9809171101837, 22.785927021982616],
    zoom: 18,
    resizeEnable: true
});
$(".amap-logo").remove();
$(".amap-copyright").remove();
document.querySelector("#tip").onclick = function () {
    if (marker) {
        map.setCenter(marker.getPosition());
    }
}
//创建右键菜单
var contextMenu = new AMap.ContextMenu();
//右键添加Marker标记
contextMenu.addItem("标记位置", function (e) {
    if (marker) {
        marker.setPosition(contextMenuPositon);
    } else {
        marker = new AMap.Marker({
            map: map,
            position: contextMenuPositon //基点位置
        });
    }
    $(function () {
        $("#qrcode canvas").remove();
        $("#qrcode").qrcode({
            text: "http://uri.amap.com/marker?position=" + contextMenuPositon,
            width: 128,
            height: 128,
        });
    });
}, 0);

//右键显示全国范围
contextMenu.addItem("放到最大", function (e) {
    map.setZoom(18);
}, 1);
contextMenu.addItem("删除标记", function (e) {
    if (marker) {
        marker.setMap(null);
        marker = null;
    }
}, 2);
contextMenu.addItem("圈出范围", function (e) {
    polyEditor = new AMap.PolygonEditor(map, polygon);
    polyEditor.addAdsorbPolygons(polygon1)
    polyEditor.open();
}, 3);
//地图绑定鼠标右击事件——弹出右键菜单
map.on('click', function (e) {
    contextMenu.open(map, e.lnglat);
    contextMenuPositon = e.lnglat;
});
map.on('rightclick', function (e) {
    contextMenu.open(map, e.lnglat);
    contextMenuPositon = e.lnglat;
});
