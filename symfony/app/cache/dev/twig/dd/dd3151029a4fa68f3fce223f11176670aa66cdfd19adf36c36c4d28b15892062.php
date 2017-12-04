<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbe37ceb804d881345ca946a98a3129422f9c7614e12154f11e4b476fbeacfe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"middle\" class=\"cols2\">
    <div class=\"post-detail\">
";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
<h3>Login  Form</h3>
                        
            <form action=\"#\" method=\"post\" id=\"loginform\" class=\"loginform\">
                        
\t\t\t\t<p><label>Username</label><br><input name=\"log\" id=\"user_login\" class=\"input\" value=\"\" size=\"20\" tabindex=\"10\" type=\"text\"></p>
                        
\t     \t\t<p><label>Password</label><br><input name=\"pwd\" id=\"user_pass\" class=\"input\" value=\"\" size=\"20\" tabindex=\"20\" type=\"password\"></p>
                        
                <p class=\"forgetmenot\"><input name=\"rememberme\" type=\"checkbox\" id=\"rememberme\" value=\"forever\" tabindex=\"90\"><label for=\"rememberme\">Remember Me</label></p>
                        
                <p class=\"forget_password\"><a href=\"#\">Forgot Password?</a></p>   
                        
                <p class=\"submit\">
\t\t\t\t\t<input type=\"submit\" name=\"wp-submit\" id=\"wp-submit\" class=\"btn-submit\" value=\"Login\" tabindex=\"100\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect_to\" value=\"\">
\t\t\t\t\t<input type=\"hidden\" name=\"testcookie\" value=\"1\">
                </p>                        
                        
            </form>


     <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label> 
   

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

</form>
</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  75 => 34,  50 => 11,  44 => 9,  42 => 8,  38 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block body %}*/
/* {% block fos_user_content %}*/
/*     <div id="middle" class="cols2">*/
/*     <div class="post-detail">*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <h3>Login  Form</h3>*/
/*                         */
/*             <form action="#" method="post" id="loginform" class="loginform">*/
/*                         */
/* 				<p><label>Username</label><br><input name="log" id="user_login" class="input" value="" size="20" tabindex="10" type="text"></p>*/
/*                         */
/* 	     		<p><label>Password</label><br><input name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" type="password"></p>*/
/*                         */
/*                 <p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90"><label for="rememberme">Remember Me</label></p>*/
/*                         */
/*                 <p class="forget_password"><a href="#">Forgot Password?</a></p>   */
/*                         */
/*                 <p class="submit">*/
/* 					<input type="submit" name="wp-submit" id="wp-submit" class="btn-submit" value="Login" tabindex="100">*/
/* 					<input type="hidden" name="redirect_to" value="">*/
/* 					<input type="hidden" name="testcookie" value="1">*/
/*                 </p>                        */
/*                         */
/*             </form>*/
/* */
/* */
/*      <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label> */
/*    */
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* */
/* </form>*/
/* </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* {% endblock %}*/
