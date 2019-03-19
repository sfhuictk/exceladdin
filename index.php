<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>GPS</title>
    <link rel="stylesheet" href="https://a.amap.com/jsapi_demos/static/demo-center/css/demo-center.css" />
    <script type="text/javascript" src="jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="qrcode.js"></script>
    <style>
        html,
        body,
        #container {
            height: 100%;
            width: 100%;
        }

        #qrcode {
            background: white;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 161;
        }
    </style>
</head>

<body>
    <div id='container' style="width:100%; height: 100%;"></div>
    <div id="tip" class="info" style="min-width:auto;cursor:pointer;">
        <img src="https://webapi.amap.com/theme/v1.3/markers/n/mark_bs.png" style="width: 8px; height: 13px;"> 施工位置
    </div>
    <div id="qrcode"></div>
</body>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.13&key=41f7d76bf0acc9e33fb3d0e054b5b585"></script>
    <script type="text/javascript" src="app.js"></script>
</html>
