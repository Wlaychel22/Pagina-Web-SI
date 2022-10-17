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

/* @particles/jlimage.html.twig */
class __TwigTemplate_55a9b4e34aff994c2f52c60279e8b16ad1162fd3bf570a10758d96a9db819141 extends \Twig\Template
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
        // line 25
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 26
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif (($this->getAttribute(        // line 27
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 28
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif (($this->getAttribute(        // line 29
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 30
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif (($this->getAttribute(        // line 31
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 32
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 36
        if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            // line 37
            $context["padding"] = " jl-section";
        } elseif (($this->getAttribute(        // line 38
($context["particle"] ?? null), "padding", []) == "none")) {
            // line 39
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 41
            $context["padding"] = ((" jl-section jl-section-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []))) . "");
        }
        // line 45
        $context["parallax_bg_color"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) ? ((("style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) . ";\"")) : (""));
        // line 46
        $context["parallax_overlay"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) . ";\"></div>")) : (""));
        // line 49
        ob_start(function () { return ''; });
        // line 50
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
        // line 54
        ob_start(function () { return ''; });
        // line 55
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 56
            $context["bg_container_maxwidth"] = (((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") || ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
            // line 57
            if ((($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax") && (((($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])))) {
                // line 58
                ob_start(function () { return ''; });
                // line 59
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
                // line 61
                ob_start(function () { return ''; });
                // line 62
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
                // line 64
                $context["parallax_easing"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])) ? ((("easing:" . ($this->getAttribute(($context["particle"] ?? null), "parallax_easing", []) / 10)) . "")) : (""));
                // line 65
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . ((($this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []) != "always")) ? (((" media: @" . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", [])) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 67
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
            // line 68
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        ob_start(function () { return ''; });
        // line 75
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 76
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        ob_start(function () { return ''; });
        // line 84
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
        // line 88
        ob_start(function () { return ''; });
        // line 89
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
        // line 93
        ob_start(function () { return ''; });
        // line 94
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
        // line 98
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 99
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
        // line 103
        ob_start(function () { return ''; });
        // line 104
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
        // line 108
        ob_start(function () { return ''; });
        // line 109
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) != "inherit") && ($this->getAttribute(($context["particle"] ?? null), "animation", []) != "parallax"))) {
            echo " jl-scrollspy=\"cls: jl-animation-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation", []));
            echo ";";
            if (($this->getAttribute(($context["particle"] ?? null), "animation_repeat", []) == "enabled")) {
                echo " repeat: true;";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "animation_delay", [])) {
                echo " delay: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animation_delay", []));
                echo ";";
            }
            echo "\"
";
        } elseif (($this->getAttribute(        // line 110
($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 111
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 112
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
        // line 117
        ob_start(function () { return ''; });
        // line 118
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
        // line 122
        ob_start(function () { return ''; });
        // line 123
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 124
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
            // line 125
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 126
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 128
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        $context["linkscroll"] = (((preg_match("/#/", twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []))) && ($this->getAttribute(($context["particle"] ?? null), "target", []) == "_self"))) ? (" jl-scroll") : (""));
        // line 135
        $context["extra_shadow"] = ((((twig_test_empty($this->getAttribute(($context["particle"] ?? null), "link", [])) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "image_popup", []))) && $this->getAttribute(($context["particle"] ?? null), "extra_shadow", []))) ? (" jl-box-shadow-bottom") : (""));
        // line 138
        $context["image_width"] = (($this->getAttribute(($context["particle"] ?? null), "image_width", [])) ? (((" width=\"" . $this->getAttribute(($context["particle"] ?? null), "image_width", [])) . "\"")) : (""));
        // line 139
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? (((" height=\"" . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 142
        $context["image_transition"] = ((($this->getAttribute(($context["particle"] ?? null), "image_transition", []) && ($this->getAttribute(($context["particle"] ?? null), "link", []) || $this->getAttribute(($context["particle"] ?? null), "image_popup", [])))) ? (((" jl-transition-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_transition", []))) . " jl-transition-opaque")) : (""));
        // line 143
        $context["image_border_cls"] = ((($this->getAttribute(($context["particle"] ?? null), "border", []) != "none")) ? (((" jl-border-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "border", []))) . "")) : (""));
        // line 144
        $context["img_boxshadow"] = ((($this->getAttribute(($context["particle"] ?? null), "box_shadow", []) != "none")) ? (((" jl-box-shadow-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow", []))) . "")) : (""));
        // line 145
        $context["img_boxshadow_hover"] = (((($this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []) != "none") && $this->getAttribute(($context["particle"] ?? null), "link", []))) ? (((" jl-box-shadow-hover-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []))) . "")) : (""));
        // line 148
        $context["link_transition"] = ((($this->getAttribute(($context["particle"] ?? null), "link", []) || $this->getAttribute(($context["particle"] ?? null), "image_transition", []))) ? (" jl-inline-clip jl-transition-toggle") : (""));
        // line 151
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 152
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : (((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"])) . "")));
        }
        // line 156
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 157
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlimage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        if ((($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) || (($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", []))))) {
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
                    echo " font-size: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 9
            if ((($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", [])))) {
                // line 10
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bg_container_width", []));
                echo ";
}
";
            }
            // line 14
            echo "</style>
";
        }
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        // line 19
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax") || ($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax"))) {
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 160
    public function block_particle($context, array $blocks = [])
    {
        // line 161
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 162
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 163
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div id=\"";
            // line 164
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ((((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["extra_shadow"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
  
  ";
            // line 166
            if (($this->getAttribute(($context["particle"] ?? null), "link", []) || ($this->getAttribute(($context["particle"] ?? null), "target", []) == "modal"))) {
                // line 167
                echo "    <a class=\"tm-link";
                echo (($this->getAttribute(($context["particle"] ?? null), "extra_shadow", [])) ? (" jl-box-shadow-bottom") : (""));
                echo twig_escape_filter($this->env, (((($context["image_border_cls"] ?? null) . ($context["img_boxshadow"] ?? null)) . ($context["img_boxshadow_hover"] ?? null)) . ($context["link_transition"] ?? null)), "html", null, true);
                echo "\"";
                if (($this->getAttribute(($context["particle"] ?? null), "target", []) == "modal")) {
                    echo " href=\"#";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" jl-toggle";
                } else {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")));
                    echo "\"";
                    echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                }
                echo ">
  ";
            }
            // line 169
            echo "
  <img";
            // line 170
            echo ($context["image_width"] ?? null);
            echo ($context["image_height"] ?? null);
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_alt", []));
            echo "\" class=\"tm-image";
            echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
            if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "link", []))) {
                echo twig_escape_filter($this->env, ($context["image_border_cls"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["img_boxshadow"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["img_boxshadow_hover"] ?? null), "html", null, true);
            }
            echo "\">

  ";
            // line 172
            if (($this->getAttribute(($context["particle"] ?? null), "link", []) || ($this->getAttribute(($context["particle"] ?? null), "target", []) == "modal"))) {
                // line 173
                echo "    </a>
  ";
            }
            // line 175
            echo "
  ";
            // line 176
            if (($this->getAttribute(($context["particle"] ?? null), "target", []) == "modal")) {
                // line 177
                echo "  <div id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-flex-top jl-modal\" jl-modal>
    <div class=\"jl-modal-dialog";
                // line 178
                if (($this->getAttribute(($context["particle"] ?? null), "md_title", []) || $this->getAttribute(($context["particle"] ?? null), "md_content", []))) {
                    echo " jl-modal-body";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "center_modal", [])) {
                    echo " jl-margin-auto-vertical";
                }
                echo "\">
    <button class=\"jl-modal-close-";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "close_button", []), "html", null, true);
                echo "\" type=\"button\" jl-close></button>
      ";
                // line 180
                if (($this->getAttribute(($context["particle"] ?? null), "md_title", []) || $this->getAttribute(($context["particle"] ?? null), "md_content", []))) {
                    // line 181
                    echo "\t\t\t";
                    if ($this->getAttribute(($context["particle"] ?? null), "md_title", [])) {
                        // line 182
                        echo "\t\t\t<";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_element", []));
                        echo " class=\"jl-modal-title";
                        if (($this->getAttribute(($context["particle"] ?? null), "title_color", []) != "default")) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_color", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "title_style", []) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_style", []));
                        }
                        if (($this->getAttribute(($context["particle"] ?? null), "title_decoration", []) != "none")) {
                            echo " jl-heading-";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_decoration", []));
                        }
                        echo "\">
\t\t\t";
                        // line 183
                        if (($this->getAttribute(($context["particle"] ?? null), "title_decoration", []) == "line")) {
                            echo " <span>";
                            echo $this->getAttribute(($context["particle"] ?? null), "md_title", []);
                            echo "</span>
\t\t\t";
                        } else {
                            // line 185
                            echo "\t\t\t";
                            echo $this->getAttribute(($context["particle"] ?? null), "md_title", []);
                            echo "
\t\t\t";
                        }
                        // line 187
                        echo "\t\t\t</";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_element", []));
                        echo ">
\t\t\t";
                    }
                    // line 189
                    echo "\t\t\t<div class=\"jl-margin-";
                    ((($this->getAttribute(($context["particle"] ?? null), "content_margin_top", []) == "default")) ? (print ("top")) : (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_margin_top", [])) . "-top"), "html", null, true))));
                    if (($this->getAttribute(($context["particle"] ?? null), "content_style", []) != "default")) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_style", []));
                    }
                    echo "\">
        ";
                    // line 190
                    $context["md_content"] = (($this->getAttribute(($context["particle"] ?? null), "twig", [])) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "compile", [0 => $this->getAttribute(($context["particle"] ?? null), "md_content", [])], "method")) : ($this->getAttribute(($context["particle"] ?? null), "md_content", [])));
                    // line 191
                    echo "        ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter((($this->getAttribute(($context["particle"] ?? null), "filter", [])) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "filter", [0 => ($context["md_content"] ?? null)], "method")) : (($context["md_content"] ?? null))));
                    echo "
\t\t\t</div>
      ";
                } else {
                    // line 194
                    echo "      <img class=\"tm-image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_alt", []));
                    echo "\">
  ";
                }
                // line 196
                echo "    </div>
    </div>
  ";
            }
            // line 199
            echo "
</div>
";
            // line 201
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 201,  677 => 199,  672 => 196,  664 => 194,  657 => 191,  655 => 190,  646 => 189,  640 => 187,  634 => 185,  627 => 183,  609 => 182,  606 => 181,  604 => 180,  600 => 179,  591 => 178,  586 => 177,  584 => 176,  581 => 175,  577 => 173,  575 => 172,  558 => 170,  555 => 169,  535 => 167,  533 => 166,  520 => 164,  516 => 163,  512 => 162,  510 => 161,  507 => 160,  499 => 20,  497 => 19,  494 => 18,  488 => 14,  482 => 11,  477 => 10,  475 => 9,  458 => 7,  456 => 6,  453 => 5,  451 => 4,  448 => 3,  443 => 1,  440 => 157,  438 => 156,  435 => 152,  433 => 151,  431 => 148,  429 => 145,  427 => 144,  425 => 143,  423 => 142,  421 => 139,  419 => 138,  417 => 135,  415 => 133,  408 => 128,  402 => 126,  395 => 125,  363 => 124,  361 => 123,  359 => 122,  343 => 118,  341 => 117,  314 => 112,  312 => 111,  310 => 110,  295 => 109,  293 => 108,  276 => 104,  274 => 103,  258 => 99,  255 => 98,  237 => 94,  235 => 93,  218 => 89,  216 => 88,  199 => 84,  197 => 83,  190 => 76,  188 => 75,  186 => 74,  178 => 69,  174 => 68,  139 => 67,  136 => 65,  134 => 64,  117 => 62,  115 => 61,  98 => 59,  96 => 58,  94 => 57,  92 => 56,  90 => 55,  88 => 54,  72 => 50,  70 => 49,  68 => 46,  66 => 45,  63 => 41,  60 => 39,  58 => 38,  56 => 37,  54 => 36,  51 => 32,  49 => 31,  47 => 30,  45 => 29,  43 => 28,  41 => 27,  39 => 26,  37 => 25,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlimage.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jlimage.html.twig");
    }
}
