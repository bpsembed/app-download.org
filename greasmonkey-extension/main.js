// Generated by CoffeeScript 1.4.0
(function() {
  // ==UserScript==
// @name        App-Download.org PlayStore Extension
// @namespace   org.app-download
// @include     https://play.google.com/store/apps/details*
// @version     1
// @grant       none
// ==/UserScript==;

  (function($) {
    $(document).ready(function() {
      var button, download, span;
      download = function() {
        var id;
        id = location.search.match(/[?&]id=([^&]*)/)[1];
        location.href = "https://www.app-download.org/en/download/direct/" + id;
        $('body').prepend($('<iframe />', {
          width: '100%',
          height: '100%',
          frameborder: 'no',
          src: 'https://www.app-download.org/en/afterdownload/frame',
          style: 'position: absolute; top:0; left:0; width: 100%; height: 100%; z-index: 1000; border: 0;'
        }));
      };
      button = $('<button>', {
        text: 'Download',
        "class": 'price',
        click: download
      });
      span = $('<span>', {
        "class": 'apps medium play-button buy-button-container',
        html: button,
        style: 'background: #E13F50'
      });
      $('.details-actions').prepend(span);
    });
  })(jQuery);

}).call(this);
