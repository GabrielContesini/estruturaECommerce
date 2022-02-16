<?php

require './lib/autoload.php';

$smarty = new Template();
Rotas::get_pagina();

//valores para template

$smarty->assign('NOME', 'GABRIEL CONTESINI TORRES DE MORAES');

echo Rotas::get_SiteHOME();

$smarty->display('index.tpl');

?>

