<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/colegiop/templates/jl_meta_lite/blueprints/styles/accent.yaml',
    'modified' => 1663251394,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#0278ae'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#ef7171'
                ]
            ]
        ]
    ]
];
