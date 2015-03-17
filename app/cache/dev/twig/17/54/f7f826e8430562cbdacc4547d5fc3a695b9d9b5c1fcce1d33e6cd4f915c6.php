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
    
    <script type=\"text/javascript\">
    </script>
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
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>nom</td><td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "nomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>prenom</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "prenomEtudiant", array()), "html", null, true);
        echo "</td></tr>
              ";
        // line 28
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "dateNaissance", array()))) {
            // line 29
            echo "              <tr><td>date de naissance</td><td> - </td></tr>
              <tr><td>âge</td><td> - </td></tr>
              ";
        } else {
            // line 32
            echo "              <tr><td>date de naissance</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "dateNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
              <tr><td>âge</td><td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "getAge", array(), "method"), "html", null, true);
            echo " ans</td></tr>  
              ";
        }
        // line 35
        echo "              <tr><td>mail</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "mail", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse étudiante</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseEtudiante", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>adresse familiale</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "adresseFamiliale", array()), "html", null, true);
        echo "</td></tr>
              ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "handicap", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["handicap"]) {
            echo "                  
                  <tr><td>
                          <!-- Suppression d'un handicap -->
                          <a onclick=\"return confirmationSuppression();\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suh_suppression_handicap", array("id" => $this->getAttribute($context["handicap"], "id", array()))), "html", null, true);
            echo "\">
                          <img id=\"logo\" alt=\"SUH\" width=\"25\" height=\"25\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/delete.png"), "html", null, true);
            echo "\">
                          </a>
                   handicap</td><td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "nomHandicap", array()), "html", null, true);
            echo "
                  </td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handicap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                          
              <tr><td>reconnaissance mdph</td><td>
                      ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "reconnaissanceMdph", array())) {
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
              <tr><td>département mdph</td><td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "mdph", array()), "departementMdph", array()), "html", null, true);
        echo "</td></tr>  
              <tr><td>qhandi</td><td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "qhandi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>rqth</td><td>";
        // line 55
        if ($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "rqth", array())) {
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
            echo "\"> 
                      ";
        } else {
            // line 57
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
            echo "\"> 
                      ";
        }
        // line 59
        echo "</td></tr>
              <tr><td>notification savs</td><td>";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "notificationSavs", array())) {
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
            echo "\"> 
                      ";
        } else {
            // line 62
            echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
            echo "\"> 
                      ";
        }
        // line 64
        echo "</td></tr>
              <tr><td>amenagement etudes</td><td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "amenagementEtude", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>suvi</td><td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "suivi", array()), "html", null, true);
        echo "</td></tr>
              <tr><td>date dernière mise à jour</td><td>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "dateMaj", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
              <tr><td>descriptif complémentaire</td><td>";
        // line 68
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
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "etudiant", array()), "listEtudiantFormation", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiantFormation"]) {
            echo "                
              <tr><td>
                      <!-- Suppression formation -->
                 <a onclick=\"return confirmationSuppression();\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suh_suppression_etudiantFormation", array("id" => $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "id", array()))), "html", null, true);
            echo "\">
                <img id=\"logo\" alt=\"SUH\" width=\"25\" height=\"25\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/delete.png"), "html", null, true);
            echo "\">
                 </a>
                 année scolaire</td><td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiantFormation"], "anneeScolaire", array()), "html", null, true);
            echo "
              </td></tr>
              <tr><td>diplome</td><td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "diplome", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>composante</td><td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "composante", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>filiere</td><td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "filiere", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>année d'étude</td><td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "anneeEtude", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>cycle</td><td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "cycle", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>nom de l'établissement</td><td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etudiantFormation"], "formation", array()), "etablissement", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiantFormation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
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
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")), 0, array(), "array"), "datesAideExamen", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dateAideExamen"]) {
            echo "                
              <tr><td>
                      <a onclick=\"return confirmationSuppression();\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suh_suppression_datesAideExamen", array("id" => $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "id", array()))), "html", null, true);
            echo "\">
                          <img id=\"logo\" alt=\"SUH\" width=\"25\" height=\"25\" src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/delete.png"), "html", null, true);
            echo "\">
                      </a>
                 date début</td><td>";
            // line 136
            if (twig_test_empty($this->getAttribute($context["dateAideExamen"], "dateDebut", array()))) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateDebut", array()), "d-m-Y"), "html", null, true);
            }
            // line 137
            echo "              </td></tr>
              <tr><td>date fin</td><td>";
            // line 138
            if (twig_test_empty($this->getAttribute($context["dateAideExamen"], "dateFin", array()))) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dateAideExamen"], "dateFin", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td></tr>
              <tr><td>amenagement examen</td><td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "amenagementExamens", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>temps majoré</td><td>";
            // line 140
            if ($this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "tempsMajore", array())) {
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
                echo "\"> 
                      ";
            } else {
                // line 142
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
                echo "\"> 
                      ";
            }
            // line 144
            echo "</td></tr>
              <tr><td>autres mesures</td><td>";
            // line 145
            if ($this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "autresMesures", array())) {
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheVerte.png"), "html", null, true);
                echo "\"> 
                      ";
            } else {
                // line 147
                echo " 
                        <img id=\"logo\" width=\"30\" height=\"30\" alt=\"SUH\" src=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/cocheRouge.png"), "html", null, true);
                echo "\"> 
                      ";
            }
            // line 149
            echo "</td></tr>
              <tr><td>délocalisation examen</td><td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "delocalisationExamen", array()), "html", null, true);
            echo "</td></tr>
              <tr><td>date validité</td><td>";
            // line 151
            if (twig_test_empty($this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dateValidite", array()))) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dateValidite", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td></tr>
              <tr><td>durée avis médical</td><td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dateAideExamen"], "aideExamen", array()), "dureeAvisMedical", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateAideExamen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
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
        return array (  404 => 153,  396 => 152,  388 => 151,  384 => 150,  381 => 149,  376 => 148,  373 => 147,  368 => 146,  364 => 145,  361 => 144,  356 => 143,  353 => 142,  348 => 141,  344 => 140,  340 => 139,  332 => 138,  329 => 137,  323 => 136,  318 => 134,  314 => 133,  307 => 131,  280 => 106,  272 => 105,  268 => 104,  264 => 103,  260 => 102,  256 => 101,  252 => 100,  247 => 98,  242 => 96,  238 => 95,  230 => 92,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  188 => 64,  183 => 63,  180 => 62,  175 => 61,  171 => 60,  168 => 59,  163 => 58,  160 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  140 => 52,  135 => 51,  132 => 50,  127 => 49,  123 => 48,  119 => 46,  110 => 44,  105 => 42,  101 => 41,  93 => 38,  89 => 37,  85 => 36,  80 => 35,  75 => 33,  70 => 32,  65 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  27 => 4,  23 => 3,  19 => 1,);
    }
}
