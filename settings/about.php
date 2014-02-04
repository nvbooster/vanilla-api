<?php if (!defined('APPLICATION')) exit;

$ApplicationInfo['api'] = array(
    'Name'        => 'Vanilla API',
    'Description' => 'Extensible RESTful API shim for Vanilla that operates in JSON or XML. Supports JSONP and CORS',
    'Version'     => '0.1.0',
    'Url'         => 'https://github.com/kasperisager/vanilla-api',
    'Author'      => 'Kasper Kronborg Isager',
    'AuthorEmail' => 'kasperisager@gmail.com',
    'AuthorUrl'   => 'https://webhutt.com',
    'License'     => 'MIT',
    'SettingsUrl' => 'dashboard/settings/api',
    'RequiredApplications' => array('Vanilla' => '2.2.x')
);
