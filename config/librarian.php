<?php

declare(strict_types=1);

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/

    // Site Information
    'site_name' => envconfig('SITE_NAME', 'Diana Arnos'),
    'site_author' => envconfig('SITE_AUTHOR', 'Diana Arnos'),
    'site_description' => envconfig('SITE_DESC', 'Um espaço para centralizar as coisas que eu produzir e compartilhar.'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8001'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_about' => envconfig('SITE_ABOUT', 'pages/sobre'),
    // Set site_index if you want a custom index page
    'site_index' => 'pages/index',
    'site_index_tpl' => 'content/index.html.twig',

    'posts_per_page' => 12,

    'sugestao_de_tema' => 'https://github.com/dianaarnos/materiais/issues/new?labels=sugestao_de_tema&template=sugestao-de-tema.md',

    'footer_mensagem' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu iaculis purus, eu consectetur turpis.',

    'foto_perfil' => 'https://avatars.githubusercontent.com/u/6060754?v=4',

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
