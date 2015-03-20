<?php

/* SUHGestionBundle:AffichageEtudiants:base.html.twig */
class __TwigTemplate_323cfc19b296aaeb1f9d98132f53c7820f0ff08ac9c1ebcf5db7b44e0d708e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/css/accueil.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <!--<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/js/bootstrap.min.js"), "html", null, true);
        echo "\"/>-->
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/js/jquery.min.js"), "html", null, true);
        echo "\"/></script> 
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/js/boutonsGestionEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/js/confirmations.js"), "html", null, true);
        echo "\"></script>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <!-- HEADER : logo SUH + navbar (accueil, statistiques, deconnexion -->
  ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "  <!-- FIN HEADER -->
  
  ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " Header ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "  <header>
      <div class=\"container-fluid\">
          <div class=\"row\">
              <div class=\"col-md-3\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">
                    <img id=\"logo\" alt=\"SUH\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/logo_suh.png"), "html", null, true);
        echo "\">
                </a>
              </div>
              <div class=\"col-md-9\">
                  <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"liensNavbar\"><a id=\"accueil\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Accueil</a></li>
                            <li id=\"rechercheAvancee\" class=\"liensNavbar\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("suh_gestion_rechercheAvancee");
        echo "\">Recherche avancée</a></li>
                            <li class=\"liensNavbar\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("suh_import_export_page");
        echo "\">Import/Export Excel</a></li>
                            <li class=\"liensNavbar\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("suh_gestion_utilisateur_page");
        echo "\">Gestion des utilisateurs</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li id=\"deconnexion\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Deconnexion</a></li>
                        </ul>
                    </div>
                </nav>
              </div>
          </div>
      </div>      
  </header>
  ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "      
  ";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:AffichageEtudiants:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 45,  131 => 44,  118 => 33,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  90 => 20,  86 => 19,  80 => 15,  77 => 14,  71 => 11,  66 => 47,  64 => 44,  60 => 42,  58 => 14,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
