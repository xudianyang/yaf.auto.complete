#Yaf/Yar/XHprof IDE Auto Complete

Yaf Develop Auto Compelete

Yaf框架之PhpStrom代码自动补全（屏蔽IDE undefined，全命名空间，中文详细文档，比手册更详细）

##使用说明

Yaf开发，在IDE中打开/导入本文件即可
如果IDE自带 Include Path 功能(如：PhpStorm)，设置该文件路径即可.

##PhpStorm 另一种方法:
WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件
复制 Yaf.namespace.php,Yaf.underline.php 到路径：com/jetbrains/php/lang/psi/stubs/data/
保存文件，重启Phpstorm.

这里也提供做好的php.jar直接覆盖即可。

     (php.jar拷贝来源PhpStorm 7.1.3，其他版本如存在兼容性问题，请自行按上面方面进行处理，覆盖php.jar时注意备份)

注意：替换前请备份php.jar若发生错误便于恢复

如有勘误，请告知Phpboy.

##示例

![Yaf Auto Complete][1]

  [1]: http://a.phpboy.net/Yaf.auto_.complete-e1396700109456.jpg

##作者

xudianyang

邮箱：<120343758@qq.com>

博客：<http://www.phpboy.net>