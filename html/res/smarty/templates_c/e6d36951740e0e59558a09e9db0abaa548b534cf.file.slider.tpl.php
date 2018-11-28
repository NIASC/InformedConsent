<?php /* Smarty version Smarty-3.1.13, created on 2017-01-10 14:03:41
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31858026057dbd6439ab1b8-58137155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6d36951740e0e59558a09e9db0abaa548b534cf' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/slider.tpl',
      1 => 1484042618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31858026057dbd6439ab1b8-58137155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57dbd6439afe54_33293783',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dbd6439afe54_33293783')) {function content_57dbd6439afe54_33293783($_smarty_tpl) {?><div class="slider">
  <div class="slide-content">
    <ul class="slides">
		<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->iteration++;
?>
		<li data-step="<?php echo $_smarty_tpl->tpl_vars['banner']->iteration;?>
" class="active">
			<div class="animation-text">
				<span></span><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['title']);?>

			</div>
			<a href="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" class="fancy"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" style="width:50%" alt=""></a>
		</li>
	  	<?php } ?>
    </ul>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['show_slider_arrows']==1){?>
  <button class="btn btn-link btn-slider-prev" disabled="">
  	<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link playbtn">
  	<span class="glyphicon glyphicon glyphicon-play" style="font-size:20px" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link btn-slider-next">
  	<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
  </button>
  <?php }?>
</div>
<?php }} ?>