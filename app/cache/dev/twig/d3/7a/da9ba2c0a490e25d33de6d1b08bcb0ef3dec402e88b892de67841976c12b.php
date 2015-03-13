<?php

/* SUHGestionBundle:AffichageEtudiants:liste.html.twig */
class __TwigTemplate_d37ada9ba2c0a490e25d33de6d1b08bcb0ef3dec402e88b892de67841976c12b extends Twig_Template
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
        echo "<div id=\"liste\" class=\"row\">
    <ul class=\"col-md-12\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiantsHandicapes"]) ? $context["listeEtudiantsHandicapes"] : $this->getContext($context, "listeEtudiantsHandicapes")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 4
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                // line 5
                echo "                <li class=\"pair\">
                    <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suh_get_etudiant", array("id" => $this->getAttribute($context["etudiant"], "id", array(), "array"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nomEtudiant", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenomEtudiant", array(), "array"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 9
                echo "                <li class=\"impair\">
                    <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suh_get_etudiant", array("id" => $this->getAttribute($context["etudiant"], "id", array(), "array"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nomEtudiant", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenomEtudiant", array(), "array"), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 13
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
</div>

<div id=\"nbResultats\" class=\"row\">
    <p class=\"help-block\"> Nombre de résultats : ";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["listeEtudiantsHandicapes"]) ? $context["listeEtudiantsHandicapes"] : $this->getContext($context, "listeEtudiantsHandicapes"))), "html", null, true);
        echo " 
        <span class=\"badge\">";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["listeEtudiantsHandicapes"]) ? $context["listeEtudiantsHandicapes"] : $this->getContext($context, "listeEtudiantsHandicapes"))), "html", null, true);
        echo "</span></p>
</div>";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:AffichageEtudiants:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  89 => 18,  83 => 14,  69 => 13,  59 => 10,  56 => 9,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
