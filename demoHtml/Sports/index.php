<!DOCTYPE html>
<html class="ball zh-cn">
 <head>
   	<?php require_once VIEWS_PATH.'/head.php';?>
   	<style type="text/css">.header-banner,.header-title {display: none;}</style>
 </head>
<body class="body_sport">
<?php require_once VIEWS_PATH.'/header.php';?>
<?php require_once VIEWS_PATH.'/Notice.php';?>
	<div id="mainBody">
		<div id="page-header">
			<div id="page-container">
				<div class="clear"></div>
					<div id="page-container-bg" class="clearfix">
						<div id="page-container" class="clearfix">
						<div id="page-body" class="clearfix">
							<div class="clear"></div>
							<div class="wrapper sports_wrapper">
								<div id="new_center">
									<script type="text/javascript">
									function changeFrameHeight(){
									    var ifm = $("#MainFrame");
									    ifm.height(ifm.contents().find("body").height());
									}
									</script>
									<iframe id="MainFrame" allowtransparency="true" name="MainFrame" frameborder="0" scrolling="no" width="100%" src="?c=Sports&a=FT" onload="changeFrameHeight()" style="min-height:500px;" ></iframe>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
				<!--文案-->
				<div style="clear:both"></div>
				<div class="cl"></div>
			</div>
		</div>
	</div>
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>