<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_507e91acd67f28a7d90b03e386d9194460cad0ac1177e929fd1ee8ed9b5dee4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content1' => array($this, 'block_content1'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content2' => array($this, 'block_content2'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">

<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">

<!-- favicon.ico and apple-touch-icon.png -->
<link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-57x57-iphone.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-72x72-ipad.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-114x114-iphone4.png"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("screen.css"), "html", null, true);
        echo "\">
<!-- custom CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("custom.css"), "html", null, true);
        echo "\">

<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<!-- JS libs -->
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/modernizr-2.5.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/respond.min.js"), "html", null, true);
        echo "\"></script>\t\t
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery.min.js"), "html", null, true);
        echo "\"></script>\t\t\t 

<!-- scripts -->
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/general.js"), "html", null, true);
        echo "\"></script>
<!-- sliders -->
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slides.min.jquery.js"), "html", null, true);
        echo "\"></script>
<!-- range sliders -->
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slider.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slider.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jslider.css"), "html", null, true);
        echo "\">
<!-- custom input -->
<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/customInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.customInput.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom-theme/jquery-ui-1.8.20.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
<script>
\tjQuery(document).ready(function(\$) {
\t\t\$(\"#date_in, #date_out, #filter_date_in, #filter_date_out\").datepicker({
\t\t\tdateFormat: 'MM dd, yy',
\t\t\tminDate: 0,
\t\t\tshowOtherMonths: true
\t\t});
\t});
</script>
<!-- styled select -->
<link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cusel.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cusel-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jScrollPane.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</head>
";
        // line 69
        $this->displayBlock('header', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('content1', $context, $blocks);
        // line 297
        echo "            
            
            ";
        // line 299
        $this->displayBlock('body', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('content2', $context, $blocks);
        // line 368
        echo "    


";
        // line 371
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "<title>GoVoyage | FOS</title>";
    }

    // line 69
    public function block_header($context, array $blocks = array())
    {
        // line 70
        echo "<body>  
<div class=\"body_wrap\">

<div class=\"header\">
\t<div class=\"container_12\">
    \t
        <div class=\"logo\">
   \t    \t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a><br>
            <strong>Travel Agency - Premium WordPress Theme</strong>
        </div>
        
      \t<div class=\"header_right\">
\t        
\t        <div class=\"topsearch\">
            \t<form id=\"searchForm\" action=\"#\" method=\"get\">
                \t<input type=\"submit\" id=\"searchSubmit\" value=\"\" class=\"btn-search\">
                    <input type=\"text\" name=\"stext\" id=\"stext\" value=\"\" class=\"stext\">                    
\t\t\t\t</form>
            </div>  
            
            <div class=\"toplogin\">
\t        \t<p><a href=\"#\">SIGN IN</a> <span class=\"separator\">|</span> <a href=\"#\">REGISTER</a></p>
\t        </div>    
            
            <div class=\"header_phone\">
\t        \t<p>CALL US NOW: &nbsp; <strong>1-800-531-453</strong></p>
\t        </div>\t        
\t        
            <div class=\"clear\"></div>
        </div>
        
        <div class=\"topmenu\">
        \t<ul class=\"dropdown\">
            \t<li class=\"menu-level-0 menu-item-home\"><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\"><span>Home</span></a></li>
                <li class=\"menu-level-0 mega-nav\"><a href=\"#\"><span>Destinations</span></a>
                \t<ul class=\"submenu-1\">
                    \t<li class=\"menu-level-1\"><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offers-list.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_1.png"), "html", null, true);
        echo "\" alt=\"\"> <span>North America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>USA MAINLAND</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Canada</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Hawaii</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Alaska</span></a></li>                                 
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_2.png"), "html", null, true);
        echo "\" alt=\"\"> <span>Central & South America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Argentina</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Belize</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Bolivia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Brasil</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Chile & Easter Island</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Columbia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Costa Rica</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Ecuador</span></a></li>   
                                 <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.html\"><span>See all Destinations</span></a></li>                                                          
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_3.png"), "html", null, true);
        echo "\" alt=\"\"> <span>Africa & Middle East</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>South Africa</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tanzania</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tunisia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Maroco</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Egipt</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Kenya</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Dubai & UAE</span></a></li>  
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/continent_4.png"), "html", null, true);
        echo "\" alt=\"\"> <span>EUROPE</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>United Kingdom</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>France</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Greece</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Spain</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Germany</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Croatia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Romania</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Cyprus</span></a></li>
                                 <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.html\"><span>See all Destinations</span></a></li>
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><img src=\"images/icons/continent_5.png\" alt=\"\"> <span>ASIA & SOUTH PACIFIC</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Australia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>China</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Philipinnes</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>India</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Indonesia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Malaysia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Singapore</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Thailand</span></a></li>
                                 <li class=\"menu-level-2 more-nav\"><a href=\"offers-list.html\"><span>See all Destinations</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>Special Offers</span></a></li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>Holidays</span></a>
                \t<ul class=\"submenu-1\">
                    \t<li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>North America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>USA MAINLAND</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Canada</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Hawaii</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Alaska</span></a></li>                                 
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>Central & South America</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Argentina</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Belize</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Bolivia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Brasil</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Chile & Easter Island</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Columbia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Costa Rica</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Ecuador</span></a></li>                                    
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>Africa & Middle East</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>South Africa</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tanzania</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Tunisia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Maroco</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Egipt</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Kenya</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Dubai & UAE</span></a></li>  
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>EUROPE</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>United Kingdom</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>France</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Greece</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Spain</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Germany</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Croatia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Romania</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Cyprus</span></a></li>
                            </ul>
                        </li>
                        <li class=\"menu-level-1\"><a href=\"offers-list.html\"><span>ASIA & SOUTH PACIFIC</span></a>
                        \t<ul class=\"submenu-2\">
                            \t <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Australia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>China</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Philipinnes</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>India</span></a></li>    
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Indonesia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Malaysia</span></a></li>
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Singapore</span></a></li>  
                                 <li class=\"menu-level-2\"><a href=\"offers-list.html\"><span>Thailand</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>City Breaks</span></a></li>
                <li class=\"menu-level-0\"><a href=\"#\"><span>Flights</span></a></li>
                <li class=\"menu-level-0\"><a href=\"blog.html\"><span>Our Blog</span></a></li>
                <li class=\"menu-level-0 current-menu-item\"><a href=\"contact.html\"><span>Contact us</span></a></li>
            </ul>
            <div class=\"clear\"></div>
        </div>
        
        <div class=\"clear\"></div>
    </div>
</div>
<!--/ header -->
";
    }

    // line 240
    public function block_content1($context, array $blocks = array())
    {
        // line 241
        echo "<!-- before content -->
<div class=\"before_content\">
<div class=\"before_inner\">
\t<div class=\"container_12\">
    \t
        <div class=\"title\">\t\t\t
            <span class=\"title_right\"><a href=\"#\">See all Holiday offers</a> <span class=\"separator\">|</span> <a href=\"#\">See all Special offers</a></span>
        </div>
        
        <div class=\"search_main\">
            <form action=\"#\" method=\"post\" class=\"form_search\">
            \t
                <div class=\"search_col_1\">
                \t
                   \t<div class=\"row rowInput\">
                    \t<label>DESTINATION:</label>
                        <input type=\"text\" name=\"city_from\" class=\"inputField\" value=\"City, Resort, etc\" onfocus=\"if (this.value == 'City, Resort, etc') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'City, Resort, etc';}\">
                    </div>
                    
                    <div class=\"row\">
                        <input type=\"text\" name=\"date_in\" class=\"inputField\" value=\"Check-in date\" onfocus=\"if (this.value == 'Check-in date') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Check-in date';}\" id=\"date_in\">
                        <span class=\"input_icon\"></span>
                    </div>
                    
                    <div class=\"row\">
                        <input type=\"text\" name=\"date_out\" class=\"inputField\" value=\"Check-out date\" onfocus=\"if (this.value == 'Check-out date') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Check-out date';}\" id=\"date_out\">
                        <span class=\"input_icon\"></span>
                    </div>                    
                    
                    <div class=\"row rowSubmit\"><input type=\"submit\" value=\"FIND VACATIONS\" class=\"btn btn-find\"></div>
                    
                </div>
                
                <div class=\"clear\"></div>
            </form>            
        </div>
        
    </div>
</div>
</div>
<!--/ before content -->

<div id=\"middle\" class=\"cols2\">
\t<div class=\"container_12\">
    
\t\t<!-- breadcrumbs -->
        <div class=\"breadcrumbs\">
        \t<p><a href=\"index.html\">Homepage</a> <span class=\"separator\">&gt;</span> <a href=\"about.html\">About us</a> <span class=\"separator\">&gt;</span> <span>Contact us</span></p>
        </div>
        <!--/ breadcrumbs -->
        
        <!-- content -->
        <div class=\"content\">
        \t
            <div class=\"add-comment contact-form\">
            ";
    }

    // line 299
    public function block_body($context, array $blocks = array())
    {
        // line 300
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 301
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 302
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 303
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 306
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 308
        echo "        </div>-->
<div class=\"widget-container widget_login\">
        ";
        // line 310
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 311
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 312
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 313
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 314
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 317
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "        ";
        }
        // line 319
        echo "
        
            ";
        // line 321
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 323
        echo "</div>
            
            </div>
            
        \t
";
    }

    // line 321
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 322
        echo "            ";
    }

    // line 330
    public function block_content2($context, array $blocks = array())
    {
        // line 331
        echo "    <!-- sidebar -->
        <div class=\"sidebar\">
\t\t\t
            <!-- widget_contact -->
\t        <div class=\"widget-container widget_contact\">   
\t            <div class=\"inner\">   
\t            \t
\t                <div class=\"contact-address\">
\t                \t<div class=\"name\"><strong>Travel Agency LTD</strong></div>
\t\t\t\t\t\t<div class=\"address\">21 Sunset Blvd. New York, NY</div>
\t\t\t\t\t\t<div class=\"phone\"><em>Phone:</em> <span>555-522.326</span></div>
\t                    <div class=\"fax\"><em>Fax:</em> <span>555-345.285</span></div>
\t\t                <div class=\"mail\"><em>Email:</em> <a href=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mailto:contact@travelagency.com"), "html", null, true);
        echo "\">contact@travelagency.com</a></div>
\t\t\t\t\t</div>
\t\t                  
\t\t\t\t\t<div class=\"contact-social\">
\t\t            \t<div><strong>Call us:</strong> <br> <a href=\"#\" class=\"btn btn_skype\">Skype</a></div>
\t\t                <div><strong>Follow us:</strong> <br> <a href=\"#\" class=\"btn btn_twitter\">Twitter</a></div>
\t\t                <div><strong>Join us:</strong> <br> <a href=\"#\" class=\"btn btn_fb\">Facebook</a></div>
\t\t           \t<div class=\"clear\"></div>
\t\t            </div>
                    
\t\t\t\t</div>     
\t\t\t</div>
\t        <!--/ widget_contact -->
            
            <div class=\"contact-map\">
\t\t\t\t<img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/map.gif"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            
        </div>
        <!--/ sidebar -->
        
        <div class=\"clear\"></div>        
    </div>
</div>
<!--/ middle -->
";
    }

    // line 371
    public function block_footer($context, array $blocks = array())
    {
        // line 372
        echo "    <!-- after content -->
<div class=\"after_content\">
<div class=\"after_inner\">
\t<div class=\"container_12\">
   \t    
        <!--# widgets area, col 1 -->    
        <div class=\"widgetarea widget_col_1\">
        
        \t<!-- widget_products -->
        \t<div class=\"widget-container widget_products\">
            \t<div class=\"inner\">
               \t  \t<h3>PROMO OF THE DAY:</h3>                    
                    <div class=\"prod_item\">
\t                    <div class=\"prod_image\"><a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_small_01.jpg"), "html", null, true);
        echo "\" width=\"140\" height=\"98\" alt=\"\"></a></div>
\t                    <span class=\"price_box\"><ins>\$</ins><strong>1579</strong></span>
\t                    <div class=\"prod_title\">
                        \t<a href=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><strong>Hilton Opera House 5* 7 nights, flight included</strong></a><br>
\t                    \t<span><a href=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">Sydney, Australia</a></span>
\t                    </div> 
                    </div>                                  
                    <div class=\"clear\"></div>                                                                  
                </div>
            </div>
            <!--/ widget_products -->
            
        </div>
        <!--/ widgets area, col 1 -->    
        
        <!--# widgets area, col 2 -->
        <div class=\"widgetarea widget_col_2\">
        \t
            <!-- widget_newsletter -->
            <div class=\"widget-container newsletterBox\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h3>NEWSLETTER SIGNUP:</h3>
\t\t\t\t\t<form method=\"get\" action=\"#\">
\t\t\t\t\t\t<input type=\"text\" value=\"Enter your email address\" onfocus=\"if (this.value == 'Enter your email address') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'Enter your email address';}\" name=\"email\" class=\"inputField\">\t\t\t\t                    
\t\t\t\t\t\t<div class=\"rowCheckbox input_styled checklist\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"subscribe\" id=\"subscribe\" value=\"1\"> <label for=\"subscribe\">Subscribe to RSS</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"submit\" value=\"SUBMIT\" class=\"btn-submit\">
\t\t\t\t\t</form>     
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--/ widget_newsletter -->
            
        </div>
        <!--/ widgets area, col 2 -->
        
        <!--# widgets area, col 3 -->
        <div class=\"widgetarea widget_col_3\">
        \t
            <!-- widget_twitter -->            
            <div class=\"widget-container widget_twitter\">
\t\t\t\t<h3>TWITTER FEED:</h3>   
               
  \t\t    \t<div class=\"tweet_item\">
                \t<div class=\"tweet_image\"><img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/twitter_avatar.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"\"></div>
                    <div class=\"tweet_text\">
                    \t<div class=\"inner\">
\t\t    \t  \t\tHow the Explosion in Online’s Education can be the Revolution for your Business: <a href=\"#\">ow.ly/aFK40</a>
                        <br><a href=\"#\" class=\"tweet_author\">#blogging</a>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
\t  \t\t  \t</div>   
                                
                <a href=\"#\" class=\"fallow\">Follow us</a>
\t\t\t</div>
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
\t<div class=\"container_12\">
    
    \t<!--# footer col 1 -->
        <div class=\"widgetarea f_col_1\">
        \t
            <!-- widget_categories -->
\t        <div class=\"widget-container widget_categories\">
\t\t\t\t<h3 class=\"widget-title\">WORLD DESTINATIONS:</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><span>AFRICA</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span>NORTH AMERICA</span></a></li>
                        <li><a href=\"#\"><span>AUSTRALIA</span></a></li>
                        <li><a href=\"#\"><span>CENTRAL  AMERICA</span></a></li>
                        <li><a href=\"#\"><span>ASIA & PACIFIC</span></a></li>
                        <li><a href=\"#\"><span>SOUTH AMERICA</span></a></li>
                        <li><a href=\"#\"><span>EUROPE</span></a></li>
                        <li><a href=\"#\"><span>CARRIBEAN</span></a></li>
                        <li><a href=\"#\"><span>MIDDLE EAST</span></a></li>
                        <li class=\"item-search\"><a href=\"#\"><span>Search for more</span></a></li>
\t\t\t\t\t</ul>
\t\t\t</div>  
\t        <!--/ widget_categories -->
           
        </div>
        <!--/ footer col 1 -->
        
        <!--# footer col 2 -->
        <div class=\"widgetarea f_col_2\">
        \t
            <div class=\"widget-container widget_pages\">
\t\t\t\t<h3 class=\"widget-title\">USEFUL LINKS:</h3>
                        <ul>
                            
                \t      <li><a href=\"#\">About us</a></li>
                          <li><a href=\"#\">Contact us</a></li>
                          <li><a href=\"#\">Our Blog</a></li>
                          <li><a href=\"#\">TERMS OF SERVICE</a></li>
                          <li><a href=\"#\">PRIVACY POLICY</a></li>
                        </ul>
\t\t\t</div>
            
           
        </div>
        <!--/ footer col 2 -->
        
        
        <!--# footer col 3 -->
        <div class=\"widgetarea f_col_3\">
        \t            
            <!-- widget_contact -->
\t        <div class=\"widget-container widget_contact\">   
\t\t\t\t<h3 class=\"widget-title\">CONNECT WITH US</h3>
\t            <div class=\"inner\">   
\t            \t
\t\t\t\t\t<div class=\"contact-social\">
\t\t            \t<div><strong>Call us:</strong> <br> <a href=\"#\" class=\"btn btn_skype\">Skype</a></div>
\t\t                <div><strong>Follow us:</strong> <br> <a href=\"#\" class=\"btn btn_twitter\">Twitter</a></div>
\t\t                <div><strong>Join us:</strong> <br> <a href=\"#\" class=\"btn btn_fb\">Facebook</a></div>
\t\t           \t<div class=\"clear\"></div>
\t\t            </div>
                    
                    <div class=\"contact-address\">
\t\t\t\t\t\t<div class=\"phone\"><em>Phone:</em> <span>555-522.326</span></div>
\t                    <div class=\"fax\"><em>Fax:</em> <span>555-345.285</span></div>
\t\t                <div class=\"mail\"><em>Email:</em> <a href=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mailto:contact@travelagency.com"), "html", null, true);
        echo "\">contact@travelagency.com</a></div>
\t\t\t\t\t</div>
\t                       
\t\t\t\t</div>     
\t\t\t</div>
\t        <!--/ widget_contact -->
           
        </div>
        <!--/ footer col 3 -->
    \t
        
        <div class=\"copyright\">
        \t<p class=\"alignleft\">copyright 2012 - Travel  Agency WordPress theme</p>
            <p>Created by <a href=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://themefuse.com"), "html", null, true);
        echo "\">Themefuse</a> - Premium WordPress themes</p>
        </div>
        
    </div>
</div>
</div>
<!--/ footer -->
    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 531,  777 => 518,  685 => 429,  642 => 389,  638 => 388,  630 => 385,  615 => 372,  612 => 371,  597 => 358,  579 => 343,  565 => 331,  562 => 330,  558 => 322,  555 => 321,  546 => 323,  544 => 321,  540 => 319,  537 => 318,  531 => 317,  522 => 314,  517 => 313,  512 => 312,  507 => 311,  505 => 310,  501 => 308,  493 => 306,  487 => 303,  483 => 302,  478 => 301,  475 => 300,  472 => 299,  413 => 241,  410 => 240,  305 => 138,  291 => 127,  275 => 114,  262 => 106,  256 => 103,  225 => 77,  216 => 70,  213 => 69,  207 => 11,  203 => 371,  198 => 368,  196 => 330,  193 => 329,  191 => 299,  187 => 297,  185 => 240,  182 => 239,  180 => 69,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  159 => 63,  145 => 52,  141 => 51,  136 => 49,  132 => 48,  127 => 46,  123 => 45,  119 => 44,  114 => 42,  109 => 40,  105 => 39,  101 => 38,  95 => 35,  91 => 34,  87 => 33,  80 => 29,  75 => 27,  71 => 26,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  45 => 15,  40 => 12,  38 => 11,  26 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->*/
/* <!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->*/
/* <!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->*/
/* <!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/* */
/* {% block title %}<title>GoVoyage | FOS</title>{% endblock %}*/
/* <meta name="description" content="">*/
/* <meta name="keywords" content="">*/
/* */
/* <link href="{{ asset('http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic') }}" rel="stylesheet">*/
/* */
/* <!-- Mobile viewport optimized: h5bp.com/viewport -->*/
/* <meta name="viewport" content="width=device-width,initial-scale=1">*/
/* */
/* <!-- favicon.ico and apple-touch-icon.png -->*/
/* <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">*/
/* <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57-iphone.png') }}">*/
/* <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72-ipad.png') }}">*/
/* <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114-iphone4.png') }}">*/
/* */
/* <link rel="stylesheet" href="{{ asset('style.css') }}">*/
/* <link rel="stylesheet" href="{{ asset('screen.css') }}">*/
/* <!-- custom CSS -->*/
/* <link rel="stylesheet" href="{{ asset('custom.css') }}">*/
/* */
/* <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>*/
/* <!-- JS libs -->*/
/* <script src="{{ asset('js/libs/modernizr-2.5.3.min.js') }}"></script>*/
/* <script src="{{ asset('js/libs/respond.min.js') }}"></script>		*/
/* <script src="{{ asset('js/libs/jquery.min.js') }}"></script>			 */
/* */
/* <!-- scripts -->*/
/* <script src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>*/
/* <script src="{{ asset('js/hoverIntent.js') }}"></script>*/
/* <script src="{{ asset('js/general.js') }}"></script>*/
/* <!-- sliders -->*/
/* <script src="{{ asset('js/slides.min.jquery.js') }}"></script>*/
/* <!-- range sliders -->*/
/* <script src="{{ asset('js/jquery.slider.bundle.js') }}"></script>*/
/* <script src="{{ asset('js/jquery.slider.js') }}"></script>*/
/* <link rel="stylesheet" href="{{ asset('css/jslider.css') }}">*/
/* <!-- custom input -->*/
/* <link href="{{ asset('css/customInput.css') }}" rel="stylesheet">*/
/* <script src="{{ asset('js/jquery.customInput.js') }}"></script>*/
/* <!-- datepicker -->*/
/* <link href="{{ asset('css/custom-theme/jquery-ui-1.8.20.custom.css') }}" rel="stylesheet">*/
/* <script src="{{ asset('js/jquery-ui-1.8.20.custom.min.js') }}"></script>*/
/* <script>*/
/* 	jQuery(document).ready(function($) {*/
/* 		$("#date_in, #date_out, #filter_date_in, #filter_date_out").datepicker({*/
/* 			dateFormat: 'MM dd, yy',*/
/* 			minDate: 0,*/
/* 			showOtherMonths: true*/
/* 		});*/
/* 	});*/
/* </script>*/
/* <!-- styled select -->*/
/* <link rel="stylesheet" href="{{ asset('css/cusel.css') }}">*/
/* <script src="{{ asset('js/cusel-min.js') }}"></script>*/
/* <script src="{{ asset('js/jScrollPane.min.js') }}"></script>*/
/* <script src="{{ asset('js/jquery.mousewheel.js') }}"></script>*/
/* <script type="text/javascript" language="javascript" src="{{ asset('js/custom.js') }}"></script>*/
/* </head>*/
/* {% block header %}*/
/* <body>  */
/* <div class="body_wrap">*/
/* */
/* <div class="header">*/
/* 	<div class="container_12">*/
/*     	*/
/*         <div class="logo">*/
/*    	    	<a href="{{ asset('index.html') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a><br>*/
/*             <strong>Travel Agency - Premium WordPress Theme</strong>*/
/*         </div>*/
/*         */
/*       	<div class="header_right">*/
/* 	        */
/* 	        <div class="topsearch">*/
/*             	<form id="searchForm" action="#" method="get">*/
/*                 	<input type="submit" id="searchSubmit" value="" class="btn-search">*/
/*                     <input type="text" name="stext" id="stext" value="" class="stext">                    */
/* 				</form>*/
/*             </div>  */
/*             */
/*             <div class="toplogin">*/
/* 	        	<p><a href="#">SIGN IN</a> <span class="separator">|</span> <a href="#">REGISTER</a></p>*/
/* 	        </div>    */
/*             */
/*             <div class="header_phone">*/
/* 	        	<p>CALL US NOW: &nbsp; <strong>1-800-531-453</strong></p>*/
/* 	        </div>	        */
/* 	        */
/*             <div class="clear"></div>*/
/*         </div>*/
/*         */
/*         <div class="topmenu">*/
/*         	<ul class="dropdown">*/
/*             	<li class="menu-level-0 menu-item-home"><a href="{{ asset('index.html') }}"><span>Home</span></a></li>*/
/*                 <li class="menu-level-0 mega-nav"><a href="#"><span>Destinations</span></a>*/
/*                 	<ul class="submenu-1">*/
/*                     	<li class="menu-level-1"><a href="{{ asset('offers-list.html') }}"><img src="{{ asset('images/icons/continent_1.png') }}" alt=""> <span>North America</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>USA MAINLAND</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Canada</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Hawaii</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Alaska</span></a></li>                                 */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><img src="{{ asset('images/icons/continent_2.png') }}" alt=""> <span>Central & South America</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>Argentina</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Belize</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Bolivia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Brasil</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Chile & Easter Island</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Columbia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Costa Rica</span></a></li>  */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Ecuador</span></a></li>   */
/*                                  <li class="menu-level-2 more-nav"><a href="offers-list.html"><span>See all Destinations</span></a></li>                                                          */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><img src="{{ asset('images/icons/continent_3.png') }}" alt=""> <span>Africa & Middle East</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>South Africa</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Tanzania</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Tunisia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Maroco</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Egipt</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Kenya</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Dubai & UAE</span></a></li>  */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><img src="{{ asset('images/icons/continent_4.png') }}" alt=""> <span>EUROPE</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>United Kingdom</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>France</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Greece</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Spain</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Germany</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Croatia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Romania</span></a></li>  */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Cyprus</span></a></li>*/
/*                                  <li class="menu-level-2 more-nav"><a href="offers-list.html"><span>See all Destinations</span></a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><img src="images/icons/continent_5.png" alt=""> <span>ASIA & SOUTH PACIFIC</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>Australia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>China</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Philipinnes</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>India</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Indonesia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Malaysia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Singapore</span></a></li>  */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Thailand</span></a></li>*/
/*                                  <li class="menu-level-2 more-nav"><a href="offers-list.html"><span>See all Destinations</span></a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="menu-level-0"><a href="#"><span>Special Offers</span></a></li>*/
/*                 <li class="menu-level-0"><a href="#"><span>Holidays</span></a>*/
/*                 	<ul class="submenu-1">*/
/*                     	<li class="menu-level-1"><a href="offers-list.html"><span>North America</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>USA MAINLAND</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Canada</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Hawaii</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Alaska</span></a></li>                                 */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><span>Central & South America</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>Argentina</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Belize</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Bolivia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Brasil</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Chile & Easter Island</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Columbia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Costa Rica</span></a></li>  */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Ecuador</span></a></li>                                    */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><span>Africa & Middle East</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>South Africa</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Tanzania</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Tunisia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Maroco</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Egipt</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Kenya</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Dubai & UAE</span></a></li>  */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><span>EUROPE</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>United Kingdom</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>France</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Greece</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Spain</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Germany</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Croatia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Romania</span></a></li>  */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Cyprus</span></a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="menu-level-1"><a href="offers-list.html"><span>ASIA & SOUTH PACIFIC</span></a>*/
/*                         	<ul class="submenu-2">*/
/*                             	 <li class="menu-level-2"><a href="offers-list.html"><span>Australia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>China</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Philipinnes</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>India</span></a></li>    */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Indonesia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Malaysia</span></a></li>*/
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Singapore</span></a></li>  */
/*                                  <li class="menu-level-2"><a href="offers-list.html"><span>Thailand</span></a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="menu-level-0"><a href="#"><span>City Breaks</span></a></li>*/
/*                 <li class="menu-level-0"><a href="#"><span>Flights</span></a></li>*/
/*                 <li class="menu-level-0"><a href="blog.html"><span>Our Blog</span></a></li>*/
/*                 <li class="menu-level-0 current-menu-item"><a href="contact.html"><span>Contact us</span></a></li>*/
/*             </ul>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         */
/*         <div class="clear"></div>*/
/*     </div>*/
/* </div>*/
/* <!--/ header -->*/
/* {% endblock %}*/
/* */
/* {% block content1 %}*/
/* <!-- before content -->*/
/* <div class="before_content">*/
/* <div class="before_inner">*/
/* 	<div class="container_12">*/
/*     	*/
/*         <div class="title">			*/
/*             <span class="title_right"><a href="#">See all Holiday offers</a> <span class="separator">|</span> <a href="#">See all Special offers</a></span>*/
/*         </div>*/
/*         */
/*         <div class="search_main">*/
/*             <form action="#" method="post" class="form_search">*/
/*             	*/
/*                 <div class="search_col_1">*/
/*                 	*/
/*                    	<div class="row rowInput">*/
/*                     	<label>DESTINATION:</label>*/
/*                         <input type="text" name="city_from" class="inputField" value="City, Resort, etc" onfocus="if (this.value == 'City, Resort, etc') {this.value = '';}" onblur="if (this.value == '') {this.value = 'City, Resort, etc';}">*/
/*                     </div>*/
/*                     */
/*                     <div class="row">*/
/*                         <input type="text" name="date_in" class="inputField" value="Check-in date" onfocus="if (this.value == 'Check-in date') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Check-in date';}" id="date_in">*/
/*                         <span class="input_icon"></span>*/
/*                     </div>*/
/*                     */
/*                     <div class="row">*/
/*                         <input type="text" name="date_out" class="inputField" value="Check-out date" onfocus="if (this.value == 'Check-out date') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Check-out date';}" id="date_out">*/
/*                         <span class="input_icon"></span>*/
/*                     </div>                    */
/*                     */
/*                     <div class="row rowSubmit"><input type="submit" value="FIND VACATIONS" class="btn btn-find"></div>*/
/*                     */
/*                 </div>*/
/*                 */
/*                 <div class="clear"></div>*/
/*             </form>            */
/*         </div>*/
/*         */
/*     </div>*/
/* </div>*/
/* </div>*/
/* <!--/ before content -->*/
/* */
/* <div id="middle" class="cols2">*/
/* 	<div class="container_12">*/
/*     */
/* 		<!-- breadcrumbs -->*/
/*         <div class="breadcrumbs">*/
/*         	<p><a href="index.html">Homepage</a> <span class="separator">&gt;</span> <a href="about.html">About us</a> <span class="separator">&gt;</span> <span>Contact us</span></p>*/
/*         </div>*/
/*         <!--/ breadcrumbs -->*/
/*         */
/*         <!-- content -->*/
/*         <div class="content">*/
/*         	*/
/*             <div class="add-comment contact-form">*/
/*             {% endblock %}*/
/*             */
/*             */
/*             {% block body %}*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>-->*/
/* <div class="widget-container widget_login">*/
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         */
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/* </div>*/
/*             */
/*             </div>*/
/*             */
/*         	*/
/* {% endblock %}*/
/* */
/* {% block content2  %}*/
/*     <!-- sidebar -->*/
/*         <div class="sidebar">*/
/* 			*/
/*             <!-- widget_contact -->*/
/* 	        <div class="widget-container widget_contact">   */
/* 	            <div class="inner">   */
/* 	            	*/
/* 	                <div class="contact-address">*/
/* 	                	<div class="name"><strong>Travel Agency LTD</strong></div>*/
/* 						<div class="address">21 Sunset Blvd. New York, NY</div>*/
/* 						<div class="phone"><em>Phone:</em> <span>555-522.326</span></div>*/
/* 	                    <div class="fax"><em>Fax:</em> <span>555-345.285</span></div>*/
/* 		                <div class="mail"><em>Email:</em> <a href="{{ asset('mailto:contact@travelagency.com') }}">contact@travelagency.com</a></div>*/
/* 					</div>*/
/* 		                  */
/* 					<div class="contact-social">*/
/* 		            	<div><strong>Call us:</strong> <br> <a href="#" class="btn btn_skype">Skype</a></div>*/
/* 		                <div><strong>Follow us:</strong> <br> <a href="#" class="btn btn_twitter">Twitter</a></div>*/
/* 		                <div><strong>Join us:</strong> <br> <a href="#" class="btn btn_fb">Facebook</a></div>*/
/* 		           	<div class="clear"></div>*/
/* 		            </div>*/
/*                     */
/* 				</div>     */
/* 			</div>*/
/* 	        <!--/ widget_contact -->*/
/*             */
/*             <div class="contact-map">*/
/* 				<img src="{{ asset('images/temp/map.gif') }}" alt="">*/
/*             </div>*/
/*             */
/*         </div>*/
/*         <!--/ sidebar -->*/
/*         */
/*         <div class="clear"></div>        */
/*     </div>*/
/* </div>*/
/* <!--/ middle -->*/
/* {% endblock %}    */
/* */
/* */
/* {% block footer %}*/
/*     <!-- after content -->*/
/* <div class="after_content">*/
/* <div class="after_inner">*/
/* 	<div class="container_12">*/
/*    	    */
/*         <!--# widgets area, col 1 -->    */
/*         <div class="widgetarea widget_col_1">*/
/*         */
/*         	<!-- widget_products -->*/
/*         	<div class="widget-container widget_products">*/
/*             	<div class="inner">*/
/*                	  	<h3>PROMO OF THE DAY:</h3>                    */
/*                     <div class="prod_item">*/
/* 	                    <div class="prod_image"><a href="{{ asset('offer-details.html') }}"><img src="{{ asset('images/temp/offer_small_01.jpg') }}" width="140" height="98" alt=""></a></div>*/
/* 	                    <span class="price_box"><ins>$</ins><strong>1579</strong></span>*/
/* 	                    <div class="prod_title">*/
/*                         	<a href="{{ asset('offer-details.html') }}"><strong>Hilton Opera House 5* 7 nights, flight included</strong></a><br>*/
/* 	                    	<span><a href="{{ asset('offer-details.html') }}">Sydney, Australia</a></span>*/
/* 	                    </div> */
/*                     </div>                                  */
/*                     <div class="clear"></div>                                                                  */
/*                 </div>*/
/*             </div>*/
/*             <!--/ widget_products -->*/
/*             */
/*         </div>*/
/*         <!--/ widgets area, col 1 -->    */
/*         */
/*         <!--# widgets area, col 2 -->*/
/*         <div class="widgetarea widget_col_2">*/
/*         	*/
/*             <!-- widget_newsletter -->*/
/*             <div class="widget-container newsletterBox">*/
/* 				<div class="inner">*/
/* 					<h3>NEWSLETTER SIGNUP:</h3>*/
/* 					<form method="get" action="#">*/
/* 						<input type="text" value="Enter your email address" onfocus="if (this.value == 'Enter your email address') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email address';}" name="email" class="inputField">				                    */
/* 						<div class="rowCheckbox input_styled checklist">*/
/* 						<input type="checkbox" name="subscribe" id="subscribe" value="1"> <label for="subscribe">Subscribe to RSS</label>*/
/* 						</div>*/
/* 						<input type="submit" value="SUBMIT" class="btn-submit">*/
/* 					</form>     */
/* 				</div>*/
/* 			</div>*/
/* 			<!--/ widget_newsletter -->*/
/*             */
/*         </div>*/
/*         <!--/ widgets area, col 2 -->*/
/*         */
/*         <!--# widgets area, col 3 -->*/
/*         <div class="widgetarea widget_col_3">*/
/*         	*/
/*             <!-- widget_twitter -->            */
/*             <div class="widget-container widget_twitter">*/
/* 				<h3>TWITTER FEED:</h3>   */
/*                */
/*   		    	<div class="tweet_item">*/
/*                 	<div class="tweet_image"><img src="{{ asset('images/temp/twitter_avatar.png') }}" width="30" height="30" alt=""></div>*/
/*                     <div class="tweet_text">*/
/*                     	<div class="inner">*/
/* 		    	  		How the Explosion in Online’s Education can be the Revolution for your Business: <a href="#">ow.ly/aFK40</a>*/
/*                         <br><a href="#" class="tweet_author">#blogging</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/* 	  		  	</div>   */
/*                                 */
/*                 <a href="#" class="fallow">Follow us</a>*/
/* 			</div>*/
/*             <!--/ widget_twitter -->*/
/*         </div>*/
/*         <!--/ widgets area, col 3 -->*/
/*         */
/*         <div class="clear"></div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <!--/ after content -->*/
/* */
/* <!-- footer -->*/
/* <div class="footer">*/
/* <div class="footer_inner">*/
/* 	<div class="container_12">*/
/*     */
/*     	<!--# footer col 1 -->*/
/*         <div class="widgetarea f_col_1">*/
/*         	*/
/*             <!-- widget_categories -->*/
/* 	        <div class="widget-container widget_categories">*/
/* 				<h3 class="widget-title">WORLD DESTINATIONS:</h3>*/
/* 					<ul>*/
/* 						<li><a href="#"><span>AFRICA</span></a></li>*/
/* 						<li><a href="#"><span>NORTH AMERICA</span></a></li>*/
/*                         <li><a href="#"><span>AUSTRALIA</span></a></li>*/
/*                         <li><a href="#"><span>CENTRAL  AMERICA</span></a></li>*/
/*                         <li><a href="#"><span>ASIA & PACIFIC</span></a></li>*/
/*                         <li><a href="#"><span>SOUTH AMERICA</span></a></li>*/
/*                         <li><a href="#"><span>EUROPE</span></a></li>*/
/*                         <li><a href="#"><span>CARRIBEAN</span></a></li>*/
/*                         <li><a href="#"><span>MIDDLE EAST</span></a></li>*/
/*                         <li class="item-search"><a href="#"><span>Search for more</span></a></li>*/
/* 					</ul>*/
/* 			</div>  */
/* 	        <!--/ widget_categories -->*/
/*            */
/*         </div>*/
/*         <!--/ footer col 1 -->*/
/*         */
/*         <!--# footer col 2 -->*/
/*         <div class="widgetarea f_col_2">*/
/*         	*/
/*             <div class="widget-container widget_pages">*/
/* 				<h3 class="widget-title">USEFUL LINKS:</h3>*/
/*                         <ul>*/
/*                             */
/*                 	      <li><a href="#">About us</a></li>*/
/*                           <li><a href="#">Contact us</a></li>*/
/*                           <li><a href="#">Our Blog</a></li>*/
/*                           <li><a href="#">TERMS OF SERVICE</a></li>*/
/*                           <li><a href="#">PRIVACY POLICY</a></li>*/
/*                         </ul>*/
/* 			</div>*/
/*             */
/*            */
/*         </div>*/
/*         <!--/ footer col 2 -->*/
/*         */
/*         */
/*         <!--# footer col 3 -->*/
/*         <div class="widgetarea f_col_3">*/
/*         	            */
/*             <!-- widget_contact -->*/
/* 	        <div class="widget-container widget_contact">   */
/* 				<h3 class="widget-title">CONNECT WITH US</h3>*/
/* 	            <div class="inner">   */
/* 	            	*/
/* 					<div class="contact-social">*/
/* 		            	<div><strong>Call us:</strong> <br> <a href="#" class="btn btn_skype">Skype</a></div>*/
/* 		                <div><strong>Follow us:</strong> <br> <a href="#" class="btn btn_twitter">Twitter</a></div>*/
/* 		                <div><strong>Join us:</strong> <br> <a href="#" class="btn btn_fb">Facebook</a></div>*/
/* 		           	<div class="clear"></div>*/
/* 		            </div>*/
/*                     */
/*                     <div class="contact-address">*/
/* 						<div class="phone"><em>Phone:</em> <span>555-522.326</span></div>*/
/* 	                    <div class="fax"><em>Fax:</em> <span>555-345.285</span></div>*/
/* 		                <div class="mail"><em>Email:</em> <a href="{{ asset('mailto:contact@travelagency.com') }}">contact@travelagency.com</a></div>*/
/* 					</div>*/
/* 	                       */
/* 				</div>     */
/* 			</div>*/
/* 	        <!--/ widget_contact -->*/
/*            */
/*         </div>*/
/*         <!--/ footer col 3 -->*/
/*     	*/
/*         */
/*         <div class="copyright">*/
/*         	<p class="alignleft">copyright 2012 - Travel  Agency WordPress theme</p>*/
/*             <p>Created by <a href="{{ asset('http://themefuse.com') }}">Themefuse</a> - Premium WordPress themes</p>*/
/*         </div>*/
/*         */
/*     </div>*/
/* </div>*/
/* </div>*/
/* <!--/ footer -->*/
/*     */
/* </div>*/
/* {% endblock %}*/
/* */
