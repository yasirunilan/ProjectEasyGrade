<?php

/* NSEPBundle:Default:index.html.twig */
class __TwigTemplate_a98ca1d98143a971795c1774f6ecead31e750a2f6e5eb93a9e4f2b8d3324d321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_046e3b4c2a68438f4c4977317deac1a007b166aec86ed4e2cfc0fa20cbc3b6b6 = $this->env->getExtension("native_profiler");
        $__internal_046e3b4c2a68438f4c4977317deac1a007b166aec86ed4e2cfc0fa20cbc3b6b6->enter($__internal_046e3b4c2a68438f4c4977317deac1a007b166aec86ed4e2cfc0fa20cbc3b6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<head></head>
<body>
<div id=\"div_chart\"></div>

<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
<script type=\"text/javascript\">
    ";
        // line 8
        echo $this->env->getExtension('cmen_google_charts_extension')->draw((isset($context["histogram"]) ? $context["histogram"] : $this->getContext($context, "histogram")), "div_chart");
        echo "
</script>
</body>
</html>";
        
        $__internal_046e3b4c2a68438f4c4977317deac1a007b166aec86ed4e2cfc0fa20cbc3b6b6->leave($__internal_046e3b4c2a68438f4c4977317deac1a007b166aec86ed4e2cfc0fa20cbc3b6b6_prof);

    }

    public function getTemplateName()
    {
        return "NSEPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }
}
/* <html>*/
/* <head></head>*/
/* <body>*/
/* <div id="div_chart"></div>*/
/* */
/* <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/* <script type="text/javascript">*/
/*     {{ gc_draw(histogram, 'div_chart') }}*/
/* </script>*/
/* </body>*/
/* </html>*/
