<?php /* Smarty version Smarty-3.1.13, created on 2017-02-07 13:32:10
         compiled from "/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3199340515825d842eec538-64129371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bcea932f6c7adbc997a20a0ad0059c1e5264314' => 
    array (
      0 => '/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/text_page.tpl',
      1 => 1477680906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3199340515825d842eec538-64129371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5825d842f2eef0_80011001',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825d842f2eef0_80011001')) {function content_5825d842f2eef0_80011001($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
				<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
					<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
					</a>
				<?php }?>
                </div>
				<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>