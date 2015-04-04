<?php

function sql_connect(){
    mysql_connect('localhost','root','');
    mysql_select_db('poligon');
    mysql_query('set names utf8');
}

function sql_query($sql){

    sql_connect();

    $query = mysql_query($sql);

    $result = [];
    while($row = mysql_fetch_assoc($query)){
        $result[] = $row;
    }
    return $result;
}

function sql_exec($sql){
    sql_connect();
    mysql_query($sql);

}