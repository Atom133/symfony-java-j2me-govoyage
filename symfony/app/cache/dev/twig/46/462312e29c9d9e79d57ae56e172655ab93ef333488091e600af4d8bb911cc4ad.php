<?php

/* PiGeneralBundle:admin:graphs.html.twig */
class __TwigTemplate_d86476dabd28d92e049514e2ce92f7b90be61b486430bf97ad1a120ce9054318 extends Twig_Template
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
        // line 2
        echo "<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Graphs :: w3layouts</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/css1/bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/css1/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/css1/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<!-- jQuery -->
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/js1/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- chart -->
<script  src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/js1/Chart.js"), "html", null, true);
        echo "\"></script>
<!-- //chart -->
</head>
<body>
<div id=\"wrapper\">
     <!-- Navigation -->
        <nav class=\"top1 navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">page administrateur: Hey Sassou</a>
            </div>
            <!-- /.navbar-header -->
            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"dropdown\">
\t        \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-comments-o\"></i><span class=\"badge\">4</span></a>
\t        \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t<strong>Messages</strong>
\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t  <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
\t\t\t\t\t\t\t    <span class=\"sr-only\">40% Complete (success)</span>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"avatar\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/res.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div>New message</div>
\t\t\t\t\t\t\t\t<small>1 minute ago</small>
\t\t\t\t\t\t\t\t<span class=\"label label-info\">NEW</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"avatar\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/2.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div>New message</div>
\t\t\t\t\t\t\t\t<small>1 minute ago</small>
\t\t\t\t\t\t\t\t<span class=\"label label-info\">NEW</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"avatar\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/3.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div>New message</div>
\t\t\t\t\t\t\t\t<small>1 minute ago</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"avatar\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/4.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div>New message</div>
\t\t\t\t\t\t\t\t<small>1 minute ago</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"avatar\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/5.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div>New message</div>
\t\t\t\t\t\t\t\t<small>1 minute ago</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"avatar\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/pic1.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t<div>New message</div>
\t\t\t\t\t\t\t\t<small>1 minute ago</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown-menu-footer text-center\">
\t\t\t\t\t\t\t<a href=\"#\">View all messages</a>
\t\t\t\t\t\t</li>\t
\t        \t\t</ul>
\t      \t\t</li>
\t\t\t    <li class=\"dropdown\">
\t        \t\t<a href=\"#\" class=\"dropdown-toggle avatar\" data-toggle=\"dropdown\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/images1/res.jpg"), "html", null, true);
        echo "\" alt=\"\"/><span class=\"badge\">9</span></a>
\t        \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li class=\"dropdown-menu-header text-center\">
\t\t\t\t\t\t\t<strong>Account</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-bell-o\"></i> Updates <span class=\"label label-info\">42</span></a></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> Messages <span class=\"label label-success\">42</span></a></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-tasks\"></i> Tasks <span class=\"label label-danger\">42</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-comments\"></i> Comments <span class=\"label label-warning\">42</span></a></li>
\t\t\t\t\t\t<li class=\"dropdown-menu-header text-center\">
\t\t\t\t\t\t\t<strong>Settings</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-wrench\"></i> Settings</a></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-usd\"></i> Payments <span class=\"label label-default\">42</span></a></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-file\"></i> Projects <span class=\"label label-primary\">42</span></a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-shield\"></i> Lock Profile</a></li>
\t\t\t\t\t\t<li class=\"m_2\"><a href=\"#\"><i class=\"fa fa-lock\"></i> Logout</a></li>\t
\t        \t\t</ul>
\t      \t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"navbar-form navbar-right\">
              <input type=\"text\" class=\"form-control\" value=\"Search...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search...';}\">
            </form>
            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-laptop nav_icon\"></i>Layouts<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"guides.html\">Guides</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-indent nav_icon\"></i>Menu Levels<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"graphs.html\">Graphs</a>
                                </li>
                                <li>
                                    <a href=\"yypography.html\">Typography</a>   
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-envelope nav_icon\"></i>Mailbox<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"inbox.html\">Inbox</a>
                                </li>
                                <li>
                                    <a href=\"compose.html\">Compose email</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"widgets.html\"><i class=\"fa fa-flask nav_icon\"></i>Widgets</a>
                        </li>
                         <li>
                            <a href=\"#\"><i class=\"fa fa-check-square-o nav_icon\"></i>Forms<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"forms.html\">Basic Forms</a>
                                </li>
                                <li>
                                    <a href=\"validation.html\">Validation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-table nav_icon\"></i>Tables<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"basic_tables.html\">Basic Tables</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sitemap fa-fw nav_icon\"></i>Css<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"media.html\">Media</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id=\"page-wrapper\">
        <div class=\"graphs\">
\t    <div class=\"graph_box\">
\t\t\t<div class=\"col-md-4 grid_2\"><div class=\"grid_1\">
\t\t\t\t<h3>Circular</h3>
\t\t\t\t<canvas id=\"doughnut\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>
\t\t\t</div></div>
\t\t\t<div class=\"col-md-4 grid_2\"><div class=\"grid_1\">
\t\t\t\t<h3>Line</h3>
\t\t\t\t<canvas id=\"line\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>
\t\t\t</div></div>
\t\t\t<div class=\"col-md-4 grid_2\"><div class=\"grid_1\">
\t\t\t\t<h3>PolarArea</h3>
\t\t\t\t<canvas id=\"polarArea\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>
\t\t\t</div></div>
\t\t\t<div class=\"clearfix\"> </div>
\t    </div>
\t    <div class=\"graph_box1\">
\t\t\t<div class=\"col-md-4 grid_2\"><div class=\"grid_1\">
\t\t\t\t<h3>Bar</h3>
\t\t\t\t<canvas id=\"bar\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>
\t\t\t</div></div>
\t\t\t<div class=\"col-md-4 grid_2\"><div class=\"grid_1\">
\t\t\t\t<h3>Pie</h3>
\t\t\t\t<canvas id=\"pie\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>
\t\t\t</div></div>
\t\t\t<div class=\"col-md-4 grid_2\"><div class=\"grid_1\">
\t\t\t\t<h3>Radar</h3><canvas id=\"radar\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>
\t\t\t</div></div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
    <script>

\t\tvar doughnutData = [
\t\t\t\t{
\t\t\t\t\tvalue: 30,
\t\t\t\t\tcolor:\"#ef553a\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 50,
\t\t\t\t\tcolor : \"#9358ac\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 100,
\t\t\t\t\tcolor : \"#3b5998\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 40,
\t\t\t\t\tcolor : \"#00aced\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 120,
\t\t\t\t\tcolor : \"#4D5360\"
\t\t\t\t}
\t\t\t
\t\t\t];
\t\tvar lineChartData = {
\t\t\tlabels : [\"\",\"\",\"\",\"\",\"\",\"\",\"\"],
\t\t\tdatasets : [
\t\t\t\t{
\t\t\t\t\tfillColor : \"#00aced\",
\t\t\t\t\tstrokeColor : \"#00aced\",
\t\t\t\t\tpointColor : \"#00aced\",
\t\t\t\t\tpointStrokeColor : \"#fff\",
\t\t\t\t\tdata : [65,59,90,81,56,55,40]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfillColor : \"#3b5998\",
\t\t\t\t\tstrokeColor : \"#3b5998\",
\t\t\t\t\tpointColor : \"#3b5998\",
\t\t\t\t\tpointStrokeColor : \"#fff\",
\t\t\t\t\tdata : [28,48,40,19,96,27,100]
\t\t\t\t}
\t\t\t]
\t\t\t
\t\t};
\t\tvar pieData = [
\t\t\t\t{
\t\t\t\t\tvalue: 30,
\t\t\t\t\tcolor:\"#ef553a\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 50,
\t\t\t\t\tcolor : \"#00aced\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 100,
\t\t\t\t\tcolor : \"#69D2E7\"
\t\t\t\t}
\t\t\t
\t\t\t];
\t\tvar barChartData = {
\t\t\tlabels : [\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\"],
\t\t\tdatasets : [
\t\t\t\t{
\t\t\t\t\tfillColor : \"#ef553a\",
\t\t\t\t\tstrokeColor : \"#ef553a\",
\t\t\t\t\tdata : [65,59,90,81,56,55,40]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfillColor : \"#00aced\",
\t\t\t\t\tstrokeColor : \"#00aced\",
\t\t\t\t\tdata : [28,48,40,19,96,27,100]
\t\t\t\t}
\t\t\t]
\t\t\t
\t\t};
\tvar chartData = [
\t\t\t{
\t\t\t\tvalue : Math.random(),
\t\t\t\tcolor: \"#D97041\"
\t\t\t},
\t\t\t{
\t\t\t\tvalue : Math.random(),
\t\t\t\tcolor: \"#C7604C\"
\t\t\t},
\t\t\t{
\t\t\t\tvalue : Math.random(),
\t\t\t\tcolor: \"#21323D\"
\t\t\t},
\t\t\t{
\t\t\t\tvalue : Math.random(),
\t\t\t\tcolor: \"#9D9B7F\"
\t\t\t},
\t\t\t{
\t\t\t\tvalue : Math.random(),
\t\t\t\tcolor: \"#7D4F6D\"
\t\t\t},
\t\t\t{
\t\t\t\tvalue : Math.random(),
\t\t\t\tcolor: \"#9358ac\"
\t\t\t}
\t\t];
\t\tvar radarChartData = {
\t\t\tlabels : [\"\",\"\",\"\",\"\",\"\",\"\",\"\"],
\t\t\tdatasets : [
\t\t\t\t{
\t\t\t\t\tfillColor : \"#3b5998\",
\t\t\t\t\tstrokeColor : \"#3b5998\",
\t\t\t\t\tpointColor : \"#3b5998\",
\t\t\t\t\tpointStrokeColor : \"#fff\",
\t\t\t\t\tdata : [65,59,90,81,56,55,40]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfillColor : \"#ef553a\",
\t\t\t\t\tstrokeColor : \"#ef553a\",
\t\t\t\t\tpointColor : \"#ef553a\",
\t\t\t\t\tpointStrokeColor : \"#fff\",
\t\t\t\t\tdata : [28,48,40,19,96,27,100]
\t\t\t\t}
\t\t\t]
\t\t\t
\t\t};
\tnew Chart(document.getElementById(\"doughnut\").getContext(\"2d\")).Doughnut(doughnutData);
\tnew Chart(document.getElementById(\"line\").getContext(\"2d\")).Line(lineChartData);
\tnew Chart(document.getElementById(\"radar\").getContext(\"2d\")).Radar(radarChartData);
\tnew Chart(document.getElementById(\"polarArea\").getContext(\"2d\")).PolarArea(chartData);
\tnew Chart(document.getElementById(\"bar\").getContext(\"2d\")).Bar(barChartData);
\tnew Chart(document.getElementById(\"pie\").getContext(\"2d\")).Pie(pieData);
\t
\t</script>
\t<div class=\"copy_layout\">
         <p>Copyright © 2016- Modern. All Rights Reserved | Design by <a href=\"http://fsociety.com/\" target=\"_blank\">fsociety</a> </p>
        </div>\t
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
<link href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/css1/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/js1/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/js1/custom.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PiGeneral/js1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "PiGeneralBundle:admin:graphs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 379,  438 => 377,  434 => 376,  429 => 374,  152 => 100,  138 => 89,  128 => 82,  118 => 75,  108 => 68,  97 => 60,  86 => 52,  52 => 21,  44 => 16,  39 => 14,  35 => 13,  30 => 11,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <html>*/
/* <head>*/
/* <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Graphs :: w3layouts</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*  <!-- Bootstrap Core CSS -->*/
/* <link  href="{{asset('bundles/PiGeneral/css1/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />*/
/* <!-- Custom CSS -->*/
/* <link href="{{asset('bundles/PiGeneral/css1/style.css')}}" rel='stylesheet' type='text/css' />*/
/* <link href="{{asset('bundles/PiGeneral/css1/font-awesome.css')}}" rel="stylesheet"> */
/* <!-- jQuery -->*/
/* <script src="{{asset('bundles/PiGeneral/js1/jquery.min.js')}}"></script>*/
/* <!----webfonts--->*/
/* <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>*/
/* <!---//webfonts--->  */
/* <!-- chart -->*/
/* <script  src="{{asset('bundles/PiGeneral/js1/Chart.js')}}"></script>*/
/* <!-- //chart -->*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*      <!-- Navigation -->*/
/*         <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">page administrateur: Hey Sassou</a>*/
/*             </div>*/
/*             <!-- /.navbar-header -->*/
/*             <ul class="nav navbar-nav navbar-right">*/
/* 				<li class="dropdown">*/
/* 	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>*/
/* 	        		<ul class="dropdown-menu">*/
/* 						<li class="dropdown-menu-header">*/
/* 							<strong>Messages</strong>*/
/* 							<div class="progress thin">*/
/* 							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/* 							    <span class="sr-only">40% Complete (success)</span>*/
/* 							  </div>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="avatar">*/
/* 							<a href="#">*/
/* 								<img src="{{asset('bundles/PiGeneral/images1/res.jpg')}}" alt=""/>*/
/* 								<div>New message</div>*/
/* 								<small>1 minute ago</small>*/
/* 								<span class="label label-info">NEW</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="avatar">*/
/* 							<a href="#">*/
/* 								<img src="{{asset('bundles/PiGeneral/images1/2.png')}}" alt=""/>*/
/* 								<div>New message</div>*/
/* 								<small>1 minute ago</small>*/
/* 								<span class="label label-info">NEW</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="avatar">*/
/* 							<a href="#">*/
/* 								<img src="{{asset('bundles/PiGeneral/images1/3.png')}}" alt=""/>*/
/* 								<div>New message</div>*/
/* 								<small>1 minute ago</small>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="avatar">*/
/* 							<a href="#">*/
/* 								<img src="{{asset('bundles/PiGeneral/images1/4.png')}}" alt=""/>*/
/* 								<div>New message</div>*/
/* 								<small>1 minute ago</small>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="avatar">*/
/* 							<a href="#">*/
/* 								<img src="{{asset('bundles/PiGeneral/images1/5.png')}}" alt=""/>*/
/* 								<div>New message</div>*/
/* 								<small>1 minute ago</small>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="avatar">*/
/* 							<a href="#">*/
/* 								<img src="{{asset('bundles/PiGeneral/images1/pic1.png')}}" alt=""/>*/
/* 								<div>New message</div>*/
/* 								<small>1 minute ago</small>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="dropdown-menu-footer text-center">*/
/* 							<a href="#">View all messages</a>*/
/* 						</li>	*/
/* 	        		</ul>*/
/* 	      		</li>*/
/* 			    <li class="dropdown">*/
/* 	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{asset('bundles/PiGeneral/images1/res.jpg')}}" alt=""/><span class="badge">9</span></a>*/
/* 	        		<ul class="dropdown-menu">*/
/* 						<li class="dropdown-menu-header text-center">*/
/* 							<strong>Account</strong>*/
/* 						</li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>*/
/* 						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>*/
/* 						<li class="dropdown-menu-header text-center">*/
/* 							<strong>Settings</strong>*/
/* 						</li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>*/
/* 						<li class="divider"></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>*/
/* 						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	*/
/* 	        		</ul>*/
/* 	      		</li>*/
/* 			</ul>*/
/* 			<form class="navbar-form navbar-right">*/
/*               <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">*/
/*             </form>*/
/*             <div class="navbar-default sidebar" role="navigation">*/
/*                 <div class="sidebar-nav navbar-collapse">*/
/*                     <ul class="nav" id="side-menu">*/
/*                         <li>*/
/*                             <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="guides.html">Guides</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="graphs.html">Graphs</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="yypography.html">Typography</a>   */
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="inbox.html">Inbox</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="compose.html">Compose email</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>*/
/*                         </li>*/
/*                          <li>*/
/*                             <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="forms.html">Basic Forms</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="validation.html">Validation</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="basic_tables.html">Basic Tables</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="media.html">Media</a>*/
/*                                 </li>*/
/*                                */
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.sidebar-collapse -->*/
/*             </div>*/
/*             <!-- /.navbar-static-side -->*/
/*         </nav>*/
/*         <div id="page-wrapper">*/
/*         <div class="graphs">*/
/* 	    <div class="graph_box">*/
/* 			<div class="col-md-4 grid_2"><div class="grid_1">*/
/* 				<h3>Circular</h3>*/
/* 				<canvas id="doughnut" height="300" width="400" style="width: 400px; height: 300px;"></canvas>*/
/* 			</div></div>*/
/* 			<div class="col-md-4 grid_2"><div class="grid_1">*/
/* 				<h3>Line</h3>*/
/* 				<canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"></canvas>*/
/* 			</div></div>*/
/* 			<div class="col-md-4 grid_2"><div class="grid_1">*/
/* 				<h3>PolarArea</h3>*/
/* 				<canvas id="polarArea" height="300" width="400" style="width: 400px; height: 300px;"></canvas>*/
/* 			</div></div>*/
/* 			<div class="clearfix"> </div>*/
/* 	    </div>*/
/* 	    <div class="graph_box1">*/
/* 			<div class="col-md-4 grid_2"><div class="grid_1">*/
/* 				<h3>Bar</h3>*/
/* 				<canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>*/
/* 			</div></div>*/
/* 			<div class="col-md-4 grid_2"><div class="grid_1">*/
/* 				<h3>Pie</h3>*/
/* 				<canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>*/
/* 			</div></div>*/
/* 			<div class="col-md-4 grid_2"><div class="grid_1">*/
/* 				<h3>Radar</h3><canvas id="radar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>*/
/* 			</div></div>*/
/* 			<div class="clearfix"> </div>*/
/* 		</div>*/
/*     <script>*/
/* */
/* 		var doughnutData = [*/
/* 				{*/
/* 					value: 30,*/
/* 					color:"#ef553a"*/
/* 				},*/
/* 				{*/
/* 					value : 50,*/
/* 					color : "#9358ac"*/
/* 				},*/
/* 				{*/
/* 					value : 100,*/
/* 					color : "#3b5998"*/
/* 				},*/
/* 				{*/
/* 					value : 40,*/
/* 					color : "#00aced"*/
/* 				},*/
/* 				{*/
/* 					value : 120,*/
/* 					color : "#4D5360"*/
/* 				}*/
/* 			*/
/* 			];*/
/* 		var lineChartData = {*/
/* 			labels : ["","","","","","",""],*/
/* 			datasets : [*/
/* 				{*/
/* 					fillColor : "#00aced",*/
/* 					strokeColor : "#00aced",*/
/* 					pointColor : "#00aced",*/
/* 					pointStrokeColor : "#fff",*/
/* 					data : [65,59,90,81,56,55,40]*/
/* 				},*/
/* 				{*/
/* 					fillColor : "#3b5998",*/
/* 					strokeColor : "#3b5998",*/
/* 					pointColor : "#3b5998",*/
/* 					pointStrokeColor : "#fff",*/
/* 					data : [28,48,40,19,96,27,100]*/
/* 				}*/
/* 			]*/
/* 			*/
/* 		};*/
/* 		var pieData = [*/
/* 				{*/
/* 					value: 30,*/
/* 					color:"#ef553a"*/
/* 				},*/
/* 				{*/
/* 					value : 50,*/
/* 					color : "#00aced"*/
/* 				},*/
/* 				{*/
/* 					value : 100,*/
/* 					color : "#69D2E7"*/
/* 				}*/
/* 			*/
/* 			];*/
/* 		var barChartData = {*/
/* 			labels : ["January","February","March","April","May","June","July"],*/
/* 			datasets : [*/
/* 				{*/
/* 					fillColor : "#ef553a",*/
/* 					strokeColor : "#ef553a",*/
/* 					data : [65,59,90,81,56,55,40]*/
/* 				},*/
/* 				{*/
/* 					fillColor : "#00aced",*/
/* 					strokeColor : "#00aced",*/
/* 					data : [28,48,40,19,96,27,100]*/
/* 				}*/
/* 			]*/
/* 			*/
/* 		};*/
/* 	var chartData = [*/
/* 			{*/
/* 				value : Math.random(),*/
/* 				color: "#D97041"*/
/* 			},*/
/* 			{*/
/* 				value : Math.random(),*/
/* 				color: "#C7604C"*/
/* 			},*/
/* 			{*/
/* 				value : Math.random(),*/
/* 				color: "#21323D"*/
/* 			},*/
/* 			{*/
/* 				value : Math.random(),*/
/* 				color: "#9D9B7F"*/
/* 			},*/
/* 			{*/
/* 				value : Math.random(),*/
/* 				color: "#7D4F6D"*/
/* 			},*/
/* 			{*/
/* 				value : Math.random(),*/
/* 				color: "#9358ac"*/
/* 			}*/
/* 		];*/
/* 		var radarChartData = {*/
/* 			labels : ["","","","","","",""],*/
/* 			datasets : [*/
/* 				{*/
/* 					fillColor : "#3b5998",*/
/* 					strokeColor : "#3b5998",*/
/* 					pointColor : "#3b5998",*/
/* 					pointStrokeColor : "#fff",*/
/* 					data : [65,59,90,81,56,55,40]*/
/* 				},*/
/* 				{*/
/* 					fillColor : "#ef553a",*/
/* 					strokeColor : "#ef553a",*/
/* 					pointColor : "#ef553a",*/
/* 					pointStrokeColor : "#fff",*/
/* 					data : [28,48,40,19,96,27,100]*/
/* 				}*/
/* 			]*/
/* 			*/
/* 		};*/
/* 	new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);*/
/* 	new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);*/
/* 	new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);*/
/* 	new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);*/
/* 	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);*/
/* 	new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);*/
/* 	*/
/* 	</script>*/
/* 	<div class="copy_layout">*/
/*          <p>Copyright © 2016- Modern. All Rights Reserved | Design by <a href="http://fsociety.com/" target="_blank">fsociety</a> </p>*/
/*         </div>	*/
/*    </div>*/
/*       </div>*/
/*       <!-- /#page-wrapper -->*/
/*    </div>*/
/*     <!-- /#wrapper -->*/
/*     <!-- Nav CSS -->*/
/* <link href="{{asset('bundles/PiGeneral/css1/custom.css')}}" rel="stylesheet">*/
/* <!-- Metis Menu Plugin JavaScript -->*/
/* <script src="{{asset('bundles/PiGeneral/js1/metisMenu.min.js')}}"></script>*/
/* <script src="{{asset('bundles/PiGeneral/js1/custom.js')}}"></script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{asset('bundles/PiGeneral/js1/bootstrap.min.js')}}"></script>*/
/* </body>*/
/* </html>*/
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
