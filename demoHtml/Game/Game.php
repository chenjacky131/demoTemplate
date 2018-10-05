<style>
	.games-platform-wrap {
		font-size:12px;
	}a {
	    outline: medium none;
	    text-decoration: none;
	}
	.layout1000, .layout {margin: 0 auto;width: 1000px;}
	.clearfix::after, .layout::after, .layout980::after, .layout1000::after, .mod-forms li::after, .user-form::after, .mod-forms-list li::after {
	    clear: both;
	    content: ".";
	    display: block;
	    height: 0;
	    overflow: hidden;
	    visibility: hidden;
	}
	<?php if($open_agby){?>
		.games-hd-menu{height:120px; left:0; position:absolute; top:0; width:100%; z-index:10;}
		.games-hd-menu li{background:url(/content/images/games/games_spirits.png?1234) no-repeat;}
		.games-hd-menu li{cursor:pointer; display:inline; float:left; height:120px; text-indent:-9999em; width:200px;}
	
		.games-hd-menu li.mg-menu{background-position:-200px -174px;}
		.games-hd-menu li.bb-menu{background-position:-400px -174px;}
		.games-hd-menu li.ag-menu{background-position:-600px -174px;}
        .games-hd-menu li.pt-menu{background-position:-800px -174px;}
		.games-hd-menu li.agby-menu{background-position:0px -174px;}
	
		.games-hd-menu li.mg-menu.current{background-position:-200px 0;}
		.games-hd-menu li.bb-menu.current{background-position:-400px 0;}
		.games-hd-menu li.ag-menu.current{background-position:-600px 0;}
        .games-hd-menu li.pt-menu.current{background-position:-800px 0;}
		.games-hd-menu li.agby-menu.current{background-position:0px 0;}
	
	<?php }else{?>
		.games-hd-menu{height:120px; left:0; position:absolute; top:0; width:100%; z-index:10;}
		.games-hd-menu li{background:url(/content/images/games/games_spirits_noagby.png?1234) no-repeat;}
		.games-hd-menu li{cursor:pointer; display:inline; float:left; height:120px; text-indent:-9999em; width:333px;}
	
		.games-hd-menu li.mg-menu{background-position:-0px -174px;}
		.games-hd-menu li.bb-menu{background-position:-333px -174px;}
		.games-hd-menu li.ag-menu{background-position:-666px -174px;}
	
		.games-hd-menu li.mg-menu.current{background-position:-0px 0;}
		.games-hd-menu li.bb-menu.current{background-position:-333px 0;}
		.games-hd-menu li.ag-menu.current{background-position:-666px 0;}
	
	
	<?php }?>
	.games-panes {background:#111; border:#111 solid 1px; padding:10px 0px 0; min-height:400px;}
	.games-sub-menu li{color:#fff; cursor:pointer; display:inline; float:left; font-size:14px; height:31px; line-height:31px; margin-right:3px; padding-right:15px;}
	.games-sub-menu li span{display:block; padding-left:5px;}
	.games-sub-menu li.current {background:#fbcd30; -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:3px;}
	.games-sub-menu li.current span{color:#000;}
	
	.mod-games .games-item li{cursor:pointer; display:inline; float:left; margin:20px 30px 25px; overflow:hidden; text-align:center; width:180px;}
	.mod-games .games-item li .game-name{color:#7d7d7d; margin-top:8px;}
	.mod-games .games-item li:hover .game-name{color:#06b1b9;}
	.mod-games .games-item li .game-rollover a{background:#2f2e2c; border:1px solid #181817; -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:3px; margin-top:12px; height:24px; line-height:24px; float:left; display:inline; color:#939393; width:178px;}
	.mod-games .games-item li:hover .game-rollover a{border:1px solid #007baa; background:#06b1b9; color:#fff;}
	
	.mod-games .mg-item .games-item li em{background-repeat:no-repeat; width:146px; height:120px; background-position:0 -8px; display:block; margin:0 auto;}
	.mod-games .mg-item .games-item li em img:hover{ filter: brightness(2);}
	
	.mod-games .bb-item .games-item li em{background-position:0 -170px; background-repeat:no-repeat; display:block; height:120px; margin:0 auto; width:180px;}
	.mod-games .bb-item .games-item li:hover em{background-position:0 -20px;}
	
	.mod-games .ag-item .games-item li{cursor:pointer; display:inline; float:left; margin:20px 12px 25px; overflow:hidden; text-align:center; width:216px;}
	.mod-games .ag-item .games-item li em{background-repeat:no-repeat; width:216px; height:148px; background-position:0 0px; display:block; margin:0 auto;
	filter:alpha(opacity=100); /*IE滤镜，透明度50%*/
	-moz-opacity:1; /*Firefox私有，透明度50%*/
	opacity:1;/*其他，透明度50%*/
	}
	.mod-games .ag-item .games-item li:hover em{
		filter:alpha(opacity=80); /*IE滤镜，透明度50%*/
	-moz-opacity:0.8; /*Firefox私有，透明度50%*/
	opacity:0.8;/*其他，透明度50%*/
		
	}
	
	.mod-games .ag-item .games-item li .game-rollover a{background:#2f2e2c; border:1px solid #181817; -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:3px; margin-top:12px; height:24px; line-height:24px; float:left; display:inline; color:#939393; width:215px;}
	.mod-games .ag-item .games-item li:hover .game-rollover a{border:1px solid #007baa; background:#06b1b9; color:#fff;}
	.hide{display:none;}

    .mod-games .yoplay-item .games-item li{cursor:pointer; display:inline; float:left; margin:20px 12px 25px; overflow:hidden; text-align:center; width:216px;}
    .mod-games .yoplay-item .games-item li em{background-repeat:no-repeat; width:216px; height:300px; background-position:0 0px; display:block; margin:0 auto;
        filter:alpha(opacity=100); /*IE滤镜，透明度50%*/
        -moz-opacity:1; /*Firefox私有，透明度50%*/
        opacity:1;/*其他，透明度50%*/
    }
    .mod-games .yoplay-item .games-item li:hover em{
        filter:alpha(opacity=80); /*IE滤镜，透明度50%*/
        -moz-opacity:0.8; /*Firefox私有，透明度50%*/
        opacity:0.8;/*其他，透明度50%*/

    }
    .mod-games .yoplay-item .games-item li .game-rollover a{background:#2f2e2c; border:1px solid #181817; -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:3px; margin-top:12px; height:24px; line-height:24px; float:left; display:inline; color:#939393; width:215px;}
    .mod-games .yoplay-item .games-item li:hover .game-rollover a{border:1px solid #007baa; background:#06b1b9; color:#fff;}


	/* AG捕鱼 */
	.ag-content {
	    background: #fff none repeat scroll 0 0;
	    font-family: Microsoft YaHei;
	    margin: 0 auto 0px auto;
	    width: 1000px;
	}
	.ag-fishbanner {
	    background:url("/content/images/games/agby/ag-fish.jpg?123") no-repeat scroll 0 0;
	    height: 155px;
	    padding-top: 390px;
	    width: 1000px;
	}
	.ag-fishbanner a {
	    background:url("/content/images/games/agby/by-btn.png") no-repeat scroll 0 0;
	    display: block;
	    float: none;
	    height: 60px;
	    margin: 0 auto;
	    width: 217px;
	}
	.ag-fishbanner a:hover {
	    background-image: url("/content/images/games/agby/by-btn-on.png");
	}
	.ag-list .f-title {
	    background: #3474c1 none repeat scroll 0 0;
	    color: #fff100;
	    font-size: 26px;
	    height: 70px;
	    line-height: 65px;
	    text-align: center;
	}
	.ag-f-tab {
	    background: #144989 none repeat scroll 0 0;
	    padding-top: 28px;
	    text-align: center;
	}
	
	#ftb-con {
	    height: 100%;
	    overflow: hidden;
	}
	
	.ag-f-tab ul {
	    height: 38px;
	    list-style: outside none none;
	    margin: 0 auto 33px;
	    padding-left: 0;
	    width: 656px;
	}
	
	.ag-f-tab ul li.last {
	    margin-right: 0;
	}
	.ag-f-tab ul li {
	    background:url("/content/images/games/agby/f-tab-btn.png") no-repeat scroll 0 0;
	    float: left;
	    height: 38px;
	    line-height: 38px;
	    margin-right: 14px;
	    text-align: center;
	    width: 120px;
	}
	.ag-f-tab ul li a {
	    color: #fff;
	    display: block;
	    font-size: 14px;
	    font-weight: bold;
	    height: 38px;
	    outline: 0 none;
	    text-decoration: none;
	    width: 120px;
	}
	.ag-f-tab ul li.active, .ag-f-tab ul li:hover {
	    background:url("/content/images/games/agby/f-tab-btnh.png") no-repeat scroll 0 0;
	}


    /* new */
    .main_menu {
        height: 102px;
        width:100%;
        padding:0px;
        margin-top: 10px;
        margin-left:auto;
        margin-right:auto;
        margin-bottom:10px;
        background:#1f2938;
        border:#1f2938 solid 1px;

    }
    <?php if($open_agby){?>
    .main_menu ul li {
        background: #143d59 none repeat scroll 0 0;
        float: left;
        height: 100px;
        line-height: 100px;
        position: relative;
        text-align: center;
        width: 165.8px;
        cursor: pointer;
    }
    <?php }else{?>
    .main_menu ul li {
        background: #143d59 none repeat scroll 0 0;
        float: left;
        height: 100px;
        line-height: 100px;
        position: relative;
        text-align: center;
        width: 215.6px;
        cursor: pointer;
    }
    <?php }?>
    .main_menu ul li:hover {
        /* border-bottom: 2px solid #294874;height: 98px!important; */
        background: #0e1f39 none repeat scroll 0 0;
    }
    .main_menu ul li.current {
        background: #0e1f39 none repeat scroll 0 0 !important;
    }
    .main_menu ul li p {
        left: 0px;
        position: absolute;
        top: 0px;
        width:100%;
        text-align:center;
        margin: 0px;
    }
    .game_left {
        margin-left: 1px;
    }
    .main_menu ul li a {
        color: #fff;
        display: block;
        height: 100px;
        line-height: 150px;
        width: 100%;
        text-align:center;
    }
    .search-box{width:auto; float:left; overflow: hidden; position: absolute; right:26px; margin-top:2px;}
    .search-box>input{width:180px; height: 23px; line-height: 23px; padding: 2px 5px; float:left; border-radius: 2px; background: #ededed; border:none;  }
    .search-box>span{width:80px; height:25px; line-height:25px; color:#0a0a0a; float:left; font-size:15px; cursor: pointer; margin-left:2px; background: #ededed; border:1px solid #d7d7d7; border-radius:2px; text-align: center; }
    .search-box>span:active{background:#aaa}
</style>

    <div class="layout games-platform-wrap m-t-30" style="position: relative;width: 1024px;">
            <div class="main_menu w" id="games-hd-menu">
                <ul>
                    <li class="game_left <?=$gt=='mg'?'current':''?>" target="mg-item">
                        <p><img src="/content/images/games/m_game.png" /></p>
                        <a>MG电子</a>
                    </li>
                    <li class="game_left <?=$gt=='bbin'?'current':''?>" target="bb-item">
                        <p><img src="/content/images/games/bbin_game.png" /></p>
                        <a>BBIN电子</a>
                    </li>
                    <li class="game_left <?=$gt=='ag'?'current':''?>" target="ag-item">
                        <p><img src="/content/images/games/Ag_game.png" /></p>
                        <a>AG电子</a>
                    </li>
                    <li class="game_left <?=$gt=='yoplay'?'current':''?>" target="yoplay-item">
                        <p><img src="/content/images/games/YoPlay_game.png" /></p>
                        <a>YoPlay电子</a>
                    </li>
                    <li class="game_left <?=$gt=='pt'?'current':''?>" target="pt-item">
                        <p><img src="/content/images/games/playlech_game.png" /></p>
                        <a>PT电子</a>
                    </li>
                </ul>
            </div>

            <div class="games-panes clearfix" id='gamebox' <?=$gt=="agby"?"style='padding:0px 0 0 0;'":($gt=="mg"?"style='padding-left:18px;'":"")?>>
                <!-- MG游戏厅 -->
                <div class="games-platform-item mg-item <?=$gt=='mg'?'':'hide'?>">
                    <?php require_once  'mg.php';?>
                </div>

                <!-- BB游戏厅 -->
                <div class="games-platform-item bb-item <?=$gt=='bbin'?'':'hide'?>">
                    <?php require_once  'bbin.php';?>
                </div>
                <!-- AG游戏厅 -->
                <div class="games-platform-item ag-item <?=$gt=='ag'?'':'hide'?>">
                    <?php require_once  'ag.php';?>
                </div>
                <!-- YOPLAY游戏厅 -->
                <div class="games-platform-item yoplay-item <?=$gt=='ag'?'':'hide'?>">
                    <?php require_once  'yoplay.php';?>
                </div>
                <!-- PT游戏厅 -->
                <div class="games-platform-item pt-item <?=$gt=='pt'?'':'hide'?>">
                    <?php require_once  'pt.php';?>
                </div>
                <div style='clear:both'></div>
            </div>
        </div>
	<script>
		function setFrameSize(id){
			try{
		    var heightA = $(document.body).height();
				$(window.parent.document).find("#mbody").css("height",""+heightA+"px");
			}catch (ex){}
		}
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		setFrameSize('mod-games');
	    $("#games-hd-menu").find("li").click(function(){
	        $("#games-hd-menu").find("li.current").removeClass("current");
	        $(this).addClass("current");
	        $(".games-platform-item").hide();
			if($(this).attr('target')=='agby-item'){
				$('#gamebox').css('padding','0px 0 0 0');
			}else{
				$('#gamebox').css('padding','10px 18px 0 18px');
			}
	        $("div."+$(this).attr("target")).show();
	        $(".games-sub-menu:visible").find("li:first").click();
			setFrameSize('mod-games');
	    });
	
	    $(".games-sub-menu").find("li").click(function(){
	        $(".games-sub-menu").find(".current").removeClass("current");
	        var index = $(this).attr("class").replace("tab",'');
	        index = parseInt(index)-1;
	        $(this).addClass("current");
	        $(".games-item:visible").find("ul").addClass("hide");
	        $(".games-item:visible").find("ul:eq("+index+")").removeClass("hide");
			setFrameSize('mod-games');
	    });
	
	    $('#mggame_list li').bind('click',function(){
	    	if(isLogin()){
		        var gameId = $(this).find("em").attr("gameid");
				//live.mgGame("/?c=Live&a=MGINGo&gamecode="+gameId);
				window.open("/egame/loading.html?id=" + gameId + "&type=mg","egame");
	    	}
			return false;
	    });
	
	    $('#bbgame_list li').bind('click',function(){
	    	if(isLogin()){
				//live.bbinGame("/?c=Live&a=BBINGo");
				window.open("/egame/loading.html?id=0&type=bb","egame");
	    	}
			return false;
	    });
		 $('#aggame_list li').bind('click',function(){
			 if(isLogin()){
		       	var gameId = $(this).find("em").attr("class").replace('ag','');
				//live.agGame("/?c=Live&a=AGINGo&gametype="+gameId);
				window.open("/egame/loading.html?id=" + gameId + "&type=ag","egame");
			 }
			return false;
	    });
		$('.ag-fishbanner .ag-link').bind('click',function(){
			if(isLogin()){
				//live.agGame("/?c=Live&a=AGINGo&gametype="+gameId);
				window.open("/egame/loading.html?id=6&type=ag","egame");
			}
			return false;
	    });
        $('#yoplaygame_list li').bind('click',function(){
            if(isLogin()){
                var gameId = $(this).find("em").attr("class");
                window.open("/egame/loading.html?id=" + gameId + "&type=ag","egame");
            }
            return false;
        });
        $('#showcase>.group-games-list>ul').bind('click',function(){
            if(isLogin()){
                var gameId = $(this).attr("id").replace('PT_','');
                window.open("/egame/loading.html?id=" + gameId + "&type=pt","egame");
            }
            return false;
        });
		
	});
	var by_width = {"1":727,"2":895,"3":920,"4":928,"5":928}; 
	function showFish(obj,idx){
		$("#ftb-con ul li").removeClass("active");
		obj.addClass('active');
		$('.loginbox-top span').html(obj.find('a').html());
		$("#index_loginbox").height($(document).height());
		$('.loginbox-main img').attr('src',"/content/images/games/agby/tab_img"+idx+".jpg");
		//alert(by_width[idx]);
		$("#index_loginbox .loginbox").css('margin-left',-by_width[idx]/2);
		$("#index_loginbox").css('display', 'block');
	}
	function isLogin(){
		if($("#nzc-nav-logout").length == 0){
				//betCommon.eAlertOrClose('请先登录!');
				login.loginForm();
				return false;
		}
		return true;
	}
	function loginboxout() {
		$("#index_loginbox").css('display', 'none');
	}
	</script> 
	<style>
	/* 捕鱼 */
	#index_loginbox { display:none; overflow: hidden; height:200%; width:100%; background: rgba(0,0,0,0.5); z-index:100; position: absolute; top:0; left:0;   }
	#index_loginbox a { text-decoration:none; }
	#index_loginbox .loginbox { box-shadow: 0 0  6px rgba(0,0,0,0.5);  margin-top:-270px;  position: fixed; top: 50%; left:50%; background: rgb(252,244,225);  border: 2px solid rgb(242, 218, 168); }
	#index_loginbox .loginbox .loginbox-top {  height:35px; line-height:35px; margin-left:10px; }
	#index_loginbox .loginbox .loginbox-top span {   display: inline-block; font-size: 15px; font-weight:bold; }
	#index_loginbox .loginbox .loginbox-top a { display: inline-block; float: right; font-size: 25px; margin-right: 8px; }
	#index_loginbox .loginbox .loginbox-main {  margin:0 auto; }
	
	
	/* BBIN-娓告垙鍘� */
	.Game_5001{background:url(/content/images/games/bbin/Game_5001.png);}
	.Game_5002{background:url(/content/images/games/bbin/Game_5002.png);}
	.Game_5003{background:url(/content/images/games/bbin/Game_5003.png);}
	.Game_5004{background:url(/content/images/games/bbin/Game_5004.png);}
	.Game_5011{background:url(/content/images/games/bbin/Game_5011.png);}
	.Game_5012{background:url(/content/images/games/bbin/Game_5012.png);}
	.Game_5013{background:url(/content/images/games/bbin/Game_5013.png);}
	.Game_5014{background:url(/content/images/games/bbin/Game_5014.png);}
	.Game_5015{background:url(/content/images/games/bbin/Game_5015.png);}
	.Game_5016{background:url(/content/images/games/bbin/Game_5016.png);}
	.Game_5017{background:url(/content/images/games/bbin/Game_5017.png);}
	.Game_5018{background:url(/content/images/games/bbin/Game_5018.png);}
	.Game_5019{background:url(/content/images/games/bbin/Game_5019.png);}
	.Game_5020{background:url(/content/images/games/bbin/Game_5020.png);}
	.Game_5025{background:url(/content/images/games/bbin/Game_5025.png);}
	.Game_5026{background:url(/content/images/games/bbin/Game_5026.png);}
	.Game_5027{background:url(/content/images/games/bbin/Game_5027.png);}
	.Game_5028{background:url(/content/images/games/bbin/Game_5028.png);}
	.Game_5029{background:url(/content/images/games/bbin/Game_5029.png);}
	.Game_5030{background:url(/content/images/games/bbin/Game_5030.png);}
	.Game_5034{background:url(/content/images/games/bbin/Game_5034.png);}
	.Game_5035{background:url(/content/images/games/bbin/Game_5035.png);}
	.Game_5039{background:url(/content/images/games/bbin/Game_5039.png);}
	.Game_5040{background:url(/content/images/games/bbin/Game_5040.png);}
	.Game_5041{background:url(/content/images/games/bbin/Game_5041.png);}
	.Game_5042{background:url(/content/images/games/bbin/Game_5042.png);}
	.Game_5047{background:url(/content/images/games/bbin/Game_5047.png);}
	.Game_5048{background:url(/content/images/games/bbin/Game_5048.png);}
	.Game_5049{background:url(/content/images/games/bbin/Game_5049.png);}
	.Game_5050{background:url(/content/images/games/bbin/Game_5050.png);}
	.Game_5057{background:url(/content/images/games/bbin/Game_5057.png);}
	.Game_5058{background:url(/content/images/games/bbin/Game_5058.png);}
	.Game_5059{background:url(/content/images/games/bbin/Game_5059.png);}
	.Game_5060{background:url(/content/images/games/bbin/Game_5060.png);}
	.Game_5061{background:url(/content/images/games/bbin/Game_5061.png);}
	.Game_5062{background:url(/content/images/games/bbin/Game_5062.png);}
	.Game_5070{background:url(/content/images/games/bbin/Game_5070.png);}
	.Game_5073{background:url(/content/images/games/bbin/Game_5073.png);}
	.Game_5076{background:url(/content/images/games/bbin/Game_5076.png);}
	.Game_5077{background:url(/content/images/games/bbin/Game_5077.png);}
	.Game_5078{background:url(/content/images/games/bbin/Game_5078.png);}
	.Game_5079{background:url(/content/images/games/bbin/Game_5079.png);}
	.Game_5080{background:url(/content/images/games/bbin/Game_5080.png);}
	.Game_5083{background:url(/content/images/games/bbin/Game_5083.png);}
	.Game_5084{background:url(/content/images/games/bbin/Game_5084.png);}
	.Game_5086{background:url(/content/images/games/bbin/Game_5086.png);}
	.Game_5088{background:url(/content/images/games/bbin/Game_5088.png);}
	.Game_5089{background:url(/content/images/games/bbin/Game_5089.png);}
	.Game_5091{background:url(/content/images/games/bbin/Game_5091.png);}
	.Game_5092{background:url(/content/images/games/bbin/Game_5092.png);}
	.Game_5093{background:url(/content/images/games/bbin/Game_5093.png);}
	.Game_5094{background:url(/content/images/games/bbin/Game_5094.png);}
	.Game_5095{background:url(/content/images/games/bbin/Game_5095.png);}
	.Game_5101{background:url(/content/images/games/bbin/Game_5101.png);}
	.Game_5102{background:url(/content/images/games/bbin/Game_5102.png);}
	.Game_5103{background:url(/content/images/games/bbin/Game_5103.png);}
	.Game_5104{background:url(/content/images/games/bbin/Game_5104.png);}
	.Game_5106{background:url(/content/images/games/bbin/Game_5106.png);}
	.Game_5115{background:url(/content/images/games/bbin/Game_5115.png);}
	.Game_5116{background:url(/content/images/games/bbin/Game_5116.png);}
	.Game_5117{background:url(/content/images/games/bbin/Game_5117.png);}
	.Game_5118{background:url(/content/images/games/bbin/Game_5118.png);}
	.Game_5131{background:url(/content/images/games/bbin/Game_5131.png);}
	.Game_5201{background:url(/content/images/games/bbin/Game_5201.png);}
	.Game_5202{background:url(/content/images/games/bbin/Game_5202.png);}
	.Game_5203{background:url(/content/images/games/bbin/Game_5203.png);}
	.Game_5204{background:url(/content/images/games/bbin/Game_5204.png);}
	.Game_5401{background:url(/content/images/games/bbin/Game_5401.png);}
	.Game_5402{background:url(/content/images/games/bbin/Game_5402.png);}
	.Game_5403{background:url(/content/images/games/bbin/Game_5403.png);}
	.Game_5404{background:url(/content/images/games/bbin/Game_5404.png);}
	.Game_5405{background:url(/content/images/games/bbin/Game_5405.png);}
	.Game_5407{background:url(/content/images/games/bbin/Game_5407.png);}
	.Game_5601{background:url(/content/images/games/bbin/Game_5601.png);}
	.Game_5701{background:url(/content/images/games/bbin/Game_5701.png);}
	.Game_5703{background:url(/content/images/games/bbin/Game_5703.png);}
	.Game_5704{background:url(/content/images/games/bbin/Game_5704.png);}
	.Game_5705{background:url(/content/images/games/bbin/Game_5705.png);}
	.Game_5706{background:url(/content/images/games/bbin/Game_5706.png);}
	.Game_5707{background:url(/content/images/games/bbin/Game_5707.png);}
	.Game_5708{background:url(/content/images/games/bbin/Game_5708.png);}
	.Game_5801{background:url(/content/images/games/bbin/Game_5801.png);}
	.Game_5802{background:url(/content/images/games/bbin/Game_5802.png);}
	.Game_5803{background:url(/content/images/games/bbin/Game_5803.png);}
	.Game_5804{background:url(/content/images/games/bbin/Game_5804.png);}
	.Game_5805{background:url(/content/images/games/bbin/Game_5805.png);}
	.Game_5806{background:url(/content/images/games/bbin/Game_5806.png);}
	.Game_5808{background:url(/content/images/games/bbin/Game_5808.png);}
	.Game_5809{background:url(/content/images/games/bbin/Game_5809.png);}
	.Game_5810{background:url(/content/images/games/bbin/Game_5810.png);}
	.Game_5811{background:url(/content/images/games/bbin/Game_5811.png);}
	.Game_5821{background:url(/content/images/games/bbin/Game_5821.png);}
	.Game_5823{background:url(/content/images/games/bbin/Game_5823.png);}
	.Game_5824{background:url(/content/images/games/bbin/Game_5824.png);}
	.Game_5825{background:url(/content/images/games/bbin/Game_5825.png);}
	.Game_5826{background:url(/content/images/games/bbin/Game_5826.png);}
	.Game_5827{background:url(/content/images/games/bbin/Game_5827.png);}
	.Game_5828{background:url(/content/images/games/bbin/Game_5828.png);}
	.Game_5831{background:url(/content/images/games/bbin/Game_5831.png);}
	.Game_5832{background:url(/content/images/games/bbin/Game_5832.png);}
	.Game_5833{background:url(/content/images/games/bbin/Game_5833.png);}
	.Game_5835{background:url(/content/images/games/bbin/Game_5835.png);}
	.Game_5836{background:url(/content/images/games/bbin/Game_5836.png);}
	.Game_5837{background:url(/content/images/games/bbin/Game_5837.png);}
	.Game_5901{background:url(/content/images/games/bbin/Game_5901.png);}
	.Game_5902{background:url(/content/images/games/bbin/Game_5902.png);}
	.Game_5903{background:url(/content/images/games/bbin/Game_5903.png);}
	.Game_5888{background:url(/content/images/games/bbin/Game_5888.png);}
	.Game_15006{background:url(/content/images/games/bbin/Game_15006.png);}
	.Game_15016{background:url(/content/images/games/bbin/Game_15016.png);}
	.Game_15018{background:url(/content/images/games/bbin/Game_15018.png);}
	.Game_15019{background:url(/content/images/games/bbin/Game_15019.png);}
	.Game_15021{background:url(/content/images/games/bbin/Game_15021.png);}
	.Game_15022{background:url(/content/images/games/bbin/Game_15022.png);}
	.Game_15024{background:url(/content/images/games/bbin/Game_15024.png);}
	.Game_15027{background:url(/content/images/games/bbin/Game_15027.png);}
	/* 鐢靛瓙娓告垙 end */
	.ag101{background:url(/content/images/games/ag/FRU.jpg );}
	.ag102{background:url(/content/images/games/ag/PKBJ.jpg);}
	.ag103{background:url(/content/images/games/ag/SLM1.jpg);}
	.ag104{background:url(/content/images/games/ag/SLM2.jpg);}
	.ag105{background:url(/content/images/games/ag/SLM3.jpg);}
	.ag106{background:url(/content/images/games/ag/SC01.jpg);}
	.ag107{background:url(/content/images/games/ag/TGLW.jpg);}
	.ag108{background:url(/content/images/games/ag/SB01.jpg);}
	.ag109{background:url(/content/images/games/ag/SB02.jpg);}
	.ag110{background:url(/content/images/games/ag/SB03.jpg);}
	.ag111{background:url(/content/images/games/ag/SB04.jpg);}
	.ag112{background:url(/content/images/games/ag/SB05.jpg);}
	.ag113{background:url(/content/images/games/ag/SB06.jpg);}
	.ag114{background:url(/content/images/games/ag/SB07.jpg);}
	.ag115{background:url(/content/images/games/ag/SB08.jpg);}
	.ag116{background:url(/content/images/games/ag/SB09.jpg);}
	.ag117{background:url(/content/images/games/ag/SB10.jpg);}
	.ag118{background:url(/content/images/games/ag/SB11.jpg);}
	.ag119{background:url(/content/images/games/ag/SB12.jpg);}
	.ag120{background:url(/content/images/games/ag/SB13.jpg);}
	.ag121{background:url(/content/images/games/ag/SB14.jpg);}
	.ag122{background:url(/content/images/games/ag/SB15.jpg);}
	.ag123{background:url(/content/images/games/ag/SB16.jpg);}
	.ag124{background:url(/content/images/games/ag/SB17.jpg);}
	.ag125{background:url(/content/images/games/ag/SB18.jpg);}
	.ag126{background:url(/content/images/games/ag/SB19.jpg);}
	.ag127{background:url(/content/images/games/ag/SB20.jpg);}
	.ag128{background:url(/content/images/games/ag/SB21.jpg);}
	.ag129{background:url(/content/images/games/ag/SB22.jpg);}
	.ag130{background:url(/content/images/games/ag/SB23.png);}
	.ag131{background:url(/content/images/games/ag/SB24.jpg);}
	.ag132{background:url(/content/images/games/ag/SB25.jpg);}
	.ag133{background:url(/content/images/games/ag/SB26.jpg);}
	.ag134{background:url(/content/images/games/ag/SB27.jpg);}
	.ag135{background:url(/content/images/games/ag/SB28.jpg);}
	.ag136{background:url(/content/images/games/ag/SB29.jpg);}
	.ag137{background:url(/content/images/games/ag/AV01.jpg);}
	.ag138{background:url(/content/images/games/ag/TGCW.jpg);}
	.ag200{background:url(/content/images/games/ag/XG01.jpg);}
	.ag201{background:url(/content/images/games/ag/XG02.jpg);}
	.ag202{background:url(/content/images/games/ag/XG03.jpg);}
	.ag203{background:url(/content/images/games/ag/XG04.jpg);}
	.ag204{background:url(/content/images/games/ag/XG05.jpg);}
	.ag205{background:url(/content/images/games/ag/XG06.jpg);}
	.ag206{background:url(/content/images/games/ag/XG07.jpg);}
	.ag207{background:url(/content/images/games/ag/XG08.jpg);}
    /* yoplay */
    .YP810{background:url(/content/images/games/yoplay/pc_forestDance_multi.png );}
    .YP807{background:url(/content/images/games/yoplay/pc_animals.png);}
    .YP800{background:url(/content/images/games/yoplay/ygfs_icon_pc.png);}
    .YP802{background:url(/content/images/games/yoplay/pc_benz.png);}
    .YP801{background:url(/content/images/games/yoplay/pc_forestDance_single.png);}
    .YP804{background:url(/content/images/games/yoplay/pc_guessNfun.png);}
    .YP817{background:url(/content/images/games/yoplay/ymbn_icon.png);}
    .YP813{background:url(/content/images/games/yoplay/pc_fruit_multi.png);}
    .YP803{background:url(/content/images/games/yoplay/pc_horseRacing.png);}
    .YP806{background:url(/content/images/games/yoplay/pc_texasCowboy.png);}
    .YP805{background:url(/content/images/games/yoplay/pc_fruit_single.png);}
    .YP808{background:url(/content/images/games/yoplay/pc_fruitParty.png);}
	</style>