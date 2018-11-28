<?php /* Smarty version Smarty-3.1.13, created on 2018-11-01 14:53:48
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260057f4a67d10ea92-46985118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35825ef723a31f52c4cc132128b502cafcc3ebed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\slider.tpl',
      1 => 1541079888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260057f4a67d10ea92-46985118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57f4a67d112910_21396606',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4a67d112910_21396606')) {function content_57f4a67d112910_21396606($_smarty_tpl) {?><div class="slider">
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
			<!--<div class="animation-text">
				<span></span><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['title']);?>

			</div>-->
			<a href="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" class="fancy"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['title']);?>
"></a>
		</li>
	  	<?php } ?>
    </ul>
    <a class="fancy_trigger">click to view slideshow</a>
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