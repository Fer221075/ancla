<?php
/* Template Name: Template juego */
get_header();?>

<section class="site-content" style="padding: 40px 0">

    <div class="container">
        <div class="row">
            <div class="box-game">
                <div class="box-game-header">
                    <ul class="clearfix">
                        <li><a href="#" class="game-step-btn step-disabled" data-step="4">¿Qué tipo de cerradura?</a></li>
                        <li><a href="#" class="game-step-btn step-disabled" data-step="3">¿Qué medidas necesitas?</a></li>
                        <li><a href="#" class="game-step-btn step-disabled" data-step="2">¿De qué lo quieres proteger?</a></li>
                        <li class="current-step-li"><a href="#" class="game-step-btn current-step" data-step="1">¿Qué quieres proteger?</a></li>
                    </ul>
                </div>
                <div class="box-game-body">
                    <div id="step-1" data-step="1" class="step" data-attribute="protege">
                        <div class="row">
                            <div class="step-option auto-tooltip" title="Pasaporte, cédulas, tarjetas de propiedad, tarjetas crédito y débito, facturas, recibos, chequeras, libreta militar">
                                <label for="documento-media-carta"><img src="<?php echo get_template_directory_uri(); ?>/img/media-carta.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="documento-media-carta" name="step-1" value="documento-media-carta">
                                    <label for="documento-media-carta">Documentos media carta</label>
                                </div>
                            </div>

                            <div class="step-option auto-tooltip" title="CDTS, títulos valores, recomendaciones, cartas">
                                <label for="documento-carta"><img src="<?php echo get_template_directory_uri(); ?>/img/carta.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="documento-carta" name="step-1" value="documento-carta">
                                    <label for="documento-carta">Documentos carta</label>
                                </div>
                            </div>

                            <div class="step-option auto-tooltip" title="Escrituras, títulos valores">
                                <label for="documento-oficio"><img src="<?php echo get_template_directory_uri(); ?>/img/oficio.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="documento-oficio" name="step-1" value="documento-oficio">
                                    <label for="documento-¨">Documentos oficio</label>
                                </div>
                            </div>

                            <div class="step-option auto-tooltip">
                                <label for="notebook-13"><img src="<?php echo get_template_directory_uri(); ?>/img/notebook-13.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="notebook-13" name="step-1" value="notebook-13">
                                    <label for="notebook-13">Notebook 13</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="step-option auto-tooltip" title="Cd / Dvd, Discos duros externos, Memorias, Tablet, Celulares">
                                <label for="electronicos"><img src="<?php echo get_template_directory_uri(); ?>/img/game_elect.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="electronicos" name="step-1" value="electronicos">
                                    <label for="electronicos">Electrónicos</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="dinero"><img src="<?php echo get_template_directory_uri(); ?>/img/game_cash.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="dinero" name="step-1" value="dinero">
                                    <label for="dinero">Dinero</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="joyas"><img src="<?php echo get_template_directory_uri(); ?>/img/game_jewelry.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="joyas" name="step-1" value="joyas">
                                    <label for="joyas">Joyas</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="llaves"><img src="<?php echo get_template_directory_uri(); ?>/img/game_keys.jpg  " alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="llaves" name="step-1" value="llaves">
                                    <label for="llaves">Llaves</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2" data-step="2" class="step" data-attribute="protege-contra">
                        <div class="row" style="display: flex;">
                            <div class="step-option" style="margin-left: auto;">
                                <label for="fuego"><img src="<?php echo get_template_directory_uri(); ?>/img/game_fire.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="fuego" name="step-2" value="fuego">
                                    <label for="fuego">Fuego</label>
                                </div>
                            </div>
                            <div class="step-option" style="margin-right: auto;">
                                <label for="ladrones"><img src="<?php echo get_template_directory_uri(); ?>/img/game_thieve.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="ladrones" name="step-2" value="ladrones">
                                    <label for="ladrones">Ladrones</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-3" data-step="3" class="step" data-attribute="tamano-caja">
                        <div class="row" style="display: flex;">
                            <div class="step-option" style="margin-left: auto;">
                                <label for="pequena"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_sm.png" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="pequena" name="step-3" value="pequena">
                                    <label for="pequena">Pequeña</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="mediana"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_mid.png" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="mediana" name="step-3"  value="mediana">
                                    <label for="mediana">Mediana</label>
                                </div>
                            </div>
                            <div class="step-option" style="margin-right: auto;">
                                <label for="grande"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_big.png" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="grande" name="step-3" value="grande">
                                    <label for="grande">Grande</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-4" data-step="4" class="step" data-attribute="tipo-cerradura">
                        <div class="row" style="display: flex;">
                            <div class="step-option" style="margin-left: auto;">
                                <label for="digital"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_digital.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="digital" name="step-4" value="digital">
                                    <label for="digital">Digital</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="mecanic"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_combination.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="mecanic" name="step-4" value="mecanica">
                                    <label for="mecanic">Mecánica</label>
                                </div>
                            </div>
                            <div class="step-option" style="margin-right: auto;">
                                <label for="llave"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_key.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="llave" name="step-4" value="llave">
                                    <label for="llave">Llave</label>
                                </div>
                            </div>
<!--                            <div class="step-option">-->
<!--                                <label for="digital_and_key"><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/game_box_digital&key.jpg" alt=""></label>-->
<!--                                <div class="option-check">-->
<!--                                    <input type="checkbox" id="digital_and_key" name="step-4" value="digital_y_llave">-->
<!--                                    <label for="digital_and_key">Digital + Llave</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="step-option">-->
<!--                                <label for="combination_and_key"><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/game_box_combination&key.jpg" alt=""></label>-->
<!--                                <div class="option-check">-->
<!--                                    <input type="checkbox" id="combination_and_key" name="step-4" value="combinacion_y_llave">-->
<!--                                    <label for="combination_and_key">Combinación + Llave</label>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="box-game-footer">
                    <div class="step-actions clearfix">
                        <button id="prev-step" class="step-action">< Anterior</button>
                        <button id="finish" class="step-action">Ver resultados</button>
                        <button id="next-step" class="step-action" disabled>Siguiente ></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-search-loader">
            <div class="ancla-loader" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/loader_bg.png');">
                <div class="spin">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/loader_content.png" alt="" data-pin="nopin">
                </div>
            </div>
        </div>
        <div class="row products-ajax-result">

        </div>
        <div class="row products-ajax-no-results">No se encontraron resultados para tu búsqueda, te recomendamos descargar la <a style="
    color: #c1282d;" href="<?php echo get_template_directory_uri(); ?>/img/guia_compra_productos.pdf" target="_blank">guía de compra de productos</a></div>
    </div>

</section>

<script>

    function goToStep(stepNumber) {
        var $currentStepTab = $('.current-step');
        var $currentStepLi = $currentStepTab.closest('li');
        var $targetStepContainer = $('.step[data-step="'+stepNumber+'"]');

        if ($targetStepContainer.length > 0) {

            $currentStepTab.removeClass('current-step');
            $currentStepLi.removeClass('current-step-li');
            $('.game-step-btn[data-step="'+stepNumber+'"]').addClass('current-step');
            $('.game-step-btn[data-step="'+stepNumber+'"]').closest('li').addClass('current-step-li');

            if ($targetStepContainer.data('step') > $currentStepTab.data('step')) {

                $currentStepTab.addClass('step-complete');

                //  currentStep
                var $prevStepContainer = $('.step[data-step="'+$currentStepTab.data('step')+'"]');

                if ($prevStepContainer.length > 0) {
                    $prevStepContainer.animate({
                        right: '100%'
                    }, 800, function() {
                        // Animation complete.
                    });
                }

                $targetStepContainer.animate({
                    right: '0'
                }, 800, function() {
                    // Animation complete.
                });
            } else {
                $currentStepTab.removeClass('step-complete');

                var $currentStepContainer = $('.step[data-step="'+$currentStepTab.data('step')+'"');
                $currentStepContainer.animate({
                    right: '-100%'
                }, 800, function() {
                    // Animation complete.
                });

                $targetStepContainer.animate({
                    right: '0'
                }, 800, function() {
                    // Animation complete.
                });
            }
            checkStep(stepNumber);

            if (stepNumber > 1)
                $('#prev-step').fadeIn('fast');
            else
                $('#prev-step').fadeOut('fast');

            if (stepNumber == $('.step').length) {
                $('#finish').fadeIn('fast');
                $('#next-step').fadeOut('fast');
            }
            else {
                $('#finish').fadeOut('fast');
                $('#next-step').fadeIn('fast');
            }
        }
    }

    function enableNextStep(step) {
        $('.game-step-btn[data-step="'+(step + 1)+'"]').removeClass('step-disabled');
        checkStep(step + 1);
    }

    function disableNextStep(step) {
        var $nextStepTab = $('.game-step-btn[data-step="'+(step + 1)+'"]');

        if ($nextStepTab.length > 0) {
            $nextStepTab.addClass('step-disabled');
            disableNextStep(step + 1);
        }
    }

    function checkStep(step){
        var $stepContainer = $('#step-' + step);

        if ($stepContainer.length > 0) {
            var checkedOptions = $stepContainer.find('input[type="checkbox"]:checked');

            if (checkedOptions.length > 0) {
                $stepContainer.addClass('complete');
                enableNextStep(step);
                $('#next-step').prop('disabled', false);
            } else {
                $stepContainer.removeClass('complete');
                disableNextStep(step);
                $('#next-step').prop('disabled', true);
            }
        }
    }

    function getFilterString() {
        var filters = "";

        $('.step').each(function () {
            filters += $(this).data('attribute') + ',' + $(this).find('input[type="checkbox"]:checked').first().val() + '/';
        });

        filters = filters.substring(0, filters.length-1);

        return filters;
    }

    function getProducts() {

        $('.product-search-loader').slideDown();
        scrollTo($('.product-search-loader'));
        $('.products-ajax-result').slideUp();
        $('.products-ajax-no-results').slideUp();

        var url = ajax.baseUrl + '?action=get_products&filters=' + getFilterString();

        $.ajax({
            url: url
        }).done(function (data) {
            $('.product-search-loader').slideUp();
            if (data.length > 0){
                $('.products-ajax-result').html(data);
                $('.products-ajax-result').slideDown();
            } else {
                $('.products-ajax-result').html('');
                $('.products-ajax-no-results').slideDown();
            }
        });
    }

    $(document).ready(function () {

        $('.game-step-btn').click(function (e) {
            e.preventDefault();
            goToStep($(this).data('step'));
        });

        $('input[type="checkbox"]').change(function () {
            checkStep($(this).closest('.step').data('step'));
        });

        $('#next-step').click(function () {
            goToStep($('.current-step').data('step') + 1);
        });

        $('#prev-step').click(function () {
            goToStep($('.current-step').data('step') - 1);
        });

        $('#finish').click(function () {
            getProducts();
        });

        $('.auto-tooltip').tooltip();

    });

</script>

<?php
get_footer();