<?php

return [
    'phwoolcon/theme-mdl' => [
        'di' => [
            20 => 'di.php', // 20 stands for the loading sequence, bigger number will be loaded later
        ],
        'commands' => [
            // 20 stands for the loading sequence, bigger number will be loaded later
            20 => [
//                'your:command' => Phwoolcon\ThemeMdl\Command\YourCommand::class,
            ],
        ],
        'class_aliases' => [
            // 20 stands for the loading sequence, bigger number will be loaded later
            20 => [
//                'ShortClass' => Phwoolcon\ThemeMdl\Some\LongClassName::class,
            ],
        ],
        'assets' => [
            'material-components-web-css' => [
                'material-components-web-0.20.0/material-components-web.css',
            ],
            'material-components-web-js' => [
                'material-components-web-0.20.0/material-components-web.min.js',
            ],
        ],
    ],
];
