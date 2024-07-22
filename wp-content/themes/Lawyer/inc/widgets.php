<?php

/**
 * Adds Services Widget widget.
 */
class ServicesWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'services_widget', // Base ID
            'Lawyer Services Widget', // Name
            array('description' => __('Display two lawyer services', 'text_domain')) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        // Extract widget arguments
        $title = apply_filters('widget_title', $instance['title']);

        // Display widget
        echo $args['before_widget'];
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // Query for the services
        $queryArgs = array(
            'posts_per_page' => 2,
            'post_type' => 'our_service',
            'orderby' => 'rand'
        );
        $services = new WP_Query($queryArgs); // Pass the arguments to WP_Query

        if ($services->have_posts()) {
            while ($services->have_posts()) {
                $services->the_post();
                ?>
                <article class="service-item animation" data-animation="slide-top">
                    <a href="<?php the_permalink(); ?>" class="d-flex align-items-center">
                        <figure class="mb-0">
                            <img src="<?php the_field('service_icon'); ?>" alt=""/>
                        </figure>
                        <span class="text-uppercase h6 pl-4"><?php the_title(); ?></span>
                    </a>
                </article><!-- .service-item end -->
                <?php
            }
        } else {
            echo '<p>' . __('No services found.', 'text_domain') . '</p>';
        }

        wp_reset_postdata(); // Reset post data to avoid conflicts

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : __('New title', 'text_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

// Register ServicesWidget widget
function lawyer_custom_widget() {
    register_widget('ServicesWidget');
}

add_action('widgets_init', 'lawyer_custom_widget');

//ako zelimo da kreiramo nove widgete, samo ispod kopiramo ovo odozgo i promenimo sta nam treba i kako treba 
//da izgelda taj widget