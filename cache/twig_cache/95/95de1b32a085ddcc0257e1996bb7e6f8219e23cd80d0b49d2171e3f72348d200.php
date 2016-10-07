<?php

/* md_showallfortest.html */
class __TwigTemplate_045a9331f233e2853348bb425a5dee4c1ba925386e8b105e2dbdb94d44e27fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>

<header>头</header>
<content>
";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "</content>
<footer>脚</footer>
</body>

</html>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "md_showallfortest.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  29 => 8,  27 => 6,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
<body>

<header>头</header>
<content>
{% block content %}
{% endblock %}
</content>
<footer>脚</footer>
</body>

</html>";
    }
}
