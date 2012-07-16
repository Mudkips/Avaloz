<?php /* Smarty version Smarty-3.1.8, created on 2012-07-16 09:54:28
         compiled from "system/views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:4095003c8b4ec0441-42904737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e2a949181833dfac9eb78b67ede1dfaa5b780a4' => 
    array (
      0 => 'system/views\\index.html',
      1 => 1342366046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4095003c8b4ec0441-42904737',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5003c8b5051409_37117784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5003c8b5051409_37117784')) {function content_5003c8b5051409_37117784($_smarty_tpl) {?><?php if (!is_callable('smarty_block_php')) include 'system/classes/smarty_plugins\\block.php.php';
?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                echo "hai lol";
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </body>
</html>
<?php }} ?>