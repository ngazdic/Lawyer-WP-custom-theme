<?php
/* 
 * In this file, we define options that we can output on any page we want. Also, to make this possible,
 * we need to include it in functions.php - require get_template_directory() . '/inc/options.php';
 */

// Function to add lawyer options page in admin menu
function lawyer_option_page() {
    add_menu_page(
        'Lawyer Options', // Page title (without $ sign)
        'Lawyer Options', // Menu title
        'administrator',  // Capability required to access the menu
        'lawyer_options', // Menu slug (should be unique)
        'lawyer_contact_data', // Callback function to output content
        'dashicons-id',    // Icon URL or dashicon name
        19                 // Position of the menu item
    );
}
add_action('admin_menu', 'lawyer_option_page');


// Function to register settings
function lawyer_contact_settings() {
    register_setting('lawyer_contact_data', 'lawyer_contact_title');
    register_setting('lawyer_contact_data', 'lawyer_address');
    register_setting('lawyer_contact_data', 'lawyer_phone');
    register_setting('lawyer_contact_data', 'lawyer_mobile_1');
    register_setting('lawyer_contact_data', 'lawyer_mobile_2');
    register_setting('lawyer_contact_data', 'lawyer_email_1');
    register_setting('lawyer_contact_data', 'lawyer_email_2');
}
add_action('admin_init', 'lawyer_contact_settings');


// Function to display content on the lawyer options page
function lawyer_contact_data() {
    ?>
    <div class="wrap">
        <h1>Lawyer Contact Data</h1>
        <form method='POST' action="options.php">
            <?php 
            settings_fields('lawyer_contact_data');
            do_settings_sections('lawyer_options');
            ?>
            
            <table class='form-table'>
                <tr>
                    <th>Info section title:</th>
                    <td>
                        <input type='text' name='lawyer_contact_title' value='<?php echo esc_attr(get_option('lawyer_contact_title'))
                        //ovo stavljamo, mislim na php kod u value, da bi nam se moglo ispisati sta god mi napisemo u cpanelu na internet stranici?>'>  
                    </td>
                     </tr>
                        <tr>
                    <th>Address:</th>
                    <td>
                        <input type='text' name='lawyer_address' value='<?php echo esc_attr(get_option('lawyer_address'))?>'>  
                    </td>
                 </tr>
                   <tr>
                    <th>Phone:</th>
                    <td>
                        <input type='text' name='lawyer_phone' value='<?php echo esc_attr(get_option('lawyer_phone'))?>'>  
                    </td>
                 </tr>
                     <tr>
                    <th>Mobile Phone 1:</th>
                    <td>
                        <input type='text' name='lawyer_mobile_1' value='<?php echo esc_attr(get_option('lawyer_mobile_1'))?>'>  
                    </td>
                 </tr>
                     <tr>
                    <th>Mobile Phone 2:</th>
                    <td>
                        <input type='text' name='lawyer_mobile_2' value='<?php echo esc_attr(get_option('lawyer_mobile_2'))?>'>  
                    </td>
                 </tr>
                   <tr>
                    <th>Email address 1:</th>
                    <td>
                        <input type='text' name='lawyer_email_1' value='<?php echo esc_attr(get_option('lawyer_email_1'))?>'>  
                    </td>
                 </tr>
                   <tr>
                    <th>Email address 2:</th>
                    <td>
                        <input type='text' name='lawyer_email_2' value='<?php echo esc_attr(get_option('lawyer_email_2'))?>'>  
                    </td>
                 </tr>
                <!-- Add more fields as needed -->
            </table>
            
      <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
