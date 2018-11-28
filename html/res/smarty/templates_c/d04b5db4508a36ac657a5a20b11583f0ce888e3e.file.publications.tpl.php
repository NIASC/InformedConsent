<?php /* Smarty version Smarty-3.1.13, created on 2018-10-04 13:22:04
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\publications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2849357b2db9be0e3b5-04250705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04b5db4508a36ac657a5a20b11583f0ce888e3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\publications.tpl',
      1 => 1517916313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2849357b2db9be0e3b5-04250705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b2db9c0a4e61_40433814',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_url' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b2db9c0a4e61_40433814')) {function content_57b2db9c0a4e61_40433814($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row publications">
				<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
?>
					<div class="col-xl-2 col-lg-2 col-md-3  col-sm-4 col-xs-6 thumb"><?php if ($_smarty_tpl->tpl_vars['info_item']->value['file']&&$_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
						<a <?php if ($_smarty_tpl->tpl_vars['info_item']->value['file']){?> href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/docs/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['file'];?>
"<?php }elseif($_smarty_tpl->tpl_vars['url']->value!=''){?> href="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['url'];?>
"<?php }?> target="_blank">
							<img src="res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="" />
							<div><h6><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h6></div>
							<?php }elseif($_smarty_tpl->tpl_vars['info_item']->value['file']){?>
							<div><h6><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h6></div>
							<?php }?>
						</a>
					</div>
				<?php } ?>	
				<?php }?>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>