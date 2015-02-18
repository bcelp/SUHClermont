<?php

/* SUHConnexionBundle:Connexion:connexion.html.twig */
class __TwigTemplate_5e020c891759fd4975572bd4728c0b03eb8c7ddf5a0d4aaa8ee16ae3c2ad480d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhconnexion/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhconnexion/css/connexion.css"), "html", null, true);
        echo "\" type=\"text/css\"/>    
  </head>
  <body>
      <div class=\"container\">
        <div class=\"row\">
            <div id=\"blocConnexion\">
                <div class=\"row\">
                    <img id=\"logo\" alt=\"SUH\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/suhconnexion/images/logo_suh.png"), "html", null, true);
        echo "\">
                </div>
                <div class=\"row\">
                    <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"username\">Identifiant :</label>
                            <input class=\"form-control\" id=\"username\" name=\"_username\" type=\"text\"/>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"password\">Mot de passe :</label>
                            <input class=\"form-control\" id=\"password\" name=\"_password\" type=\"password\"/>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Connexion</button>
                    </form>    
                </div>
                        
                ";
        // line 29
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 30
            echo "                    <div id=\"errorDiv\" class=\"alert alert-danger\">                        
                        Identifiants invalides                       
                    </div>
                ";
        }
        // line 34
        echo "            </div>
        </div>
      </div>
      
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "SUHConnexionBundle:Connexion:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  63 => 30,  61 => 29,  45 => 16,  39 => 13,  29 => 6,  25 => 5,  19 => 1,);
    }
}
