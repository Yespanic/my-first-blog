<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Мой Первый Блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Мой Первый Блог</h1>
    <div>
        <div class="article">
            <h3><?=$article['title']?></h3>
            <em>Опубликовано: <?=$article['date']?></em>
            <p><?=$article['content']?></p>
        </div>

    </div>
    <footer>
        <p>Мой Первый Блог <br><img src="cc.png" alt="creative commons"></p>
    </footer>
</div>
</body>
</html>
