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

/* @particles/jlheading.html.twig */
class __TwigTemplate_7b7af192c80dfa0c8d4a4a5ed883cea761952e33814fced6bbbb3d75396cda12 extends \Twig\Template
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
        // line 48
        $context["linkscroll"] = (((preg_match("/#/", twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_link", []))) && ($this->getAttribute(($context["particle"] ?? null), "title_link_target", []) != "_blank"))) ? (" jl-scroll") : (""));
        // line 51
        $context["title_text_transform"] = (($this->getAttribute(($context["particle"] ?? null), "title_text_transform", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_text_transform", []))) . "")) : (""));
        // line 52
        $context["content_text_transform"] = (($this->getAttribute(($context["particle"] ?? null), "content_text_transform", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "content_text_transform", []))) . "")) : (""));
        // line 53
        $context["title_font_weight"] = (($this->getAttribute(($context["particle"] ?? null), "title_font_weight", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_font_weight", []))) . "")) : (""));
        // line 54
        $context["meta_font_weight"] = (($this->getAttribute(($context["particle"] ?? null), "meta_font_weight", [])) ? (((" jl-text-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "meta_font_weight", []))) . "")) : (""));
        // line 55
        $context["des_dropcap"] = (($this->getAttribute(($context["particle"] ?? null), "description_dropcap", [])) ? (" jl-dropcap") : (""));
        // line 58
        ob_start(function () { return ''; });
        // line 59
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 60
            echo "<";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "titletag", []));
            echo " class=\"tm-title jl-margin-remove-bottom";
            echo twig_escape_filter($this->env, (($context["title_text_transform"] ?? null) . ($context["title_font_weight"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "heading_color", [])) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "heading_color", []));
            }
            if ($this->getAttribute(($context["particle"] ?? null), "decoration", [])) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "decoration", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "style", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", []));
            }
            echo "\">
";
            // line 61
            if (($this->getAttribute(($context["particle"] ?? null), "title_link", []) != "")) {
                echo "<a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "title_link_target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "title_link_target", []), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title_link", []))), "html", null, true);
                echo "\" class=\"";
                if ($this->getAttribute(($context["particle"] ?? null), "link_hover", [])) {
                    echo "jl-link-heading";
                } else {
                    echo "jl-link-reset";
                }
                echo "\"";
                echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                echo ">";
            }
            // line 62
            echo "  ";
            if (($this->getAttribute(($context["particle"] ?? null), "decoration", []) == "line")) {
                echo "<span>";
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                echo "</span>";
            } else {
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            }
            // line 63
            echo "  ";
            if (($this->getAttribute(($context["particle"] ?? null), "title_link", []) != "")) {
                echo "</a>";
            }
            // line 64
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "titletag", []));
            echo ">
";
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        ob_start(function () { return ''; });
        // line 70
        if ($this->getAttribute(($context["particle"] ?? null), "subtitle", [])) {
            // line 71
            echo "  <div class=\"tm-description";
            echo twig_escape_filter($this->env, ((($context["content_text_transform"] ?? null) . ($context["meta_font_weight"] ?? null)) . ($context["des_dropcap"] ?? null)), "html", null, true);
            if (($this->getAttribute(($context["particle"] ?? null), "description_style", []) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "description_style", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "description_margin_top", []) == "default")) {
                echo " jl-margin-top";
            } else {
                echo " jl-margin-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "description_margin_top", []));
                echo "-top";
            }
            if (($this->getAttribute(($context["particle"] ?? null), "description_color", []) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "description_color", []));
            }
            echo "\">
    ";
            // line 72
            echo $this->getAttribute(($context["particle"] ?? null), "subtitle", []);
            echo "
  </div>
";
        }
        $context["subtitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        if (($this->getAttribute(($context["particle"] ?? null), "viewport_height", []) == "full")) {
            // line 79
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif (($this->getAttribute(        // line 80
($context["particle"] ?? null), "viewport_height", []) == "percent")) {
            // line 81
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif (($this->getAttribute(        // line 82
($context["particle"] ?? null), "viewport_height", []) == "section")) {
            // line 83
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif (($this->getAttribute(        // line 84
($context["particle"] ?? null), "viewport_height", []) == "expand")) {
            // line 85
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 89
        if (($this->getAttribute(($context["particle"] ?? null), "padding", []) == "default")) {
            // line 90
            $context["padding"] = " jl-section";
        } elseif (($this->getAttribute(        // line 91
($context["particle"] ?? null), "padding", []) == "none")) {
            // line 92
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 94
            $context["padding"] = ((" jl-section jl-section-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "padding", []))) . "");
        }
        // line 98
        $context["parallax_bg_color"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) ? ((("style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_color", [])) . ";\"")) : (""));
        // line 99
        $context["parallax_overlay"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) . ";\"></div>")) : (""));
        // line 102
        ob_start(function () { return ''; });
        // line 103
        if ($this->getAttribute(($context["particle"] ?? null), "g_maxwidth", [])) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "g_maxwidth", []), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "g_maxwidth_breakpoint", [])) {
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
        // line 107
        ob_start(function () { return ''; });
        // line 108
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 109
            $context["bg_container_maxwidth"] = (((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") || ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
            // line 110
            if ((($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax") && (((($this->getAttribute(($context["particle"] ?? null), "horizontal_start", []) || $this->getAttribute(($context["particle"] ?? null), "horizontal_end", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_start", [])) || $this->getAttribute(($context["particle"] ?? null), "vertical_end", [])) || $this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])))) {
                // line 111
                ob_start(function () { return ''; });
                // line 112
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
                // line 114
                ob_start(function () { return ''; });
                // line 115
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
                // line 117
                $context["parallax_easing"] = (($this->getAttribute(($context["particle"] ?? null), "parallax_easing", [])) ? ((("easing:" . ($this->getAttribute(($context["particle"] ?? null), "parallax_easing", []) / 10)) . "")) : (""));
                // line 118
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . ((($this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", []) != "always")) ? (((" media: @" . $this->getAttribute(($context["particle"] ?? null), "parallax_bg_breakpoint", [])) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 120
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
            // line 121
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 122
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo (($this->getAttribute(($context["particle"] ?? null), "parallax_bg_overlay", [])) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        ob_start(function () { return ''; });
        // line 128
        if ($this->getAttribute(($context["particle"] ?? null), "parallax_image", [])) {
            // line 129
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        ob_start(function () { return ''; });
        // line 137
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
        // line 141
        ob_start(function () { return ''; });
        // line 142
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
        // line 146
        ob_start(function () { return ''; });
        // line 147
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
        // line 151
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 152
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
        // line 156
        ob_start(function () { return ''; });
        // line 157
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
        // line 161
        ob_start(function () { return ''; });
        // line 162
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) && ($this->getAttribute(($context["particle"] ?? null), "animation", []) != "parallax"))) {
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
        } elseif (($this->getAttribute(        // line 163
($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 164
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 165
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
        // line 170
        ob_start(function () { return ''; });
        // line 171
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
        // line 175
        ob_start(function () { return ''; });
        // line 176
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 177
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
            // line 178
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 179
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 181
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 186
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 187
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : (((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"])) . "")));
        }
        // line 191
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 192
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlheading.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        if ((((((((($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "title_color", [])) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "subtitle_color", [])) || $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", [])) || $this->getAttribute(($context["particle"] ?? null), "decoration_color", [])) || $this->getAttribute(($context["particle"] ?? null), "decoration_width", [])) || (($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", []))))) {
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
            if (($this->getAttribute(($context["particle"] ?? null), "title_color", []) || $this->getAttribute(($context["particle"] ?? null), "title_fontsize", []))) {
                // line 10
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-title { ";
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
            // line 12
            if (($this->getAttribute(($context["particle"] ?? null), "subtitle_color", []) || $this->getAttribute(($context["particle"] ?? null), "subtitle_fontsize", []))) {
                // line 13
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-description { ";
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
            // line 15
            if ($this->getAttribute(($context["particle"] ?? null), "decoration_color", [])) {
                // line 16
                $context["decoration_divider_color"] = ((" border-color: " . $this->getAttribute(($context["particle"] ?? null), "decoration_color", [])) . ";");
                // line 17
                $context["decoration_bullet_color"] = ((" border-left-color: " . $this->getAttribute(($context["particle"] ?? null), "decoration_color", [])) . ";");
                // line 18
                $context["decoration_line_color"] = ((" border-bottom-color: " . $this->getAttribute(($context["particle"] ?? null), "decoration_color", [])) . ";");
            }
            // line 20
            if ($this->getAttribute(($context["particle"] ?? null), "decoration_width", [])) {
                // line 21
                $context["decoration_width"] = (("border-width: " . $this->getAttribute(($context["particle"] ?? null), "decoration_width", [])) . "px;");
            }
            // line 23
            if ((($this->getAttribute(($context["particle"] ?? null), "decoration", []) == "divider") && ($this->getAttribute(($context["particle"] ?? null), "decoration_color", []) || $this->getAttribute(($context["particle"] ?? null), "decoration_width", [])))) {
                // line 24
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-divider { ";
                echo twig_escape_filter($this->env, (($context["decoration_divider_color"] ?? null) . ($context["decoration_width"] ?? null)), "html", null, true);
                echo " }
";
            }
            // line 26
            if ((($this->getAttribute(($context["particle"] ?? null), "decoration", []) == "bullet") && ($this->getAttribute(($context["particle"] ?? null), "decoration_color", []) || $this->getAttribute(($context["particle"] ?? null), "decoration_width", [])))) {
                // line 27
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-bullet::before { ";
                echo twig_escape_filter($this->env, (($context["decoration_bullet_color"] ?? null) . ($context["decoration_width"] ?? null)), "html", null, true);
                echo " }
";
            }
            // line 29
            if ((($this->getAttribute(($context["particle"] ?? null), "decoration", []) == "line") && ($this->getAttribute(($context["particle"] ?? null), "decoration_color", []) || $this->getAttribute(($context["particle"] ?? null), "decoration_width", [])))) {
                // line 30
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-line>::after, .";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-line>::before { ";
                echo twig_escape_filter($this->env, (($context["decoration_line_color"] ?? null) . ($context["decoration_width"] ?? null)), "html", null, true);
                echo " }
";
            }
            // line 32
            if ((($this->getAttribute(($context["particle"] ?? null), "parallax_image", []) && ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "bg_container_width", [])))) {
                // line 33
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "bg_container_width", []));
                echo ";
}
";
            }
            // line 37
            echo "</style>
";
        }
    }

    // line 41
    public function block_javascript($context, array $blocks = [])
    {
        // line 42
        if ((($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax") || ($this->getAttribute(($context["particle"] ?? null), "bg_image_effect", []) == "parallax"))) {
            // line 43
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 195
    public function block_particle($context, array $blocks = [])
    {
        // line 196
        if (($this->getAttribute(($context["particle"] ?? null), "enabled", []) && ($this->getAttribute(($context["particle"] ?? null), "title", []) || $this->getAttribute(($context["particle"] ?? null), "subtitle", [])))) {
            // line 197
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 198
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"";
            // line 199
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
    ";
            // line 200
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
    ";
            // line 201
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
            echo "
</div>
";
            // line 203
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlheading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 203,  703 => 201,  699 => 200,  689 => 199,  685 => 198,  681 => 197,  679 => 196,  676 => 195,  668 => 43,  666 => 42,  663 => 41,  657 => 37,  651 => 34,  646 => 33,  644 => 32,  634 => 30,  632 => 29,  624 => 27,  622 => 26,  614 => 24,  612 => 23,  609 => 21,  607 => 20,  604 => 18,  602 => 17,  600 => 16,  598 => 15,  581 => 13,  579 => 12,  562 => 10,  560 => 9,  543 => 7,  541 => 6,  538 => 5,  536 => 4,  533 => 3,  528 => 1,  525 => 192,  523 => 191,  520 => 187,  518 => 186,  511 => 181,  505 => 179,  498 => 178,  466 => 177,  464 => 176,  462 => 175,  446 => 171,  444 => 170,  417 => 165,  415 => 164,  413 => 163,  398 => 162,  396 => 161,  379 => 157,  377 => 156,  361 => 152,  358 => 151,  340 => 147,  338 => 146,  321 => 142,  319 => 141,  302 => 137,  300 => 136,  293 => 129,  291 => 128,  289 => 127,  281 => 122,  277 => 121,  242 => 120,  239 => 118,  237 => 117,  220 => 115,  218 => 114,  201 => 112,  199 => 111,  197 => 110,  195 => 109,  193 => 108,  191 => 107,  175 => 103,  173 => 102,  171 => 99,  169 => 98,  166 => 94,  163 => 92,  161 => 91,  159 => 90,  157 => 89,  154 => 85,  152 => 84,  150 => 83,  148 => 82,  146 => 81,  144 => 80,  142 => 79,  140 => 78,  133 => 72,  113 => 71,  111 => 70,  109 => 69,  102 => 64,  97 => 63,  88 => 62,  72 => 61,  53 => 60,  51 => 59,  49 => 58,  47 => 55,  45 => 54,  43 => 53,  41 => 52,  39 => 51,  37 => 48,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlheading.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jlheading.html.twig");
    }
}
