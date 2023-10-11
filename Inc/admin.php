<?php
// hooks wordpress for create admin menu
add_action ( 'admin_menu' , 'user_message_menu' );
function user_message_menu()
{
add_menu_page (
'UM Manager',
'UM Manager',
'manage_options',
'user_message',
'user_message_admin_page',
'dashicons-admin-users',
6 );
}

function user_message_admin_page()
{
    include_once UM_PATH . 'admin/index.php' ;
}   