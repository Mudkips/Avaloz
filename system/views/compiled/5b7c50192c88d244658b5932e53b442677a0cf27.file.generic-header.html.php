<?php /* Smarty version Smarty-3.1.8, created on 2012-07-23 11:39:06
         compiled from "system/views\generic\headers\generic-header.html" */ ?>
<?php /*%%SmartyHeaderCode:23443500d1bbad06974-51428076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b7c50192c88d244658b5932e53b442677a0cf27' => 
    array (
      0 => 'system/views\\generic\\headers\\generic-header.html',
      1 => 1343034456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23443500d1bbad06974-51428076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'username' => 0,
    'www' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500d1bbae1a971_42204704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500d1bbae1a971_42204704')) {function content_500d1bbae1a971_42204704($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
 
<script type="text/javascript"> 
var andSoItBegins = (new Date()).getTime();
var ad_keywords = "";
document.habboLoggedIn = true;
var habboName = "<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
";
var habboReqPath = "<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
";
var habboStaticFilePath = "<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/system/views/web-gallery";
var habboImagerUrl = "<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/imager/figure/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "uberClientWnd"; }
</script> <?php }} ?>