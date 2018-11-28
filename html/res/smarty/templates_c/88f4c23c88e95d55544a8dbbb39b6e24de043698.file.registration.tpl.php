<?php /* Smarty version Smarty-3.1.13, created on 2018-11-28 15:25:36
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1411957b6fae1067010-69323083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f4c23c88e95d55544a8dbbb39b6e24de043698' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\registration.tpl',
      1 => 1543415127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1411957b6fae1067010-69323083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b6fae1262153_94981167',
  'variables' => 
  array (
    'phone_pattern' => 0,
    'phone_patternX' => 0,
    'setting_data' => 0,
    'infos' => 0,
    'info' => 0,
    'language' => 0,
    'item' => 0,
    'disease' => 0,
    'nemid_auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b6fae1262153_94981167')) {function content_57b6fae1262153_94981167($_smarty_tpl) {?><section id="registration" class="container-fluid section">
  <form id="registration-form" method="post" autocomplete="off" data-phone-pattern="<?php echo $_smarty_tpl->tpl_vars['phone_pattern']->value;?>
" data-phone-patternX="<?php echo $_smarty_tpl->tpl_vars['phone_patternX']->value;?>
">
    <input type="hidden" id="mobile-format" value="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['number_code'];?>
">
    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['info']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['info']->iteration++;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['info']->value['section']->type==21){?>
    <div data-step="questionnaire" class="section-content registration-step row" data-error="<?php echo $_smarty_tpl->tpl_vars['language']->value['wrong_answer'];?>
" data-success="<?php echo $_smarty_tpl->tpl_vars['language']->value['correct_answer'];?>
">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['section']->name;?>
</h1>
          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['additional']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <div class="row type-21 required" data-name="radio_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value->question;?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->param_1){?>
           
            <div class="form-group">
              <div class="radio-inline">
                <input id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_1" data-correct="<?php echo $_smarty_tpl->tpl_vars['item']->value->value==1;?>
" type="radio" name="radio_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" value="1"/>
                <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_1"><span></span><?php echo $_smarty_tpl->tpl_vars['item']->value->param_1;?>
</label>
              </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value->param_2){?>
            <div class="form-group">
              <div class="radio-inline">
                <input id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_2" type="radio" data-correct="<?php echo $_smarty_tpl->tpl_vars['item']->value->value==2;?>
" name="radio_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" value="2"/>
                <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_2"><span></span><?php echo $_smarty_tpl->tpl_vars['item']->value->param_2;?>
</label>
              </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value->param_3){?>
            <div class="form-group">
              <div class="radio-inline">
                <input id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_3" type="radio" data-correct="<?php echo $_smarty_tpl->tpl_vars['item']->value->value==3;?>
" name="radio_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" value="3"/>
                <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_3"><span></span><?php echo $_smarty_tpl->tpl_vars['item']->value->param_3;?>
</label>
              </div>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value->param_4){?>
            <div class="form-group">
              <div class="radio-inline">
                <input id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_4" type="radio" data-correct="<?php echo $_smarty_tpl->tpl_vars['item']->value->value==4;?>
" name="radio_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" value="4"/>
                <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
_4"><span></span><?php echo $_smarty_tpl->tpl_vars['item']->value->param_4;?>
</label>
              </div>
            </div>
            <?php }?>

            <div class="alert alert-danger" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['language']->value['incorect_answer'];?>
</div>
          </div>
          <?php } ?>

          <p class="comment"><?php echo $_smarty_tpl->tpl_vars['language']->value['consent_message'];?>
</p>
          <input type="button" class="btn btn-link" id="checkReg" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['check_questionarie'];?>
">
        </div>
      </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['info']->value['section']->style==4){?>
    <div data-step="final" class="section-content registration-step <?php if ($_smarty_tpl->tpl_vars['info']->iteration==1){?>active<?php }?> row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['title'];?>
</h1>

          <div class="row">
            <div class="col-sm-12">
              <?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['content'];?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif($_smarty_tpl->tpl_vars['info']->value['section']->style==3){?>
    <div data-step="disease" class="section-content registration-step row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['title'];?>
</h1>
          <?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['content'];?>


          <div class="form-inline row">
            <div class="form-group">
              <div class="checkbox-inline">
                <input id="HavePrioritzedDiseases" type="checkbox" name="HavePrioritzedDiseases">
                <label for="HavePrioritzedDiseases"><span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['no_disease'];?>
</label>
              </div>
            </div>
            <div id="diseasesListContainer">
              <div id="selectedDiseasesContainer"></div>
              <div class="form-group">
                <select id="diseasesSelect" name="disease" class="form-control combobox">
                  <option disabled selected value> -- <?php echo $_smarty_tpl->tpl_vars['language']->value['select_disease'];?>
 -- </option>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['disease']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</option>
                  <?php } ?>
                </select>
                <button id="addDiseaseButton" class="btn btn-link"><?php echo $_smarty_tpl->tpl_vars['language']->value['add'];?>
</button>
              </div>
              <div class="add-nlisted-disease-wrap selected-disease">
                <div class="form-group unlisted-disease">
                  <div class="input-group">
                    <input type="text" value="" placeholder="Insert Unlisted Disease" class="form-control">
                  </div>
                  <button id="addNotListedDiseaseButton" class="btn btn-link"><?php echo $_smarty_tpl->tpl_vars['language']->value['add'];?>
</button>
                </div>
              </div>
            </div>
          </div>
        </div>




        <input type="hidden" name="nemid" id="nemid" value="<?php echo uniqid();?>
">
        <input type="hidden" name="contactinfo_optional" value="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['contactinfo_optional'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['contactinfo_optional']!=0){?>
        <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['contactinfo_optional']==1){?>
        <div class="form-group contact-toggler">
          <div class="checkbox-inline">
            <input id="contact_info" type="checkbox" name="contact_info" />
            <label for="contact_info"><span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['enter_contacts'];?>
</label>
          </div>
        </div>
        <?php }?>
        <div class="row" id="contact-info-optional" <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['contactinfo_optional']==1){?>style="display:none;"<?php }?>>
          <h1><?php echo $_smarty_tpl->tpl_vars['language']->value['contact_info'];?>
</h1>
          <div class="row">
            <div class="form-horizontal col-xs-12 col-sm-6">
              <div class="form-group">
                <label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
<span class="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['email_format_error'];?>
</span></label>
                <input id="email" type="text" data-error="<?php echo $_smarty_tpl->tpl_vars['language']->value['email_format_error'];?>
" data-error-empty="Email field is empty"  data-attach="emailAgain" name="email" class="form-control email-check">
              </div>
              <div class="form-group">
                <label for="emailAgain"><?php echo $_smarty_tpl->tpl_vars['language']->value['email_again'];?>
<span class="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['email_doesnt_match1'];?>
</span></label>
                <input id="emailAgain" data-attach="email" type="text" name="emailAgain" data-error="<?php echo $_smarty_tpl->tpl_vars['language']->value['repeat_email'];?>
" class="form-control email-check">
              </div>
              <div class="form-group">
                <label for="phone"><?php echo $_smarty_tpl->tpl_vars['language']->value['phone'];?>
<span class="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['phone_error'];?>
</span></label>
                <input id="phone" type="text" data-error="<?php echo $_smarty_tpl->tpl_vars['language']->value['phone_error'];?>
" data-error-empty="Phone field is empty" data-attach="phoneAgain" name="phone" class="form-control phone-check">
              </div>
              <div class="form-group">
                <label for="phoneAgain"><?php echo $_smarty_tpl->tpl_vars['language']->value['phone_again'];?>
<span class="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['phone_doesnt_match'];?>
</span></label>
                <input id="phoneAgain" type="text" data-attach="phone" name="phoneAgain" data-error-empty="Phone field is empty" data-error="<?php echo $_smarty_tpl->tpl_vars['language']->value['phone_again'];?>
" class="form-control phone-check">
              </div>
            </div>
          </div>
        </div>
        <?php }?>
        <h1><?php echo $_smarty_tpl->tpl_vars['language']->value['consent'];?>
</h1>
        <div class="row">
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="participate_text" type="checkbox" name="participate_text" />
              <label for="participate_text"><span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['participate_text'];?>
</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="acceptDedidentifedDataAccessed" type="checkbox" name="acceptDedidentifedDataAccessed" />
              <label for="acceptDedidentifedDataAccessed"><span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['accept_text'];?>
</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="contatMeIfProjectExpanded" type="checkbox" name="contatMeIfProjectExpanded" />
              <label for="contatMeIfProjectExpanded"><span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['contact_me'];?>
</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="sendNewsletters" type="checkbox" name="sendNewsletters" />
              <label for="sendNewsletters"><span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['newslatter_text'];?>
</label>
            </div>
          </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['nemid_auth']->value){?>
        <button class="btn btn-link btn-submit"><?php echo $_smarty_tpl->tpl_vars['language']->value['sign_nemid'];?>
 →</button>
        <?php }else{ ?>
        <button class="btn btn-link btn-submit"><?php echo $_smarty_tpl->tpl_vars['language']->value['sign_in'];?>
 →</button>
        <?php }?>

        <div class="last row" style="display:none;">
          <div class="col col-sm-6">
            <div class="form-group">
              <label><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
: </label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label><?php echo $_smarty_tpl->tpl_vars['language']->value['validation_code'];?>
: </label>
              <input type="text" class="form-control" name="validation_code">
            </div>

            <input type="submit" class="btn btn-link" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['submit'];?>
">
          </div>
        </div>
      </div>
    </div>
    <div data-step="contact-information" class="section-content registration-step row">

    </div>
    <?php }else{ ?>
    <div data-step="<?php echo $_smarty_tpl->tpl_vars['info']->iteration;?>
" class="section-content registration-step <?php if ($_smarty_tpl->tpl_vars['info']->iteration==1){?>active<?php }?> row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['title'];?>
</h1>

          <?php if ($_smarty_tpl->tpl_vars['info']->value['section']->style==5){?>
          <div class="row">
            <div class="col-sm-12">
              <?php echo $_smarty_tpl->getSubTemplate ("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['content'];?>

            </div>
          </div>
          <?php }else{ ?>
          <?php echo $_smarty_tpl->tpl_vars['info']->value['content'][0]['content'];?>

          <?php }?>
        </div>
      </div>
    </div>
    <?php }?>
    <?php } ?>
    <div data-step="errors" class="section-content registration-step row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <h1><?php echo $_smarty_tpl->tpl_vars['language']->value['error_title'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['language']->value['questionnaire_error'];?>
</p>

        <button class="btn btn-link btn-restart"><?php echo $_smarty_tpl->tpl_vars['language']->value['start_again'];?>
</button>
      </div>
    </div>
  </form>
</section>



<?php }} ?>