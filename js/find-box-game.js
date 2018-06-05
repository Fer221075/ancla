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

    if ( $('.box-game').length > 0 ) {

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
    }

});