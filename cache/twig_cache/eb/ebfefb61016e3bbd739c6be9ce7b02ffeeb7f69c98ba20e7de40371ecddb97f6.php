<?php

/* addfortest1.html */
class __TwigTemplate_cae8b125a9bcb5a3b164ee6d27805192140e197a866ece935d24d7fadc0f81f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("md_showallfortest.html", "addfortest1.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "md_showallfortest.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["titel"]) ? $context["titel"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "addfortest1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"md_showallfortest.html\" %}
{% block content %}
{{ data }}
{{ titel }}
{% endblock %}";
    }
}
