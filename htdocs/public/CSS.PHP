<?php
//CSSとして使うPHPファイルの一番上に記述
header('Content-Type: text/css;', 'charset=utf-8'); ?>
@charset "utf-8";


<?php
//後はCSSを書く！
$bgcolor = '#FFFFFF';
?>
 
body{
    background: <?php echo $bgcolor; ?>;
}