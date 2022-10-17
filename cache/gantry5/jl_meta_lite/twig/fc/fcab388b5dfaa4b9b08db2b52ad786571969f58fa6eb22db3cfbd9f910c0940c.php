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

/* @particles/jlnavbar.html.twig */
class __TwigTemplate_2f0ef4c021a7ae42b4d67bcc45f8247aa4e9e7b295a599eccbb4f1a050326209 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        try {            // line 2
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $context["sec_id"] = twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "section", []));
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && $this->getAttribute(($context["particle"] ?? null), "section", []))) {
            // line 10
            ob_start(function () { return ''; });
            // line 11
            echo "    jlUIkit.sticky('";
            echo twig_escape_filter($this->env, ($context["sec_id"] ?? null), "html", null, true);
            echo "', {
    ";
            // line 12
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) {
                // line 13
                echo "    showOnUp: true,
    animation: 'jl-animation-slide-top',
    ";
            }
            // line 16
            echo "    ";
            if ($this->getAttribute(($context["particle"] ?? null), "media", [])) {
                // line 17
                echo "    media: '@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "media", []), "html", null, true);
                echo "',
    ";
            }
            // line 19
            echo "    top: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "top", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "top", []), 0)) : (0)), "html", null, true);
            echo "',
    offset: ";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "offset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "offset", []), 0)) : (0)), "html", null, true);
            echo "
} )
";
            $context["inline_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineScript", [0 => ($context["inline_js"] ?? null), 1 => 10, 2 => "footer"], "method");
        }
        // line 25
        echo "
";
        // line 26
        if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) || $this->getAttribute(($context["particle"] ?? null), "m_sticky", []))) {
            // line 27
            $context["sticky_navbar"] = ('' === $tmp = "html {height: auto;}") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 28
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["sticky_navbar"] ?? null), 1 => 0], "method");
        }
        // line 30
        ob_start(function () { return ''; });
        // line 31
        ob_start(function () { return ''; });
        // line 32
        if (($this->getAttribute(($context["particle"] ?? null), "main_nav_margin", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .g-container .g-main-nav { margin: 0; }";
        }
        // line 33
        if (($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider", []) && $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider_color", []))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav.jl-nav-divider>:not(.jl-nav-header,.jl-nav-divider)+:not(.jl-nav-header,.jl-nav-divider) {border-top: 1px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_divider_color", []));
            echo ";}";
        }
        // line 34
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_height", [])) {
            // line 35
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-item, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>a,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>div.g-menu-item-container,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-toggle {min-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_height", []));
            echo "}
";
        }
        // line 37
        if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
            // line 38
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 39
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo ";}
";
            }
            // line 41
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 42
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-item:not(.jl-logo), #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                echo "; }
";
            }
            // line 44
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", [])) {
                // line 45
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav > li > a {text-transform: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []), "html", null, true);
                echo ";}
";
            }
            // line 47
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 48
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li:hover>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a.jl-open, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:focus {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 50
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 51
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:active, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li.jl-active>a { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
            }
            // line 53
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 54
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown { 
        ";
                // line 55
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    echo "background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";";
                }
                // line 56
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";";
                }
                // line 57
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    echo "border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";";
                }
                // line 58
                echo "        ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";";
                }
                // line 59
                echo "    }
";
            }
            // line 61
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 62
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav>li>a { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
            // line 64
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 65
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 67
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 68
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 69
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:focus, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:hover{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 71
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 72
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 74
            if ((($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_style", []) == "secondary") && $this->getAttribute(($context["particle"] ?? null), "dropdown_item_hover_background", []))) {
                // line 75
                echo "  #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li > a:hover, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li.jl-active > a {
    background-color: ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_item_hover_background", []));
                echo ";
  }
";
            }
        } else {
            // line 80
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_color", [])) {
                // line 81
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li>.g-menu-item-container,
#";
                // line 82
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-logo { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_color", []), "html", null, true);
                echo "; }
";
            }
            // line 84
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", [])) {
                // line 85
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_fontsize", []), "html", null, true);
                echo "; }
";
            }
            // line 87
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", [])) {
                // line 88
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container {text-transform: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_text_transform", []), "html", null, true);
                echo ";}
";
            }
            // line 90
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", [])) {
                // line 91
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container,
#";
                // line 92
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container {color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_hover_color", []), "html", null, true);
                echo ";}
";
            }
            // line 94
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_active_color", [])) {
                // line 95
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
#";
                // line 96
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-separator { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                echo "; }
";
                // line 97
                if (twig_test_empty($this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) {
                    // line 98
                    echo "    #";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " .g-main-nav .g-toplevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active > .g-menu-item-container {color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_active_color", []), "html", null, true);
                    echo ";}
";
                }
            }
            // line 101
            if (((($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []) || $this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) || $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []))) {
                // line 102
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-dropdown { 
";
                // line 103
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_bg", [])) {
                    // line 104
                    echo "    background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_bg", []), "html", null, true);
                    echo ";
";
                }
                // line 106
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_color", [])) {
                    // line 107
                    echo "    color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_color", []), "html", null, true);
                    echo ";
";
                }
                // line 109
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", [])) {
                    // line 110
                    echo "    border-radius: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_border_radius", []), "html", null, true);
                    echo ";
";
                }
                // line 112
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_padding", [])) {
                    // line 113
                    echo "    padding: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_padding", []), "html", null, true);
                    echo ";
";
                }
                // line 115
                echo " }
";
            }
            // line 117
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                // line 118
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { ";
                if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", [])) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_color", []));
                    echo ";";
                }
                echo " }
";
            }
            // line 120
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 121
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", [])) {
                // line 122
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:focus,#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:hover { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_hover_color", []));
                echo "; }
";
            }
            // line 124
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", [])) {
                // line 125
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active .g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_active_color", []));
                echo ";}
";
            }
            // line 127
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", [])) {
                // line 128
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container {font-size: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_navbar_fontsize", []));
                echo ";}
";
            }
            // line 130
            if ($this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", [])) {
                // line 131
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { padding: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_nav_padding", []));
                echo "; }
";
            }
        }
        // line 134
        if ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom") &&  !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "ct_container_width", [])))) {
            // line 135
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header .g-container { max-width: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ct_container_width", []));
            echo "; }
";
        }
        // line 137
        if ($this->getAttribute(($context["particle"] ?? null), "nav_bg_color", [])) {
            // line 138
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-container:not(.jl-navbar-transparent) {
    background-color: ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nav_bg_color", []), "html", null, true);
            echo ";
}
";
        }
        // line 142
        if ($this->getAttribute(($context["particle"] ?? null), "logo_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "logo_color", []), "html", null, true);
            echo ";}";
        }
        // line 143
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_text_color", [])) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header-mobile .jl-logo { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mobile_text_color", []), "html", null, true);
            echo ";}";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["inline_css"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineStyle", [0 => ($context["inline_css"] ?? null), 1 => 0], "method");
        // line 147
        echo "
";
        // line 148
        ob_start(function () { return ''; });
        // line 149
        echo "<a class=\"jl-navbar-toggle jl-navbar-toggle-animate mobile-toggle\" href=\"#mobile-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" jl-toggle=\"animation: jl-animation-fade\">
";
        // line 150
        if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            echo "<span class=\"jl-margin-small-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
            echo "</span>";
        }
        // line 151
        echo "<span jl-navbar-toggle-icon></span>
";
        // line 152
        if (($this->getAttribute(($context["particle"] ?? null), "menu_text", []) && ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            echo "<span class=\"jl-margin-small-left\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_text", []), "html", null, true);
            echo "</span>";
        }
        // line 153
        echo "</a>
";
        $context["menu_toggle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        echo "
";
        // line 157
        ob_start(function () { return ''; });
        // line 158
        echo "<ul class=\"jl-flex-inline jl-flex-middle jl-flex-nowrap";
        if ($this->getAttribute(($context["particle"] ?? null), "social_icon_gap", [])) {
            echo " jl-grid-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_icon_gap", []));
        }
        if ($this->getAttribute(($context["particle"] ?? null), "social_inverse", [])) {
            echo " jl-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "social_inverse", []), "html", null, true);
        }
        echo "\" jl-grid>
";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "social_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["social_item"]) {
            // line 160
            echo "<li>
<a class=\"tm-icon";
            // line 161
            echo (($this->getAttribute(($context["particle"] ?? null), "sc_icon_button", [])) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], "social_link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], "social_text", []));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "sc_link_target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "sc_link_target", []), "_blank")) : ("_blank")));
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], "social_icon", []), "html", null, true);
            echo "\" aria-hidden=\"true\"></i></a>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "</ul>
";
        $context["social_icons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        echo "
";
        // line 167
        $context["theme_container"] = ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("g-container") : (("jl-container" . ((twig_in_filter($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])))) : ("")))));
        // line 168
        echo "
";
        // line 170
        ob_start(function () { return ''; });
        // line 171
        if (($this->getAttribute(($context["particle"] ?? null), "search_style", []) == "default")) {
            // line 172
            echo "  ";
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 173
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
      <span jl-search-icon class=\"";
                // line 174
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input class=\"jl-search-input\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 175
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"task\" value=\"search\" />
      <input type=\"hidden\" name=\"option\" value=\"com_search\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 178
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>
  ";
            } else {
                // line 181
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
      <span jl-search-icon class=\"";
                // line 182
                echo (($this->getAttribute(($context["particle"] ?? null), "icon_flip", [])) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input id=\"";
                // line 183
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 185
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
    </form>  
  ";
            }
        } else {
            // line 189
            echo "<a href=\"#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-search-toggle\" jl-search-icon jl-toggle></a>
<div id=\"js-search-";
            // line 190
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-modal-full jl-modal\" jl-modal>
  <div class=\"jl-modal-dialog jl-flex jl-flex-center jl-flex-middle\" jl-height-viewport>
    <button class=\"jl-modal-close-full jl-close-large\" type=\"button\" jl-close></button>
    ";
            // line 193
            if ( !$this->getAttribute(($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method")) {
                // line 194
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php"], "method"), "html", null, true);
                echo "\" method=\"post\">
        <input class=\"jl-search-input jl-text-center\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 195
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"task\" value=\"search\" />
        <input type=\"hidden\" name=\"option\" value=\"com_search\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 198
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>
    ";
            } else {
                // line 201
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method"), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
        <input id=\"";
                // line 202
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input jl-text-center\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 204
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
                echo "\" />
        </form>  
    ";
            }
            // line 207
            echo "  </div>
</div>
";
        }
        $context["navbar_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 211
        echo "
";
        // line 219
        echo "
";
        // line 237
        echo "
";
        // line 248
        echo "
";
        // line 394
        echo "
";
        // line 422
        echo "
";
        // line 431
        echo "
";
        // line 463
        echo "
";
        // line 464
        $context["macro"] = $this;
        // line 465
        echo "
";
        // line 466
        $context["url"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 467
        if ((($context["url"] ?? null) == $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 468
        $context["logo_init"] = ($this->getAttribute(($context["particle"] ?? null), "image", []) || $this->getAttribute(($context["particle"] ?? null), "text", []));
        // line 469
        echo "
";
        // line 470
        ob_start(function () { return ''; });
        // line 471
        echo "
    ";
        // line 472
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        // line 473
        echo "    ";
        $context["height"] = (($this->getAttribute(($context["particle"] ?? null), "height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "height", [])) . "\"")) : (""));
        // line 474
        echo "
    ";
        // line 475
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 476
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" ";
            echo ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 478
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 480
        echo "
";
        $context["logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 482
        echo "
";
        // line 483
        ob_start(function () { return ''; });
        // line 484
        echo "
    ";
        // line 485
        $context["class"] = (($this->getAttribute(($context["particle"] ?? null), "class", [])) ? ((("class=\"" . $this->getAttribute(($context["particle"] ?? null), "class", [])) . "\"")) : (""));
        echo "    
    ";
        // line 486
        $context["image_height"] = (($this->getAttribute(($context["particle"] ?? null), "image_height", [])) ? ((("style=\"max-height: " . $this->getAttribute(($context["particle"] ?? null), "image_height", [])) . "\"")) : (""));
        // line 487
        echo "
    ";
        // line 488
        if ($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) {
            // line 489
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])));
            echo "\" ";
            echo ((array_key_exists("image_height", $context)) ? (_twig_default_filter(($context["image_height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "svg_support", [])) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 491
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
            echo " 
    ";
        }
        // line 493
        echo "
";
        $context["mobile_logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 495
        echo "
";
        // line 497
        echo "
";
        // line 498
        if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
            // line 499
            echo "
<div id=\"";
            // line 500
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"tm-header";
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" menu-extended") : (" menu-simple"));
            if (twig_in_filter($this->getAttribute(($context["particle"] ?? null), "layout", []), [0 => "left", 1 => "center", 2 => "right"])) {
                echo " horizontal-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", []));
            }
            echo " jl-visible@";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
            if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                echo " jl-header-overlay";
            }
            echo "\" jl-header>

";
            // line 502
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 503
                echo "<div jl-sticky media=\"@";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
                echo "\"";
                echo ((($this->getAttribute(($context["particle"] ?? null), "sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
                if ($this->getAttribute(($context["particle"] ?? null), "top", [])) {
                    echo " top=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "top", []));
                    echo "\"";
                }
                if ($this->getAttribute(($context["particle"] ?? null), "offset", [])) {
                    echo " offset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offset", []));
                    echo "\"";
                }
                echo " cls-active=\"jl-navbar-sticky\"";
                if ($this->getAttribute(($context["particle"] ?? null), "transparent_header", [])) {
                    echo " cls-inactive=\"jl-navbar-transparent jl-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
                    echo "\"";
                }
                echo " sel-target=\".jl-navbar-container\">
";
            }
            // line 505
            echo "
<div class=\"jl-navbar-container";
            // line 506
            if (($this->getAttribute(($context["particle"] ?? null), "transparent_header", []) &&  !$this->getAttribute(($context["particle"] ?? null), "sticky", []))) {
                echo " jl-navbar-transparent jl-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "transparent_header", []));
            }
            echo "\">

";
            // line 508
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 509
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 510
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("<div class=\"navbar-wrapper\">") : (""));
                echo "
";
            }
            // line 512
            echo "
    <nav class=\"jl-navbar";
            // line 513
            echo (($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) ? (" jl-main-nav") : (" g-main-nav"));
            echo "\"";
            if ($this->getAttribute(($context["particle"] ?? null), "navbar_style", [])) {
                echo " jl-navbar=\"boundary: #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar;";
                ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_alignment", []))) ? (print (twig_escape_filter($this->env, ((" align: " . twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "dropdown_alignment", []))) . ";"), "html", null, true))) : (print ("")));
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click"));
                echo "\"";
            } else {
                echo (($this->getAttribute(($context["particle"] ?? null), "mobileTarget", [])) ? (" data-g-mobile-target") : (""));
                echo " data-g-hover-expand=\"";
                echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("true") : ("false"));
                echo "\"";
            }
            echo ">

        ";
            // line 515
            if ((($context["logo_init"] ?? null) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left"))) {
                // line 516
                echo "        <div class=\"jl-navbar-left\">

        ";
                // line 518
                if (($context["logo_init"] ?? null)) {
                    // line 519
                    echo "            <a class=\"jl-navbar-item jl-logo\" href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\" aria-label=\"";
                    echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                    echo "\" rel=\"home\" ";
                    echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                    echo ">
                ";
                    // line 520
                    echo twig_escape_filter($this->env, ($context["logo_render"] ?? null), "html", null, true);
                    echo "
            </a>
        ";
                }
                // line 523
                echo "
        ";
                // line 524
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left")) {
                    // line 525
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 526
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 529
                echo "
        ";
                // line 530
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 531
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 532
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 535
                echo "
        ";
                // line 536
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "left") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 537
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child custom\">
                ";
                    // line 539
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 543
                echo "
        </div>
        ";
            }
            // line 546
            echo "
        ";
            // line 547
            if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                // line 548
                echo "
        <div class=\"jl-navbar-center\">

        ";
                // line 551
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center")) {
                    // line 552
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 553
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 556
                echo "
        ";
                // line 557
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 558
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 559
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 562
                echo "
        ";
                // line 563
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "center") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 564
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 566
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 570
                echo "
        </div>
        ";
            }
            // line 573
            echo "
        ";
            // line 574
            if ((((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") || ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) || ($this->getAttribute(($context["particle"] ?? null), "html_pos", []) == "header")) || ($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right"))) {
                // line 575
                echo "        <div class=\"jl-navbar-right\">

        ";
                // line 577
                if (($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right")) {
                    // line 578
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "navbar_style", []))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 579
                    echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
                    echo "
        </ul>
        ";
                }
                // line 582
                echo "
        ";
                // line 583
                if ((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "navbar"))) {
                    // line 584
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 585
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 588
                echo "
        ";
                // line 589
                if (((($this->getAttribute(($context["particle"] ?? null), "layout", []) == "right") && ($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "navbar")) && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 590
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 592
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 596
                echo "
        ";
                // line 597
                if (($this->getAttribute(($context["particle"] ?? null), "search_pos", []) == "header")) {
                    // line 598
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 599
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 602
                echo "
        ";
                // line 603
                if ((($this->getAttribute(($context["particle"] ?? null), "social_pos", []) == "header") && $this->getAttribute(($context["particle"] ?? null), "social_items", []))) {
                    // line 604
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 606
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 610
                echo "
        </div>
        ";
            }
            // line 613
            echo "
    </nav>

";
            // line 616
            if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
                // line 617
                echo "        ";
                echo ((($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", []) == "custom")) ? ("</div>") : (""));
                echo "
    </div>
";
            }
            // line 620
            echo "</div>

";
            // line 622
            if (($this->getAttribute(($context["particle"] ?? null), "sticky", []) && twig_test_empty($this->getAttribute(($context["particle"] ?? null), "section", [])))) {
                // line 623
                echo "</div>
";
            }
            // line 625
            echo "
</div>
";
        }
        // line 628
        echo "
";
        // line 630
        echo "
<div class=\"";
        // line 631
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            echo "tm-header-mobile ";
        }
        echo "jl-hidden@";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "menu_visibility", []));
        echo "\">

";
        // line 633
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 634
            echo "<div jl-sticky";
            echo ((($this->getAttribute(($context["particle"] ?? null), "m_sticky", []) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
            if ($this->getAttribute(($context["particle"] ?? null), "ms_top", [])) {
                echo " top=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_top", []));
                echo "\"";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "ms_offset", [])) {
                echo " offset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "ms_offset", []));
                echo "\"";
            }
            echo " cls-active=\"jl-navbar-sticky\" sel-target=\".jl-navbar-container\">
";
        }
        // line 636
        echo "
<div class=\"jl-navbar-container\">

    ";
        // line 639
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 640
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 642
        echo "
        <nav class=\"jl-navbar\" jl-navbar=\"container: .tm-header-mobile\">

            ";
        // line 645
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left"))) {
            // line 646
            echo "
                <div class=\"jl-navbar-left\">

                    ";
            // line 649
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "left")) {
                // line 650
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 651
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 654
            echo "
                    ";
            // line 655
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "left")) {
                // line 656
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 658
            echo "
                </div>
            ";
        }
        // line 661
        echo "
            ";
        // line 662
        if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "center")) {
            // line 663
            echo "                <div class=\"jl-navbar-center\">
                    <a class=\"jl-navbar-item jl-logo\" href=\"";
            // line 664
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
            echo "\" rel=\"home\" ";
            echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
            echo ">
                        ";
            // line 665
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 669
        echo "
            ";
        // line 670
        if ((($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right") || ($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right"))) {
            // line 671
            echo "                <div class=\"jl-navbar-right\">
                    ";
            // line 672
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_logo", []) == "right")) {
                // line 673
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["particle"] ?? null), "text", [])), "html", null, true);
                echo "\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 674
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile_logo_image", [])) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 677
            echo "
                    ";
            // line 678
            if (($this->getAttribute(($context["particle"] ?? null), "mobile_menu_toggle", []) == "right")) {
                // line 679
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 681
            echo "                </div>
            ";
        }
        // line 683
        echo "
        </nav>

    ";
        // line 686
        if ($this->getAttribute(($context["particle"] ?? null), "container_maxwidth", [])) {
            // line 687
            echo "        </div>
    ";
        }
        // line 689
        echo "
</div>

";
        // line 692
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) == "dropdown")) {
            // line 693
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 693);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
        }
        // line 695
        if ($this->getAttribute(($context["particle"] ?? null), "m_sticky", [])) {
            // line 696
            echo "</div>
";
        }
        // line 698
        echo "
";
        // line 699
        if (($this->getAttribute(($context["particle"] ?? null), "menu_animation", []) != "dropdown")) {
            // line 700
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 700);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
        }
        // line 702
        echo "
</div>
";
    }

    // line 212
    public function getgetCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 213
            if ((((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && ($this->getAttribute(($context["item"] ?? null), "level", []) > ($context["start_level"] ?? null))))) {
                // line 214
                if ((($context["mode"] ?? null) == "item")) {
                    echo " style=\"position: relative;\"";
                } elseif ((                // line 215
($context["mode"] ?? null) == "submenu")) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo "\"";
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 220
    public function getdisplayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 221
            echo "    ";
            try {                // line 222
                echo "    ";
                $context["in_particle"] = (((($this->getAttribute(($context["context"] ?? null), "in_particle", [], "any", true, true) &&  !(null === $this->getAttribute(($context["context"] ?? null), "in_particle", [])))) ? ($this->getAttribute(($context["context"] ?? null), "in_particle", [])) : (0)) + 1);
                // line 223
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 224
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 225
                    echo "    ";
                }
                // line 226
                echo "
    ";
                // line 227
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 228
                echo "    ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
                // line 229
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 230
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
                try {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                     $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/jlnavbar.html.twig", 230);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display(twig_to_array(                    // line 231
($context["context"] ?? null)));
                }
                // line 232
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 234
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
                echo "</div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 238
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 239
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 240
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 241
                    echo "        <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        <div class=\"jl-navbar-subtitle\">";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 244
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "
        ";
                }
                // line 246
                echo "    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 249
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 250
            echo "    ";
            $context["self"] = $this;
            // line 251
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                // line 252
                echo "        ";
                $context["enabled"] = 0;
                // line 253
                echo "    ";
            }
            // line 254
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 255
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 256
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 257
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 258
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" jl-active") : (""));
                    // line 259
                    echo "        ";
                } else {
                    // line 260
                    echo "        ";
                    $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" active") : (""));
                    // line 261
                    echo "        ";
                }
                // line 262
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == ($context["start_level"] ?? null))) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 263
                echo "        ";
                $context["parrentIcon"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "parrentIcon", []);
                // line 264
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 265
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" jl-parent") : (""));
                    // line 266
                    echo "        ";
                } else {
                    // line 267
                    echo "        ";
                    $context["parent"] = ((($this->getAttribute(($context["item"] ?? null), "hasChildren", [], "method") &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) ? (" g-parent") : (""));
                    // line 268
                    echo "        ";
                }
                echo "        
        
        ";
                // line 270
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 271
                echo "        ";
                $context["rel"] = $this->getAttribute(($context["item"] ?? null), "rel", []);
                // line 272
                echo "
        ";
                // line 273
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_blank")) {
                    // line 274
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 275
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 276
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 277
                        echo "            ";
                    }
                    // line 278
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 279
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 280
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 281
                        echo "            ";
                    }
                    // line 282
                    echo "        ";
                }
                // line 283
                echo "
        ";
                // line 284
                $context["listAttributes"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["item"] ?? null), "attributes", []));
                // line 285
                echo "        ";
                $context["linkAttributes"] = "";
                // line 286
                echo "
        ";
                // line 287
                if ($this->getAttribute(($context["item"] ?? null), "link_attributes", [])) {
                    // line 288
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "link_attributes", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 289
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 290
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 291
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 292
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 293
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 294
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 295
                                        echo "                            ";
                                    }
                                    // line 296
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 297
                                echo "                    ";
                            } else {
                                // line 298
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 299
                                echo "                    ";
                            }
                            // line 300
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 301
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    echo "        ";
                }
                // line 303
                echo "
        ";
                // line 305
                echo "        ";
                if (($this->getAttribute(($context["item"] ?? null), "target", []) == "_nonav")) {
                    // line 306
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 307
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 308
                    echo "        ";
                }
                // line 309
                echo "
        ";
                // line 310
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 311
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 312
                    echo "        <li class=\"item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    if ($this->getAttribute(($context["item"] ?? null), "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    }
                    if ( !($context["parent"] ?? null)) {
                        if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "separator") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                            echo " jl-nav-divider";
                        } elseif ((($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") && ($this->getAttribute(($context["item"] ?? null), "level", []) != 1))) {
                            echo " jl-nav-header";
                        }
                    }
                    echo "\"";
                    // line 313
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 314
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
                ";
                    // line 315
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 316
                        echo "                    <a";
                        if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                            echo " class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        if ($this->getAttribute(($context["item"] ?? null), "hash", [])) {
                            echo " jl-scroll";
                        }
                        echo ">
                        ";
                        // line 317
                        if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                            // line 318
                            echo "                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                            echo "\" />
                        ";
                        } elseif ($this->getAttribute(                        // line 319
($context["item"] ?? null), "icon", [])) {
                            // line 320
                            echo "                            <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>
                        ";
                        }
                        // line 322
                        echo "                        ";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                        ";
                        // line 323
                        if (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) && ($context["parrentIcon"] ?? null))) {
                            // line 324
                            echo "<span jl-navbar-parent-icon></span>";
                        }
                        // line 326
                        echo "                    </a>
                ";
                    } else {
                        // line 328
                        echo "                    ";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                            // line 329
                            echo "                        <a";
                            if ($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) {
                                echo " class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "anchor_class", []), "html", null, true);
                                echo "\"";
                            }
                            echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                            if ((( !twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) && ($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) && (($this->getAttribute(($context["item"] ?? null), "type", []) == "heading") || ($this->getAttribute(($context["item"] ?? null), "type", []) == "separator")))) {
                                echo " aria-haspopup=\"true\" aria-expanded=\"false\" tabindex=\"0\"";
                            }
                            echo ">
                    ";
                        }
                        // line 331
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 332
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 333
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 334
                            echo "                        ";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "
                    ";
                        } else {
                            // line 336
                            echo "                    
                    ";
                            // line 337
                            if ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1) || ($context["parent"] ?? null))) {
                                // line 338
                                echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            }
                            // line 340
                            echo "
                    ";
                        }
                        // line 342
                        echo "
                    ";
                        // line 343
                        if (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) && ($context["parrentIcon"] ?? null))) {
                            // line 344
                            echo "<span jl-navbar-parent-icon></span>";
                        }
                        // line 346
                        echo "
                    ";
                        // line 347
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "children", [])) || ($this->getAttribute(($context["item"] ?? null), "level", []) == 1))) {
                            // line 348
                            echo "                        </a>
                    ";
                        }
                        // line 350
                        echo " 
                ";
                    }
                    // line 352
                    echo "
        ";
                } else {
                    // line 354
                    echo "        <li class=\"g-menu-item g-menu-item-type-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                    echo " g-menu-item-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
                    echo " ";
                    if (($this->getAttribute(($context["item"] ?? null), "url", []) && ($context["parent"] ?? null))) {
                        if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                            echo "g-menu-item-link-parent";
                        }
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                    echo "\"";
                    // line 355
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                    // line 356
                    if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
            ";
                    // line 357
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 358
                        echo "                <a class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        echo ">
            ";
                    } else {
                        // line 360
                        echo "                <div class=\"g-menu-item-container";
                        (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? (print (twig_escape_filter($this->env, (" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", [])), "html", null, true))) : (print ("")));
                        echo "\" data-g-menuparent=\"\"";
                        echo ($context["label"] ?? null);
                        echo ">";
                    }
                    // line 361
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                        // line 362
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                        echo "\" />
                ";
                    } elseif ($this->getAttribute(                    // line 363
($context["item"] ?? null), "icon", [])) {
                        // line 364
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                ";
                    }
                    // line 366
                    echo "                ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        // line 367
                        echo "                    <span class=\"g-menu-item-content\">
                        ";
                        // line 368
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "
                    </span>
                    ";
                        // line 370
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 371
                            echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                        }
                        // line 373
                        echo "                ";
                    } else {
                        // line 374
                        echo "                    ";
                        if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                            // line 375
                            echo "                        ";
                            echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                            echo "
                    ";
                        } elseif (($this->getAttribute(                        // line 376
($context["item"] ?? null), "type", []) == "heading")) {
                            // line 377
                            echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                    ";
                        } else {
                            // line 379
                            echo "                        <span class=\"g-separator g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                            echo "</span>
                    ";
                        }
                        // line 381
                        echo "                    ";
                        if ((($context["parent"] ?? null) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                            // line 382
                            echo "<span class=\"g-menu-parent-indicator\"></span>";
                        }
                        // line 384
                        echo "                ";
                    }
                    // line 385
                    echo "            ";
                    if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                        echo "</a>
            ";
                    } else {
                        // line 386
                        echo "</div>";
                    }
                    // line 387
                    echo "            ";
                }
                // line 388
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 389
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                }
                // line 391
                echo "        </li>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 395
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 396
            echo "    ";
            $context["self"] = $this;
            // line 397
            echo "    ";
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 398
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                // line 399
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 400
                    echo "        ";
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "<div>";
                    }
                    // line 401
                    echo "            ";
                    if (($this->getAttribute(($context["item"] ?? null), "level", []) >= 2)) {
                        // line 402
                        echo "                <ul class=\"jl-nav-sub\">
            ";
                    } else {
                        // line 404
                        echo "                <ul class=\"jl-nav jl-nav-";
                        echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_nav_style", [])) ? ("secondary") : ("default"));
                        echo (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_nav_divider", [])) ? (" jl-nav-divider") : (""));
                        echo " jl-navbar-dropdown-nav\">
            ";
                    }
                    // line 406
                    echo "                ";
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </ul>
        ";
                    // line 408
                    if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                        echo "</div>";
                    }
                    // line 409
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
    ";
            } else {
                // line 411
                echo "        <div class=\"g-grid\">
        ";
                // line 412
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 413
                    echo "            <div class=\"g-block ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method")]), "html", null, true);
                    echo "\">
                <ul class=\"g-sublevel\">
                    ";
                    // line 415
                    echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
                </ul>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                echo "        </div>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 423
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 424
            echo "    ";
            $context["self"] = $this;
            // line 425
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 426
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? ($this->getAttribute($context["item"], "level", [])))));
                // line 427
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? ($this->getAttribute($context["item"], "dropdown", [])));
                // line 428
                echo "        ";
                echo $context["self"]->getdisplayItem($context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown"] ?? null), ($context["start_level"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 432
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 433
            echo "    ";
            $context["self"] = $this;
            // line 434
            echo "    ";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 435
                echo "        ";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 436
                echo "        ";
                $context["dropdown_offset"] = ((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_offset", []))) ? ((("offset: " . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_offset", []))) . ";")) : (""));
                // line 437
                echo "        ";
                $context["dropdown_alignment"] = (((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_alignment", [])) &&  !$this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", []))) ? ((("pos: bottom-" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_alignment", []))) . ";")) : (""));
                // line 438
                echo "        ";
                $context["navbar_animation"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) ? ((("animation: " . $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", [])) . "; animate-out: true;")) : (""));
                // line 439
                echo "        ";
                $context["dropdown_stretch"] = (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_stretch", [])) ? ("stretch: x; flip: false;") : (""));
                // line 440
                echo "        ";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 441
                    echo "            ";
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                    // line 442
                    echo "        ";
                }
                // line 443
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_style", [])) {
                    // line 444
                    echo "        ";
                    if (($this->getAttribute(($context["item"] ?? null), "level", []) >= 2)) {
                        // line 445
                        echo "            ";
                        echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo "
        ";
                    } else {
                        // line 447
                        echo "        <div class=\"jl-navbar-dropdown";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo " jl-navbar-dropdown-width-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                        }
                        if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                        }
                        echo "\"";
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 3)) {
                            echo " jl-drop=\"target: #";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "id", []), "html", null, true);
                            echo " .jl-navbar;flip: false;";
                            echo (((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "hoverExpand", []), "true")) : ("true"))) ? ("") : (" mode: click;"));
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        if (((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) <= 3) && ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "navbar_dropdown_animation", []) || $this->getAttribute(($context["context"] ?? null), "dropdown_offset", [])))) {
                            echo " jl-dropdown=\"";
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo ">
            ";
                        // line 448
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo "<div class=\"jl-navbar-dropdown-grid jl-child-width-1-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])), "html", null, true);
                            echo "\" jl-grid>";
                        }
                        // line 449
                        echo "                ";
                        echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                        echo "
            ";
                        // line 450
                        if ((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) > 1)) {
                            echo "</div>";
                        }
                        // line 451
                        echo "        </div>
        ";
                    }
                    // line 453
                    echo "        ";
                } else {
                    // line 454
                    echo "        <ul class=\"g-dropdown g-inactive ";
                    echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["dropdown_dir"] ?? null), "html", null, true);
                    if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", [])) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "dropdown_navbar_text_transform", []));
                    }
                    echo "\"";
                    echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo ">
            <li class=\"g-dropdown-column\">
               ";
                    // line 456
                    echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null));
                    echo "
            </li>
        </ul>        
        ";
                }
                // line 460
                echo "
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/jlnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2384 => 460,  2377 => 456,  2363 => 454,  2360 => 453,  2356 => 451,  2352 => 450,  2347 => 449,  2341 => 448,  2308 => 447,  2302 => 445,  2299 => 444,  2296 => 443,  2293 => 442,  2290 => 441,  2287 => 440,  2284 => 439,  2281 => 438,  2278 => 437,  2275 => 436,  2272 => 435,  2269 => 434,  2266 => 433,  2250 => 432,  2228 => 428,  2225 => 427,  2222 => 426,  2217 => 425,  2214 => 424,  2198 => 423,  2181 => 419,  2171 => 415,  2165 => 413,  2161 => 412,  2158 => 411,  2149 => 409,  2145 => 408,  2139 => 406,  2132 => 404,  2128 => 402,  2125 => 401,  2120 => 400,  2115 => 399,  2112 => 398,  2109 => 397,  2106 => 396,  2090 => 395,  2073 => 391,  2070 => 389,  2067 => 388,  2064 => 387,  2061 => 386,  2055 => 385,  2052 => 384,  2049 => 382,  2046 => 381,  2038 => 379,  2030 => 377,  2028 => 376,  2023 => 375,  2020 => 374,  2017 => 373,  2014 => 371,  2012 => 370,  2007 => 368,  2004 => 367,  2001 => 366,  1995 => 364,  1993 => 363,  1986 => 362,  1983 => 361,  1976 => 360,  1965 => 358,  1963 => 357,  1954 => 356,  1952 => 355,  1933 => 354,  1929 => 352,  1925 => 350,  1921 => 348,  1919 => 347,  1916 => 346,  1913 => 344,  1911 => 343,  1908 => 342,  1904 => 340,  1901 => 338,  1899 => 337,  1896 => 336,  1890 => 334,  1888 => 333,  1883 => 332,  1880 => 331,  1866 => 329,  1863 => 328,  1859 => 326,  1856 => 324,  1854 => 323,  1849 => 322,  1843 => 320,  1841 => 319,  1834 => 318,  1832 => 317,  1815 => 316,  1813 => 315,  1804 => 314,  1802 => 313,  1783 => 312,  1780 => 311,  1778 => 310,  1775 => 309,  1772 => 308,  1769 => 307,  1766 => 306,  1763 => 305,  1760 => 303,  1757 => 302,  1751 => 301,  1745 => 300,  1742 => 299,  1739 => 298,  1736 => 297,  1730 => 296,  1727 => 295,  1724 => 294,  1721 => 293,  1718 => 292,  1713 => 291,  1710 => 290,  1705 => 289,  1700 => 288,  1698 => 287,  1695 => 286,  1692 => 285,  1690 => 284,  1687 => 283,  1684 => 282,  1681 => 281,  1678 => 280,  1675 => 279,  1672 => 278,  1669 => 277,  1666 => 276,  1663 => 275,  1660 => 274,  1658 => 273,  1655 => 272,  1652 => 271,  1650 => 270,  1644 => 268,  1641 => 267,  1638 => 266,  1635 => 265,  1632 => 264,  1629 => 263,  1626 => 262,  1623 => 261,  1620 => 260,  1617 => 259,  1614 => 258,  1611 => 257,  1608 => 256,  1605 => 255,  1602 => 254,  1599 => 253,  1596 => 252,  1593 => 251,  1590 => 250,  1574 => 249,  1558 => 246,  1552 => 244,  1547 => 242,  1542 => 241,  1539 => 240,  1536 => 239,  1524 => 238,  1505 => 234,  1498 => 232,  1495 => 231,  1487 => 230,  1482 => 229,  1479 => 228,  1477 => 227,  1474 => 226,  1471 => 225,  1468 => 224,  1465 => 223,  1462 => 222,  1460 => 221,  1447 => 220,  1425 => 215,  1422 => 214,  1420 => 213,  1404 => 212,  1398 => 702,  1387 => 700,  1385 => 699,  1382 => 698,  1378 => 696,  1376 => 695,  1365 => 693,  1363 => 692,  1358 => 689,  1354 => 687,  1352 => 686,  1347 => 683,  1343 => 681,  1337 => 679,  1335 => 678,  1332 => 677,  1326 => 674,  1315 => 673,  1313 => 672,  1310 => 671,  1308 => 670,  1305 => 669,  1298 => 665,  1288 => 664,  1285 => 663,  1283 => 662,  1280 => 661,  1275 => 658,  1269 => 656,  1267 => 655,  1264 => 654,  1258 => 651,  1247 => 650,  1245 => 649,  1240 => 646,  1238 => 645,  1233 => 642,  1227 => 640,  1225 => 639,  1220 => 636,  1204 => 634,  1202 => 633,  1193 => 631,  1190 => 630,  1187 => 628,  1182 => 625,  1178 => 623,  1176 => 622,  1172 => 620,  1165 => 617,  1163 => 616,  1158 => 613,  1153 => 610,  1146 => 606,  1142 => 604,  1140 => 603,  1137 => 602,  1131 => 599,  1128 => 598,  1126 => 597,  1123 => 596,  1116 => 592,  1112 => 590,  1110 => 589,  1107 => 588,  1101 => 585,  1098 => 584,  1096 => 583,  1093 => 582,  1087 => 579,  1082 => 578,  1080 => 577,  1076 => 575,  1074 => 574,  1071 => 573,  1066 => 570,  1059 => 566,  1055 => 564,  1053 => 563,  1050 => 562,  1044 => 559,  1041 => 558,  1039 => 557,  1036 => 556,  1030 => 553,  1025 => 552,  1023 => 551,  1018 => 548,  1016 => 547,  1013 => 546,  1008 => 543,  1001 => 539,  997 => 537,  995 => 536,  992 => 535,  986 => 532,  983 => 531,  981 => 530,  978 => 529,  972 => 526,  967 => 525,  965 => 524,  962 => 523,  956 => 520,  945 => 519,  943 => 518,  939 => 516,  937 => 515,  918 => 513,  915 => 512,  910 => 510,  905 => 509,  903 => 508,  895 => 506,  892 => 505,  868 => 503,  866 => 502,  850 => 500,  847 => 499,  845 => 498,  842 => 497,  839 => 495,  835 => 493,  829 => 491,  817 => 489,  815 => 488,  812 => 487,  810 => 486,  806 => 485,  803 => 484,  801 => 483,  798 => 482,  794 => 480,  788 => 478,  776 => 476,  774 => 475,  771 => 474,  768 => 473,  766 => 472,  763 => 471,  761 => 470,  758 => 469,  756 => 468,  752 => 467,  750 => 466,  747 => 465,  745 => 464,  742 => 463,  739 => 431,  736 => 422,  733 => 394,  730 => 248,  727 => 237,  724 => 219,  721 => 211,  715 => 207,  709 => 204,  702 => 202,  697 => 201,  691 => 198,  685 => 195,  680 => 194,  678 => 193,  672 => 190,  667 => 189,  660 => 185,  653 => 183,  649 => 182,  644 => 181,  638 => 178,  632 => 175,  628 => 174,  623 => 173,  620 => 172,  618 => 171,  616 => 170,  613 => 168,  611 => 167,  608 => 166,  604 => 164,  587 => 161,  584 => 160,  580 => 159,  568 => 158,  566 => 157,  563 => 155,  559 => 153,  553 => 152,  550 => 151,  544 => 150,  539 => 149,  537 => 148,  534 => 147,  532 => 146,  522 => 143,  514 => 142,  508 => 139,  503 => 138,  501 => 137,  493 => 135,  491 => 134,  482 => 131,  480 => 130,  472 => 128,  470 => 127,  462 => 125,  460 => 124,  450 => 122,  448 => 121,  439 => 120,  427 => 118,  425 => 117,  421 => 115,  415 => 113,  413 => 112,  407 => 110,  405 => 109,  399 => 107,  397 => 106,  391 => 104,  389 => 103,  384 => 102,  382 => 101,  373 => 98,  371 => 97,  365 => 96,  358 => 95,  356 => 94,  349 => 92,  344 => 91,  342 => 90,  334 => 88,  332 => 87,  322 => 85,  320 => 84,  313 => 82,  308 => 81,  306 => 80,  299 => 76,  292 => 75,  290 => 74,  282 => 72,  280 => 71,  270 => 69,  268 => 68,  258 => 67,  246 => 65,  244 => 64,  236 => 62,  234 => 61,  230 => 59,  223 => 58,  216 => 57,  209 => 56,  203 => 55,  198 => 54,  196 => 53,  186 => 51,  184 => 50,  172 => 48,  170 => 47,  162 => 45,  160 => 44,  148 => 42,  146 => 41,  138 => 39,  136 => 38,  134 => 37,  120 => 35,  118 => 34,  110 => 33,  104 => 32,  102 => 31,  100 => 30,  97 => 28,  95 => 27,  93 => 26,  90 => 25,  87 => 23,  81 => 20,  76 => 19,  70 => 17,  67 => 16,  62 => 13,  60 => 12,  55 => 11,  53 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavbar.html.twig", "C:\\xampp\\htdocs\\colegiop\\templates\\jl_meta_lite\\particles\\jlnavbar.html.twig");
    }
}
