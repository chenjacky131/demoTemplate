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
									<div id="Union">
										<ul class="mtab-menual" style="display: block;">
											<li class="mtab" id="#Union1">负责任博彩</li>
											<li id="#Union2">存取款问题</li>
											<li id="#Union3">投注问题</li>
											<li id="#Union4">游戏常见问题</li>
										</ul>
										<div id="Union1">
											<p>【一般问题】</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何加入<?=$webconfg['web_name']?>？</strong></span></p>
											<p>A: 请您直接点选 "免费加入"，确实填写数据后，并至您的注册邮箱收取启动邮件，即可立即登入!</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我已经填写数据完成注册，但是账号无法登入怎么办？</strong></span></p>
											<p>A: 新注册账号需要被启动启动后才能登入使用。注册后系统会寄启动信件到您注册时所留的电子信箱中，您必须点击信中的启动链接即可完成启动程序。若是您没有收到启动信件或是无法启动请您联系在线客服人员。</p>
											<p><span style="color:#FF8C00"><strong>Q: 我注册时显示姓名已注册，怎么办？</strong></span></p>
											<p>A: 注册时显示姓名已注册请您联系在线客服人员，帮您做资料比对与调整。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我的账号</strong><strong>/</strong><strong>密码忘了怎么办？</strong></span></p>
											<p>A: 会员若是忘记密码可点击首页【忘记密码】，系统会将密码发送到您注册时所留的电子邮箱中。若是忘记账号请联系在线客服，客服人员将会协助您取回账号。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我的账号冻结了怎么办？</strong></span></p>
											<p>A: 账号显示冻结可能是因为密码输入错误多次导致系统安全锁启动，请您连系在线客服协助您解除冻结。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何更改我的密码？</strong></span></p>
											<p>A: 点击【会员中心-&gt;我的帐户-&gt;基本信息】，进行密码修改</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何更改个人注册信息</strong><strong>?</strong></span></p>
											<p>A: 账号成功注册后，您所填写的数据将无法自行更改。如有需要，请您连系在线客服协助您作数据更改。</p>
											<p><span style="color:#FF8C00"><strong>Q: 我想重新注册一个账号可以吗？</strong></span></p>
											<p>A: <?=$webconfg['web_name']?>会员一人只能够注册一次，不接受同一会员多次注册。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我想删除</strong><strong>/</strong><strong>注销我的会员账号可以吗？</strong></span></p>
											<p>A: <?=$webconfg['web_name']?>不会以任何理由注销会员账号。会员可向客服人员申请冻结会员账号，以停止其账号的使用。</p>
										</div>
										<div style="display:none;" id="Union2">
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我可以直接在网络上存款吗？</strong></span></p>
											<p>A: 可以，<?=$webconfg['web_name']?>提供便利的在线存款选择，点击【会员中心-&gt;银行交易-&gt;在线存款】，即可选择公司入款或在线支付</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>什么是公司入款？如何使用？</strong></span></p>
											<p>A: 公司入款提供入款账户给您使用，每次回馈1%，入款账户随时变更，避免入到下架账号，请于入款前至【会员中心-&gt;银行交易-&gt;在线存款-&gt;公司入款】确定最新入款账号再入款</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>什么是在支付</strong><strong>?</strong><strong>如何使用</strong><strong>?</strong></span></p>
											<p>A: 在线支付是利用网络银行公司直接支付的存款方式。会员必须有事先开通网络银行功能，从在线支付页面直接完成汇款。会员只需按照在线支付页面指示操作即可。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>存款最低、最高限制是多少？</strong></span></p>
											<p>A: <?=$webconfg['web_name']?>最低存款为$90人民币，最高存款无上限。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>单笔取款最低、最高限制是多少？</strong></span></p>
											<p>A: <?=$webconfg['web_name']?>单笔最低取款为$100人民币，单笔最高取款上限为$100,000人民币。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>为什么在线支付成功后额度没有立即返到我的游戏账号呢？</strong></span></p>
											<p>A: 在线支付系统需要经过密锁切换及内部验证程序，这也是保证安全程序之一，请您不必担心，款项一定不会丢失。</p>
											<p>如果您在线上支付超过30分钟后仍然还未收到您的款项，请与在线客服联系处理。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>取款多久时间到帐？</strong></span></p>
											<p>A: 取款将于实时到帐</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>取款次数有限制吗？有规定取款时间吗？</strong></span></p>
											<p>A: <?=$webconfg['web_name']?>会员取款次数是没有限制的，唯有24小时内第二次取款开始每笔会收取50元的手续费。<?=$webconfg['web_name']?>全年无休，24小时随时提供取款服务。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>取款有没有收取手续费？</strong></span></p>
											<p>A: 会员24小时内可免手续费取款一次，24小时内取款2次以上（包含第2次出款），每次出款须承担50元手续费。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>取款有没有什么条件？</strong></span></p>
											<p>A: 会员取款必须先绑定取款银行账号；此账号必须是本人的银行账号。</p>
											<p>若由上次出款起，有效下注金额未达【每次存款额度】而申请出款者，公司将收取【存款额度】50%的行政费用，以及$50元的出款手续费。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>取款银行账号一定要本人的吗？</strong></span></p>
											<p>A: 会员取款绑定的取款银行账号必须要与注册时所填写的真实姓名为同一人，否则无法出款。</p>
											<p>真实姓名是无法变更的。若注册时因真实姓名没有确实填写而造成无法取款，<?=$webconfg['web_name']?>概不负责。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我已经申请取款了，为何一直没有收到款？</strong></span></p>
											<p>A: 一般取款会在2小时内完成。逾时未收到款项可能是取款银行账号数据有误或银行账号小额管理费未缴等问题所造成的。财务人员在无法出款时都会给予会员通知。若会员未填写有效的联络方式也会造成财务无法联系的情况发生，请会员务必保持正确有效的联系信息。会员也可随时询问在线客服人员，查询您的取款状态。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong></span><strong><span style="color:#FF8C00">我可使用何种货币向自己的帐户进行存款</span>？</strong></p>
											<p>A: 目前<?=$webconfg['web_name']?>支持人民币存款服务。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>取款是否可绑定多个银行账号方便使用？</strong></span></p>
											<p>A: 可以，点击【会员中心-&gt;银行交易-&gt;在线取款】进行取款动作，选择【我要继续出款】，之后点击【编修我的银行账号】，即可新增多个出款银行账号给您使用。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>天天返点什么时候会返给我？反点区间如何计算？</strong></span></p>
											<p>A: 天天返点表定于香港时间每日18：00PM。返点优惠计算方法为，香港时间 每天12:00PM至第二天12:00PM 为日区间计算。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何查询周有效投注？</strong></span></p>
											<p>A: 点击【会员中心-&gt;我的帐户-&gt;基本信息】，即可查询总有效投注额与各项游戏有效投注额明细。</p>
										</div>
										<div style="display:none;" id="Union3">
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我已经存款成功，为何下注时说我余额不足？</strong></span></p>
											<p>A: 存款后款项会被加到BBIN额度的账户中。若要投注体育投注，会员必须使用【额度转换】将BBIN额度转换至体育投注余额。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何进行【额度转换】？</strong></span></p>
											<p>A: 点击【会员中心-&gt;银行交易-&gt;额度转换】，即可将您的额度自由转移</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>你们的游戏会用多少副牌？</strong></span></p>
											<p>A: 百家乐使用8副牌，其他游戏则会根据其性质有所调整。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>你们何时会洗牌？</strong></span></p>
											<p>A: 所有纸牌游戏，当红的洗牌记号出现或游戏因线路问题中断时便会进行重新洗牌。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我的注码限制是多少？</strong></span></p>
											<p>A: 注码的限制会根据游戏类别有所不同，BB体育、真人娱乐、彩票游戏单场单注最低是1人民币。电子游艺最低为0.01元人民币。您可点击【会员中心-&gt;我的帐户-&gt;投注信息】，可查询各项游戏与玩法详细限额。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>在<?=$webconfg['web_name']?></strong><strong>我的个人资料、投注记录是否安全？</strong></span></p>
											<p>A: 本娱乐场网页绝对安全。我们决不泄漏客户的个人资料给任何商业机构。</p>
											<p>　 所有会员提供的数据都传送到安全端口(SSL 128bitencryption Standard)，并存放在严密保护的环境下。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>真人视讯可以选择的下注筹码怎么这么少？</strong></span></p>
											<p>A:请点击[自定义筹码]，会出现各个面值的筹码，您可选择常用筹码， 储存后方便您快速选取。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>真人娱乐厅为何无法下</strong><strong>"</strong><strong>最后一注</strong><strong>"</strong><strong>？</strong></span></p>
											<p>A: 真人娱乐厅的"最后一注"，金额必须大于1元，若金额低于1元，建议您转到电子游艺，继续游戏。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何证明游戏结果是实时的？</strong></span></p>
											<p>A: 您可以通过游戏的视频影像进行监查，视频内的画面均为BBIN现场娱乐场所播放的画面是同步的。</p>
											<p>我们确保所有游戏结果均为真实的实时结果。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我如何进行球类投注</strong><strong>?</strong></span></p>
											<p>A: 体育投注<!--及BB体育-->请选择欲投注的项目并于网页左下边填入投注金额即可下注。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我要如何知道我的投注已经赢了</strong><strong>?</strong></span></p>
											<p>A: 点击【会员中心-&gt;交易纪录-&gt;投注纪录 / 往来纪录】，可查询各项游戏周与月区间投注输赢结果与注单状况</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>我可以在哪里看到我所有投注</strong><strong>?</strong></span></p>
											<p>A: 点击【会员中心-&gt;交易纪录-&gt;往来纪录】，可查询各项游戏投注纪录与注单明细</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>为什么我的投注会作废？</strong></span></p>
											<p>A: 如果一项体育赛事暂停、放弃或终止，那么整个比赛将被视为无效。此规定取决于不论任何方式的官方公告。</p>
											<p>各单项的投注金额将会返还。混合过关中该项涉及的无效投注将会被视为没有参赛，而其他投注项将会继续进行。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何查看球赛取消、注销公告，或游戏公告讯息</strong></span></p>
											<p>A: 点击【会员中心-&gt;游戏公告】，可查询所有游戏公告与历史讯息</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何查看<?=$webconfg['web_name']?>站内信？</strong></span></p>
											<p>A: 点击【会员中心-&gt;个人信息】，可查询所有<?=$webconfg['web_name']?>发给会员的个人站内信，敬请密切关注</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何查看<?=$webconfg['web_name']?>最新网站公告？</strong></span></p>
											<p>A: 点击【会员中心-&gt;最新信息】，可查询<?=$webconfg['web_name']?>最新跑马灯讯息与历史讯息</p>
										</div>
										<div style="display:none;" id="Union4">
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>进行游戏对系统配置有要求吗？</strong></span></p>
											<p>A: 您好，我们设计的网页将会提供新一代浏览器服务，提供更好的特点，让您能够享有更好的投注乐趣。我们希望您能使用Internet Explorer 8.0或者是以上的浏览器版本。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>为什么需要清除网页快取？</strong></span></p>
											<p>A: 您好如果您无法浏览新的网页或者是最新的页面，并且发现所浏览的是相同或者是旧的页面，要解决这个问题，只需依照以下的步骤：</p>
											<p>　＊请于网站的栏目位置，选取工具项</p>
											<p>　＊点击“Internet属性”。</p>
											<p>　＊您会看到游览器纪录</p>
											<p>　＊然后按删除按钮</p>
											<p>　＊再选取您想删除的项目后，再按删除按钮即可</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>当未能登入游戏时，应怎么办</strong><strong>?</strong></span></p>
											<p>A: 首先，您可尝试关闭防火墙和防病毒软件，由于它们当中有些程序或与我们的软件有冲突，因而导致这种情况。</p>
											<p>此外，您亦可删除浏览器中的小型文本文件(Cookies)和历史记录，然后重启计算机，再尝试登录。</p>
											<p>如果仍未能正常操作，则请重新下载最新版本的客户端，然后重新安装，并再作登录。</p>
											<p><span style="color:#FF8C00"><strong>Q: </strong><strong>如何使用截取屏幕</strong><strong>?</strong></span></p>
											<p>A: 请把鼠标指向单撃网址窗口位置，之后再于键盘上找寻alt 和 print scren 的按钮，并同时单撃alt 和 print screen键，以后打开小画家再按鼠标的右键后，选取复制和贴上项后，截取屏幕即完成。</p>
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