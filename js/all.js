(function($) {

    jQuery(document).ready(function() {
        var jeit = $('.panel-content2').height() ;;
        Panel.init();

        $(document).on('click', '.tab-controller2', function() {
             Panel.togglePanel();
        });
        
          if (Panel.isVisible) {
                $('.panel-wrapper2').animate({
                bottom : -180
            }, Panel.animationDuration, Panel.animationEasing, function() {
                Panel.isVisible = false;
                Panel.updateTabMessage();
            });
          }

    });

    var Panel = {

        isVisible : true,
        showMessage : null,
        hideMessage : null,
        animationDuration : 650,
        animationEasing : 'linear',

        init : function() {

        },

        hidePanel : function() {
            $('.panel-wrapper2').animate({
                bottom : -(Panel.getAnimationOffset())
            }, Panel.animationDuration, Panel.animationEasing, function() {
                Panel.isVisible = false;
                Panel.updateTabMessage();
            });
        },

        showPanel : function() {
            $('.panel-wrapper2').animate({
                bottom : 0
            }, Panel.animationDuration, Panel.animationEasing, function() {
                Panel.isVisible = true;
                Panel.updateTabMessage();
            });
        },

        togglePanel : function() {
            ((this.isVisible) ? this.hidePanel : this.showPanel)();
        },

        updateTabMessage : function() {
            if (this.isVisible) {
                $('.tab-controller2 .close').show();
                $('.tab-controller2 .showe').hide();
            } else {
                $('.tab-controller2 .close').hide();
                $('.tab-controller2 .showe').show();
            }
        },

        getAnimationOffset : function() {
            return $('.panel-content2').height() -32;
        }

    }

})(jQuery);