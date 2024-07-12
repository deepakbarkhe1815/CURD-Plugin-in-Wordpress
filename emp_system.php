<?php 

/*

* Plugin Name: Employee Management System
* Description: This Is Employee Management System CURD Plugin.
* Plugin URI: https://www.hornax.com
* Author: Deepak Barkhe
* Author URI: https://www.hornax.com/deepakbarkhe
* Version: 1.0.0
* Requies at Least: 6.3.2
* Requires PHP: 7.4

*/

define("Emp_PLUGIN_PATH", plugin_dir_path(__FILE__));


define("Emp_PLUGIN_URL",plugin_dir_url(__FILE__));


// Calling action hook to add menu
add_action("admin_menu","cp_add_admin_menu");


// Add menu
function cp_add_admin_menu(){
    add_menu_page("Employee System | Employee Management System", "Employee System", "manage_options",
    "employee-system", "cp_emp_system", "dashicons-editor-removeformatting", 23);

    // Add Sub Menus
    add_submenu_page("employee-system", "Add Employee", "Add Employee", "manage_options", 
    "employee-system", "cp_emp_system");

    add_submenu_page("employee-system", "List Employee", "List Employee", "manage_options", 
    "list_employee", "emp_list_employee");
}

// Menu Handle
function cp_emp_system(){
    include_once(Emp_PLUGIN_PATH."pages/add_employee.php");
}


// Submenu Callback Function
function emp_list_employee(){
    include_once(Emp_PLUGIN_PATH."pages/list_employee.php");
}

register_activation_hook(__FILE__, "emp_create_table");

function emp_create_table(){

    global $wpdb;
    $table_prefix = $wpdb->prefix; //wp_

    $sql = "CREATE TABLE {$table_prefix}emp_custom_form_data (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `phone` varchar(255) NOT NULL,
        `gender` enum('male','female','other') NOT NULL,
        `desgination` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
      ";
      
      include_once ABSPATH. "wp-admin/includes/upgrade.php";

      dbDelta($sql);
}

register_deactivation_hook(__FILE__, "emp_deactivation_table");

function emp_deactivation_table(){

    global $wpdb;
    $table_prefix = $wpdb->prefix;

    $sql = "DROP TABLE IF EXISTS{$table_prefix}emp_custom_form_data";

    $wpdb->query($sql);
}

// Add CSS and Javascript to Plugin
add_action("admin_enqueue_scripts","emp_add_plugin_assets");


function emp_add_plugin_assets(){
    // Style CSS
    wp_enqueue_style("emp-addemp-css", Emp_PLUGIN_URL."css/add_employee.css", array(), "1.0.0", "all");
    wp_enqueue_style("emp-listemp-css", Emp_PLUGIN_URL."css/list_employee.css", array(), "1.0.0", "all");
    
    // Javascript
    wp_enqueue_script("emp-listemp-js", Emp_PLUGIN_URL."js/function.js", array(), "1.0.0", "all");

}
?>