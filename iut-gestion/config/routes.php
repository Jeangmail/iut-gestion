<?php
// config/routes.php
return [
    'GET' => [
        ''                 => 'AuthController@showLoginForm',
        'login'            => 'AuthController@showLoginForm',
        'logout'           => 'AuthController@logout',
        'presence'         => 'PresenceController@index',
    ],
    'POST' => [
        'login'            => 'AuthController@login',
        'register'         => 'AuthController@register',
        'presence' => 'PresenceController@presence',
    ],
];