<div class="wrap">
  <h1>CPA OFFERWALL SETTINGS</h1>
  <div class="wrap">
    <form method="POST" action="">
      <fieldset>
        <legend>Enter below Your JSON Feed URL from <a href="https://www.cpagrip.com/" target="_blank">cpagrip.com</a></legend>
        <br>
        <input style="display: block;" type="url" placeholder="JSON Offer Feed Url" name="cpa_ow_json_url" id="cpaowInputUrl" value="<?php echo esc_url(get_option('cpa_ow_json_url')); ?>">
        <br>
        <input class="button button-primary" type="submit" id="submitInfluxScripts" name="cpa_ow_update_settings" value="Save" />
      </fieldset>

    </form>
  </div>
</div>