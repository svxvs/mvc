<?php

/* add.html */
class __TwigTemplate_85bde7ef26ba8216b1984b1c81d6e18fe1246ca5a94a6a09c1b14f306edfa5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("md_add.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "md_add.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form action=\"/index/mvc_add\" method=\"post\">
    <input type=\"text\" name=\"add_test\" placeholder=\"在这里输入内容\"><input type=\"submit\" value=\"提交\">
</form>
";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["titel"]) ? $context["titel"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"md_add.html\" %}
{% block content %}
<form action=\"/index/mvc_add\" method=\"post\">
    <input type=\"text\" name=\"add_test\" placeholder=\"在这里输入内容\"><input type=\"submit\" value=\"提交\">
</form>
{{ titel }}
{% endblock %}";
    }
}
