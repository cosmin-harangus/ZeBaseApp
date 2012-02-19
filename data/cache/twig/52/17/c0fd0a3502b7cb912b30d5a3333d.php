<?php

/* ze-auth-auth/index */
class __TwigTemplate_5217c0fd0a3502b7cb912b30d5a3333d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"login\">
        <h3>Login</h3>
        ";
        // line 6
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "ze-auth-auth/index";
    }

    public function isTraitable()
    {
        return false;
    }
}
