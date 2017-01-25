<?php
/**
 * Template Name: Cash Control
 *
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
            <div class="cc-item cc-info" data-x="807" data-y="216">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_info_icon.png" alt="">
                <span><strong>Centraliza y maneja</strong> la información de la red de locales</span>
            </div>
            <div class="cc-item cc-online" data-x="734" data-y="377">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_online_icon.png" alt="">
                <span>Información <strong>en linea</strong> de cada caja</span>
            </div>
            <div class="cc-item cc-reports" data-x="652" data-y="463">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_reports_icon.png" alt="">
                <span>Reportes de acuerdo al <strong>perfil del usuario</strong></span>
            </div>
            <div class="cc-item cc-decision" data-x="855" data-y="548">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_decision_icon.png" alt="">
                <span>Ayuda a <strong>tomar decisiones</strong> del proceso de efectivo</span>
            </div>
            <div class="cc-item cc-interaction" data-x="1078" data-y="414">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_interaction_icon.png" alt="">
                <span><strong>Interacción</strong> entre los interesados del efectivo</span>
            </div>
            <div class="cc-item cc-web" data-x="1179" data-y="577">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_web_icon.png" alt="">
                <span><strong>Web de consulta</strong> no permite cambios a la información</span>
            </div>
            <div class="cc-item cc-access" data-x="1224" data-y="401">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_access_icon.png" alt="">
                <span><strong>Acceso seguro</strong> a la web</span>
            </div>
            <div class="cc-item cc-history" data-x="1323" data-y="331">
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
    <div class="red-section-header">
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
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_info.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p><strong>Información en tiempo real</strong> de cualquier transacción</p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_cash.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p>El efectivo ya no está expuesto ya que <strong>su depósito es más seguido</strong></p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_avoid.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p><strong>Evita</strong> la complejidad del manejo y preparación de dispositivos</p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_envelope.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p><strong>Diferentes sobres</strong> por turno (Colores y números)</p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_diff.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p><strong>Diferencias constantes</strong> en depósitos</p>
                    </div>
                </div>
                <div class="col-md-4 cc-feature">
                    <div class="col-xs-4">
                        <div class="cc-icon">
                            <img src="<?php echo get_template_directory_uri();?>/img/cc_feat_avoid_clock.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 cc-desc">
                        <p><strong>Evita</strong> excesos de tiempo en cuadres de caja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); ?>