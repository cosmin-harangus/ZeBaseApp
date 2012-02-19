<?php

/* @tpl.root_two_columns */
class __TwigTemplate_41ac5f8131bf69e254cb81f44da8dcbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'html' => array($this, 'block_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@tpl.root_two_columns";
    }

}
