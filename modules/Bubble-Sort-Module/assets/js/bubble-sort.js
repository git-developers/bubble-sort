(function($) {
    "use strict";

    // Global Variables
    var MAX_HEIGHT = 100;

    $.formBubbleSort = function(el, options) {

        // Global Private Variables
        var MAX_WIDTH = 200;
        var base = this;
        var apiContent = null;

        base.$el = $(el);
        base.el = el;
        base.$el.data('formBubbleSort', base);

        base.init = function(){
            var totalButtons = 0;
            // base.$el.append('<button name="public" style="'+base.options.buttonStyle+'">Private</button>');
        };

        base.initializeArray = function(event) {

            $.ajax({
                url: '/drupal8/initialize-array',
                type: 'POST',
                dataType: 'html',
                data: $("form[name='form-sort']").serialize(),
                beforeSend: function(jqXHR, settings) {
                    $("#initialize-array").html('Loading...');
                },
                success: function(data, textStatus, jqXHR) {
                    $("#initialize-array").html(data);
                    base.displaySorting(event);
                },
                error: function(jqXHR, exception) {
                    console.log("error :: 333");
                }
            });
        };

        base.displaySorting = function(event) {

            $.ajax({
                url: '/drupal8/display-sorting',
                type: 'POST',
                dataType: 'html',
                data: $("form[name='form-sort']").serialize(),
                beforeSend: function(jqXHR, settings) {

                },
                success: function(data, textStatus, jqXHR) {
                    $("#sorting-algorithm").html(data);
                    $('button.step-btn').prop('disabled', false);
                },
                error: function(jqXHR, exception) {

                    console.log("error :: 333");
                }
            });
        };

        base.sortingAlgorithm = function(event) {

            $.ajax({
                url: '/drupal8/sorting-algorithm',
                type: 'POST',
                dataType: 'html',
                data: $("form[name='form-sort']").serialize(),
                beforeSend: function(jqXHR, settings) {
                    $("#sorting-algorithm").html('Loading...');
                },
                success: function(data, textStatus, jqXHR) {

                    $("#sorting-algorithm").html(data);

                    if (!base.isSorted()) {
                        $('button.step-btn').prop('disabled', true);
                    }

                },
                error: function(jqXHR, exception) {
                    console.log("error :: 333");
                }
            });
        };

        base.reset = function(event) {

            $.ajax({
                url: '/drupal8/reset',
                type: 'POST',
                dataType: 'html',
                data: $("form[name='form-sort']").serialize(),
                beforeSend: function(jqXHR, settings) {

                },
                success: function(data, textStatus, jqXHR) {

                    $("#sorting-algorithm").html('<img style="height: 400px; width: 100%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Bubblesort-edited-color.svg/1200px-Bubblesort-edited-color.svg.png" class="thumbnail">');
                    $("#initialize-array").html("Click shuffle");
                    $("#range-min").val("");
                    $("#range-max").val("");
                    $("#max-number").val("");
                    $('button.step-btn').prop('disabled', false);
                    $("#message").html('SORT');

                },
                error: function(jqXHR, exception) {
                    console.log("error :: 333");
                }
            });
        };

        base.isSorted = function() {
            return $( ".progress-bar" ).hasClass( "progress-bar-success" );
        };

        base.play = function(event) {
            $.ajax({
                url: '/drupal8/sorting-algorithm',
                type: 'POST',
                dataType: 'html',
                data: $("form[name='form-sort']").serialize(),
                beforeSend: function(jqXHR, settings) {
                    $("#sorting-algorithm").html('Loading...');
                    $("#message").html('<img style="height: 20px" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/cd514331234507.564a1d2324e4e.gif">WORKING...');
                },
                success: function(data, textStatus, jqXHR) {

                    $("#sorting-algorithm").html(data);

                    if (base.isSorted()) {
                        setTimeout(function(){ base.play(event); }, 500);
                    } else {
                        $("#message").html('SORT COMPLETED!');
                    }

                },
                error: function(jqXHR, exception) {
                    console.log("error :: 333");
                }
            });
        };

        // Private Functions
        function debug(e) {
          console.log(e);
        }

        base.init();
    };

    $.fn.formBubbleSort = function(options){

        return this.each(function(){

            var bp = new $.formBubbleSort(this, options);

            $('button.shuffle-btn').click(function(event) {
                bp.initializeArray(event);
            });

            $('button.step-btn').click(function(event) {
                bp.sortingAlgorithm(event);
            });

            $('button.reset-btn').click(function(event) {
                bp.reset(event);
            });

            $('button.play-btn').click(function(event) {
                bp.play(event);
            });

            // $(document).on('submit', "form[name='" + options.formName + "']" , function(event) {
            //     bp.save(event);
            // });

        });
    };

})(jQuery);


;(function($){
    $("body").formBubbleSort({
        id: '',
    });
})(jQuery);
