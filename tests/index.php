<?php
/**
 * Created by PhpStorm.
 * User: KDF5000
 * Date: 2015/9/15
 * Time: 21:36
 */
// 应用入口文件
require "../vendor/autoload.php";
use ThinkPHP\ThinkPHP;

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');
//
//// 引入ThinkPHP入口文件
$app = new ThinkPHP();
$app->start();
// 亲^_^ 后面不需要任何代码了 就是如此简单
