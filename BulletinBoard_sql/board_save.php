<! doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title>掲示板アプリ</title>
    </head>

    <body>
        <?php 

        // prepare, executeでリファクタリングする必要あり（セキュリティ関連）
        try {
            require('db_connect.php');
            
            $db -> exec('INSERT INTO post SET name="' .$_POST['name'].'",
                                              email="' .$_POST['email'].'",
                                              title="' .$_POST['title'].'",
                                              content="' .$_POST['content'].'"
                                              ');
            header("Location: ./index.php");
        }
        catch(PODException $e) {
            echo "投稿失敗" .$e->getMessage() ."\n";
            die();
        }
        ?>
    </body>
</html>


