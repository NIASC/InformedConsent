<?php /* Smarty version Smarty-3.1.13, created on 2017-03-31 11:40:49
         compiled from "/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:470663505582068823300c7-89127227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bef93ce497bc5aabd3c04f0ec44fe4f3a23ff82' => 
    array (
      0 => '/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/slider.tpl',
      1 => 1487682858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470663505582068823300c7-89127227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58206882340126_58348080',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58206882340126_58348080')) {function content_58206882340126_58348080($_smarty_tpl) {?><div class="slider">
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