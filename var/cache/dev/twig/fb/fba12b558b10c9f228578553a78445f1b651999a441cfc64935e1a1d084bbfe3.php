<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c0f52af421a37a048d92b3c088c64caa738219593bd1b503ea984995479111e2 extends Twig_Template
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
        $__internal_ba1b7eb790305ad020f5215bb81b963a7882090e00736b201a8aef3b3bd882c9 = $this->env->getExtension("native_profiler");
        $__internal_ba1b7eb790305ad020f5215bb81b963a7882090e00736b201a8aef3b3bd882c9->enter($__internal_ba1b7eb790305ad020f5215bb81b963a7882090e00736b201a8aef3b3bd882c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ba1b7eb790305ad020f5215bb81b963a7882090e00736b201a8aef3b3bd882c9->leave($__internal_ba1b7eb790305ad020f5215bb81b963a7882090e00736b201a8aef3b3bd882c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */