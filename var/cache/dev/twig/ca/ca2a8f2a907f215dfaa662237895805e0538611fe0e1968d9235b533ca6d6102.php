<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d4ec3390ca87bf6e364ec16ad5741e35311db052c7fccff6a810f628e485463f extends Twig_Template
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
        $__internal_bde9ef0d137d25dd9a1546377fced1afab80a9816fc99114c59adab8024e592b = $this->env->getExtension("native_profiler");
        $__internal_bde9ef0d137d25dd9a1546377fced1afab80a9816fc99114c59adab8024e592b->enter($__internal_bde9ef0d137d25dd9a1546377fced1afab80a9816fc99114c59adab8024e592b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bde9ef0d137d25dd9a1546377fced1afab80a9816fc99114c59adab8024e592b->leave($__internal_bde9ef0d137d25dd9a1546377fced1afab80a9816fc99114c59adab8024e592b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */