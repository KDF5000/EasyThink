<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
      
/**
 * ThinkPHP 普通模式定义
 */
return array(
    // 配置文件
    'config'    =>  array(
        THINK_PATH.'Conf/convention.php',   // 系统惯例配置
        CONF_PATH.'config'.CONF_EXT,      // 应用公共配置
    ),

    // 别名定义
    'alias'     =>  array(
        'Think\Log'               => CORE_PATH . 'Log.php',
        'Think\Log\Driver\File'   => CORE_PATH . 'Log/Driver/File.php',
        'Think\Exception'         => CORE_PATH . 'Exception.php',
        'Think\Model'             => CORE_PATH . 'Model.php',
        'Think\Db'                => CORE_PATH . 'Db.php',
        'Think\Template'          => CORE_PATH . 'Template.php',
        'Think\Cache'             => CORE_PATH . 'Cache.php',
        'Think\Cache\Driver\File' => CORE_PATH . 'Cache/Driver/File.php',
        'Think\Storage'           => CORE_PATH . 'Storage.php',
    ),

    // 函数和类文件
    'core'      =>  array(
        THINK_PATH.'Common/functions.php',
        COMMON_PATH.'Common/function.php',
        CORE_PATH . 'Hook.php',
        CORE_PATH . 'App.php',
        CORE_PATH . 'Dispatcher.php',
        //CORE_PATH . 'Log.php',
        CORE_PATH . 'Route.php',
        CORE_PATH . 'Controller.php',
        CORE_PATH . 'View.php',
        BEHAVIOR_PATH . 'BuildLiteBehavior.php',
        BEHAVIOR_PATH . 'ParseTemplateBehavior.php',
        BEHAVIOR_PATH . 'ContentReplaceBehavior.php',
    ),
    // 行为扩展定义
    'tags'  =>  array(
        'app_init'     =>  array(
            'Behavior\BuildLiteBehavior', // 生成运行Lite文件
        ),
        'app_begin'     =>  array(
            'Behavior\ReadHtmlCacheBehavior', // 读取静态缓存
        ),
        'app_end'       =>  array(
            'Behavior\ShowPageTraceBehavior', // 页面Trace显示
        ),
        'view_parse'    =>  array(
            'Behavior\ParseTemplateBehavior', // 模板解析 支持PHP、内置模板引擎和第三方模板引擎
        ),
        'template_filter'=> array(
            'Behavior\ContentReplaceBehavior', // 模板输出替换
        ),
        'view_filter'   =>  array(
            'Behavior\WriteHtmlCacheBehavior', // 写入静态缓存
        ),
    ),
);
