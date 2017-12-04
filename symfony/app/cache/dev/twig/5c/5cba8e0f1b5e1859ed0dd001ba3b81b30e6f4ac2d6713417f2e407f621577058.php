<?php

/* ::base.html.twig */
class __TwigTemplate_e5ac09bcacb76cefa1f54a1c4b4dd26e2601a23ce2f079006c285b758bc8baeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">

        <!-- favicon.ico and apple-touch-icon.png -->
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-57x57-iphone.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-72x72-ipad.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-114x114-iphone4.png"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("screen.css"), "html", null, true);
        echo "\">
        <!-- custom CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("custom.css"), "html", null, true);
        echo "\">

        <script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';</script>
        <!-- JS libs -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/modernizr-2.5.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/respond.min.js"), "html", null, true);
        echo "\"></script>\t
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery.min.js"), "html", null, true);
        echo "\"></script>\t\t\t 

        <!-- scripts -->
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/general.js"), "html", null, true);
        echo "\"></script>
        <!-- sliders -->
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slides.min.jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- range sliders -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slider.bundle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slider.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jslider.css"), "html", null, true);
        echo "\">
        <!-- custom input -->
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/customInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.customInput.js"), "html", null, true);
        echo "\"></script>
        <!-- datepicker -->
        <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom-theme/jquery-ui-1.8.20.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            jQuery(document).ready(function (\$) {
                \$(\"#date_in, #date_out\").datepicker({
                    dateFormat: 'MM dd, yy',
                    minDate: 0,
                    showOtherMonths: true
                });
            });
        </script>
    </head>
    <body>
        ";
        // line 60
        $this->displayBlock('header', $context, $blocks);
        // line 234
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 235
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 408
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 409
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 60
    public function block_header($context, array $blocks = array())
    {
        // line 61
        echo "            <div class=\"body_wrap homepage\">

                <div class=\"header\">
                    <div class=\"container_12\">

                        <div class=\"logo\">
                            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            <h1>Travel Agency - Premium WordPress Theme</h1>
                        </div>

                        <div class=\"header_right\">

                            <div class=\"topsearch\">
                                <form id=\"searchForm\" action=\"#\" method=\"get\">
                                    <input type=\"submit\" id=\"searchSubmit\" value=\"\" class=\"btn-search\">
                                    <input type=\"text\" name=\"stext\" id=\"stext\" value=\"\" class=\"stext\">                    
                                </form>
                            </div>  

                            <div class=\"toplogin\">
                                <p><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">SIGN IN</a> <span class=\"separator\">|</span> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">REGISTER</a></p>
                            </div>    

                            <div class=\"header_phone\">
                                <p>CALL US NOW: &nbsp; <strong>1-800-531-453</strong></p>
                            </div>\t        

                            <div class=\"clear\"></div>
                        </div>

                        <div class=\"topmenu\">
                            <ul class=\"dropdown\">
                                <li class=\"menu-level-0 menu-item-home current-menu-item\"><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("pi_general_home");
        echo "\"><span>Home</span></a></li>
                                <li class=\"menu-level-0 mega-nav\"><a href=\"#\"><span>Destinations</span></a>
                                    <ul class=\"submenu-1\">
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("pi_general_Holidays");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_1.png"), "html", null, true);
        echo "\" width=\"80\" height=\"68\" alt=\"\"> <span>North America</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>USA MAINLAND</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Canada</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Hawaii</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Alaska</span></a></li>                                 
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_2.png"), "html", null, true);
        echo "\" width=\"80\" height=\"68\" alt=\"\"> <span>Central & South America</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Argentina</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Belize</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Bolivia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Brasil</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Chile & Easter Island</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Columbia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Costa Rica</span></a></li>  
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Ecuador</span></a></li>   
                                                <li class=\"menu-level-2 more-nav\"><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>See all Destinations</span></a></li>                                                          
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_3.png"), "html", null, true);
        echo "\" width=\"80\" height=\"68\" alt=\"\"> <span>Africa & Middle East</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>South Africa</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Tanzania</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Tunisia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Maroco</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Egipt</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Kenya</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Dubai & UAE</span></a></li>  
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_4.png"), "html", null, true);
        echo "\" width=\"80\" height=\"68\" alt=\"\"> <span>EUROPE</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>United Kingdom</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>France</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Greece</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Spain</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Germany</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Croatia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Romania</span></a></li>  
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Cyprus</span></a></li>
                                                <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.') }}\"><span>See all Destinations</span></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_5.png"), "html", null, true);
        echo "\" width=\"80\" height=\"68\" alt=\"\"> <span>ASIA & SOUTH PACIFIC</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Australia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>China</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list."), "html", null, true);
        echo "\"><span>Philipinnes</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>India</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Indonesia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Malaysia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Singapore</span></a></li>  
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Thailand</span></a></li>
                                                <li class=\"menu-level-2 more-nav\"><a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>See all Destinations</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"menu-level-0\"><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("pi_general_Holidays");
        echo "\"><span>Special Offers</span></a></li>
                                <li class=\"menu-level-0\"><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Holidays</span></a>
                                    <ul class=\"submenu-1\">
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>North America</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>USA MAINLAND</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Canada</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Hawaii</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Alaska</span></a></li>                                 
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Central & South America</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Argentina</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Belize</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Bolivia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Brasil</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Chile & Easter Island</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Columbia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Costa Rica</span></a></li>  
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Ecuador</span></a></li>                                    
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Africa & Middle East</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>South Africa</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Tanzania</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Tunisia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Maroco</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Egipt</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Kenya</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Dubai & UAE</span></a></li>  
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>EUROPE</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>United Kingdom</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>France</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Greece</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Spain</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Germany</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Croatia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Romania</span></a></li>  
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Cyprus</span></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"menu-level-1\"><a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("pi_general_Holidays");
        echo "\"><span>ASIA & SOUTH PACIFIC</span></a>
                                            <ul class=\"submenu-2\">
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Australia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>China</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Philipinnes</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>India</span></a></li>    
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Indonesia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Malaysia</span></a></li>
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Singapore</span></a></li>  
                                                <li class=\"menu-level-2\"><a href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><span>Thailand</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"menu-level-0\"><a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("pi_general_hotels");
        echo "\"><span>Hotels</span></a></li>
                                <li class=\"menu-level-0\"><a href=\"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("pi_general_billets");
        echo "\"><span>Flights</span></a></li>
                                <li class=\"menu-level-0\"><a href=\"";
        // line 218
        echo $this->env->getExtension('routing')->getPath("pi_general_blog");
        echo "\"><span>Our Blog</span></a></li>
                                <li class=\"menu-level-0\"><a href=\"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("pi_general_contact_us");
        echo "\"><span>Contact us</span></a></li>
                            </ul>
                            <div class=\"clear\"></div>
                        </div>

                        <div class=\"clear\"></div>
                    </div>
                </div>
                           
                           
                <!--/ header -->

                

            ";
    }

    // line 234
    public function block_body($context, array $blocks = array())
    {
    }

    // line 235
    public function block_footer($context, array $blocks = array())
    {
        // line 236
        echo "            <!-- after content -->
            <div class=\"after_content\">
                <div class=\"after_inner\">
                    <div class=\"container_12\">

                        <!--# widgets area, col 1 -->    
                        <div class=\"widgetarea widget_col_1\">

                            <!-- widget_products -->
                            <div class=\"widget-container widget_products\">
                                <div class=\"inner\">
                                    <h3>PROMO OF THE DAY:</h3>                    
                                    <div class=\"prod_item\">
                                        <div class=\"prod_image\"><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_small_01.jpg"), "html", null, true);
        echo "\" width=\"140\" height=\"98\" alt=\"\"></a></div>
                                        <span class=\"price_box\"><ins>\$</ins><strong>1579</strong></span>
                                        <div class=\"prod_title\">
                                            <a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><strong>Hilton Opera House 5* 7 nights, flight included</strong></a><br>
                                            <span><a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">Sydney, Australia</a></span>
                                        </div> 
                                    </div>                                  
                                    <div class=\"clear\"></div>                                                                  
                                </div>
                            </div>
                            <!--/ widget_products -->

                        </div>
                        <!--/ widgets area, col 1 -->    

                        <!--# widgets area, col 2 -->
                        <div class=\"widgetarea widget_col_2\">

                            <!-- widget_newsletter -->
                            <div class=\"widget-container newsletterBox\">
                                <div class=\"inner\">
                                    <h3>NEWSLETTER SIGNUP:</h3>
                                    <form method=\"get\" action=\"#\">
                                        <input type=\"text\" value=\"Enter your email address\" onfocus=\"if (this.value == 'Enter your email address') {
                                                    this.value = '';
                                                }\" onblur=\"if (this.value == '') {
                                                            this.value = 'Enter your email address';
                                                        }\" name=\"email\" class=\"inputField\">\t\t\t\t                    
                                        <div class=\"rowCheckbox input_styled checklist\">
                                            <input type=\"checkbox\" name=\"subscribe\" id=\"subscribe\" value=\"1\"> <label for=\"subscribe\">Subscribe to RSS</label>
                                        </div>
                                        <input type=\"submit\" value=\"SUBMIT\" class=\"btn-submit\">
                                    </form>     
                                </div>
                            </div>
                            <!--/ widget_newsletter -->

                        </div>
                        <!--/ widgets area, col 2 -->

                        <!--# widgets area, col 3 -->
                        <div class=\"widgetarea widget_col_3\">

                            <!-- widget_twitter -->            
                            <div class=\"widget-container widget_twitter\">
                                <h3>TWITTER FEED:</h3>   

                                <div class=\"tweet_item\">
                                    <div class=\"tweet_image\"><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/twitter_avatar.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"\"></div>
                                    <div class=\"tweet_text\">
                                        <div class=\"inner\">
                                            How the Explosion in Online’s Education can be the Revolution for your Business: <a href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">ow.ly/aFK40</a>
                                            <br><a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"tweet_author\">#blogging</a>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>   

                                <a href=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"fallow\">Follow us</a>
                            </div>
                            <!--/ widget_twitter -->
                        </div>
                        <!--/ widgets area, col 3 -->

                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
            <!--/ after content -->

            <!-- footer -->
            <div class=\"footer\">
                <div class=\"footer_inner\">
                    <div class=\"container_12\">

                        <!--# footer col 1 -->
                        <div class=\"widgetarea f_col_1\">

                            <!-- widget_categories -->
                            <div class=\"widget-container widget_categories\">
                                <h3 class=\"widget-title\">WORLD DESTINATIONS:</h3>
                                <ul>
                                    <li><a href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>AFRICA</span></a></li>
                                    <li><a href=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>NORTH AMERICA</span></a></li>
                                    <li><a href=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>AUSTRALIA</span></a></li>
                                    <li><a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>CENTRAL  AMERICA</span></a></li>
                                    <li><a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>ASIA & PACIFIC</span></a></li>
                                    <li><a href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>SOUTH AMERICA</span></a></li>
                                    <li><a href=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>EUROPE</span></a></li>
                                    <li><a href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>CARRIBEAN</span></a></li>
                                    <li><a href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>MIDDLE EAST</span></a></li>
                                    <li class=\"item-search\"><a href=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"><span>Search for more</span></a></li>
                                </ul>
                            </div>  
                            <!--/ widget_categories -->

                        </div>
                        <!--/ footer col 1 -->

                        <!--# footer col 2 -->
                        <div class=\"widgetarea f_col_2\">

                            <div class=\"widget-container widget_pages\">
                                <h3 class=\"widget-title\">USEFUL LINKS:</h3>
                                <ul>

                                    <li><a href=\"";
        // line 355
        echo $this->env->getExtension('routing')->getPath("pi_general_about_us");
        echo "\">About us</a></li>
                                    <li><a href=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">Contact us</a></li>
                                    <li><a href=\"";
        // line 357
        echo $this->env->getExtension('routing')->getPath("pi_general_blog");
        echo "\">Our Blog</a></li>
                                    <li><a href=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">TERMS OF SERVICE</a></li>
                                    <li><a href=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">PRIVACY POLICY</a></li>
                                </ul>
                            </div>


                        </div>
                        <!--/ footer col 2 -->


                        <!--# footer col 3 -->
                        <div class=\"widgetarea f_col_3\">

                            <!-- widget_contact -->
                            <div class=\"widget-container widget_contact\">   
                                <h3 class=\"widget-title\">CONNECT WITH US</h3>
                                <div class=\"inner\">   

                                    <div class=\"contact-social\">
                                        <div><strong>Call us:</strong> <br> <a href=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn_skype\">Skype</a></div>
                                        <div><strong>Follow us:</strong> <br> <a href=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn_twitter\">Twitter</a></div>
                                        <div><strong>Join us:</strong> <br> <a href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn_fb\">Facebook</a></div>
                                        <div class=\"clear\"></div>
                                    </div>

                                    <div class=\"contact-address\">
                                        <div class=\"phone\"><em>Phone:</em> <span>555-522.326</span></div>
                                        <div class=\"fax\"><em>Fax:</em> <span>555-345.285</span></div>
                                        <div class=\"mail\"><em>Email:</em> <a href=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mailto:contact@travelagency.com"), "html", null, true);
        echo "\">contact@travelagency.com</a></div>
                                    </div>

                                </div>     
                            </div>
                            <!--/ widget_contact -->

                        </div>
                        <!--/ footer col 3 -->


                        <div class=\"copyright\">
                            <p class=\"alignleft\">copyright 2012 - Travel  Agency WordPress theme</p>
                            <p>Created by <a href=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://themefuse.com"), "html", null, true);
        echo "\">Themefuse</a> - Premium WordPress themes</p>
                        </div>

                    </div>
                </div>
            </div>
            <!--/ footer -->

        ";
    }

    // line 408
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 408,  895 => 399,  879 => 386,  869 => 379,  865 => 378,  861 => 377,  840 => 359,  836 => 358,  832 => 357,  828 => 356,  824 => 355,  806 => 340,  802 => 339,  798 => 338,  794 => 337,  790 => 336,  786 => 335,  782 => 334,  778 => 333,  774 => 332,  770 => 331,  743 => 307,  734 => 301,  730 => 300,  724 => 297,  677 => 253,  673 => 252,  665 => 249,  650 => 236,  647 => 235,  642 => 234,  623 => 219,  619 => 218,  615 => 217,  611 => 216,  603 => 211,  599 => 210,  595 => 209,  591 => 208,  587 => 207,  583 => 206,  579 => 205,  575 => 204,  570 => 202,  564 => 199,  560 => 198,  556 => 197,  552 => 196,  548 => 195,  544 => 194,  540 => 193,  536 => 192,  531 => 190,  525 => 187,  521 => 186,  517 => 185,  513 => 184,  509 => 183,  505 => 182,  501 => 181,  496 => 179,  490 => 176,  486 => 175,  482 => 174,  478 => 173,  474 => 172,  470 => 171,  466 => 170,  462 => 169,  457 => 167,  451 => 164,  447 => 163,  443 => 162,  439 => 161,  434 => 159,  429 => 157,  425 => 156,  417 => 151,  413 => 150,  409 => 149,  405 => 148,  401 => 147,  397 => 146,  393 => 145,  389 => 144,  385 => 143,  378 => 141,  371 => 137,  367 => 136,  363 => 135,  359 => 134,  355 => 133,  351 => 132,  347 => 131,  343 => 130,  336 => 128,  330 => 125,  326 => 124,  322 => 123,  318 => 122,  314 => 121,  310 => 120,  306 => 119,  299 => 117,  293 => 114,  289 => 113,  285 => 112,  281 => 111,  277 => 110,  273 => 109,  269 => 108,  265 => 107,  261 => 106,  254 => 104,  248 => 101,  244 => 100,  240 => 99,  236 => 98,  229 => 96,  223 => 93,  206 => 81,  187 => 67,  179 => 61,  176 => 60,  171 => 6,  165 => 409,  162 => 408,  159 => 235,  156 => 234,  154 => 60,  139 => 48,  135 => 47,  130 => 45,  126 => 44,  121 => 42,  117 => 41,  113 => 40,  108 => 38,  103 => 36,  99 => 35,  95 => 34,  89 => 31,  85 => 30,  81 => 29,  74 => 25,  69 => 23,  65 => 22,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  39 => 11,  33 => 7,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         {% block title %}{% endblock %}*/
/*         */
/*         <meta name="description" content="">*/
/*         <meta name="keywords" content="">*/
/* */
/*         <link href="{{ asset('http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic') }}" rel="stylesheet">*/
/* */
/*         <!-- Mobile viewport optimized: h5bp.com/viewport -->*/
/*         <meta name="viewport" content="width=device-width,initial-scale=1">*/
/* */
/*         <!-- favicon.ico and apple-touch-icon.png -->*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">*/
/*         <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57-iphone.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72-ipad.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114-iphone4.png') }}">*/
/* */
/*         <link rel="stylesheet" href="{{ asset('style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('screen.css') }}">*/
/*         <!-- custom CSS -->*/
/*         <link rel="stylesheet" href="{{ asset('custom.css') }}">*/
/* */
/*         <script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';</script>*/
/*         <!-- JS libs -->*/
/*         <script src="{{ asset('js/libs/modernizr-2.5.3.min.js') }}"></script>*/
/*         <script src="{{ asset('js/libs/respond.min.js') }}"></script>	*/
/*         <script src="{{ asset('js/libs/jquery.min.js') }}"></script>			 */
/* */
/*         <!-- scripts -->*/
/*         <script src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>*/
/*         <script src="{{ asset('js/hoverIntent.js') }}"></script>*/
/*         <script src="{{ asset('js/general.js') }}"></script>*/
/*         <!-- sliders -->*/
/*         <script src="{{ asset('js/slides.min.jquery.js') }}"></script>*/
/*         <!-- range sliders -->*/
/*         <script src="{{ asset('js/jquery.slider.bundle.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.slider.js') }}"></script>*/
/*         <link rel="stylesheet" href="{{ asset('css/jslider.css') }}">*/
/*         <!-- custom input -->*/
/*         <link href="{{ asset('css/customInput.css') }}" rel="stylesheet">*/
/*         <script src="{{ asset('js/jquery.customInput.js') }}"></script>*/
/*         <!-- datepicker -->*/
/*         <link href="{{ asset('css/custom-theme/jquery-ui-1.8.20.custom.css') }}" rel="stylesheet">*/
/*         <script src="{{ asset('js/jquery-ui-1.8.20.custom.min.js') }}"></script>*/
/*         <script>*/
/*             jQuery(document).ready(function ($) {*/
/*                 $("#date_in, #date_out").datepicker({*/
/*                     dateFormat: 'MM dd, yy',*/
/*                     minDate: 0,*/
/*                     showOtherMonths: true*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*             <div class="body_wrap homepage">*/
/* */
/*                 <div class="header">*/
/*                     <div class="container_12">*/
/* */
/*                         <div class="logo">*/
/*                             <a href="{{ asset('index.html') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>*/
/*                             <h1>Travel Agency - Premium WordPress Theme</h1>*/
/*                         </div>*/
/* */
/*                         <div class="header_right">*/
/* */
/*                             <div class="topsearch">*/
/*                                 <form id="searchForm" action="#" method="get">*/
/*                                     <input type="submit" id="searchSubmit" value="" class="btn-search">*/
/*                                     <input type="text" name="stext" id="stext" value="" class="stext">                    */
/*                                 </form>*/
/*                             </div>  */
/* */
/*                             <div class="toplogin">*/
/*                                 <p><a href="{{ path('fos_user_security_login') }}">SIGN IN</a> <span class="separator">|</span> <a href="{{ path('fos_user_registration_register') }}">REGISTER</a></p>*/
/*                             </div>    */
/* */
/*                             <div class="header_phone">*/
/*                                 <p>CALL US NOW: &nbsp; <strong>1-800-531-453</strong></p>*/
/*                             </div>	        */
/* */
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/*                         <div class="topmenu">*/
/*                             <ul class="dropdown">*/
/*                                 <li class="menu-level-0 menu-item-home current-menu-item"><a href="{{ path('pi_general_home') }}"><span>Home</span></a></li>*/
/*                                 <li class="menu-level-0 mega-nav"><a href="#"><span>Destinations</span></a>*/
/*                                     <ul class="submenu-1">*/
/*                                         <li class="menu-level-1"><a href="{{ path('pi_general_Holidays') }}"><img src="{{ asset('images/icons/continent_1.png') }}" width="80" height="68" alt=""> <span>North America</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>USA MAINLAND</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Canada</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Hawaii</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Alaska</span></a></li>                                 */
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><img src="{{ asset('images/icons/continent_2.png') }}" width="80" height="68" alt=""> <span>Central & South America</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Argentina</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Belize</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Bolivia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Brasil</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Chile & Easter Island</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Columbia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Costa Rica</span></a></li>  */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Ecuador</span></a></li>   */
/*                                                 <li class="menu-level-2 more-nav"><a href="{{ asset('offers-list.html') }}"><span>See all Destinations</span></a></li>                                                          */
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><img src="{{ asset('images/icons/continent_3.png') }}" width="80" height="68" alt=""> <span>Africa & Middle East</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>South Africa</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Tanzania</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Tunisia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Maroco</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Egipt</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Kenya</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Dubai & UAE</span></a></li>  */
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><img src="{{ asset('images/icons/continent_4.png') }}" width="80" height="68" alt=""> <span>EUROPE</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>United Kingdom</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>France</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Greece</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Spain</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Germany</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Croatia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Romania</span></a></li>  */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Cyprus</span></a></li>*/
/*                                                 <li class="menu-level-2 more-nav"><a href="offers-list.') }}"><span>See all Destinations</span></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><img src="{{ asset('images/icons/continent_5.png') }}" width="80" height="68" alt=""> <span>ASIA & SOUTH PACIFIC</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Australia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>China</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.') }}"><span>Philipinnes</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>India</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Indonesia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Malaysia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Singapore</span></a></li>  */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Thailand</span></a></li>*/
/*                                                 <li class="menu-level-2 more-nav"><a href="{{ asset('offers-list.html') }}"><span>See all Destinations</span></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li class="menu-level-0"><a href="{{ path('pi_general_Holidays') }}"><span>Special Offers</span></a></li>*/
/*                                 <li class="menu-level-0"><a href="{{ asset('#') }}"><span>Holidays</span></a>*/
/*                                     <ul class="submenu-1">*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><span>North America</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>USA MAINLAND</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Canada</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Hawaii</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Alaska</span></a></li>                                 */
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><span>Central & South America</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Argentina</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Belize</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Bolivia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Brasil</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Chile & Easter Island</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Columbia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Costa Rica</span></a></li>  */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Ecuador</span></a></li>                                    */
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><span>Africa & Middle East</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>South Africa</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Tanzania</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Tunisia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Maroco</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Egipt</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Kenya</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Dubai & UAE</span></a></li>  */
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><span>EUROPE</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>United Kingdom</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>France</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Greece</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Spain</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Germany</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Croatia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Romania</span></a></li>  */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Cyprus</span></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="menu-level-1"><a href="{{ path('pi_general_Holidays') }}"><span>ASIA & SOUTH PACIFIC</span></a>*/
/*                                             <ul class="submenu-2">*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Australia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>China</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Philipinnes</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>India</span></a></li>    */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Indonesia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Malaysia</span></a></li>*/
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Singapore</span></a></li>  */
/*                                                 <li class="menu-level-2"><a href="{{ asset('offers-list.html') }}"><span>Thailand</span></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li class="menu-level-0"><a href="{{ path('pi_general_hotels') }}"><span>Hotels</span></a></li>*/
/*                                 <li class="menu-level-0"><a href="{{ path('pi_general_billets') }}"><span>Flights</span></a></li>*/
/*                                 <li class="menu-level-0"><a href="{{ path('pi_general_blog') }}"><span>Our Blog</span></a></li>*/
/*                                 <li class="menu-level-0"><a href="{{ path('pi_general_contact_us') }}"><span>Contact us</span></a></li>*/
/*                             </ul>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                            */
/*                            */
/*                 <!--/ header -->*/
/* */
/*                 */
/* */
/*             {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block footer %}*/
/*             <!-- after content -->*/
/*             <div class="after_content">*/
/*                 <div class="after_inner">*/
/*                     <div class="container_12">*/
/* */
/*                         <!--# widgets area, col 1 -->    */
/*                         <div class="widgetarea widget_col_1">*/
/* */
/*                             <!-- widget_products -->*/
/*                             <div class="widget-container widget_products">*/
/*                                 <div class="inner">*/
/*                                     <h3>PROMO OF THE DAY:</h3>                    */
/*                                     <div class="prod_item">*/
/*                                         <div class="prod_image"><a href="{{ asset('offer-details.html') }}"><img src="{{ asset('images/temp/offer_small_01.jpg') }}" width="140" height="98" alt=""></a></div>*/
/*                                         <span class="price_box"><ins>$</ins><strong>1579</strong></span>*/
/*                                         <div class="prod_title">*/
/*                                             <a href="{{ asset('offer-details.html') }}"><strong>Hilton Opera House 5* 7 nights, flight included</strong></a><br>*/
/*                                             <span><a href="{{ asset('offer-details.html') }}">Sydney, Australia</a></span>*/
/*                                         </div> */
/*                                     </div>                                  */
/*                                     <div class="clear"></div>                                                                  */
/*                                 </div>*/
/*                             </div>*/
/*                             <!--/ widget_products -->*/
/* */
/*                         </div>*/
/*                         <!--/ widgets area, col 1 -->    */
/* */
/*                         <!--# widgets area, col 2 -->*/
/*                         <div class="widgetarea widget_col_2">*/
/* */
/*                             <!-- widget_newsletter -->*/
/*                             <div class="widget-container newsletterBox">*/
/*                                 <div class="inner">*/
/*                                     <h3>NEWSLETTER SIGNUP:</h3>*/
/*                                     <form method="get" action="#">*/
/*                                         <input type="text" value="Enter your email address" onfocus="if (this.value == 'Enter your email address') {*/
/*                                                     this.value = '';*/
/*                                                 }" onblur="if (this.value == '') {*/
/*                                                             this.value = 'Enter your email address';*/
/*                                                         }" name="email" class="inputField">				                    */
/*                                         <div class="rowCheckbox input_styled checklist">*/
/*                                             <input type="checkbox" name="subscribe" id="subscribe" value="1"> <label for="subscribe">Subscribe to RSS</label>*/
/*                                         </div>*/
/*                                         <input type="submit" value="SUBMIT" class="btn-submit">*/
/*                                     </form>     */
/*                                 </div>*/
/*                             </div>*/
/*                             <!--/ widget_newsletter -->*/
/* */
/*                         </div>*/
/*                         <!--/ widgets area, col 2 -->*/
/* */
/*                         <!--# widgets area, col 3 -->*/
/*                         <div class="widgetarea widget_col_3">*/
/* */
/*                             <!-- widget_twitter -->            */
/*                             <div class="widget-container widget_twitter">*/
/*                                 <h3>TWITTER FEED:</h3>   */
/* */
/*                                 <div class="tweet_item">*/
/*                                     <div class="tweet_image"><img src="{{ asset('images/temp/twitter_avatar.png') }}" width="30" height="30" alt=""></div>*/
/*                                     <div class="tweet_text">*/
/*                                         <div class="inner">*/
/*                                             How the Explosion in Online’s Education can be the Revolution for your Business: <a href="{{ asset('#') }}">ow.ly/aFK40</a>*/
/*                                             <br><a href="{{ asset('#') }}" class="tweet_author">#blogging</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>   */
/* */
/*                                 <a href="{{ asset('#') }}" class="fallow">Follow us</a>*/
/*                             </div>*/
/*                             <!--/ widget_twitter -->*/
/*                         </div>*/
/*                         <!--/ widgets area, col 3 -->*/
/* */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--/ after content -->*/
/* */
/*             <!-- footer -->*/
/*             <div class="footer">*/
/*                 <div class="footer_inner">*/
/*                     <div class="container_12">*/
/* */
/*                         <!--# footer col 1 -->*/
/*                         <div class="widgetarea f_col_1">*/
/* */
/*                             <!-- widget_categories -->*/
/*                             <div class="widget-container widget_categories">*/
/*                                 <h3 class="widget-title">WORLD DESTINATIONS:</h3>*/
/*                                 <ul>*/
/*                                     <li><a href="{{ asset('#') }}"><span>AFRICA</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>NORTH AMERICA</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>AUSTRALIA</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>CENTRAL  AMERICA</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>ASIA & PACIFIC</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>SOUTH AMERICA</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>EUROPE</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>CARRIBEAN</span></a></li>*/
/*                                     <li><a href="{{ asset('#') }}"><span>MIDDLE EAST</span></a></li>*/
/*                                     <li class="item-search"><a href="{{ asset('#') }}"><span>Search for more</span></a></li>*/
/*                                 </ul>*/
/*                             </div>  */
/*                             <!--/ widget_categories -->*/
/* */
/*                         </div>*/
/*                         <!--/ footer col 1 -->*/
/* */
/*                         <!--# footer col 2 -->*/
/*                         <div class="widgetarea f_col_2">*/
/* */
/*                             <div class="widget-container widget_pages">*/
/*                                 <h3 class="widget-title">USEFUL LINKS:</h3>*/
/*                                 <ul>*/
/* */
/*                                     <li><a href="{{ path('pi_general_about_us') }}">About us</a></li>*/
/*                                     <li><a href="{{ asset('#') }}">Contact us</a></li>*/
/*                                     <li><a href="{{ path('pi_general_blog') }}">Our Blog</a></li>*/
/*                                     <li><a href="{{ asset('#') }}">TERMS OF SERVICE</a></li>*/
/*                                     <li><a href="{{ asset('#') }}">PRIVACY POLICY</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                         <!--/ footer col 2 -->*/
/* */
/* */
/*                         <!--# footer col 3 -->*/
/*                         <div class="widgetarea f_col_3">*/
/* */
/*                             <!-- widget_contact -->*/
/*                             <div class="widget-container widget_contact">   */
/*                                 <h3 class="widget-title">CONNECT WITH US</h3>*/
/*                                 <div class="inner">   */
/* */
/*                                     <div class="contact-social">*/
/*                                         <div><strong>Call us:</strong> <br> <a href="{{ asset('#') }}" class="btn btn_skype">Skype</a></div>*/
/*                                         <div><strong>Follow us:</strong> <br> <a href="{{ asset('#') }}" class="btn btn_twitter">Twitter</a></div>*/
/*                                         <div><strong>Join us:</strong> <br> <a href="{{ asset('#') }}" class="btn btn_fb">Facebook</a></div>*/
/*                                         <div class="clear"></div>*/
/*                                     </div>*/
/* */
/*                                     <div class="contact-address">*/
/*                                         <div class="phone"><em>Phone:</em> <span>555-522.326</span></div>*/
/*                                         <div class="fax"><em>Fax:</em> <span>555-345.285</span></div>*/
/*                                         <div class="mail"><em>Email:</em> <a href="{{ asset('mailto:contact@travelagency.com') }}">contact@travelagency.com</a></div>*/
/*                                     </div>*/
/* */
/*                                 </div>     */
/*                             </div>*/
/*                             <!--/ widget_contact -->*/
/* */
/*                         </div>*/
/*                         <!--/ footer col 3 -->*/
/* */
/* */
/*                         <div class="copyright">*/
/*                             <p class="alignleft">copyright 2012 - Travel  Agency WordPress theme</p>*/
/*                             <p>Created by <a href="{{ asset('http://themefuse.com') }}">Themefuse</a> - Premium WordPress themes</p>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--/ footer -->*/
/* */
/*         {% endblock %}*/
/*     {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
