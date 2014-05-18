<?php
/**
 * SplClassLoader Auto Complete
 *
 * SplClassLoader之PhpStorm代码自动补全（屏蔽IDE undefined）
 *
 * 本文件使用方式：
 *
 * 使用SplClassLoader，在IDE中打开/导入本文件即可
 * 如果IDE自带 Include Path 功能(如：PhpStorm)，设置该文件路径即可.
 *
 * PhpStorm 另一种方法:
 * WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件
 * 复制 SplClassLoader.php 到路径：com/jetbrains/php/lang/psi/stubs/data/
 * 保存文件，重启Phpstorm.
 *
 * PS:替换前请备份php.jar 若发生错误便于恢复 如有勘误，请联系Phpboy! :)
 *
 * @auther xudianyang<120343758@qq.com>
 * @copyright Copyright (c) 2014 (http://www.phpboy.net)
 */

class SplClassLoader
{
    /**
     * 构造方法，实例化一个自动加载器
     *
     * @param $namespace string 命名空间前缀（多个前缀以英文逗号分隔）
     * @param $local_library_path string 本地类库全路径
     */
    public function __construct($namespace, $local_library_path){}

    /**
     * 将SplClassLoader注册到SPL __autoload函数栈中
     *
     * @return Boolean
     */
    public function register(){}

    /**
     * 将SplClassLoader从到SPL __autoload函数栈中移出
     *
     * @return Boolean
     */
    public function unregister(){}

    /**
     * 装载指定的类
     *
     * @param $class_name string 类名（带命名空间分隔符或者_）
     *
     * @return Boolean
     */
    public function loadClass($class_name){}

    /**
     * 设置全局或者本地类库的路径
     *
     * @param $path string 类库全路径名（如果设置全局类库路径会覆盖ini的splclassloader.global_library的值）
     * @param $global Boolean false则设置本地类库路径，true则设置全局类库路径
     *
     * @return SplClassLoader
     */
    public function setLibraryPath($path, $global = false){}

    /**
     * 获取全局或者本地类库的路径
     *
     * @param $global Boolean false则设置本地类库路径，true则设置全局类库路径
     *
     * @return SplClassLoader
     */
    public function getLibraryPath($global = false){}

    /**
     * 设置PHP文件扩展名（会覆盖ini中设置的splclassloader.ext值）
     *
     * @param $ext
     *
     * @return SplClassLoader
     */
    public function setFileExtension($ext){}

    /**
     * 获取当前自动加载器实例的PHP文件扩展名
     *
     * @return string
     */
    public function getFileExtension(){}

    /**
     * 获取指定类名的文件全路径
     * 
     * @param $class_name string 类名（带命名空间分隔符或者_）
     *
     * @return string
     */
    public function getPath($class_name){}

    /**
     * 获取当前自动加载器实例的本地类的命名空间前缀
     *
     * @return string
     */
    public function getLocalNamespace(){}

    /**
     * 注册本地命名空间前缀
     *
     * @param $namespace_prefix mixed 命名空间前缀（可以为数组或者英文逗号分隔的字符串）
     *
     * @return SplClassLoader
     */
    public function registerLocalNamespace($namespace_prefix){}

    /**
     * 判断前缀是否为已注册的本地命名空间前缀
     *
     * @param $namespace string 命名空间前缀
     *
     * @return Boolean
     */
    public function isLocalNamespace($namespace){}

    /**
     * 清楚已注册的本地命名空间前缀
     *
     * @return Boolean
     */
    public function clearLocalNamespace(){}
}