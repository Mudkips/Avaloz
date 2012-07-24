<?php /* Smarty version Smarty-3.1.8, created on 2012-07-23 23:22:19
         compiled from "system/views\generic\components\comp-me-personal-box.html" */ ?>
<?php /*%%SmartyHeaderCode:11900500d2787243a67-33149854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5988922ea0d5d68823a62f03737b0e77da459a57' => 
    array (
      0 => 'system/views\\generic\\components\\comp-me-personal-box.html',
      1 => 1343078537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11900500d2787243a67-33149854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500d27873ddad6_19973519',
  'variables' => 
  array (
    'www' => 0,
    'site_name' => 0,
    'username' => 0,
    'figure' => 0,
    'motto' => 0,
    'credits' => 0,
    'lol' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500d27873ddad6_19973519')) {function content_500d27873ddad6_19973519($_smarty_tpl) {?><div id="container">
<div id="content" style="position: relative" class="clearfix">
<div id="column1" class="column"> 
<div class="habblet-container ">		
<div id="new-personal-info" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/system/views/web-gallery/images/personal_info/hotel_views/htlview_gb.png)"> 
<div id="badge-back">
<ul class="badge-back">
</div> 
<div class="enter-hotel-btn">
<div class="open enter-btn">
<a href="<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/client" target="uberClientWnd" onclick="HabboClient.openOrFocus(this); return false;">Enter <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
<i></i></a>
<b></b>
</div>
</div>
<div id="habbo-plate"> 
<a href="#"> 
<img alt="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/imager/<?php echo $_smarty_tpl->tpl_vars['figure']->value;?>
" /> 
</a> 
</div> 
<div id="habbo-info"> 
<div id="motto-container" class="clearfix">			
<strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
:</strong> 
<div>
<span title="<?php echo $_smarty_tpl->tpl_vars['motto']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['motto']->value;?>
</span><p style="display: none"><input type="text" maxlength="60" name="motto" value="k"/></p>			
</div> 
</div> 
<div id="motto-links" style="display: none"><a href="#" id="motto-cancel">Cancel</a></div> 
</div> 
<ul id="link-bar" class="clearfix"> 		
<li class="credits"> 
<a href="<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/credits"><?php echo $_smarty_tpl->tpl_vars['credits']->value;?>
</a> Credits
</li>		
<li class="activitypoints"> 
<a href="<?php echo $_smarty_tpl->tpl_vars['www']->value;?>
/pixels"><?php echo $_smarty_tpl->tpl_vars['lol']->value;?>
</a> Pixels
</li> 	</ul>

<div id="habbo-feed"> 
<ul id="feed-items">  
</ul> 
</div> 
<p class="last"></p> 
</div> 
<script type="text/javascript"> 
HabboView.add(function() {
L10N.put("personal_info.motto_editor.spamming", "Don\'t spam me, bro!");
PersonalInfo.init("");
});
</script> 
</div> 
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
<script type="text/javascript"> 
    //HabboView.run();
</script>
</div>
<div id="column2" class="column">
   <?php }} ?>