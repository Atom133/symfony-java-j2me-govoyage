<?php

/* PiGeneralBundle:Default:index.html.twig */
class __TwigTemplate_9524e6feb5ff83801f0facbdc687e85c3111729134000d01ec28b31068c66047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:index.html.twig", 1);
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
        echo "<title>GoVoyage | Home</title>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- header slider -->
    <div class=\"header_slider\" style=\"background-image:url(images/pattern_4.png); background-color:#222\">

        <div class=\"slides_container\">
            <div class=\"slide\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/top_slide_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"slide_text bottom left\">
                    <div class=\"slide_title\"><strong>GOLF & TRAVEL</strong></div>
                    <p class=\"subtitle\">5 resorts to get your swing back</p>
                </div>
            </div>
            <div class=\"slide\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/top_slide_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"slide_text bottom right\">
                    <div class=\"slide_title\"><strong>YOSEMITE PARK</strong></div>
                    <p class=\"subtitle\">Hike the gorgeous trails of national parks</p>
                </div>
            </div>
            <div class=\"slide\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/top_slide_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"slide_text bottom left\">
                    <div class=\"slide_title\"><strong>EXPLORE WILD AFRICA</strong></div>
                    <p class=\"subtitle\">Safari is not just a browser anymore</p>
                </div>
            </div>
            <div class=\"slide\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/top_slide_4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"slide_text left middle\">
                    <div class=\"slide_title\"><strong>Exotic Beaches</strong></div>
                    <p class=\"subtitle\">Carribean Paradise at your feet</p>
                </div>
            </div>
            <div class=\"slide\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/top_slide_5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"slide_text center top\">
                    <div class=\"slide_title\"><strong>Shopping City Breaks</strong></div>
                    <p class=\"subtitle\">When money's not an issue, but time is...</p>
                </div>
            </div>
            <div class=\"slide\">
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/top_slide_6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"slide_text right middle\">
                    <div class=\"slide_title\"><strong>Trails for the history buffs</strong></div>
                    <p class=\"subtitle\">Peru's Machu Picchu is out of this world</p>
                </div>
            </div>
        </div>

        <div class=\"pagination_wrap\">
            <div class=\"pagination_inner\">
                <ul class=\"pagination\">
                    <li><a href=\"#0\">GOLF & TRAVEL</a></li>
                    <li><a href=\"#1\">National Parks</a></li>
                    <li><a href=\"#2\">WILD AFRICA</a></li>
                    <li><a href=\"#3\">EXOTIC beaches</a></li>
                    <li><a href=\"#4\">SHOPPING CITIES</a></li>
                    <li><a href=\"#5\">HistorIC TRAILS</a></li>
                </ul>
            </div>
        </div>

        <script>
            jQuery(document).ready(function (\$) {
                \$('.header_slider').slides({
                    generatePagination: false,
                    generateNextPrev: true,
                    play: 5000,
                    pause: 3500,
                    hoverPause: true,
                    effect: 'fade',
                    crossfade: true,
                    preload: true,
                    preloadImage: 'images/loading.gif'
                });
            });
        </script>

    </div>
    <!--/ header slider -->

    <!-- before content -->
    <div class=\"before_content\">
        <div class=\"before_inner\">
            <div class=\"container_12\">

                <div class=\"title\">
                    <h2>WHERE DO YOU WANT TO TRAVEL?</h2>
                    <span class=\"title_right\"><a href=\"#\">See all Holiday offers</a></span>
                </div>

                <div class=\"search_main\">
                    <form action=\"#\" method=\"get\" class=\"form_search\">

                        <div class=\"search_col_1\">

                            <div class=\"row input_styled inlinelist\">
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"africa\" id=\"africa\" checked> <label for=\"africa\">AFRICA</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"europe\" id=\"europe\"> <label for=\"europe\">EUROPE</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"america_c\" id=\"america_c\"> <label for=\"america_c\">CENTRAL  AMERICA</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"australia\" id=\"australia\"> <label for=\"australia\">AUSTRALIA</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"america_n\" id=\"america_n\"> <label for=\"america_n\">NORTH AMERICA</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"carribean\" id=\"carribean\"> <label for=\"carribean\">CARRIBEAN</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"asia\" id=\"asia\"> <label for=\"asia\">ASIA & PACIFIC</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"america_s\" id=\"america_s\"> <label for=\"america_s\">SOUTH AMERICA</label></div>
                                <div class=\"rowRadio\"><input type=\"radio\" name=\"continent\" value=\"mid_east\" id=\"mid_east\"> <label for=\"mid_east\">MIDDLE EAST</label></div>
                            </div>

                        </div>

                        <div class=\"search_col_2\">
                            <div class=\"row rowInput\">
                                <input type=\"text\" name=\"date_in\" class=\"inputField\" value=\"Check-in date\" onfocus=\"if (this.value == 'Check-in date') {
                                            this.value = '';
                                        }\" onblur=\"if (this.value == '') {
                                                    this.value = 'Check-in date';
                                                }\" id=\"date_in\">
                                <span class=\"input_icon\"></span>
                            </div>

                            <div class=\"row\">
                                <input type=\"text\" name=\"date_out\" class=\"inputField\" value=\"Check-out date\" onfocus=\"if (this.value == 'Check-out date') {
                                            this.value = '';
                                        }\" onblur=\"if (this.value == '') {
                                                    this.value = 'Check-out date';
                                                }\" id=\"date_out\">
                                <span class=\"input_icon\"></span>
                            </div>

                            <div class=\"row\">
                                <input type=\"text\" name=\"city_from\" class=\"inputField\" value=\"Departure City\" onfocus=\"if (this.value == 'Departure City') {
                                            this.value = '';
                                        }\" onblur=\"if (this.value == '') {
                                                    this.value = 'Departure City';
                                                }\">
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

    <div id=\"middle\" class=\"full_width\">
        <div class=\"container_12\">

            <!-- breadcrumbs -->
            <div class=\"breadcrumbs\"></div>
            <!--/ breadcrumbs -->

            <!-- content -->
            <div class=\"content\">

                <div class=\"post-detail\">
                    <div class=\"entry\">


                        <!-- LATEST offers list -->                    
                        <div class=\"title\">
                            <h2>EXPLORE OUR LATEST OFFERS</h2>
                            <span class=\"title_right\"><a href=\"#\">See all Latest offers</a></span>
                        </div>

                        <!-- filter_mid -->
                        <div class=\"block_hr filter_mid\">
                            <form action=\"#\" method=\"post\" class=\"\">

                                <div class=\"row input_styled checklist\">
                                    <label class=\"label_title\">Show offers from:</label>
                                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_1\" id=\"filter_offer_1\" value=\"1\" checked> <label for=\"filter_offer_1\">HOLIDAYS</label></div>
                                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_2\" id=\"filter_offer_2\" value=\"2\"> <label for=\"filter_offer_2\">CITY BREAKS</label></div>
                                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_3\" id=\"filter_offer_3\" value=\"3\" checked> <label for=\"filter_offer_3\">HOTELS</label></div>
                                </div>

                                <div class=\"row rangeField\">
                                    <label class=\"label_title\">Price range:</label>
                                    <div class=\"range-slider\">
                                        <input id=\"price_range\" type=\"text\" name=\"price_range\" value=\"400;3900\">
                                    </div>                   
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"row rowSubmit\">
                                    <input type=\"submit\" value=\"FILTER NOW\" class=\"btn-submit\">
                                </div>

                                <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t            
                            </form>\t\t
                            <script type=\"text/javascript\" >
                                jQuery(document).ready(function (\$) {
                                    // Price Range Input
                                    \$(\"#price_range\").slider({
                                        from: 100,
                                        to: 10000,
                                        limits: false,
                                        scale: ['\$100', '\$10k'],
                                        heterogeneity: ['50/3000'],
                                        step: 100,
                                        smooth: true,
                                        dimension: '\$',
                                        skin: \"round_green\"
                                    });
                                });
                            </script>   \t                
                        </div>
                        <!--/ filter_mid -->


                        <div class=\"grid_list\">

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_01.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Miami, Florida - 7 nights</a> <span class=\"price\"><ins>\$</ins><strong>1390</strong></span></p>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_02.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Buenos Aires, Argentina - 6 nights</a> <span class=\"price\"><ins>\$</ins><strong>2190</strong></span></p>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_03.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Montego Bay, Jamaica - 4 nights</a> <span class=\"price\"><ins>\$</ins><strong>1645</strong></span></p>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_04.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Riviera Maya, Mexico - 12 nights</a> <span class=\"price\"><ins>\$</ins><strong>1830</strong></span></p>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_05.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Koh Phi Phi, Thailand - 9 nights</a> <span class=\"price\"><ins>\$</ins><strong>2100</strong></span></p>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_06.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Andes Circuit, Chile - 17 nights</a> <span class=\"price\"><ins>\$</ins><strong>3750</strong></span></p>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"clear\"></div>
                        </div>

                        <!--/ LATEST offers list -->

                        <div class=\"divider_space\"></div>

                        <!-- HOLIDAYS offers list -->
                        <div class=\"title\">
                            <h2>CHOOSE FROM A WIDE VARIETY OF HOLIDAYS</h2>
                            <span class=\"title_right\"><a href=\"#\">See all Travel offers</a></span>
                        </div>

                        <div class=\"boxed_list\">

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/holidays_icon_1.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"SUMMER HOLIDAYS\"></div>
                                <div class=\"boxed_title\"><strong>SUMMER HOLIDAYS</strong></div>
                                <span><a href=\"#\">243 offers available</a></span>
                            </div>

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/holidays_icon_2.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"ALL INCLUSIVE\"></div>
                                <div class=\"boxed_title\"><strong>ALL INCLUSIVE</strong></div>
                                <span><a href=\"#\">65 offers available</a></span>
                            </div>

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/holidays_icon_3.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"FAMILY HOLIDAYS\"></div>
                                <div class=\"boxed_title\"><strong>FAMILY HOLIDAYS</strong></div>
                                <span><a href=\"#\">27 offers available</a></span>
                            </div>

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/holidays_icon_4.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"LUXURY CITY BREAKS\"></div>
                                <div class=\"boxed_title\"><strong>LUXURY CITY BREAKS</strong></div>
                                <span><a href=\"#\">78 offers available</a></span>
                            </div>
                            <div class=\"clear\"></div>
                        </div>

                        <div class=\"boxed_list boxed_list2\">

                            <div class=\"boxed_item\">                        \t
                                <div class=\"boxed_title_arrow\"><strong>Last Minute Deals</strong></div>
                            </div>

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><span class=\"price_box\"><ins>\$</ins><strong>579</strong></span></div>
                                <div class=\"boxed_title\"><a href=\"#\"><strong>Houda Golf Beach 5*</strong></a></div>
                                <span><a href=\"#\">Tunisia, Sousse</a></span>
                            </div>

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><span class=\"price_box\"><ins>\$</ins><strong>480</strong></span></div>
                                <div class=\"boxed_title\"><a href=\"#\"><strong>Hilton Sharks Bay 4*</strong></a></div>
                                <span><a href=\"#\">Egipt, Sharm El Sheik</a></span>
                            </div>

                            <div class=\"boxed_item\">
                                <div class=\"boxed_icon\"><span class=\"price_box\"><ins>\$</ins><strong>980</strong></span></div>
                                <div class=\"boxed_title\"><a href=\"#\"><strong>JW Marriot Cancun 5*</strong></a></div>
                                <span><a href=\"#\">Mexico, Cancun</a></span>
                            </div>
                            <div class=\"clear\"></div>
                        </div>


                        <!--/ HOLIDAYS offers list -->

                        <div class=\"divider_space_big\"></div>

                        <!-- SPECIAL offers list -->                    
                        <div class=\"title\">
                            <h2>SPECIAL PRICES AND LATEST PROMOS</h2>
                            <span class=\"title_right\"><a href=\"#\">See all Special Prices & Promos</a></span>
                        </div>

                        <!-- filter_mid -->
                        <div class=\"block_hr filter_mid\">
                            <form action=\"#\" method=\"post\" class=\"\">

                                <div class=\"row input_styled checklist\">
                                    <label class=\"label_title\">Show offers from:</label>
                                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_11\" id=\"filter_offer_11\" value=\"1\" checked> <label for=\"filter_offer_11\">HOLIDAYS</label></div>
                                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_22\" id=\"filter_offer_22\" value=\"2\" checked> <label for=\"filter_offer_22\">CITY BREAKS</label></div>
                                    <div class=\"rowCheckbox\"><input type=\"checkbox\" name=\"filter_offer_33\" id=\"filter_offer_33\" value=\"3\" checked> <label for=\"filter_offer_33\">HOTELS</label></div>
                                </div>

                                <div class=\"row rangeField\">
                                    <label class=\"label_title\">Price range:</label>
                                    <div class=\"range-slider\">
                                        <input id=\"price_range_promo\" type=\"text\" name=\"price_range_promo\" value=\"100;2500\">
                                    </div>                   
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"row rowSubmit\">
                                    <input type=\"submit\" value=\"FILTER NOW\" class=\"btn-submit\">
                                </div>

                                <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t            
                            </form>\t\t
                            <script type=\"text/javascript\" >
                                jQuery(document).ready(function (\$) {
                                    // Price Range Input
                                    \$(\"#price_range_promo\").slider({
                                        from: 100,
                                        to: 10000,
                                        limits: false,
                                        scale: ['\$100', '\$10k'],
                                        heterogeneity: ['50/3000'],
                                        step: 100,
                                        smooth: true,
                                        dimension: '\$',
                                        skin: \"round_green\"
                                    });
                                });
                            </script>   \t                
                        </div>
                        <!--/ filter_mid -->


                        <div class=\"grid_list promo_list\">

                            <div class=\"list_item\">
                                <div class=\"item_img\">
                                    <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_07.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Rincon, Puerto Rico - 7 nights</a> <span class=\"price\"><ins>\$</ins><strong>790</strong></span></p>
                                    <span class=\"ribbon off-30\">SALE: 30% OFF</span>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>                            
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_08.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Chicago, Illinois - 6 nights</a> <span class=\"price\"><ins>\$</ins><strong>647</strong></span></p>
                                    <span class=\"ribbon off-25\">SALE: 25% OFF</span>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>                            
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_09.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Langkawi, Malaysia - 5 nights</a> <span class=\"price\"><ins>\$</ins><strong>645</strong></span></p>
                                    <span class=\"ribbon off-65\">SALE: 65% OFF</span>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_10.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Riviera Maya, Mexico - 12 nights</a> <span class=\"price\"><ins>\$</ins><strong>870</strong></span></p>
                                    <span class=\"ribbon off-15\">SALE: 15% OFF</span>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_11.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Koh Phi Phi, Thailand - 9 nights</a> <span class=\"price\"><ins>\$</ins><strong>2340</strong></span></p>
                                    <span class=\"ribbon off-50\">SALE: 50% OFF</span>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"list_item\">
                                <div class=\"item_img\">                       \t    
                                    <img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/offer_12.jpg"), "html", null, true);
        echo "\" alt=\"\">                            
                                    <p class=\"caption\"><a href=\"offer-details.html\">Andes Circuit, Chile - 17 nights</a> <span class=\"price\"><ins>\$</ins><strong>2450</strong></span></p>
                                    <span class=\"ribbon off-35\">SALE: 35% OFF</span>
                                    <a href=\"offer-details.html\" class=\"link-img\">more...</a>
                                </div>
                            </div>

                            <div class=\"clear\"></div>
                        </div>


                        <!--/ SPECIAL offers list -->

                        <div class=\"clear\"></div>
                    </div>
                </div>

            </div>
            <!--/ content -->

            <div class=\"clear\"></div>        
        </div>
    </div>
    <!--/ middle -->
";
    }

    public function getTemplateName()
    {
        return "PiGeneralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 441,  527 => 432,  515 => 423,  503 => 414,  491 => 405,  479 => 396,  383 => 303,  374 => 297,  365 => 291,  356 => 285,  331 => 263,  320 => 255,  309 => 247,  298 => 239,  287 => 231,  276 => 223,  95 => 45,  85 => 38,  75 => 31,  65 => 24,  55 => 17,  45 => 10,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}<title>GoVoyage | Home</title>{% endblock %}*/
/* {% block body %}*/
/*     <!-- header slider -->*/
/*     <div class="header_slider" style="background-image:url(images/pattern_4.png); background-color:#222">*/
/* */
/*         <div class="slides_container">*/
/*             <div class="slide">*/
/*                 <img src="{{ asset ('images/temp/top_slide_1.jpg') }}" alt="">*/
/*                 <div class="slide_text bottom left">*/
/*                     <div class="slide_title"><strong>GOLF & TRAVEL</strong></div>*/
/*                     <p class="subtitle">5 resorts to get your swing back</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="slide">*/
/*                 <img src="{{ asset ('images/temp/top_slide_2.jpg') }}" alt="">*/
/*                 <div class="slide_text bottom right">*/
/*                     <div class="slide_title"><strong>YOSEMITE PARK</strong></div>*/
/*                     <p class="subtitle">Hike the gorgeous trails of national parks</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="slide">*/
/*                 <img src="{{ asset ('images/temp/top_slide_3.jpg') }}" alt="">*/
/*                 <div class="slide_text bottom left">*/
/*                     <div class="slide_title"><strong>EXPLORE WILD AFRICA</strong></div>*/
/*                     <p class="subtitle">Safari is not just a browser anymore</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="slide">*/
/*                 <img src="{{ asset ('images/temp/top_slide_4.jpg') }}" alt="">*/
/*                 <div class="slide_text left middle">*/
/*                     <div class="slide_title"><strong>Exotic Beaches</strong></div>*/
/*                     <p class="subtitle">Carribean Paradise at your feet</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="slide">*/
/*                 <img src="{{ asset ('images/temp/top_slide_5.jpg') }}" alt="">*/
/*                 <div class="slide_text center top">*/
/*                     <div class="slide_title"><strong>Shopping City Breaks</strong></div>*/
/*                     <p class="subtitle">When money's not an issue, but time is...</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="slide">*/
/*                 <img src="{{ asset ('images/temp/top_slide_6.jpg') }}" alt="">*/
/*                 <div class="slide_text right middle">*/
/*                     <div class="slide_title"><strong>Trails for the history buffs</strong></div>*/
/*                     <p class="subtitle">Peru's Machu Picchu is out of this world</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="pagination_wrap">*/
/*             <div class="pagination_inner">*/
/*                 <ul class="pagination">*/
/*                     <li><a href="#0">GOLF & TRAVEL</a></li>*/
/*                     <li><a href="#1">National Parks</a></li>*/
/*                     <li><a href="#2">WILD AFRICA</a></li>*/
/*                     <li><a href="#3">EXOTIC beaches</a></li>*/
/*                     <li><a href="#4">SHOPPING CITIES</a></li>*/
/*                     <li><a href="#5">HistorIC TRAILS</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <script>*/
/*             jQuery(document).ready(function ($) {*/
/*                 $('.header_slider').slides({*/
/*                     generatePagination: false,*/
/*                     generateNextPrev: true,*/
/*                     play: 5000,*/
/*                     pause: 3500,*/
/*                     hoverPause: true,*/
/*                     effect: 'fade',*/
/*                     crossfade: true,*/
/*                     preload: true,*/
/*                     preloadImage: 'images/loading.gif'*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/*     </div>*/
/*     <!--/ header slider -->*/
/* */
/*     <!-- before content -->*/
/*     <div class="before_content">*/
/*         <div class="before_inner">*/
/*             <div class="container_12">*/
/* */
/*                 <div class="title">*/
/*                     <h2>WHERE DO YOU WANT TO TRAVEL?</h2>*/
/*                     <span class="title_right"><a href="#">See all Holiday offers</a></span>*/
/*                 </div>*/
/* */
/*                 <div class="search_main">*/
/*                     <form action="#" method="get" class="form_search">*/
/* */
/*                         <div class="search_col_1">*/
/* */
/*                             <div class="row input_styled inlinelist">*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="africa" id="africa" checked> <label for="africa">AFRICA</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="europe" id="europe"> <label for="europe">EUROPE</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="america_c" id="america_c"> <label for="america_c">CENTRAL  AMERICA</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="australia" id="australia"> <label for="australia">AUSTRALIA</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="america_n" id="america_n"> <label for="america_n">NORTH AMERICA</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="carribean" id="carribean"> <label for="carribean">CARRIBEAN</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="asia" id="asia"> <label for="asia">ASIA & PACIFIC</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="america_s" id="america_s"> <label for="america_s">SOUTH AMERICA</label></div>*/
/*                                 <div class="rowRadio"><input type="radio" name="continent" value="mid_east" id="mid_east"> <label for="mid_east">MIDDLE EAST</label></div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="search_col_2">*/
/*                             <div class="row rowInput">*/
/*                                 <input type="text" name="date_in" class="inputField" value="Check-in date" onfocus="if (this.value == 'Check-in date') {*/
/*                                             this.value = '';*/
/*                                         }" onblur="if (this.value == '') {*/
/*                                                     this.value = 'Check-in date';*/
/*                                                 }" id="date_in">*/
/*                                 <span class="input_icon"></span>*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <input type="text" name="date_out" class="inputField" value="Check-out date" onfocus="if (this.value == 'Check-out date') {*/
/*                                             this.value = '';*/
/*                                         }" onblur="if (this.value == '') {*/
/*                                                     this.value = 'Check-out date';*/
/*                                                 }" id="date_out">*/
/*                                 <span class="input_icon"></span>*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <input type="text" name="city_from" class="inputField" value="Departure City" onfocus="if (this.value == 'Departure City') {*/
/*                                             this.value = '';*/
/*                                         }" onblur="if (this.value == '') {*/
/*                                                     this.value = 'Departure City';*/
/*                                                 }">*/
/*                             </div>*/
/* */
/*                             <div class="row rowSubmit"><input type="submit" value="FIND VACATIONS" class="btn btn-find"></div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="clear"></div>*/
/*                     </form>            */
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--/ before content -->*/
/* */
/*     <div id="middle" class="full_width">*/
/*         <div class="container_12">*/
/* */
/*             <!-- breadcrumbs -->*/
/*             <div class="breadcrumbs"></div>*/
/*             <!--/ breadcrumbs -->*/
/* */
/*             <!-- content -->*/
/*             <div class="content">*/
/* */
/*                 <div class="post-detail">*/
/*                     <div class="entry">*/
/* */
/* */
/*                         <!-- LATEST offers list -->                    */
/*                         <div class="title">*/
/*                             <h2>EXPLORE OUR LATEST OFFERS</h2>*/
/*                             <span class="title_right"><a href="#">See all Latest offers</a></span>*/
/*                         </div>*/
/* */
/*                         <!-- filter_mid -->*/
/*                         <div class="block_hr filter_mid">*/
/*                             <form action="#" method="post" class="">*/
/* */
/*                                 <div class="row input_styled checklist">*/
/*                                     <label class="label_title">Show offers from:</label>*/
/*                                     <div class="rowCheckbox"><input type="checkbox" name="filter_offer_1" id="filter_offer_1" value="1" checked> <label for="filter_offer_1">HOLIDAYS</label></div>*/
/*                                     <div class="rowCheckbox"><input type="checkbox" name="filter_offer_2" id="filter_offer_2" value="2"> <label for="filter_offer_2">CITY BREAKS</label></div>*/
/*                                     <div class="rowCheckbox"><input type="checkbox" name="filter_offer_3" id="filter_offer_3" value="3" checked> <label for="filter_offer_3">HOTELS</label></div>*/
/*                                 </div>*/
/* */
/*                                 <div class="row rangeField">*/
/*                                     <label class="label_title">Price range:</label>*/
/*                                     <div class="range-slider">*/
/*                                         <input id="price_range" type="text" name="price_range" value="400;3900">*/
/*                                     </div>                   */
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/* */
/*                                 <div class="row rowSubmit">*/
/*                                     <input type="submit" value="FILTER NOW" class="btn-submit">*/
/*                                 </div>*/
/* */
/*                                 <div class="clear"></div>									            */
/*                             </form>		*/
/*                             <script type="text/javascript" >*/
/*                                 jQuery(document).ready(function ($) {*/
/*                                     // Price Range Input*/
/*                                     $("#price_range").slider({*/
/*                                         from: 100,*/
/*                                         to: 10000,*/
/*                                         limits: false,*/
/*                                         scale: ['$100', '$10k'],*/
/*                                         heterogeneity: ['50/3000'],*/
/*                                         step: 100,*/
/*                                         smooth: true,*/
/*                                         dimension: '$',*/
/*                                         skin: "round_green"*/
/*                                     });*/
/*                                 });*/
/*                             </script>   	                */
/*                         </div>*/
/*                         <!--/ filter_mid -->*/
/* */
/* */
/*                         <div class="grid_list">*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_01.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Miami, Florida - 7 nights</a> <span class="price"><ins>$</ins><strong>1390</strong></span></p>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_02.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Buenos Aires, Argentina - 6 nights</a> <span class="price"><ins>$</ins><strong>2190</strong></span></p>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_03.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Montego Bay, Jamaica - 4 nights</a> <span class="price"><ins>$</ins><strong>1645</strong></span></p>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_04.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Riviera Maya, Mexico - 12 nights</a> <span class="price"><ins>$</ins><strong>1830</strong></span></p>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_05.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Koh Phi Phi, Thailand - 9 nights</a> <span class="price"><ins>$</ins><strong>2100</strong></span></p>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_06.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Andes Circuit, Chile - 17 nights</a> <span class="price"><ins>$</ins><strong>3750</strong></span></p>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/*                         <!--/ LATEST offers list -->*/
/* */
/*                         <div class="divider_space"></div>*/
/* */
/*                         <!-- HOLIDAYS offers list -->*/
/*                         <div class="title">*/
/*                             <h2>CHOOSE FROM A WIDE VARIETY OF HOLIDAYS</h2>*/
/*                             <span class="title_right"><a href="#">See all Travel offers</a></span>*/
/*                         </div>*/
/* */
/*                         <div class="boxed_list">*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><img src="{{ asset ('images/icons/holidays_icon_1.png') }}" width="48" height="48" alt="SUMMER HOLIDAYS"></div>*/
/*                                 <div class="boxed_title"><strong>SUMMER HOLIDAYS</strong></div>*/
/*                                 <span><a href="#">243 offers available</a></span>*/
/*                             </div>*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><img src="{{ asset ('images/icons/holidays_icon_2.png') }}" width="48" height="48" alt="ALL INCLUSIVE"></div>*/
/*                                 <div class="boxed_title"><strong>ALL INCLUSIVE</strong></div>*/
/*                                 <span><a href="#">65 offers available</a></span>*/
/*                             </div>*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><img src="{{ asset ('images/icons/holidays_icon_3.png') }}" width="48" height="48" alt="FAMILY HOLIDAYS"></div>*/
/*                                 <div class="boxed_title"><strong>FAMILY HOLIDAYS</strong></div>*/
/*                                 <span><a href="#">27 offers available</a></span>*/
/*                             </div>*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><img src="{{ asset ('images/icons/holidays_icon_4.png') }}" width="48" height="48" alt="LUXURY CITY BREAKS"></div>*/
/*                                 <div class="boxed_title"><strong>LUXURY CITY BREAKS</strong></div>*/
/*                                 <span><a href="#">78 offers available</a></span>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/*                         <div class="boxed_list boxed_list2">*/
/* */
/*                             <div class="boxed_item">                        	*/
/*                                 <div class="boxed_title_arrow"><strong>Last Minute Deals</strong></div>*/
/*                             </div>*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><span class="price_box"><ins>$</ins><strong>579</strong></span></div>*/
/*                                 <div class="boxed_title"><a href="#"><strong>Houda Golf Beach 5*</strong></a></div>*/
/*                                 <span><a href="#">Tunisia, Sousse</a></span>*/
/*                             </div>*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><span class="price_box"><ins>$</ins><strong>480</strong></span></div>*/
/*                                 <div class="boxed_title"><a href="#"><strong>Hilton Sharks Bay 4*</strong></a></div>*/
/*                                 <span><a href="#">Egipt, Sharm El Sheik</a></span>*/
/*                             </div>*/
/* */
/*                             <div class="boxed_item">*/
/*                                 <div class="boxed_icon"><span class="price_box"><ins>$</ins><strong>980</strong></span></div>*/
/*                                 <div class="boxed_title"><a href="#"><strong>JW Marriot Cancun 5*</strong></a></div>*/
/*                                 <span><a href="#">Mexico, Cancun</a></span>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/* */
/*                         <!--/ HOLIDAYS offers list -->*/
/* */
/*                         <div class="divider_space_big"></div>*/
/* */
/*                         <!-- SPECIAL offers list -->                    */
/*                         <div class="title">*/
/*                             <h2>SPECIAL PRICES AND LATEST PROMOS</h2>*/
/*                             <span class="title_right"><a href="#">See all Special Prices & Promos</a></span>*/
/*                         </div>*/
/* */
/*                         <!-- filter_mid -->*/
/*                         <div class="block_hr filter_mid">*/
/*                             <form action="#" method="post" class="">*/
/* */
/*                                 <div class="row input_styled checklist">*/
/*                                     <label class="label_title">Show offers from:</label>*/
/*                                     <div class="rowCheckbox"><input type="checkbox" name="filter_offer_11" id="filter_offer_11" value="1" checked> <label for="filter_offer_11">HOLIDAYS</label></div>*/
/*                                     <div class="rowCheckbox"><input type="checkbox" name="filter_offer_22" id="filter_offer_22" value="2" checked> <label for="filter_offer_22">CITY BREAKS</label></div>*/
/*                                     <div class="rowCheckbox"><input type="checkbox" name="filter_offer_33" id="filter_offer_33" value="3" checked> <label for="filter_offer_33">HOTELS</label></div>*/
/*                                 </div>*/
/* */
/*                                 <div class="row rangeField">*/
/*                                     <label class="label_title">Price range:</label>*/
/*                                     <div class="range-slider">*/
/*                                         <input id="price_range_promo" type="text" name="price_range_promo" value="100;2500">*/
/*                                     </div>                   */
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/* */
/*                                 <div class="row rowSubmit">*/
/*                                     <input type="submit" value="FILTER NOW" class="btn-submit">*/
/*                                 </div>*/
/* */
/*                                 <div class="clear"></div>									            */
/*                             </form>		*/
/*                             <script type="text/javascript" >*/
/*                                 jQuery(document).ready(function ($) {*/
/*                                     // Price Range Input*/
/*                                     $("#price_range_promo").slider({*/
/*                                         from: 100,*/
/*                                         to: 10000,*/
/*                                         limits: false,*/
/*                                         scale: ['$100', '$10k'],*/
/*                                         heterogeneity: ['50/3000'],*/
/*                                         step: 100,*/
/*                                         smooth: true,*/
/*                                         dimension: '$',*/
/*                                         skin: "round_green"*/
/*                                     });*/
/*                                 });*/
/*                             </script>   	                */
/*                         </div>*/
/*                         <!--/ filter_mid -->*/
/* */
/* */
/*                         <div class="grid_list promo_list">*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">*/
/*                                     <img src="{{ asset ('images/temp/offer_07.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Rincon, Puerto Rico - 7 nights</a> <span class="price"><ins>$</ins><strong>790</strong></span></p>*/
/*                                     <span class="ribbon off-30">SALE: 30% OFF</span>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>                            */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_08.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Chicago, Illinois - 6 nights</a> <span class="price"><ins>$</ins><strong>647</strong></span></p>*/
/*                                     <span class="ribbon off-25">SALE: 25% OFF</span>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>                            */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_09.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Langkawi, Malaysia - 5 nights</a> <span class="price"><ins>$</ins><strong>645</strong></span></p>*/
/*                                     <span class="ribbon off-65">SALE: 65% OFF</span>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_10.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Riviera Maya, Mexico - 12 nights</a> <span class="price"><ins>$</ins><strong>870</strong></span></p>*/
/*                                     <span class="ribbon off-15">SALE: 15% OFF</span>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_11.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Koh Phi Phi, Thailand - 9 nights</a> <span class="price"><ins>$</ins><strong>2340</strong></span></p>*/
/*                                     <span class="ribbon off-50">SALE: 50% OFF</span>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="list_item">*/
/*                                 <div class="item_img">                       	    */
/*                                     <img src="{{ asset ('images/temp/offer_12.jpg') }}" alt="">                            */
/*                                     <p class="caption"><a href="offer-details.html">Andes Circuit, Chile - 17 nights</a> <span class="price"><ins>$</ins><strong>2450</strong></span></p>*/
/*                                     <span class="ribbon off-35">SALE: 35% OFF</span>*/
/*                                     <a href="offer-details.html" class="link-img">more...</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/* */
/*                         <!--/ SPECIAL offers list -->*/
/* */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <!--/ content -->*/
/* */
/*             <div class="clear"></div>        */
/*         </div>*/
/*     </div>*/
/*     <!--/ middle -->*/
/* {% endblock %}    */
/* */
/* */
