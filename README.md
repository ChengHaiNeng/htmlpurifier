

#htmlpurifier介绍：

htmlpurifier is Used to avoid XSS attack，可以用来提交内容时使用。


#htmlpurifier使用方法

1.htmlpurifier包可以直接拷贝到项目目录下。

2.在项目公共目录写一个function.php文件中的fanXSS函数，在需要调用的地方使用此函数即可，此函数中有两个地方需要注意

<?PHP
require_once './Plugin/htmlpurifier/HTMLPurifier.auto.php'; // 引用htmlpurifier包
// 设置允许使用的HTML标签
$cfg->set('HTML.Allowed', 'div,b,strong,i,em,a[href|title],ul,ol,li,br,span[style],img[width|height|alt|src]');
// 设置允许出现的CSS样式属性
$cfg->set('CSS.AllowedProperties', 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');

?>
    
#请开心的使用htmlpurifier吧
