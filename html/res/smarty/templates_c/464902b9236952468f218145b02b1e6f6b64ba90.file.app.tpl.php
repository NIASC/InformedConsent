<?php /* Smarty version Smarty-3.1.13, created on 2018-02-09 17:38:38
         compiled from "/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10837235065a78536e0a1e07-13841422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464902b9236952468f218145b02b1e6f6b64ba90' => 
    array (
      0 => '/home/ideadesi/domains/ideadesigngroup.ge/public_html/research/html/themes/default/templates/app.tpl',
      1 => 1517916313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10837235065a78536e0a1e07-13841422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5a78536e107704_17889986',
  'variables' => 
  array (
    'site_data' => 0,
    'success' => 0,
    'language' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a78536e107704_17889986')) {function content_5a78536e107704_17889986($_smarty_tpl) {?><section class="container-fluid section">

<div class="col-xs-12 col-sm-offset-1 col-sm-10">
  <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
  <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)){?>
  <form method="post" class="windraw">
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
            <input id="nemid" name="nemid" class="form-control" type="hidden" readonly="">
            <button class="btn btn-link auth" type="button"><?php echo $_smarty_tpl->tpl_vars['language']->value['authenticate_nemid'];?>
</button>
          <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
          <?php }?>
        </div>
      </div>
    </div>
    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['remove'];?>
" class="btn btn-link">
  </form>
  <?php }else{ ?>
  <div class="alert alert-success">
    <?php echo $_smarty_tpl->tpl_vars['language']->value['windraw_success'];?>

  </div>
  <button class="btn btn-link" onclick="goBack()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</button>
  <?php }?>
</div>

</section>
<?php }} ?>