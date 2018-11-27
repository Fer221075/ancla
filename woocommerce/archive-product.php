<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content'); ?>

<?php get_template_part('template-parts/category_banner', 'small'); ?>

<?php if (have_posts()) : ?>
    <!--
    <div class="container">
        <div class="row">
            <div class="red-section-header no-triangle">
                <div class="container">
                    <h3>¿Sabes qué caja fuerte necesitas? <a href="/juego">Descúbrelo aquí</a></h3>
                </div>
            </div>
        </div>
    </div>
    <section class="row category-svg">
        <article class="col-xs-12 col-sm-6 col-md-3">
            <div>
                <a href="<?php site_url(); ?>/productos/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_hogar.svg" alt=""></a>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <a href="<?php site_url(); ?>/productos/categorias/institucional/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_institucional.svg" alt=""></a>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <a href="<?php site_url(); ?>/productos/categorias/financiero/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_financiera.svg" alt=""></a>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-3">
            <a href="<?php site_url(); ?>/minibank/"><img src="<?php echo get_template_directory_uri(); ?>/svg/icon_linea_mini_bank.svg" alt=""></a>
        </article>
    </section> -->
    <div class="store-actions clearfix">

        <?php
        /**
         * woocommerce_before_shop_loop hook.:
         *
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action('woocommerce_before_shop_loop');
        ?>

    </div>

    <div class="row">
        <?php //if (  is_shop() ): ?>
        <div class="col-xs-3 hidden-xs store-sidebar widget">
            <h2 style="color: #c1282d">Categorías</h2>
            <ul>
                <li>
                    <svg style="vertical-align: middle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                         xml:space="preserve">
<g>
    <path fill="#A11E27" d="M7.376,17.824c0.174,0.094,0.358-0.108,0.251-0.274c-0.579-0.901-1.127-2.419-0.253-4.373
		C8.831,9.919,9.718,8.23,9.718,8.23s0.471,1.97,1.751,3.722c1.23,1.685,1.904,3.804,0.818,5.57
		c-0.102,0.166,0.077,0.362,0.251,0.273c1.344-0.689,2.853-2.067,3.022-4.813c0.063-0.84-0.032-2.013-0.502-3.496
		c-0.604-1.878-1.349-2.755-1.778-3.131c-0.13-0.112-0.33-0.013-0.319,0.158c0.125,2.027-0.637,2.541-1.07,1.382
		c-0.173-0.463-0.274-1.264-0.274-2.239c0-1.624-0.472-3.294-1.51-4.653C9.837,0.652,9.521,0.322,9.159,0.041
		c-0.131-0.102-0.322,0-0.31,0.167c0.08,1.1,0.007,4.254-2.76,8.022c-2.508,3.495-1.537,6.18-1.191,6.906
		C5.558,16.528,6.477,17.347,7.376,17.824z"/>
</g>
                        <rect x="1.611" y="19.077" fill="#A11E27" width="16.778" height="0.978"/>
</svg>
                    <a style="font-size: 15px"
                       href="<?php site_url(); ?>/productos/categorias/hogar/cajas-fuertes-contra-incendio/">Cajas
                        fuertes contra incendio</a></li>
                <li>
                    <svg style="vertical-align: middle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                         xml:space="preserve">
<rect x="1.611" y="19.077" fill="#A11E27" width="16.778" height="0.978"/>
                        <g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M16.774,5.581H3.226c-0.467,0-0.846,0.379-0.846,0.847v8.467c0,0.467,0.379,0.847,0.846,0.847h13.549
				c0.467,0,0.846-0.38,0.846-0.847V6.427C17.62,5.96,17.241,5.581,16.774,5.581z M17.057,14.895c0,0.156-0.127,0.282-0.282,0.282
				H3.226c-0.155,0-0.282-0.126-0.282-0.282V6.427c0-0.156,0.127-0.283,0.282-0.283h13.549c0.155,0,0.282,0.127,0.282,0.283V14.895z
				"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#A11E27"
                                          d="M3.791,6.992v7.339H16.21V6.992H3.791z M15.645,13.766H4.355V7.557h11.29V13.766z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M1.25,4.451V16.87h2.038L3.569,18h2.699l0.282-1.13h6.899L13.73,18h2.699l0.281-1.13h2.039V4.451H1.25z
				 M5.828,17.436H4.011L3.87,16.87h2.099L5.828,17.436z M15.989,17.436h-1.817L14.03,16.87h2.1L15.989,17.436z M18.186,16.307
				H1.814V5.016h16.371V16.307z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M10,8.121v5.08h5.081v-5.08H10z M14.516,12.637h-3.951V9.814h3.951V12.637z M14.516,9.25h-3.951V8.686
				h3.951V9.25z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="12.258" y="10.379" fill="#A11E27" width="0.564" height="0.564"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="13.387" y="10.379" fill="#A11E27" width="0.564" height="0.564"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="11.13" y="10.379" fill="#A11E27" width="0.563" height="0.564"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="12.258" y="11.508" fill="#A11E27" width="0.564" height="0.564"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="13.387" y="11.508" fill="#A11E27" width="0.564" height="0.564"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="11.13" y="11.508" fill="#A11E27" width="0.563" height="0.564"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M8.024,9.532v0.007C7.788,9.36,7.496,9.25,7.178,9.25c-0.319,0-0.611,0.11-0.847,0.289V9.532H4.919v2.257
				h1.412v-0.006c0.236,0.179,0.527,0.289,0.847,0.289c0.318,0,0.61-0.11,0.847-0.289v0.006h1.411V9.532H8.024z M5.886,11.226H5.484
				v-1.13h0.402c-0.076,0.175-0.12,0.364-0.12,0.566C5.766,10.861,5.81,11.052,5.886,11.226z M6.895,11.455
				c-0.328-0.117-0.564-0.427-0.564-0.794c0-0.368,0.236-0.678,0.564-0.795V11.455z M7.459,11.456V9.867
				c0.328,0.116,0.565,0.427,0.565,0.795C8.024,11.029,7.787,11.339,7.459,11.456z M8.871,11.226H8.469
				c0.076-0.174,0.12-0.364,0.12-0.563c0-0.202-0.043-0.392-0.12-0.566h0.401V11.226z"/>
                                </g>
                            </g>
                        </g>
</svg>
                    <a style="font-size: 15px" href="<?php site_url(); ?>/productos/categorias/hogar/cofres-hoteleros/">Cofre
                        hotelero</a></li>
                <li>
                    <svg style="vertical-align: middle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                         xml:space="preserve">
<rect x="1.611" y="19.077" fill="#A11E27" width="16.778" height="0.978"/>
                        <g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M10,8.52c-0.411,0-0.745,0.334-0.745,0.745c0,0.272,0.154,0.5,0.373,0.63v0.487
				c0,0.206,0.166,0.373,0.372,0.373s0.373-0.167,0.373-0.373V9.895c0.218-0.13,0.373-0.358,0.373-0.63
				C10.746,8.854,10.411,8.52,10,8.52z"/>
                                    <path fill="#A11E27"
                                          d="M10,5.541c-0.616,0-1.117,0.501-1.117,1.117V7.03h2.234V6.658C11.117,6.042,10.616,5.541,10,5.541z"/>
                                    <path fill="#A11E27" d="M16.455,2.583l-6.331-2.234c-0.08-0.028-0.168-0.028-0.248,0L3.545,2.583
				C3.397,2.636,3.297,2.776,3.297,2.934v4.469c0,5.783,0.857,7.896,6.536,10.759c0.053,0.026,0.11,0.04,0.167,0.04
				s0.115-0.014,0.167-0.04c5.678-2.863,6.536-4.977,6.536-10.759V2.934C16.703,2.776,16.604,2.636,16.455,2.583z M13.352,11.499
				c0,0.41-0.334,0.745-0.745,0.745H7.394c-0.411,0-0.745-0.335-0.745-0.745V7.775c0-0.411,0.334-0.745,0.745-0.745V6.658
				c0-1.437,1.169-2.607,2.606-2.607c1.437,0,2.606,1.17,2.606,2.607V7.03c0.411,0,0.745,0.334,0.745,0.745V11.499z"/>
                                </g>
                            </g>
                        </g>
</svg>
                    <a style="font-size: 15px"
                       href="<?php site_url(); ?>/productos/categorias/hogar/cofres-de-seguridad/">Cofre de
                        seguridad</a></li>
                <li>
                    <svg style="vertical-align: middle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                         xml:space="preserve">
<rect x="2.884" y="19.077" fill="#A11E27" width="16.777" height="0.978"/>
                        <g>
                            <g>
                                <g>
                                    <path fill="#A11E27"
                                          d="M17.613,10.057v6.613H4.93v-6.613H17.613 M18.693,8.978H3.851v8.771h14.843V8.978L18.693,8.978z"/>
                                </g>
                            </g>
                            <g>
                                <path fill="#A11E27" d="M14.646,8.978l1.52,1.52c-0.012,0.056-0.033,0.107-0.033,0.167c0,0.484,0.392,0.875,0.876,0.875
			c0.059,0,0.11-0.021,0.166-0.033l1.52,1.52V8.978H14.646z"/>
                                <circle fill="#A11E27" cx="15.657" cy="13.363" r="0.875"/>
                                <ellipse fill="#A11E27" cx="11.271" cy="13.362" rx="2.649" ry="2.304"/>
                                <circle fill="#A11E27" cx="6.887" cy="13.363" r="0.875"/>
                                <path fill="#A11E27" d="M3.851,13.025l1.52-1.52c0.056,0.012,0.108,0.033,0.167,0.033c0.484,0,0.875-0.391,0.875-0.875
			c0-0.06-0.022-0.111-0.034-0.167l1.521-1.52H3.851V13.025z"/>
                                <path fill="#A11E27" d="M6.413,16.063c0-0.484-0.392-0.875-0.876-0.875c-0.059,0-0.11,0.021-0.167,0.031l-1.52-1.518v4.047h4.048
			l-1.52-1.518C6.391,16.174,6.413,16.121,6.413,16.063z"/>
                                <path fill="#A11E27" d="M17.008,15.186c-0.484,0-0.876,0.393-0.876,0.877c0,0.059,0.022,0.109,0.033,0.166l-1.52,1.52h4.048
			v-4.047l-1.52,1.518C17.118,15.209,17.066,15.186,17.008,15.186z"/>
                            </g>
                            <g>
                                <circle fill="#A11E27" cx="13.77" cy="6.533" r="0.875"/>
                                <path fill="#A11E27" d="M2.839,8.978c0-0.559,0.453-1.012,1.012-1.012h0.553l0.025-0.087l7.81-4.277l0.598,0.174
			c0.017,0.054,0.022,0.111,0.052,0.163c0.232,0.425,0.764,0.58,1.188,0.348c0.052-0.028,0.086-0.073,0.129-0.109l0.6,0.175
			l1.359,2.484L15.99,7.434c-0.053,0.016-0.109,0.022-0.161,0.051C15.631,7.593,15.5,7.769,15.43,7.966h2.585l-1.744-3.187l0,0
			l-1.945-3.55l-3.551,1.945l0,0l-5.917,3.24L1.307,8.358l1.532,2.798V8.978z"/>
                                <path fill="#A11E27" d="M8.816,6.621C8.229,6.941,7.805,7.429,7.568,7.966h4.88c-0.039-0.206-0.099-0.408-0.202-0.597
			C11.635,6.252,10.099,5.918,8.816,6.621z"/>
                            </g>
                        </g>
</svg>

                    <a style="font-size: 15px"
                       href="<?php site_url(); ?>/productos/categorias/hogar/cofres-de-caja-menor/">Cofre de caja
                        menor</a></li>
                <li>
                    <svg style="vertical-align: middle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                         xml:space="preserve">
<rect x="1.611" y="19.077" fill="#A11E27" width="16.777" height="0.978"/>
                        <g>
                            <path fill="#A11E27" d="M1.595,17.295c-0.021,0.249,0.16,0.472,0.409,0.498l1.842,0.205C3.863,17.999,3.88,18,3.896,18
		c0.115,0,0.226-0.043,0.314-0.123c0.094-0.091,0.15-0.219,0.144-0.353l-0.041-1.202l1.201,0.042
		c0.145,0.004,0.251-0.045,0.343-0.135c0.089-0.091,0.138-0.215,0.134-0.341l-0.043-1.202l1.205,0.042
		c0.127,0.005,0.25-0.045,0.34-0.136c0.091-0.09,0.137-0.214,0.134-0.341l-0.04-1.202l1.2,0.042
		c0.131,0.005,0.251-0.043,0.343-0.134l2.203-2.204c0.622,0.264,1.294,0.404,1.988,0.404c1.36,0,2.636-0.53,3.598-1.492
		c1.985-1.984,1.984-5.21,0-7.195c-0.962-0.96-2.237-1.49-3.599-1.49c-1.358,0-2.636,0.529-3.597,1.489
		c-0.958,0.962-1.489,2.24-1.489,3.599c0,0.695,0.139,1.368,0.403,1.989l-6.702,6.703c-0.078,0.075-0.126,0.177-0.133,0.283
		L1.595,17.295z M13.935,3.41c0.566-0.565,1.481-0.565,2.045,0c0.566,0.565,0.566,1.48,0,2.045c-0.563,0.565-1.479,0.565-2.045,0
		C13.369,4.89,13.369,3.975,13.935,3.41z M3.374,14.709l5.758-5.756c0.131,0.189,0.275,0.37,0.434,0.541l-5.703,5.703
		c-0.067,0.067-0.157,0.101-0.245,0.101c-0.087,0-0.178-0.033-0.244-0.101C3.239,15.063,3.239,14.845,3.374,14.709z"/>
                        </g>
</svg>
                    <a style="font-size: 15px"
                       href="<?php site_url(); ?>/productos/categorias/hogar/ordenador-de-llaves/">Ordenador de
                        llaves</a></li>
                <li>
                    <svg style="vertical-align: middle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                         xml:space="preserve">
<rect x="1.611" y="19.077" fill="#A11E27" width="16.778" height="0.978"/>
                        <g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M16.627,0.242H3.374c-0.166,0-0.301,0.135-0.301,0.301v16.264c0,0.165,0.135,0.3,0.301,0.3h0.904v0.903
				c0,0.167,0.135,0.302,0.301,0.302h1.506c0.166,0,0.302-0.135,0.302-0.302v-0.903h7.228v0.903c0,0.167,0.136,0.302,0.302,0.302
				h1.506c0.166,0,0.302-0.135,0.302-0.302v-0.903h0.903c0.166,0,0.3-0.135,0.3-0.3V0.543C16.927,0.377,16.793,0.242,16.627,0.242z
				 M5.784,17.711H4.881v-0.604h0.903V17.711z M15.12,17.711h-0.903v-0.604h0.903V17.711z M16.325,16.506H3.676V0.844h12.649V16.506
				z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#A11E27" d="M14.82,1.748H5.182c-0.167,0-0.301,0.135-0.301,0.301v2.108H4.579c-0.166,0-0.301,0.135-0.301,0.301
				v1.506c0,0.167,0.135,0.301,0.301,0.301h0.302v4.217H4.579c-0.166,0-0.301,0.134-0.301,0.3v1.508c0,0.165,0.135,0.3,0.301,0.3
				h0.302v2.71c0,0.167,0.134,0.302,0.301,0.302h9.639c0.166,0,0.3-0.135,0.3-0.302V2.049C15.12,1.883,14.986,1.748,14.82,1.748z
				 M4.881,4.76h0.602v0.903H4.881V4.76z M4.881,11.988v-0.904h0.602v0.904H4.881z M14.519,15H5.482v-2.41h0.302
				c0.166,0,0.301-0.135,0.301-0.3v-1.508c0-0.166-0.135-0.3-0.301-0.3H5.482V6.265h0.302c0.166,0,0.301-0.134,0.301-0.301V4.458
				c0-0.167-0.135-0.301-0.301-0.301H5.482V2.351h9.036V15z"/>
                                </g>
                            </g>
                        </g>
                        <path fill="#A11E27" d="M11.894,8.516c0.005,0.051,0.006,0.105,0.006,0.159c0,1.047-0.853,1.899-1.899,1.899
	c-1.047,0-1.9-0.853-1.9-1.899S8.953,6.775,10,6.775c0.361,0,0.708,0.1,1.009,0.289l-0.486,0.502C10.364,7.49,10.187,7.449,10,7.449
	c-0.676,0-1.226,0.55-1.226,1.226S9.324,9.901,10,9.901s1.225-0.55,1.225-1.226c0-0.191-0.043-0.372-0.121-0.534l1.087-1.125
	l-0.291-0.283C11.39,6.233,10.714,5.958,10,5.958c-1.498,0-2.717,1.218-2.717,2.717S8.502,11.392,10,11.392
	c1.497,0,2.717-1.218,2.717-2.717c0-0.293-0.046-0.579-0.135-0.849L11.894,8.516z M10,9.083c-0.225,0-0.409-0.184-0.409-0.409
	S9.775,8.266,10,8.266s0.409,0.184,0.409,0.409S10.225,9.083,10,9.083z"/>
</svg>
                    <a style="font-size: 15px" href="<?php site_url(); ?>/productos/">Todos los productos</a>
                </li>
            </ul>
            <?php //dynamic_sidebar( 'store-widgets' ); ?>
        </div>
        <?php //endif; ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 100
        );
        $loop = new WP_Query($args)
        ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <?php wc_get_template_part('content', 'product'); ?>
        <?php endwhile; // end of the loop. ?>

        <?php woocommerce_product_loop_end(); ?>

    </div>

    <?php
    /**
     * woocommerce_after_shop_loop hook.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
    ?>

<?php elseif (!woocommerce_product_subcategories([
    'before' => woocommerce_product_loop_start(false),
    'after' => woocommerce_product_loop_end(false),
])) : ?>

    <?php wc_get_template('loop/no-products-found.php'); ?>

<?php endif; ?>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>

<?php get_footer('shop'); ?>
