<header>
	<div class="static">
		<div class="wrapper">
			<div class="time_now float-left" id="time_now">
			</div>
			<div class="float-right">
				<ul class="top-link list-inline clearfix with_sep">    
					<li><a href="javascript:void(0);" onclick="siteCommon.AddFavorite();" target="_blank" class="green">加入收藏</a></li>
					<li><a href="javascript:;" title="在线客服" data_online="OnlineService" target="_blank" class="top-link1">在线客服</a></li>
					<li><a href="/?c=Help&page=Partner" title="合作代理" target="_blank" class="blue">代理加盟</a></li>
					<li><a href="/?c=Mobile" title="手机下注" target="_blank" class="yellow">手机投注</a></li>
					<li><a href="javascript:void(0);" target="_blank" class="green">备用网址</a></li>
					<li><a href="javascript:void(0);" target="_blank" class="yellow"><i class="fa fa-flag" aria-hidden="true"></i>简体中文</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="header-cont">
		<div class="wrapper">
			<div class="par1 clearfix">
				<a class="logo float-left">
					<!-- <img src="content/skin/<?=getConfig('file_path')?>/images/logo.png" alt="logo"> -->
					<div id="test-flash">
					</div>
				</a>
				<script>
					(function(){
						var flashvars = {},
						params = {
						wmode: 'transparent',
						quality: 'high'
						},
						attributes = {
						id: 'test-flash',
						title: '测试flash',
						onmousedown: "top.location.href='/'"
						};
						swfobject.embedSWF('content/skin/<?=getConfig('file_path')?>/images/flash.swf', 'test-flash', '200', '100', '8.0.35.0', 'content/skin/<?=getConfig('file_path')?>/images/expressInstall.swf', flashvars, params, attributes);
					})(); 
				</script>
				<div class="form_part float-right">
				<?php
				$userinfo=request()->getSession('userinfo');
				if(empty($userinfo)){
				?>
				<!--登录前-->
					<div class="login-before">
						<div class="form-link clearfix">
							<ul class="list-inline with_sep float-right">
								<li><a href="/?c=Agtest" target="_blank">免费试玩</a></li>
								<li><a href="javascript:" id="pw_forget">忘记密码?</a></li>
							</ul>
						</div>
						<form name="LoginForm" id="LoginForm" method="post" class="form form-inline">
						<input type="hidden" name="url" value="<?=$_SERVER["QUERY_STRING"]?>" />
							<div class="form-group with_input">
								<div class="label"><i class="fa fa-user" aria-hidden="true"></i></div>
								<div class="form-control">
									<input name="username" type="text"  id="username" title="请填写 <?=$usernamemin?>-<?=$usernamemax?> 位大小写英数字" maxlength="<?=$usernamemax?>" placeholder="账号"  tabindex="1" pattern="[a-zA-Z0-9]{<?=$usernamemin?>,<?=$usernamemax?>}" required >
								</div>
							</div>
							<div class="form-group with_input">
								<div class="label"><i class="fa fa-key" aria-hidden="true"></i></div>
								<div class="form-control">
									<input name="password" type="password" autocomplete="off" id="password" title="请填写 6-16 位大小写英数字" maxlength="16" tabindex="2"  placeholder="密码">
								</div>
							</div>
							<?php 
								$login_vcode=$webconfg['login_vcode'];
								if($login_vcode == 1){
								?>
								<div class="form-group with_input code">
									<div class="label">
									<img src="/?c=home&a=VCode" id='vPic' alt="(点选此处产生新验证码 )" title="(点选此处产生新验证码 )"  >
									</div>
									<div class="form-control">
										<input name="VerifyCode" type="text" id="VerifyCode" size="7" maxlength="4" title="(点选此处产生新验证码 )" tabindex="3" pattern="\d{4}" required class="form-control" placeholder="验证码">
									</div>
								</div>
							<?php }?>
							<div class="form-group fg_button">
								<div class="form-control">
									<input class="button btn-login" name="Submit" type="submit" value="登录" tabindex="4" />
								</div>
							</div>
							<div class="form-group fg_button">
								<div class="form-control">
									<a href="/?c=Register" class="button btn-register">立即加入</a>
								</div>
							</div>
						</form>
					</div>				
				<?php
				}else{
					$userinfo=unserialize(base64_decode($userinfo));
					$daili='';
					if (isset($userinfo['is_daili'])){
						$daili=$userinfo['is_daili'];
					}
				?>
				<!--登陆后-->
					<div class="login-after clearfix">
						<div class="float-left">
							<ul class="list-inline">
								<li>
									<a href="javascript:void(0);"  onclick="AutoMember('Member');">账号：<span class="yellow"><?=$userinfo['username']?></span></a>
									<a href="javascript:void(0);" onclick="AutoMember('LatestNews');"><i class="fa fa-commenting" aria-hidden="true"></i></a>
								</li>
								<li><a href="javascript:void(0);">账户余额：<span class="yellow">$<span id="user_money" class="logged-data userMoney"></span></span><i class="fa fa-refresh" aria-hidden="true" onclick="$('#user_money').html('loading...');pjapp.getUerMoney()"></i></a></li>
							</ul>
							<ul class="list-inline with_sep mc_link">
								<li><a href="javascript:void(0);" onclick="AutoMember('LiveExChange');">额度转换</a></li>
								<li><a href="javascript:void(0);" onclick="AutoMember('Deposit');" class="green">线上存款</a></li>
								<li><a href="javascript:void(0);" onclick="AutoMember('TradingRecord','WithDraw');" class="yellow">线上取款</a></li>
								<?php if($daili>0){?>
								<li><a href="javascript:void(0);" id="su-account" onclick="AutoMember('Agent','TuiGuang');">代理中心</a></li>
								<?php }else{ ?>
								<li><a id="su-account" href="/?c=AgentApply" >申请代理</a></li>
								<?php } ?>
							</ul>
						</div>
						<div class="float-left">
							<a class="btn-logout" href="/?c=Member&a=Logout&u=<?=rawurlencode($_SERVER["QUERY_STRING"])?>"  id="nzc-nav-logout">登出</a>
						</div>
					</div>	
					<script type="text/javascript">
						pjapp.getUerMoney();
						pjapp.getmessage();
						setInterval(function(){
							pjapp.params.getUserMoneyTimer--;
							if (pjapp.params.getUserMoneyTimer<=0){
								pjapp.params.getUserMoneyTimer=15;
								pjapp.getUerMoney();
							}
							$("#NotReadCount").text($("#MsgNotReadCount").text());
						}, 1000);
						setInterval("pjapp.getmessage()",5000);
					</script>
				<?php }?>
				</div>
			</div>
			<nav class="nav-bar">
				<ul class="list-inline list-table">
					<li><a href="/">首页</a></li>
					<li class="hot"><a href="/?c=Game&a=Indexb">电子游艺</a></li>
					<li class="hot"><a href="/?c=Lottery">彩票游戏</a></li>
					<li class="hot"><a href="/?c=Live">真人娱乐</a></li>
					<li><a href="/?c=MarkSix&a=SPbside">六合彩</a></li>
					<li><a href="/?c=Sports"">体育赛事</a></li>
					<li><a href="/?c=Home&a=Offer">优惠活动</a></li>
					<li><a href="/?c=Help&page=Partner">代理加盟</a></li>
					<li><a href="javascript:;" title="在线客服" data_online="OnlineService">在线客服</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>