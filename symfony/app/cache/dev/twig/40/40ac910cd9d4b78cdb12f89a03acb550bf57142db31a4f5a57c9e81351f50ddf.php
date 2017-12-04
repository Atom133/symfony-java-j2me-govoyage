<?php

/* PiGeneralBundle:Default:blog-details.html.twig */
class __TwigTemplate_8a0807fd8a90f04e9b3f8f02322891f3808e0f0bdb56d71df897130ba79b5473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:blog-details.html.twig", 1);
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
        echo "<title>GoVoyage | Blog_details</title>";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
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
        // line 63
        echo $this->env->getExtension('routing')->getPath("pi_general_home");
        echo "\">Homepage</a> <span class=\"separator\">&gt;</span> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pi_general_blog");
        echo "\">Our Blog</a> <span class=\"separator\">&gt;</span> <a href=\"blog.html\">Category Title Posts</a>  <span class=\"separator\">&gt;</span> <span>A few days in the enigmatic kingdom of Bhutan</span></p>
            </div>
            <!--/ breadcrumbs -->

            <!-- content -->
            <div class=\"content\">

                <!-- post details -->
                <div class=\"post-detail\">
                    <h1>A few days in the enigmatic kingdom of Bhutan</h1>

                    <div class=\"post-meta-top\"><span class=\"meta-date\">Thu, Jun 21, 12</span> Posted by: <span class=\"author\">Sylvia Morris</span></div>
                    <div class=\"entry\">
                        <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/entry_big_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <p><strong>Los Angeles Times</strong> - Kobe Bryant has received a reported \$6.7-million offer from an Italian team, but it was far from certain Bryant would play there, according to a person familiar with Bryant's thought process. The lucrative offers, most of them real, keep rolling in for Kobe Bryant. He got a contract offer this week from an Italian pro team, though it was far from certain Bryant would play there, according to a person familiar with Bryant's thought process.</p>
                        <p>The new offer is for a<strong> reported \$6.7 million</strong> from Italian team Virtus Bologna, which begins its season Oct. 9 and would have to come up with a huge insurance policy to land Bryant, not to mention the actual cash to get the 13-time all-star to play on the perennially underachieving team.<br>
                            Bryant, 33, is under contract with the Lakers for three more years and \$83.5 million. He has several contract options from the Italian team, according to its general manager, including a shorter per-game deal that would work out to<strong> about \$740,000 a game</strong>. All options are non-binding, allowing Bryant to return to the Lakers if the NBA lockout ends.</p>
                        <p>Even if Bryant doesn't take the offer seriously, he continues to be a man in motion since having a non-invasive procedure on his bothersome right knee in Germany three months ago.</p>
                        <p> He made promotional <u><strong>appearances</strong></u> this summer in the Philippines, China and Singapore, scored 43 points in a pro-am game in Los Angeles, played in a celebrity soccer game in Washington, talked briefly with teams in Turkey and China about playing pro basketball there, and was headed to Europe for more paid appearances next week.</p>
                        <p>The league also canceled 43 exhibition games, three of them involving the Lakers: Oct. 9 vs. Golden State in Fresno, Oct. 12 vs. Atlanta in Ontario and Oct. 15 vs. Atlanta at Staples Center.<br>
                            The Lakers were scheduled to open camp Oct. 4, with their annual media day taking place Oct. 3. Both events have been postponed indefinitely because of the lack of progress in NBA labor negotiations.</p>
                    </div>

                    <!-- post share -->
                    <div class=\"block_hr post-share\">
                        <div class=\"inner\">
                            <p>Share \"<strong>A few days in the enigmatic kingdom of Bhutan</strong>\" via:</p>
                            <p><a href=\"#\" class=\"btn-share\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/share_twitter.png"), "html", null, true);
        echo "\" width=\"79\" height=\"25\" alt=\"\"></a> <a href=\"#\" class=\"btn-share\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/share_facebook.png"), "html", null, true);
        echo "\" width=\"88\" height=\"25\" alt=\"\"></a> <a href=\"#\" class=\"btn-share\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/share_google.png"), "html", null, true);
        echo "\" width=\"67\" height=\"25\" alt=\"\"></a> </p>
                        </div>
                    </div>
                    <!--/ postshare -->

                </div>
                <!--/ post details -->

                <!-- post comments -->
                <div class=\"comment-list\" id=\"comments\">

                    <h2>3 Comments Added</h2>

                    <a href=\"#addcomments\" class=\"link-join\">Join the conversation</a>

                    <ol>
                        <li class=\"comment\">

                            <div class=\"comment-body\">
                                <div class=\"comment-avatar\">
                                    <div class=\"avatar\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/gavatar_1.jpg"), "html", null, true);
        echo "\" width=\"90\" height=\"90\" alt=\"\"></div>
                                    <a href=\"#\" class=\"link-author\">Lenny Di Natale</a>
                                </div>    
                                <div class=\"comment-text\">
                                    <div class=\"comment-author\"> <span class=\"comment-date\">Saturday 15th of June, 2012</span></div>
                                    <div class=\"comment-entry\">
                                        Britain's phone hacking claimed another casualty on Monday when Yates, the deputy of London's Metropolitan Police, resigned a day after the country's top police officer quit and Rebekah Brooks, the former chief executive of Rupert Murdoch's News International was arrested on suspicion of illegally intercepting phone calls and bribing the police
                                        <a href=\"#addcomment\" class=\"link-reply\">Reply</a>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>

                            <!-- comment reply -->
                            <ul class=\"children\">
                                <li class=\"comment\">
                                    <div class=\"comment-body\">
                                        <div class=\"comment-avatar\">
                                            <div class=\"avatar\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/gavatar_3.jpg"), "html", null, true);
        echo "\" width=\"90\" height=\"90\" alt=\"\"></div>
                                            <a href=\"#\" class=\"link-author\">Ari Gold</a>
                                        </div> 
                                        <div class=\"comment-text\">
                                            <div class=\"comment-author\"><span class=\"comment-date\">Sunday 16th of June, 2012</span></div>
                                            <div class=\"comment-entry\">Rebekah Brooks, the former chief executive of Rupert Murdoch's News International was arrested on suspicion of illegally intercepting phone calls and bribing the police. <a href=\"#addcomment\" class=\"link-reply\">Reply</a>                                                    </div>
                                        </div>
                                        <div class=\"clear\"></div>
                                    </div>

                                </li>

                            </ul>
                            <!--/ comment reply -->
                        </li>

                        <li class=\"comment\">
                            <div class=\"comment-body\">

                                <div class=\"comment-avatar\">
                                    <div class=\"avatar\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/gavatar_2.jpg"), "html", null, true);
        echo "\" width=\"90\" height=\"90\" alt=\"\"></div>
                                    <a href=\"#\" class=\"link-author\">James Hale</a>
                                </div> 
                                <div class=\"comment-text\">
                                    <div class=\"comment-author\"><span class=\"comment-date\">July 29, 2011</span></div>
                                    <div class=\"comment-entry\">There's every chance your competitors will wish they'd placed this entry, not you. While your customers will have probably forgotten. <a href=\"#addcomment\" class=\"link-reply\">Reply</a>                                        </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                        </li>

                    </ol>
                </div>
                <!--/ post comments -->

                <!-- add comment -->
                <div class=\"add-comment\" id=\"addcomments\">

                    <div class=\"add-comment-title\">
                        <h3>Leave a Reply</h3>
                    </div>

                    <div class=\"comment-form\">
                        <form action=\"#\" method=\"post\">

                            <div class=\"row alignleft\">
                                <label><strong>Name</strong></label>
                                <input type=\"text\" name=\"name\" value=\"\" class=\"inputtext input_middle required\">
                            </div>

                            <div class=\"space\"></div>

                            <div class=\"row  alignleft\">
                                <label><strong>Email</strong> (never published)</label>
                                <input type=\"text\" name=\"email\" value=\"\" class=\"inputtext input_middle required\">
                            </div>

                            <div class=\"clear\"></div>   

                            <div class=\"row\">
                                <label><strong>Website</strong></label>
                                <input type=\"text\" name=\"url\" value=\"\" class=\"inputtext input_full\">
                            </div>

                            <div class=\"row\">
                                <label><strong>Comment</strong></label>
                                <textarea cols=\"30\" rows=\"10\" name=\"message\" class=\"textarea textarea_middle required\"></textarea>
                            </div>
                            <input type=\"submit\" value=\"POSTS COMMENT\" class=\"btn-submit\">
                        </form>
                    </div>
                </div>
                <!--/add comment --> 

            </div>
            <!--/ content -->

            <!-- sidebar -->
            <div class=\"sidebar\">

                <div class=\"widget-container widget_recent_comments\">
                    <h3 class=\"widget-title\">Latest Discussions:</h3>
                    <ul>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-1"), "html", null, true);
        echo "\" class=\"comment-link\">Going Cheap On Day Trips from Madrid, Spain</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Logan Finch</a></span> <span class=\"comment-date\">23 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">Surrendering to luxury in northern Italy - in Ravello</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Julia Styles</a></span> <span class=\"comment-date\">45 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">Barnsley - blooming marvellous!</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Keith Verhoeven</a></span> <span class=\"comment-date\">45 min ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">The Queen of all Temples in North Cambodgia - Siem Reap</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Rachel Simmons</a></span> <span class=\"comment-date\">1 day ago</span></div>
                        </li>
                        <li class=\"recentcomments\">
                            <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("post-details.html#comment-2"), "html", null, true);
        echo "\" class=\"comment-link\">Stunning Jiuzhaigou Nature Reserve in Sichuan, China</a> 
                            <div class=\"comment-meta\"><span class=\"author\">by <a href=\"#\" rel=\"external nofollow\" class=\"url\">Julia Styles</a></span> <span class=\"comment-date\">2 days ago</span></div>
                        </li>
                    </ul>

                    <div class=\"text-center\"><a href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("pi_general_home");
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
        // line 277
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
        return "PiGeneralBundle:Default:blog-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 277,  308 => 233,  300 => 228,  293 => 224,  286 => 220,  279 => 216,  272 => 212,  205 => 148,  182 => 128,  161 => 110,  134 => 90,  117 => 76,  99 => 63,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}<title>GoVoyage | Blog_details</title>{% endblock %}*/
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
/*                 <p><a href="{{path('pi_general_home') }}">Homepage</a> <span class="separator">&gt;</span> <a href="{{path('pi_general_blog') }}">Our Blog</a> <span class="separator">&gt;</span> <a href="blog.html">Category Title Posts</a>  <span class="separator">&gt;</span> <span>A few days in the enigmatic kingdom of Bhutan</span></p>*/
/*             </div>*/
/*             <!--/ breadcrumbs -->*/
/* */
/*             <!-- content -->*/
/*             <div class="content">*/
/* */
/*                 <!-- post details -->*/
/*                 <div class="post-detail">*/
/*                     <h1>A few days in the enigmatic kingdom of Bhutan</h1>*/
/* */
/*                     <div class="post-meta-top"><span class="meta-date">Thu, Jun 21, 12</span> Posted by: <span class="author">Sylvia Morris</span></div>*/
/*                     <div class="entry">*/
/*                         <img src="{{asset ('images/temp/entry_big_1.jpg') }}" alt="">*/
/*                         <p><strong>Los Angeles Times</strong> - Kobe Bryant has received a reported $6.7-million offer from an Italian team, but it was far from certain Bryant would play there, according to a person familiar with Bryant's thought process. The lucrative offers, most of them real, keep rolling in for Kobe Bryant. He got a contract offer this week from an Italian pro team, though it was far from certain Bryant would play there, according to a person familiar with Bryant's thought process.</p>*/
/*                         <p>The new offer is for a<strong> reported $6.7 million</strong> from Italian team Virtus Bologna, which begins its season Oct. 9 and would have to come up with a huge insurance policy to land Bryant, not to mention the actual cash to get the 13-time all-star to play on the perennially underachieving team.<br>*/
/*                             Bryant, 33, is under contract with the Lakers for three more years and $83.5 million. He has several contract options from the Italian team, according to its general manager, including a shorter per-game deal that would work out to<strong> about $740,000 a game</strong>. All options are non-binding, allowing Bryant to return to the Lakers if the NBA lockout ends.</p>*/
/*                         <p>Even if Bryant doesn't take the offer seriously, he continues to be a man in motion since having a non-invasive procedure on his bothersome right knee in Germany three months ago.</p>*/
/*                         <p> He made promotional <u><strong>appearances</strong></u> this summer in the Philippines, China and Singapore, scored 43 points in a pro-am game in Los Angeles, played in a celebrity soccer game in Washington, talked briefly with teams in Turkey and China about playing pro basketball there, and was headed to Europe for more paid appearances next week.</p>*/
/*                         <p>The league also canceled 43 exhibition games, three of them involving the Lakers: Oct. 9 vs. Golden State in Fresno, Oct. 12 vs. Atlanta in Ontario and Oct. 15 vs. Atlanta at Staples Center.<br>*/
/*                             The Lakers were scheduled to open camp Oct. 4, with their annual media day taking place Oct. 3. Both events have been postponed indefinitely because of the lack of progress in NBA labor negotiations.</p>*/
/*                     </div>*/
/* */
/*                     <!-- post share -->*/
/*                     <div class="block_hr post-share">*/
/*                         <div class="inner">*/
/*                             <p>Share "<strong>A few days in the enigmatic kingdom of Bhutan</strong>" via:</p>*/
/*                             <p><a href="#" class="btn-share"><img src="{{asset ('images/share_twitter.png') }}" width="79" height="25" alt=""></a> <a href="#" class="btn-share"><img src="{{asset ('images/share_facebook.png') }}" width="88" height="25" alt=""></a> <a href="#" class="btn-share"><img src="{{asset ('images/share_google.png') }}" width="67" height="25" alt=""></a> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--/ postshare -->*/
/* */
/*                 </div>*/
/*                 <!--/ post details -->*/
/* */
/*                 <!-- post comments -->*/
/*                 <div class="comment-list" id="comments">*/
/* */
/*                     <h2>3 Comments Added</h2>*/
/* */
/*                     <a href="#addcomments" class="link-join">Join the conversation</a>*/
/* */
/*                     <ol>*/
/*                         <li class="comment">*/
/* */
/*                             <div class="comment-body">*/
/*                                 <div class="comment-avatar">*/
/*                                     <div class="avatar"><img src="{{asset ('images/temp/gavatar_1.jpg') }}" width="90" height="90" alt=""></div>*/
/*                                     <a href="#" class="link-author">Lenny Di Natale</a>*/
/*                                 </div>    */
/*                                 <div class="comment-text">*/
/*                                     <div class="comment-author"> <span class="comment-date">Saturday 15th of June, 2012</span></div>*/
/*                                     <div class="comment-entry">*/
/*                                         Britain's phone hacking claimed another casualty on Monday when Yates, the deputy of London's Metropolitan Police, resigned a day after the country's top police officer quit and Rebekah Brooks, the former chief executive of Rupert Murdoch's News International was arrested on suspicion of illegally intercepting phone calls and bribing the police*/
/*                                         <a href="#addcomment" class="link-reply">Reply</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/* */
/*                             <!-- comment reply -->*/
/*                             <ul class="children">*/
/*                                 <li class="comment">*/
/*                                     <div class="comment-body">*/
/*                                         <div class="comment-avatar">*/
/*                                             <div class="avatar"><img src="{{asset ('images/temp/gavatar_3.jpg') }}" width="90" height="90" alt=""></div>*/
/*                                             <a href="#" class="link-author">Ari Gold</a>*/
/*                                         </div> */
/*                                         <div class="comment-text">*/
/*                                             <div class="comment-author"><span class="comment-date">Sunday 16th of June, 2012</span></div>*/
/*                                             <div class="comment-entry">Rebekah Brooks, the former chief executive of Rupert Murdoch's News International was arrested on suspicion of illegally intercepting phone calls and bribing the police. <a href="#addcomment" class="link-reply">Reply</a>                                                    </div>*/
/*                                         </div>*/
/*                                         <div class="clear"></div>*/
/*                                     </div>*/
/* */
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                             <!--/ comment reply -->*/
/*                         </li>*/
/* */
/*                         <li class="comment">*/
/*                             <div class="comment-body">*/
/* */
/*                                 <div class="comment-avatar">*/
/*                                     <div class="avatar"><img src="{{asset ('images/temp/gavatar_2.jpg') }}" width="90" height="90" alt=""></div>*/
/*                                     <a href="#" class="link-author">James Hale</a>*/
/*                                 </div> */
/*                                 <div class="comment-text">*/
/*                                     <div class="comment-author"><span class="comment-date">July 29, 2011</span></div>*/
/*                                     <div class="comment-entry">There's every chance your competitors will wish they'd placed this entry, not you. While your customers will have probably forgotten. <a href="#addcomment" class="link-reply">Reply</a>                                        </div>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                         </li>*/
/* */
/*                     </ol>*/
/*                 </div>*/
/*                 <!--/ post comments -->*/
/* */
/*                 <!-- add comment -->*/
/*                 <div class="add-comment" id="addcomments">*/
/* */
/*                     <div class="add-comment-title">*/
/*                         <h3>Leave a Reply</h3>*/
/*                     </div>*/
/* */
/*                     <div class="comment-form">*/
/*                         <form action="#" method="post">*/
/* */
/*                             <div class="row alignleft">*/
/*                                 <label><strong>Name</strong></label>*/
/*                                 <input type="text" name="name" value="" class="inputtext input_middle required">*/
/*                             </div>*/
/* */
/*                             <div class="space"></div>*/
/* */
/*                             <div class="row  alignleft">*/
/*                                 <label><strong>Email</strong> (never published)</label>*/
/*                                 <input type="text" name="email" value="" class="inputtext input_middle required">*/
/*                             </div>*/
/* */
/*                             <div class="clear"></div>   */
/* */
/*                             <div class="row">*/
/*                                 <label><strong>Website</strong></label>*/
/*                                 <input type="text" name="url" value="" class="inputtext input_full">*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <label><strong>Comment</strong></label>*/
/*                                 <textarea cols="30" rows="10" name="message" class="textarea textarea_middle required"></textarea>*/
/*                             </div>*/
/*                             <input type="submit" value="POSTS COMMENT" class="btn-submit">*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--/add comment --> */
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
/*                             <a href="{{asset ('post-details.html#comment-1') }}" class="comment-link">Going Cheap On Day Trips from Madrid, Spain</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Logan Finch</a></span> <span class="comment-date">23 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{asset ('post-details.html#comment-2') }}" class="comment-link">Surrendering to luxury in northern Italy - in Ravello</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Julia Styles</a></span> <span class="comment-date">45 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{asset ('post-details.html#comment-2') }}" class="comment-link">Barnsley - blooming marvellous!</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Keith Verhoeven</a></span> <span class="comment-date">45 min ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{asset ('post-details.html#comment-2') }}" class="comment-link">The Queen of all Temples in North Cambodgia - Siem Reap</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Rachel Simmons</a></span> <span class="comment-date">1 day ago</span></div>*/
/*                         </li>*/
/*                         <li class="recentcomments">*/
/*                             <a href="{{asset ('post-details.html#comment-2') }}" class="comment-link">Stunning Jiuzhaigou Nature Reserve in Sichuan, China</a> */
/*                             <div class="comment-meta"><span class="author">by <a href="#" rel="external nofollow" class="url">Julia Styles</a></span> <span class="comment-date">2 days ago</span></div>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <div class="text-center"><a href="{{path('pi_general_home') }}" class="btn btn_big">More Discussions</a></div>*/
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
/*                     <img src="{{asset ('images/temp/sidebar_facebook.jpg') }}" width="270" height="270" alt="">*/
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
