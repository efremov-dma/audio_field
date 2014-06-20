<?php //print $first_name; ?>

<div id="<?php print $unique_id; ?>"></div>

<div class="jquery-player-container jp-audio">
  <div class="jp-type-single">
    <div class="jp-gui jp-interface">
      <ul class="jp-controls">
        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
        <li><a href="javascript:;" class="jp-pause" tabindex="1" style="display: none;">pause</a></li>
        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute" style="display: none;">unmute</a></li>
        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
      </ul>
      <div class="jp-progress">
        <div class="jp-seek-bar" style="width: 100%;">
          <div class="jp-play-bar" style="overflow: hidden; width: 0%;"></div>
        </div>
      </div>
      <div class="jp-volume-bar">
        <div class="jp-volume-bar-value" style="width: 80%;"></div>
      </div>
      <div class="jp-time-holder">
        <div class="jp-current-time">00:00</div>
        <div class="jp-duration">-03:29</div>

        <ul class="jp-toggles">
          <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
          <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display: none;">repeat off</a></li>
        </ul>
      </div>
    </div>
    <div class="jp-details">
      <ul>
        <li><span class="jp-title">Bubble</span></li>
      </ul>
    </div>
    <div class="jp-no-solution" style="display: none;">
      <span>Update Required</span>
      To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
    </div>
  </div>
</div>

<?php if ($lyrics_show): ?>
  <div class="audio-field-lyrics-container">
    <?php if ($lyrics_collapsed): ?>
      <div class="audio-field-lyrics-expand"><?php print t('EXPAND LYRICS'); ?></div>
    <?php endif; ?>
    <div class="audio-field-lyrics">
     <?php print $lyrics?>
    </div>
  </div>
<?php endif; ?>