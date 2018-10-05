<!DOCTYPE html>
<html class="first zh-cn">
<head>
    <?php require_once VIEWS_PATH.'/head.php';?>
    <style type="text/css">
    	/* 线路检测新样式 */
		.body_line{color: #FFF; background: #000 url(content/skin/<?=getConfig('file_path')?>/images/share/bg01.jpg) 50% 0 no-repeat;}
		.subcont{    margin-bottom: 40px;}
		.cnlinesbox { margin:0 auto; width:899px; height:auto; overflow:hidden; font-family:'微软雅黑'; font-size:14px;}
		.cnlinesbox-title { margin:0; height:73px; background:url(content/skin/<?=getConfig('file_path')?>/images/share/cnlinesbox-title.png)  no-repeat center top;}
		.cnlinesother { margin:0; padding-top:20px; height:auto; overflow:hidden;}
		.cnlinesotherleft { float:left; width:533px; height:auto; overflow:hidden;}
		.cnlinesli { margin:0 0 15px 0; height:33px; padding-left:10px;}
		.cnlinestime { float:left; width:85px; height:33px; line-height:33px; text-align:center; color:#ffffff; /*background:url(cnlinestime.png) no-repeat; border:0px;*/   
		 border: 1px solid rgb(47, 97, 173);
		    -moz-box-shadow: 0px 0px 10px #2F61AD;
		    -webkit-box-shadow: 0px 0px 10px #2F61AD;
		    box-shadow: 0px 0px 1px #2F61AD;}
		
		.cnlinesjt { float:left; width:55px; height:33px; background:url(content/skin/<?=getConfig('file_path')?>/images/share/arrow.png) no-repeat center center;}
		.cnlineswz { float:left; width:239px; padding-left:15px; height:33px; line-height:33px; text-align:left; color:#ffffff; /*background:url(cnlineswz.png) no-repeat; border:0px;*/
		  border: 1px solid rgb(47, 97, 173);
		    -moz-box-shadow: 0px 0px 10px #2F61AD;
		    -webkit-box-shadow: 0px 0px 10px #2F61AD;
		    box-shadow: 0px 0px 1px #2F61AD; }
		.cnlinesotherleft a.linesopen { float:left; margin-left:8px; width:89px; height:33px; background:url(content/skin/<?=getConfig('file_path')?>/images/share/linesopen.png) no-repeat;}
		.cnlinesotherleft a.linesopen:hover { background:url(content/skin/<?=getConfig('file_path')?>/images/share/linesopen.png) no-repeat left bottom; }
		#linesshuaxin { float:left; margin-left:140px; margin-top:10px; width:231px; height:33px; line-height:33px; color:#9C3F00; font-size:18px; text-align:center; background:url(content/skin/<?=getConfig('file_path')?>/images/share/linesshuaxin.png) no-repeat; }
		#linesshuaxin a { color:#9C3F00; }
		
		.cnlinesotherright { float:right; width:366px; padding-top:5px; height:auto; overflow:hidden; min-height:500px;}
		.cnlinesotherright p {  line-height: 200%; font-size: 12px;  color: #c9dcfe;}
		#lineskefu { float:left; margin-top:55px; width:295px; height:90px; }
		#lineskefu a { display:block; width:295px; height:90px; background:url(content/skin/<?=getConfig('file_path')?>/images/share/online.png) no-repeat;}
		.form label span { display: block;  width: 90px; float: left;  text-align: right;  padding-right: 15px; color: #f8e678;}
		.header-banner{ background: url(content/skin/<?=getConfig('file_path')?>/images/share/mainbg.png) center 19px no-repeat; height:203px;}
		.header-title {background: url(content/skin/<?=getConfig('file_path')?>/images/share/title_lines.png);}
		.jzifo { font-size: 16px;height: 32px; line-height: 32px; margin:0px; font-weight: bold; color: #d9d9d9;text-align:center;}
		.ipclass { color: #F40105;}
    </style>
</head>
<body class="body_line">
	<div id="mainBody">
		<div id="page-header">
			<?php require_once VIEWS_PATH.'/header.php';?>
			<div class="header">
				<div class="wrapper">
					<div class="header-banner"></div>
					<div class="header-title"></div>						
				</div>
			</div>
			<div class="subcont">
				<div class="subinner">
					<div class="contin">
						<div class="clear"></div>
							<div id="sidebarbox">
								<div id="rightsidebar" style="width: 1020px; margin:0 auto;">
									<script type="text/javascript">
										var timecount=1;
										var timerstart0;
										var timer;

										$(".header-title").html('<div class="jzifo">温馨提示：您的本地IP是：<span class="ipclass" id="keleyivisitorip"></span></div>');

										window.onload = function () {
											document.getElementById("keleyivisitorip").innerHTML="<?=getIp()?>"
										}
										
										function autotime(h){
											timecount++;
											if( timecount>300){
												clearInterval(timer);
											}
										}
										
										function CountTime(i,timespace){
											if (timespace>100){
												$('#tt'+i).html('站点超时');
											}else if(timespace<1){
												$('#tt'+i).html('反应极快');
											}else{
												var timestr=timespace/100*1000+"ms";
												$('#tt'+i).html(timestr);
											}
										}
									
										timerstart0=timecount;
										timer=setInterval("autotime()",100);
										window.onerror = function(){
										   return true;
										}
									</script>
									<div class="cnlinesbox">
										<div class="cnlinesbox-title"></div>
										<div class="cnlinesother">
											<div class="cnlinesotherleft">
												<?php $linkarry=array('www.lb5200.com','www.lebo01.com','www.lebo02.com','www.lebo03.com','www.lebo04.com','www.lebo05.com','www.lebo06.com','www.lebo07.com','www.lebo08.com','www.lebo09.com');
												foreach($linkarry as $k=>$v){
												?>
												<div class='cnlinesli'>
													<div class='cnlinestime' id='ttw3<?=$k?>'>测速中...</div>
													<div class='cnlinesjt'></div>
													<div class='cnlineswz'>http://<?=$v?></div>
													<a class='linesopen' href='http://<?=$v?>' target='_blank'></a>
													<img src='http://<?=$v?>' width='1' height='1' onerror='CountTime("w3<?=$k?>",timecount-timerstart0);' style='display:none;'>
												</div> 
												<?php }?>
												<div class="clear"></div>
												<div id="linesshuaxin"><a href="/?c=help&page=lines">点击这里重新检测刷新访问速度</a></div>
											</div>
											<div class="cnlinesotherright">
												<p><span style="font-size:16px; font-weight:bold;">温馨提示:反应时间越小,打开就越快</span></p><br />
												<p>如果我们的检测中心对您有帮助，请按 <span>Ctrl+D收藏</span></p><br />
												<p><span>如果检测后还不能登录请按以下操作方式:</span></p>
												<p>操作步骤：打开IE浏览器：选择：工具-》Internet选项-》 在选择 (删除历史浏览记录)-》删除-》重启IE</p>
												<div id="lineskefu"><a href="javascript:;" data_online="OnlineService" class="popupkefu" target="_blank"></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						<div class="clear"></div>
					</div>
				</div>
			</div>
				<?php require_once VIEWS_PATH.'/footer.php';?>
		</div>
	</div>
</body>
</html>