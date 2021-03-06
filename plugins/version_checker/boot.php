<?php

/**
 * REDAXO Version Checker Addon
 *
 * @author markus[dot]staab[at]redaxo[dot]de Markus Staab
 * @author <a href="http://www.redaxo.org">www.redaxo.org</a>
 *
 * @package redaxo5
 */

$mypage = 'version_checker';

// im backend und eingeloggt?
if (rex::isBackend() && rex::getUser()) {
    if (rex_request('page', 'string') == 'be_dashboard') {
        require_once __DIR__ . '/functions/function_version_check.php';

        rex_extension::register('DASHBOARD_NOTIFICATION', [new rex_version_checker_notification(), 'registerAsExtension']);
    }
}
