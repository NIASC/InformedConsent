<section class="container-fluid section">

<div class="col-xs-12 col-sm-offset-1 col-sm-10">
  <h1>{$site_data.section_name}</h1>
  {if !isset($success)}
  <form method="post" class="{if $nemid_auth}windraw{/if}">
    {if $nemid_auth}
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
            <input id="nemid" name="nemid" class="form-control" type="hidden" readonly="">
            <button class="btn btn-link auth" type="button">{$language.authenticate_nemid}</button>
          {if isset($error)}
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{$error}</div>
          {/if}
        </div>
      </div>
    </div>
    <input type="submit" value="{$language.remove}" class="btn btn-link">
    {else}
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
          {if isset($error)}
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{$error}</div>
          {/if}
          <input name="email" placeholder="{$language.email}" class="form-control" type="email" data-error="{$language.email_format_error}"/>
          <input type="submit" value="{$language.remove}" data-action="remove" class="btn btn-remove" style="margin-top: 15px;"/>
        </div>
      </div>
    </div>
    {/if}
  </form>
  {else}
  <div class="alert alert-success">
    {$language.windraw_success}
  </div>
  <!-- <button class="btn btn-link" onclick="goBack()">{$language.back}</button> -->
  {/if}
</div>

</section>
