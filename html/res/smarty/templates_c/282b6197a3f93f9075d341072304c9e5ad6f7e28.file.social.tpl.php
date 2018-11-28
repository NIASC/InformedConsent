<?php /* Smarty version Smarty-3.1.13, created on 2017-01-02 13:13:14
         compiled from "/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/widgets/social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:874484682586a51ea8ebb80-39541742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b6197a3f93f9075d341072304c9e5ad6f7e28' => 
    array (
      0 => '/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/widgets/social.tpl',
      1 => 1477673706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '874484682586a51ea8ebb80-39541742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_586a51ea9117d5_58621857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a51ea9117d5_58621857')) {function content_586a51ea9117d5_58621857($_smarty_tpl) {?><p>&nbsp;</p>
<p>&nbsp;</p>
<div class="social">	
	<div class="fb-share-button" data-href="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" data-layout="button_count" data-mobile-iframe="true"></div>
</div><?php }} ?>