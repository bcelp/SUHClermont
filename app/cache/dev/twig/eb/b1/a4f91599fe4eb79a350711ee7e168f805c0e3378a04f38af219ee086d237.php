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
                //colonnes ici
            <br/>
            2) L'importation effacera l'ancienne BDD, exportez l'ancienne si vous souhaitez la garder
        </p>
        <form method=\"POST\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("suh_import_export_page");
        echo "\" enctype=\"multipart/form-data\" 
              onsubmit=\"return confirmationImport();\">
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1048576\" />
            <input type=\"file\" name=\"fichierExcel\"/><br/>
            <input id=\"nbLignes\" name=\"nbLignes\" type=\"number\" placeholder=\"Nombre de ligne\"/><br/>   
            <button type=\"submit\" class=\"btn btn-danger\">Importer</button>
        </form>
    </div>     
              
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
                
                
                
                
                
                
                
                
                
                
                
                <!--  ================== EXPORTATION EXCEL ================== -->
    <div id=\"exportExcel\" class=\"spoiler\" style=\"display:none\"> 
        Vous pouvez exporter un fichier excel <br/>
        Le fichier sera situé dans le répertoire \"web\" de l'application<br/>
        <form method=\"POST\" action=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("suh_export_page");
        echo "\" enctype=\"multipart/form-data\" 
              onsubmit=\"return confirmationExport();\">
            <button class=\"btn btn-danger\" type=\"submit\">Exporter la base de données</button>
        </form>
       
    </div> 
</div>
              
<script type=\"text/JavaScript\">
    function confirmationImport()
    {
        var check1=confirm(\"###Voulez vous remplacer votre base de données par votre fichier Excel ?###\");
        if (check1)
        {
            var check2=confirm(\"###Etes-vous sûr ? La base de données sera effacée !###\");
            if (check2)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    function confirmationExport()
    {
        if(confirm(\"###Voulez vous exporter votre base de données ? le fichier excel se situera dans le dossier \\\"web\\\" de l'application###\"))
        {
            return true;
        }
        return false;
    }
</script>              
              
              
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
        return array (  87 => 64,  48 => 28,  19 => 1,);
    }
}
