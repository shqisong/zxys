
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>在线影视专用播放器</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="DPlayer.min.css">
	<meta name="referrer" content="no-referrer"/>
</head>
<style type="text/css">body,html,.content{background-color:black;padding: 0;margin: 0;width:100%;height:100%;color:#999;position:absolute;}</style>
<body style="overflow-y:hidden;">
<div class="content dplayer dplayer-no-danmaku" id="ZsPlay"></div>
<script type="text/javascript" src="hls.min.js" charset="utf-8"></script>
<script type="text/javascript" src="DPlayer.min.js" charset="utf-8"></script>
<script>
var isPhone = navigator.userAgent.match(/iPad|iPhone|Android|Linux|iPod/i) != null;
player('ZsPlay', '100%');


function _get(name){
     var result = location.search.match(new RegExp("[\?\&]" + name+ "=([^\&]+)","i"));
     if(result == null || result.length < 1){
         return "";
     }
     return decodeURIComponent(result[1])
}
function player(id, w) {
  if (isPhone) {
    var htm = '<video src="'+ _get('url') +'" controls="controls" poster="http://www.zxys.xyz/general/p2p/loading.gif" autoplay="autoplay" width="' + w + '" height="100%"></video>';
    document.getElementById(id).innerHTML = htm;
  } else {
    var dp = new DPlayer({
      container: document.getElementById('ZsPlay'),
            autoplay: true,//自动播放
            lang: 'zh-cn',//语言
            screenshot:true,//截图
            hotkey: true,  //热键
            preload: 'auto',//预加载
            logo: 'http://www.zxys.xyz/general/picture/tb.png',  //logo
            volume: 0.8,       //声音
            theme: '#00BFFF',     //主题颜色
      video: {
		pic: 'http://www.zxys.xyz/general/p2p/loading.gif',
        url: _get('url'),
        type: 'hls',
      }
    });
  }
}
</script>
</body>
</html>
