<?php
defined('YII_DEBUG') or define('YII_DEBUG',true);
// include Yii bootstrap file
require_once(dirname(__FILE__).'/framework/yii.php');
$configFile='protected/config/main.php';
// create a Web application instance and run
Yii::createWebApplication($configFile)->run();
Yii::app()->clientScript->registerCoreScript('jquery');    
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerScriptFile(file_get_contents('js/books.js'));