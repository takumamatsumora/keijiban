<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <div class="logo">
     <img src="4eachblog_logo.jpg">
    </div>
    <div class="nav">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>    

<main>
  <div class="main-container">
      <div class="left">
          <h2>プログラミングに役立つ掲示板</h2>
          
            <form method="post" action="insert.php">
                <div class="keijiban">
                 <h3>入力フォーム</h3>
                 <div>
                   <p><label>ハンドルネーム</label></p>
                   <input type="text" class="text" size="40" name="handlename">
                 </div>

                 <div>
                    <p><label>タイトル</label></p>
                    <input type="text" class="text" size="40" name="title">
                 </div>
                 <div>
                    <p><label>コメント</label></p>
                    <textarea cols="65" rows="10" name="comments"></textarea>
                 </div>

                 <div>
                    <input type="submit" class="submit" value="投稿する">
                 </div>

                 
                </div>
            </form>
            <?php
              mb_internal_encoding("utf8");
              $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
              $stmt = $pdo->query("select * from 4each_keijiban");
            ?>

            <?php
               while($row = $stmt->fetch()){
                  echo "<div class='kiji1'>";
                  echo "<h3>".$row['title']."</h3>";
                  echo "<div class='comment'>";
                  echo $row['comments'];
                  echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                  echo "</div>";
                  echo "</div>";
                }
            ?>
        </div>

        <div class="right">
            <h3>人気の記事</h3>
            
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディターTOP5</li>
                <li>HTMLの基礎</li>
            </ul>

            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>

            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>        
        </div>
    </div>
</main>


<footer>
    copyright © internous | 4each blog the which provides A to Z about programming.
</footer>


</body>
</html>