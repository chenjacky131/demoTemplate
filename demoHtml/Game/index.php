<!DOCTYPE html>
<html class="madvertis">
 <head>
	<?php require_once VIEWS_PATH.'/head.php';?>
	<script type="text/javascript">
		var PageInitTime = new Date();
		var GameType = '';
	</script>
	<style type="text/css">
		#egame{width:1003px;}
	</style>
</head>
<body>
	<div id="mainBody">
		<div id="page-header">
			<?php require_once VIEWS_PATH.'/header.php';?>
			<div id="page-container">
				<div class="clear"></div>
				<div id="page-container-bg" class="clearfix">
					<div id="page-container" class="clearfix">
						<div id="page-body" class="clearfix">
							<div class="clear"></div>
							<div id="wrapbox">
								<div id="wrapw">
									<?php require_once DEFAULT_VIEW_PATH.'/Game/Index.php';?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php require_once VIEWS_PATH.'/footer.php';?>
		</div>
	</div>
</body>
</html>