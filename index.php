<?php
// 访问本地
    // $img_array = glob('images/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
    // if(count($img_array) == 0) die('没有图片文件。请先上传一些图片到 '.dirname(__FILE__).'/images/ 文件夹');
    // header('Content-Type: image/png');
    // echo(file_get_contents($img_array[array_rand($img_array)]));
    
    // 默认访问dm.txt，加type=xz返回xz.txt里面的链接
    /*
    示例：链接/目录/?type=xz
    例如我的网址是:https://love.cenguigui.cn/pic/?type=xz
    lsp是黑丝图
    dm是动漫图
    xz是写真图
    */
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    if ($type == 'xz') {
        $filename = 'xz.txt';
    }elseif ($type == 'lsp') {
        $filename = 'lsp.txt';
    }else {
        $filename = 'dm.txt';
    }
    
    $arr = file($filename);
    $n = count($arr) - 1;
    $x = rand(0, $n);
    header("Location: " . trim($arr[$x]));
?>