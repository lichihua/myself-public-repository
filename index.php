<?php
// 定义应用目录
define('APP_PATH', __DIR__.'/application/');
// 加载框架基础引导文件
require __DIR__ . '/thinkphp/base.php';

// 添加额外的代码
// ...
// 执行应用
\think\App::run()->send();