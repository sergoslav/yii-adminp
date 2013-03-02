<?php
$_css = Yii::app()->clientScript;

$baseUrl = $this->module->assetsUrl;

$_css->registerCssFile($baseUrl . '/css/base.css');
//die($baseUrl . '/css/base.css');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
    <title>Yii Administration</title>
    <meta name="robots" content="NONE,NOARCHIVE"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="dashboard">
<!--<div id="container">-->

<!--    HEADER-->
    <div class="page-header">
        <?php $this->renderPartial('/page/header', array()); ?>
        <br class="clear"/>
    </div>
<!--    /HEADER-->


<!-- NAVBAR -->
    <div class="div-navbar">
        <?php $this->renderPartial('/page/navbar', array()); ?>
        <br class="clear"/>
    </div>
<!-- /NAVBAR -->

<!-- FLASH MESSAGES -->
<!--    <div id="flash_messages">-->
<!--    --><?php
//    $message = Yii::app()->user->getFlash('flashMessage');
//    if ($message):
//    ?>
<!--        <ul class="messagelist">-->
<!--            <li>--><?php //echo $message; ?><!--</li>-->
<!--        </ul>-->
<!--    --><?php //endif; ?>
<!--        <br class="clear"/>-->
<!--    </div>-->
<!-- /FLASH MESSAGES -->

<!-- CONTENT -->
    <div id="content" class="content-flexible">
        <?php echo $content ?>
        <br class="clear"/>
    </div>
<!-- /CONTENT -->

<!-- FOOTER -->
    <div class="footer">
        <hr />
        <?php $this->renderPartial('/page/footer', array()); ?>
    </div>
<!-- /FOOTER -->

<!--</div>-->
</body>
</html>

