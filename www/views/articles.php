<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<a href="/add.php">добавить статью</a>
<ul>
    <?php foreach($items as $item):?>
    <li><a href="/article.php?id=<?=$item['id']?>"><?=$item['title']?></a></li>
    <?php endforeach; ?>
</ul>
</body>
</html>