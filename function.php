<?php

function dd($paramiter){
    echo "<pre>";
    var_dump($paramiter);
    echo "</pre>";
}

function base_part($part){
    return BASE_PART . $part;
}

function view($part,$attrubute = []){
    extract($attrubute);
    return require base_part("/views/".$part);
}