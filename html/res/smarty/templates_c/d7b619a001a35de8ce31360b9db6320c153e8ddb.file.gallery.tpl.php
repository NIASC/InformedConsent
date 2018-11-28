<?php /* Smarty version Smarty-3.1.13, created on 2017-02-10 05:10:38
         compiled from "/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12533250285829f51d3b5543-22456963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7b619a001a35de8ce31360b9db6320c153e8ddb' => 
    array (
      0 => '/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/gallery.tpl',
      1 => 1477680906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12533250285829f51d3b5543-22456963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5829f51d42ff66_62041492',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'gall_title' => 0,
    'start_date' => 0,
    'info_content' => 0,
    'group' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829f51d42ff66_62041492')) {function content_5829f51d42ff66_62041492($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
					<p><i><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</i></p>
					<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

					<ul class="post-gallery">
					<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
						<li class="col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="res/images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
">
								<img class="img-responsive" src="res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
" />
							</a>
						</li>
					<?php } ?>
					</ul>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>