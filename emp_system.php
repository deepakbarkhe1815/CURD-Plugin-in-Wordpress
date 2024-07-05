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


// Submit Callback Function
function emp_list_employee(){
    include_once(Emp_PLUGIN_PATH."pages/list_employee.php");
}

?>