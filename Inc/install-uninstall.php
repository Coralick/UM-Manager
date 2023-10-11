<?php
register_activation_hook ( UM_FILE , 'user_message_manager_install' );
register_deactivation_hook ( UM_FILE , 'user_message_manager_uninstall' ); 
register_deactivation_hook ( UM_FILE , 'user_message_manager_deactivate' );
function user_message_manager_install(){
global $wpdb;
$table_name = $wpdb -> prefix . 'user_message' ;
$sql = "CREATE TABLE $table_name (
id mediumint( 9 ) NOT NULL AUTO_INCREMENT,
yam varchar ( 255 ) NOT NULL ,
email varchar ( 255 ) NOT NULL ,
country varchar ( 255 ) NOT NULL ,
PRIMARY KEY (id)
);";
require_once ( ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta ($sql);
}
function user_message_manager_uninstall(){
global $wpdb;
$table_name = $wpdb -> prefix . 'user-message' ;
$wpdb -> query( "DROP TABLE IF EXISTS $table_name" );
}
function user_message_manager_deactivate(){
    //nothing
}