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
        <form method="post" action="../admin/index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <div class="row">
                <div class="col-sm-6">
                    <label>
                        Название
                    </label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="title" value="<?= (isset($article) ? $article['title'] : '') ?>" class="form-item" autofocus required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>
                        Дата
                    </label>
                </div>
                <div class="col-sm-6">
                    <input type="date" name="date" value="<?= (isset($article) ? $article['date'] : '') ?>" class="form-item" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>
                        Содержание
                    </label>
                </div>
                <div class="col-sm-6">
                    <textarea class="form-item" name="content" required><?= (isset($article) ? $article['content'] : '') ?></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Сохранить" class="btn">
            </div>
        </form>
    </div>
    <footer>
        <p>Мой Первый Блог <br><img src="../cc.png" alt="creative commons"></p>
    </footer>
</div>
</body>
</html>