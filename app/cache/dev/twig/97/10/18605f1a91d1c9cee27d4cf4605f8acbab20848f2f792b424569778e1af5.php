<?php

/* SUHGestionBundle:AffichageEtudiants:accueil.html.twig */
class __TwigTemplate_971018605f1a91d1c9cee27d4cf4605f8acbab20848f2f792b424569778e1af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SUHGestionBundle:AffichageEtudiants:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUHGestionBundle:AffichageEtudiants:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <body>
        <section id=\"containerFluidBody\" class=\"container-fluid\">
            <div class=\"row\">
                <div id=\"divListe\" class=\"col-md-2\">
                    <div id=\"recherche\" class=\"row\">
                        <div class=\"form-group\">
                            <form class=\"input-group\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("suh_get_etudiant_nomEtPrenom");
        echo "\" method=\"GET\">
                                <input name=\"chaine\" class=\"form-control\" type=\"text\" placeholder=\"Rechercher...\">
                                <span class=\"input-group-btn\">
                                    <button type=\"submit\" href=\"#\" class=\"btn btn-md btn-primary\"> <span class=\"glyphicon glyphicon-zoom-in\"></span></button>
                                </span>
                            </form>
                        </div>
                    </div>
                           
                    <!-- Affiche la liste : <div id=\"liste\"> </div>
                        + le nombre de résultats : <div id=\"nbResultats> </div> -->                   
                ";
        // line 23
        if ((array_key_exists("listeEtudiantsHandicapes", $context) &&  !twig_test_empty((isset($context["listeEtudiantsHandicapes"]) ? $context["listeEtudiantsHandicapes"] : $this->getContext($context, "listeEtudiantsHandicapes"))))) {
            // line 24
            echo "                    ";
            $this->env->loadTemplate("SUHGestionBundle:AffichageEtudiants:liste.html.twig")->display(array_merge($context, array("listeEtudiantsHandicapes" => (isset($context["listeEtudiantsHandicapes"]) ? $context["listeEtudiantsHandicapes"] : $this->getContext($context, "listeEtudiantsHandicapes")))));
            // line 25
            echo "                ";
        }
        // line 26
        echo "                    <div id=\"gestionEtudiants\" class=\"row\">
                        <a id=\"ajout\" class=\"btn btn-md btn-primary col-md-4\" > <span class=\"glyphicon glyphicon-plus\"></span></a>
                        <a id=\"modification\" class=\"btn btn-md btn-primary col-md-4\" onclick=\"return ConfirmationModification();\"> <span class=\"glyphicon glyphicon-refresh\"></span></a>
                        <a id=\"suppression\" class=\"btn btn-md btn-primary col-md-4\" onclick=\"return ConfirmationSuppression();\"> <span class=\"glyphicon glyphicon-remove\"></span></a>
                    </div>
                </div>  
                   
                <div id=\"affichage\" class=\"col-md-10\">
                ";
        // line 34
        if ((array_key_exists("afficheExcelVue", $context) && ((isset($context["afficheExcelVue"]) ? $context["afficheExcelVue"] : $this->getContext($context, "afficheExcelVue")) == true))) {
            // line 35
            echo "                    ";
            $this->env->loadTemplate("SUHGestionBundle:Excel:ExcelVue.html.twig")->display($context);
            // line 36
            echo "                ";
        }
        // line 37
        echo "                </div>
                
            </div>
        </section>      
        <br/><br/>
    </body>
    ";
        // line 43
        if (array_key_exists("tab", $context)) {
            // line 44
            echo "       ";
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:AffichageEtudiants:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 44,  104 => 43,  96 => 37,  93 => 36,  90 => 35,  88 => 34,  78 => 26,  75 => 25,  72 => 24,  70 => 23,  56 => 12,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
