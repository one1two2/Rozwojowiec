<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php
    $baseUrl = Yii::app()->baseUrl; 
    Yii::app()->clientScript->registerCoreScript('jquery');    
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/books.js');
    $cs->registerCssFile($baseUrl.'/css/style.css');
    ?>
    <title><?= CHtml::encode($this->pageTitle); ?></title>
</head>

<div class="container" id="page">

	<div id="header">
            <h1><?= CHtml::encode(Yii::app()->name); ?></h1>
	</div><!-- header -->

        <div id="content">
            <?= $content; ?>
        </div>

	<div id="footer">
            Konrad Baranowski 2014, All rights reserved<br>
            <?= Yii::powered(); ?>
	</div><!-- footer -->

</div>
</html>