(function($) {

    jQuery(document).ready(function() {

        Panel.init();

        $(document).on('click', '.tab-controller', function() {
             Panel.togglePanel();
        });
        
          if (Panel.isVisible) {
                $('.panel-wrapper').animate({
                bottom : -370
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
            $('.panel-wrapper').animate({
                bottom : -(Panel.getAnimationOffset())
            }, Panel.animationDuration, Panel.animationEasing, function() {
                Panel.isVisible = false;
                Panel.updateTabMessage();
            });
        },

        showPanel : function() {
            $('.panel-wrapper').animate({
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
                $('.tab-controller .close').show();
                $('.tab-controller .showe').hide();
            } else {
                $('.tab-controller .close').hide();
                $('.tab-controller .showe').show();
            }
        },

        getAnimationOffset : function() {
            return $('.panel-content').height()+30;
        }

    }

})(jQuery);