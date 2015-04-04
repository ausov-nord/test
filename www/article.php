<?php

require_once __DIR__.'/models/articles.php';

$id = (int)$_GET['id'];
$items = article_get_one($id);

require_once __DIR__.'/views/article.php';

//require_once __DIR__.'/views/form.php';