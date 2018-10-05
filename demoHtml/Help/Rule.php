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
										<h3 class="case-article-title">负责任博彩</h3>
										<div class="case-article-content">
											<p><?=$webconfg['web_name']?>一直积极推行负责任博彩，并极力拒绝未成年玩家使用我们的软件进行网上娱乐。同时，</p>
											<p>我们更透过专业人员及各种有效方法，以防止问题博彩的发生。</p>
											<p><span style="color:#FF8C00">&nbsp;<strong>※</strong>&nbsp;&nbsp;<strong>年龄限制</strong>&nbsp;</span></p>
											<p>18岁以下的未成年人是禁止参与网络博彩的，<?=$webconfg['web_name']?>将保有对顾客所提供年龄信息证明的查询，如有发现年龄证明与客户所提供的不符，我们将关闭客户的账号以及冻结所剩余的资金。由于各地的法令条款不同，因此我们建议客户在进行博彩游戏前，翻阅当地法律进行查询。</p>
											<p><span style="color:#FF8C00"><strong>※</strong> <strong>问题性博彩问卷调查</strong></span></p>
											<ul>
												<li><?=$webconfg['web_name']?>正在积极努力为玩家提供一个优质的娱乐平台。这些问题设置的目的在于，我们已经设置升级了多项安全设施来确保我们游戏的公平公正。我们鼓励客户通过回答我们的问卷来了解客户对博彩的危害问题的状况：</li>
												<li>您会因为躲避工作和学习来进行赌博吗？</li>
												<li>您会因为无聊或者不开心来进行赌博吗？</li>
												<li>您在注金投注完时，是否感觉钱已经丢掉或者说要尽快的再次下注？</li>
												<li>您会一直赌博直到您的钱都输完吗？</li>
												<li>您是否有说谎言借钱，甚至盗窃来进行博彩？</li>
												<li>您是否刻意隐瞒过您在博彩中会费的时间和资金吗？</li>
												<li>您是否不愿意花费您的赌金在其他方面呢？</li>
												<li>您是否已经对家人，朋友和爱好失去了兴趣？</li>
												<li>加入您的注金全部投注完，您是否会感到尽快赢回您输掉的资金？</li>
												<li>以上问题中所回答的「是」愈多则代表愈有机会遇上博彩问题，甚至成为问题博彩者，因此您可能已经沉迷于赌博。我们建议您:</li>
											</ul>
											<ol>
												<li>把博彩当做一种娱乐休闲项目</li>
												<li>避免连续的损失</li>
												<li>对博彩有自己的认识</li>
												<li>有节制的博彩</li>
											</ol>
											<ul>
												<li>对于一些客户希望暂时远离博彩，我们将提供一个自我排除的功能，您可以申请六个月到五年的账户关闭。账户一旦关闭，客户无论任何原因都不能重开账户，直至所设定的期限到期。</li>
												<li>请点击网页中的"联系我们"，我们的客服人员会为您带来更多帮助。</li>
											</ul>
											<p><span style="color:#FF8C00"><strong>※</strong>&nbsp;<strong>寻求协助</strong></span></p>
											<p>有很多机构可以为在博彩中产生问题的人提供支持和帮助，我们推荐这些玩家联络这些自助组织获得额外的说明。</p>
											<p>以下网站将为您提供建议和指引。每个组织都有说明热线和电子邮件地址，如果您需要严格保密的建议和帮助，您可以联络他们。</p>
											<p>www.gamblersanonymous.org</p>
											<p>www.gamcare.org.uk</p>
											<p>www.gamblingtherapy.com</p>
											<p>家长监控</p>
											<p>父母或监护人可透过使用一系列的第三方软件，以有效监控或限制未成年人使用计算机士对互联网的使用：</p>
											<p>Net Nanny过滤软件防止未成年浏览不适宜的网站内容：www.netnanny.com</p>
											<p>CYBERsitter过滤软件允许父母增加自定义过滤网站: www.cybersitter.com</p>
											<p>责任感和正直诚信</p>
											<p><?=$webconfg['web_name']?>致力提高服务水平，并承诺向客户履行最大程度上的责任，包括诚信、透明度、合法性等各方面。如客户遇上任何有关负责任博彩的问题，可24小时向我们的客户服务部联络。我们承诺会一年365日24小时全天候的为用户提供技术支持及相关问题解答服务。</p>
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