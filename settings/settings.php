<?php 

Class CPAOW_SETTINGS{

    public function __construct(){
        if(array_key_exists('cpa_ow_update_settings', $_POST)){

            if(isset($_POST['cpa_ow_json_url'])){

                $json_url = sanitize_url($_POST['cpa_ow_json_url']);
                
                update_option('cpa_ow_json_url', $json_url);
            }
            echo "<div class='notice notice-success is-dismissible'><p>Settings saved.</p></div>";
            
    
        }
    }

}

$CPAOW_SETTINGS = new CPAOW_SETTINGS();



?>