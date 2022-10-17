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

/* @particles/jldivider.html.twig */
class __TwigTemplate_b22df76b7d413f23729df0e165a1fac39b05ad236601c531622d143ec1c88363 extends \Twig\Template
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
        // line 34
        ob_start(function () { return ''; });
        // line 35
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
        // line 39
        ob_start(function () { return ''; });
        // line 40
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
        // line 44
        ob_start(function () { return ''; });
        // line 45
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
        // line 49
        ob_start(function () { return ''; });
        // line 50
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
        // line 54
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["particle"] ?? null), "rotate_start", []) || $this->getAttribute(($context["particle"] ?? null), "rotate_end", []))) {
            // line 55
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
        // line 59
        ob_start(function () { return ''; });
        // line 60
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
        // line 64
        ob_start(function () { return ''; });
        // line 65
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
        } elseif (($this->getAttribute(        // line 66
($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 67
            $context["pa_z_index"] = (($this->getAttribute(($context["particle"] ?? null), "pa_z_index", [])) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 68
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
        // line 73
        ob_start(function () { return ''; });
        // line 74
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
        // line 78
        ob_start(function () { return ''; });
        // line 79
        if ($this->getAttribute(($context["particle"] ?? null), "particle_title", [])) {
            // line 80
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
            // line 81
            if (($this->getAttribute(($context["particle"] ?? null), "particle_title_decoration", []) == "line")) {
                echo " <span>";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "</span>
";
            } else {
                // line 82
                echo " ";
                echo $this->getAttribute(($context["particle"] ?? null), "particle_title", []);
                echo "
";
            }
            // line 84
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "particle_title_element", []));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        ob_start(function () { return ''; });
        // line 89
        if (($this->getAttribute(($context["particle"] ?? null), "divider_align", []) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_align", []));
            if (($this->getAttribute(($context["particle"] ?? null), "divider_breakpoint", []) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_breakpoint", []));
            }
            if (($this->getAttribute(($context["particle"] ?? null), "divider_fallback", []) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "divider_fallback", []));
            }
        }
        $context["divider_align"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "default")) {
            // line 93
            $context["divider_cls"] = " class=\"jl-hr\"";
        } elseif (($this->getAttribute(        // line 94
($context["particle"] ?? null), "divider_style", []) == "icon")) {
            // line 95
            $context["divider_cls"] = " class=\"jl-divider-icon\"";
        } elseif (($this->getAttribute(        // line 96
($context["particle"] ?? null), "divider_style", []) == "vertical")) {
            // line 97
            $context["divider_cls"] = " class=\"jl-divider-vertical\"";
        } else {
            // line 99
            $context["divider_cls"] = ((" class=\"jl-divider-small" . ($context["divider_align"] ?? null)) . "\"");
        }
        // line 103
        if (($this->getAttribute(($context["particle"] ?? null), "visibility", []) != "inherit")) {
            // line 104
            $context["visibility"] = ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "visibility", [])))) : (((" jl-" . twig_replace_filter($this->getAttribute(($context["particle"] ?? null), "visibility", []), ["-" => "@"])) . "")));
        }
        // line 108
        if (($this->getAttribute(($context["particle"] ?? null), "margin", []) != "inherit")) {
            // line 109
            $context["margin"] = ((($this->getAttribute(($context["particle"] ?? null), "margin", []) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "margin", [])))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jldivider.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "<style>
";
        // line 5
        if (($this->getAttribute(($context["particle"] ?? null), "particle_title_color", []) || $this->getAttribute(($context["particle"] ?? null), "particle_title_fontsize", []))) {
            // line 6
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
        // line 8
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "small")) {
            // line 9
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-small::after {border-top: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";}
";
        }
        // line 11
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "vertical")) {
            // line 12
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-vertical {border-left: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";}
";
        }
        // line 14
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "icon")) {
            // line 15
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-icon::after,
#";
            // line 16
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-divider-icon::before {border-bottom: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";}
";
        }
        // line 18
        if (($this->getAttribute(($context["particle"] ?? null), "divider_style", []) == "default")) {
            // line 19
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-hr,
#";
            // line 20
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle hr {
  border-top: ";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_border", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_border", []), "1")) : ("1")));
            echo "px solid ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "divider_color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "divider_color", []), "#e5e5e5")) : ("#e5e5e5")));
            echo ";
}
";
        }
        // line 24
        echo "</style>
";
    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        // line 28
        if (($this->getAttribute(($context["particle"] ?? null), "animation", []) == "parallax")) {
            // line 29
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 112
    public function block_particle($context, array $blocks = [])
    {
        // line 113
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 114
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"";
            // line 115
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if ($this->getAttribute(($context["particle"] ?? null), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
";
            // line 116
            if (($this->getAttribute(($context["particle"] ?? null), "divider_element", []) == "hr")) {
                // line 117
                echo "<hr";
                echo ($context["divider_cls"] ?? null);
                echo ">
";
            } else {
                // line 119
                echo "<div";
                echo ($context["divider_cls"] ?? null);
                echo "></div>
";
            }
            // line 121
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jldivider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 121,  449 => 119,  443 => 117,  441 => 116,  431 => 115,  427 => 114,  425 => 113,  422 => 112,  414 => 29,  412 => 28,  409 => 27,  404 => 24,  396 => 21,  392 => 20,  387 => 19,  385 => 18,  376 => 16,  371 => 15,  369 => 14,  359 => 12,  357 => 11,  347 => 9,  345 => 8,  328 => 6,  326 => 5,  323 => 4,  320 => 3,  315 => 1,  312 => 109,  310 => 108,  307 => 104,  305 => 103,  302 => 99,  299 => 97,  297 => 96,  295 => 95,  293 => 94,  291 => 93,  289 => 92,  275 => 89,  273 => 88,  266 => 84,  260 => 82,  253 => 81,  221 => 80,  219 => 79,  217 => 78,  201 => 74,  199 => 73,  172 => 68,  170 => 67,  168 => 66,  153 => 65,  151 => 64,  134 => 60,  132 => 59,  116 => 55,  113 => 54,  95 => 50,  93 => 49,  76 => 45,  74 => 44,  57 => 40,  55 => 39,  39 => 35,  37 => 34,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jldivider.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jldivider.html.twig");
    }
}
