<?php
/**
 * Configuration - Plugin: S3 Uploads
 * @url: https://github.com/humanmade/S3-Uploads
 */
if (!empty(getenv('AWS_S3_URL'))) {
    $env = sscanf(getenv('AWS_S3_URL'), 's3://%[^:]:%[^@]@s3-%[^.].amazonaws.com/%s');

    define(
      'AS3CF_SETTINGS',
      serialize(
          array(
            'provider' => 'aws',
            'access-key-id' => $env[0],
            'secret-access-key' => $env[1],
            'bucket' => $env[3],
            'region' => $env[2],
            'copy-to-s3' => TRUE,
            'serve-from-s3' => TRUE,
            'force-https' => TRUE,
            'remove-local-file' => TRUE,
            'object-versioning' => TRUE
          )
      )
    );

    unset($env);
}
