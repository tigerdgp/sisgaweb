<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-19 20:31:02
         compiled from "templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4142553fe5b1e78587-89174319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ec0f24a17818aee8b97e484a2c855b4ef27636' => 
    array (
      0 => 'templates\\footer.tpl',
      1 => 1442705421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4142553fe5b1e78587-89174319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553fe5b1e7f530_60616815',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe5b1e7f530_60616815')) {function content_553fe5b1e7f530_60616815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'includes/smarty-3.1.21/libs/plugins\\function.mailto.php';
?>            
        </div>
        <footer>
            <p>Copyright © <?php echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');?>
 Virtua Cursos - SisGAWeb - Todos os direitos reservados.</p>
            <p>Desenvolvido por <?php echo smarty_function_mailto(array('address'=>"tiger.dgp@hotmail.com",'encode'=>"hex",'text'=>"Derik Gomide Padua"),$_smarty_tpl);?>
 e <?php echo smarty_function_mailto(array('address'=>"rafaelsantiago1092@gmail.com",'encode'=>"hex",'text'=>"Rafael Silva Santiago"),$_smarty_tpl);?>
</p>
        </footer>
    </body>
</html>
<?php }} ?>
