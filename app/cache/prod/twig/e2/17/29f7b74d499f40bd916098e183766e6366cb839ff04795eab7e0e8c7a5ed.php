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
    <button class=\"btn btn-info form-control\" title=\"informations etudiant handicape\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('etudiantHandicape').style.display == 'none')
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
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>nom</td><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "nomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>prenom</td><td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "prenomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date de naissance</td><td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>âge</td><td>calcul ici</td></tr>
              <tr><td>mail</td><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "mail", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse étudiante</td><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseEtudiante", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse familiale</td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseFamiliale", array()), "html", null, true);
        echo "</td></tr>
              ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "handicap", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["handicap"]) {
            echo "                  
                  <tr><td>handicap</td><td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "nomHandicap", array()), "html", null, true);
            echo "</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handicap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                          
              <tr><td>reconnaissance mdph</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "reconnaissanceMdph", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>département mdph</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "departementMdph", array()), "html", null, true);
        echo "</td></tr>  
              <tr><td>qhandi</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "qhandi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>rqth</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "rqth", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>notification savs</td><td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "notificationSavs", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>amenagement etudes</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "amenagementEtude", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>suvi</td><td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "suivi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date dernière mise à jour</td><td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "dateMaj", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>descriptif complémentaire</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "descriptifComplementaire", array()), "html", null, true);
        echo "</td></tr>
        </tbody>
    </table>
    </div> 
</div>


<div class=\"spoiler\">
    <button class=\"btn btn-info form-control\" title=\"informations etudiant formation\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('etudiantFormation').style.display == 'none')
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
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "listEtudiantFormation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiantFormation"]) {
            echo "                
              <tr><td>année</td><td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiantFormation"], "annee", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>diplome</td><td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "diplome", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>composante</td><td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "composante", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>filiere</td><td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "filiere", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>cycle</td><td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "cycle", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>nom de l'établissement</td><td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "etablissement", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiantFormation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo " 
        </tbody>
    </table>
    </div> 
</div>
        
<div class=\"spoiler\">
    <button class=\"btn btn-info form-control\" title=\"informations etudiant aides examens\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('etudiantAidesExamens').style.display == 'none')
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
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "datesAideExamen", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dateAideExamen"]) {
            echo "                
              <tr><td>date début</td><td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateDebut", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>date fin</td><td>";
            // line 90
            if (twig_test_empty($this->getAttribute($context["dateAideExamen"], "dateFin", array()))) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateFin", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td></tr>
              <tr><td>amenagement examen</td><td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "amenagementExamens", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>temps majoré</td><td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "tempsMajore", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>autres mesures</td><td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "autresMesures", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>délocalisation examen</td><td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "delocalisationExamen", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>date validité</td><td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dateValidite", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>durée avis médical</td><td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dureeAvisMedical", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateAideExamen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
        return array (  245 => 97,  237 => 96,  233 => 95,  229 => 94,  225 => 93,  221 => 92,  217 => 91,  209 => 90,  205 => 89,  199 => 88,  175 => 66,  167 => 65,  163 => 64,  159 => 63,  155 => 62,  151 => 61,  147 => 60,  141 => 59,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  80 => 27,  72 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  49 => 20,  45 => 19,  41 => 18,  37 => 17,  19 => 1,);
    }
}
