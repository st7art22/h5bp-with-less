(function($, APP, undefined) {
    "use strict";

    /**
     * Контроллер приложения, запускает контроллеры страниц
     **/
    APP.Controls.Application = can.Control.extend({

        init: function() {
            this.initPageController();
        },

        initPageController: function() {
            var pageType = this.element.data('page-type'),
                pagePlugin = can.capitalize(can.camelize(pageType));

            new APP.Controls.Page[pagePlugin](this.element);
        }
    });

    /**
     * Bootstrap
     */
    $(function() {
        new APP.Controls.Application($('body'));
    });

})(jQuery, window.APP);