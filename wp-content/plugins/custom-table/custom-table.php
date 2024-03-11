<?php
/**
* Plugin Name: test-plugin
* Plugin URI: https://www.your-site.com/
* Description: Test.
* Version: 0.1
* Author: your-name
* Author URI: https://www.your-site.com/
**/
function create_database_table() {
    global $table_prefix, $wpdb;
    $table_name = $table_prefix . 'custom_table';
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name tinytext NOT NULL,
        text text NOT NULL,
        url varchar(55) DEFAULT '' NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . '/wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook( __FILE__, 'create_database_table' );
function insert_record_into_table(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_table';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time( 'mysql' ),
            'name' => 'John Doe',
            'text' => 'Hello World!',
            'url'  => 'https://wordpress.org'
        )
    );
}
register_activation_hook( __FILE__, 'insert_record_into_table' );
function update_record_in_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'custom_table';

    $wpdb->update(
        $table_name,
        array(
            'time' => current_time( 'mysql' ),
            'name' => 'Jane Doe',
            'text' => 'Hello Planet!',
            'url'  => 'https://wordpress.org'
        ),
        array( 'id' => 1 )
    );
}
function select_records_from_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_table';
    $results = $wpdb->get_results( "SELECT * FROM $table_name" );
    foreach ( $results as $result ) {
        echo $result->name . ' ' . $result->text . '<br>';
    }
}
function delete_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'custom_table';

    $wpdb->query( "DROP TABLE IF EXISTS $table_name" );
}
register_deactivation_hook( __FILE__, 'delete_table');
// register_uninstall_hook( __FILE__, 'delete_table');
