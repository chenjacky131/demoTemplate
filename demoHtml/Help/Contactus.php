<!DOCTYPE html>
<html class="madvertis zh-cn at1">
<head>
	<?php require_once VIEWS_PATH.'/head.php';?>
</head>
<body class="body_other">
<?php require_once VIEWS_PATH.'/header.php';?>
<?php require_once VIEWS_PATH.'/Notice.php';?>
	<div id="mainBody" class="wrapper">
		<div id="page-header">
			<div id="page-container" class="other_wrapper">
				<div class="clear"></div>
					
					<div class="clearfix" id="page-body"> 
						<!--    main   -->
						<?php require_once VIEWS_PATH.'/Help/left.php';?>
						<div id="page-right" class="page_right">
							<div class="about-top"></div>
							<div class="about-bg">
								<div class="advertis-event" id="direction">
									<div id="articles">
										<h3 class="case-article-title">联系我们</h3>
										<div class="case-article-content">
											<p><?=$webconfg['web_name']?>客服中心全年无休，提供一周七天，每天二十四小时的优质服务。</p>
											<p>如果您对本网站的使用有任何疑问，可以透过下列相关方式与客服人员联系，享受最实时的服务。</p>
											<p>邮箱：<span style="color:#FF8C00">88888888@gmail.com</span></p>
											<p>在线客服QQ：<span style="color:#FF8C00">8888888</span></p>
											<p>优惠专员QQ：<span style="color:#FF8C00">88888888</span></p>
											<p>代理专员QQ：<span style="color:#FF8C00">88888888</span></p>
											<p>&nbsp;</p>
											<!--<p>只要填妥下列窗体并点击送出数据，我们也能收到您宝贵的意见(务必填写真实的Email.QQ或者联络电话，以便我们能及时与您取得联系！</p>-->
										</div>
									</div>
								</div>
								<script>
									$(function() {
										//一般文案用 
										var MtabUl = $('#Union').children('ul');
										MtabUl.addClass("mtab-menual");
										$('#Union').mtab2();
										$('.mtab-menual').show();
									});
								</script> 
							</div>
							<div class="about-bottom"></div>
						</div>
					</div>
					
				<div class="clear"></div>
			</div>
		</div>
	</div>
<script src="content/skin/<?=getConfig('file_path')?>/js/common.js"></script>	
<?php require_once VIEWS_PATH.'/footer.php';?>
<?php require_once VIEWS_PATH.'/Help/script.php';?>
</body>
</html>