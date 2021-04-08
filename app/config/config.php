<?php

spl_autoload_register(function ($arquivo) {
    if (file_exists("./../app/Model/" . $arquivo . ".php")) {
        require "./../app/Model/" . $arquivo . ".php";
    } else if (file_exists("./../app/View/" . $arquivo . ".php")) {
        require "./../app/View/" . $arquivo . ".php";
    } else if (file_exists("./../app/Controller/" . $arquivo . ".php")) {
        require "./../app/Controller/" . $arquivo . ".php";
    } else if (file_exists("./../app/core/" . $arquivo . ".php")) {
        require "./../app/core/" . $arquivo . ".php";
    } else if (file_exists("./../app/" . $arquivo . ".php")) {
        require "./../app/" . $arquivo . ".php";
    }
});

date_default_timezone_set('America/Sao_Paulo');
