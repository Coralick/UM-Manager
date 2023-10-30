<body>
    <input type="text" class="inp">
    <button class="btn">Отправить</button>
    <table class="wp-list-table widefat fixed striped">
        <thead>
            <th class="sorted-column" value="Name"> Name <span class="dashicons dashicons-arrow-up"></span></th>
            <th class="sorted-column" value="From"> From <span class="dashicons dashicons-arrow-up"></span></th>
            <th class="sorted-column" value="Subject"> Subject <span class="dashicons dashicons-arrow-up"></span></th>
            <th class="sorted-column" value="Message"> Message <span class="dashicons dashicons-arrow-up"></span></th>
        </thead>
        <tbody> 
<?php

wp_enqueue_style( 'my-plugin-style', plugin_dir_url(__FILE__) . 'css/style.css' );
wp_enqueue_script( 'my-plugin-scripts', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0', true);
wp_localize_script( 'my-plugin-scripts', 'my_ajax', array( 'ajaxurl' => plugin_dir_url(__FILE__) . 'UM-ajax.php' ) );


$args = array(
    'order'=> 'ASC',
    'orderby' => 'content'
);

function my_ajax_handler() {
    // Возврат данных в ответ на запрос
    $args['order'] = 'DESC';
}

// Регистрация AJAX-обработчика в WordPress
add_action('wp_ajax_my_ajax_handler', 'my_ajax_handler');
add_action('wp_ajax_nopriv_my_ajax_handler', 'my_ajax_handler');

foreach( Flamingo_Inbound_Message::find($args) as $data){
        $message = $data->fields; 
?>
            <tr>
                <td> <?php echo $message["your-name"]; ?></td>
                <td> <?php echo $message["your-email"]; ?></td>
                <td> <?php echo $message["your-subject"]; ?></td>
                <td> <?php echo $message["your-message"]; ?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</body>