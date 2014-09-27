<?php
/**
 * XHprof Develop Auto Complete
 *
 * XHprof分层性能测量分析器之PhpStorm代码自动补全
 *
 * 本文件使用方式：
 *
 * XHprof开发，在IDE中打开/导入本文件即可
 * 如果IDE自带 Include Path 功能(如：PhpStorm)，设置该文件路径即可.
 *
 * PhpStorm 另一种方法:
 * WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件
 * 复制 XHprof.php 到路径：com/jetbrains/php/lang/psi/stubs/data/
 * 保存文件，重启Phpstorm.
 *
 * PS:替换前请备份php.jar 若发生错误便于恢复 如有勘误，请联系Phpboy! :)
 *
 * @auther xudianyang<120343758@qq.com>
 * @copyright Copyright (c) 2014 (http://www.phpboy.net)
 */

define('XHPROF_FLAGS_NO_BUILTINS',              1);
define('XHPROF_FLAGS_CPU',                      2);
define('XHPROF_FLAGS_MEMORY',                   4);
define('XHPROF_SAMPLING_INTERVAL',              100000);
define('XHPROF_MAX_IGNORED_FUNCTIONS',          256);
define('XHPROF_IGNORED_FUNCTION_FILTER_SIZE',   (XHPROF_MAX_IGNORED_FUNCTIONS + 7)/8);
define('XHPROF_VERSION',                        '0.9.2');
define('ROOT_SYMBOL',                           'main()');
define('SCRATCH_BUF_LEN',                       512);
define('XHPROF_MODE_HIERARCHICAL',              1);
define('XHPROF_MODE_SAMPLED',                   620002);

function xhprof_disable(){return array();}
function xhprof_enable($flags = 0, $options = array()){}
function xhprof_sample_disable(){return array();}
function xhprof_sample_enable(){}