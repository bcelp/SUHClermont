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
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/js/jquery.min.js"), "html", null, true);
        echo "\"/></script> 
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <!-- HEADER : logo SUH + navbar (accueil, statistiques, deconnexion -->
  ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "  <!-- FIN HEADER -->
  
  ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " Header ";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "  <header>
      <div class=\"container-fluid\">
          <div class=\"row\">
              <div class=\"col-md-3\">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">
                    <img id=\"logo\" alt=\"SUH\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhGestion/images/logo_suh.png"), "html", null, true);
        echo "\">
                </a>
              </div>
              <div class=\"col-md-9\">
                  <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"liensNavbar\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Accueil</a></li>
                            <li class=\"liensNavbar\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Statistiques</a></li>
                            <li class=\"liensNavbar\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("suh_gestion_homepage");
        echo "\">Import/Export Excel</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li id=\"deconnexion\"><a href=\"";
        // line 30
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

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
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
        return array (  122 => 42,  119 => 41,  106 => 30,  100 => 27,  96 => 26,  92 => 25,  82 => 18,  78 => 17,  72 => 13,  69 => 12,  63 => 9,  58 => 44,  56 => 41,  52 => 39,  50 => 12,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
