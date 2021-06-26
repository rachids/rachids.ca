<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "rachids.ca", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Je suis un développeur backend PHP basé à Québec et j\'offre notamment des solutions'.
                ' numériques à des problématiques de gestion ainsi que quelques formations.',
            'separator'    => ' - ',
            'keywords'     => [
                'développeur', 'programmeur', 'codeur', 'backend', 'php', 'laravel', 'quebec', 'developpement',
                'numerique', 'api', 'restful', 'mysql', 'javascript', 'vuejs', 'tailwindcss', 'programmation',
                'code', 'web',
            ],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'rachids.ca', // set false to total remove
            'description' => 'Blogue d\'un développeur Laravel au pays de la Poutine.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            'site'        => '@rachid_in',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'rachids.ca', // set false to total remove
            'description' => 'Blogue d\'un développeur Laravel au pays de la Poutine.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
