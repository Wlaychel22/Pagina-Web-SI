<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1663250691,
    'checksum' => '5b50e6e40b2929f53782391c24d21421',
    'files' => [
        'templates/g5_helium/custom/config/13' => [
            'index' => [
                'file' => 'templates/g5_helium/custom/config/13/index.yaml',
                'modified' => 1663249011
            ],
            'layout' => [
                'file' => 'templates/g5_helium/custom/config/13/layout.yaml',
                'modified' => 1663249011
            ]
        ],
        'templates/g5_helium/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_helium/custom/config/default/index.yaml',
                'modified' => 1663247672
            ],
            'layout' => [
                'file' => 'templates/g5_helium/custom/config/default/layout.yaml',
                'modified' => 1663247672
            ]
        ],
        'templates/g5_helium/config/default' => [
            'page/body' => [
                'file' => 'templates/g5_helium/config/default/page/body.yaml',
                'modified' => 1663247670
            ],
            'particles/branding' => [
                'file' => 'templates/g5_helium/config/default/particles/branding.yaml',
                'modified' => 1663247670
            ],
            'particles/copyright' => [
                'file' => 'templates/g5_helium/config/default/particles/copyright.yaml',
                'modified' => 1663247670
            ],
            'particles/logo' => [
                'file' => 'templates/g5_helium/config/default/particles/logo.yaml',
                'modified' => 1663247670
            ],
            'particles/social' => [
                'file' => 'templates/g5_helium/config/default/particles/social.yaml',
                'modified' => 1663247670
            ],
            'particles/totop' => [
                'file' => 'templates/g5_helium/config/default/particles/totop.yaml',
                'modified' => 1663247670
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'contentcubes' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'contenttabs' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'animation' => 'slide'
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => '2016',
                    'end' => 'now'
                ],
                'target' => '_blank',
                'owner' => 'Gantry Framework',
                'link' => '',
                'additional' => [
                    'text' => 'Developed by RocketTheme exclusively<br />for Gantry 5.'
                ],
                'css' => [
                    'class' => ''
                ]
            ],
            'horizontalmenu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'target' => '_blank'
            ],
            'owlcarousel' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'nav' => 'disable',
                'dots' => 'enable',
                'autoplay' => 'disable',
                'imageOverlay' => 'enable'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry<span class="hidden-tablet"> Framework</span></a>',
                'css' => [
                    'class' => 'g-branding'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => '',
                'svg' => '<svg width="100%" height="100%" viewBox="0 0 67 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="logo" d="M16.508,3.838l14.882,7.044l0,18.089l-14.882,7.044l-14.883,-7.044l0,-18.089l14.883,-7.044l0,0ZM26.983,21.828c0.024,-0.138 0.046,-0.324 0.064,-0.556c0.018,-0.233 0.027,-0.469 0.027,-0.708c0,-0.654 -0.091,-1.267 -0.275,-1.839c-0.183,-0.572 -0.455,-1.066 -0.815,-1.481c-0.361,-0.414 -0.797,-0.741 -1.311,-0.98c-0.513,-0.239 -1.099,-0.359 -1.759,-0.359c-0.758,0 -1.421,0.135 -1.989,0.406c-0.568,0.27 -1.045,0.638 -1.43,1.103c-0.384,0.466 -0.675,1.013 -0.87,1.641c-0.196,0.629 -0.293,1.302 -0.293,2.019c0,0.729 0.094,1.402 0.284,2.018c0.189,0.616 0.482,1.147 0.879,1.594c0.398,0.446 0.911,0.795 1.54,1.047c0.629,0.251 1.384,0.377 2.264,0.377c1.197,0 2.272,-0.189 3.226,-0.566c-0.013,-0.402 -0.068,-0.779 -0.165,-1.132c-0.098,-0.352 -0.214,-0.654 -0.349,-0.905c-0.391,0.151 -0.803,0.267 -1.237,0.349c-0.434,0.082 -0.858,0.123 -1.274,0.123c-0.757,0 -1.368,-0.17 -1.833,-0.51c-0.464,-0.339 -0.721,-0.886 -0.769,-1.641l6.085,0ZM44.956,17.583c0.384,-0.064 0.763,-0.096 1.136,-0.096c0.373,0 0.752,0.032 1.136,0.096l0,4.384c0,0.438 0.035,0.798 0.104,1.08c0.069,0.283 0.176,0.507 0.32,0.672c0.144,0.166 0.323,0.283 0.536,0.352c0.213,0.07 0.464,0.104 0.752,0.104c0.395,0 0.725,-0.037 0.992,-0.112l0,-6.48c0.384,-0.064 0.757,-0.096 1.12,-0.096c0.373,0 0.752,0.032 1.136,0.096l0,7.952c-0.341,0.118 -0.792,0.232 -1.352,0.344c-0.56,0.112 -1.144,0.168 -1.752,0.168c-0.544,0 -1.067,-0.042 -1.568,-0.128c-0.501,-0.085 -0.941,-0.266 -1.32,-0.544c-0.379,-0.277 -0.68,-0.682 -0.904,-1.216c-0.224,-0.533 -0.336,-1.242 -0.336,-2.128l0,-4.448l0,0ZM13.566,20.017l0,5.867c0.452,0.075 0.904,0.113 1.356,0.113c0.428,0 0.874,-0.038 1.338,-0.113l0,-13.563c-0.464,-0.075 -0.916,-0.113 -1.356,-0.113c-0.44,0 -0.886,0.038 -1.338,0.113l0,5.32l-4.417,0l0,-5.32c-0.465,-0.075 -0.917,-0.113 -1.357,-0.113c-0.439,0 -0.885,0.038 -1.338,0.113l0,13.563c0.453,0.075 0.905,0.113 1.357,0.113c0.427,0 0.873,-0.038 1.338,-0.113l0,-5.867l4.417,0ZM36.11,14.063c0.352,0.002 0.714,0.034 1.086,0.096l0,8.4c0,0.331 0.019,0.598 0.056,0.8c0.037,0.203 0.096,0.36 0.176,0.472c0.08,0.112 0.184,0.19 0.312,0.232c0.128,0.043 0.288,0.064 0.48,0.064c0.085,0 0.179,-0.005 0.28,-0.016c0.101,-0.01 0.2,-0.026 0.296,-0.048c0.117,0.438 0.176,0.864 0.176,1.28c0,0.086 0,0.163 0,0.232c0,0.07 -0.011,0.147 -0.032,0.232c-0.171,0.054 -0.376,0.091 -0.616,0.112c-0.24,0.022 -0.461,0.032 -0.664,0.032c-0.821,0 -1.48,-0.226 -1.976,-0.68c-0.496,-0.453 -0.744,-1.192 -0.744,-2.216l0,-8.896c0.384,-0.064 0.763,-0.096 1.136,-0.096l0.034,0ZM40.636,19.311l-1.072,0c-0.032,-0.138 -0.056,-0.285 -0.072,-0.44c-0.016,-0.154 -0.024,-0.301 -0.024,-0.44c0,-0.288 0.032,-0.57 0.096,-0.848l3.296,0l0,8.272c-0.384,0.064 -0.757,0.096 -1.12,0.096c-0.352,0 -0.72,-0.032 -1.104,-0.096l0,-6.544l0,0ZM63.538,17.391c0.928,0.004 1.61,0.263 2.05,0.776c0.443,0.518 0.664,1.326 0.664,2.424l0,5.264c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-4.672c0,-0.576 -0.072,-1.018 -0.216,-1.328c-0.144,-0.309 -0.435,-0.464 -0.872,-0.464c-0.181,0 -0.36,0.027 -0.536,0.08c-0.176,0.054 -0.336,0.152 -0.48,0.296c-0.144,0.144 -0.261,0.347 -0.352,0.608c-0.091,0.262 -0.136,0.6 -0.136,1.016l0,4.464c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-4.672c0,-0.576 -0.072,-1.018 -0.216,-1.328c-0.144,-0.309 -0.435,-0.464 -0.872,-0.464c-0.181,0 -0.363,0.027 -0.544,0.08c-0.181,0.054 -0.344,0.158 -0.488,0.312c-0.144,0.155 -0.259,0.371 -0.344,0.648c-0.085,0.278 -0.128,0.64 -0.128,1.088l0,4.336c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-8.272c0.149,-0.032 0.299,-0.056 0.448,-0.072c0.149,-0.016 0.315,-0.024 0.496,-0.024c0.181,0 0.341,0.008 0.48,0.024c0.139,0.016 0.283,0.04 0.432,0.072c0.032,0.054 0.061,0.131 0.088,0.232c0.027,0.102 0.051,0.208 0.072,0.32c0.021,0.112 0.04,0.222 0.056,0.328c0.016,0.107 0.029,0.198 0.04,0.272c0.085,-0.16 0.197,-0.32 0.336,-0.48c0.139,-0.16 0.304,-0.304 0.496,-0.432c0.192,-0.128 0.408,-0.232 0.648,-0.312c0.24,-0.08 0.509,-0.12 0.808,-0.12c1.291,0 2.117,0.491 2.48,1.472c0.213,-0.394 0.515,-0.738 0.904,-1.032c0.389,-0.293 0.883,-0.44 1.48,-0.44l0.022,0ZM24.618,19.961l-3.702,0c0.061,-0.642 0.25,-1.138 0.568,-1.49c0.318,-0.353 0.782,-0.529 1.393,-0.529c0.538,0 0.956,0.186 1.256,0.557c0.299,0.371 0.461,0.858 0.485,1.462ZM40.3,16.191c-0.064,-0.362 -0.096,-0.72 -0.096,-1.072c0,-0.341 0.032,-0.698 0.096,-1.072c0.181,-0.032 0.376,-0.056 0.584,-0.072c0.208,-0.016 0.397,-0.024 0.568,-0.024c0.181,0 0.379,0.008 0.592,0.024c0.213,0.016 0.411,0.04 0.592,0.072c0.032,0.182 0.053,0.36 0.064,0.536c0.011,0.176 0.016,0.355 0.016,0.536c0,0.171 -0.005,0.347 -0.016,0.528c-0.011,0.182 -0.032,0.363 -0.064,0.544c-0.181,0.032 -0.376,0.054 -0.584,0.064c-0.208,0.011 -0.403,0.016 -0.584,0.016c-0.171,0 -0.363,-0.005 -0.576,-0.016c-0.213,-0.01 -0.411,-0.032 -0.592,-0.064l0,0Z"/></svg>',
                'text' => '',
                'class' => 'g-logo g-logo-helium'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-twitter fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/rockettheme',
                        'name' => 'Twitter'
                    ],
                    1 => [
                        'icon' => 'fa fa-facebook fa-fw',
                        'text' => '',
                        'link' => 'http://www.facebook.com/RocketTheme',
                        'name' => 'Facebook'
                    ],
                    2 => [
                        'icon' => 'fa fa-google-plus fa-fw',
                        'text' => '',
                        'link' => 'https://plus.google.com/+rockettheme',
                        'name' => 'Google+'
                    ]
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'icon' => 'fa fa-chevron-up fa-fw',
                'content' => 'Back to top',
                'title' => 'Back to top'
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'edit' => false,
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'styles' => [
            'above' => [
                'background' => '#f4f5f7',
                'text-color' => '#424753'
            ],
            'accent' => [
                'color-1' => '#4db2b3',
                'color-2' => '#8f4dae'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'expanded' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'features' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'font' => [
                'family-default' => 'Raleway, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                'family-title' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
            ],
            'footer' => [
                'background' => '#312f38',
                'text-color' => '#ffffff'
            ],
            'header' => [
                'background' => '#312f38',
                'background-image' => 'gantry-media://header/img01.jpg',
                'background-overlay' => 'enabled',
                'text-color' => '#eceeef'
            ],
            'intro' => [
                'background' => '#f4f5f7',
                'text-color' => '#424753'
            ],
            'link' => [
                'regular' => '#4db2b3',
                'hover' => '#424753'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => 0
            ],
            'navigation' => [
                'background' => '#312f38',
                'text-color' => '#ffffff'
            ],
            'offcanvas' => [
                'background' => '#4db2b3',
                'text-color' => '#eceeef',
                'toggle-color' => '#4db2b3',
                'toggle-visibility' => 1,
                'width' => '12rem'
            ],
            'testimonials' => [
                'background' => '#8f4dae',
                'background-image' => 'gantry-media://testimonials/img01.jpg',
                'background-overlay' => 'enabled',
                'text-color' => '#eceeef'
            ],
            'utility' => [
                'background' => '#424753',
                'text-color' => '#ffffff'
            ]
        ],
        'page' => [
            'body' => [
                'attribs' => [
                    'class' => 'gantry g-helium-style',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'doctype' => 'html',
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => 1,
                'version' => 'fa4',
                'fa4_compatibility' => 1,
                'content_compatibility' => 1
            ]
        ],
        'index' => [
            'name' => '13',
            'timestamp' => 1663249011,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'home_-_particles',
                'timestamp' => 1663247671
            ],
            'positions' => [
                
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'features' => 'Features',
                'utility' => 'Utility',
                'above' => 'Above',
                'testimonials' => 'Testimonials',
                'expanded' => 'Expanded',
                'header' => 'Header',
                'mainbar' => 'Mainbar',
                'sidebar' => 'Sidebar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'messages' => [
                    'system-messages-9644' => 'System Messages'
                ],
                'logo' => [
                    'logo-4932' => 'Logo / Image',
                    'logo-1828' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-6640' => 'Menu'
                ],
                'social' => [
                    'social-1234' => 'Social'
                ],
                'owlcarousel' => [
                    'owlcarousel-2455' => 'Owl Carousel'
                ],
                'custom' => [
                    'custom-5807' => 'Intro',
                    'custom-3119' => 'Features',
                    'custom-7658' => 'Customer Testimonials',
                    'custom-6355' => 'Develop CMS themes quickly'
                ],
                'contenttabs' => [
                    'contenttabs-3854' => 'Content Tabs'
                ],
                'contentcubes' => [
                    'contentcubes-7850' => 'Content Cubes'
                ],
                'copyright' => [
                    'copyright-1740' => 'Copyright'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-8940' => 'Horizontal Menu'
                ],
                'totop' => [
                    'totop-1993' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-4755' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'system-messages-9644' => 'system-messages-7972',
                    'logo-4932' => 'logo-9608',
                    'menu-6640' => 'menu-6409',
                    'social-1234' => 'social-3171',
                    'footer' => 'footer',
                    'logo-1828' => 'logo-9571',
                    'copyright-1740' => 'copyright-1736',
                    'horizontalmenu-8940' => 'horizontalmenu-9034',
                    'totop-1993' => 'totop-8670',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-4755' => 'mobile-menu-5697'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'home_-_particles',
                'timestamp' => 1663247671
            ],
            'layout' => [
                '/navigation/' => [
                    0 => [
                        0 => 'system-messages-9644'
                    ],
                    1 => [
                        0 => 'logo-4932 15',
                        1 => 'menu-6640 65',
                        2 => 'social-1234 20'
                    ]
                ],
                '/header/' => [
                    0 => [
                        0 => 'owlcarousel-2455'
                    ]
                ],
                '/intro/' => [
                    0 => [
                        0 => 'custom-5807'
                    ]
                ],
                '/features/' => [
                    0 => [
                        0 => 'custom-3119'
                    ]
                ],
                '/utility/' => [
                    0 => [
                        0 => 'contenttabs-3854'
                    ]
                ],
                '/above/' => [
                    0 => [
                        0 => 'contentcubes-7850'
                    ]
                ],
                '/testimonials/' => [
                    0 => [
                        0 => 'custom-7658'
                    ]
                ],
                '/expanded/' => [
                    0 => [
                        0 => 'custom-6355'
                    ]
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'mainbar 75' => [
                                
                            ]
                        ],
                        1 => [
                            'sidebar 25' => [
                                
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'header' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-flushed'
                    ]
                ],
                'intro' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'features' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'testimonials' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'expanded' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main'
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside'
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'system-messages-9644' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'system-messages-7972'
                    ]
                ],
                'logo-4932' => [
                    'title' => 'Logo / Image',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'logo-9608'
                    ]
                ],
                'menu-6640' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'menu-6409'
                    ]
                ],
                'social-1234' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'social-3171'
                    ]
                ],
                'owlcarousel-2455' => [
                    'title' => 'Owl Carousel',
                    'attributes' => [
                        'items' => [
                            0 => [
                                'image' => 'gantry-media://header/img01.jpg',
                                'title' => 'Helium is here!',
                                'desc' => 'Begin your journey with a brand new &raquo;free&laquo; Gantry 5 template from RocketTheme.',
                                'link' => 'http://gantry.org/downloads',
                                'linktext' => 'Download Now',
                                'buttonicon' => 'fa fa-rocket',
                                'buttonclass' => 'button-outline',
                                'name' => 'Item 1'
                            ],
                            1 => [
                                'image' => 'gantry-media://header/img02.jpg',
                                'title' => 'Helium is Gantry powered!',
                                'desc' => 'Helium is based on the powerful Gantry framework.',
                                'link' => 'http://gantry.org/downloads',
                                'linktext' => 'Download Now',
                                'buttonclass' => 'button-outline',
                                'name' => 'Item 2'
                            ]
                        ]
                    ]
                ],
                'custom-5807' => [
                    'title' => 'Intro',
                    'attributes' => [
                        'html' => '<div class="fp-intro">
    <h2 class="g-title">Build your beautiful theme, the way you want it, with Helium</h2>
    <p>Craft memorable, emotive experiences with our Gantry 5 framework.</p>
    <div class="ipad-mockup">
        <img src="gantry-media://intro/mockup.png" alt="" />
    </div>
</div>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'custom-3119' => [
                    'title' => 'Features',
                    'attributes' => [
                        'html' => '<div class="fp-features">
    <div class="g-grid">
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <i class="fa fa-joomla fab fab-joomla"></i>
                    <h4 class="card-title">Joomla</h4>
                    <p class="card-text">Bring your website to life with one of the most powerful and popular theming frameworks for Joomla.</p>
                </div>
            </div>
        </div>
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <i class="fa fa-wordpress fab fab-wordpress"></i>
                    <h4 class="card-title">WordPress</h4>
                    <p class="card-text">Gantry extends WordPress\' native functionality, empowering users to manipulate virtually every aspect of their visitors\' experience.</p>
                </div>
            </div>
        </div>
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <i class="fa fa-grav fab fab-grav"></i>
                    <h4 class="card-title">Grav</h4>
                    <p class="card-text">Gantry 5 is the first theming framework for Grav, designed by members of the same team that developed the CMS.</p>
                </div>
            </div>
        </div>
    </div>
</div>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'contenttabs-3854' => [
                    'title' => 'Content Tabs',
                    'attributes' => [
                        'items' => [
                            0 => [
                                'content' => '<p>Gantry 5 includes a new, powerful Menu editor that makes menu organization,
particle and module injection, and visual enhancements a breeze. Here are just
a handful of things you can do with Gantry 5’s powerful Menu Editor.</p>
<div class="g-grid size-100">
    <div class="g-block size-50">
        <ul>
            <li>
                FontAwesome Icons
            </li>
            <li>
                Easy Module Injection
            </li>
            <li>
                Simple Particle Injection
            </li>
            <li>
                Drag-and-drop Functionality
            </li>
            <li>
                Per-item CSS Classes
            </li>
            <li>
                Submenu Column Control
            </li>
        </ul>
    </div>
    <div class="g-block size-50">
        <ul>
            <li>
                Easy Organization / Reordering
            </li>
            <li>
                Link Target Designation
            </li>
            <li>
                Multiple Dropdown Styles
            </li>
            <li>
                Per-item Image Support
            </li>
            <li>
                Subtitles
            </li>
            <li>
                Non-destructive
            </li>
        </ul>
    </div>
</div>
<div class="g-grid">
    <div class="g-block size-100">
        Find out more about using the Menu Editor in our <a href="http://docs.gantry.org/gantry5/configure/menu-editor">documentation</a>.
    </div>
</div>',
                                'title' => 'Menu Editor'
                            ],
                            1 => [
                                'content' => '<p>The Layout Manager makes it easier than ever to arrange and customize your users’ experience with drag-and-drop simplicity from start to finish. A handful of the many features found in the Layout Manager are listed below.</p>
<div class="g-grid size-100">
    <div class="g-block size-50">
        <ul>
            <li>Drag-and-drop Functionality</li>
            <li>Unlimited Items Per Row</li>
            <li>Unlimited Rows Per Section</li>
            <li>Easy Widget Position Placement</li>
            <li>Resize Items with Simple Sliders</li>
            <li>Per-section CSS Classes and Tag Attributes</li>
        </ul>
    </div>
    <div class="g-block size-50">
        <ul>
            <li>Per-block CSS Classes, Variations, and Tag Attributes</li>
            <li>Quick Preset Loading</li>
            <li>Undo and Redo</li>
            <li>Access to Easy-to-use Particles</li>
            <li>Intuitive Visual Interface</li>
            <li>Touch-screen Friendly</li>
        </ul>
    </div>
</div>
<div>Find out more about using the Layout Manager in our <a href="http://docs.gantry.org/gantry5/configure/layout-manager">documentation</a>.</div>',
                                'title' => 'Layout Manager'
                            ]
                        ]
                    ]
                ],
                'contentcubes-7850' => [
                    'title' => 'Content Cubes',
                    'attributes' => [
                        'items' => [
                            0 => [
                                'image' => 'gantry-media://above/img01.jpeg',
                                'imageposition' => 'left',
                                'label' => 'Featured',
                                'title' => 'Gantry 5 Won "Best Framework System" at J and Beyond 2016 ',
                                'tags' => [
                                    0 => [
                                        'icon' => 'fa fa-tag',
                                        'link' => '#',
                                        'target' => '_self',
                                        'text' => 'Design Studio'
                                    ],
                                    1 => [
                                        'icon' => 'fa fa-tag',
                                        'link' => '#',
                                        'target' => '_self',
                                        'text' => 'Photo'
                                    ]
                                ],
                                'link' => 'http://gantry.org/blog/gantry5-wins-joscar',
                                'linktext' => '&rarr;',
                                'buttonclass' => '',
                                'buttontarget' => '_self',
                                'name' => 'Item 1'
                            ],
                            1 => [
                                'image' => 'gantry-media://above/img02.jpeg',
                                'imageposition' => 'right',
                                'label' => 'Featured',
                                'title' => 'Gantry 5 Has Been Downloaded Over Half a Million Times',
                                'tags' => [
                                    0 => [
                                        'icon' => 'fa fa-tag',
                                        'link' => '#',
                                        'target' => '_self',
                                        'text' => 'Graphic Design'
                                    ],
                                    1 => [
                                        'icon' => 'fa fa-tag',
                                        'link' => '#',
                                        'target' => '_self',
                                        'text' => 'Website Creation'
                                    ]
                                ],
                                'link' => 'http://gantry.org',
                                'linktext' => '&rarr;',
                                'buttonclass' => '',
                                'buttontarget' => '_self',
                                'name' => 'Item 2'
                            ]
                        ]
                    ]
                ],
                'custom-7658' => [
                    'title' => 'Customer Testimonials',
                    'attributes' => [
                        'html' => '<div class="fp-testimonials">
    <blockquote>
        <img src="gantry-media://testimonials/face.jpg" alt="Avatar" class="g-img-circle" height="80" width="80">
        <p class="h3">"Helium is a beautiful, free theme made by the RocketTheme team in appreciation of the incredible Gantry community."</p>
        <footer>Andy Miller</footer>
    </blockquote>
</div>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'custom-6355' => [
                    'title' => 'Develop CMS themes quickly',
                    'attributes' => [
                        'html' => '<div class="fp-multi-column-text">
    <h2 class="g-title">Develop CMS themes quickly and efficiently</h2>
    <div class="g-grid">
        <div class="g-block size-50">
            <p>
                Helium was crafted with love by the <a href="http://rockettheme.com">RocketTheme</a> team to showcase the capabilities of the Gantry 5 framework. Helium is open source and available for free under a dual license system (<a href="http://www.opensource.org/licenses/mit-license.php">MIT</a> or <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GPL version 2 or later</a>). You do not have to keep the Gantry or RocketTheme links and logos in the front end, however, you must ensure that all copyright notices in the code are retained.
            </p>
        </div>
        <div class="g-block size-50">
            <p>
                Documentation for Gantry 5 is available on the <a href="http://docs.gantry.org">official Gantry website</a>. You can submit any issues or feature requests for Gantry through <a href="http://github.com/gantry/gantry5">GitHub</a>. A chat room has been set up using <a href="https://gitter.im/gantry/gantry5">Gitter</a> where you can go to talk about the project with developers, contributors, and other members of the community. This is the best place to go to get quick tips and discuss features with others.
            </p>
        </div>
    </div>
</div>'
                    ],
                    'block' => [
                        'variations' => 'title-center'
                    ]
                ]
            ]
        ]
    ]
];
