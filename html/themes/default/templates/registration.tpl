<section id="registration" class="container-fluid section">
  <form id="registration-form" method="post" autocomplete="off" data-phone-pattern="{$phone_pattern}" data-phone-patternX="{$phone_patternX}">
    <input type="hidden" id="mobile-format" value="{$setting_data.number_code}">
    {foreach $infos as $info}
    
    {if $info.section->type == 21}
    <div data-step="questionnaire" class="section-content registration-step row" data-error="{$language.wrong_answer}" data-success="{$language.correct_answer}">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1>{$info.section->name}</h1>
          {foreach $info.additional as $item}
          <div class="row type-21 required" data-name="radio_{$item->id}">
            <p>{$item->question}</p>
            {if $item->param_1}
           
            <div class="form-group">
              <div class="radio-inline">
                <input id="{$item->id}_1" data-correct="{$item->value == 1}" type="radio" name="radio_{$item->id}" value="1"/>
                <label for="{$item->id}_1"><span></span>{$item->param_1}</label>
              </div>
            </div>
            {/if}

            {if $item->param_2}
            <div class="form-group">
              <div class="radio-inline">
                <input id="{$item->id}_2" type="radio" data-correct="{$item->value == 2}" name="radio_{$item->id}" value="2"/>
                <label for="{$item->id}_2"><span></span>{$item->param_2}</label>
              </div>
            </div>
            {/if}

            {if $item->param_3}
            <div class="form-group">
              <div class="radio-inline">
                <input id="{$item->id}_3" type="radio" data-correct="{$item->value == 3}" name="radio_{$item->id}" value="3"/>
                <label for="{$item->id}_3"><span></span>{$item->param_3}</label>
              </div>
            </div>
            {/if}

            {if $item->param_4}
            <div class="form-group">
              <div class="radio-inline">
                <input id="{$item->id}_4" type="radio" data-correct="{$item->value == 4}" name="radio_{$item->id}" value="4"/>
                <label for="{$item->id}_4"><span></span>{$item->param_4}</label>
              </div>
            </div>
            {/if}

            <div class="alert alert-danger" style="display:none;">{$language.incorect_answer}</div>
          </div>
          {/foreach}

          <p class="comment">{$language.consent_message}</p>
          <input type="button" class="btn btn-link" id="checkReg" value="{$language.check_questionarie}">
        </div>
      </div>
    </div>
    {else if $info.section->style == 4}
    <div data-step="final" class="section-content registration-step {if $info@iteration == 1}active{/if} row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1>{$info.content.0.title}</h1>

          <div class="row">
            <div class="col-sm-12">
              {$info.content.0.content}
            </div>
          </div>
        </div>
      </div>
    </div>
    {else if $info.section->style == 3}
    <div data-step="disease" class="section-content registration-step row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1>{$info.content.0.title}</h1>
          {$info.content.0.content}

          <div class="form-inline row">
            <div class="form-group">
              <div class="checkbox-inline">
                <input id="HavePrioritzedDiseases" type="checkbox" name="HavePrioritzedDiseases">
                <label for="HavePrioritzedDiseases"><span></span>{$language.no_disease}</label>
              </div>
            </div>
            <div id="diseasesListContainer">
              <div id="selectedDiseasesContainer"></div>
              <div class="form-group">
                <select id="diseasesSelect" name="disease" class="form-control combobox">
                  <option disabled selected value> -- {$language.select_disease} -- </option>
                  {foreach $disease as $item}
                  <option value="{$item->id}">{$item->title}</option>
                  {/foreach}
                </select>
                <button id="addDiseaseButton" class="btn btn-link">{$language.add}</button>
              </div>
              <div class="add-nlisted-disease-wrap selected-disease">
                <div class="form-group unlisted-disease">
                  <div class="input-group">
                    <input type="text" value="" placeholder="Insert Unlisted Disease" class="form-control">
                  </div>
                  <button id="addNotListedDiseaseButton" class="btn btn-link">{$language.add}</button>
                </div>
              </div>
            </div>
          </div>
        </div>




        <input type="hidden" name="nemid" id="nemid" value="{uniqid()}">
        <input type="hidden" name="contactinfo_optional" value="{$setting_data.contactinfo_optional}">
        {if $setting_data.contactinfo_optional != 0}
        {if $setting_data.contactinfo_optional == 1}
        <div class="form-group contact-toggler">
          <div class="checkbox-inline">
            <input id="contact_info" type="checkbox" name="contact_info" />
            <label for="contact_info"><span></span>{$language.enter_contacts}</label>
          </div>
        </div>
        {/if}
        <div class="row" id="contact-info-optional" {if $setting_data.contactinfo_optional ==1}style="display:none;"{/if}>
          <h1>{$language.contact_info}</h1>
          <div class="row">
            <div class="form-horizontal col-xs-12 col-sm-6">
              <div class="form-group">
                <label for="email">{$language.email}<span class="message">{$language.email_format_error}</span></label>
                <input id="email" type="text" data-error="{$language.email_format_error}" data-error-empty="Email field is empty"  data-attach="emailAgain" name="email" class="form-control email-check">
              </div>
              <div class="form-group">
                <label for="emailAgain">{$language.email_again}<span class="message">{$language.email_doesnt_match1}</span></label>
                <input id="emailAgain" data-attach="email" type="text" name="emailAgain" data-error="{$language.repeat_email}" class="form-control email-check">
              </div>
              <div class="form-group">
                <label for="phone">{$language.phone}<span class="message">{$language.phone_error}</span></label>
                <input id="phone" type="text" data-error="{$language.phone_error}" data-error-empty="Phone field is empty" data-attach="phoneAgain" name="phone" class="form-control phone-check">
              </div>
              <div class="form-group">
                <label for="phoneAgain">{$language.phone_again}<span class="message">{$language.phone_doesnt_match}</span></label>
                <input id="phoneAgain" type="text" data-attach="phone" name="phoneAgain" data-error-empty="Phone field is empty" data-error="{$language.phone_again}" class="form-control phone-check">
              </div>
            </div>
          </div>
        </div>
        {/if}
        <h1>{$language.consent}</h1>
        <div class="row">
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="participate_text" type="checkbox" name="participate_text" />
              <label for="participate_text"><span></span>{$language.participate_text}</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="acceptDedidentifedDataAccessed" type="checkbox" name="acceptDedidentifedDataAccessed" />
              <label for="acceptDedidentifedDataAccessed"><span></span>{$language.accept_text}</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="contatMeIfProjectExpanded" type="checkbox" name="contatMeIfProjectExpanded" />
              <label for="contatMeIfProjectExpanded"><span></span>{$language.contact_me}</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox-inline">
              <input id="sendNewsletters" type="checkbox" name="sendNewsletters" />
              <label for="sendNewsletters"><span></span>{$language.newslatter_text}</label>
            </div>
          </div>
        </div>
        {if $nemid_auth}
        <button class="btn btn-link btn-submit">{$language.sign_nemid} →</button>
        {else}
        <button class="btn btn-link btn-submit">{$language.sign_in} →</button>
        {/if}

        <div class="last row" style="display:none;">
          <div class="col col-sm-6">
            <div class="form-group">
              <label>{$language.email}: </label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label>{$language.validation_code}: </label>
              <input type="text" class="form-control" name="validation_code">
            </div>

            <input type="submit" class="btn btn-link" value="{$language.submit}">
          </div>
        </div>
      </div>
    </div>
    <div data-step="contact-information" class="section-content registration-step row">

    </div>
    {else}
    <div data-step="{$info@iteration}" class="section-content registration-step {if $info@iteration == 1}active{/if} row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <div class="row">
          <h1>{$info.content.0.title}</h1>

          {if $info.section->style == 5}
          <div class="row">
            <div class="col-sm-12">
              {include file="slider.tpl"}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              {$info.content.0.content}
            </div>
          </div>
          {else}
          {$info.content.0.content}
          {/if}
        </div>
      </div>
    </div>
    {/if}
    {/foreach}
    <div data-step="errors" class="section-content registration-step row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10">
        <h1>{$language.error_title}</h1>
        <p>{$language.questionnaire_error}</p>

        <button class="btn btn-link btn-restart">{$language.start_again}</button>
      </div>
    </div>
  </form>
</section>
{literal}

{/literal}
