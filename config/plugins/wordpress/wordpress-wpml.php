<?php
/**
* Configuration - Plugin: WPML
* @url: https://wpml.org/
*/
if (!empty(getenv('WPML_SITE_KEY'))) {
    define('OTGS_INSTALLER_SITE_KEY_WPML', getenv('WPML_SITE_KEY'));
}
