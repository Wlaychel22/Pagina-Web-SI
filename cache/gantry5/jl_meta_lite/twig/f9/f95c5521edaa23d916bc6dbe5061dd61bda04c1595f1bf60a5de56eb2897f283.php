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

/* @particles/jlanimatedtext.html.twig */
class __TwigTemplate_8d6aa1c19ba706f97c929d0535044c5e151e2b63a5f4fb18d23e97f4dc66dc31 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 32
        $context["title_text_transform"] = (($this->getAttribute(($context["particle"] ?? null), "title_text_transform", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_text_transform", []))) . "")) : (""));
        // line 33
        $context["title_text_color"] = ((($this->getAttribute(($context["particle"] ?? null), "title_text_color", []) != "default")) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_text_color", []))) . "")) : (""));
        // line 34
        $context["title_font_weight"] = (($this->getAttribute(($context["particle"] ?? null), "title_font_weight", [])) ? ((("jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_font_weight", []))) . "")) : (""));
        // line 35
        $context["sub_text_color"] = ((($this->getAttribute(($context["particle"] ?? null), "sub_text_color", []) != "default")) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "sub_text_color", []))) . "")) : (""));
        // line 36
        $context["subtitle_style"] = ((($this->getAttribute(($context["particle"] ?? null), "subtitle_style", []) != "default")) ? (((" jl-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "subtitle_style", []))) . "")) : (""));
        // line 40
        $context["container_maxwidth"] = ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) != "default")) ? ((("jl-container jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []))) . "")) : ("jl-container"));
        // line 43
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 44
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif (($this->getAttribute(        // line 45
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 46
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif (($this->getAttribute(        // line 47
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 48
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif (($this->getAttribute(        // line 49
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 50
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 54
        if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            // line 55
            $context["padding"] = " jl-section";
        } elseif (($this->getAttribute(        // line 56
($context["particle"] ?? null), "padding", []) == "none")) {
            // line 57
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 59
            $context["padding"] = ((" jl-section jl-section-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []))) . "");
        }
        // line 63
        $context["parallax_bg_color"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) ? ((("style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) . ";\"")) : (""));
        // line 64
        $context["parallax_overlay"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) . ";\"></div>")) : (""));
        // line 67
        ob_start(function () { return ''; });
        // line 68
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
        // line 72
        ob_start(function () { return ''; });
        // line 73
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 74
            $context["bg_container_maxwidth"] = (((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") || ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
            // line 75
            if ((($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax") && (((($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])))) {
                // line 76
                ob_start(function () { return ''; });
                // line 77
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
                // line 79
                ob_start(function () { return ''; });
                // line 80
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
                // line 82
                $context["parallax_easing"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])) ? ((("easing:" . ($this->getAttribute(($context["particle"] ?? null), "parallax_easing", []) / 10)) . "")) : (""));
                // line 83
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . ((($this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []) != "always")) ? (((" media: @" . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", [])) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 85
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
            // line 86
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 87
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        ob_start(function () { return ''; });
        // line 93
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 94
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        ob_start(function () { return ''; });
        // line 102
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
        // line 106
        ob_start(function () { return ''; });
        // line 107
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
        // line 111
        ob_start(function () { return ''; });
        // line 112
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
        // line 116
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 117
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
        // line 121
        ob_start(function () { return ''; });
        // line 122
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
        // line 126
        ob_start(function () { return ''; });
        // line 127
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
        } elseif (($this->getAttribute(        // line 128
($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 129
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 130
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
        // line 135
        ob_start(function () { return ''; });
        // line 136
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
        // line 140
        ob_start(function () { return ''; });
        // line 141
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 142
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
            // line 143
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 144
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 146
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlanimatedtext.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/headlines.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
        // line 5
        if ((((((($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "title_color", [])) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "subtitle_color", [])) || $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", [])) || (($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", []))))) {
            // line 6
            echo "<style>
";
            // line 7
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
                // line 8
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
            // line 10
            if (($this->getAttribute(($context["particle"] ?? null), "title_color", []) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", []))) {
                // line 11
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .cd-headline { ";
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
                echo " }
";
            }
            // line 13
            if (($this->getAttribute(($context["particle"] ?? null), "subtitle_color", []) || $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", []))) {
                // line 14
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .cd-words-wrapper { ";
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
                echo " }
";
            }
            // line 16
            if ((($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", [])))) {
                // line 17
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bg_container_width", []));
                echo ";
}
";
            }
            // line 21
            echo "</style>
";
        }
    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        // line 26
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax") || ($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax"))) {
            // line 27
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
<div class=\"";
            // line 164
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["visibility"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
  <section class=\"cd-intro\">
    <";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "titletag", []));
            echo " class=\"cd-headline jl-margin-remove-bottom";
            echo twig_escape_filter($this->env, (($context["title_text_color"] ?? null) . ($context["title_text_transform"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "headlines", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headlines", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "style", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", []));
            }
            echo "\">
    ";
            // line 167
            if ($this->getAttribute(($context["particle"] ?? null), "intro_text", [])) {
                echo "<span";
                if ($this->getAttribute(($context["particle"] ?? null), "title_font_weight", [])) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ($context["title_font_weight"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute(($context["particle"] ?? null), "intro_text", []);
                echo "</span>";
            }
            // line 168
            echo "    <span class=\"cd-words-wrapper";
            echo twig_escape_filter($this->env, (($context["subtitle_style"] ?? null) . ($context["sub_text_color"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "animated", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 170
                echo "      <b";
                if (($this->getAttribute($context["loop"], "index", []) == "1")) {
                    echo " class=\"is-visible\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</b>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "    </span>
  ";
            // line 173
            if ($this->getAttribute(($context["particle"] ?? null), "after_text", [])) {
                echo "<span";
                if ($this->getAttribute(($context["particle"] ?? null), "title_font_weight", [])) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ($context["title_font_weight"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute(($context["particle"] ?? null), "after_text", []);
                echo "</span>";
            }
            // line 174
            echo "  </";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "titletag", []));
            echo ">
</section>
</div>
";
            // line 177
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    // line 181
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 182
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 183
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/headlines.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/jlanimatedtext.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 183,  670 => 182,  667 => 181,  660 => 177,  653 => 174,  641 => 173,  638 => 172,  617 => 170,  600 => 169,  595 => 168,  583 => 167,  569 => 166,  558 => 164,  554 => 163,  550 => 162,  548 => 161,  545 => 160,  537 => 27,  535 => 26,  532 => 25,  526 => 21,  520 => 18,  515 => 17,  513 => 16,  496 => 14,  494 => 13,  477 => 11,  475 => 10,  458 => 8,  456 => 7,  453 => 6,  451 => 5,  446 => 4,  443 => 3,  438 => 1,  435 => 157,  433 => 156,  430 => 152,  428 => 151,  421 => 146,  415 => 144,  408 => 143,  376 => 142,  374 => 141,  372 => 140,  356 => 136,  354 => 135,  327 => 130,  325 => 129,  323 => 128,  308 => 127,  306 => 126,  289 => 122,  287 => 121,  271 => 117,  268 => 116,  250 => 112,  248 => 111,  231 => 107,  229 => 106,  212 => 102,  210 => 101,  203 => 94,  201 => 93,  199 => 92,  191 => 87,  187 => 86,  152 => 85,  149 => 83,  147 => 82,  130 => 80,  128 => 79,  111 => 77,  109 => 76,  107 => 75,  105 => 74,  103 => 73,  101 => 72,  85 => 68,  83 => 67,  81 => 64,  79 => 63,  76 => 59,  73 => 57,  71 => 56,  69 => 55,  67 => 54,  64 => 50,  62 => 49,  60 => 48,  58 => 47,  56 => 46,  54 => 45,  52 => 44,  50 => 43,  48 => 40,  46 => 36,  44 => 35,  42 => 34,  40 => 33,  38 => 32,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlanimatedtext.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jlanimatedtext.html.twig");
    }
}
