<?php /* Smarty version Smarty-3.1.8, created on 2012-07-23 12:25:53
         compiled from "system/views\generic\tabs\me-tab.html" */ ?>
<?php /*%%SmartyHeaderCode:17165500d25c17e69d9-87578301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '015a3a9480b2e52302dde43c4484247d0de15e85' => 
    array (
      0 => 'system/views\\generic\\tabs\\me-tab.html',
      1 => 1343039149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17165500d25c17e69d9-87578301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500d25c18d1462_25353099',
  'variables' => 
  array (
    'username' => 0,
    'www' => 0,
    'users_online' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500d25c18d1462_25353099')) {function content_500d25c18d1462_25353099($_smarty_tpl) {?><ul id="navi"> 
<li class="metab selected" id=""><strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong><span></span>
<li class="" id=""><a href="<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/community">Community</a><span></span>
<li class="tab-register-now" id="tab-register-now"><a href="<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/logout">Logout</a><span></span>
</ul> 
<div id="habbos-online"><div class="rounded"><span><?php echo $_smarty_tpl->tpl_vars['users_online']->value;?>
 player(s) online</span></div></div> 
</div> 
</div> 
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
<div id="content-container"> 
<div id="navi2-container" class="pngbg"> 
<div id="navi2" class="pngbg clearfix"> 
<ul> 
<li class=" selected last"><strong>Me</a></strong></div> 
</ul>
</div> <?php }} ?>