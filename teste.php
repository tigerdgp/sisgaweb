<?php

/*// load Smarty library
define("SMARTY_DIR", "includes/smarty-3.1.21/libs/");
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

$smarty->assign('name','Ned');

$smarty->display('index.tpl');*/

     echo "oi12345 <br>";

    require_once('includes/classes/conexao.class.php');
    require_once('includes/classes/crud.class.php');

     echo "oi0 <br>";

    //$c = new Crud::getInstance();

    echo "oi1 <br>";

    $param = array('nome', 'mae', 'pai');
    $param1 = array('8');
    $param2 = array('10');
    $sql = "INSERT INTO usuarios (nome, mae, pai) VALUES (:param0, :param1, :param2)";
    $sql1 = "DELETE FROM usuarios WHERE id_usuario = :param0";
    $sql2 = "UPDATE usuarios SET nome = 'jose' WHERE id_usuario = :param0";

    echo $sql;
    echo $param[2];

    Crud::getInstance()->insert($dbh, $sql, $param);
    echo "<br>oi2 <br>";
    Crud::getInstance()->update($dbh, $sql1, $param1);
    echo "<br>oi3 <br>";
    Crud::getInstance()->update($dbh, $sql2, $param2);
    echo "<br>oi4 <br>";
?>
