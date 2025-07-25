<?php

return [
    'nav_items' => function () {
        $items = [
            'index' => 'Home',
            'courses.index' => 'Courses',
            'contact' => 'Contact',
            'login' => 'Login',
            'register' => 'Register',
            'profile' => 'Profile',
            'logout' => 'Logout',
            'terms' => 'Terms',
            'privacy' => 'Privacy',
        ];

        if (auth()->check()) {
            unset($items['login'], $items['register']);
        } else {
            unset($items['profile'], $items['logout']);
        }

        return $items;
    },
    'social_networks' => [
        'youtube' => 'https://youtube.com',
        'telegram' => 'https://telegram.org',
        'github' => 'https://github.com',
        'x' => 'https://x.com',
    ],
];
