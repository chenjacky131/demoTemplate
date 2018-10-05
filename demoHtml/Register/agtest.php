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
								<div id="articles" style="line-height:180%;">
									<div class="case-article-content">
										<?php require_once DEFAULT_VIEW_PATH.'/Register/agtestform.php';?>
										<style>
											.agtest{width:650px; float:none; z-index: 1; }
											.contin,.leftnav{padding-top:0px;}
											.agtest .am-form-group{left:38px;}
										</style>
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
				
			</div>
		</div>
	</div>
	<style>.agtest{margin-top:23px;}</style>
<script src="content/skin/<?=getConfig('file_path')?>/js/common.js"></script>	
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>