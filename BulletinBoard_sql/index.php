<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
        <!-- 参考サイト：DB接続 https://www.php.net/manual/ja/pdo.connections.php -->
    </head>

    <body>
        <h1>掲示板一覧</h1>
        <a href="./board_input.html">投稿フォーム</a>
        <br><br>

        <?php 
        require('db_connect.php');

        $records = $db ->query('SELECT * FROM post');
        echo "<table border=1>\n";
        echo "<tr>\n";
        echo "<th>ID</th>\n";
        echo "<th>名前</th>\n";
        echo "<th>メールアドレス</th>\n";
        echo "<th>タイトル</th>\n";
        echo "<th>内容</th>\n";
        echo "<th>投稿時間</th>\n";
        echo "<th>その他1</th>\n";
        echo "<th>その他2</th>\n";
        echo "</tr>\n";
        while ($record = $records -> fetch()) {
            echo "\t<tr>\n";
            for($i = 0; $i < 6; $i++) {
                echo "\t\t<td>{$record[$i]}</td>\t";
            }
            echo "\t\t<td><a href="."board_update.php?id=".$record[0].">編集する</a></td>\t";
            echo "\t\t<td><a href="."board_delete.php?id=".$record[0].">削除する</a></td>\t";
            echo "\t</tr>\n";
        }
        echo "</table>\n";

        // print($record['name']."\n");

        ?>
    </body>
</html>
