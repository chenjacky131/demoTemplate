<style>
    #categorybutton {
        width: 99%;
        width: calc(100% - 10px);
        height: 32px;
        margin: 5px auto auto;
        padding: 0;
        border: 1px solid #434343;
        background: #000;
        clear: both
    }

    #categorybutton .title {
        height: 30px;
        border: 0;
        background: #000;
        color: #fff;
        font-size: 12px;
        border-right: 1px solid #434343;
        letter-spacing: -.1em
    }

    #categorybutton button {
        height: 24px;
        padding: 0;
        background: #000;
        border: 0;
        font-size: 13px;
        text-align: center;
        color: #fff;
        float: left;
        word-spacing: -.25em;
        letter-spacing: -.08em;
        margin: 4px 0;
        overflow: visible
    }

    #categorybutton .default:hover {
        background: #434343;
        color: #ff0;
        border-radius: 5px;
        cursor: pointer;
        border: 0
    }

    #categorybutton .default:active {
        position: relative;
        top: 1px
    }

    #categorybutton .selected {
        background: #434343;
        border: 0;
        color: #ff0;
        cursor: pointer;
        border-radius: 5px;
        margin: 4px 0
    }

    #categorybutton #tag {
        margin: -13px -11px -60px -60px;
        border: 0;
        top: 0;
        float: right
    }

    #categorybutton #tag .hot,#categorybutton #tag .new {
        width: 32px;
        height: 22px;
        float: left
    }
    #showcase {
        min-height: 100vh;
        margin: auto;
        padding-top: 5px;
        padding-bottom: 20px;
        clear: both
    }

    #showcase .comingsoon {
        width: 600px;
        border-radius: 6px;
        margin: 30px auto 0;
        padding: 2px;
        background: #606060;
        background: -moz-linear-gradient(-45deg,#606060 0,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#4e4e4e 76%,#383838 87%,#1b1b1b 100%);
        background: -webkit-linear-gradient(-45deg,#606060 0,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#4e4e4e 76%,#383838 87%,#1b1b1b 100%);
        background: linear-gradient(135deg,#606060 0,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#4e4e4e 76%,#383838 87%,#1b1b1b 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606060', endColorstr='#1b1b1b', GradientType=1 )
    }

    #showcase .comingsoon>p,#showcase .maintenance {
        font-size: 24px;
        color: #fdf1aa;
        padding: 60px 0;
        text-shadow: 1px 1px 2px #000;
        text-align: center
    }

    #showcase .comingsoon>p {
        background: rgba(30,30,30,1);
        margin: 0;
        box-shadow: inset 0 0 100px rgba(0,0,0,.7)
    }

    #showcase .maintenance {
        background: rgba(100,100,100,.3);
        width: 600px;
        margin: 30px auto 0;
        box-shadow: 0 6px 20px rgba(0,0,0,.5);
        border-radius: 6px
    }

    .group-games-list [class*=btn-] {
        display: inline-block;
        cursor: pointer
    }

    .group-games-list li,.group-games-list ol,.group-games-list ul {
        margin: 0;
        padding: 0
    }

    .group-games-list {
        box-sizing: border-box;
        margin: 0 auto;
        text-align: center
    }

    .group-games-list>ul {
        width: 164px;
        height: 188px;
        display: inline-block;
        box-sizing: border-box;
        padding: 3px 4px;
        margin:5px;
        overflow: hidden;
        position: relative;
        border: 1px solid #888800;
        cursor: pointer;
    }

    .group-games-list>ul>* {
        display: block;
        box-sizing: border-box;
        margin: 0;
        text-align: center;
        position: relative
    }

    .group-games-list>ul h1 {
        font-size: 15px;
        height: 38px;
        line-height: 38px;
        margin: 0 auto;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
        background:rgba(100,100,100,0.2);
    }

    .group-games-list>ul li.gameicon {
        padding: 6px 0 0;
        margin: 0 auto;
        min-height: 125px;
        height: 132px;
        overflow: hidden;
        box-sizing: initial
    }

    .group-games-list>ul li>* {
        display: inline-block;
        vertical-align: middle
    }

    .group-games-list>ul li:before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        height: 122px
    }

    .group-games-list>ul img {
        width: 100%;
        height: 100%;
        float:left;
    }

    .group-games-list>ul .extra {
        height: 0;
        z-index: 2
    }

    .group-games-list h1 {
        color: #ecea00
    }

    .group-games-list>b {
        white-space: nowrap;
        line-height: 38px;
        margin: 15px;
        transition: color .2s ease;
        color: #222
    }

    .group-games-list>b.active,.group-games-list>b:hover {
        color: #fff;
        text-shadow: 1px 1px 2px #000;
        box-shadow: 1px 1px 9px #ffeab5
    }

    .group-games-list>ul:hover {
        box-shadow: 0 0 3px #ecea00
    }

    .showmore {
        padding: 4px 0 20px;
        text-align: center
    }

    .showmorePadding {
        padding: 45px 0 20px
    }

    .group-games-list .resultmsg {
        color: #FFF;
        text-align: left;
        padding: 5px 25px
    }

    .group-games-list .addresult {
        padding-left: 33px
    }

    #showcase .game .tag {
        position: absolute;
        top: -10px;
        right: 0
    }

    #showcase .game .tag .hot {
        display: inline-block;
        height: 37px;
        width: 24px
    }

    #showcase .game .tag .new {
        display: inline-block;
        height: 37px;
        width: 37px;
        position: absolute;
        top: 8px;
        right: 113px
    }

    #showcase .game .hline {
        position: absolute;
        width: 136px;
        height: 1px;
        top: 90px;
        left: 0;
        border-top: 1px solid #aaa
    }

    #showcase .game button {
        padding: 0
    }

    #showcase .game button.like {
        width: 60px;
        height: 70px;
        border: 0;
        outline: 0;
        position: absolute;
        z-index: 1;
        top: 90px;
        left: 6px;
        float: right;
        font-size: 12px;
        color: #fff
    }

    #showcase .game button.like:active {
        top: 89px;
        left: 5px;
        color: #ecea00
    }

    #showcase .game button.like.selected,#showcase .game button.like:hover {
        cursor: pointer;
        color: #ecea00
    }

    #showcase .game .vline {
        position: absolute;
        width: 1px;
        height: 44px;
        top: 90px;
        left: 69px;
        border-left: 1px solid #aaa
    }

    #showcase .game button.addFav,#showcase .game button.login,#showcase .game button.trial {
        border: 0;
        outline: 0;
        position: absolute;
        z-index: 1;
        float: right
    }

    #showcase .game button.addFav {
        width: 60px;
        height: 70px;
        top: 90px;
        left: 70px;
        font-size: 12px;
        color: #fff
    }

    #showcase .game button.game,#showcase .game button.login,#showcase .game button.trial {
        width: 138px;
        height: 80px;
        font-size: 12px;
        padding: 40px 0 0
    }

    #showcase .game button.addFav:active {
        top: 89px;
        left: 69px;
        color: #ecea00
    }

    #showcase .game .default:hover {
        cursor: pointer;
        color: #ecea00
    }

    #showcase .game .addFav.selected {
        cursor: pointer;
        color: #ecea00!important
    }

    #showcase .game button.trial {
        top: 0;
        left: 0;
        color: #fff
    }

    #showcase .game button.trial:active {
        top: 1px;
        left: -1px;
        color: #ecea00
    }

    #showcase .game button.trial:hover {
        cursor: pointer;
        color: #ecea00
    }

    #showcase .game button.login {
        top: 0;
        left: 0;
        color: #fff
    }

    #showcase .game button.login:active {
        top: 1px;
        left: -1px;
        color: #ecea00
    }

    #showcase .game button.login:hover {
        cursor: pointer;
        color: #ecea00
    }

    #showcase .game button.game {
        border: 0;
        outline: 0;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        float: right;
        color: #fff
    }

    #showcase .game button.deposit,#showcase .game button.register {
        width: 44px;
        height: 44px;
        border: 0;
        float: right;
        position: absolute;
        outline: 0;
        z-index: 1
    }

    #showcase .game button.game:active {
        top: 1px;
        left: -1px;
        color: #ecea00
    }

    #showcase .game button.game:hover {
        cursor: pointer;
        color: #ecea00
    }

    #showcase .game button.register {
        top: 70px;
        right: 20px
    }

    #showcase .game button.deposit:active,#showcase .game button.register:active {
        top: 71px;
        right: 21px
    }

    #showcase .game button.deposit {
        top: 70px;
        right: 20px
    }

    #showcase li .game-btns {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 134px;
        padding-top: 20px;
        margin-left: -300px;
        z-index: 1;
        border-radius: 4px
    }

    #showcase li .game-btns .btnstart {
        color: #6a450f;
        margin: 32px auto 0;
        display: inline-block;
        height: 32px;
        width: 90px;
        line-height: 32px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        text-indent: 8px;
        text-shadow: 0 1px 0 #e4bb92;
        position: relative;
        box-shadow: 0 1px 10px #111;
        border-radius: 15px;
        cursor: pointer
    }

    #showcase li .game-btns .btnstart:active {
        top: 2px
    }

    button.btn-browseall,button.btn-showmore {
        border: 0;
        color: #111;
        font-weight: 700;
        width: 138px;
        padding: 0 10px;
        height: 46px
    }

    button.btn-browseall.active,button.btn-browseall:hover,button.btn-showmore.active,button.btn-showmore:hover {
        outline: 0
    }

    .group-games-list>#showmore>button.active,.group-games-list>#showmore>button:hover {
        text-shadow: 1px 1px 2px #ccb261;
        outline: 0
    }


    #showcase .info table {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -o-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%)
    }

    #showcase .info table td.title {
        text-align: right
    }

    #showcase .info table td.content {
        text-align: left
    }

    #showcase .info table td.bonus {
        text-align: center;
        letter-spacing: -.08em
    }

    #showcase .hideGameIntro,#showcase .hideNoRecord {
        display: none
    }

    #showcase .showNoRecord {
        color: #f2f2f2;
        vertical-align: middle;
        width: 100%;
        height: 149px;
        line-height: 149px
    }

    #showcase .info {
        position: absolute;
        display: inline-block;
        color: #fff;
        height: 149px;
        width: 90px;
        margin-left: -90px;
        border-radius: 4px;
        z-index: 1;
        overflow: hidden;
        font-size: 11px;
        -webkit-transform: scale(.92);
        -o-transform: scale(1);
        opacity: 0;
        background: rgba(33,33,33,.9);
        border: 1px solid #807e7e;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        margin-top: 34px
    }

    #showcase div.unique {
        width: 150px;
        margin-left: -155px
    }

    #showcase table.unique {
        width: 90px!important
    }

    #showcase .noBonus {
        display: none
    }

    #showcase .sixPerLine {
        width: 985px;
        text-align: left
    }

    #showcase .sixPerLine>ul {
        width: 163px
    }
</style>
<div id="showcase" data-ui="showcase">
    <div class="group-games-list">

        <ul class="game" id="PT_bib" data-id="hot|game" style="opacity: 1; z-index:429;">
            <h1 class="gamename" title="湛蓝深海">湛蓝深海</h1>

            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_bib" src="/content/images/games/pt/great_blue.jpg"/>
            </li>
        </ul>
        <ul class="game" id="PT_zcjb" data-id="hot|game" style="opacity: 1; z-index:427;">
            <h1 class="gamename" title="招财进宝">招财进宝</h1>
            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_zcjb" src="/content/images/games/pt/Zhao Cai Jin Bao_216x183.png"/>
            </li>
        </ul>
        <ul class="game" id="PT_fm" data-id="hot|game" style="opacity: 1; z-index:425;">
            <h1 class="gamename" title="古怪猴子">古怪猴子</h1>

            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_fm" src="/content/images/games/pt/funky_monkey.jpg"/>
            </li>
        </ul>
        <ul class="game" id="PT_bob" data-id="hot|game" style="opacity: 1; z-index:423;">
            <h1 class="gamename" title="熊之舞">熊之舞</h1>

            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_bob" src="/content/images/games/pt/BonusBear_191x181.png"/>
            </li>
        </ul>
        <ul class="game" id="PT_aogro" data-id="hot|new|desktop" style="opacity: 1; z-index:421;">
            <h1 class="gamename" title="Age of the Gods Roulette">Age of the Gods Roulette</h1>

            <li class="extra">
                <div class="tag">
                    <div class="new"></div>
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_aogro" src="/content/images/games/pt/Age_of_the_Gods_roulette_sourcefile_138x125.png"/>
            </li>
        </ul>
        <ul class="game" id="PT_ashadv" data-id="hot|new|game" style="opacity: 1; z-index:419;">
            <h1 class="gamename" title="Adventures in Wonderland Deluxe">Adventures in Wonderland Deluxe</h1>

            <li class="extra">
                <div class="tag">
                    <div class="new"></div>
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_ashadv" src="/content/images/games/pt/Adventures_in_Wonderland_Deluxe.png"/>
            </li>
        </ul>
        <ul class="game" id="PT_ct" data-id="hot|game" style="opacity: 1; z-index:417;">
            <h1 class="gamename" title="船长的宝藏">船长的宝藏</h1>

            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_ct" src="/content/images/games/pt/captain_treasure.jpg"/>
            </li>
        </ul>
        <ul class="game" id="PT_hlf" data-id="hot|game" style="opacity: 1; z-index:415;">
            <h1 class="gamename" title="万圣节财富">万圣节财富</h1>

            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_hlf" src="/content/images/games/pt/halloween_treasure.jpg"/>
            </li>
        </ul>
        <ul class="game" id="PT_qnw" data-id="hot|game" style="opacity: 1; z-index:413;">
            <h1 class="gamename" title="权杖皇后">权杖皇后</h1>

            <li class="extra">
                <div class="tag">
                    <div class="hot"></div>
                </div>
            </li>
            <li class="gameicon">
                <img class="imagePT_qnw" src="/content/images/games/pt/Queen-of-Wands-Source-File.jpg"/>
            </li>
        </ul>
    </div>
</div>