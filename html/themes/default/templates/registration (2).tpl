<section id="registration" class="container-fluid section">
    <form id="registration-form" method="post" autocomplete="off">
      <input type="hidden" id="mobile-format" value="{$setting_data.number_code}">
		{foreach $infos as $info}
		{if $info.section->type == 21}
		<div data-step="4" class="section-content registration-step row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
				<div class="row">
					<h1>{$info.section->name}</h1>
					{foreach $info.additional as $item}
					<div class="row type-21 required" data-name="radio_{$item->id}">
					  <p>{$item->question}</p>
					  <div class="form-group">
						<div class="radio-inline">
						  <input id="{$item->id}_1" data-correct="{$item->value == 1}" type="radio" name="radio_{$item->id}" value="1"/>
						  <label for="{$item->id}_1"><span></span>{$item->param_1}</label>
						</div>
					  </div>
					  <div class="form-group">
						<div class="radio-inline">
						  <input id="{$item->id}_2" type="radio" data-correct="{$item->value == 2}" name="radio_{$item->id}" value="2"/>
						  <label for="{$item->id}_2"><span></span>{$item->param_2}</label>
						</div>
					  </div>

            <div class="alert alert-danger" style="display:none;">This answer was incorrect</div>
					</div>
					{/foreach}

					<p class="comment">It is imortant to us that we have conveyed the information above to you We urge you to revisit the information to ensure
					that you have the received adequete information to provide consent.</p>
				</div>
				<button class="btn btn-link btn-next">Great, you are set to:</button>
				{if $info@iteration > 1}
				<a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
				{/if}
			</div>
		</div>
		{else}
		<div data-step="{$info@iteration}" class="section-content registration-step {if $info@iteration == 1}active{/if} row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-10">
				<div class="row">
					<h1>{$info.content.0.title}</h1>

          {if $info@iteration == 3}
          <div class="row">
            <div class="col-sm-6">
              {include file="slider.tpl"}
            </div>
            <div class="col-sm-6">
              {$info.content.0.content}
            </div>
          </div>
          {else}
            {$info.content.0.content}
          {/if}
				</div>
				<button class="btn btn-link btn-next">{$language.continue} →</button>
				{if $info@iteration > 1}
				<a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
				{/if}
			</div>
		</div>
		{/if}
	  	{/foreach}

      <div data-step="5" class="section-content registration-step row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <div class="row">
            <h1>Consent aproach</h1>
            <p>You sign up by<p>
            <ol>
              <li><span></span>Checking the boxes below,</li>
              <li><span></span>Enter your contact information, free storebox account email, if different from the above.</li>
              <li><span></span>Giving consent with the NEM-ID signature.</li>
            </ol>
            <h1>Focusing research:</h1>
            <div class="form-inline row">
              <p>Our initial focus will be on the determinants of flares in chronic diseases. We therefore ask you fill out the items below:</p>
              <p>Do you suffer from one or more chronic diseseas that you would like us to prioritze?</p>
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
          <button class="btn btn-link btn-next">{$language.next} →</button>
          <a class="btn btn-link btn-prev back-btn" onclick="prevStep()">&larr; {$language.back}</a>
        </div>
      </div>
      <div data-step="6" class="section-content registration-step row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <h1>Contact Information</h1>
          <div class="row">
            <div class="form-horizontal col-xs-12 col-sm-6">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="emailAgain">Email Again</label>
                <input id="emailAgain" type="text" name="emailAgain" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phoneAgain">Phone Again</label>
                <input id="phoneAgain" type="text" name="phoneAgain" class="form-control">
              </div>
            </div>
          </div>
          <h1>Storebox account?</h1>
          <div class="row">
            <div class="form-horizontal col-xs-12">
              <div class="form-group">
                <div class="radio-inline">
                  <input id="isStoreboxAccountY" type="radio" name="isStoreboxAccount" value="1" checked/>
                  <label for="isStoreboxAccountY"><span></span>Yes</label>
                </div>
              </div>
              <div id="storeboxAccount" class="row">
                <div class="form-group col-xs-12">
                  <div class="checkbox-inline">
                    <input id="isSome" type="checkbox" name="isSome" />
                    <label for="isSome"><span></span>The same as aboove</label>
                  </div>
                </div>
                <div id="storeboxAccountInfo" class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="storeboxEmail">Storebox email account</label>
                    <input id="storeboxEmail" type="text" name="storeboxEmail" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="storeboxEmailAgain">Storebox email again</label>
                    <input id="storeboxEmailAgain" type="text" name="storeboxEmailAgain" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="storeboxPhone">Storebox tel no.</label>
                    <input id="storeboxPhone" type="text" name="storeboxPhone" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="storeboxPhoneAgain">Storebox tel no. Again</label>
                    <input id="storeboxPhoneAgain" type="text" name="storeboxPhoneAgain" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="radio-inline">
                  <input id="isStoreboxAccountN" type="radio" name="isStoreboxAccount" value="0"/>
                  <label for="isStoreboxAccountN"><span></span>No</label>
                </div>
                <p>You will get a link to create a storebox account at the reciept page. Remember to use the same mail as above.</p>
              </div>
            </div>
          </div>
          <h1>Consent</h1>
          <div class="row">
            <div class="form-group">
              <div class="checkbox-inline">
                <input id="acceptDedidentifedDataAccessed" type="checkbox" name="acceptDedidentifedDataAccessed" />
                <label for="acceptDedidentifedDataAccessed"><span></span>I accept that my de-didentifed data can be accessed by other researchers.</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-inline">
                <input id="contatMeIfProjectExpanded" type="checkbox" name="contatMeIfProjectExpanded" />
                <label for="contatMeIfProjectExpanded"><span></span>Please contact me if the project is expanded. (This could be an app that can advise you on your purchases, or that we would like to use other data sources)</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox-inline">
                <input id="sendNewsletters" type="checkbox" name="sendNewsletters" />
                <label for="sendNewsletters"><span></span>Send me newsletters about the project</label>
              </div>
            </div>
            <a href="#">Request for NEM ID</a>
          </div>
          <button class="btn btn-link btn-submit">Next →</button>
        </div>
      </div>
      <div data-step="finish" class="section-content registration-step row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <h1>Receipt Page</h1>
          <p>Thank you for participating in the project.<br/>
            A copy of this receipt and your consent has been sent to XXX@XXX.XX</p>
          <p>If you do not have a storebox account:<br/>
            Use the contact email and phone number you entered above and register here:<br/>
          <a href="https://dk.storebox.com/beta/#/signup/info">https://dk.storebox.com/beta/#/signup/info</a><br/>
            You can read more about storebox here:<br/>
          <a href="https://dk.storebox.com/beta/#/web">https://dk.storebox.com/beta/#/signup/info</a><br/>
            More about the project: <a href="index.html">Back to landing page</a><br/>
            You may at any time withdraw from the study: <a href="#">Withdraw consent</a>
          </p>
        </div>
      </div>
      <div data-step="errors" class="section-content registration-step row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <h1>Oops there was some errors!</h1>
          <p>Questionary was wrong</p>

          <button class="btn btn-link btn-restart">Start Again?</button>
        </div>
      </div>
    </form>
  </section>
