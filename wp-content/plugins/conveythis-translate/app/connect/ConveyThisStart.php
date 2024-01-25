<?php

if (
    isset($_POST['set_api_key']) &&
    $_POST['set_api_key'] == 1
)
{
    update_option('api_key', $_POST['api_key']);
}

if (
    isset($_POST['convey_event']) &&
    strlen($_POST['convey_event_name'] > 0)
)
{
    $convey = ConveyThis::Instance();
    $convey::sendEvent($_POST['convey_event_name']);
    die(json_encode(true));
}

if( isset($_POST['ready_user']) )
{
    update_option('conveythis_new_user', 0);
}

// Register and load the widget
function wp_register_widget() {
    register_widget( 'ConveyThisWidget' );
}