<?php

/* SUHGestionBundle:Excel:ExcelVue.html.twig */
class __TwigTemplate_ebb1a4f91599fe4eb79a350711ee7e168f805c0e3378a04f38af219ee086d237 extends Twig_Template
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
    
     <!--  ================== IMPORTATION EXCEL ================== -->
     
     
    <button class=\"btn btn-warning form-control\" title=\"Importation excel\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('importExcel').style.display === 'none')
                    {
                        document.getElementById('importExcel').style.display = ''
                    }
                    else
                    {
                        document.getElementById('importExcel').style.display = 'none'
                    }\">
        Importation Excel
    </button>    
    <div id=\"importExcel\" class=\"spoiler\" style=\"display:none\"> 
        Vous pouvez importer un fichier excel de 1Mo maximum<br/>
        Dans le champs \"nombre de ligne\" doit être indiqué le nombre de lignes à insérer(ex: 300 étudiants = 300 lignes)<br/>
        <p class=\"alert-danger\">
             /\\ Attention /\\ <br/>
            1) Le fichier excel doit comporter les 32 colonnes suivantes dans l'ordre :
            <br/>
                nom/prenom/n°etudiant/date naissance/age/n°qhandi/mail/n°telephone/adresse familiale/adresse etudiante/
                universite ou ecole/ufr/diplome/annee/filiere/cycle/handicap/amenagement examen/temps majore/
                autres mesures/amenagements epreuves/delocalisation examens/date de validite/dureee avis medical/
                amenagements etudes/reconnaissance mdph/departement mdph/taux invalidite/rqth/
                notifications savs/suivi/date mise à jour
                <br/>
                <br/>
                Par ailleurs les dates doivent être dans des champs \"date\" d'Excel, et au format jj/mm/aaaa ou jj-mm-aaaa
            <br/>
        </p>
        <form method=\"POST\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("suh_import_page");
        echo "\" enctype=\"multipart/form-data\" 
              onsubmit=\"return confirmationImport();\">
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1048576\" />
            <input type=\"file\" name=\"fichierExcel\" required=\"required\"/><br/>
            <input id=\"nbLignes\" name=\"nbLignes\" type=\"number\" placeholder=\"Nombre de ligne\" required=\"required\"/><br/>   
            <button type=\"submit\" class=\"btn btn-danger\">Importer</button>
        </form>
    </div>     
              
              
              <!--  ================== EXPORTATION EXCEL ================== -->
              
              
    <button class=\"btn btn-warning form-control\" title=\"Exportation excel\" type=\"button\" 
            onclick=\"
                    if (document.getElementById('exportExcel').style.display === 'none')
                    {
                        document.getElementById('exportExcel').style.display = ''
                    }
                    else
                    {
                        document.getElementById('exportExcel').style.display = 'none'
                    }\">
        Exportation Excel
    </button>
                
                
    <div id=\"exportExcel\" class=\"spoiler\" style=\"display:none\"> 
        <br/>Vous pouvez exporter un fichier excel <br/>
        <form method=\"POST\" action=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("suh_export_page");
        echo "\" enctype=\"multipart/form-data\" 
              onsubmit=\"return confirmationExport();\">
            <button class=\"btn btn-danger\" type=\"submit\">Exporter la base de données</button>
        </form>
       
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:Excel:ExcelVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 64,  55 => 35,  19 => 1,);
    }
}
