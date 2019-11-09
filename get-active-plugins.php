//Wordpress shortcode

static function nwm_list_plugins($atts) {

    $atts = shortcode_atts( array(
    'is-active' => true,
  ), $atts );

      function my_get_plugin_info() {

          // Get all plugins
          include_once( 'wp-admin/includes/plugin.php' );
          $all_plugins = get_plugins();

          // Get active plugins
          $active_plugins = get_option('active_plugins');

          // Assemble array of name, version, and whether plugin is active (boolean)
          foreach ( $all_plugins as $key => $value ) {
              $is_active = ( in_array( $key, $active_plugins ) ) ? true : false;

              if($is_active == true){
              $plugins[ $key ] = array(
                  'name'    => $value['Name'] . "\n");
              }
          }

          $plugin_text = print_r($plugins);

          return $plugin_text;
      }
  ob_start();
  ?>

  <div class="nwm_plugin_list">
    <pre>
          <?php
              print_r (my_get_plugin_info());
          ?>
          </pre>
  </div>

  <?php

  return ob_get_clean();

}
