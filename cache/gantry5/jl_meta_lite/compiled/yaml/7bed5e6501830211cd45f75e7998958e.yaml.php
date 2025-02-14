<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\colegiop/templates/jl_meta_lite/particles/jlpaypaldonate.yaml',
    'modified' => 1663251395,
    'data' => [
        'name' => 'JL Paypal Donate',
        'description' => 'Make a paypal donate button in seconds.',
        'type' => 'particle',
        'icon' => 'fa-paypal',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_content' => [
                            'label' => 'Content',
                            'fields' => [
                                'email' => [
                                    'type' => 'input.text',
                                    'label' => 'Paypal Email',
                                    'description' => 'Enter your real and valid paypal email account on which you will receive the donations.',
                                    'placeholder' => 'hello@example.com'
                                ],
                                'name' => [
                                    'type' => 'input.text',
                                    'label' => 'Name',
                                    'description' => 'Enter your name or your organization name.',
                                    'placeholder' => 'Foundation & Charity.'
                                ],
                                'campaign' => [
                                    'type' => 'input.text',
                                    'label' => 'Campaign Name',
                                    'description' => 'Enter the campaign name.',
                                    'placeholder' => 'Foundation & Charity Campaign'
                                ],
                                'currency' => [
                                    'type' => 'select.select',
                                    'label' => 'Currency',
                                    'description' => 'Select currency.',
                                    'default' => 'USD',
                                    'options' => [
                                        'USD' => 'US dollar',
                                        'EUR' => 'Euro',
                                        'GBP' => 'Pound sterling',
                                        'JPY' => 'Japanese yen',
                                        'AUD' => 'Australian dollar',
                                        'BRL' => 'Brazilian real',
                                        'CAD' => 'Canadian dollar',
                                        'CZK' => 'Czech koruna',
                                        'DKK' => 'Danish krone',
                                        'HKD' => 'Hong Kong dollar',
                                        'HUF' => 'Hungarian forint',
                                        'ILS' => 'Israeli new shekel',
                                        'MXN' => 'Mexican peso',
                                        'TWD' => 'New Taiwan dollar',
                                        'NZD' => 'New Zealand dollar',
                                        'NOK' => 'Norwegian krone',
                                        'PHP' => 'Philippine peso',
                                        'PLN' => 'Polish złoty',
                                        'RUB' => 'Russian ruble',
                                        'SGD' => 'Singapore dollar',
                                        'SEK' => 'Swedish krona',
                                        'CHF' => 'Swiss franc',
                                        'THB' => 'Thai baht'
                                    ]
                                ],
                                'icon_sign' => [
                                    'type' => 'input.icon',
                                    'label' => 'Sign',
                                    'default' => 'fa fa-donate'
                                ],
                                'donate_button' => [
                                    'type' => 'input.text',
                                    'label' => 'Donate Button',
                                    'default' => 'Donate Now'
                                ],
                                'fixedamount' => [
                                    'type' => 'input.number',
                                    'label' => 'Fixed Amount',
                                    'description' => 'Enter the fixed amount. If set, donors can not change the donation amount.'
                                ],
                                'button_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Style Settings'
                                ],
                                'buttonclass' => [
                                    'type' => 'select.select',
                                    'label' => 'Button Style',
                                    'description' => 'Set the button style.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Button Default',
                                        'primary' => 'Button Primary',
                                        'secondary' => 'Button Secondary',
                                        'danger' => 'Button Danger'
                                    ]
                                ],
                                'form_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Form Style',
                                    'description' => 'Set the form style.',
                                    'default' => 'default',
                                    'options' => [
                                        'danger' => 'Danger',
                                        'default' => 'Default',
                                        'success' => 'Success',
                                        'blank' => 'Blank'
                                    ]
                                ],
                                'button_size' => [
                                    'type' => 'select.select',
                                    'label' => 'Size',
                                    'description' => 'Set the button size.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'large' => 'Large'
                                    ]
                                ],
                                'button_left' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Show Left Button',
                                    'default' => false
                                ],
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ]
                            ]
                        ],
                        '_tab_general' => [
                            'label' => 'General',
                            'overridable' => false,
                            'fields' => [
                                'particle_title_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Particle Title Style'
                                ],
                                'particle_title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Add an optional particle title.',
                                    'placeholder' => 'Enter particle title'
                                ],
                                'particle_title_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
                                    'default' => 'h3',
                                    'options' => [
                                        'default' => 'None',
                                        'heading-2xlarge' => '2X-Large',
                                        'heading-xlarge' => 'X-Large',
                                        'heading-large' => 'Large',
                                        'heading-medium' => 'Medium',
                                        'heading-small' => 'Small',
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6',
                                        'text-lead' => 'Lead',
                                        'text-meta' => 'Meta'
                                    ]
                                ],
                                'particle_title_decoration' => [
                                    'type' => 'select.select',
                                    'label' => 'Decoration',
                                    'description' => 'Decorate the headline with a divider, bullet or a line that is vertically centered to the heading.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'divider' => 'Divider',
                                        'bullet' => 'Bullet',
                                        'line' => 'Line'
                                    ]
                                ],
                                'particle_title_align' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'description' => 'Center, left and right alignment for Particle title.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Inherit',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'particle_predefined_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger'
                                    ]
                                ],
                                'particle_title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Custom Color',
                                    'description' => 'Customize the title color instead using predefined color mode. Set the Predefined color to None before using this color customization mode.'
                                ],
                                'particle_title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the particle title font size.',
                                    'min' => 0
                                ],
                                'particle_title_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'UPPERCASE',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'lowercase'
                                    ]
                                ],
                                'particle_title_font_weight' => [
                                    'type' => 'select.select',
                                    'label' => 'Font weight',
                                    'description' => 'Add one of the following classes to modify the font weight of your text.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'light' => 'Light',
                                        'normal' => 'Normal',
                                        'bold' => 'Bold',
                                        'lighter' => 'Lighter',
                                        'bolder' => 'Bolder'
                                    ]
                                ],
                                'particle_title_element' => [
                                    'type' => 'select.select',
                                    'label' => 'HTML Element',
                                    'description' => 'Choose one of the elements to fit your semantic structure.',
                                    'default' => 'h3',
                                    'options' => [
                                        'h1' => 'h1',
                                        'h2' => 'h2',
                                        'h3' => 'h3',
                                        'h4' => 'h4',
                                        'h5' => 'h5',
                                        'h6' => 'h6',
                                        'div' => 'div'
                                    ]
                                ],
                                'general_content_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'General Particle Settings'
                                ],
                                'align' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Alignment',
                                    'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Breakpoint',
                                    'description' => 'Define the device width from which the alignment will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'fallback' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Fallback',
                                    'description' => 'Define an alignment fallback for device widths below the breakpoint.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'g_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width',
                                    'description' => 'Set the maximum content width.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        '2xlarge' => '2X-Large'
                                    ]
                                ],
                                'g_maxwidth_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Alignment',
                                    'description' => 'Define the alignment in case the container exceeds the element\'s max-width.',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right'
                                    ]
                                ],
                                'g_maxwidth_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Breakpoint',
                                    'description' => 'Define the device width from which the element\'s max-width will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin',
                                    'description' => 'Set the vertical margin.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Keep existing',
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove-vertical' => 'None'
                                    ]
                                ],
                                'visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Visibility',
                                    'description' => 'Display the element only on this device width and larger.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Always',
                                        's' => 'Visible Small (Phone Landscape)',
                                        'm' => 'Visible Medium (Tablet Landscape)',
                                        'l' => 'Visible Large (Desktop)',
                                        'xl' => 'Visible X-Large (Large Screens)',
                                        'hidden-s' => 'Hidden Small (Phone Landscape)',
                                        'hidden-m' => 'Hidden Medium (Tablet Landscape)',
                                        'hidden-l' => 'Hidden Large (Desktop)',
                                        'hidden-xl' => 'Hidden X-Large (Large Screens)'
                                    ]
                                ],
                                'general_animation_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Animation Settings'
                                ],
                                'animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'description' => 'Apply an animation to particles once they enter the viewport. This will animate all particles inside the section.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%',
                                        'parallax' => 'Parallax'
                                    ]
                                ],
                                'animation_delay' => [
                                    'type' => 'input.number',
                                    'label' => 'Animation Delay',
                                    'description' => 'Set the delay animations for particle. Delay time in ms.',
                                    'min' => 0,
                                    'placeholder' => 200
                                ],
                                'animation_repeat' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation Repeat',
                                    'description' => 'Repeat an animation to particle once it enter the viewport.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_parallax_animation' => [
                            'label' => 'Parallax',
                            'overridable' => false,
                            'fields' => [
                                'parallax_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Customize the parallax animation, make sure the animation is set to <i>Parallax</i> in <i>General</i> tab. <a href="https://joomlead.com/gantry-5-particles/particles-documentation/#parallax-settings" target="_blank">Learn more</a>'
                                ],
                                'pa_horizontal_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal Start',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'pa_horizontal_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal End',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'pa_vertical_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical Start',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'pa_vertical_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical End',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'scale_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Scale Start',
                                    'description' => 'Animate the scaling. 100 means 100% scale, 200 means 200% scale, and 50 means 50% scale. Note:Min 50 and Max 200',
                                    'min' => 50,
                                    'max' => 200,
                                    'placeholder' => 100
                                ],
                                'scale_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Scale End',
                                    'description' => 'Animate the scaling. 100 means 100% scale, 200 means 200% scale, and 50 means 50% scale. Note:Min 50 and Max 200',
                                    'min' => 50,
                                    'max' => 200,
                                    'placeholder' => 100
                                ],
                                'rotate_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Rotate Start',
                                    'description' => 'Animate the rotation clockwise in degrees. Note:Min 0 and Max 360',
                                    'min' => 0,
                                    'max' => 360,
                                    'placeholder' => 0
                                ],
                                'rotate_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Rotate End',
                                    'description' => 'Animate the rotation clockwise in degrees. Note:Min 0 and Max 360',
                                    'min' => 0,
                                    'max' => 360,
                                    'placeholder' => 0
                                ],
                                'opacity_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Opacity Start',
                                    'description' => 'Animate the opacity. 100 means 100% opacity, 0 means 0% opacity and 50 means 50%. Note:Min 0 and Max 100',
                                    'min' => 0,
                                    'max' => 100,
                                    'placeholder' => 100
                                ],
                                'opacity_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Opacity End',
                                    'description' => 'Animate the opacity. 100 means 100% opacity, 0 means 0% opacity and 50 means 50%. Note:Min 0 and Max 100',
                                    'min' => 0,
                                    'max' => 100,
                                    'placeholder' => 100
                                ],
                                'easing' => [
                                    'type' => 'input.number',
                                    'label' => 'Easing',
                                    'description' => 'Determine how the speed of the animation behaves over time. A value below 100 is faster in the beginning and slower towards the end while a value above 100 behaves inversely. Min 10 and Max 200',
                                    'min' => 10,
                                    'max' => 200,
                                    'placeholder' => 10
                                ],
                                'pa_viewport' => [
                                    'type' => 'input.number',
                                    'label' => 'Viewport',
                                    'description' => 'Set the animation end point relative to viewport height, e.g. 50 for 50% of the viewport. Min 10 and Max 100',
                                    'min' => 10,
                                    'max' => 100,
                                    'placeholder' => 50
                                ],
                                'pa_z_index' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Z Index',
                                    'description' => 'Set a higher stacking order.',
                                    'default' => false
                                ],
                                'pa_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Breakpoint',
                                    'description' => 'Display the parallax effect only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_parallax' => [
                            'label' => 'Background',
                            'overridable' => false,
                            'fields' => [
                                'parallax_bg_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Customize the background image, add a parallax effect or fix the background with regard to the viewport while scrolling. <a href="https://joomlead.com/gantry-5-particles/particles-documentation/#parallax-background-settings" target="_blank">Learn more</a>'
                                ],
                                'parallax_image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Background Image',
                                    'placeholder' => 'Pick an image'
                                ],
                                'background_image_size' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Size',
                                    'description' => 'Determine whether the image will fit the section dimensions by clipping it or by filling the empty areas with the background color.',
                                    'default' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        'cover' => 'Cover',
                                        'contain' => 'Contain',
                                        'width-1-1' => 'Width 100%',
                                        'height-1-1' => 'Height 100%'
                                    ]
                                ],
                                'background_image_position' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Position',
                                    'description' => 'Set the initial background position, relative to the section layer.',
                                    'default' => 'center-center',
                                    'options' => [
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right',
                                        'center-left' => 'Center Left',
                                        'center-center' => 'Center Center',
                                        'center-right' => 'Center Right',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right'
                                    ]
                                ],
                                'bg_image_effect' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Effect',
                                    'description' => 'Add a parallax effect or fix the background with regard to the viewport while scrolling.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'None',
                                        'parallax' => 'Parallax',
                                        'fixed' => 'Fixed'
                                    ]
                                ],
                                'bg_image_effect_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-warning',
                                    'content' => 'Set the animation while scrolling if the <code>Parallax</code> Image effect is selected.'
                                ],
                                'horizontal_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal Start',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'horizontal_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal End',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'vertical_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical Start',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'vertical_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical End',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'parallax_easing' => [
                                    'type' => 'input.number',
                                    'label' => 'Parallax Easing',
                                    'description' => 'Set the animation easing. Zero transitions at an even speed, a positive value starts off quickly while a negative value starts off slowly. Min -20 Max 20',
                                    'min' => -20,
                                    'max' => 20
                                ],
                                'parallax_bg_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Parallax Breakpoint',
                                    'description' => 'Display the parallax effect only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'parallax_bg_visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Visibility',
                                    'description' => 'Display the image only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'parallax_bg_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background Color',
                                    'description' => 'Use the background color in combination with blend modes, a transparent image or to fill the area, if the image doesn\'t cover the whole section.'
                                ],
                                'blendmode' => [
                                    'type' => 'select.select',
                                    'label' => 'Blend Mode',
                                    'description' => 'Determine how the image will blend with the background color.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Normal',
                                        'multiply' => 'Multiply',
                                        'screen' => 'Screen',
                                        'overlay' => 'Overlay',
                                        'darken' => 'Darken',
                                        'lighten' => 'Lighten',
                                        'color-dodge' => 'Color-dodge',
                                        'color-burn' => 'Color-burn',
                                        'hard-light' => 'Hard-light',
                                        'soft-light' => 'Soft-light',
                                        'difference' => 'Difference',
                                        'exclusion' => 'Exclusion',
                                        'hue' => 'Hue',
                                        'saturation' => 'Saturation',
                                        'color' => 'Color',
                                        'luminosity' => 'Luminosity'
                                    ]
                                ],
                                'parallax_bg_overlay' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Overlay Color',
                                    'description' => 'Set an additional transparent overlay to soften the image.'
                                ],
                                'container_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Container Width',
                                    'description' => 'Remove the container for parent section then use this option to define the container width within the section.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'auto' => 'Auto',
                                        'small' => 'Small',
                                        'large' => 'Large',
                                        'xlarge' => 'XLarge',
                                        'expand' => 'Expand',
                                        'custom' => 'Custom'
                                    ]
                                ],
                                'container_maxwidth_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-warning',
                                    'content' => 'The <code>Large Desktop</code> value from breakpoint\'s configuration will be added automatically if no value is set.'
                                ],
                                'bg_container_width' => [
                                    'type' => 'input.text',
                                    'label' => 'Custom Width',
                                    'description' => 'Define the container width within the section in rem, em, or px unit values.',
                                    'placeholder' => '80rem',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'viewport_height' => [
                                    'type' => 'select.select',
                                    'label' => 'Height',
                                    'description' => 'Enabling viewport height on a section that directly follows the header will subtract the header\'s height from it. On short pages, a section can be expanded to fill the browser window.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'full' => 'Viewport',
                                        'percent' => 'Viewport (Minus 20%)',
                                        'section' => 'Viewport (Minus 50%)',
                                        'expand' => 'Expand'
                                    ]
                                ],
                                'padding' => [
                                    'type' => 'select.select',
                                    'label' => 'Padding',
                                    'description' => 'Set the vertical padding.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'xsmall' => 'X-Small',
                                        'small' => 'Small',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'none' => 'None'
                                    ]
                                ],
                                'vertical_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Vertical Alignment',
                                    'description' => 'Align the section content vertically, if the section height is larger than the content itself.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'Top',
                                        'middle' => 'Middle',
                                        'bottom' => 'Bottom'
                                    ]
                                ],
                                'parallax_text_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Inverse Color',
                                    'description' => 'Set light or dark color mode for text, buttons and controls.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'None',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Paypal Donate <strong>Version: 2.2.1</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/paypal-donate-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
