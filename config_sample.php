<?php

declare(strict_types=1);

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/

    // Site Information
    'site_name' => envconfig('SITE_NAME', 'Diana Arnos'),
    'site_author' => envconfig('SITE_AUTHOR', '@dianaarnos'),
    'site_description' => envconfig('SITE_DESC', 'Um espaço para centralizar as coisas que eu produzir e compartilhar.'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8001'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_about' => envconfig('SITE_ABOUT', 'pages/sobre'),
    // Set site_index if you want a custom index page
    //'site_index' => 'getting-started/introduction',

    'posts_per_page' => 10,

    // Optional: Social links that show up on the top right
    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER', 'https://twitter.com/dianaarnos'),
        'Github' => envconfig('LINK_GITHUB', 'https://github.com/dianaarnos'),
        'YouTube' => envconfig('LINK_YOUTUBE'),
        'LinkedIn' => envconfig('LINK_LINKEDIN', 'https://www.linkedin.com/in/dianaarnos/'),
        'Twitch' => envconfig('LINK_TWITCH'),
    ],

    // config/minicli.php
    'stencil_locations' => [
        'post' => __DIR__ . '/../content/posts',
        'page' => __DIR__ . '/../content/pages',
        'palestra' => __DIR__ . '/../content/palestras',
    ],
];
