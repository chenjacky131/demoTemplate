<!DOCTYPE html>
<html class="madvertis">
 <head>
	<?php require_once VIEWS_PATH.'/head.php';?>
</head>
<body class='body_lottery mod-games'>
<?php require_once VIEWS_PATH.'/header.php';?>
<?php require_once VIEWS_PATH.'/Notice.php';?>
    <div id="mainBody">
        <div id="page-header">
            <div id="page-container">
                <div id="page-container-bg" class="clearfix">
                    <div id="page-container" class="clearfix">
                        <div id="page-body" class="clearfix">
                            <div class="clear"></div>
                            <div class="wrapper" id="new_center"></div>
                            <script type="text/javascript">$("#new_center").load('/html/lottery.html');</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once VIEWS_PATH.'/footer.php';?>
</body>
</html>