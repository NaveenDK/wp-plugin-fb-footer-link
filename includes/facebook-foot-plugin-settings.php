<?php
//Create menu link
function ffl_options_menu_plugin(){
    add_options_page(
        'Facebook Footer Link Options',
        'Facebook Footer Link',
        'manage_options',
        'ffl-options',
        'ffl_options_content'
    );
}

//Create Options Page Content

function ffl_options_content(){

    //Init Options Global
    global $ffl_options;



    ob_start(); ?>
        <div class="wrap">
            <h2> <?php _e('Facebook footer link settings','ffl_domain');?> </h2>
            <p> <?php _e('Settings for the Facebook Foot plugin ','ffl_domain');?></p>
            <form method="post" action = "options.php">
                <?php settings_fields('ffl_settings_group'); ?>
                <table class = "form-table">
                    <tbody>
                        <tr>
                            <th scope = "row" > <label for="ffl_settings[enable]">
                            <?php _e('Enable','ffl_domain');?>
                            </label></th>
                            <td> <input name="ffl_settings[enable]" type="checkbox" id="ffl_settings[enable]" value="1"
                            
                             <?php checked('1',$ffl_options['enable']); ?>

                            > </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

    <?php
    echo ob_get_clean();
}

add_action('admin_menu', 'ffl_options_menu_plugin');

//Register Settings
function ffl_register_settings(){
    register_setting('ffl_settings_group','ffl_settings');
}

add_action('admin_init','ffl_register_settings');