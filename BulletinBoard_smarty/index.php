<?php

//libs ディレクトリへの絶対パスを指定
define('SMARTY_DIR', 'libs/');
//ファイルの読み込み
require_once(SMARTY_DIR . 'Smarty.class.php');

//テスト
$name = 'okutani';
$obj = new StdClass();
$obj->hello = 'こんにちは';
$smarty = new Smarty();
$smarty->assign('name', $name);
$smarty->assign('obj', $obj);

//DBコネクト
require('db_connect.php');

//表示する変数
$records = $db ->query('SELECT * FROM post');
$smarty->assign('records', $records);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Smartyテスト</title>
    </head>
    <body>
        <?php
        $smarty->display('index.html');
        ?>
    </body>
</html>