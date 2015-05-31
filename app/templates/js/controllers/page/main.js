(function ($, APP, undefined) {
    'use scrict';
    /** 
     * Контроллер главной страницы
     */

    APP.Controls.Page.MainPage = can.Control.extend(
        {
            init: function() {
                console.log('main-page');
            }
        }
    );
})(jQuery, APP);