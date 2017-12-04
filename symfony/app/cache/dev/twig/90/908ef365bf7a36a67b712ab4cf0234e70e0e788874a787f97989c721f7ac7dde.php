<?php

/* PiGeneralBundle:Default:offers_list.html.twig */
class __TwigTemplate_382d5f58883245c2db04e4133932a7d25ffea87af5d3df0e0c005a0c902795a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:offers_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "<title>GoVoyage | Holidays_offers</title>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    \t<!-- before content -->
<div class=\"before_content\">
<div class=\"before_inner\">
\t<div class=\"container_12\">
    \t
        <div class=\"title\">\t\t\t
            <span class=\"title_right\"><a href=\"#\">See all Holiday offers</a> <span class=\"separator\">|</span> <a href=\"#\">See all Special offers</a></span>
        </div>
        
        <div class=\"search_main\">
        \t<form action=\"#\" method=\"get\" class=\"form_search\">
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
        \t<p><a href=\"index.html\">Homepage</a> <span class=\"separator\">&gt;</span> <a href=\"offers-list.html\">Holidays</a> <span class=\"separator\">&gt;</span> <span>Asia & Pacific</span></p>
        </div>
        <!--/ breadcrumbs -->
        
        <!-- content -->
        <div class=\"content\">
        \t
            <div class=\"title\">
\t        \t<h1>HOLIDAYS IN <span>ASIA & SOUTH PACIFIC</span></h1>
                <span class=\"title_right count\">374 available offers</span>
\t    \t</div>
        \t
            <!-- sorting, pages -->
\t        <div class=\"block_hr list_manage\">
\t                \t<form action=\"#\" method=\"post\" class=\"form_sort\">
\t\t\t            \t<span class=\"manage_title\">Sort by:</span>
\t\t\t\t\t\t\t\t<select class=\"select_styled white_select\" name=\"sort_list\" id=\"sort_list\">
\t\t\t                    \t<option value=\"1\">Latest Added</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" selected>Price High - Low</option>
\t\t\t                        <option value=\"3\">Price Low - Hight</option>
\t\t\t                        <option value=\"4\">Names A-Z</option>
\t\t\t                        <option value=\"5\">Names Z-A</option>
\t\t\t                    </select>
\t\t\t            </form>    
\t\t\t            
\t\t\t            <div class=\"pages_jump\">
\t\t\t            \t<span class=\"manage_title\">Jump to page:</span>
\t\t\t                <form action=\"#\" method=\"post\">
\t\t\t                \t<input type=\"text\" name=\"jumptopage\" value=\"15\" class=\"inputSmall\"><input type=\"submit\" class=\"btn-arrow\" value=\"Go\">
\t\t\t                </form>
\t\t\t            </div>
\t\t\t            
\t\t\t            <div class=\"pages\">
\t\t\t            \t<span class=\"manage_title\">Page: &nbsp;<strong>1 of 25</strong></span> <a href=\"#\" class=\"link_prev\">Previous</a><a href=\"#\" class=\"link_next\">Next</a>
\t\t\t            </div> 
\t                    
\t                    <div class=\"clear\"></div>
\t        </div>
          \t<!--/ sorting, pages -->
          
          \t<!-- offers list -->
\t\t\t<div class=\"re-list\">
        
\t            <div class=\"re-item\">        \t
\t                <div class=\"re-image\">
                    \t<a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("pi_general_Holiday_detail");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_mid_01.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"caption\">View More Details</span></a>
                    </div>
                    
\t                <div class=\"re-short\">            \t
\t                    <div class=\"re-top\">
\t                        <h2><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">Thailand - Koh Samui Honeymoon</a></h2>
                            <div class=\"re-subtitle\">Hotel: <strong>Dreams Villa Resort 4*</strong> (7 nights)</div>
\t                    </div>                
\t                    <div class=\"re-descr\">
\t                        <p>As its name suggests‚ this modern hotel has an ideal located at the entrance to the stylish Abu Tig Marina and is almost surrounded by the sea offers a superb range of facilities. </p>
\t                    </div>                
\t                    
\t                </div>
\t\t\t\t\t<div class=\"re-bot\">
                        \t<span class=\"re-price\">Price: <strong>\$1399</strong></span>
\t                    \t<a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html#tab_map"), "html", null, true);
        echo "\" class=\"link-viewmap\" title=\"View on Map\">View Map</a> 
                        \t<a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\" class=\"link-viewimages\" title=\"View Photos\">Photos</a>
\t                </div>
\t                <div class=\"clear\"></div>
\t            </div>
                
                <div class=\"re-item\">        \t
\t                <div class=\"re-image\">
                    \t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_mid_02.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"caption\">View More Details</span></a>
                    </div>
                    
\t                <div class=\"re-short\">            \t
\t                    <div class=\"re-top\">
\t                        <h2><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">Singapore - Sentosa Aquapark</a></h2>
                            <div class=\"re-subtitle\">Hotel: <strong>Grand Mercure Sentosa 4*</strong> (5 nights)</div>
\t                    </div>                
\t                    <div class=\"re-descr\">
\t                        <p>A beachfront property set within beautiful gardens, Les Orangers Beach Resort & Bungalows offers a superb range of facilities and fantastic standards of hospitality...</p>
\t                    </div>                \t                    
\t                </div>
\t\t\t\t\t<div class=\"re-bot\">
                        \t<span class=\"re-price\">Price: <strong>\$1270</strong></span>
\t                    \t<a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html#tab_map"), "html", null, true);
        echo "\" class=\"link-viewmap\" title=\"View on Map\">View Map</a> 
                        \t<a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\" class=\"link-viewimages\" title=\"View Photos\">Photos</a>
\t                </div>
\t                <div class=\"clear\"></div>
\t            </div>
                
                <div class=\"re-item\">        \t
\t                <div class=\"re-image\">
                    \t<a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_mid_03.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"caption\">View More Details</span></a>
                    </div>
                    
\t                <div class=\"re-short\">            \t
\t                    <div class=\"re-top\">
\t                        <h2><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">Malaysia - Langkawi Beach Resort</a></h2>
                            <div class=\"re-subtitle\">Hotel: <strong>Sunny Beach Gold Resort 4*</strong> (8 nights)</div>
\t                    </div>                
\t                    <div class=\"re-descr\">
\t                        <p>Ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
\t                    </div>               \t                    
\t                </div>
\t\t\t\t\t<div class=\"re-bot\">
                        \t<span class=\"re-price\">Price: <strong>\$970</strong></span>
\t                    \t<a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html#tab_map"), "html", null, true);
        echo "\" class=\"link-viewmap\" title=\"View on Map\">View Map</a> 
                        \t<a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\" class=\"link-viewimages\" title=\"View Photos\">Photos</a>
\t                </div>
\t                <div class=\"clear\"></div>
\t            </div>
                
                <div class=\"re-item\">        \t
\t                <div class=\"re-image\">
                    \t<a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_mid_04.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"caption\">View More Details</span></a>
                    </div>
                    
\t                <div class=\"re-short\">            \t
\t                    <div class=\"re-top\">
\t                        <h2><a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">Australia - Sydney Tour</a></h2>
                            <div class=\"re-subtitle\">Hotel: <strong>Marriott Grand 4*</strong> (7 nights, All Inclusive)</div>
\t                    </div>                
\t                    <div class=\"re-descr\">
\t                        <p>As its name suggests‚ this modern hotel has an ideal located at the entrance to the stylish Abu Tig Marina and is almost surrounded by the sea offers a superb range of facilities. </p>
\t                    </div>                \t                    
\t                </div>
\t\t\t\t\t<div class=\"re-bot\">
                        \t<span class=\"re-price\">Price: <strong>\$850</strong></span>
\t                    \t<a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html#tab_map"), "html", null, true);
        echo "\" class=\"link-viewmap\" title=\"View on Map\">View Map</a> 
                        \t<a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\" class=\"link-viewimages\" title=\"View Photos\">Photos</a>
\t                </div>
\t                <div class=\"clear\"></div>
\t            </div>
                
                <div class=\"re-item\">        \t
\t                <div class=\"re-image\">
                    \t<a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_mid_05.jpg"), "html", null, true);
        echo "\" alt=\"\"><span class=\"caption\">View More Details</span></a>
                    </div>
                    
\t                <div class=\"re-short\">            \t
\t                    <div class=\"re-top\">
\t                        <h2><a href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\">New Zeeland - Honeymoon</a></h2>                           
                            <div class=\"re-subtitle\">Hotel: <strong>Marriott Grand 4*</strong> (7 nights, Flights & Hotel w. Breakfast)</div>
\t                    </div>                
\t                    <div class=\"re-descr\">
\t                        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas.</p>
\t                    </div>                \t                    
\t                </div>
\t\t\t\t\t<div class=\"re-bot\">
                        \t<span class=\"re-price\">Price: <strong>\$820</strong></span>
\t                    \t<a href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html#tab_map"), "html", null, true);
        echo "\" class=\"link-viewmap\" title=\"View on Map\">View Map</a> 
                        \t<a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("offer-details.html"), "html", null, true);
        echo "\" class=\"link-viewimages\" title=\"View Photos\">Photos</a>
\t                </div>
\t                <div class=\"clear\"></div>
\t            </div>
                
        \t</div>
            <!-- offers list -->
            
            <!-- sorting, pages -->
\t        <div class=\"block_hr list_manage\">
\t                \t<form action=\"#\" method=\"post\" class=\"form_sort\">
\t\t\t            \t<span class=\"manage_title\">Sort by:</span>
\t\t\t\t\t\t\t\t<select class=\"select_styled white_select\" name=\"sort_list\" id=\"sort_list_bot\">
\t\t\t                    \t<option value=\"1\">Latest Added</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" selected>Price High - Low</option>
\t\t\t                        <option value=\"3\">Price Low - Hight</option>
\t\t\t                        <option value=\"4\">Names A-Z</option>
\t\t\t                        <option value=\"5\">Names Z-A</option>
\t\t\t                    </select>
\t\t\t            </form>    
\t\t\t            
\t\t\t            <div class=\"pages_jump\">
\t\t\t            \t<span class=\"manage_title\">Jump to page:</span>
\t\t\t                <form action=\"#\" method=\"post\">
\t\t\t                \t<input type=\"text\" name=\"jumptopage\" value=\"15\" class=\"inputSmall\"><input type=\"submit\" class=\"btn-arrow\" value=\"Go\">
\t\t\t                </form>
\t\t\t            </div>
\t\t\t            
\t\t\t            <div class=\"pages\">
\t\t\t            \t<span class=\"manage_title\">Page: &nbsp;<strong>1 of 25</strong></span> <a href=\"#\" class=\"link_prev\">Previous</a><a href=\"#\" class=\"link_next\">Next</a>
\t\t\t            </div> 
\t                    
\t                    <div class=\"clear\"></div>
\t        </div>
          \t<!--/ sorting, pages -->
            
        </div>
        <!--/ content -->
        
        <!-- sidebar -->
        <div class=\"sidebar\">
\t\t\t
            <!-- filter -->
\t        <div class=\"widget-container widget_adv_filter\">
\t\t\t\t<h3 class=\"widget-title\">FILTER THE RESULTS</h3>
\t\t\t\t\t
\t            \t<form action=\"#\" method=\"get\" class=\"form_white\">
\t                
\t                \t<div class=\"row\">
\t                    \t<label class=\"label_title\">Destination:</label>
\t                        <input type=\"text\" name=\"location\" value=\"expl:  Los Angeles, CA\" class=\"inputField\">
\t                    </div>
                        
                        <div class=\"row\">
                        \t<label class=\"label_title\">Check in:</label>
\t                        <input type=\"text\" name=\"filter_date_in\" class=\"inputField inputDate\" value=\"choose date\" onfocus=\"if (this.value == 'choose date') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'choose date';}\" id=\"filter_date_in\">
\t                        <span class=\"input_icon\"></span>
\t                    </div>
\t                    
\t                    <div class=\"row\">
                        \t<label class=\"label_title\">Check out:</label>
\t                        <input type=\"text\" name=\"filter_date_out\" class=\"inputField inputDate\" value=\"choose date\" onfocus=\"if (this.value == 'choose date') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'choose date';}\" id=\"filter_date_out\">
\t                        <span class=\"input_icon\"></span>
\t                    </div>
\t                    \t                   
\t                    
\t                    <div class=\"row input_styled checklist\">
\t                    \t<label class=\"label_title2\">DESTINATION:</label><br>                            
\t                        <input type=\"checkbox\" name=\"filter_location_1\" id=\"filter_location_1\" value=\"1\"> <label for=\"filter_location_1\">Africa  (32)</label>
\t                        <input type=\"checkbox\" name=\"filter_location_2\" id=\"filter_location_2\" value=\"2\" checked> <label for=\"filter_location_2\">Asia & South Pacific (49)</label>
\t                        <input type=\"checkbox\" name=\"filter_location_3\" id=\"filter_location_3\" value=\"3\"> <label for=\"filter_location_3\">Central & South America  (56)</label>
\t                        <input type=\"checkbox\" name=\"filter_location_4\" id=\"filter_location_4\" value=\"4\"> <label for=\"filter_location_4\">Europe  (31)</label>
                            <input type=\"checkbox\" name=\"filter_location_5\" id=\"filter_location_5\" value=\"5\"> <label for=\"filter_location_5\">Northe America  (23)</label>
                            <input type=\"checkbox\" name=\"filter_location_6\" id=\"filter_location_6\" value=\"6\"> <label for=\"filter_location_6\">Carribean  (46)</label>
\t                    </div>
                        
                        <div class=\"row rangeField\">
\t                    \t<label class=\"label_title2\">PRICE RANGE:</label>
\t                        <div class=\"range-slider\">
\t\t\t\t                <input id=\"price_range\" type=\"text\" name=\"price_range\" value=\"100;2500\">
\t\t\t\t            </div>                   
\t\t\t\t            <div class=\"clear\"></div>
\t                    </div>
\t                    
\t                    <div class=\"row input_styled checklist\">
\t                    \t<label class=\"label_title2\">HOTEL RATING:</label><br>
\t                        <input type=\"checkbox\" name=\"filter_hotel_1\" id=\"filter_hotel_1\" value=\"1\"> <label for=\"filter_hotel_1\">1 Star (32)</label>
\t                        <input type=\"checkbox\" name=\"filter_hotel_2\" id=\"filter_hotel_2\" value=\"2\"> <label for=\"filter_hotel_2\">2 Stars (19)</label>
\t                        <input type=\"checkbox\" name=\"filter_hotel_3\" id=\"filter_hotel_3\" value=\"3\" checked> <label for=\"filter_hotel_3\">3 Stars  (56)</label>
\t                        <input type=\"checkbox\" name=\"filter_hotel_4\" id=\"filter_hotel_4\" value=\"4\" checked> <label for=\"filter_hotel_4\">4 Stars  (31)</label>
                            <input type=\"checkbox\" name=\"filter_hotel_5\" id=\"filter_hotel_5\" value=\"5\"> <label for=\"filter_hotel_5\">5 Stars  (23)</label>
                            <input type=\"checkbox\" name=\"filter_hotel_6\" id=\"filter_hotel_6\" value=\"0\"> <label for=\"filter_hotel_6\">Unrated  (46)</label>
\t                    </div>\t                    \t                                     
\t                    
\t                    <div class=\"row rowSubmit\">
\t                    \t<input type=\"submit\" value=\"FILTER RESULTS\" class=\"btn-submit\">
\t                    </div>
\t                    
\t                </form>    
                    
                    <script type=\"text/javascript\" >
\t\t\t\t\t\t\tjQuery(document).ready(function(\$) {\t\t\t\t\t\t
\t\t\t\t\t\t\t\t// Price Range Input
\t                     \t\t\$(\"#price_range\").slider({ 
\t\t\t\t\t\t  \t\t\tfrom: 100,
\t\t\t\t\t\t\t\t\tto: 10000,
\t\t\t\t\t\t\t\t\tlimits: false, 
\t\t\t\t\t\t\t\t\tscale: ['\$100', '\$10k'],
\t\t\t\t\t\t\t\t\theterogeneity: ['50/3000'],
\t\t\t\t\t\t\t\t\tstep: 100,
\t\t\t\t\t\t\t\t\tsmooth: true,
\t\t\t\t\t\t\t\t\tdimension: '\$',
\t\t\t\t\t\t\t\t\tskin: \"round_green\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t            \t</script>           
\t\t\t</div>
\t        <!--/ filter -->
            
        </div>
        <!--/ sidebar -->
        
        <div class=\"clear\"></div>        
    </div>
</div>
<!--/ middle -->
";
    }

    public function getTemplateName()
    {
        return "PiGeneralBundle:Default:offers_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 201,  299 => 200,  287 => 191,  277 => 186,  267 => 179,  263 => 178,  251 => 169,  241 => 164,  231 => 157,  227 => 156,  215 => 147,  205 => 142,  195 => 135,  191 => 134,  179 => 125,  169 => 120,  159 => 113,  155 => 112,  142 => 102,  132 => 97,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}<title>GoVoyage | Holidays_offers</title>{% endblock %}*/
/* {% block body %}*/
/*     	<!-- before content -->*/
/* <div class="before_content">*/
/* <div class="before_inner">*/
/* 	<div class="container_12">*/
/*     	*/
/*         <div class="title">			*/
/*             <span class="title_right"><a href="#">See all Holiday offers</a> <span class="separator">|</span> <a href="#">See all Special offers</a></span>*/
/*         </div>*/
/*         */
/*         <div class="search_main">*/
/*         	<form action="#" method="get" class="form_search">*/
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
/*         	<p><a href="index.html">Homepage</a> <span class="separator">&gt;</span> <a href="offers-list.html">Holidays</a> <span class="separator">&gt;</span> <span>Asia & Pacific</span></p>*/
/*         </div>*/
/*         <!--/ breadcrumbs -->*/
/*         */
/*         <!-- content -->*/
/*         <div class="content">*/
/*         	*/
/*             <div class="title">*/
/* 	        	<h1>HOLIDAYS IN <span>ASIA & SOUTH PACIFIC</span></h1>*/
/*                 <span class="title_right count">374 available offers</span>*/
/* 	    	</div>*/
/*         	*/
/*             <!-- sorting, pages -->*/
/* 	        <div class="block_hr list_manage">*/
/* 	                	<form action="#" method="post" class="form_sort">*/
/* 			            	<span class="manage_title">Sort by:</span>*/
/* 								<select class="select_styled white_select" name="sort_list" id="sort_list">*/
/* 			                    	<option value="1">Latest Added</option>*/
/* 									<option value="2" selected>Price High - Low</option>*/
/* 			                        <option value="3">Price Low - Hight</option>*/
/* 			                        <option value="4">Names A-Z</option>*/
/* 			                        <option value="5">Names Z-A</option>*/
/* 			                    </select>*/
/* 			            </form>    */
/* 			            */
/* 			            <div class="pages_jump">*/
/* 			            	<span class="manage_title">Jump to page:</span>*/
/* 			                <form action="#" method="post">*/
/* 			                	<input type="text" name="jumptopage" value="15" class="inputSmall"><input type="submit" class="btn-arrow" value="Go">*/
/* 			                </form>*/
/* 			            </div>*/
/* 			            */
/* 			            <div class="pages">*/
/* 			            	<span class="manage_title">Page: &nbsp;<strong>1 of 25</strong></span> <a href="#" class="link_prev">Previous</a><a href="#" class="link_next">Next</a>*/
/* 			            </div> */
/* 	                    */
/* 	                    <div class="clear"></div>*/
/* 	        </div>*/
/*           	<!--/ sorting, pages -->*/
/*           */
/*           	<!-- offers list -->*/
/* 			<div class="re-list">*/
/*         */
/* 	            <div class="re-item">        	*/
/* 	                <div class="re-image">*/
/*                     	<a href="{{ path('pi_general_Holiday_detail') }}"><img src="{{ asset('images/temp/offer_mid_01.jpg') }}" alt=""><span class="caption">View More Details</span></a>*/
/*                     </div>*/
/*                     */
/* 	                <div class="re-short">            	*/
/* 	                    <div class="re-top">*/
/* 	                        <h2><a href="{{ asset('offer-details.html') }}">Thailand - Koh Samui Honeymoon</a></h2>*/
/*                             <div class="re-subtitle">Hotel: <strong>Dreams Villa Resort 4*</strong> (7 nights)</div>*/
/* 	                    </div>                */
/* 	                    <div class="re-descr">*/
/* 	                        <p>As its name suggests‚ this modern hotel has an ideal located at the entrance to the stylish Abu Tig Marina and is almost surrounded by the sea offers a superb range of facilities. </p>*/
/* 	                    </div>                */
/* 	                    */
/* 	                </div>*/
/* 					<div class="re-bot">*/
/*                         	<span class="re-price">Price: <strong>$1399</strong></span>*/
/* 	                    	<a href="{{ asset('offer-details.html#tab_map') }}" class="link-viewmap" title="View on Map">View Map</a> */
/*                         	<a href="{{ asset('offer-details.html') }}" class="link-viewimages" title="View Photos">Photos</a>*/
/* 	                </div>*/
/* 	                <div class="clear"></div>*/
/* 	            </div>*/
/*                 */
/*                 <div class="re-item">        	*/
/* 	                <div class="re-image">*/
/*                     	<a href="{{ asset('offer-details.html') }}"><img src="{{ asset('images/temp/offer_mid_02.jpg') }}" alt=""><span class="caption">View More Details</span></a>*/
/*                     </div>*/
/*                     */
/* 	                <div class="re-short">            	*/
/* 	                    <div class="re-top">*/
/* 	                        <h2><a href="{{ asset('offer-details.html') }}">Singapore - Sentosa Aquapark</a></h2>*/
/*                             <div class="re-subtitle">Hotel: <strong>Grand Mercure Sentosa 4*</strong> (5 nights)</div>*/
/* 	                    </div>                */
/* 	                    <div class="re-descr">*/
/* 	                        <p>A beachfront property set within beautiful gardens, Les Orangers Beach Resort & Bungalows offers a superb range of facilities and fantastic standards of hospitality...</p>*/
/* 	                    </div>                	                    */
/* 	                </div>*/
/* 					<div class="re-bot">*/
/*                         	<span class="re-price">Price: <strong>$1270</strong></span>*/
/* 	                    	<a href="{{ asset('offer-details.html#tab_map') }}" class="link-viewmap" title="View on Map">View Map</a> */
/*                         	<a href="{{ asset('offer-details.html') }}" class="link-viewimages" title="View Photos">Photos</a>*/
/* 	                </div>*/
/* 	                <div class="clear"></div>*/
/* 	            </div>*/
/*                 */
/*                 <div class="re-item">        	*/
/* 	                <div class="re-image">*/
/*                     	<a href="{{ asset('offer-details.html') }}"><img src="{{ asset('images/temp/offer_mid_03.jpg') }}" alt=""><span class="caption">View More Details</span></a>*/
/*                     </div>*/
/*                     */
/* 	                <div class="re-short">            	*/
/* 	                    <div class="re-top">*/
/* 	                        <h2><a href="{{ asset('offer-details.html') }}">Malaysia - Langkawi Beach Resort</a></h2>*/
/*                             <div class="re-subtitle">Hotel: <strong>Sunny Beach Gold Resort 4*</strong> (8 nights)</div>*/
/* 	                    </div>                */
/* 	                    <div class="re-descr">*/
/* 	                        <p>Ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>*/
/* 	                    </div>               	                    */
/* 	                </div>*/
/* 					<div class="re-bot">*/
/*                         	<span class="re-price">Price: <strong>$970</strong></span>*/
/* 	                    	<a href="{{ asset('offer-details.html#tab_map') }}" class="link-viewmap" title="View on Map">View Map</a> */
/*                         	<a href="{{ asset('offer-details.html') }}" class="link-viewimages" title="View Photos">Photos</a>*/
/* 	                </div>*/
/* 	                <div class="clear"></div>*/
/* 	            </div>*/
/*                 */
/*                 <div class="re-item">        	*/
/* 	                <div class="re-image">*/
/*                     	<a href="{{ asset('offer-details.html') }}"><img src="{{ asset('images/temp/offer_mid_04.jpg') }}" alt=""><span class="caption">View More Details</span></a>*/
/*                     </div>*/
/*                     */
/* 	                <div class="re-short">            	*/
/* 	                    <div class="re-top">*/
/* 	                        <h2><a href="{{ asset('offer-details.html') }}">Australia - Sydney Tour</a></h2>*/
/*                             <div class="re-subtitle">Hotel: <strong>Marriott Grand 4*</strong> (7 nights, All Inclusive)</div>*/
/* 	                    </div>                */
/* 	                    <div class="re-descr">*/
/* 	                        <p>As its name suggests‚ this modern hotel has an ideal located at the entrance to the stylish Abu Tig Marina and is almost surrounded by the sea offers a superb range of facilities. </p>*/
/* 	                    </div>                	                    */
/* 	                </div>*/
/* 					<div class="re-bot">*/
/*                         	<span class="re-price">Price: <strong>$850</strong></span>*/
/* 	                    	<a href="{{ asset('offer-details.html#tab_map') }}" class="link-viewmap" title="View on Map">View Map</a> */
/*                         	<a href="{{ asset('offer-details.html') }}" class="link-viewimages" title="View Photos">Photos</a>*/
/* 	                </div>*/
/* 	                <div class="clear"></div>*/
/* 	            </div>*/
/*                 */
/*                 <div class="re-item">        	*/
/* 	                <div class="re-image">*/
/*                     	<a href="{{ asset('offer-details.html') }}"><img src="{{ asset('images/temp/offer_mid_05.jpg') }}" alt=""><span class="caption">View More Details</span></a>*/
/*                     </div>*/
/*                     */
/* 	                <div class="re-short">            	*/
/* 	                    <div class="re-top">*/
/* 	                        <h2><a href="{{ asset('offer-details.html') }}">New Zeeland - Honeymoon</a></h2>                           */
/*                             <div class="re-subtitle">Hotel: <strong>Marriott Grand 4*</strong> (7 nights, Flights & Hotel w. Breakfast)</div>*/
/* 	                    </div>                */
/* 	                    <div class="re-descr">*/
/* 	                        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas.</p>*/
/* 	                    </div>                	                    */
/* 	                </div>*/
/* 					<div class="re-bot">*/
/*                         	<span class="re-price">Price: <strong>$820</strong></span>*/
/* 	                    	<a href="{{ asset('offer-details.html#tab_map') }}" class="link-viewmap" title="View on Map">View Map</a> */
/*                         	<a href="{{ asset('offer-details.html') }}" class="link-viewimages" title="View Photos">Photos</a>*/
/* 	                </div>*/
/* 	                <div class="clear"></div>*/
/* 	            </div>*/
/*                 */
/*         	</div>*/
/*             <!-- offers list -->*/
/*             */
/*             <!-- sorting, pages -->*/
/* 	        <div class="block_hr list_manage">*/
/* 	                	<form action="#" method="post" class="form_sort">*/
/* 			            	<span class="manage_title">Sort by:</span>*/
/* 								<select class="select_styled white_select" name="sort_list" id="sort_list_bot">*/
/* 			                    	<option value="1">Latest Added</option>*/
/* 									<option value="2" selected>Price High - Low</option>*/
/* 			                        <option value="3">Price Low - Hight</option>*/
/* 			                        <option value="4">Names A-Z</option>*/
/* 			                        <option value="5">Names Z-A</option>*/
/* 			                    </select>*/
/* 			            </form>    */
/* 			            */
/* 			            <div class="pages_jump">*/
/* 			            	<span class="manage_title">Jump to page:</span>*/
/* 			                <form action="#" method="post">*/
/* 			                	<input type="text" name="jumptopage" value="15" class="inputSmall"><input type="submit" class="btn-arrow" value="Go">*/
/* 			                </form>*/
/* 			            </div>*/
/* 			            */
/* 			            <div class="pages">*/
/* 			            	<span class="manage_title">Page: &nbsp;<strong>1 of 25</strong></span> <a href="#" class="link_prev">Previous</a><a href="#" class="link_next">Next</a>*/
/* 			            </div> */
/* 	                    */
/* 	                    <div class="clear"></div>*/
/* 	        </div>*/
/*           	<!--/ sorting, pages -->*/
/*             */
/*         </div>*/
/*         <!--/ content -->*/
/*         */
/*         <!-- sidebar -->*/
/*         <div class="sidebar">*/
/* 			*/
/*             <!-- filter -->*/
/* 	        <div class="widget-container widget_adv_filter">*/
/* 				<h3 class="widget-title">FILTER THE RESULTS</h3>*/
/* 					*/
/* 	            	<form action="#" method="get" class="form_white">*/
/* 	                */
/* 	                	<div class="row">*/
/* 	                    	<label class="label_title">Destination:</label>*/
/* 	                        <input type="text" name="location" value="expl:  Los Angeles, CA" class="inputField">*/
/* 	                    </div>*/
/*                         */
/*                         <div class="row">*/
/*                         	<label class="label_title">Check in:</label>*/
/* 	                        <input type="text" name="filter_date_in" class="inputField inputDate" value="choose date" onfocus="if (this.value == 'choose date') {this.value = '';}" onblur="if (this.value == '') {this.value = 'choose date';}" id="filter_date_in">*/
/* 	                        <span class="input_icon"></span>*/
/* 	                    </div>*/
/* 	                    */
/* 	                    <div class="row">*/
/*                         	<label class="label_title">Check out:</label>*/
/* 	                        <input type="text" name="filter_date_out" class="inputField inputDate" value="choose date" onfocus="if (this.value == 'choose date') {this.value = '';}" onblur="if (this.value == '') {this.value = 'choose date';}" id="filter_date_out">*/
/* 	                        <span class="input_icon"></span>*/
/* 	                    </div>*/
/* 	                    	                   */
/* 	                    */
/* 	                    <div class="row input_styled checklist">*/
/* 	                    	<label class="label_title2">DESTINATION:</label><br>                            */
/* 	                        <input type="checkbox" name="filter_location_1" id="filter_location_1" value="1"> <label for="filter_location_1">Africa  (32)</label>*/
/* 	                        <input type="checkbox" name="filter_location_2" id="filter_location_2" value="2" checked> <label for="filter_location_2">Asia & South Pacific (49)</label>*/
/* 	                        <input type="checkbox" name="filter_location_3" id="filter_location_3" value="3"> <label for="filter_location_3">Central & South America  (56)</label>*/
/* 	                        <input type="checkbox" name="filter_location_4" id="filter_location_4" value="4"> <label for="filter_location_4">Europe  (31)</label>*/
/*                             <input type="checkbox" name="filter_location_5" id="filter_location_5" value="5"> <label for="filter_location_5">Northe America  (23)</label>*/
/*                             <input type="checkbox" name="filter_location_6" id="filter_location_6" value="6"> <label for="filter_location_6">Carribean  (46)</label>*/
/* 	                    </div>*/
/*                         */
/*                         <div class="row rangeField">*/
/* 	                    	<label class="label_title2">PRICE RANGE:</label>*/
/* 	                        <div class="range-slider">*/
/* 				                <input id="price_range" type="text" name="price_range" value="100;2500">*/
/* 				            </div>                   */
/* 				            <div class="clear"></div>*/
/* 	                    </div>*/
/* 	                    */
/* 	                    <div class="row input_styled checklist">*/
/* 	                    	<label class="label_title2">HOTEL RATING:</label><br>*/
/* 	                        <input type="checkbox" name="filter_hotel_1" id="filter_hotel_1" value="1"> <label for="filter_hotel_1">1 Star (32)</label>*/
/* 	                        <input type="checkbox" name="filter_hotel_2" id="filter_hotel_2" value="2"> <label for="filter_hotel_2">2 Stars (19)</label>*/
/* 	                        <input type="checkbox" name="filter_hotel_3" id="filter_hotel_3" value="3" checked> <label for="filter_hotel_3">3 Stars  (56)</label>*/
/* 	                        <input type="checkbox" name="filter_hotel_4" id="filter_hotel_4" value="4" checked> <label for="filter_hotel_4">4 Stars  (31)</label>*/
/*                             <input type="checkbox" name="filter_hotel_5" id="filter_hotel_5" value="5"> <label for="filter_hotel_5">5 Stars  (23)</label>*/
/*                             <input type="checkbox" name="filter_hotel_6" id="filter_hotel_6" value="0"> <label for="filter_hotel_6">Unrated  (46)</label>*/
/* 	                    </div>	                    	                                     */
/* 	                    */
/* 	                    <div class="row rowSubmit">*/
/* 	                    	<input type="submit" value="FILTER RESULTS" class="btn-submit">*/
/* 	                    </div>*/
/* 	                    */
/* 	                </form>    */
/*                     */
/*                     <script type="text/javascript" >*/
/* 							jQuery(document).ready(function($) {						*/
/* 								// Price Range Input*/
/* 	                     		$("#price_range").slider({ */
/* 						  			from: 100,*/
/* 									to: 10000,*/
/* 									limits: false, */
/* 									scale: ['$100', '$10k'],*/
/* 									heterogeneity: ['50/3000'],*/
/* 									step: 100,*/
/* 									smooth: true,*/
/* 									dimension: '$',*/
/* 									skin: "round_green"*/
/* 								});*/
/* 							});*/
/* 	            	</script>           */
/* 			</div>*/
/* 	        <!--/ filter -->*/
/*             */
/*         </div>*/
/*         <!--/ sidebar -->*/
/*         */
/*         <div class="clear"></div>        */
/*     </div>*/
/* </div>*/
/* <!--/ middle -->*/
/* {% endblock %}    */
