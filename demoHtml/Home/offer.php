<!DOCTYPE html>
<html class="madvertis memberexclusiveii">
<head>
    <?php require_once VIEWS_PATH.'/head.php';?>
	<style type="text/css" media="screen">
		#js-ele-slider-swf {visibility:hidden}#js-ele-jpRemote {visibility:hidden}
		body,html{margin:0}
		#MemberExclusive_area { width: <?=$width?>px; margin: 0 auto 20px auto;  height:auto;overflow:hidden;background: #6D4F13; padding-bottom:20px;}
		.eventtext {display: none; }
		<?php foreach($memExclusive as $k=>$v){?>
			#memExclusive_<?=$k?> { width:<?=$v['width']?>px; height:<?=$v['height']?>px; margin: 0 auto; margin-top:5px; overflow:hidden; }
			#memExclusive_<?=$k?> a { display:block; width:<?=$v['width']?>px; height:<?=$v['height']?>px; margin: 0 auto; overflow:hidden; background:url('<?=$cdnurl?>/Offer/<?=$v['titleimg']?>') no-repeat left top;}
		<?php if($v['titlehoverimg']!=''){?>
			#memExclusive_<?=$k?> a:hover { display:block; width:<?=$v['width']?>px; height:<?=$v['height']?>px; margin: 0 auto; overflow:hidden; background:url('<?=$cdnurl?>/Offer/<?=$v['titlehoverimg']?>') no-repeat left bottom;}	
		<?php }}?>
		#MemberExclusive_area{background:none;margin: 0 auto 0px auto;}
		#memExclusive_0{width: 100%;}
		.memberexclusiveii{background: fixed;}
	</style>
</head>
<body class="body_promo">
<?php require_once VIEWS_PATH.'/header.php';?>
<?php require_once VIEWS_PATH.'/Notice.php';?>
	<div id="mainBody" class="wrapper promo_wrapper">
		<div id="page-header">
			<div id="page-container">
				<div class="clear"></div>
				<link type="text/css" rel="stylesheet" href="/content/skin/k8988/css/fckeditor.css">
				<div id='direction'>
				<div id="MemberExclusive_area">
					<?php foreach($memExclusive as $k=>$v){?>
						<div class="MemberExclusive">
							<div class="small" id="memExclusive_<?=$k?>"><a href="javascript:;"></a></div>
							<div class="eventtext"><?=stripslashes(str_replace("<__CDNURL__>",$cdnurl,$v['content']))?></div>
						</div>
					<?php }?>
				</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	
	</div>
	<script language="javascript">
	  $(".MemberExclusive .small").click(function(){
	  	var index = $(this).index();
	  	if( $(this).hasClass('selected')){  	  	
	   		$(".selected").removeClass("selected");
	  		$(this).parent().find('.eventtext').first().hide(500);
	 	}else{
	   	    $(".selected").removeClass("selected");
	   	    $(this).addClass("selected");
	   	    $(".eventtext").hide();
	        var big = $(this).parent().find('.eventtext').first();
	        big.show(500);
			var container = $('body'),
			scrollTo = $(this);
			container.animate({scrollTop: scrollTo.offset().top});
	 	}
	  })
	</script>	
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>