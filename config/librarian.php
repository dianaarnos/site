<?php

declare(strict_types=1);

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/

    // Site Information
    'site_name' => envconfig('SITE_NAME', 'Diana Arnos'),
    'site_author' => envconfig('SITE_AUTHOR', 'Diana Ungaro Arnos'),
    'site_description' => envconfig('SITE_DESC', 'Um espaço para centralizar as coisas que eu produzir e compartilhar.'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8000'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_about' => envconfig('SITE_ABOUT', 'pages/sobre'),
    // Set site_index if you want a custom index page
    // 'site_index' => 'pages/index',
    // 'site_index_tpl' => 'content/index.html.twig',

    // Layout atual comporta 4 destaques
    'destaques' => [
        [
            'img' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png',
            'titulo' => 'Título de teste',
            'desc' => 'descrição que eu quero colocar',
            'rota' => 'posts',
            'slug' => '20200601_aplicacoes-graficas-wsl2',
        ],
        [
            'img' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png',
            'titulo' => 'Título',
            'desc' => 'desc',
            'rota' => 'posts',
            'slug' => '20200601_aplicacoes-graficas-wsl2',
        ],
        [
            'img' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png',
            'titulo' => 'Título',
            'desc' => 'desc',
            'rota' => 'posts',
            'slug' => '20200601_aplicacoes-graficas-wsl2',
        ],
        [
            'img' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png',
            'titulo' => 'Título',
            'desc' => 'desc',
            'rota' => 'posts',
            'slug' => '20200601_aplicacoes-graficas-wsl2',
        ],
    ],

    // Tags raíz - "Grandes Categorias"
    'tags_raiz' => [
        'tech',
        'outros',
    ],

    // Quantidade de artigos por tag-raíz (categoria) para exibir na home
    'artigos_por_tag_home' => 4,

    'posts_per_page' => 12,

    'sugestao_de_tema' => 'https://github.com/dianaarnos/materiais/issues/new?labels=sugestao_de_tema&template=sugestao-de-tema.md',

    'footer_mensagem' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu iaculis purus, eu consectetur turpis.',

    'foto_perfil' => 'https://avatars.githubusercontent.com/u/6060754?v=4',

    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER', 'https://twitter.com/dianaarnos'),
        'Github' => envconfig('LINK_GITHUB', 'https://github.com/dianaarnos'),
        'YouTube' => envconfig('LINK_YOUTUBE', ''),
        'LinkedIn' => envconfig('LINK_LINKEDIN', 'https://www.linkedin.com/in/dianaarnos/'),
        'Twitch' => envconfig('LINK_TWITCH', ''),
        'Instagram' => envconfig('LINK_INSTAGRAM', 'https://www.instagram.com/dianaarnos'),
        'BlueSky' => envconfig('LINK_BLUESKY', 'https://bsky.app/profile/dianaarnos.bsky.social'),
    ],
    'twig_debug' => true,
];
