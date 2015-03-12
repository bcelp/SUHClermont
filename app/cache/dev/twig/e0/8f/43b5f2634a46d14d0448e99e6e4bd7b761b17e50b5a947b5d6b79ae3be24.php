<?php

/* SUHGestionBundle:AffichageEtudiants:test.html.twig */
class __TwigTemplate_e08f43b5f2634a46d14d0448e99e6e4bd7b761b17e50b5a947b5d6b79ae3be24 extends Twig_Template
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
        // line 1
        if ((array_key_exists("tt", $context) &&  !twig_test_empty((isset($context["tt"]) ? $context["tt"] : $this->getContext($context, "tt"))))) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["tt"]) ? $context["tt"] : $this->getContext($context, "tt")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:AffichageEtudiants:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
