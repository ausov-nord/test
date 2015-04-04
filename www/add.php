<?php

require_once __DIR__.'/models/articles.php';

if(!empty($_POST)){

    $data = [];

    if(!empty($_POST)){
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
    }

    if(isset($data['title']) && isset($data['content']) && !empty($data['title']) && !empty($data['content']) ){
        article_insert($data);
        header('Location: /');
    }

}

require_once __DIR__.'/views/add.php';