<?php /* Smarty version Smarty-3.1.13, created on 2018-02-09 17:37:27
         compiled from "/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15428431495a7848f5831673-92862592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e9d19f5e5e7f7b688d14bbe9ca6747796a02562' => 
    array (
      0 => '/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/gallery_list.tpl',
      1 => 1517916313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15428431495a7848f5831673-92862592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a7848f58d37b9_51063822',
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7848f58d37b9_51063822')) {function content_5a7848f58d37b9_51063822($_smarty_tpl) {?><section id="news" class="container-fluid section">
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
			 	<div class="row gallery">
				
					<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a class="thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
							<img class="img-responsive" src="res/images/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
							<div class="description">
								<h3><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</h3>
								<date><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['g']->value['date'];?>
</date>
							</div> 
						</a>
					</div>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
					<ul class="pagination-list">
					<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['site_data']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>
						<li>
							<a class="shadow active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

							</a>
						</li>
					<?php }else{ ?>
						<li><a class="shadow" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
					<?php }?>
					<?php } ?>
					</ul>
					<?php }?>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>