<?php

/* SUHGestionBundle:AffichageEtudiants:spoiler.html.twig */
class __TwigTemplate_1754f7f826e8430562cbdacc4547d5fc3a695b9d9b5c1fcce1d33e6cd4f915c6 extends Twig_Template
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
    <hr/>
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
    <div id=\"etudiantHandicape\" class=\"spoiler\" style=\"display:none\"> 
        <table class=\"table table-bordered table-condensed\">
        <tbody>
              <tr><td>numéro etudiant</td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>nom</td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "nomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>prenom</td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "prenomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date de naissance</td><td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>âge</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "getAge", array(), "method"), "html", null, true);
        echo " ans</td></tr>
              <tr><td>mail</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "mail", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse étudiante</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseEtudiante", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse familiale</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseFamiliale", array()), "html", null, true);
        echo "</td></tr>
              ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "handicap", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["handicap"]) {
            echo "                  
                  <tr><td>handicap</td><td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "nomHandicap", array()), "html", null, true);
            echo "</td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handicap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                          
              <tr><td>reconnaissance mdph</td><td>
                      ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "reconnaissanceMdph", array())) {
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
            echo "\"> 
                      ";
        } else {
            // line 38
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
            echo "\"> 
                      ";
        }
        // line 40
        echo "</td></tr>
              <tr><td>département mdph</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "departementMdph", array()), "html", null, true);
        echo "</td></tr>  
              <tr><td>qhandi</td><td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "qhandi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>rqth</td><td>";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "rqth", array())) {
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
            echo "\"> 
                      ";
        } else {
            // line 45
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
            echo "\"> 
                      ";
        }
        // line 47
        echo "</td></tr>
              <tr><td>notification savs</td><td>";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "notificationSavs", array())) {
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
            echo "\"> 
                      ";
        } else {
            // line 50
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
            echo "\"> 
                      ";
        }
        // line 52
        echo "</td></tr>
              <tr><td>amenagement etudes</td><td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "amenagementEtude", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>suvi</td><td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "suivi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date dernière mise à jour</td><td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "dateMaj", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>descriptif complémentaire</td><td>";
        // line 56
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
    <div id=\"etudiantFormation\" class=\"spoiler\" style=\"display:none\"> 
        <table class=\"table table-bordered table-condensed\">
        <tbody>
            ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "listEtudiantFormation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiantFormation"]) {
            echo "                
              <tr><td>année scolaire</td><td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiantFormation"], "anneeScolaire", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>diplome</td><td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "diplome", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>composante</td><td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "composante", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>filiere</td><td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "filiere", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>année d'étude</td><td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "anneeEtude", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>cycle</td><td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "cycle", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>nom de l'établissement</td><td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "etablissement", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiantFormation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
    <div id=\"etudiantAidesExamens\" class=\"spoiler\" style=\"display:none\"> 
        <table class=\"table table-bordered table-condensed\">
        <tbody>
            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "datesAideExamen", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dateAideExamen"]) {
            echo "                
              <tr><td>date début</td><td>";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateDebut", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>date fin</td><td>";
            // line 111
            if (twig_test_empty($this->getAttribute($context["dateAideExamen"], "dateFin", array()))) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateFin", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td></tr>
              <tr><td>amenagement examen</td><td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "amenagementExamens", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>temps majoré</td><td>";
            // line 113
            if ($this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "tempsMajore", array())) {
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
                echo "\"> 
                      ";
            } else {
                // line 115
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
                echo "\"> 
                      ";
            }
            // line 117
            echo "</td></tr>
              <tr><td>autres mesures</td><td>";
            // line 118
            if ($this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "autresMesures", array())) {
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
                echo "\"> 
                      ";
            } else {
                // line 120
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
                echo "\"> 
                      ";
            }
            // line 122
            echo "</td></tr>
              <tr><td>délocalisation examen</td><td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "delocalisationExamen", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>date validité</td><td>";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dateValidite", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>durée avis médical</td><td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dureeAvisMedical", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateAideExamen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo " 
        </tbody>
    </table>
    </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:AffichageEtudiants:spoiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 126,  338 => 125,  334 => 124,  330 => 123,  327 => 122,  322 => 121,  319 => 120,  314 => 119,  310 => 118,  307 => 117,  302 => 116,  299 => 115,  294 => 114,  290 => 113,  286 => 112,  278 => 111,  274 => 110,  268 => 109,  244 => 87,  236 => 86,  232 => 85,  228 => 84,  224 => 83,  220 => 82,  216 => 81,  212 => 80,  206 => 79,  180 => 56,  176 => 55,  172 => 54,  168 => 53,  165 => 52,  160 => 51,  157 => 50,  152 => 49,  148 => 48,  145 => 47,  140 => 46,  137 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  117 => 40,  112 => 39,  109 => 38,  104 => 37,  100 => 36,  96 => 34,  88 => 33,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  50 => 24,  27 => 4,  23 => 3,  19 => 1,);
    }
}
