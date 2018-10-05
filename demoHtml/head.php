<?php
include_once MODELS_PATH.'/WebconfigModel.php';
$webconfigModel=new WebconfigModel();
$webconfg = $webconfigModel->SelectBySiteID();
$notice=$webconfigModel->SelectNoticeBySingle();
$Config= getConfig();
$usernamemax = 12;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$webconfg['web_name']?></title>
<link rel="shortcut icon" href="content/skin/<?=getConfig('file_path')?>/images/favicon.ico" type="image/x-icon" />
<!-- 公告样式 -->
<link rel="stylesheet" type="text/css" href="content/fonts/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="content/css/normalize.min.css"/>
<link rel="stylesheet" type="text/css" href="content/css/common.css"/>
<!-- 当前站点样式 -->
<link rel="stylesheet" type="text/css" href="content/skin/<?=getConfig('file_path')?>/css/common.css">

<script src="content/scripts/jquery-1.7.2.min.js"></script>

<!--[if lt IE 9]>
  <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="content/scripts/jstorage.min.js" type="text/javascript" ></script>
<script src="content/scripts/jquery.cookie.js" type="text/javascript"></script>
<script src="content/scripts/easydialog/easydialog.min.js" type="text/javascript"></script>
<link href="content/scripts/easydialog/easydialog.css" rel="stylesheet" type="text/css">

<script src="content/skin/<?=getConfig('file_path')?>/js/casino_util.js"></script>
<script src="content/skin/<?=getConfig('file_path')?>/js/swfobject.js"></script>

<script src="content/scripts/utils.min.js" type="text/javascript"></script>
<script src="content/scripts/layer/layer.js" type="text/javascript"></script>
<script src="content/scripts/app.min.js" type="text/javascript"></script>
<script src="content/scripts/submitContent.min.js" type="text/javascript"></script>
<script src="content/scripts/float.min.js" type="text/javascript"></script>
<script>onLineService = "<?=$webconfg['OnlineService']?>"; loginVcode = <?=$webconfg['login_vcode'] == 1 ? 1 : 0?>;<?=$Config["Member_Center"]?'config.memberCenter = true;':''?></script>
