<?php /* Smarty version Smarty-3.1.13, created on 2014-04-24 21:00:04
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402153594314598d58-64237350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2827b8c1b13b3858cb7c178420a75333fb5d1282' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\right_sidebar.tpl',
      1 => 1395482087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402153594314598d58-64237350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'programs_array' => 0,
    'site_url' => 0,
    'info' => 0,
    'right_banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5359431463dab4_36174682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359431463dab4_36174682')) {function content_5359431463dab4_36174682($_smarty_tpl) {?><div class="right_sidebar">
    
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section']!=1){?>
    <div class="program_wrapper">
    	<span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['programs_array']->value[0]['section_name'];?>
</span>
        <ul class="program_list">
        	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['programs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
           	<li><h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h2></li>
            <?php } ?>
        </ul>
    </div>
    <?php }else{ ?><!--
    <br />
    <iframe width="273" height="210" src="//www.youtube.com/embed/Wp5Xkll8xAg" frameborder="0" allowfullscreen></iframe>
    -->
    <?php }?>
    
    
    
    <div id="calendar"></div>
	
    <div class="sidebar_banners">
	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['right_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
" class="banner"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
	<?php } ?>
    </div>
</div><?php }} ?>