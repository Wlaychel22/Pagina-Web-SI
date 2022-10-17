<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/colegiop/templates/jl_meta_lite/blueprints/styles/font.yaml',
    'modified' => 1663251394,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'Heebo, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'IBM Plex Sans, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
