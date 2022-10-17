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

/* @particles/jlvideo.html.twig */
class __TwigTemplate_06a7a87b4486d83667480dcca42d02aad7c9aa051005240d4fc85e3663738ba9 extends \Twig\Template
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
        // line 28
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 29
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif (($this->getAttribute(        // line 30
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 31
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif (($this->getAttribute(        // line 32
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 33
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif (($this->getAttribute(        // line 34
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 35
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 39
        if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            // line 40
            $context["padding"] = " jl-section";
        } elseif (($this->getAttribute(        // line 41
($context["particle"] ?? null), "padding", []) == "none")) {
            // line 42
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 44
            $context["padding"] = ((" jl-section jl-section-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []))) . "");
        }
        // line 48
        $context["parallax_bg_color"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) ? ((("style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) . ";\"")) : (""));
        // line 49
        $context["parallax_overlay"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) . ";\"></div>")) : (""));
        // line 52
        ob_start(function () { return ''; });
        // line 53
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
        // line 57
        ob_start(function () { return ''; });
        // line 58
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 59
            $context["bg_container_maxwidth"] = (((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") || ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
            // line 60
            if ((($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax") && (((($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])))) {
                // line 61
                ob_start(function () { return ''; });
                // line 62
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
                // line 64
                ob_start(function () { return ''; });
                // line 65
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
                // line 67
                $context["parallax_easing"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])) ? ((("easing:" . ($this->getAttribute(($context["particle"] ?? null), "parallax_easing", []) / 10)) . "")) : (""));
                // line 68
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . ((($this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []) != "always")) ? (((" media: @" . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", [])) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 70
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
            // line 71
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        ob_start(function () { return ''; });
        // line 78
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 79
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        ob_start(function () { return ''; });
        // line 87
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
        // line 91
        ob_start(function () { return ''; });
        // line 92
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
        // line 96
        ob_start(function () { return ''; });
        // line 97
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
        // line 101
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 102
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
        // line 106
        ob_start(function () { return ''; });
        // line 107
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
        // line 111
        ob_start(function () { return ''; });
        // line 112
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
        } elseif (($this->getAttribute(        // line 113
($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 114
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 115
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
        // line 120
        ob_start(function () { return ''; });
        // line 121
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
        // line 125
        ob_start(function () { return ''; });
        // line 126
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 127
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
            // line 128
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 129
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 131
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        $context["image_width"] = (($this->getAttribute(($context["particle"] ?? null), "image_width", [])) ? (((" width=\"" . $this->getAttribute(($context["particle"] ?? null), "image_width", [])) . "\"")) : (""));
        // line 136
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? (((" height=\"" . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 138
        $context["video_width"] = (($this->getAttribute(($context["particle"] ?? null), "video_frame_width", [])) ? (((" width=\"" . $this->getAttribute(($context["particle"] ?? null), "video_frame_width", [])) . "\"")) : (""));
        // line 139
        $context["video_height"] = (($this->getAttribute(($context["particle"] ?? null), "video_frame_height", [])) ? (((" height=\"" . $this->getAttribute(($context["particle"] ?? null), "video_frame_height", [])) . "\"")) : (""));
        // line 141
        if (($this->getAttribute(($context["particle"] ?? null), "source", []) == "youtube")) {
            // line 142
            $context["video_width"] = ((($this->getAttribute(($context["particle"] ?? null), "video_frame_height", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "video_frame_width", [])))) ? (((" width=\"" . (int) floor((($this->getAttribute(($context["particle"] ?? null), "video_frame_height", []) * 16) / 9))) . "\"")) : (($context["video_width"] ?? null)));
            // line 143
            $context["video_height"] = ((($this->getAttribute(($context["particle"] ?? null), "video_frame_width", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "video_frame_height", [])))) ? (((" height=\"" . (int) floor((($this->getAttribute(($context["particle"] ?? null), "video_frame_width", []) * 9) / 16))) . "\"")) : (($context["video_height"] ?? null)));
        }
        // line 146
        $context["controls"] = ((($this->getAttribute(($context["particle"] ?? null), "controls", []) == "enabled")) ? (" controls") : (""));
        // line 147
        $context["loop"] = ((($this->getAttribute(($context["particle"] ?? null), "loop", []) == "enabled")) ? (" loop") : (""));
        // line 148
        $context["muted"] = ((($this->getAttribute(($context["particle"] ?? null), "muted", []) == "enabled")) ? (" muted") : (""));
        // line 149
        $context["play_inline"] = ((($this->getAttribute(($context["particle"] ?? null), "play_inline", []) == "enabled")) ? (" playsinline") : (""));
        // line 150
        $context["lazy_video"] = ((($this->getAttribute(($context["particle"] ?? null), "lazy_video", []) == "enabled")) ? (" preload=\"none\"") : (""));
        // line 152
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
            // line 153
            $context["video_autoplay"] = ((($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "true")) ? (" autoplay") : (" jl-video=\"autoplay: inview\""));
        }
        // line 156
        $context["image_border_cls"] = ((($this->getAttribute(($context["particle"] ?? null), "border", []) != "none")) ? (((" jl-border-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "border", []))) . "")) : (""));
        // line 159
        $context["img_box_shadow"] = ((($this->getAttribute(($context["particle"] ?? null), "box_shadow", []) != "none")) ? (((" jl-box-shadow-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow", []))) . "")) : (""));
        // line 160
        $context["img_box_shadow_hover"] = ((($this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []) != "none")) ? (((" jl-box-shadow-hover-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "box_shadow_hover", []))) . "")) : (""));
        // line 163
        $context["video_boxshadow"] = ((($this->getAttribute(($context["particle"] ?? null), "video_box_shadow", []) != "none")) ? ((("jl-box-shadow-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "video_box_shadow", []))) . "")) : (""));
        // line 166
        $context["image_transition"] = ((($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none")) ? (((" jl-transition-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "image_transition", []))) . " jl-transition-opaque")) : (""));
        // line 168
        $context["transition_attr"] = ((($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none")) ? (" tabindex=\"0\"") : (""));
        // line 169
        $context["transition_cls"] = (((($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none") && $this->getAttribute(($context["particle"] ?? null), "link_frame", []))) ? (" jl-transition-toggle") : (""));
        // line 170
        $context["image_transition_cls"] = (((($this->getAttribute(($context["particle"] ?? null), "image_transition", []) != "none") && ($this->getAttribute(($context["particle"] ?? null), "link_frame", []) == false))) ? (" jl-transition-toggle") : (""));
        // line 173
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 174
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : (((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"])) . "")));
        }
        // line 178
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 179
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 183
        $context["link_frame_element"] = (($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) ? ("a") : ("div"));
        // line 186
        if ((($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) == "none") && ($this->getAttribute(($context["particle"] ?? null), "overlay_padding", []) == "default"))) {
            // line 187
            $context["overlay_padding_init"] = " jl-padding";
        } elseif ((($this->getAttribute(        // line 188
($context["particle"] ?? null), "overlay_style", []) == "none") && ($this->getAttribute(($context["particle"] ?? null), "overlay_padding", []) == "remove"))) {
            // line 189
            $context["overlay_padding_init"] = "";
        } elseif (($this->getAttribute(        // line 190
($context["particle"] ?? null), "overlay_padding", []) != "default")) {
            // line 191
            $context["overlay_padding_init"] = ((" jl-padding-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_padding", []))) . "");
        }
        // line 195
        if ((($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) != "none") && ($this->getAttribute(($context["particle"] ?? null), "overlay_margin", []) != "none"))) {
            // line 196
            $context["overlay_margin_init"] = ((" jl-position-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_margin", []))) . "");
        }
        // line 200
        $context["overlay_styles_int"] = ((($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) != "none")) ? ("jl-overlay") : ("jl-panel"));
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlvideo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "<style>
.tm-video-item{position:relative}.jl-light .tm-video-player .btn-video{background-color: rgba(255,255,255,.15); color: rgba(255,255,255,.5);}.jl-light .tm-video-player .btn-video:before{border-color:rgba(255,255,255,0.65)}.btn-video{text-align:center;height:60px;width:60px;z-index:1;font-size:17px;color:#fff;border:0;border-radius:100%;display:inline-block;position:relative}.btn-video i{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:20px}.btn-video:hover{color:#fff}.btn-video .ripple,.btn-video .ripple:before,.btn-video .ripple:after{position:absolute;top:50%;left:50%;width:100px;height:100px;border-radius:50%;-ms-border-radius:50%;transform:translate(-50%,-50%);-ms-box-shadow:0 0 0 0 rgba(255,255,255,0.6);-o-box-shadow:0 0 0 0 rgba(255,255,255,0.6);box-shadow:0 0 0 0 rgba(255,255,255,0.6);-webkit-animation:ripple 3s infinite;animation:ripple 3s infinite}.tm-video-player{position:relative;line-height:1}.tm-video-player .btn-video{transition:all .5s ease;-moz-transition:all .5s ease;-webkit-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease}.tm-video-player .btn-video:before{content:\"\";position:absolute;left:-8px;top:-8px;right:-8px;bottom:-8px;border:1px solid rgba(0,0,0,0.3);border-radius:50%}.tm-video-player .btn-video:hover{background:#fff;color:#ffb200}.tm-video-item:hover .btn-video{background:#fff}.btn-video .ripple:before{-webkit-animation-delay:.9s;animation-delay:.9s;content:\"\";position:absolute}.btn-video .ripple:after{-webkit-animation-delay:.6s;animation-delay:.6s;content:\"\";position:absolute}@-webkit-keyframes ripple{70%{box-shadow:0 0 0 40px rgba(255,255,255,0)}100%{box-shadow:0 0 0 0 rgba(255,255,255,0)}}@keyframes ripple{70%{box-shadow:0 0 0 40px rgba(255,255,255,0)}100%{box-shadow:0 0 0 0 rgba(255,255,255,0)}}
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

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        // line 18
        if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "lightbox")) {
            // line 19
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/lightbox.min.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/lightbox-panel.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 22
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax") || ($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax"))) {
            // line 23
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 202
    public function block_particle($context, array $blocks = [])
    {
        // line 203
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 204
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 205
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "

<div id=\"";
            // line 207
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["visibility"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "lightbox")) {
                echo " jl-lightbox=\"toggle: a[data-type]\"";
            }
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">

";
            // line 209
            if ((($this->getAttribute(($context["particle"] ?? null), "source", []) == "vimeo") && ($this->getAttribute(($context["particle"] ?? null), "posterimage", []) || $this->getAttribute(($context["particle"] ?? null), "link_button", [])))) {
                // line 210
                echo "
<";
                // line 211
                echo ($context["link_frame_element"] ?? null);
                echo ((($this->getAttribute(($context["particle"] ?? null), "link_frame", []) && ($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "lightbox"))) ? (" data-type") : (""));
                echo " class=\"tm-video-item";
                echo (($this->getAttribute(($context["particle"] ?? null), "link_button", [])) ? ("") : (" jl-inline-clip"));
                echo (($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) ? (" jl-link-toggle") : (""));
                echo twig_escape_filter($this->env, (((($context["image_border_cls"] ?? null) . ($context["img_box_shadow"] ?? null)) . ($context["img_box_shadow_hover"] ?? null)) . ($context["transition_cls"] ?? null)), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) {
                    if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                        echo " href=\"#";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\" jl-toggle";
                    } else {
                        echo " href=\"https://vimeo.com/";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://player.vimeo.com/video/" => "", "https://vimeo.com/ondemand/" => "", "https://vimeo.com/channels/staffpicks/" => "", "https://player.vimeo.com/video/" => ""]), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                            echo "?autoplay=1&muted=1";
                        }
                        echo "\" frameborder=\"0\" allowfullscreen jl-responsive";
                        echo ($context["video_autoplay"] ?? null);
                    }
                    echo ($context["transition_attr"] ?? null);
                }
                echo ">

";
                // line 213
                if (($this->getAttribute(($context["particle"] ?? null), "posterimage", []) && ($this->getAttribute(($context["particle"] ?? null), "link_button", []) == false))) {
                    // line 214
                    echo "<img";
                    echo ($context["image_width"] ?? null);
                    echo ($context["image_height"] ?? null);
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "posterimage", [])));
                    echo "\" class=\"tm-image";
                    echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
                    echo "\">
<div class=\"jl-position-cover";
                    // line 215
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) != "none")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_style", []));
                    }
                    echo twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null));
                    echo "\"></div>
";
                }
                // line 217
                echo "
";
                // line 218
                if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) {
                    // line 219
                    echo "<div class=\"jl-position-";
                    echo twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", [])) . twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null))), "html", null, true);
                    echo "\">
";
                }
                // line 221
                echo "
    <div class=\"";
                // line 222
                echo twig_escape_filter($this->env, (twig_escape_filter($this->env, ($context["overlay_styles_int"] ?? null)) . twig_escape_filter($this->env, ($context["overlay_padding_init"] ?? null))), "html", null, true);
                if (!twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) {
                    echo " jl-position-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", []));
                    echo twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null));
                }
                echo " jl-margin-remove-first-child\">
        <div class=\"tm-video-player\">
            <div class=\"btn-video-wrap\">
                ";
                // line 225
                if ($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) {
                    // line 226
                    echo "                        <span class=\"btn-video jl-icon-button\"><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></span>
                ";
                } else {
                    // line 228
                    echo "                    ";
                    if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                        // line 229
                        echo "                        <a class=\"btn-video jl-icon-button\" href=\"#";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\" jl-toggle><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></a>
                        ";
                    } else {
                        // line 231
                        echo "                        <a data-type class=\"btn-video jl-icon-button\" href=\"https://player.vimeo.com/video/";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://vimeo.com/" => "", "https://vimeo.com/ondemand/" => "", "https://vimeo.com/channels/staffpicks/" => "", "https://player.vimeo.com/video/" => ""]), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                            echo "?autoplay=1&muted=1";
                        }
                        echo "\"><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></a>
                    ";
                    }
                    // line 233
                    echo "                ";
                }
                // line 234
                echo "            </div>
        </div>
    </div>

";
                // line 238
                echo ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) ? ("</div>") : (""));
                echo "

";
                // line 240
                if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                    // line 241
                    echo "<div id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" class=\"jl-flex-top\" jl-modal>
    <div class=\"jl-modal-dialog jl-width-auto";
                    // line 242
                    if ($this->getAttribute(($context["particle"] ?? null), "centermodal", [])) {
                        echo " jl-margin-auto-vertical";
                    }
                    echo "\">
        <button class=\"jl-modal-close-";
                    // line 243
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "close", []), "html", null, true);
                    echo "\" type=\"button\" jl-close></button>
        <iframe class=\"";
                    // line 244
                    echo twig_escape_filter($this->env, ($context["video_boxshadow"] ?? null), "html", null, true);
                    echo "\"";
                    echo ($context["video_width"] ?? null);
                    echo ($context["video_height"] ?? null);
                    echo " src=\"https://player.vimeo.com/video/";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://vimeo.com/" => "", "https://vimeo.com/ondemand/" => "", "https://vimeo.com/channels/staffpicks/" => "", "https://player.vimeo.com/video/" => ""]), "html", null, true);
                    if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                        echo "?autoplay=1&muted=1";
                    }
                    echo "\" frameborder=\"0\" allowfullscreen jl-responsive";
                    echo ($context["video_autoplay"] ?? null);
                    echo "></iframe>
    </div>
</div>
";
                }
                // line 248
                echo "
</";
                // line 249
                echo ($context["link_frame_element"] ?? null);
                echo ">

";
            } elseif (($this->getAttribute(            // line 251
($context["particle"] ?? null), "source", []) == "vimeo")) {
                // line 252
                echo "<iframe class=\"";
                echo twig_escape_filter($this->env, ($context["video_boxshadow"] ?? null), "html", null, true);
                echo "\"";
                echo ($context["video_width"] ?? null);
                echo ($context["video_height"] ?? null);
                echo " src=\"https://player.vimeo.com/video/";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://vimeo.com/" => "", "https://vimeo.com/ondemand/" => "", "https://vimeo.com/channels/staffpicks/" => "", "https://player.vimeo.com/video/" => ""]), "html", null, true);
                if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                    echo "?autoplay=1&muted=1";
                }
                echo "\" frameborder=\"0\" allowfullscreen jl-responsive";
                echo ($context["video_autoplay"] ?? null);
                echo "></iframe>
";
            }
            // line 254
            echo "
";
            // line 255
            if ((($this->getAttribute(($context["particle"] ?? null), "source", []) == "youtube") && ($this->getAttribute(($context["particle"] ?? null), "posterimage", []) || $this->getAttribute(($context["particle"] ?? null), "link_button", [])))) {
                // line 256
                echo "
<";
                // line 257
                echo ($context["link_frame_element"] ?? null);
                echo ((($this->getAttribute(($context["particle"] ?? null), "link_frame", []) && ($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "lightbox"))) ? (" data-type") : (""));
                echo " class=\"tm-video-item";
                echo (($this->getAttribute(($context["particle"] ?? null), "link_button", [])) ? ("") : (" jl-inline-clip"));
                echo (($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) ? (" jl-link-toggle") : (""));
                echo twig_escape_filter($this->env, (((($context["image_border_cls"] ?? null) . ($context["img_box_shadow"] ?? null)) . ($context["img_box_shadow_hover"] ?? null)) . ($context["transition_cls"] ?? null)), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) {
                    if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                        echo " href=\"#";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\" jl-toggle";
                    } else {
                        echo " href=\"https://www.youtube.com/watch?v=";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://www.youtube.com/watch?v=" => "", "https://www.youtube.com/embed" => "", "https://youtu.be/" => "", "http://youtu.be/" => ""]), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                            echo "?rel=0;&autoplay=1&mute=1";
                        }
                        echo "\"";
                    }
                    echo ($context["transition_attr"] ?? null);
                }
                echo ">
";
                // line 258
                if (($this->getAttribute(($context["particle"] ?? null), "posterimage", []) && ($this->getAttribute(($context["particle"] ?? null), "link_button", []) == false))) {
                    // line 259
                    echo "<img";
                    echo ($context["image_width"] ?? null);
                    echo ($context["image_height"] ?? null);
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "posterimage", [])));
                    echo "\" class=\"tm-image";
                    echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
                    echo "\">
<div class=\"jl-position-cover";
                    // line 260
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) != "none")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_style", []));
                    }
                    echo twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null));
                    echo "\"></div>
";
                }
                // line 262
                if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) {
                    // line 263
                    echo "<div class=\"jl-position-";
                    echo twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", [])) . twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null))), "html", null, true);
                    echo "\">
";
                }
                // line 265
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, (twig_escape_filter($this->env, ($context["overlay_styles_int"] ?? null)) . twig_escape_filter($this->env, ($context["overlay_padding_init"] ?? null))), "html", null, true);
                if (!twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) {
                    echo " jl-position-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", []));
                    echo twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null));
                }
                echo " jl-margin-remove-first-child\">
        <div class=\"tm-video-player\">
            <div class=\"btn-video-wrap\">
                ";
                // line 268
                if ($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) {
                    // line 269
                    echo "                        <span class=\"btn-video jl-icon-button\"><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></span>
                ";
                } else {
                    // line 271
                    echo "                    ";
                    if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                        // line 272
                        echo "                        <a class=\"btn-video jl-icon-button\" href=\"#";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\" jl-toggle><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></a>
                        ";
                    } else {
                        // line 274
                        echo "                        <a data-type class=\"btn-video jl-icon-button\" href=\"https://www.youtube.com/watch?v=";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://www.youtube.com/watch?v=" => "", "https://www.youtube.com/embed" => "", "https://youtu.be/" => "", "http://youtu.be/" => ""]), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                            echo "?rel=0;&autoplay=1&mute=1";
                        }
                        echo "\"><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></a>
                    ";
                    }
                    // line 276
                    echo "                ";
                }
                // line 277
                echo "            </div>
        </div>
    </div>
";
                // line 280
                echo ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) ? ("</div>") : (""));
                echo "

";
                // line 282
                if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                    // line 283
                    echo "<div id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" class=\"jl-flex-top\" jl-modal>
    <div class=\"jl-modal-dialog jl-width-auto";
                    // line 284
                    if ($this->getAttribute(($context["particle"] ?? null), "centermodal", [])) {
                        echo " jl-margin-auto-vertical";
                    }
                    echo "\">
        <button class=\"jl-modal-close-";
                    // line 285
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "close", []), "html", null, true);
                    echo "\" type=\"button\" jl-close></button>
        <iframe";
                    // line 286
                    echo ($context["video_width"] ?? null);
                    echo ($context["video_height"] ?? null);
                    echo " src=\"https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://www.youtube.com/watch?v=" => "", "http://www.youtube.com/watch?v=" => "", "https://youtu.be/" => "", "http://youtu.be/" => "", "https://www.youtube.com/watch?time_continue=3&v=" => ""]), "html", null, true);
                    if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                        echo "?rel=0;&autoplay=1&mute=1";
                    }
                    echo "\" frameborder=\"0\" allowfullscreen jl-responsive";
                    echo twig_escape_filter($this->env, ($context["muted"] ?? null), "html", null, true);
                    echo ($context["video_autoplay"] ?? null);
                    echo " jl-video></iframe>
    </div>
</div>
";
                }
                // line 290
                echo "
</";
                // line 291
                echo ($context["link_frame_element"] ?? null);
                echo ">

";
            } elseif (($this->getAttribute(            // line 293
($context["particle"] ?? null), "source", []) == "youtube")) {
                // line 294
                echo "<iframe";
                echo ($context["video_width"] ?? null);
                echo ($context["video_height"] ?? null);
                echo " class=\"";
                echo twig_escape_filter($this->env, ($context["video_boxshadow"] ?? null), "html", null, true);
                echo "\" src=\"https://www.youtube.com/embed/";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://www.youtube.com/watch?v=" => "", "http://www.youtube.com/watch?v=" => "", "https://youtu.be/" => "", "http://youtu.be/" => "", "https://www.youtube.com/watch?time_continue=3&v=" => "", "https://www.youtube-nocookie.com/embed/" => ""]), "html", null, true);
                if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                    echo "?rel=0;&autoplay=1&mute=1";
                }
                echo "\" frameborder=\"0\" allowfullscreen jl-responsive";
                echo twig_escape_filter($this->env, ($context["muted"] ?? null), "html", null, true);
                echo ($context["video_autoplay"] ?? null);
                echo "></iframe>
";
            }
            // line 296
            echo "
";
            // line 297
            if ((($this->getAttribute(($context["particle"] ?? null), "source", []) == "local") && ($this->getAttribute(($context["particle"] ?? null), "posterimage", []) || $this->getAttribute(($context["particle"] ?? null), "link_button", [])))) {
                // line 298
                echo "
<";
                // line 299
                echo ($context["link_frame_element"] ?? null);
                echo ((($this->getAttribute(($context["particle"] ?? null), "link_frame", []) && ($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "lightbox"))) ? (" data-type") : (""));
                echo " class=\"tm-video-item";
                echo (($this->getAttribute(($context["particle"] ?? null), "link_button", [])) ? ("") : (" jl-inline-clip"));
                echo (($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) ? (" jl-link-toggle") : (""));
                echo twig_escape_filter($this->env, (((($context["image_border_cls"] ?? null) . ($context["img_box_shadow"] ?? null)) . ($context["img_box_shadow_hover"] ?? null)) . ($context["transition_cls"] ?? null)), "html", null, true);
                echo "\"";
                if ($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) {
                    if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                        echo " href=\"#";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\" jl-toggle";
                    } else {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "local_video", [])));
                        echo "\"";
                    }
                    echo ($context["transition_attr"] ?? null);
                }
                echo ">
";
                // line 300
                if (($this->getAttribute(($context["particle"] ?? null), "posterimage", []) && ($this->getAttribute(($context["particle"] ?? null), "link_button", []) == false))) {
                    // line 301
                    echo "<img";
                    echo ($context["image_width"] ?? null);
                    echo ($context["image_height"] ?? null);
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "posterimage", [])));
                    echo "\" class=\"tm-image";
                    echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
                    echo "\">
<div class=\"jl-position-cover";
                    // line 302
                    if (($this->getAttribute(($context["particle"] ?? null), "overlay_style", []) != "none")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_style", []));
                    }
                    echo twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null));
                    echo "\"></div> 
";
                }
                // line 304
                if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) {
                    // line 305
                    echo "<div class=\"jl-position-";
                    echo twig_escape_filter($this->env, (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", [])) . twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null))), "html", null, true);
                    echo "\">
";
                }
                // line 307
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, (twig_escape_filter($this->env, ($context["overlay_styles_int"] ?? null)) . twig_escape_filter($this->env, ($context["overlay_padding_init"] ?? null))), "html", null, true);
                if (!twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) {
                    echo " jl-position-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "overlay_position", []));
                    echo twig_escape_filter($this->env, ($context["overlay_margin_init"] ?? null));
                }
                echo " jl-margin-remove-first-child\">
        <div class=\"tm-video-player\">
            <div class=\"btn-video-wrap\">
                ";
                // line 310
                if ($this->getAttribute(($context["particle"] ?? null), "link_frame", [])) {
                    // line 311
                    echo "                        <span class=\"btn-video jl-icon-button\"><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></span>
                ";
                } else {
                    // line 313
                    echo "                    ";
                    if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                        // line 314
                        echo "                        <a class=\"btn-video jl-icon-button\" href=\"#";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\" jl-toggle><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></a>
                        ";
                    } else {
                        // line 316
                        echo "                        <a data-type class=\"btn-video jl-icon-button\" href=\"https://www.youtube.com/watch?v=";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "video", []), ["https://www.youtube.com/watch?v=" => "", "https://www.youtube.com/embed" => "", "https://youtu.be/" => "", "http://youtu.be/" => ""]), "html", null, true);
                        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) != "off")) {
                            echo "?rel=0;&autoplay=1&mute=1";
                        }
                        echo "\"><i class=\"jl-icon\" jl-icon=\"play; ratio: 2\"><svg width=\"40\" height=\"40\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><polygon fill=\"none\" stroke=\"#000\" points=\"6.5,5 14.5,10 6.5,15\"></polygon></svg></i><i class=\"ripple\"></i></a>
                        ";
                    }
                    // line 318
                    echo "                ";
                }
                // line 319
                echo "            </div>
        </div>
    </div>

";
                // line 323
                echo ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "overlay_position", []), [0 => "center", 1 => "center-left", 2 => "center-right", 3 => "top-center", 4 => "bottom-center"])) ? ("</div>") : (""));
                echo "

";
                // line 325
                if (($this->getAttribute(($context["particle"] ?? null), "popup_type", []) == "modal")) {
                    // line 326
                    echo "<div id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" class=\"jl-flex-top\" jl-modal>
    <div class=\"jl-modal-dialog jl-width-auto";
                    // line 327
                    if ($this->getAttribute(($context["particle"] ?? null), "centermodal", [])) {
                        echo " jl-margin-auto-vertical";
                    }
                    echo "\">
        <button class=\"jl-modal-close-";
                    // line 328
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "close", []), "html", null, true);
                    echo "\" type=\"button\" jl-close></button>
        <video";
                    // line 329
                    echo ($context["video_width"] ?? null);
                    echo ($context["video_height"] ?? null);
                    echo " src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "local_video", [])));
                    echo "\"";
                    echo twig_escape_filter($this->env, (((((($context["controls"] ?? null) . ($context["loop"] ?? null)) . ($context["muted"] ?? null)) . ($context["play_inline"] ?? null)) . ($context["lazy_video"] ?? null)) . ($context["video_autoplay"] ?? null)), "html", null, true);
                    echo " jl-video></video>
    </div>
</div>
";
                }
                // line 333
                echo "
</";
                // line 334
                echo ($context["link_frame_element"] ?? null);
                echo ">

";
            } elseif (($this->getAttribute(            // line 336
($context["particle"] ?? null), "source", []) == "local")) {
                // line 337
                echo "<video";
                echo ($context["video_width"] ?? null);
                echo ($context["video_height"] ?? null);
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "local_video", [])));
                echo "\"";
                echo twig_escape_filter($this->env, (((((($context["controls"] ?? null) . ($context["loop"] ?? null)) . ($context["muted"] ?? null)) . ($context["play_inline"] ?? null)) . ($context["lazy_video"] ?? null)) . ($context["video_autoplay"] ?? null)), "html", null, true);
                echo " jl-video></video>
";
            }
            // line 339
            echo "
</div>
";
            // line 341
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlvideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1107 => 341,  1103 => 339,  1092 => 337,  1090 => 336,  1085 => 334,  1082 => 333,  1070 => 329,  1066 => 328,  1060 => 327,  1055 => 326,  1053 => 325,  1048 => 323,  1042 => 319,  1039 => 318,  1030 => 316,  1024 => 314,  1021 => 313,  1017 => 311,  1015 => 310,  1003 => 307,  997 => 305,  995 => 304,  986 => 302,  976 => 301,  974 => 300,  952 => 299,  949 => 298,  947 => 297,  944 => 296,  927 => 294,  925 => 293,  920 => 291,  917 => 290,  901 => 286,  897 => 285,  891 => 284,  886 => 283,  884 => 282,  879 => 280,  874 => 277,  871 => 276,  862 => 274,  856 => 272,  853 => 271,  849 => 269,  847 => 268,  835 => 265,  829 => 263,  827 => 262,  818 => 260,  808 => 259,  806 => 258,  781 => 257,  778 => 256,  776 => 255,  773 => 254,  757 => 252,  755 => 251,  750 => 249,  747 => 248,  730 => 244,  726 => 243,  720 => 242,  715 => 241,  713 => 240,  708 => 238,  702 => 234,  699 => 233,  690 => 231,  684 => 229,  681 => 228,  677 => 226,  675 => 225,  664 => 222,  661 => 221,  655 => 219,  653 => 218,  650 => 217,  641 => 215,  631 => 214,  629 => 213,  602 => 211,  599 => 210,  597 => 209,  581 => 207,  576 => 205,  572 => 204,  570 => 203,  567 => 202,  559 => 23,  557 => 22,  552 => 20,  547 => 19,  545 => 18,  542 => 17,  537 => 14,  531 => 11,  526 => 10,  524 => 9,  507 => 7,  505 => 6,  501 => 4,  498 => 3,  493 => 1,  491 => 200,  488 => 196,  486 => 195,  483 => 191,  481 => 190,  479 => 189,  477 => 188,  475 => 187,  473 => 186,  471 => 183,  468 => 179,  466 => 178,  463 => 174,  461 => 173,  459 => 170,  457 => 169,  455 => 168,  453 => 166,  451 => 163,  449 => 160,  447 => 159,  445 => 156,  442 => 153,  440 => 152,  438 => 150,  436 => 149,  434 => 148,  432 => 147,  430 => 146,  427 => 143,  425 => 142,  423 => 141,  421 => 139,  419 => 138,  417 => 136,  415 => 135,  408 => 131,  402 => 129,  395 => 128,  363 => 127,  361 => 126,  359 => 125,  343 => 121,  341 => 120,  314 => 115,  312 => 114,  310 => 113,  295 => 112,  293 => 111,  276 => 107,  274 => 106,  258 => 102,  255 => 101,  237 => 97,  235 => 96,  218 => 92,  216 => 91,  199 => 87,  197 => 86,  190 => 79,  188 => 78,  186 => 77,  178 => 72,  174 => 71,  139 => 70,  136 => 68,  134 => 67,  117 => 65,  115 => 64,  98 => 62,  96 => 61,  94 => 60,  92 => 59,  90 => 58,  88 => 57,  72 => 53,  70 => 52,  68 => 49,  66 => 48,  63 => 44,  60 => 42,  58 => 41,  56 => 40,  54 => 39,  51 => 35,  49 => 34,  47 => 33,  45 => 32,  43 => 31,  41 => 30,  39 => 29,  37 => 28,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlvideo.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jlvideo.html.twig");
    }
}
