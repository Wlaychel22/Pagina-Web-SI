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

/* partials/page_head.html.twig */
class __TwigTemplate_92ccb615b6dec70d6f561a7358d094fa4a344c0c8d007ecdce05dd6adbb065eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_application' => [$this, 'block_head_application'],
            'head_platform' => [$this, 'block_head_platform'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/page_head.html.twig", "partials/page_head.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_title($context, array $blocks = [])
    {
    }

    // line 6
    public function block_head_application($context, array $blocks = [])
    {
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "checkVersion", [0 => 4], "method")) {
            echo " ";
            // line 8
            echo "    <jdoc:include type=\"metas\" />
    <jdoc:include type=\"styles\" />
    <jdoc:include type=\"scripts\" />
    ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 11
($context["gantry"] ?? null), "platform", []), "checkVersion", [0 => 3], "method")) {
            echo " ";
            // line 12
            echo "    <jdoc:include type=\"head\" />
    ";
        }
    }

    // line 16
    public function block_head_platform($context, array $blocks = [])
    {
        // line 17
        $this->displayParentBlock("head_platform", $context, $blocks);
        echo "
    ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "joomla", [])) {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "checkVersion", [0 => 4], "method")) {
                echo " ";
                // line 20
                echo "            ";
                if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) != "rtl")) {
                    // line 21
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-engine://css-compiled/bootstrap5.css"), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                } else {
                    // line 23
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-engine://css-compiled/bootstrap5-rtl.css"), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                }
                // line 25
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("media/system/css/joomla-fontawesome.min.css"), "html", null, true);
                echo "\" type=\"text/css\" />
        ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 26
($context["gantry"] ?? null), "platform", []), "checkVersion", [0 => 3], "method")) {
                echo " ";
                // line 27
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://css/bootstrap-gantry.css"), "html", null, true);
                echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-engine://css-compiled/joomla.css"), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
                // line 29
                if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
                    // line 30
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("media/jui/css/bootstrap-rtl.css"), "html", null, true);
                    echo "\" type=\"text/css\" />
            ";
                }
                // line 32
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("media/jui/css/icomoon.css"), "html", null, true);
                echo "\" type=\"text/css\" />
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ($this->getAttribute(($context["gantry"] ?? null), "debug", [])) {
            // line 37
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("media/cms/css/debug.css"), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
    }

    // line 41
    public function block_head($context, array $blocks = [])
    {
        // line 42
        $this->displayParentBlock("head", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  142 => 41,  134 => 37,  132 => 36,  129 => 35,  126 => 34,  120 => 32,  114 => 30,  112 => 29,  108 => 28,  103 => 27,  100 => 26,  95 => 25,  89 => 23,  83 => 21,  80 => 20,  76 => 19,  74 => 18,  70 => 17,  67 => 16,  61 => 12,  58 => 11,  53 => 8,  50 => 7,  47 => 6,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/page_head.html.twig", "C:\\xampp\\htdocs\\colegiop\\media\\gantry5\\engines\\nucleus\\twig\\partials\\page_head.html.twig");
    }
}
