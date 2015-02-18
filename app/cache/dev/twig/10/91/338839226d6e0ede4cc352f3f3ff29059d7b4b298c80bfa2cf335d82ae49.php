<?php

/* SUHGestionBundle:Default:affichageEtudiant.html.twig */
class __TwigTemplate_1091338839226d6e0ede4cc352f3f3ff29059d7b4b298c80bfa2cf335d82ae49 extends Twig_Template
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
        echo "<!-- Spoiler informations Etudiant -->
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SUHGestionBundle:Affichage:Spoiler", array("nomSpoiler" => "spoilerEtudiant", "texteBouton" => "etudiant", "informations" => (("
<table class=\"table table-bordered table-striped table-condensed\">
    <tbody>
          <tr>
            <td>numéro etudiant</td>
            <td>" . $this->getAttribute($this->getAttribute(        // line 11
(isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "id", array())) . "</td>
          </tr>
          
    </tbody>
</table>
                    "))));
        // line 17
        echo "    
<!-- Fin spoiler informations Etudiant -->              

<!-- Spoiler informations handicap -->
";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SUHGestionBundle:Affichage:Spoiler", array("nomSpoiler" => "spoilerHandicap", "texteBouton" => "handicap", "informations" => "informations handicap")));
        // line 25
        echo "    
<!-- Fin spoiler informations handicap -->

<!-- Spoiler informations mdph -->
";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SUHGestionBundle:Affichage:Spoiler", array("nomSpoiler" => "spoilerMdph", "texteBouton" => "mdph", "informations" => "informations mdph")));
        // line 33
        echo "    
<!-- Fin spoiler informations mdph -->

<!-- Spoiler informations formation -->
";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SUHGestionBundle:Affichage:Spoiler", array("nomSpoiler" => "spoilerFormation", "texteBouton" => "formation", "informations" => "informations formation")));
        // line 41
        echo "    
<!-- Fin spoiler informations formation -->

<!-- Spoiler informations etablissement -->
";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SUHGestionBundle:Affichage:Spoiler", array("nomSpoiler" => "spoilerEtablissement", "texteBouton" => "etablissement", "informations" => "informations etablissement")));
        // line 49
        echo "    
<!-- Fin spoiler informations etablissement -->";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:Default:affichageEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 49,  65 => 45,  59 => 41,  57 => 37,  51 => 33,  49 => 29,  43 => 25,  41 => 21,  35 => 17,  28 => 11,  22 => 2,  19 => 1,);
    }
}
