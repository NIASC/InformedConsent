<?php /* Smarty version Smarty-3.1.13, created on 2017-02-07 11:55:04
         compiled from "/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/subscribe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669267765582068d803aa20-55487673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb9eb80b15ac2c113732ac9cd0325ff7e4f702a' => 
    array (
      0 => '/home/vyokcyrl/public_html/InformedConsent-app/html/themes/default/templates/subscribe.tpl',
      1 => 1477680906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669267765582068d803aa20-55487673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582068d80759e2_10024410',
  'variables' => 
  array (
    'site_data' => 0,
    'success' => 0,
    'language' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582068d80759e2_10024410')) {function content_582068d80759e2_10024410($_smarty_tpl) {?><section class="container-fluid section">

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