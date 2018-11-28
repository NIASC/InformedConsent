<?php /* Smarty version Smarty-3.1.13, created on 2018-02-09 17:38:36
         compiled from "/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/subscribe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3927971825a784d74639a46-96022702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adc45cb4847a2506db4172507018b27560ca08a' => 
    array (
      0 => '/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/subscribe.tpl',
      1 => 1517916313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3927971825a784d74639a46-96022702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a784d7469dc06_61567020',
  'variables' => 
  array (
    'site_data' => 0,
    'success' => 0,
    'language' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a784d7469dc06_61567020')) {function content_5a784d7469dc06_61567020($_smarty_tpl) {?><section class="container-fluid section">

<div class="col-xs-12 col-sm-offset-1 col-sm-10">
  <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
  <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)){?>
  <form method="post" class="windraw">
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
          <label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
</label>
          <input id="email" name="email" class="form-control" type="text">
          <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
          <?php }?>
        </div>
      </div>
    </div>
    <input type="submit" value="Subscribe" class="btn btn-link">
  </form>
  <?php }else{ ?>
  <div class="alert alert-success">
    <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

  </div>
  <button class="btn btn-link" onclick="goBack"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</button>
  <?php }?>
</div>

</section>
<?php }} ?>