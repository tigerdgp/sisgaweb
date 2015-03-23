<?php
// Carrega a biblioteca Smarty
define('SMARTY_DIR', 'includes/smarty/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
require_once(SMARTY_DIR . 'SmartyPaginate.class.php');

global $config;

//Include do arquivo de configuração
define('CONFIG_DIR', 'configs/');
require_once(CONFIG_DIR . 'configuracao.php');

//Carrega os arquivos necessarios para a aplicação
class Smarty_Setup extends Smarty {
    function __construct()
    {
        // Construtor da classe.
        // Este é chamado a cada nova instância.
        parent::__construct();

        global $config;

        $this->template_dir = 'templates/';
        $this->compile_dir  = 'templates_c/';
        $this->config_dir   = 'configs/';
        $this->cache_dir    = 'cache/';

        $this->debugging = $config['debug'];

        //Define os delimitadores padroes do smarty
        //$this->left_delimiter  = '<smarty>{';
        //$this->right_delimiter = '}</smarty>';

        $this->escape_html = TRUE;

        $this->caching = FALSE;// Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', $config['TituloSite']);
        $this->assign('logosite', $config['logo']);
    }
}
?>