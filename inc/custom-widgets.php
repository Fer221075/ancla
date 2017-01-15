<?php
class My_Custom_Widget extends WP_Widget {

    function __construct() {
        // Instantiate the parent object
        parent::__construct( false, 'Custom widget title' );
    }

    function widget( $args, $instance ) {
        // Widget output

        // Si se necesita el post actual:
        //global $post;

        extract( $args );
        echo $before_widget;
        // Widget title:
        //echo $before_title . 'In this section:' . $after_title;
        ?>

        <!-- MARK UP DEL WIDGET -->

        <?php
        echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        // Save widget options

//        $instance = $old_instance;
//        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
//        return $instance;
    }

    function form( $instance ) {
        // Output admin widget options form
//        $title = $instance[ 'title' ];

        // markup for form ?>
<!--        <p>-->
<!--            <label for="--><?php //echo $this->get_field_id( 'title' ); ?><!--">Title:</label>-->
<!--            <input class="widefat" type="text" id="--><?php //echo $this->get_field_id( 'title' ); ?><!--" name="--><?php //echo $this->get_field_name( 'title' ); ?><!--" value="--><?php //echo esc_attr( $title ); ?><!--">-->
<!--        </p>-->

        <?php
    }
}

// ---------------------------------- END: Static author info widget -------------------------- //

function ancla_register_widgets() {
    register_widget( 'My_Custom_Widget' );
}

add_action( 'widgets_init', 'ancla_register_widgets' );