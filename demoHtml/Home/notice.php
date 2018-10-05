
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/content/css/notice/standard.css" rel="stylesheet" type="text/css" />
    <link href="/content/css/notice/HotNewsHistory.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        #title { background: url(/content/images/notice/title.jpg) left top no-repeat; }
        #top { background: url(/content/images/notice/bg_t.jpg) left top no-repeat; width: 720px; height: 58px; }
        #container { background: url(/content/images/notice/bg_c.jpg) left top repeat-y; margin: 0 auto; padding: 0 37px; width: 646px; }
        #footer { background: url(/content/images/notice/bg_f.jpg) left top no-repeat; padding-top: 20px; width: 720px; height: 35px; }
    </style>
</head>
<body>
<div id="main-wrap">
    <div id="top">
        <div id="title"></div>
    </div>
    <div id="container">
        <div class="content">
            <div class="date"><span class="content-title">日期</span></div>
            <div class="msg"><span class="content-title">内容</span></div>
            <div class="clear"></div>
        </div>
        <div class="line"></div>
        <?php 
            foreach ($rows as $row)
            {
        ?>
        <div class="content">
            <div class="date"><span class="inner"><?=date("m-d",strtotime($row["add_time"]))?></span></div>
            <div class="msg"><p class="inner-title"><?=$row["msg"]?></p></div>
			<div class="clear"></div>
        </div>
        <div class="line"></div>
        <?php }?>
       </div>
    <div id="footer"></div>
</div>
</body>
</html>