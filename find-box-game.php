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
                        <li><a href="#" class="game-step-btn current-step" data-step="1">¿Qué quieres proteger?</a></li>
                    </ul>
                </div>
                <div class="box-game-body">
                    <div id="step-1" data-step="1" class="step">
                        <div class="row">
                            <div class="step-option">
                                <label for="documentos"><img src="<?php echo get_template_directory_uri(); ?>/img/game_docs.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="documentos" name="step-1">
                                    <label for="documentos">Documentos</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="medios_digitales"><img src="<?php echo get_template_directory_uri(); ?>/img/game_digital.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="medios_digitales" name="step-1">
                                    <label for="medios_digitales">Medios digitales</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="electronicos"><img src="<?php echo get_template_directory_uri(); ?>/img/game_elect.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="electronicos" name="step-1">
                                    <label for="electronicos">Electrónicos</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="dinero"><img src="<?php echo get_template_directory_uri(); ?>/img/game_cash.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="dinero" name="step-1">
                                    <label for="dinero">Dinero</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="joyas"><img src="<?php echo get_template_directory_uri(); ?>/img/game_jewelry.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="joyas" name="step-1">
                                    <label for="joyas">Joyas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-2" data-step="2" class="step">
                        <div class="row">
                            <div class="step-option" style="margin-left: 30%;">
                                <label for="fuego"><img src="<?php echo get_template_directory_uri(); ?>/img/game_fire.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="fuego" name="step-2">
                                    <label for="fuego">Fuego</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="ladrones"><img src="<?php echo get_template_directory_uri(); ?>/img/game_thieve.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="ladrones" name="step-2">
                                    <label for="ladrones">Ladrones</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-3" data-step="3" class="step">
                        <div class="row">
                            <div class="step-option" style="margin-left: 20%;">
                                <label for="pequena"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_sm.png" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="pequena" name="step-3">
                                    <label for="pequena">Pequeña</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="mediana"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_mid.png" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="mediana" name="step-3">
                                    <label for="mediana">Mediana</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="grande"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_big.png" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="grande" name="step-3">
                                    <label for="grande">Grande</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-4" data-step="4" class="step">
                        <div class="row">
                            <div class="step-option">
                                <label for="digital"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_digital.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="digital" name="step-4">
                                    <label for="digital">Digital</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="combination"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_combination.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="combination" name="step-4">
                                    <label for="combination">Combinación</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="llave"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_key.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="llave" name="step-4">
                                    <label for="llave">Llave</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="digital_and_key"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_digital&key.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="digital_and_key" name="step-4">
                                    <label for="digital_and_key">Digital + Llave</label>
                                </div>
                            </div>
                            <div class="step-option">
                                <label for="combination_and_key"><img src="<?php echo get_template_directory_uri(); ?>/img/game_box_combination&key.jpg" alt=""></label>
                                <div class="option-check">
                                    <input type="checkbox" id="combination_and_key" name="step-4">
                                    <label for="combination_and_key">Combinación + Llave</label>
                                </div>
                            </div>
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
    </div>

</section>

<script>

    function goToStep(stepNumber) {
        var $currentStepTab = $('.current-step');
        var $targetStepContainer = $('.step[data-step="'+stepNumber+'"]');

        if ($targetStepContainer.length > 0) {

            $currentStepTab.removeClass('current-step');
            $('.game-step-btn[data-step="'+stepNumber+'"]').addClass('current-step');

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
                //TODO add to query
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
    });

</script>

<?php
get_footer();