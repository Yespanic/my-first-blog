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
        <a href="index.php?action=add">Добавить статью</a>
        <table class="admin-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>2019-07-18</td>
                <td>Заголовок 1</td>
                <td>
                    <a href="#">Редактировать</a>
                </td>
                <td>
                    <a href="#">Удалить</a>
                </td>
            </tr>
            <?php foreach($articles as $a): ?>
            <tr>
                <td><?=$a['date']?></td>
                <td><?=$a['title']?></td>
                <td>
                    <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                </td>
                <td>
                    <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
    <footer>
        <p>Мой Первый Блог <br><img src="../cc.png" alt="creative commons"></p>
    </footer>
</div>
</body>
</html>