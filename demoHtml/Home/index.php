<!DOCTYPE html>
<html>
<head>
    <?php require_once VIEWS_PATH.'/head.php';?>
    <link rel="stylesheet" type="text/css" href="content/css/slick.css">
</head>
<body class="body_home">
<?php require_once VIEWS_PATH.'/header.php';?>
<!-- 轮播图 -->
<?php require_once VIEWS_PATH.'/Banner.php';?>
<!-- 公告 -->
<?php require_once VIEWS_PATH.'/Notice.php';?>
<!-- 主体内容 -->
<div class="content_home">
    <div class="wrapper"> 
        <div class="mod-games">
            <?php 
                $imgpath = "/content";
                $gt = "mg";
            ?>
            <?php require_once VIEWS_PATH.'/Game/Game.php';?>
            <div class="winner_list">
                <div class="jackpot" id="jackpot">
                </div>   
                <div class="win_list">
                    <ul>
                        <li><i class="icon i_mg"><img src="/content/images/games/m_game.png"></i> <span class="jackpto_mg">--</span></li> 
                        <li><i class="icon i_bb"><img src="/content/images/games/bbin_game.png"></i> <span class="jackpto_bb">--</span></li> 
                        <li><i class="icon i_ag"><img src="/content/images/games/Ag_game.png"></i> <span class="jackpto_ag">--</span></li> 
                        <li><i class="icon i_yp"><img src="/content/images/games/YoPlay_game.png"></i> <span class="jackpto_yp">--</span></li> 
                        <li><i class="icon i_pt"><img src="/content/images/games/playlech_game.png"></i> <span class="jackpto_pt">--</span></li> 
                    </ul>
                </div>    
                <span class="more"><a href="/?c=Game&a=Indexb">浏览全部</a>累计奖池游戏</span>         
                <script>
                    $(function(){
                        siteCommon.jackpotNum('#jackpot',1,6214658921);
                        siteCommon.upMarquee('.win_list',2500);
                        siteCommon.jackpotNum('.jackpto_mg',2,1134287546);
                        siteCommon.jackpotNum('.jackpto_bb',3,1621456824);
                        siteCommon.jackpotNum('.jackpto_ag',4,1354264895);
                        siteCommon.jackpotNum('.jackpto_yp',5,1362481025);
                        siteCommon.jackpotNum('.jackpto_pt',6,1124865721);
                    });
                </script>                
            </div>
        </div>
        <div class="home_link">
            <ul>
                <li class="fish">
                    <a href="/?c=Game&a=Indexb">
                        <span>捕鱼达人</span>
                        <div class="img"></div>
                    </a>
                </li>
                <li class="game">
                    <a href="/?c=Game&a=Indexb">
                        <span>电子游艺</span>
                        <div class="img"></div>
                    </a>
                </li>
                <li class="live">
                    <a href="/?c=Live">
                        <span>现场荷官</span>
                        <div class="img"></div>
                    </a>
                </li>
                <li class="sport">
                    <a href="/?c=Sports">
                        <span>体育赛事</span>
                        <div class="img"></div>
                    </a>
                </li>
                <li class="lottery">
                    <a href="/?c=Lottery">
                        <span>彩票游戏</span>
                        <div class="img"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>