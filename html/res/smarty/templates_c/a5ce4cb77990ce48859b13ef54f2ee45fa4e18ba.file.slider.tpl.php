<?php /* Smarty version Smarty-3.1.13, created on 2018-02-06 15:26:02
         compiled from "/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15212284095a78483a968f31-29125157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5ce4cb77990ce48859b13ef54f2ee45fa4e18ba' => 
    array (
      0 => '/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/slider.tpl',
      1 => 1517916313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15212284095a78483a968f31-29125157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a78483a96dbe2_39157688',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78483a96dbe2_39157688')) {function content_5a78483a96dbe2_39157688($_smarty_tpl) {?><div class="slider">
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