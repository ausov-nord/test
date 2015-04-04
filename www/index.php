<?php

require_once __DIR__.'/models/articles.php';

$items = articles_get_all();

require_once __DIR__.'/views/articles.php';

//require_once __DIR__.'/views/form.php';