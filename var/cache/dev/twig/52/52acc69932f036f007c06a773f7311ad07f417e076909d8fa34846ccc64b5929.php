<?php

/* course/index.html.twig */
class __TwigTemplate_318e95a903402ce697127718325f8095919d2f1bf0fe7b4ada28f502c34c3a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_977d43907cbb009d5f5c6ffa8f3921de7e301d845d602ad88cd297cdb6a444a9 = $this->env->getExtension("native_profiler");
        $__internal_977d43907cbb009d5f5c6ffa8f3921de7e301d845d602ad88cd297cdb6a444a9->enter($__internal_977d43907cbb009d5f5c6ffa8f3921de7e301d845d602ad88cd297cdb6a444a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977d43907cbb009d5f5c6ffa8f3921de7e301d845d602ad88cd297cdb6a444a9->leave($__internal_977d43907cbb009d5f5c6ffa8f3921de7e301d845d602ad88cd297cdb6a444a9_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_088a4ffd5b1ea97e49412be764932e72f4605938b790a40dc2f9a5ed0496e893 = $this->env->getExtension("native_profiler");
        $__internal_088a4ffd5b1ea97e49412be764932e72f4605938b790a40dc2f9a5ed0496e893->enter($__internal_088a4ffd5b1ea97e49412be764932e72f4605938b790a40dc2f9a5ed0496e893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_088a4ffd5b1ea97e49412be764932e72f4605938b790a40dc2f9a5ed0496e893->leave($__internal_088a4ffd5b1ea97e49412be764932e72f4605938b790a40dc2f9a5ed0496e893_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_9f5e4525403eb124a8aef0e1c0066a4e5a2595f974f1049d31767c86fc1686e3 = $this->env->getExtension("native_profiler");
        $__internal_9f5e4525403eb124a8aef0e1c0066a4e5a2595f974f1049d31767c86fc1686e3->enter($__internal_9f5e4525403eb124a8aef0e1c0066a4e5a2595f974f1049d31767c86fc1686e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course list</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Your Courses</div>
    <div class=\"panel-body\">
        <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Courseid</th>
                    <th>Coursename</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseid", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coursename", array()), "html", null, true);
            echo "</a></td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit or Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>
    </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("course_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9f5e4525403eb124a8aef0e1c0066a4e5a2595f974f1049d31767c86fc1686e3->leave($__internal_9f5e4525403eb124a8aef0e1c0066a4e5a2595f974f1049d31767c86fc1686e3_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  107 => 35,  95 => 29,  86 => 25,  82 => 24,  78 => 23,  75 => 22,  71 => 21,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course list</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*     <div class="panel-heading">Your Courses</div>*/
/*     <div class="panel-body">*/
/*         <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Courseid</th>*/
/*                     <th>Coursename</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for course in courses %}*/
/*                 <tr>*/
/*                     <td>{{ course.id }}</td>*/
/*                     <td>{{ course.courseid }}</td>*/
/*                     <td><a href="{{ path('assignment_show', { 'id': course.id }) }}">{{ course.coursename }}</a></td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('assignment_show', { 'id': course.id }) }}" class="btn btn-primary">Edit or Delete</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     </div>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
