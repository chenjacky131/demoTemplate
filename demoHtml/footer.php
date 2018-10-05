<?php include('views/default/extend.php');?>
<footer>
    <div class="wrapper">
        <ul class="footer_link list-inline with_sep">
            <li><a href="/?c=Help&page=Aoutus">关于我们</a></li>
            <li><a href='/?c=Help&page=Contactus'>联系我们</a></li>
            <li><a href='/?c=Help&page=Partner'>合作伙伴</a></li>
            <li><a href='/?c=Help&page=Deposit'>存款帮助</a></li>
            <li><a href='/?c=Help&page=Withdraw'>取款帮助</a></li>
            <li><a href='/?c=Help&page=Problem'> 常见问题</a></li>
        </ul>
        <div class="footer_partner">
        </div>
        <div class="footer_bottom">
            <div class="footer_info">
                <p class="title">关于<span><?=$webconfg['web_name']?></span></p>
                <p>欢迎来到<span><?=$webconfg['web_name']?></span>，亚洲领先在线娱乐投注网站，为您呈现不一样的在线投注体验，包括体育投注，在线娱乐场，真人娱乐场游戏，在线扑克，老虎机游戏和更多世界顶级投注游戏</p>
            </div>
            <ul class="footer_contact">
                <li class="mail" >88@8888.com</li>
                <li class="tel">客服热线：<span >+88-888-888</span></li>
                <li class="chat">24小时在线客服</li>
                <li class="qq" >QQ：<span >88888</span></li>
            </ul>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function () {// 全局要执行的脚本
        siteCommon.timeNow('time_now');
		// 文字闪烁
		siteCommon.tBlink($(".top-link1"),"#f0f","red",250);
    });
</script>
<script type="text/javascript">// 所有站都需要的脚本
    var index = null;
    var navLi = $(".nav-bar>ul>li");// 导航li
    <?php
        $c= get('c');
        $a = get('a');
        if ($c == "Sports"){
            echo 'index = 5;';
        }elseif ($c == "Live"){
            echo 'index = 3;';
        }elseif ($c == "Game"){
            echo 'index = 1;';
        }elseif ($c == "Lottery"){
            echo 'index = 2;';
        }elseif ($c == "Mobile"){
            echo 'index = 7;';
        }elseif ($c == "Home"){
            echo 'index = 0;';
            if($a == 'Offer'){
                echo 'index = 6;';
            }
        }else{
            echo 'index = 0;';
        }
    ?>
    navLi.removeClass("active");
    if(index != null){
        navLi.eq(index).addClass("active");
    }
</script>