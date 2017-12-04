<?php

/* PiGeneralBundle:Default:contact_us.html.twig */
class __TwigTemplate_48cdd7e12b5f5faaf60c774a628267b34a35db6584c456152c91a4d095192f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:contact_us.html.twig", 1);
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
        echo "<title>GoVoyage | Contact_us</title>";
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
                    <form action=\"#\" method=\"post\" class=\"form_search\">

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
                <p><a href=\"index.html\">Homepage</a> <span class=\"separator\">&gt;</span> <a href=\"about.html\">About us</a> <span class=\"separator\">&gt;</span> <span>Contact us</span></p>
            </div>
            <!--/ breadcrumbs -->

            <!-- content -->
            <div class=\"content\">

                <!-- post details -->
                <div class=\"post-detail\">
                    <h1>Write us a message:</h1>

                    <div class=\"entry\">
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis.</p>
                    </div>            


                </div>
                <!--/ post details -->

                <!-- contact form -->
                <div class=\"add-comment contact-form\">

                    <div class=\"add-comment-title\">
                        <h3>Leave a COMMENT</h3>
                    </div>

                    <div class=\"comment-form\">
                        <form action=\"#\" method=\"post\" id=\"commentForm\" class=\"ajax_form\">

                            <div class=\"row alignleft\">
                                <label><strong>Name</strong></label>
                                <input type=\"text\" name=\"yourname\" id=\"name\" value=\"\" class=\"inputtext input_middle required\">
                            </div>

                            <div class=\"space\"></div>

                            <div class=\"row  alignleft\">
                                <label><strong>Email</strong> (never published)</label>
                                <input type=\"text\" id=\"email\" name=\"email\" value=\"\" class=\"inputtext input_middle required\">
                            </div>

                            <div class=\"clear\"></div>

                            <div class=\"row\">
                                <label><strong>Website</strong></label>
                                <input type=\"text\" name=\"url\" id=\"url\" value=\"\" class=\"inputtext input_full\">
                            </div>

                            <div class=\"row\">
                                <label><strong>Comment</strong></label>
                                <textarea cols=\"30\" rows=\"10\" name=\"message\" class=\"textarea textarea_middle required\"></textarea>
                            </div>

                            <div class=\"row rowSubmit\">
                                <input type=\"submit\" id=\"send\" value=\"Send Message\" class=\"btn-submit\">                     
                                <a onclick=\"document.getElementById('commentForm').reset();
                                        return false\" href=\"#\" class=\"link-reset\">Reset all fields</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ contact form -->

            </div>
            <!--/ content -->

            <!-- sidebar -->
            <div class=\"sidebar\">

                <!-- widget_contact -->
                <div class=\"widget-container widget_contact\">   
                    <div class=\"inner\">   

                        <div class=\"contact-address\">
                            <div class=\"name\"><strong>Travel Agency LTD</strong></div>
                            <div class=\"address\">21 Sunset Blvd. New York, NY</div>
                            <div class=\"phone\"><em>Phone:</em> <span>555-522.326</span></div>
                            <div class=\"fax\"><em>Fax:</em> <span>555-345.285</span></div>
                            <div class=\"mail\"><em>Email:</em> <a href=\"";
        // line 142
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

                <div class=\"contact-map\">
                    <img src=\"";
        // line 157
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

    public function getTemplateName()
    {
        return "PiGeneralBundle:Default:contact_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 157,  177 => 142,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}<title>GoVoyage | Contact_us</title>{% endblock %}*/
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
/*                     <form action="#" method="post" class="form_search">*/
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
/*                 <p><a href="index.html">Homepage</a> <span class="separator">&gt;</span> <a href="about.html">About us</a> <span class="separator">&gt;</span> <span>Contact us</span></p>*/
/*             </div>*/
/*             <!--/ breadcrumbs -->*/
/* */
/*             <!-- content -->*/
/*             <div class="content">*/
/* */
/*                 <!-- post details -->*/
/*                 <div class="post-detail">*/
/*                     <h1>Write us a message:</h1>*/
/* */
/*                     <div class="entry">*/
/*                         <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis.</p>*/
/*                     </div>            */
/* */
/* */
/*                 </div>*/
/*                 <!--/ post details -->*/
/* */
/*                 <!-- contact form -->*/
/*                 <div class="add-comment contact-form">*/
/* */
/*                     <div class="add-comment-title">*/
/*                         <h3>Leave a COMMENT</h3>*/
/*                     </div>*/
/* */
/*                     <div class="comment-form">*/
/*                         <form action="#" method="post" id="commentForm" class="ajax_form">*/
/* */
/*                             <div class="row alignleft">*/
/*                                 <label><strong>Name</strong></label>*/
/*                                 <input type="text" name="yourname" id="name" value="" class="inputtext input_middle required">*/
/*                             </div>*/
/* */
/*                             <div class="space"></div>*/
/* */
/*                             <div class="row  alignleft">*/
/*                                 <label><strong>Email</strong> (never published)</label>*/
/*                                 <input type="text" id="email" name="email" value="" class="inputtext input_middle required">*/
/*                             </div>*/
/* */
/*                             <div class="clear"></div>*/
/* */
/*                             <div class="row">*/
/*                                 <label><strong>Website</strong></label>*/
/*                                 <input type="text" name="url" id="url" value="" class="inputtext input_full">*/
/*                             </div>*/
/* */
/*                             <div class="row">*/
/*                                 <label><strong>Comment</strong></label>*/
/*                                 <textarea cols="30" rows="10" name="message" class="textarea textarea_middle required"></textarea>*/
/*                             </div>*/
/* */
/*                             <div class="row rowSubmit">*/
/*                                 <input type="submit" id="send" value="Send Message" class="btn-submit">                     */
/*                                 <a onclick="document.getElementById('commentForm').reset();*/
/*                                         return false" href="#" class="link-reset">Reset all fields</a>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--/ contact form -->*/
/* */
/*             </div>*/
/*             <!--/ content -->*/
/* */
/*             <!-- sidebar -->*/
/*             <div class="sidebar">*/
/* */
/*                 <!-- widget_contact -->*/
/*                 <div class="widget-container widget_contact">   */
/*                     <div class="inner">   */
/* */
/*                         <div class="contact-address">*/
/*                             <div class="name"><strong>Travel Agency LTD</strong></div>*/
/*                             <div class="address">21 Sunset Blvd. New York, NY</div>*/
/*                             <div class="phone"><em>Phone:</em> <span>555-522.326</span></div>*/
/*                             <div class="fax"><em>Fax:</em> <span>555-345.285</span></div>*/
/*                             <div class="mail"><em>Email:</em> <a href="{{ asset('mailto:contact@travelagency.com') }}">contact@travelagency.com</a></div>*/
/*                         </div>*/
/* */
/*                         <div class="contact-social">*/
/*                             <div><strong>Call us:</strong> <br> <a href="#" class="btn btn_skype">Skype</a></div>*/
/*                             <div><strong>Follow us:</strong> <br> <a href="#" class="btn btn_twitter">Twitter</a></div>*/
/*                             <div><strong>Join us:</strong> <br> <a href="#" class="btn btn_fb">Facebook</a></div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/* */
/*                     </div>     */
/*                 </div>*/
/*                 <!--/ widget_contact -->*/
/* */
/*                 <div class="contact-map">*/
/*                     <img src="{{ asset('images/temp/map.gif') }}" alt="">*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <!--/ sidebar -->*/
/* */
/*             <div class="clear"></div>        */
/*         </div>*/
/*     </div>*/
/*     <!--/ middle -->*/
/* {% endblock %}    */
