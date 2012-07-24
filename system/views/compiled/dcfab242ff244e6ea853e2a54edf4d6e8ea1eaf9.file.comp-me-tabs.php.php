<?php /* Smarty version Smarty-3.1.8, created on 2012-07-23 11:59:27
         compiled from "system/views\generic\components\comp-me-tabs.php" */ ?>
<?php /*%%SmartyHeaderCode:5065500d1bbb0483b3-40053119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcfab242ff244e6ea853e2a54edf4d6e8ea1eaf9' => 
    array (
      0 => 'system/views\\generic\\components\\comp-me-tabs.php',
      1 => 1343037565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5065500d1bbb0483b3-40053119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500d1bbb0902a0_74981984',
  'variables' => 
  array (
    'users_online' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500d1bbb0902a0_74981984')) {function content_500d1bbb0902a0_74981984($_smarty_tpl) {?><?php if (!is_callable('smarty_block_php')) include 'system/classes/smarty_plugins\\block.php.php';
?><ul id="navi"> 
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    global $start;
        $tabid = 1;
        if(defined('TAB'))
        {
            $tabid = TAB;
        }
        $getTabs = mysqli_raw_query("SELECT id, parent_id, name, link, class, rank FROM ava_sitenavi WHERE parent_id='0' AND rank <= '" . $start->users->get($_SESSION['LoggedIn'], 'rank') . "' ORDER BY id ASC");
        while($fetchTabs = mysqli_fetch_assoc($getTabs))
        {
            $class = $fetchTabs['class'];
            $id = "";
            if($tabid == $fetchTabs['id'])
            {
                $class .= ' selected';
            }
            if($fetchTabs['class'] == 'tab-register-now')
            {
                $id = 'tab-register-now';
            }
                echo '<li  class="' . $class . '" id="' . $id . '"><a href="' . $fetchTabs['link'] . '">' . $fetchTabs['name'] . '</a><span></span>';
        }
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
	<<?php ?>?php
            $pageid = 1;
            if(defined('PAGE'))
            {
                $pageid = PAGE;
            }
            $getSmallLinks = mysql_query("SELECT id, parent_id, name, link, class, rank FROM ava_sitenavi WHERE parent_id='" . $tabid . "' AND rank <= '" . $users->find($_SESSION['AvalozLogged'], 'rank') . "' ORDER BY id ASC");
            $i = 0;
            while($getLinks = mysql_fetch_array($getSmallLinks))
            {
                $i++;
                $class = '';
                if($pageid == $getLinks['id'])
                {
                    $class .= ' selected';
                }
                if($i == mysql_num_rows($getSmallLinks))
                {
                    $class .= ' last';
                }
                    echo '<li class="' . $class . '"><a href="' . $getLinks['link'] . '">' . $getLinks['name'] . '</a></li>';
            }
        ?<?php ?>>
    </div> 
</div> <?php }} ?>