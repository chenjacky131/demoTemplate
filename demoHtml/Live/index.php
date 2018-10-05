<!DOCTYPE html>
<html class="livetop zh-cn">
<head>
	<?php require_once VIEWS_PATH.'/head.php';?>
	<link href="content/css/live.css" type="text/css" rel="stylesheet" />
</head>
<body class="body_live">
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
							<div class="wrapper">
								<?php require_once DEFAULT_VIEW_PATH.'/Live/Index.php';?>
							</div>
						</div>
					</div>
					<!--文案-->
					<div style="clear:both"></div>
					<div class="cl"></div>
				</div>
			</div>
		</div>
	</div>
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>