<?php /* Smarty version Smarty-3.1.13, created on 2018-11-28 15:43:36
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756257b1c8e680de57-82094223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeafcbfc9c796446cadc5bd02e67e4f9ec515d02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\app.tpl',
      1 => 1543416211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756257b1c8e680de57-82094223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b1c8e6d20bb1_11089508',
  'variables' => 
  array (
    'site_data' => 0,
    'success' => 0,
    'nemid_auth' => 0,
    'language' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b1c8e6d20bb1_11089508')) {function content_57b1c8e6d20bb1_11089508($_smarty_tpl) {?><section class="container-fluid section">

<div class="col-xs-12 col-sm-offset-1 col-sm-10">
  <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
  <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)){?>
  <form method="post" class="<?php if ($_smarty_tpl->tpl_vars['nemid_auth']->value){?>windraw<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['nemid_auth']->value){?>
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
    <?php }else{ ?>
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
          <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
          <?php }?>
          <input name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
" class="form-control" type="email" data-error="<?php echo $_smarty_tpl->tpl_vars['language']->value['email_format_error'];?>
"/>
          <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['remove'];?>
" data-action="remove" class="btn btn-remove" style="margin-top: 15px;"/>
        </div>
      </div>
    </div>
    <?php }?>
  </form>
  <?php }else{ ?>
  <div class="alert alert-success">
    <?php echo $_smarty_tpl->tpl_vars['language']->value['windraw_success'];?>

  </div>
  <!-- <button class="btn btn-link" onclick="goBack()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</button> -->
  <?php }?>
</div>

</section>
<?php }} ?>