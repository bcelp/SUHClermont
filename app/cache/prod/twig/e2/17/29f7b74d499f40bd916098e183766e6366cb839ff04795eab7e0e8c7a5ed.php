<?php

/* SUHGestionBundle:Default:spoiler.html.twig */
class __TwigTemplate_e21729f7b74d499f40bd916098e183766e6366cb839ff04795eab7e0e8c7a5ed extends Twig_Template
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
        echo "<div class=\"spoiler\">
    <p id=\"etudiantNomPrenom\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "nomEtudiant", array()), "html", null, true);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "prenomEtudiant", array()), "html", null, true);
        echo "
    </p>


    <button class=\"btn btn-info form-control\" title=\"informations etudiant handicape\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('etudiantHandicape').style.display === 'none')
                    {
                        document.getElementById('etudiantHandicape').style.display = ''
                    }
                    else
                    {
                        document.getElementById('etudiantHandicape').style.display = 'none'
                    }\">
        Etudiant en situation de handicap
    </button>
    <div id=\"etudiantHandicape\" style=\"display:none\"> 
        <table class=\"table table-bordered table-striped table-condensed\">
        <tbody>
              <tr><td>numéro etudiant</td><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>nom</td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "nomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>prenom</td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "prenomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date de naissance</td><td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>âge</td><td>calcul ici</td></tr>
              <tr><td>mail</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "mail", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse étudiante</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseEtudiante", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse familiale</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseFamiliale", array()), "html", null, true);
        echo "</td></tr>
              ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "handicap", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["handicap"]) {
            echo "                  
                  <tr><td>handicap</td><td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "nomHandicap", array()), "html", null, true);
            echo "</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handicap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                          
              <tr><td>reconnaissance mdph</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "reconnaissanceMdph", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>département mdph</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "departementMdph", array()), "html", null, true);
        echo "</td></tr>  
              <tr><td>qhandi</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "qhandi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>rqth</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "rqth", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>notification savs</td><td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "notificationSavs", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>amenagement etudes</td><td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "amenagementEtude", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>suvi</td><td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "suivi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date dernière mise à jour</td><td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "dateMaj", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>descriptif complémentaire</td><td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "descriptifComplementaire", array()), "html", null, true);
        echo "</td></tr>
        </tbody>
    </table>
    </div> 
</div>


<div class=\"spoiler\">
    <button class=\"btn btn-info form-control\" title=\"informations etudiant formation\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('etudiantFormation').style.display === 'none')
                    {
                        document.getElementById('etudiantFormation').style.display = ''
                    }
                    else
                    {
                        document.getElementById('etudiantFormation').style.display = 'none'
                    }\">
        Formation de l'étudiant
    </button>
    <div id=\"etudiantFormation\" style=\"display:none\"> 
        <table class=\"table table-bordered table-striped table-condensed\">
        <tbody>
            ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "listEtudiantFormation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiantFormation"]) {
            echo "                
              <tr><td>année</td><td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiantFormation"], "annee", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>diplome</td><td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "diplome", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>composante</td><td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "composante", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>filiere</td><td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "filiere", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>cycle</td><td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "cycle", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>nom de l'établissement</td><td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "etablissement", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiantFormation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo " 
        </tbody>
    </table>
    </div> 
</div>
        
<div class=\"spoiler\">
    <button class=\"btn btn-info form-control\" title=\"informations etudiant aides examens\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('etudiantAidesExamens').style.display === 'none')
                    {
                        document.getElementById('etudiantAidesExamens').style.display = ''
                    }
                    else
                    {
                        document.getElementById('etudiantAidesExamens').style.display = 'none'
                    }\">
        Aides aux examens
    </button>
    <div id=\"etudiantAidesExamens\" style=\"display:none\"> 
        <table class=\"table table-bordered table-striped table-condensed\">
        <tbody>
            ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "datesAideExamen", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dateAideExamen"]) {
            echo "                
              <tr><td>date début</td><td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateDebut", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>date fin</td><td>";
            // line 96
            if (twig_test_empty($this->getAttribute($context["dateAideExamen"], "dateFin", array()))) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateFin", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td></tr>
              <tr><td>amenagement examen</td><td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "amenagementExamens", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>temps majoré</td><td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "tempsMajore", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>autres mesures</td><td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "autresMesures", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>délocalisation examen</td><td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "delocalisationExamen", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>date validité</td><td>";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dateValidite", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>durée avis médical</td><td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dureeAvisMedical", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateAideExamen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo " 
        </tbody>
    </table>
    </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:Default:spoiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 103,  249 => 102,  245 => 101,  241 => 100,  237 => 99,  233 => 98,  229 => 97,  221 => 96,  217 => 95,  211 => 94,  187 => 72,  179 => 71,  175 => 70,  171 => 69,  167 => 68,  163 => 67,  159 => 66,  153 => 65,  127 => 42,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  92 => 33,  84 => 32,  78 => 31,  74 => 30,  70 => 29,  66 => 28,  61 => 26,  57 => 25,  53 => 24,  49 => 23,  27 => 4,  23 => 3,  19 => 1,);
    }
}
