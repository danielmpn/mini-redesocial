<?php

require_once './../app/config/config.php'; //configurações do app
require_once './../vendor/autoload.php'; //autoload do vendor
//$rota = new Rota;

$teste = new TesteController();
(new RouterCore());