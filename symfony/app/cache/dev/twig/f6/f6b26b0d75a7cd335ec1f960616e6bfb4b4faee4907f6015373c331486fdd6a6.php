<?php

/* PiGeneralBundle:Default:blog.html.twig */
class __TwigTemplate_66c563d655a1d55bdab308f092b82d39b6c31475a50bc77a5558fc60328c5681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:blog.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "<title>GoVoyage | Blog</title>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- before content -->
    <div class=\"before_content\">
        <div class=\"before_inner\">
            <div class=\"container_12\">

                <div class=\"title\">\t\t\t
                    <span class=\"title_right\"><a href=\"#\">See all Holiday offers</a> <span class=\"separator\">|</span> <a href=\"#\">See all Special offers</a></span>
                </div>

                <div class=\"search_main\">
                    <form action=\"#\" method=\"get\" class=\"form_search\">

                        <div class=\"search_col_1\">

                            <div class=\"row rowInput\">
                                <label>DESTINATION:</label>
                                <input type=\"text\" name=\"city_from\" class=\"inputField\" value=\"City, Resort, etc\" onfocus=\"if (this.value == 'City, Resort, etc') {
                                            this.value = '';
                                        }\" onblur=\"if (this.value == '') {
                                                    this.value = 'City, Resort, etc';
                                                }\">
                            </div>

                            <div class=\"row\">
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
        <div class=\"container_12\">

            <!-- breadcrumbs -->
            <div class=\"breadcrumbs\">
                <p><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("pi_general_home");
        echo "\">Homepage</a> <span class=\"separator\">&gt;</span> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pi_general_blog");
        echo "\">Our Blog</a> <span class=\"separator\">&gt;</span> <span>Category Title Posts</span></p>
            </div>
            <!--/ breadcrumbs -->

            <!-- content -->
            <div class=\"content\">

                <div class=\"post-list\">

                    <div class=\"post-item\">
                        <div class=\"post-title\"><h2><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\">Luxury Style: RITZ-CARLTON Shanghai, Pudong</a></h2></div>
                        <div class=\"post-image\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_3.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"219\" height=\"156\"></a></div>
                        <div class=\"post-short\">            \t
                            <div class=\"post-meta-top\"><span class=\"meta-date\">Thu, Jun 21, 12</span> Posted by: <a href=\"#\" class=\"author\">Mike Jenkins</a></div>
                            <div class=\"post-descr\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>
                            </div>
                            <div class=\"post-meta-bot\"><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\" class=\"link-more\">Continue reading >></a></div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>


                    <div class=\"post-item\">
                        <div class=\"post-title\"><h2><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\">Travel Quiz: which international city is this?</a></h2></div>
                        <div class=\"post-image\"><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"219\" height=\"156\"></a></div>
                        <div class=\"post-short\">            \t
                            <div class=\"post-meta-top\"><span class=\"meta-date\">Fri, Jun 18, 12</span> Posted by: <span class=\"author\">Sylvia Morris</span></div>
                            <div class=\"post-descr\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>
                            </div>
                            <div class=\"post-meta-bot\"><a href=\"#\" class=\"link-more\">Continue reading >></a></div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                    <div class=\"post-item\">
                        <div class=\"post-title\"><h2><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\">Chicago SkyTower - 3 day city-break for only \$599</a></h2></div>
                        <div class=\"post-image\"><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_5.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"219\" height=\"156\"></a></div>
                        <div class=\"post-short\">            \t
                            <div class=\"post-meta-top\"><span class=\"meta-date\">Mon, May 30, 12</span> Posted by: <span class=\"author\">Mike Jenkins</span></div>
                            <div class=\"post-descr\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>
                            </div>
                            <div class=\"post-meta-bot\"><a href=\"#\" class=\"link-more\">Continue reading >></a></div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>


                    <div class=\"post-item\">
                        <div class=\"post-title\"><h2><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\">Have a great dinner with our Restaurant Giveaway</a></h2></div>
                        <div class=\"post-image\"><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_6.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"219\" height=\"156\"></a></div>
                        <div class=\"post-short\">            \t
                            <div class=\"post-meta-top\"><span class=\"meta-date\">Sat, May 27, 12</span> Posted by: <span class=\"author\">Sylvia Morris</span></div>
                            <div class=\"post-descr\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>
                            </div>
                            <div class=\"post-meta-bot\"><a href=\"#\" class=\"link-more\">Continue reading >></a></div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                    <div class=\"post-item\">
                        <div class=\"post-title\"><h2><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\">Infinity Pool pass - only this weekend</a></h2></div>
                        <div class=\"post-image\"><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("pi_general_blog_details");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_7.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"219\" height=\"156\"></a></div>
                        <div class=\"post-short\">            \t
                            <div class=\"post-meta-top\"><span class=\"meta-date\">Thu, May 24, 12</span> Posted by: <span class=\"author\">Sylvia Morris</span></div>
                            <div class=\"post-descr\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>
                            </div>
                            <div class=\"post-meta-bot\"><a href=\"#\" class=\"link-more\">Continue reading >></a></div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>

                </div>

                <!-- pagination -->
                <div class=\"block_hr tf_pagination\">
                    <div class=\"inner\">
                        <a class=\"page_prev\" href=\"#\"><span>PREVIOUS</span></a> 
                        <a class=\"page_next\" href=\"#\"><span>NEXT</span></a>

                        <span class=\"page-numbers page_current\">1</span> <a href=\"#\" class=\"page-numbers\">2</a>  <a href=\"#\" class=\"page-numbers\">3</a> <a href=\"#\" class=\"page-numbers\">4</a> <a href=\"#\" class=\"page-numbers\">5</a> <a href=\"#\" class=\"page-numbers\">6</a> <a href=\"#\" class=\"page-numbers\">7</a> &hellip;  <a href=\"#\" class=\"page-numbers\">18</a>                  

                    </div>
                </div>
                <!--/ pagination -->

            </div>
            <!--/ content -->

            <!-- sidebar -->
            <div class=\"sidebar\">

                <div class=\"widget-container widget_recent_comments\">
                    <h3 class=\"widget-title\">Latest Discussions:</h3>
                    <ul>
                        <li class=\"recentcomments\">
                            <a href=\"post-details.html#comment-1\" class=\"comment-link\">Going Cheap On Day Trips from Madrid, Spain</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Logan Finch</a></span> <span class=\"comment-date\">23 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"post-details.html#comment-2\" class=\"comment-link\">Surrendering to luxury in northern Italy - in Ravello</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Julia Styles</a></span> <span class=\"comment-date\">45 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"post-details.html#comment-2\" class=\"comment-link\">Barnsley - blooming marvellous!</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Keith Verhoeven</a></span> <span class=\"comment-date\">45 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"post-details.html#comment-2\" class=\"comment-link\">The Queen of all Temples in North Cambodgia - Siem Reap</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Rachel Simmons</a></span> <span class=\"comment-date\">1 day ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"post-details.html#comment-2\" class=\"comment-link\">Stunning Jiuzhaigou Nature Reserve in Sichuan, China</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Julia Styles</a></span> <span class=\"comment-date\">2 days ago</span></div>
                        </li>
                    </ul>

                    <div class=\"text-center\"><a href=\"blog.html\" class=\"btn btn_big\">More Discussions</a></div>
                </div>


                <div class=\"widget-container widget_tag_cloud\">
                    <h3 class=\"widget-title\">Tag Cloud:</h3>
                    <div class=\"tagcloud\">          
                        <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>Nemo</a>
                        <a href='#' class='tag-link-7' title='3 topics' style='font-size: 15pt;'>enim</a>
                        <a href='#' class='tag-link-3' title='2 topics' style='font-size: 10pt;'>ipsam</a>
                        <a href='#' class='tag-link-6' title='3 topics' style='font-size: 15pt;'>quia voluptas</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>sit</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 13pt;'>aspernatur</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 13pt;'>nesciunt</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 18pt;'>aut odit</a>
                        <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>fugit sed</a>
                        <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>consequuntur</a>
                        <a href='#' class='tag-link-4' title='2 topics' style='font-size: 15pt;'>magni</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>dolores</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 18pt;'>eos</a>
                        <a href='#' class='tag-link-3' title='2 topics' style='font-size: 10pt;'>ipsam</a>
                        <a href='#' class='tag-link-6' title='3 topics' style='font-size: 13pt;'>ratione</a>
                        <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>inventore voluptas</a>
                    </div>
                </div>

                <div id=\"archives-3\" class=\"widget-container widget_archive\">
                    <h3 class=\"widget-title\">Archives</h3>\t\t
                    <ul>
                        <li><a href='#' title='January 2012'>January 2012</a></li>  
                        <li><a href='#' title='December 2011'>December 2011</a></li>
                        <li><a href='#' title='November 2011'>November 2011</a></li>
                        <li><a href='#' title='October 2011'>October 2011</a></li>  
                        <li><a href='#' title='September 2011'>September 2011</a></li> 
                        <li><a href='#' title='August 2011'>August 2011</a></li>  
                        <li><a href='#' title='July 2011'>July 2011</a></li>  
                        <li><a href='#' title='June 2011'>June 2011</a></li>  
                        <li><a href='#' title='May 2011'>May 2011</a></li>
                        <li><a href='#' title='April 2011'>April 2011</a></li>
                    </ul>
                    <div class=\"clear\"></div>
                </div>

                <div class=\"facebook_box\">
                    <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/sidebar_facebook.jpg"), "html", null, true);
        echo "\" width=\"270\" height=\"270\" alt=\"\">
                </div>

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
        return "PiGeneralBundle:Default:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 229,  207 => 129,  203 => 128,  186 => 116,  182 => 115,  164 => 102,  160 => 101,  143 => 89,  139 => 88,  129 => 81,  118 => 75,  114 => 74,  99 => 64,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}<title>GoVoyage | Blog</title>{% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- before content -->*/
/*     <div class="before_content">*/
/*         <div class="before_inner">*/
/*             <div class="container_12">*/
/* */
/*                 <div class="title">			*/
/*                     <span class="title_right"><a href="#">See all Holiday offers</a> <span class="separator">|</span> <a href="#">See all Special offers</a></span>*/
/*                 </div>*/
/* */
/*                 <div class="search_main">*/
/*                     <form action="#" method="get" class="form_search">*/
/* */
/*                         <div class="search_col_1">*/
/* */
/*                             <div class="row rowInput">*/
/*                                 <label>DESTINATION:</label>*/
/*                                 <input type="text" name="city_from" class="inputField" value="City, Resort, etc" onfocus="if (this.value == 'City, Resort, etc') {*/
/*                                             this.value = '';*/
/*                                         }" onblur="if (this.value == '') {*/
/*                                                     this.value = 'City, Resort, etc';*/
/*                                                 }">*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
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
/*                             </div>                    */
/* */
/*                             <div class="row rowSubmit"><input type="submit" value="FIND VACATIONS" class="btn btn-find"></div>*/
/* */
/*                         </div> */
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
/*     <div id="middle" class="cols2">*/
/*         <div class="container_12">*/
/* */
/*             <!-- breadcrumbs -->*/
/*             <div class="breadcrumbs">*/
/*                 <p><a href="{{path('pi_general_home') }}">Homepage</a> <span class="separator">&gt;</span> <a href="{{path('pi_general_blog') }}">Our Blog</a> <span class="separator">&gt;</span> <span>Category Title Posts</span></p>*/
/*             </div>*/
/*             <!--/ breadcrumbs -->*/
/* */
/*             <!-- content -->*/
/*             <div class="content">*/
/* */
/*                 <div class="post-list">*/
/* */
/*                     <div class="post-item">*/
/*                         <div class="post-title"><h2><a href="{{ path ('pi_general_blog_details') }}">Luxury Style: RITZ-CARLTON Shanghai, Pudong</a></h2></div>*/
/*                         <div class="post-image"><a href="{{ path ('pi_general_blog_details')  }}"><img src="{{ asset('images/temp/entry_3.jpg') }}" alt="" width="219" height="156"></a></div>*/
/*                         <div class="post-short">            	*/
/*                             <div class="post-meta-top"><span class="meta-date">Thu, Jun 21, 12</span> Posted by: <a href="#" class="author">Mike Jenkins</a></div>*/
/*                             <div class="post-descr">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>*/
/*                             </div>*/
/*                             <div class="post-meta-bot"><a href="{{ path ('pi_general_blog_details') }}" class="link-more">Continue reading >></a></div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="post-item">*/
/*                         <div class="post-title"><h2><a href="{{ path ('pi_general_blog_details')  }}">Travel Quiz: which international city is this?</a></h2></div>*/
/*                         <div class="post-image"><a href="{{ path ('pi_general_blog_details')  }}"><img src="{{ asset('images/temp/entry_4.jpg') }}" alt="" width="219" height="156"></a></div>*/
/*                         <div class="post-short">            	*/
/*                             <div class="post-meta-top"><span class="meta-date">Fri, Jun 18, 12</span> Posted by: <span class="author">Sylvia Morris</span></div>*/
/*                             <div class="post-descr">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>*/
/*                             </div>*/
/*                             <div class="post-meta-bot"><a href="#" class="link-more">Continue reading >></a></div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <div class="post-item">*/
/*                         <div class="post-title"><h2><a href="{{ path ('pi_general_blog_details')  }}">Chicago SkyTower - 3 day city-break for only $599</a></h2></div>*/
/*                         <div class="post-image"><a href="{{ path ('pi_general_blog_details')  }}"><img src="{{ asset('images/temp/entry_5.jpg') }}" alt="" width="219" height="156"></a></div>*/
/*                         <div class="post-short">            	*/
/*                             <div class="post-meta-top"><span class="meta-date">Mon, May 30, 12</span> Posted by: <span class="author">Mike Jenkins</span></div>*/
/*                             <div class="post-descr">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>*/
/*                             </div>*/
/*                             <div class="post-meta-bot"><a href="#" class="link-more">Continue reading >></a></div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="post-item">*/
/*                         <div class="post-title"><h2><a href="{{ path ('pi_general_blog_details')  }}">Have a great dinner with our Restaurant Giveaway</a></h2></div>*/
/*                         <div class="post-image"><a href="{{ path ('pi_general_blog_details')  }}"><img src="{{ asset('images/temp/entry_6.jpg') }}" alt="" width="219" height="156"></a></div>*/
/*                         <div class="post-short">            	*/
/*                             <div class="post-meta-top"><span class="meta-date">Sat, May 27, 12</span> Posted by: <span class="author">Sylvia Morris</span></div>*/
/*                             <div class="post-descr">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>*/
/*                             </div>*/
/*                             <div class="post-meta-bot"><a href="#" class="link-more">Continue reading >></a></div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <div class="post-item">*/
/*                         <div class="post-title"><h2><a href="{{ path ('pi_general_blog_details')  }}">Infinity Pool pass - only this weekend</a></h2></div>*/
/*                         <div class="post-image"><a href="{{ path ('pi_general_blog_details')  }}"><img src="{{ asset('images/temp/entry_7.jpg') }}" alt="" width="219" height="156"></a></div>*/
/*                         <div class="post-short">            	*/
/*                             <div class="post-meta-top"><span class="meta-date">Thu, May 24, 12</span> Posted by: <span class="author">Sylvia Morris</span></div>*/
/*                             <div class="post-descr">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiaem, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo odit aut fugit otam rem aperiaem, eaque ipsa quae ab illo inventore...</p>*/
/*                             </div>*/
/*                             <div class="post-meta-bot"><a href="#" class="link-more">Continue reading >></a></div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <!-- pagination -->*/
/*                 <div class="block_hr tf_pagination">*/
/*                     <div class="inner">*/
/*                         <a class="page_prev" href="#"><span>PREVIOUS</span></a> */
/*                         <a class="page_next" href="#"><span>NEXT</span></a>*/
/* */
/*                         <span class="page-numbers page_current">1</span> <a href="#" class="page-numbers">2</a>  <a href="#" class="page-numbers">3</a> <a href="#" class="page-numbers">4</a> <a href="#" class="page-numbers">5</a> <a href="#" class="page-numbers">6</a> <a href="#" class="page-numbers">7</a> &hellip;  <a href="#" class="page-numbers">18</a>                  */
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <!--/ pagination -->*/
/* */
/*             </div>*/
/*             <!--/ content -->*/
/* */
/*             <!-- sidebar -->*/
/*             <div class="sidebar">*/
/* */
/*                 <div class="widget-container widget_recent_comments">*/
/*                     <h3 class="widget-title">Latest Discussions:</h3>*/
/*                     <ul>*/
/*                         <li class="recentcomments">*/
/*                             <a href="post-details.html#comment-1" class="comment-link">Going Cheap On Day Trips from Madrid, Spain</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Logan Finch</a></span> <span class="comment-date">23 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="post-details.html#comment-2" class="comment-link">Surrendering to luxury in northern Italy - in Ravello</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Julia Styles</a></span> <span class="comment-date">45 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="post-details.html#comment-2" class="comment-link">Barnsley - blooming marvellous!</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Keith Verhoeven</a></span> <span class="comment-date">45 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="post-details.html#comment-2" class="comment-link">The Queen of all Temples in North Cambodgia - Siem Reap</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Rachel Simmons</a></span> <span class="comment-date">1 day ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="post-details.html#comment-2" class="comment-link">Stunning Jiuzhaigou Nature Reserve in Sichuan, China</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Julia Styles</a></span> <span class="comment-date">2 days ago</span></div>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <div class="text-center"><a href="blog.html" class="btn btn_big">More Discussions</a></div>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="widget-container widget_tag_cloud">*/
/*                     <h3 class="widget-title">Tag Cloud:</h3>*/
/*                     <div class="tagcloud">          */
/*                         <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>Nemo</a>*/
/*                         <a href='#' class='tag-link-7' title='3 topics' style='font-size: 15pt;'>enim</a>*/
/*                         <a href='#' class='tag-link-3' title='2 topics' style='font-size: 10pt;'>ipsam</a>*/
/*                         <a href='#' class='tag-link-6' title='3 topics' style='font-size: 15pt;'>quia voluptas</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>sit</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 13pt;'>aspernatur</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 13pt;'>nesciunt</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 18pt;'>aut odit</a>*/
/*                         <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>fugit sed</a>*/
/*                         <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>consequuntur</a>*/
/*                         <a href='#' class='tag-link-4' title='2 topics' style='font-size: 15pt;'>magni</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>dolores</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 18pt;'>eos</a>*/
/*                         <a href='#' class='tag-link-3' title='2 topics' style='font-size: 10pt;'>ipsam</a>*/
/*                         <a href='#' class='tag-link-6' title='3 topics' style='font-size: 13pt;'>ratione</a>*/
/*                         <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>inventore voluptas</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="archives-3" class="widget-container widget_archive">*/
/*                     <h3 class="widget-title">Archives</h3>		*/
/*                     <ul>*/
/*                         <li><a href='#' title='January 2012'>January 2012</a></li>  */
/*                         <li><a href='#' title='December 2011'>December 2011</a></li>*/
/*                         <li><a href='#' title='November 2011'>November 2011</a></li>*/
/*                         <li><a href='#' title='October 2011'>October 2011</a></li>  */
/*                         <li><a href='#' title='September 2011'>September 2011</a></li> */
/*                         <li><a href='#' title='August 2011'>August 2011</a></li>  */
/*                         <li><a href='#' title='July 2011'>July 2011</a></li>  */
/*                         <li><a href='#' title='June 2011'>June 2011</a></li>  */
/*                         <li><a href='#' title='May 2011'>May 2011</a></li>*/
/*                         <li><a href='#' title='April 2011'>April 2011</a></li>*/
/*                     </ul>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/* */
/*                 <div class="facebook_box">*/
/*                     <img src="{{ asset('images/temp/sidebar_facebook.jpg') }}" width="270" height="270" alt="">*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <!--/ sidebar -->*/
/* */
/*             <div class="clear"></div>        */
/*         </div>*/
/*     </div>*/
/*     <!--/ middle -->*/
/* {% endblock %}*/
