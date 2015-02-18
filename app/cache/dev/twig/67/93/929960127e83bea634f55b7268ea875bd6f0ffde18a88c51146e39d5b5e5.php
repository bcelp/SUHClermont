<?php

/* SUHGestionBundle:Default:accueil.html.twig */
class __TwigTemplate_6793929960127e83bea634f55b7268ea875bd6f0ffde18a88c51146e39d5b5e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SUHGestionBundle:Default:base.html.twig");
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
        return "SUHGestionBundle:Default:base.html.twig";
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
                            <form class=\"input-group\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Rechercher...\">
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SUHGestionBundle:Affichage:getListe"));
        echo "                     
                    
                    <div id=\"gestionEtudiants\" class=\"row\">
                        <button href=\"#\" class=\"btn btn-md btn-primary col-md-4\"> <span class=\"glyphicon glyphicon-plus\"></span></button>
                        <button href=\"#\" class=\"btn btn-md btn-primary col-md-4\"> <span class=\"glyphicon glyphicon-refresh\"></span></button>
                        <button href=\"#\" class=\"btn btn-md btn-primary col-md-4\"> <span class=\"glyphicon glyphicon-remove\"></span></button>
                    </div>
                </div>  
                <div id=\"affichage\" class=\"col-md-10\">
                ";
        // line 32
        if ((array_key_exists("informationsEtudiant", $context) &&  !twig_test_empty((isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant"))))) {
            // line 33
            echo "                    ";
            $this->env->loadTemplate("SUHGestionBundle:Default:spoiler.html.twig")->display(array_merge($context, array("informationsEtudiant" => (isset($context["informationsEtudiant"]) ? $context["informationsEtudiant"] : $this->getContext($context, "informationsEtudiant")))));
            // line 34
            echo "                ";
        }
        // line 35
        echo "                </div>
            </div>
        </section>      
        <br/><br/>
    </body>
";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  84 => 34,  81 => 33,  79 => 32,  67 => 23,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
