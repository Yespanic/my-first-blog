<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Мой Первый Блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Мой Первый Блог</h1>
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
            </label>
            <label>
                Содержание
                <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
            </label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
    <footer>
        <p>Мой Первый Блог <br><img src="../cc.png" alt="creative commons"></p>
    </footer>
</div>
</body>
</html>