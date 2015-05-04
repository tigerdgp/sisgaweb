<?php

    /**
     * Função imprimeMenuInfinito - Função recursiva utilizada para imprimir
     * menu com submenus em níveis infinitos.
     * 
     * @author MatiasRezende - Somente usuários registrados poderão ver os links. 
     * @license Somente usuários registrados poderão ver os links. 
     * @param array $menuTotal - Array do menu a ser impresso
     * @param $idPai - Id da categoria pai
    */

    function imprimeMenuInfinito(array $menuTotal, $idPai = 0, $nivel = 0)
    {
        // abrimos a ul do menu principal
        echo str_repeat("\t", $nivel ),'<ul id="menu">',PHP_EOL;
        // itera o array de acordo com o idPai passado como parâmetro na função
        foreach( $menuTotal[$idPai]as $idMenu => $menuItem)
        {
            if ($menuItem['seta'] == 1) {
                // imprime o item do menu
                echo str_repeat("\t", $nivel +1),'<li><a href="',$menuItem['link'],'"><span>',$menuItem['name'],'<img src="templates/img/down.png" /></span></a>',PHP_EOL;
            }
            elseif ($menuItem['seta'] == 2) {
                // imprime o item do menu
                echo str_repeat("\t", $nivel +1),'<li><a href="',$menuItem['link'],'"><span>',$menuItem['name'],'<img src="templates/img/right.png" /></span></a>',PHP_EOL;
            }
            elseif ($menuItem['seta'] == 3) {
                // imprime o item do menu
                echo str_repeat("\t", $nivel +1),'<li><a href="',$menuItem['link'],'"><span>',$menuItem['name'],'<img src="templates/img/left.png" /></span></a>',PHP_EOL;
            }
            else {
                // imprime o item do menu
                echo str_repeat("\t", $nivel +1),'<li class="',$menuItem['classe'],'"><a href="',$menuItem['link'],'"><span>',$menuItem['name'],'</span></a>',PHP_EOL;
            }
        // se o menu desta iteração tiver submenus, chama novamente a função
        if( isset( $menuTotal[$idMenu])) imprimeMenuInfinito( $menuTotal , $idMenu , $nivel +2);
            // fecha o li do item do menu
            echo str_repeat("\t", $nivel +1),'</li>',PHP_EOL;
        }
        // fecha o ul do menu principal
        echo str_repeat("\t", $nivel ),'</ul>',PHP_EOL;
    }

?>