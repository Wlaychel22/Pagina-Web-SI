<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/colegiop/templates/jl_meta_lite/blueprints/styles/expanded.yaml',
    'modified' => 1663251394,
    'data' => [
        'name' => 'Expanded Styles',
        'description' => 'Expanded styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(255, 255, 255, 0)'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#868585'
                ]
            ]
        ]
    ]
];
