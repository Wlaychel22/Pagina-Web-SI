<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\colegiop/templates/jl_meta_lite/blueprints/styles/offcanvas.yaml',
    'modified' => 1663251394,
    'data' => [
        'name' => 'Offcanvas Styles',
        'description' => 'Paramters for the Off Canvas sidepanel section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#0c1636'
                ],
                'text-color-active' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Hover & Active Text',
                    'default' => '#22d3ee'
                ],
                'toggle-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Toggle Color',
                    'default' => '#0c1636'
                ],
                'toggle-color-active' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Toggle Hover',
                    'default' => '#22d3ee'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Panel Width',
                    'description' => 'Set offcanvas size in rem, em, px, or percentage unit values',
                    'default' => '14rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'toggle-visibility' => [
                    'type' => 'select.selectize',
                    'label' => 'Toggle Visibility',
                    'description' => 'Choose the OffCanvas Toggle Visibility.',
                    'default' => 1,
                    'options' => [
                        1 => 'Mobile Menu',
                        2 => 'Always'
                    ]
                ]
            ]
        ]
    ]
];
