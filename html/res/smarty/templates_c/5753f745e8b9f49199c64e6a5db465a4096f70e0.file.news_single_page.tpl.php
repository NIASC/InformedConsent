<?php /* Smarty version Smarty-3.1.13, created on 2016-05-24 11:42:14
         compiled from "C:\xampp\htdocs\moe\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26789571f4fb6421935-02058543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5753f745e8b9f49199c64e6a5db465a4096f70e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\news_single_page.tpl',
      1 => 1462972833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26789571f4fb6421935-02058543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571f4fb65aa595_42575915',
  'variables' => 
  array (
    'start_date' => 0,
    'info_title' => 0,
    'info_img' => 0,
    'info_files' => 0,
    'site_url' => 0,
    'image' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f4fb65aa595_42575915')) {function content_571f4fb65aa595_42575915($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h3>
		<div class="col-md-9 page-content">
			
			<div class="col-md-12">
            	<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
				<div class="col-md-4">
					<?php if ($_smarty_tpl->tpl_vars['info_img']->value&&$_smarty_tpl->tpl_vars['info_files']->value<2){?>
					<a class="zoom" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
					</a>
					<?php }?>
					<ul class="post-gallery">
					<?php if ($_smarty_tpl->tpl_vars['info_files']->value){?>
						<li class="active">
							<a class="zoom" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
							</a>
						</li>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['info_img']->value!=$_smarty_tpl->tpl_vars['image']->value->file){?>
						<li>
							<a class="zoom" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
							</a>
						</li>
						<?php }?>
					<?php } ?>
					</ul>
				</div>
				<div class="col-md-8" style="padding: 20px 0px 0px 0px;"><?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
</div>
                <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

                <?php }?>
				<?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>			
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>