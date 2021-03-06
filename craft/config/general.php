<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'defaultFilePermissions' => 0664,
        'defaultFolderPermissions' => 0775,
        'addTrailingSlashesToUrls' => true,
        'limitAutoSlugsToAscii' => true,
        'useEmailAsUsername' => true,
        'convertFilenamesToAscii' => true,
        'defaultImageQuality' => 100,
        'maxUploadFileSize' => 40000000,
        'omitScriptNameInUrls' => true,
		'overridePhpSessionLocation' => true,
        // 'defaultCookieDomain' => '.example.com',
        'defaultWeekStartDay' => 1,
        'preserveImageColorProfiles' => true,
        'gaCode' => false,
        'locales' => array(
            'en_gb' => array(
                'languageCode' => 'en',
                'niceLanguage' => 'English',
                'dateFormat' => 'jS F Y'
            )
        ),
        'mainLocale' => 'en_gb'
    ),

    // Settings when developing locally.
    'core.dev' => array(
        'devMode' => true,
        'siteUrl' => array(
            'en_gb' => 'http://core.dev/'
        ),
        'rootUrl' => 'http://core.dev',
        'trackUsers' => false,
        'omitScriptNameInUrls' => false,
        'defaultCookieDomain' => ''
    ),

    // Settings when on the live site.
    'example.com' => array(
        'siteUrl' => array(
            'en_gb' => 'http://example.com/'
        ),
        'rootUrl' => 'http://example.com',
        'trackUsers' => true
    ),

    // Settings when on the staging site.
    'staging.example.com' => array(
        'siteUrl' => array(
            'en_gb' => 'http://staging.example.com/'
        ),
        'rootUrl' => 'http://staging.example.com',
        'trackUsers' => false
    )
);
