<?php

/* error/index */
class __TwigTemplate_9ddbbea211075ea1aac7fddff803a04e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>An error occurred</h1>
<h2>";
        // line 2
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $_message_, "html", null, true);
        echo "</h2>

";
        // line 4
        if (isset($context["display_exceptions"])) { $_display_exceptions_ = $context["display_exceptions"]; } else { $_display_exceptions_ = null; }
        if ((isset($_display_exceptions_) && $_display_exceptions_)) {
            // line 5
            echo "
";
            // line 6
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            if (isset($_exception_)) {
                // line 7
                echo "
<h3>Exception information:</h3>
<p>
    <h4>Message:</h4>
    <pre>";
                // line 11
                if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "getMessage"), "html", null, true);
                echo "</pre>
    <h4>Stack trace:</h4>
    <pre>";
                // line 13
                if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "getTraceAsString"), "html", null, true);
                echo "</pre>
</p>

";
            } else {
                // line 17
                echo "
<h3>No Exception available</h3>

";
            }
            // line 21
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "error/index";
    }

    public function isTraitable()
    {
        return false;
    }
}
