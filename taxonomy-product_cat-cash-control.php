<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 23/01/2017
 * Time: 11:07
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header(); ?>

<section class="cover cash-control">
    <div class="container">
        <div class="cover-img bg-img">
            <img src="<?php echo get_template_directory_uri();?>/img/cashcontrol_banner_bg.png" alt="">
        </div>
        <div class="cash-control-content">
            <img class="cc-title" src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_title.png" alt="">
            <div class="cc-item cc-info" data-x="807" data-y="232">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_info_icon.png" alt="">
                <span><strong>Centraliza y maneja</strong> la información de la red de locales</span>
            </div>
            <div class="cc-item cc-online" data-x="739" data-y="383">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_online_icon.png" alt="">
                <span>Información <strong>en linea</strong> de cada caja</span>
            </div>
            <div class="cc-item cc-reports" data-x="664" data-y="465">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_reports_icon.png" alt="">
                <span>Reportes de acuerdo al <strong>perfil del usuario</strong></span>
            </div>
            <div class="cc-item cc-decision" data-x="853" data-y="545">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_decision_icon.png" alt="">
                <span>Ayuda a <strong>tomar decisiones</strong> del proceso de efectivo</span>
            </div>
            <div class="cc-item cc-interaction" data-x="1061" data-y="418">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_interaction_icon.png" alt="">
                <span><strong>Interacción</strong> entre los interesados del efectivo</span>
            </div>
            <div class="cc-item cc-web" data-x="1156" data-y="573">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_web_icon.png" alt="">
                <span><strong>Web de consulta</strong> no permite cambios a la información</span>
            </div>
            <div class="cc-item cc-access" data-x="1198" data-y="407">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_access_icon.png" alt="">
                <span><strong>Acceso seguro</strong> a la web</span>
            </div>
            <div class="cc-item cc-history" data-x="1291" data-y="342">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_history_icon.png" alt="">
                <span>Historial de transacciones por <strong>3 años</strong></span>
            </div>
        </div>
    </div>
</section>
<section class="bg-img cc-info-banner parallax">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_banner2_bg.png" alt="">
    <div class="banner-trigger-off"></div>
    <div class="banner-trigger-on"></div>
    <div class="container">
        <div class="banner-info clearfix">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_banner2_dude.png" alt="">
            </div>
            <div class="abs-fix">
                <a href="#" class="cc-button">Conoce CASH CONTROL</a>
            </div>
        </div>
    </div>
</section>
<section class="home-products">
    <div class="home-products-header">
        <div class="container">
            <h3>Beneficios</h3>
        </div>
    </div>
    <div class="cash-control-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_internet.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p>Control de todo el dinero vía <strong>internet</strong></p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_efectivo.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p>Sistema de manejo de <strong>efectivo</strong> que simplifica, contabiliza y asegura el dinero en la caja</p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_reportes.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p>Genera <strong>reportes detallados</strong> de conciliación vía internet y en la caja</p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_reportes.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p>Genera <strong>reportes detallados</strong> de conciliación vía internet y en la caja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); ?>