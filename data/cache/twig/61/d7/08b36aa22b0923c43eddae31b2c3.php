<?php

/* layouts/layout */
class __TwigTemplate_61d708b36aa22b0923c43eddae31b2c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'html' => array($this, 'block_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@tpl.root_two_columns";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
    }

    // line 2
    public function block_html($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->getEnvironment()->plugin("doctype")->__invoke("XHTML11");
        echo "

    <html lang=\"en\">
        <head>
            <base href=\"";
        // line 7
        echo $this->getEnvironment()->plugin("basePath")->__invoke();
        echo "\" />
            ";
        // line 8
        echo $this->getEnvironment()->plugin("headTitle")->__invoke();
        echo "
            ";
        // line 9
        echo $this->getEnvironment()->plugin("headMeta")->__invoke();
        echo "

            <script src=\"/js/html5.js\" type=\"text/javascript\"></script>
            ";
        // line 12
        echo $this->getEnvironment()->plugin("headScript")->__invoke();
        echo "

            <link rel=\"shortcut icon\" href=\"/images/favicon.ico\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/default.css\" />
            ";
        // line 17
        echo $this->getEnvironment()->plugin("headLink")->__invoke();
        echo "

        </head>

        <body>

            <div class=\"topbar\">
                <div class=\"fill\">
                    <div class=\"container\">
                        <a class=\"brand\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getEnvironment()->plugin("url")->__invoke("home"), "html", null, true);
        echo "\">ProjectQuery</a>
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getEnvironment()->plugin("url")->__invoke("home"), "html", null, true);
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getEnvironment()->plugin("url")->__invoke("ze-auth"), "html", null, true);
        echo "\">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /topbar -->

            <div class=\"container\">
                ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "
                <footer>
                    <p>&copy; 2006 - ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_converter($this->env, "Y"), "html", null, true);
        echo " by Around25 Srl. All rights reserved.</p>
                </footer>
            </div> <!-- /container -->

        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "layouts/layout";
    }

    public function isTraitable()
    {
        return false;
    }
}
