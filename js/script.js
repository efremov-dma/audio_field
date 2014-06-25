(function( $ ){
  Drupal.behaviors.audioField = {
    attach: function (context, settings) {
      if (context == document) {

        if (settings.audioField != undefined) {
          var fields = settings.audioField;
          for (var id in fields) {
            $('#' + id).jPlayer({
              ready: function (event) {
                var field = fields[$(this).attr('id')];
                $(this).jPlayer("setMedia", {
                  title: field.song_title,
                  mp3: field.file_url
                });
              },
              cssSelectorAncestor: '#' + id + ' + .jquery-player-container',
              swfPath: "/sites/all/libraries/jplayer",
              wmode: "window",
              smoothPlayBar: true,
              keyEnabled: true,
              remainingDuration: true,
              toggleDuration: true
            });
          }
        }

        var $expand = $('.audio-field-lyrics-expand');
        if ($expand.length) {
          $expand.each(function (e) {
            var $lyrics = $(this).parent().find('.audio-field-lyrics').hide();
            $(this).bind('click', function() {
              $lyrics.slideToggle();
            });
          });
        }

      } /* close context */
    } /* close attach */
  } /* close behavior */
})( jQuery );
