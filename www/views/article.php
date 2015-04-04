<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php foreach($items as $item):?>
    <h2><?=$item['title']?></h2>
    <p><?=$item['content']?></p>
<?php endforeach; ?>
<br/>
<a href="/">Все статьи</a>
</body>
</html>