<!DOCTYPE html>
<html class="madvertis at1">
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
									<h3 class="case-article-title"><?=$webconfg['web_name']?></h3>
									<div class="case-article-content">
										<p>&nbsp; &nbsp; &nbsp; <?=$webconfg['web_name']?>与世界领先的博彩游戏软件公司BBIN深度合作，在全世界范围内为广大玩家提供激情四射的在线游戏，以优质的产品和专业的客户服务在广大玩家中建立了极佳的声誉。</p>
										<p>&nbsp; &nbsp; &nbsp; 作为网投博彩业的一颗新星，<?=$webconfg['web_name']?>正以其系统化和标准化快速成为亚洲主流的在线博彩公司，确保客户的安全和游戏的公正是我们的信念和宗旨。我们不仅拥有多元的在线游戏，更着眼于服务和产品的每个细节，为广大玩家提供实时可靠的客户支持以确保玩家享受到最佳的游戏体验。</p>
										<p><span style="font-size:14px"><span style="color:#DAA520">※&#8203;&#8203;<strong> 最佳选择</strong></span></span></p>
										<p>&nbsp; &nbsp; &nbsp; <?=$webconfg['web_name']?>向广大的会员提供实时的现场百家乐、龙虎斗、牌九、轮盘、骰宝和现场德州扑克，并且提供比陆地堵场更高的培率和更多的优惠。</p>
										<p>&nbsp; &nbsp; &nbsp; 我们的体育博彩拥有皇冠体育平台，为您提供更多的赛事，更高的赔率和更高的水位，其中就包含了多项大型比赛，包括英超联赛、意甲联赛、德甲联赛、西甲级联赛、世界杯和NBA等。</p>
										<p>&nbsp; &nbsp; &nbsp; <?=$webconfg['web_name']?>所有的游戏皆有共同的优点，无须耗时下载，操作接口简单明了、功能齐全、画面精致，游戏从每一局的开始至结束皆秉持着公平、公正、公开的原则。</p>
										<p><span style="font-size:14px"><span style="color:#DAA520">※&#8203;&#8203;<strong> 安全系统与信誉保障</strong></span></span></p>
										<ol>
											<li>严谨的风险控管，以及第三方资金保险，100％保证玩家资金。</li>
											<li><?=$webconfg['web_name']?>与BBIN同步获得国际第三方TST公司的系统认证。</li>
											<li>真人娱乐视频现场，持有菲律宾政府核发牌照，现场运营完全依照国际赌场管理条例。</li>
											<li><?=$webconfg['web_name']?>为诺顿分级所评级的安全网站，绝无任何恶意软件。</li>
											<li>进行任何游戏操作，皆使用相同账号/密码，全程数据加密，保证玩家隐私。</li>
										</ol>
										<p><span style="font-size:14px"><span style="color:#DAA520">※&#8203;&#8203;<strong> 优质服务</strong></span></span></p>
										<p>&nbsp; &nbsp; &nbsp;<?=$webconfg['web_name']?>不但拥有多元化的游戏产品，更有最高的信誉保证，我们的用心随处可见。</p>
										<ol>
											<li>您可以通过实时聊天工具，在60秒之内得到我们的协助。</li>
											<li>保证玩家获得顶级的客户体验是<?=$webconfg['web_name']?>客户服务团队的首要任务。</li>
											<li>您可以选择自己喜欢的语言和付款方式。</li>
											<li>每位<?=$webconfg['web_name']?>玩家都可享受到VIP级别的服务。</li>
											<li>我们训练有素的客服团队给您提供全天24小时的服务，确保及时有效的解决您的问题，让您有宾至如归的感觉。</li>
										</ol>
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