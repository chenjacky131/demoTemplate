<!DOCTYPE html>
<html class="madvertis zh-cn at1">
<head>
	<?php require_once VIEWS_PATH.'/head.php';?>
	<style type="text/css" media="screen">
		#js-ele-slider-swf {visibility:hidden}#js-ele-jpRemote {visibility:hidden}
		.daili_00 div{line-height:30px; color:#aaa;}
		.daili_00 div>input{width:280px; height:35px; line-height:35px; border:1px solid #888; border-radius:3px; padding:0 10px; color:#333}
		.daili_00 div>textarea{width:380px; height:100px; line-height:35px; border:1px solid #888; border-radius:3px; padding:0 10px; margin:0px; color:#333}
		.tiao_01>input{width:80px; height:35px; line-height:35px; border:1px solid #888; border-radius:3px; color:#333}
		.tiao_01>input[type="submit"]{width:180px; background:#f00; color:#fff; border-color: #f33}
		.tiao_01>input[type="submit"]:hover{background:#f33;}
		.red{color:#f00}
		.case-article-content{width:600px; }
	</style>
</head>
<body>
	<div id="mainBody">
		<div id="page-header">
			<?php require_once VIEWS_PATH.'/header.php';?>
			<div id="page-container">
				<div class="clear"></div>
				
				<div class="clearfix" id="page-body"> 
					<!--    main   -->
					<div id="page-sidebar">
						<div class="sidemenu-header"></div>
						<div class="sidemenu-body">
							<ul class="sidemenu">
								<li><a title="体育赛事" href="/?c=Sports">体育赛事</a></li>
								<li><a title="视讯直播" href="/?c=Live">视讯直播</a></li>
								<li><a title="电子游艺" href="/?c=Game&a=indexb">电子游艺</a></li>
								<li><a title="彩票游戏" href="/?c=Lottery&a=Cqssc"  target='game'>彩票游戏</a></li>
								<li><a title="免费开户" href="/?c=Register">免费开户</a></li>
							</ul>
						</div>
						<div class="sidemenu-footer"></div>
						<a onclick="BBOnlineService();" href="###" class="sidemenu-service"></a>
						<div class="sidemenu-bottom-pic"></div>
					</div>
					<div id="page-right">
						<div class="about-top"></div>
						<div class="about-bg">
							<div class="advertis-event" id="direction">
								<div id="articles" style="line-height:180%;">
									<div class="case-article-content">
										<?php require_once DEFAULT_VIEW_PATH.'/AgentApply/index.php';?>
									</div>
								</div>
							</div>
						</div>
						<div class="about-bottom"></div>
					</div>
				</div>
				
			</div>
			<?php require_once VIEWS_PATH.'/footer.php';?>
		</div>
	</div>
</body>
</html>