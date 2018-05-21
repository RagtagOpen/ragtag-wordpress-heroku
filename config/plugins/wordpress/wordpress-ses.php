<?php
/**
 * Configuration - Plugin: SES Mail
 * @url: https://wordpress.org/plugins/wp-ses/
 */
$wpms_settings = array(
  'WP_SES_ACCESS_KEY',
  'WP_SES_SECRET_KEY',
  'WP_SES_FROM',
  'WP_SES_RETURNPATH',
  'WP_SES_REPLYTO',
  'WP_SES_ENDPOINT',
  'WP_SES_AUTOACTIVATE'
);

foreach ($wpms_settings as $setting):
  if (!empty(getenv($setting))) {
      $val = getenv($setting);
      if($val === 'true'):
        $val = true;
      elseif($val === 'false'):
        $val = false;
      endif;
      define($setting, $val);
  }
endforeach;
