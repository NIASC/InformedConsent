<?php /* Smarty version Smarty-3.1.13, created on 2017-01-02 13:13:14
         compiled from "/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/text_page_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:475234318586a51ea4d3731-35163211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0650c0ab878749a79cf355650f52f71da530e968' => 
    array (
      0 => '/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/text_page_2.tpl',
      1 => 1477673706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475234318586a51ea4d3731-35163211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_586a51ea8d8d62_11503766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a51ea8d8d62_11503766')) {function content_586a51ea8d8d62_11503766($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h3>
		<div class="row page-content">
			<div class="col-md-12">
			<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
			<div class="col-md-3">
			<a class="zoom standard_image" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
			</a>
			</div>
			<div class="col-md-9">
			<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

			</div>
			<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

			<?php }?>
			</div>	
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php }} ?>