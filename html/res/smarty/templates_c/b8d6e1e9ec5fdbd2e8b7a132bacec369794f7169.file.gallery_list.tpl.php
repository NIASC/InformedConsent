<?php /* Smarty version Smarty-3.1.13, created on 2016-05-19 20:34:31
         compiled from "C:\xampp\htdocs\moe\smarty\templates\gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26711573deb170a99c1-21212518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d6e1e9ec5fdbd2e8b7a132bacec369794f7169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\gallery_list.tpl',
      1 => 1462829401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26711573deb170a99c1-21212518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_573deb1721bb48_70374253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573deb1721bb48_70374253')) {function content_573deb1721bb48_70374253($_smarty_tpl) {?><div id="content">
	<div class="container">		
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h3>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
					<img class="img-responsive" src="uploads/files/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</span>
					<div class="date"><date><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['g']->value['date'];?>
</date></div> 
				</a>
			</div>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
			<ul class="pagination-list">
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['site_data']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>
				<li><a class="shadow active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
			<?php }else{ ?>
				<li><a class="shadow" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
			<?php }?>
			<?php } ?>
			</ul>
			<?php }?>
       	 </div>
    </div>
</div><?php }} ?>