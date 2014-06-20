(function( $ ){
  Drupal.behaviors.audioField = {
    attach: function (context, settings) {
      if (context == document) {

//        console.log(settings.audioField);

        if (settings.audioField != undefined) {
          var fields = settings.audioField;
          for (var id in fields) {
//            console.log(fields[id]);
            $('#' + id).jPlayer({
              ready: function (event) {
                $(this).jPlayer("setMedia", {
                  title: "Bubble",
                  mp3: fields[id]
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

            console.log('#' + id + ' + .jquery-player-container');

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
