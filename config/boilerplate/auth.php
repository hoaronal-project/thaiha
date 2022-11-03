<?php

return [
    'register'      => false,          // Allow to register new users on backend login page
    'register_role' => 'backend_user', // Given role to new users (except the first one who is admin)
    'verify_email'  => false,          // Users must have a valid e-mail (a verification email is sent when a user registers)
    'providers'     => [
        'users' => [
            'driver' => 'eloquent',
            'model'  => Sebastienheyd\Boilerplate\Models\User::class,
            'table'  => 'users',
        ],
    ],
    'throttle' => [
        'maxAttempts' => 3,            // Maximum number of login attempts to allow
        'decayMinutes' => 1,           // Number of minutes to wait before login will be available again
    ],
];
