<div class="wrap">
  <h1>CPA OFFERWALL SETTINGS</h1>
  <div class="wrap">
    <form method="POST" action="">
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="input_id">Json Url</label></th>
            <td><input type="url" placeholder="enter json url here" name="cpa_ow_json_url" id="cpaowInputUrl" value="<?php echo esc_url(get_option('cpa_ow_json_url')); ?>" class="regular-text"></td>
          </tr>
          <tr>
            <td>
             <input class="button button-primary" type="submit" id="submitInfluxScripts" name="cpa_ow_update_settings" value="Save" />
           </td>
         </tr>
       </tbody>
     </table>
   </form>
 </div>
</div>