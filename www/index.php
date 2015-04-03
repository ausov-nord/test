<?php

set_include_path(
    get_include_path()
    .PATH_SEPARATOR.__DIR__ .'/core'
);

function autoload($className){
    require_once  $className.'.php';
}

spl_autoload_register('autoload');


