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
            $this->env->loadTemplate("SUHGestionBundle:Default:liste.html.twig")->display(array_merge($context, array("listeEtudiantsHandicapes" => (isset($context["listeEtudiantsHandicapes"]) ? $context["listeEtudiantsHandicapes"] : $this->getContext($context, "listeEtudiantsHandicapes")))));
            // line 25
            echo "                ";
        }
        // line 26
        echo "                    <div id=\"gestionEtudiants\" class=\"row\">
                        <button href=\"#\" class=\"btn btn-md btn-primary col-md-4\"> <span class=\"glyphicon glyphicon-plus\"></span></button>
                        <button href=\"#\" class=\"btn btn-md btn-primary col-md-4\"> <span class=\"glyphicon glyphicon-refresh\"></span></button>
                        <button href=\"#\" class=\"btn btn-md btn-primary col-md-4\"> <span class=\"glyphicon glyphicon-remove\"></span></button>
                    </div>
                </div>  
                <div id=\"affichage\" class=\"col-md-10\">
                ";
        // line 36
        echo "                </div>
                <script type=\"text/javascript\">
                //dernier etudiant selectionne dans la liste
                var last;
                //couleur de fond dans la liste de l'étudiant(permet de passer du rouge à la couleur d'avance)
                var lastColor;
                \$(document).ready(function() {
                //pour tous les liens de la liste
                  \$(\"#liste ul li a\").on('click',function(event) {
                    //l'url est celui du lien
                    var url = \$(this).prop('href');
                    //on stocke la couleur de base avant de la passer au rouge(afin de la remettre en état
                    //au prochain clic
                    lastColor=\$(this).css(\"background-color\");
                    //le lien sélectionné devient rouge
                    \$(this).css({'background-color':'red'});
                    //si il y a déjà eu un étudiant selectionné sa couleur redevient celle d'origine
                    if (!(typeof last === \"undefined\")) {
                        \$(last).css({'background-color':lastColor});
                    }      
                    //le dernier étudiant sélectionné devient l'étudiant courant
                    last=this;
                    //on charge la div d'affichage d'un etudiant
                    \$(\"#affichage\").load(url);
                    //on évite la redirection
                    event.preventDefault();
                  });
                });
                </script>
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
        return array (  87 => 36,  78 => 26,  75 => 25,  72 => 24,  70 => 23,  56 => 12,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
