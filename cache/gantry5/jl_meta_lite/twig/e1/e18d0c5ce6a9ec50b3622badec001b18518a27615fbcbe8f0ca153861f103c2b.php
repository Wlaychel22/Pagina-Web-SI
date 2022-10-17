<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/jlaccordion.html.twig */
class __TwigTemplate_8a6c835e10e4b938120a49eb414f9e5e42c5001dd7495a0dbf68763903219eb8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 39
        $context["title_text_transform"] = (($this->getAttribute(($context["particle"] ?? null), "title_text_transform", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_text_transform", []))) . "")) : (""));
        // line 40
        $context["icon_inverse"] = ((($this->getAttribute(($context["particle"] ?? null), "icon_inverse", []) != "default")) ? (((" jl-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon_inverse", []))) . "")) : (""));
        // line 42
        $context["content_text_transform"] = (($this->getAttribute(($context["particle"] ?? null), "content_text_transform", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_text_transform", []))) . "")) : (""));
        // line 43
        $context["btn_text_transform"] = (($this->getAttribute(($context["particle"] ?? null), "btn_text_transform", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "btn_text_transform", []))) . "")) : (""));
        // line 46
        $context["title_font_weight"] = (($this->getAttribute(($context["particle"] ?? null), "title_font_weight", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_font_weight", []))) . "")) : (""));
        // line 47
        $context["content_font_weight"] = (($this->getAttribute(($context["particle"] ?? null), "content_font_weight", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_font_weight", []))) . "")) : (""));
        // line 48
        $context["btn_font_weight"] = (($this->getAttribute(($context["particle"] ?? null), "btn_font_weight", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "btn_font_weight", []))) . "")) : (""));
        // line 51
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 52
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif (($this->getAttribute(        // line 53
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 54
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif (($this->getAttribute(        // line 55
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 56
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif (($this->getAttribute(        // line 57
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 58
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 62
        if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            // line 63
            $context["padding"] = " jl-section";
        } elseif (($this->getAttribute(        // line 64
($context["particle"] ?? null), "padding", []) == "none")) {
            // line 65
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 67
            $context["padding"] = ((" jl-section jl-section-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []))) . "");
        }
        // line 71
        $context["parallax_bg_color"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) ? ((("style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) . ";\"")) : (""));
        // line 72
        $context["parallax_overlay"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) . ";\"></div>")) : (""));
        // line 75
        ob_start(function () { return ''; });
        // line 76
        if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []) != "inherit")) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []), "html", null, true);
            if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", []), "html", null, true);
            }
            if (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_alignment", []) == "left")) {
            } elseif (($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_alignment", []) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        ob_start(function () { return ''; });
        // line 81
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 82
            $context["bg_container_maxwidth"] = (((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") || ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
            // line 83
            if ((($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax") && (((($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])))) {
                // line 84
                ob_start(function () { return ''; });
                // line 85
                if (($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", []))) {
                    echo "bgx: ";
                    if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []))) {
                        echo "0";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "horizontal_start", []), "html", null, true);
                    }
                    echo ",";
                    if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "horizontal_end", []))) {
                        echo "0";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "horizontal_end", []), "html", null, true);
                    }
                    echo ";";
                }
                $context["parallax_bg_horizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 87
                ob_start(function () { return ''; });
                // line 88
                if (($this->getAttribute(($context["particle"] ?? null), "vertical_start", []) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", []))) {
                    echo "bgy: ";
                    if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "vertical_start", []))) {
                        echo "0";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "vertical_start", []), "html", null, true);
                    }
                    echo ",";
                    if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "vertical_end", []))) {
                        echo "0";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "vertical_end", []), "html", null, true);
                    }
                    echo ";";
                }
                $context["parallax_bg_vertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 90
                $context["parallax_easing"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])) ? ((("easing:" . ($this->getAttribute(($context["particle"] ?? null), "parallax_easing", []) / 10)) . "")) : (""));
                // line 91
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . ((($this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []) != "always")) ? (((" media: @" . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", [])) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 93
            echo "<div data-src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])));
            echo "\" jl-img class=\"jl-wrapper jl-background-norepeat";
            echo (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? (" jl-position-relative") : (""));
            echo ((($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "fixed")) ? (" jl-background-fixed") : (""));
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo " jl-background-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "background_image_position", []));
            if (($this->getAttribute(($context["particle"] ?? null), "background_image_size", []) != "auto")) {
                echo " jl-background-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "background_image_size", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_visibility", []) != "always")) {
                echo " jl-background-image@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_bg_visibility", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "vertical_alignment", []) != "none")) {
                echo " jl-flex jl-flex-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "vertical_alignment", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "parallax_text_color", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "parallax_text_color", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "blendmode", []) != "inherit")) {
                echo " jl-background-blend-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "blendmode", []));
            }
            echo "\" ";
            echo ((array_key_exists("parallax_bg_color", $context)) ? (_twig_default_filter(($context["parallax_bg_color"] ?? null), "")) : (""));
            echo ($context["bgp_animation_cls"] ?? null);
            echo ($context["viewport_height"] ?? null);
            echo ">
";
            // line 94
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        ob_start(function () { return ''; });
        // line 101
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 102
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        ob_start(function () { return ''; });
        // line 110
        if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []))) {
            echo "x: ";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", []), "html", null, true);
            }
            echo ";";
        }
        $context["pahorizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        ob_start(function () { return ''; });
        // line 115
        if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []))) {
            echo "y: ";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", []), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", []), "html", null, true);
            }
            echo ";";
        }
        $context["pavertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        ob_start(function () { return ''; });
        // line 120
        if (($this->getAttribute(($context["particle"] ?? null), "scale_start", []) || $this->getAttribute(($context["particle"] ?? null), "scale_end", []))) {
            echo "scale: ";
            if (($this->getAttribute(($context["particle"] ?? null), "scale_start", []) == "")) {
                echo "1";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "scale_start", []) / 100), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "scale_end", []) == "")) {
                echo "1";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "scale_end", []) / 100), "html", null, true);
            }
            echo ";";
        }
        $context["scale"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 125
            echo "rotate: ";
            if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rotate_start", []), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "rotate_end", []) == "")) {
                echo "0";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rotate_end", []), "html", null, true);
            }
            echo ";";
        }
        $context["rotate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        ob_start(function () { return ''; });
        // line 130
        if (($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) || $this->getAttribute(($context["particle"] ?? null), "opacity_end", []))) {
            echo "opacity: ";
            if (($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) == "")) {
                echo "1";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "opacity_start", []) / 100), "html", null, true);
            }
            echo ",";
            if (($this->getAttribute(($context["particle"] ?? null), "opacity_end", []) == "")) {
                echo "1";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "opacity_end", []) / 100), "html", null, true);
            }
            echo ";";
        }
        $context["opacity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        $context["scrollspy_cls"] = (((($this->getAttribute(($context["particle"] ?? null), "animation", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "animation", []) != "parallax"))) ? (" jl-scrollspy-class") : (""));
        // line 137
        ob_start(function () { return ''; });
        // line 138
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "animation", []) != "parallax"))) {
            echo " jl-scrollspy=\"target: [jl-scrollspy-class]; cls: jl-animation-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation", []));
            echo ";";
            if (($this->getAttribute(($context["particle"] ?? null), "animation_repeat", []) == "enabled")) {
                echo " repeat: true;";
            }
            echo " delay:";
            if ($this->getAttribute(($context["particle"] ?? null), "delay_element_animations", [])) {
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animation_delay", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animation_delay", []), "300")) : ("300")));
                echo ";";
            } else {
                echo "false;";
            }
            echo "\"
";
        } elseif (($this->getAttribute(        // line 139
($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 140
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 141
            if ((((((((((((($this->getAttribute(($context["particle"] ?? null), "pa_horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "pa_horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "scale_start", [])) || $this->getAttribute(($context["particle"] ?? null), "scale_end", [])) || $this->getAttribute(($context["particle"] ?? null), "rotate_start", [])) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", [])) || $this->getAttribute(($context["particle"] ?? null), "opacity_start", [])) || $this->getAttribute(($context["particle"] ?? null), "opacity_end", [])) || $this->getAttribute(($context["particle"] ?? null), "easing", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_viewport", [])) || $this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []))) {
                echo " jl-parallax=\"";
                echo twig_escape_filter($this->env, ($context["pahorizontal"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["pavertical"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["scale"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["rotate"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["opacity"] ?? null), "html", null, true);
                if (($this->getAttribute(($context["particle"] ?? null), "easing", []) == "")) {
                } else {
                    echo "easing: ";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "easing", []) / 100), "html", null, true);
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "pa_viewport", []) != "")) {
                    echo "viewport:";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "pa_viewport", []) / 100), "html", null, true);
                    echo ";";
                }
                if (($this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []) != "always")) {
                    echo "media: @";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "pa_breakpoint", []));
                }
                echo "\"";
            }
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        ob_start(function () { return ''; });
        // line 147
        if (($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "align", []));
            if (($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint", []));
            }
        }
        if ((($this->getAttribute(($context["particle"] ?? null), "align", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "breakpoint", []) != "always"))) {
            if (($this->getAttribute(($context["particle"] ?? null), "fallback", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fallback", []));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        ob_start(function () { return ''; });
        // line 152
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 153
            echo "<";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo " id=\"el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-title";
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_align", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_align", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_predefined_color", []) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_predefined_color", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_style", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_style", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []));
            }
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_text_transform", [])) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_text_transform", []));
            }
            if ($this->getAttribute(($context["particle"] ?? null), "particle_title_font_weight", [])) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_font_weight", []));
            }
            echo "\">
";
            // line 154
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 155
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 157
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        $context["multiple"] = (($this->getAttribute(($context["particle"] ?? null), "multiple", [])) ? ("multiple: 1;") : (""));
        // line 162
        $context["collapsible"] = (($this->getAttribute(($context["particle"] ?? null), "closed", [])) ? ("collapsible: true;") : ("collapsible: false;"));
        // line 165
        if (($this->getAttribute(($context["particle"] ?? null), "link_button_size", []) != "default")) {
            // line 166
            $context["button_size"] = ((" jl-button-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link_button_size", []))) . "");
        }
        // line 170
        if (((($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link") || ($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link-muted")) || ($this->getAttribute(($context["particle"] ?? null), "buttonclass", []) == "link-text"))) {
            // line 171
            $context["button_cls"] = (((("jl-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []))) . ($context["btn_font_weight"] ?? null)) . ($context["btn_text_transform"] ?? null)) . "");
        } else {
            // line 173
            $context["button_cls"] = ((((("jl-button jl-button-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []))) . ($context["button_size"] ?? null)) . ($context["btn_font_weight"] ?? null)) . ($context["btn_text_transform"] ?? null)) . "");
        }
        // line 177
        $context["image_width"] = (($this->getAttribute(($context["particle"] ?? null), "image_width", [])) ? (((" width=\"" . $this->getAttribute(($context["particle"] ?? null), "image_width", [])) . "\"")) : (""));
        // line 178
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? (((" height=\"" . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 181
        $context["img_border_cls"] = ((($this->getAttribute(($context["particle"] ?? null), "border", []) != "none")) ? (((" jl-border-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "border", []))) . "")) : (""));
        // line 182
        $context["img_box_shadow"] = ((($this->getAttribute(($context["particle"] ?? null), "box_shadow", []) != "none")) ? (((" jl-box-shadow-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow", []))) . "")) : (""));
        // line 184
        if ((($this->getAttribute(($context["particle"] ?? null), "image_alignment", []) == "bottom") || ($this->getAttribute(($context["particle"] ?? null), "image_alignment", []) == "between"))) {
            // line 185
            $context["img_margin_top"] = (" jl-margin" . ((($this->getAttribute(($context["particle"] ?? null), "image_margin_top", []) != "default")) ? ((("-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_margin_top", []))) . "-top")) : ("-top")));
        }
        // line 189
        if (($this->getAttribute(($context["particle"] ?? null), "image_grid_column_gap", []) == $this->getAttribute(($context["particle"] ?? null), "image_grid_row_gap", []))) {
            // line 190
            $context["image_c_gap"] = (((($this->getAttribute(($context["particle"] ?? null), "image_grid_column_gap", []) != "default") && ($this->getAttribute(($context["particle"] ?? null), "image_grid_row_gap", []) != "default"))) ? (((" jl-grid-" . $this->getAttribute(($context["particle"] ?? null), "image_grid_column_gap", [])) . "")) : (""));
        } else {
            // line 192
            $context["image_c_gap"] = ((($this->getAttribute(($context["particle"] ?? null), "image_grid_column_gap", []) != "default")) ? (((" jl-grid-column-" . $this->getAttribute(($context["particle"] ?? null), "image_grid_column_gap", [])) . "")) : (""));
            // line 193
            $context["image_r_gap"] = ((($this->getAttribute(($context["particle"] ?? null), "image_grid_row_gap", []) != "default")) ? (((" jl-grid-row-" . $this->getAttribute(($context["particle"] ?? null), "image_grid_row_gap", [])) . "")) : (""));
        }
        // line 196
        $context["image_grid_cr_gap"] = (($context["image_c_gap"] ?? null) . ($context["image_r_gap"] ?? null));
        // line 198
        $context["content_style"] = ((($this->getAttribute(($context["particle"] ?? null), "content_style", []) != "default")) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_style", []))) . "")) : (""));
        // line 199
        $context["content_dropcap"] = (($this->getAttribute(($context["particle"] ?? null), "content_dropcap", [])) ? (" jl-dropcap") : (""));
        // line 200
        ob_start(function () { return ''; });
        // line 201
        if ($this->getAttribute(($context["particle"] ?? null), "content_column", [])) {
            echo " jl-column-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_column", []));
            if ($this->getAttribute(($context["particle"] ?? null), "content_column_breakpoint", [])) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_column_breakpoint", []));
            }
            if ($this->getAttribute(($context["particle"] ?? null), "content_column_divider", [])) {
                echo " jl-column-divider";
            }
        }
        $context["content_column"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        $context["content_margin"] = (" jl-margin-" . ((($this->getAttribute(($context["particle"] ?? null), "content_margin_top", []) == "default")) ? ("top") : ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_margin_top", [])) . "-top"))));
        // line 205
        $context["img_grid_breakpoint"] = ((($this->getAttribute(($context["particle"] ?? null), "image_grid_breakpoint", []) != "default")) ? (("@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_grid_breakpoint", [])))) : (""));
        // line 206
        $context["link_image_transition"] = ((($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none")) ? (" jl-transition-toggle") : (""));
        // line 209
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 210
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : (((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"])) . "")));
        }
        // line 214
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 215
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlaccordion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        if ((((((((((((($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "title_color", [])) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "subtitle_color", [])) || $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "title_padding", [])) || $this->getAttribute(($context["particle"] ?? null), "title_background_color", [])) || $this->getAttribute(($context["particle"] ?? null), "content_background_color", [])) || $this->getAttribute(($context["particle"] ?? null), "content_padding", [])) || $this->getAttribute(($context["particle"] ?? null), "icon_alignment", [])) || $this->getAttribute(($context["particle"] ?? null), "icon_type", [])) || (($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", []))))) {
            // line 5
            echo "<style>
";
            // line 6
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
                // line 7
                echo "#el-";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo ".g5-title { ";
                if ($this->getAttribute(($context["particle"] ?? null), "particle_title_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_color", []), "html", null, true);
                    echo ";";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 9
            if ((($this->getAttribute(($context["particle"] ?? null), "title_color", []) || $this->getAttribute(($context["particle"] ?? null), "title_background_color", [])) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", []))) {
                // line 10
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-accordion-title { ";
                if ($this->getAttribute(($context["particle"] ?? null), "title_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_color", []), "html", null, true);
                    echo "; ";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "title_fontsize", [])) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_fontsize", []), "html", null, true);
                    echo "px;";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "title_background_color", [])) {
                    echo "background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_background_color", []), "html", null, true);
                    echo "; ";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "title_padding", [])) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_padding", []), "html", null, true);
                    echo "px; ";
                }
                echo " }
";
            }
            // line 12
            if ((($this->getAttribute(($context["particle"] ?? null), "subtitle_color", []) || $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "content_background_color", []))) {
                // line 13
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-accordion-content .tm-content { ";
                if ($this->getAttribute(($context["particle"] ?? null), "subtitle_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "subtitle_color", []), "html", null, true);
                    echo "; ";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", [])) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", []), "html", null, true);
                    echo "px;";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "content_background_color", [])) {
                    echo "background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_background_color", []), "html", null, true);
                    echo "; ";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "content_padding", [])) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_padding", []), "html", null, true);
                    echo "px;";
                }
                echo " }
";
                // line 14
                if ($this->getAttribute(($context["particle"] ?? null), "remove_spacing", [])) {
                    echo ".";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " .jl-accordion-content { margin-top: 0;}";
                }
            }
            // line 16
            if ($this->getAttribute(($context["particle"] ?? null), "icon_alignment", [])) {
                // line 17
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-accordion-title::before {margin-right: 8px; margin-left: -8px;float: left;}
";
            }
            // line 19
            if ($this->getAttribute(($context["particle"] ?? null), "icon_type", [])) {
                // line 20
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-accordion-title::before { background-image: url(\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23666%22%20stroke-width%3D%221.1%22%20points%3D%2210%201%204%207%2010%2013%22%20%2F%3E%0A%3C%2Fsvg%3E\");}
.";
                // line 21
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-open>.jl-accordion-title::before { background-image: url(\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2214%22%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%20%20%20%20%3Cpolyline%20fill%3D%22none%22%20stroke%3D%22%23666%22%20stroke-width%3D%221.1%22%20points%3D%221%204%207%2010%2013%204%22%20%2F%3E%0A%3C%2Fsvg%3E\");}
";
            }
            // line 23
            if ((($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", [])))) {
                // line 24
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bg_container_width", []));
                echo ";
}
";
            }
            // line 28
            echo "</style>
";
        }
    }

    // line 32
    public function block_javascript($context, array $blocks = [])
    {
        // line 33
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax") || ($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax"))) {
            // line 34
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 218
    public function block_particle($context, array $blocks = [])
    {
        // line 219
        if (($this->getAttribute(($context["particle"] ?? null), "enabled", []) && $this->getAttribute(($context["particle"] ?? null), "accordion", []))) {
            // line 220
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 221
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"";
            // line 222
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["visibility"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo " jl-accordion\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo " jl-accordion=\"";
            echo twig_escape_filter($this->env, (($context["collapsible"] ?? null) . ($context["multiple"] ?? null)), "html", null, true);
            echo "\">

";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "accordion", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 225
                echo "
";
                // line 227
                $context["linkscroll"] = (((preg_match("/#/", twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonlink", []))) && ($this->getAttribute(($context["particle"] ?? null), "buttontarget", []) != "_blank"))) ? (" jl-scroll") : (""));
                // line 228
                echo "
";
                // line 230
                $context["img_link"] = ( !twig_test_empty($this->getAttribute($context["item"], "buttonlink", [])) && $this->getAttribute(($context["particle"] ?? null), "link_image", []));
                // line 231
                $context["check_img_transition"] = (($context["img_link"] ?? null) && ($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none"));
                // line 232
                $context["image_transition"] = (((($context["img_link"] ?? null) && ($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none"))) ? (((" jl-transition-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_transition", []))) . " jl-transition-opaque")) : (""));
                // line 233
                $context["img_box_shadow_hover"] = (((($context["img_link"] ?? null) && ($this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []) != "none"))) ? (((" jl-box-shadow-hover-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []))) . "")) : (""));
                // line 234
                echo "
";
                // line 236
                ob_start(function () { return ''; });
                // line 237
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 238
                    if (($this->getAttribute($context["item"], "buttonlink", []) && $this->getAttribute(($context["particle"] ?? null), "link_image", []))) {
                        // line 239
                        echo "<a class=\"jl-display-block\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonlink", []));
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "buttontarget", []), "_self")) : ("_self")));
                        echo "\"";
                        echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                        echo ">
";
                    }
                    // line 241
                    if ((($context["img_link"] ?? null) && ($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none"))) {
                        // line 242
                        echo "<div class=\"jl-inline-clip";
                        echo twig_escape_filter($this->env, ((((($context["link_image_transition"] ?? null) . ($context["img_border_cls"] ?? null)) . ($context["img_box_shadow"] ?? null)) . ($context["img_box_shadow_hover"] ?? null)) . ($context["img_margin_top"] ?? null)), "html", null, true);
                        echo "\">
";
                    }
                    // line 244
                    echo "<img";
                    echo ($context["image_width"] ?? null);
                    echo ($context["image_height"] ?? null);
                    echo " class=\"tm-image";
                    echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
                    if ((($context["check_img_transition"] ?? null) == false)) {
                        echo twig_escape_filter($this->env, (((($context["img_border_cls"] ?? null) . ($context["img_box_shadow"] ?? null)) . ($context["img_box_shadow_hover"] ?? null)) . ($context["img_margin_top"] ?? null)), "html", null, true);
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                    echo "\"";
                    if ($this->getAttribute($context["item"], "image_alt", [])) {
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image_alt", []));
                        echo "\"";
                    }
                    echo ">
";
                    // line 245
                    echo (((($context["img_link"] ?? null) && ($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none"))) ? ("</div>") : (""));
                    echo "
";
                    // line 246
                    echo ((($this->getAttribute($context["item"], "buttonlink", []) && $this->getAttribute(($context["particle"] ?? null), "link_image", []))) ? ("</a>") : (""));
                    echo "
";
                }
                $context["item_image"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 249
                echo "
";
                // line 250
                ob_start(function () { return ''; });
                // line 251
                if ($this->getAttribute($context["item"], "content", [])) {
                    // line 252
                    echo "    <div class=\"tm-content jl-panel";
                    echo twig_escape_filter($this->env, (((((($context["content_style"] ?? null) . ($context["content_dropcap"] ?? null)) . ($context["content_column"] ?? null)) . ($context["content_text_transform"] ?? null)) . ($context["content_font_weight"] ?? null)) . ($context["content_margin"] ?? null)), "html", null, true);
                    echo "\">
      ";
                    // line 253
                    $context["content"] = (($this->getAttribute(($context["particle"] ?? null), "twig", [])) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "compile", [0 => $this->getAttribute($context["item"], "content", [])], "method")) : ($this->getAttribute($context["item"], "content", [])));
                    // line 254
                    echo "      ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter((($this->getAttribute(($context["particle"] ?? null), "filter", [])) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "filter", [0 => $this->getAttribute($context["item"], "content", [])], "method")) : ($this->getAttribute($context["item"], "content", []))));
                    echo "
    </div>
 ";
                }
                $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 258
                echo "
";
                // line 260
                ob_start(function () { return ''; });
                // line 261
                echo "  ";
                if (($this->getAttribute($context["item"], "buttonlink", []) && $this->getAttribute(($context["particle"] ?? null), "buttontext", []))) {
                    // line 262
                    echo "    <div class=\"jl-margin-";
                    ((($this->getAttribute(($context["particle"] ?? null), "link_margin_top", []) == "default")) ? (print ("top")) : (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link_margin_top", [])) . "-top"), "html", null, true))));
                    echo "\">
      <a class=\"";
                    // line 263
                    echo twig_escape_filter($this->env, ($context["button_cls"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonlink", []));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "buttontarget", []), "_self")) : ("_self")));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
                    echo "\"";
                    echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                    echo ">
        ";
                    // line 264
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
                    echo "
      </a>
    </div>
  ";
                }
                $context["item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 269
                echo "
<div class=\"tm-item";
                // line 270
                if ($this->getAttribute($context["item"], "item_class", [])) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "item_class", []), "html", null, true);
                }
                echo twig_escape_filter($this->env, ($context["icon_inverse"] ?? null), "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, ($context["scrollspy_cls"] ?? null), "html", null, true);
                echo ">

  <a class=\"jl-accordion-title";
                // line 272
                echo twig_escape_filter($this->env, (($context["title_font_weight"] ?? null) . ($context["title_text_transform"] ?? null)), "html", null, true);
                echo "\" href=\"#\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
  
  <div class=\"jl-accordion-content jl-margin-remove-first-child\">

  ";
                // line 276
                if ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "image_alignment", []), [0 => "left", 1 => "right"]) && $this->getAttribute($context["item"], "image", []))) {
                    // line 277
                    echo "  <div class=\"jl-child-width-expand";
                    echo twig_escape_filter($this->env, ($context["image_grid_cr_gap"] ?? null), "html", null, true);
                    echo (($this->getAttribute(($context["particle"] ?? null), "image_vertical_alignment", [])) ? (" jl-flex-middle") : (""));
                    echo "\" jl-grid>
    <div class=\"jl-width-";
                    // line 278
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["particle"] ?? null), "image_grid_width", []) . ($context["img_grid_breakpoint"] ?? null)), "html", null, true);
                    ((($this->getAttribute(($context["particle"] ?? null), "image_alignment", []) == "right")) ? (print (twig_escape_filter($this->env, (" jl-flex-last" . ($context["img_grid_breakpoint"] ?? null)), "html", null, true))) : (print ("")));
                    echo "\">
  ";
                }
                // line 280
                echo "
    ";
                // line 281
                if ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "image_alignment", []), [0 => "left", 1 => "right", 2 => "top"]) && $this->getAttribute($context["item"], "image", []))) {
                    // line 282
                    echo "      ";
                    echo twig_escape_filter($this->env, ($context["item_image"] ?? null), "html", null, true);
                    echo "
    ";
                }
                // line 284
                echo "
    ";
                // line 285
                if ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "image_alignment", []), [0 => "left", 1 => "right"]) && $this->getAttribute($context["item"], "image", []))) {
                    // line 286
                    echo "        </div>
        <div class=\"jl-margin-remove-first-child\">
    ";
                }
                // line 289
                echo "
    ";
                // line 290
                echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
                echo "

    ";
                // line 292
                if (($this->getAttribute(($context["particle"] ?? null), "image_alignment", []) == "between")) {
                    // line 293
                    echo "      ";
                    echo twig_escape_filter($this->env, ($context["item_image"] ?? null), "html", null, true);
                    echo "
    ";
                }
                // line 295
                echo "
    ";
                // line 296
                echo twig_escape_filter($this->env, ($context["item_button"] ?? null), "html", null, true);
                echo "

    ";
                // line 298
                if (($this->getAttribute(($context["particle"] ?? null), "image_alignment", []) == "bottom")) {
                    // line 299
                    echo "      ";
                    echo twig_escape_filter($this->env, ($context["item_image"] ?? null), "html", null, true);
                    echo "
    ";
                }
                // line 301
                echo "
  ";
                // line 302
                if ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "image_alignment", []), [0 => "left", 1 => "right"]) && $this->getAttribute($context["item"], "image", []))) {
                    // line 303
                    echo "    </div>
  </div>
  ";
                }
                // line 306
                echo "
  </div>

</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            echo "
</div>
";
            // line 313
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlaccordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  929 => 313,  925 => 311,  915 => 306,  910 => 303,  908 => 302,  905 => 301,  899 => 299,  897 => 298,  892 => 296,  889 => 295,  883 => 293,  881 => 292,  876 => 290,  873 => 289,  868 => 286,  866 => 285,  863 => 284,  857 => 282,  855 => 281,  852 => 280,  846 => 278,  840 => 277,  838 => 276,  829 => 272,  818 => 270,  815 => 269,  807 => 264,  795 => 263,  790 => 262,  787 => 261,  785 => 260,  782 => 258,  774 => 254,  772 => 253,  767 => 252,  765 => 251,  763 => 250,  760 => 249,  754 => 246,  750 => 245,  731 => 244,  725 => 242,  723 => 241,  713 => 239,  711 => 238,  709 => 237,  707 => 236,  704 => 234,  702 => 233,  700 => 232,  698 => 231,  696 => 230,  693 => 228,  691 => 227,  688 => 225,  684 => 224,  671 => 222,  667 => 221,  663 => 220,  661 => 219,  658 => 218,  650 => 34,  648 => 33,  645 => 32,  639 => 28,  633 => 25,  628 => 24,  626 => 23,  621 => 21,  616 => 20,  614 => 19,  608 => 17,  606 => 16,  599 => 14,  573 => 13,  571 => 12,  544 => 10,  542 => 9,  525 => 7,  523 => 6,  520 => 5,  518 => 4,  515 => 3,  510 => 1,  507 => 215,  505 => 214,  502 => 210,  500 => 209,  498 => 206,  496 => 205,  494 => 204,  481 => 201,  479 => 200,  477 => 199,  475 => 198,  473 => 196,  470 => 193,  468 => 192,  465 => 190,  463 => 189,  460 => 185,  458 => 184,  456 => 182,  454 => 181,  452 => 178,  450 => 177,  447 => 173,  444 => 171,  442 => 170,  439 => 166,  437 => 165,  435 => 162,  433 => 161,  426 => 157,  420 => 155,  413 => 154,  381 => 153,  379 => 152,  377 => 151,  361 => 147,  359 => 146,  332 => 141,  330 => 140,  328 => 139,  311 => 138,  309 => 137,  307 => 134,  290 => 130,  288 => 129,  272 => 125,  269 => 124,  251 => 120,  249 => 119,  232 => 115,  230 => 114,  213 => 110,  211 => 109,  204 => 102,  202 => 101,  200 => 100,  192 => 95,  188 => 94,  153 => 93,  150 => 91,  148 => 90,  131 => 88,  129 => 87,  112 => 85,  110 => 84,  108 => 83,  106 => 82,  104 => 81,  102 => 80,  86 => 76,  84 => 75,  82 => 72,  80 => 71,  77 => 67,  74 => 65,  72 => 64,  70 => 63,  68 => 62,  65 => 58,  63 => 57,  61 => 56,  59 => 55,  57 => 54,  55 => 53,  53 => 52,  51 => 51,  49 => 48,  47 => 47,  45 => 46,  43 => 43,  41 => 42,  39 => 40,  37 => 39,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlaccordion.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jlaccordion.html.twig");
    }
}
