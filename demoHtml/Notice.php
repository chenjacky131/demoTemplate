<link rel="stylesheet" type="text/css" href="content/skin/<?=getConfig('file_path')?>/css/notice.css">
<div class="notice-wrapper">
    <div class="wrapper">
        <div class="notice clearfix">
            <div class="notice-title">
                <i class="fa fa-volume-up" aria-hidden="true"></i>
                最新消息
            </div>
            <div class="notice-content" id="notice">
                <ul class="list-inline">
                    <li><a href="javascript:void(0);" onclick="HotNewsHistory();" target="_blank"><?=$notice['msg']?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>    
function HotNewsHistory(){
		event.preventDefault(); 
		var iTop = (window.screen.height-30-600)/2; 
		var iLeft = (window.screen.width-10-850)/2; 
		window.open('/?c=Home&a=Notice', "msg", "width=780,height=600,top="+iTop+",left="+iLeft+",scrollbars=yes"); 
}    
    $(function(){
        // 公告
        siteCommon.noticeMarquee('#notice',20);
    })
</script>