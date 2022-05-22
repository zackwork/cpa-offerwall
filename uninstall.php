<?php 

//exit if uninstall constant is not defined

if(!define('WP_UNINSTALL_PLUGIN')) exit;


//remove plugin options
delete_option('cpa_ow_json_url');


?>