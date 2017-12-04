<?php

/* PiGeneralBundle:Default:about_us.html.twig */
class __TwigTemplate_62b77f3a8930cdc42c5d3be8776a1f4925eef8e928ced0e39f13b799b2a68ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:about_us.html.twig", 1);
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
        echo "<title>GoVoyage | About_us</title>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
        // line 65
        echo $this->env->getExtension('routing')->getPath("pi_general_home");
        echo "\">Homepage</a> <span class=\"separator\">&gt;</span> <span>About us</span></p>
            </div>
            <!--/ breadcrumbs -->

            <!-- content -->
            <div class=\"content\">

                <!-- post details -->
                <div class=\"post-detail\">
                    <h1>About our <span>Travel Agency</span></h1>

                    <div class=\"entry\">
                        <p><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_big_2.jpg"), "html", null, true);
        echo "\" alt=\"\"></p>
                        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condim enm facilsis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orcire ac eisestib ulum mollis mauris enim. Morbi euiod magna ac lorem rutrum eleentum. <a href=\"#\">Doren ec viverra</a> lore mispu fritesk auctor lobortis. Pellentesque euriborius est a nullera. placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. </p>
                        <p>Etiam scelerisque, nunc ac egestas consequat, <strong>odio nibh </strong>euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. <a href=\"#\">Mauris vel neque</a> sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed ut dui. Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat.</p>
                        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere.</p>
                        <br><br><br>


                        <div class=\"row\">
                            <div class=\"col col_1_2\">
                                <!-- widget_contact -->
                                <div class=\"widget-container widget_contact\">   
                                    <div class=\"inner\">   

                                        <div class=\"contact-address\">
                                            <div class=\"name\"><strong>Travel Agency LTD</strong></div>
                                            <div class=\"address\">21 Sunset Blvd. New York, NY</div>
                                            <div class=\"phone\"><em>Phone:</em> <span>555-522.326</span></div>
                                            <div class=\"fax\"><em>Fax:</em> <span>555-345.285</span></div>
                                            <div class=\"mail\"><em>Email:</em> <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("mailto:contact@travelagency.com"), "html", null, true);
        echo "\">contact@travelagency.com</a></div>
                                        </div>

                                        <div class=\"contact-social\">
                                            <div><strong>Call us:</strong> <br> <a href=\"#\" class=\"btn btn_skype\">Skype</a></div>
                                            <div><strong>Follow us:</strong> <br> <a href=\"#\" class=\"btn btn_twitter\">Twitter</a></div>
                                            <div><strong>Join us:</strong> <br> <a href=\"#\" class=\"btn btn_fb\">Facebook</a></div>
                                            <div class=\"clear\"></div>
                                        </div>

                                    </div>     
                                </div>
                                <!--/ widget_contact -->

                            </div>

                            <div class=\"col col_1_2\">

                                <div class=\"contact-map\">
                                    <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/map.gif"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                            </div>
                        </div>
                        <div class=\"clear\"></div>

                    </div>\t            
                </div>
                <!--/ post details -->



            </div>
            <!--/ content -->

            <!-- sidebar -->
            <div class=\"sidebar\">

                <div class=\"widget-container widget_recent_comments\">
                    <h3 class=\"widget-title\">Latest Discussions:</h3>
                    <ul>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-1"), "html", null, true);
        echo "\" class=\"comment-link\">Going Cheap On Day Trips from Madrid, Spain</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Logan Finch</a></span> <span class=\"comment-date\">23 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">Surrendering to luxury in northern Italy - in Ravello</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Julia Styles</a></span> <span class=\"comment-date\">45 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">Barnsley - blooming marvellous!</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Keith Verhoeven</a></span> <span class=\"comment-date\">45 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">The Queen of all Temples in North Cambodgia - Siem Reap</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Rachel Simmons</a></span> <span class=\"comment-date\">1 day ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">Stunning Jiuzhaigou Nature Reserve in Sichuan, China</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Julia Styles</a></span> <span class=\"comment-date\">2 days ago</span></div>
                        </li>
                    </ul>

                    <div class=\"text-center\"><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("pi_general_blog");
        echo "\" class=\"btn btn_big\">More Discussions</a></div>
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
        // line 202
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
        return "PiGeneralBundle:Default:about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 202,  219 => 158,  211 => 153,  204 => 149,  197 => 145,  190 => 141,  183 => 137,  157 => 114,  135 => 95,  114 => 77,  99 => 65,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}<title>GoVoyage | About_us</title>{% endblock %}*/
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
/*     <div id="middle" class="cols2">*/
/*         <div class="container_12">*/
/* */
/*             <!-- breadcrumbs -->*/
/*             <div class="breadcrumbs">*/
/*                 <p><a href="{{ path('pi_general_home') }}">Homepage</a> <span class="separator">&gt;</span> <span>About us</span></p>*/
/*             </div>*/
/*             <!--/ breadcrumbs -->*/
/* */
/*             <!-- content -->*/
/*             <div class="content">*/
/* */
/*                 <!-- post details -->*/
/*                 <div class="post-detail">*/
/*                     <h1>About our <span>Travel Agency</span></h1>*/
/* */
/*                     <div class="entry">*/
/*                         <p><img src="{{ asset('images/temp/entry_big_2.jpg') }}" alt=""></p>*/
/*                         <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condim enm facilsis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orcire ac eisestib ulum mollis mauris enim. Morbi euiod magna ac lorem rutrum eleentum. <a href="#">Doren ec viverra</a> lore mispu fritesk auctor lobortis. Pellentesque euriborius est a nullera. placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. </p>*/
/*                         <p>Etiam scelerisque, nunc ac egestas consequat, <strong>odio nibh </strong>euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. <a href="#">Mauris vel neque</a> sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed ut dui. Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat.</p>*/
/*                         <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere.</p>*/
/*                         <br><br><br>*/
/* */
/* */
/*                         <div class="row">*/
/*                             <div class="col col_1_2">*/
/*                                 <!-- widget_contact -->*/
/*                                 <div class="widget-container widget_contact">   */
/*                                     <div class="inner">   */
/* */
/*                                         <div class="contact-address">*/
/*                                             <div class="name"><strong>Travel Agency LTD</strong></div>*/
/*                                             <div class="address">21 Sunset Blvd. New York, NY</div>*/
/*                                             <div class="phone"><em>Phone:</em> <span>555-522.326</span></div>*/
/*                                             <div class="fax"><em>Fax:</em> <span>555-345.285</span></div>*/
/*                                             <div class="mail"><em>Email:</em> <a href="{{ asset('mailto:contact@travelagency.com') }}">contact@travelagency.com</a></div>*/
/*                                         </div>*/
/* */
/*                                         <div class="contact-social">*/
/*                                             <div><strong>Call us:</strong> <br> <a href="#" class="btn btn_skype">Skype</a></div>*/
/*                                             <div><strong>Follow us:</strong> <br> <a href="#" class="btn btn_twitter">Twitter</a></div>*/
/*                                             <div><strong>Join us:</strong> <br> <a href="#" class="btn btn_fb">Facebook</a></div>*/
/*                                             <div class="clear"></div>*/
/*                                         </div>*/
/* */
/*                                     </div>     */
/*                                 </div>*/
/*                                 <!--/ widget_contact -->*/
/* */
/*                             </div>*/
/* */
/*                             <div class="col col_1_2">*/
/* */
/*                                 <div class="contact-map">*/
/*                                     <img src="{{ asset('images/temp/map.gif') }}" alt="">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/* */
/*                     </div>	            */
/*                 </div>*/
/*                 <!--/ post details -->*/
/* */
/* */
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
/*                             <a href="{{ asset('post-details.html#comment-1') }}" class="comment-link">Going Cheap On Day Trips from Madrid, Spain</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Logan Finch</a></span> <span class="comment-date">23 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{ asset('post-details.html#comment-2') }}" class="comment-link">Surrendering to luxury in northern Italy - in Ravello</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Julia Styles</a></span> <span class="comment-date">45 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{ asset('post-details.html#comment-2') }}" class="comment-link">Barnsley - blooming marvellous!</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Keith Verhoeven</a></span> <span class="comment-date">45 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{ asset('post-details.html#comment-2') }}" class="comment-link">The Queen of all Temples in North Cambodgia - Siem Reap</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Rachel Simmons</a></span> <span class="comment-date">1 day ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{ asset('post-details.html#comment-2') }}" class="comment-link">Stunning Jiuzhaigou Nature Reserve in Sichuan, China</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Julia Styles</a></span> <span class="comment-date">2 days ago</span></div>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <div class="text-center"><a href="{{ path('pi_general_blog') }}" class="btn btn_big">More Discussions</a></div>*/
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
/* */
