<?php

/* SUHGestionBundle:Default:base.html.twig */
class __TwigTemplate_f31bea6955c513777546aee9965b9e7f7397302ce70af029a4ee5d8352644b93 extends Twig_Template
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
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <!-- HEADER : logo SUH + navbar (accueil, statistiques, deconnexion -->
  ";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "  <!-- FIN HEADER -->
  
  ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " Header ";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "  <header>
      <div class=\"container-fluid\">
          <div class=\"row\">
              <div class=\"col-md-3\">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">
                    <img id=\"logo\" alt=\"SUH\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/logo_suh.png"), "html", null, true);
        echo "\">
                </a>
              </div>
              <div class=\"col-md-9\">
                  <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"liensNavbar\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Accueil</a></li>
                            <li class=\"liensNavbar\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Statistiques</a></li>
                            <li class=\"liensNavbar\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Importer Excel</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li id=\"deconnexion\"><a href=\"";
        // line 29
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

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "      
  ";
    }

    public function getTemplateName()
    {
        return "SUHGestionBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  115 => 40,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  78 => 17,  74 => 16,  68 => 12,  65 => 11,  59 => 8,  54 => 43,  52 => 40,  48 => 38,  46 => 11,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
