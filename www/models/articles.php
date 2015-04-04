<?php

require_once __DIR__.'/../functions/sql.php';

function articles_get_all(){

    /*
    return [
        ['title' => 'Заголовок статьи 1','content' => 'содержание статьи'],
        ['title' => 'Заголовок статьи 2','content' => 'содержание статьи'],
        ['title' => 'Заголовок статьи 3','content' => 'содержание статьи'],
    ];
    */

    sql_connect();

    $sql = "SELECT * FROM `articles`;";

    return sql_query($sql);

}

function article_insert($date){

    $sql = "INSERT INTO `articles` (title, content) VALUES ('".$date['title']."','".$date['content']."');";

    sql_exec($sql);
}

function article_get_one($id){

    sql_connect();

    $sql = "SELECT * FROM `articles` WHERE id=$id;";

    return sql_query($sql);

}
