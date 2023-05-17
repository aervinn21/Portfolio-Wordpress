
<?php
//load CSS & JS

function portfolio_assets(){
    wp_enqueue_style('portfolio-css', get_template_directory_uri() . '/css/main.css' , microtime());
}

add_action('wp_enqueue_scripts', 'portfolio_assets');

?>