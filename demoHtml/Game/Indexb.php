<!DOCTYPE html>
<html class="madvertis zh-cn at1">
 <head>
	<?php require_once VIEWS_PATH.'/head.php';?>
	<script type="text/javascript">
		var PageInitTime = new Date();
		var GameType = '';
	</script>
	<style type="text/css">
		.ele-ball-wrap{width:1000px;margin:0 auto;}
	</style>
</head>
<body class='body_game mod-games'>
<?php require_once VIEWS_PATH.'/header.php';?>
<?php require_once VIEWS_PATH.'/Notice.php';?>
<div id="mainBody" class="game-wrapper">
	<div id="page-container">
		<div id="page-body">
			<?php require_once DEFAULT_VIEW_PATH.'/Game/Indexb.php';?>
		</div>
	</div>
</div>
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>