<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_3f613e7156c4ef10433626ea5db02d9a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 57)) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
<div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-theme ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 59, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\">
  <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
    <div id=\"close-nav\" class=\"close-nav w3-button w3-bar-block w3-large w3-theme ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 61, $this->source), "html", null, true);
            echo "\">
      <i class=\"fa fa-close\"></i>
    </div>
    ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
  </div>
</div>
<!-- End: Main Navigation - Vertical -->
";
        }
        // line 69
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null), 70, $this->source), "html", null, true);
        echo "\">

  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null), 73, $this->source), "html", null, true);
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
    <div id=\"header-inner\" class=\"w3-container header-inner ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 74, $this->source), "html", null, true);
        echo "\">
      ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 75)) {
            // line 76
            echo "      <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left w3-button w3-left-align w3-large w3-theme ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 76, $this->source), "html", null, true);
            echo "\">
        <i class=\"fa fa-bars\"></i>
      </div>
      ";
        }
        // line 80
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 80)) {
            // line 81
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 83
        echo "    </div>
  </header>
  <!-- End: Header -->

  ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 87)) {
            // line 88
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-theme ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 89, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"w3-row main-navigation-inner-h ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 90, $this->source), "html", null, true);
            echo "\">
      <div class=\"mobile-nav w3-hide-large w3-button w3-block w3-right-align w3-large w3-theme ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 91, $this->source), "html", null, true);
            echo "\">
        <i class=\"fa fa-bars\"></i>
      </div>
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 99
        echo "
  ";
        // line 100
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 100))) {
            // line 101
            echo "  <!-- Start: Welcome Text -->
  <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null), 102, $this->source), "html", null, true);
            echo "\">
    <div id=\"welcome-text-inner\" class=\"w3-row welcome-text-inner ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 103, $this->source), "html", null, true);
            echo "\">
      ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Welcome Text -->
  ";
        }
        // line 109
        echo "
  ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 110)) {
            // line 111
            echo "  <!-- Start: Highlighted -->
  <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null), 112, $this->source), "html", null, true);
            echo "\">
    <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 113, $this->source), "html", null, true);
            echo "\">
      ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Highlighted -->
  ";
        }
        // line 119
        echo "
  ";
        // line 120
        if (($context["is_front"] ?? null)) {
            // line 121
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 121) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 121)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 121))) {
                // line 122
                echo "  <!-- Start: Top Container -->
  <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 123
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null), 123, $this->source), "html", null, true);
                echo "\">
    <div id=\"top-container-inner\" class=\"w3-row-padding top-container-inner ";
                // line 124
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 124, $this->source), "html", null, true);
                echo "\">
      ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 125)) {
                    // line 126
                    echo "      <!-- Start: Top container first region -->
      <div class=\"";
                    // line 127
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 127, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\">
        <div class=\"d8-fade w3-mobile w3-theme-l5 ";
                    // line 128
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null), 128, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 129
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container First -->
      ";
                }
                // line 134
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 134)) {
                    // line 135
                    echo "      <!-- Start: Top Container Second  -->
      <div class=\"";
                    // line 136
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 136, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
        <div class=\"d8-fade w3-mobile w3-theme-l5 ";
                    // line 137
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null), 137, $this->source), "html", null, true);
                    echo "\">
         ";
                    // line 138
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Second -->
      ";
                }
                // line 143
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 143)) {
                    // line 144
                    echo "      <!-- Start: Top Container Third -->
      <div class=\"";
                    // line 145
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 145, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
        <div class=\"d8-fade w3-mobile w3-theme-l5 ";
                    // line 146
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null), 146, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 147
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Top Container Third -->
      ";
                }
                // line 152
                echo "    </div>
  </div>
  <!-- End: Top container -->
    ";
            }
            // line 156
            echo "  ";
        }
        // line 157
        echo "
  ";
        // line 158
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 158) &&  !($context["is_front"] ?? null))) {
            // line 159
            echo "  <!-- Start: Page Title -->
  <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null), 160, $this->source), "html", null, true);
            echo "\">
    <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 161, $this->source), "html", null, true);
            echo "\">
      ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Page Title -- >
  ";
        }
        // line 167
        echo "
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null), 169, $this->source), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-row main-container-inner ";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 170, $this->source), "html", null, true);
        echo "\">
      ";
        // line 171
        if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 171))))) {
            // line 172
            echo "      <!-- Breadcrumb -->
      <div class=\"w3-row w3-breadcrumb ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null), 173, $this->source), "html", null, true);
            echo "\">
        ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
      </div>
      <!-- End: Breadcrumb -->
      ";
        }
        // line 178
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 180
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 180)) {
            // line 181
            echo "        <!-- Start Left SideBar -->
        <div class =\"";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 182, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-first w3-mobile ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null), 183, $this->source), "html", null, true);
            echo "\">
            ";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Left SideBar -->
        ";
        }
        // line 189
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 189)) {
            // line 190
            echo "        <!-- Start: Main Content -->
        <div class=\"";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null), 191, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\" role=\"main\">
          <div class=\"d8-fade w3-mobile ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null), 192, $this->source), "html", null, true);
            echo "\">
            ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Main Content -->
        ";
        }
        // line 198
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 198)) {
            // line 199
            echo "        <!-- Start: Right SideBar -->
        <div class=\"";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 200, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\" role=\"complementary\">
          <div class=\"d8-fade w3-sidebar-second w3-mobile ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null), 201, $this->source), "html", null, true);
            echo "\">
            ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- End: Right SideBar -->
        ";
        }
        // line 207
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->

  ";
        // line 213
        if (($context["is_front"] ?? null)) {
            // line 214
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 214) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 214)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 214)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 214))) {
                // line 215
                echo "      <!-- Start: Bottom -->
  <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 216
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null), 216, $this->source), "html", null, true);
                echo "\">
    <div id=\"bottom-container-inner\" class=\"w3-row-padding bottom-container-inner ";
                // line 217
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 217, $this->source), "html", null, true);
                echo "\">
      ";
                // line 218
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 218)) {
                    // line 219
                    echo "      <!-- Start: Bottom First -->
      <div class=\"";
                    // line 220
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 220, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " first-bottom\">
        <div class=\"d8-fade w3-mobile w3-theme-l4 ";
                    // line 221
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null), 221, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 222
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom First -->
      ";
                }
                // line 227
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 227)) {
                    // line 228
                    echo "      <!-- Start: Bottom Second -->
      <div class=\"";
                    // line 229
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 229, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " second-bottom\">
        <div class=\"d8-fade w3-mobile w3-theme-l4 ";
                    // line 230
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null), 230, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 231
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Second -->
      ";
                }
                // line 236
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 236)) {
                    // line 237
                    echo "      <!-- Start: Bottom Third  -->
      <div class=\"";
                    // line 238
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 238, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " third-bottom\">
        <div class=\"d8-fade w3-mobile w3-theme-l4 ";
                    // line 239
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null), 239, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 240
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Third -->
      ";
                }
                // line 245
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 245)) {
                    // line 246
                    echo "      <!-- Start: Bottom Forth  -->
      <div class =\"";
                    // line 247
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 247, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " forth-bottom\">
        <div class=\"d8-fade w3-mobile w3-theme-l4 ";
                    // line 248
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null), 248, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 249
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
      <!-- End: Bottom Forth -->
      ";
                }
                // line 254
                echo "    </div>
  </div>
  <!-- End: Bottom -->
    ";
            }
            // line 258
            echo "  ";
        }
        // line 259
        echo "
  ";
        // line 260
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 260) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 260)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 260))) {
            // line 261
            echo "  <!-- start: Footer -->
  <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 262
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null), 262, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-container-inner\" class=\"w3-row-padding footer-container-inner ";
            // line 263
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 263, $this->source), "html", null, true);
            echo "\">

      ";
            // line 265
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 265)) {
                // line 266
                echo "      <!-- Start: Footer First  -->
      <div class=\"";
                // line 267
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 267, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " first-footer\">
        <div class=\"d8-fade w3-mobile w3-theme-l4 ";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null), 268, $this->source), "html", null, true);
                echo "\">
          ";
                // line 269
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      <!-- End: Footer First -->
      ";
            }
            // line 274
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 274)) {
                // line 275
                echo "      <!-- Start: Footer Second Region -->
      <div class=\"";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 276, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " second-footer\">
        <div class=\"d8-fade w3-mobile w3-theme-l5 ";
                // line 277
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null), 277, $this->source), "html", null, true);
                echo "\">
          ";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    <!-- End: Footer Second -->
      ";
            }
            // line 283
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 283)) {
                // line 284
                echo "      <!-- Start: Footer Third -->
      <div class=\"";
                // line 285
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 285, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " third-footer\">
        <div class=\"d8-fade w3-mobile w3-theme-l4 ";
                // line 286
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null), 286, $this->source), "html", null, true);
                echo "\">
          ";
                // line 287
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      <!-- End: Footer Third -->
      ";
            }
            // line 292
            echo "    </div>
  </div>
  <!-- End: Footer -->
  ";
        }
        // line 296
        echo "
  ";
        // line 297
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 297) || ($context["show_social_icon"] ?? null))) {
            // line 298
            echo "    <!-- Start: Footer Menu -->
  <div id=\"footer-menu\" class=\"w3-col w3-clear w3-theme-d4 ";
            // line 299
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null), 299, $this->source), "html", null, true);
            echo "\">
    <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 300
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 300, $this->source), "html", null, true);
            echo "\">
      ";
            // line 301
            if (($context["show_social_icon"] ?? null)) {
                // line 302
                echo "        <!-- Start: Social Media -->
      <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
        ";
                // line 304
                if (($context["facebook_url"] ?? null)) {
                    // line 305
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 305, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
        ";
                }
                // line 307
                echo "        ";
                if (($context["twitter_url"] ?? null)) {
                    // line 308
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 308, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
        ";
                }
                // line 310
                echo "        ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 311
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 311, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
        ";
                }
                // line 313
                echo "        ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 314
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 314, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
        ";
                }
                // line 316
                echo "        ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 317
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 317, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
        ";
                }
                // line 319
                echo "        ";
                if (($context["instagram_url"] ?? null)) {
                    // line 320
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 320, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
        ";
                }
                // line 322
                echo "        ";
                if (($context["youtube_url"] ?? null)) {
                    // line 323
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 323, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
        ";
                }
                // line 325
                echo "        ";
                if (($context["drupal_url"] ?? null)) {
                    // line 326
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null), 326, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
        ";
                }
                // line 328
                echo "        ";
                if (($context["rss_url"] ?? null)) {
                    // line 329
                    echo "        <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 329, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        ";
                }
                // line 331
                echo "      </div>
      <!-- End: Social Media -->
      ";
            }
            // line 334
            echo "      <!-- Start: Bottom Menu -->
      ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 335)) {
                // line 336
                echo "      <div class=\"d8-fade w3-container w3-center w3-mobile\">
        ";
                // line 337
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "
      </div>
      <!-- End: Bottom Menu -->
      ";
            }
            // line 341
            echo "    </div>
  </div>
  <!-- End: Footer Menu -->
  ";
        }
        // line 345
        echo "
  ";
        // line 346
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 347
            echo "  <!-- Start: Copyright -->
  <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 348
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null), 348, $this->source), "html", null, true);
            echo "\">
    <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 349
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 349, $this->source), "html", null, true);
            echo "\">
      ";
            // line 350
            if (($context["copyright_text"] ?? null)) {
                // line 351
                echo "      <!-- Start: Copyright -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 353, $this->source), "html", null, true);
                echo "</p>
      </div>
      <!-- End: Copyright -->
      ";
            }
            // line 357
            echo "      ";
            if (($context["show_credit_link"] ?? null)) {
                // line 358
                echo "      <!-- Start: Credit Link -->
      <div class=\"w3-half w3-container w3-mobile\">
        <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Developed &#38; Designed by <a href=\"https://www.alaahaddad.com\" title=\"Alaa Haddad\" target=\"_blank\">Alaa Haddad</a></p>
      </div>
      <!-- End: Credit Link -->
      ";
            }
            // line 364
            echo "    </div>
  </div>
  <!-- End: Copyright -->
  ";
        }
        // line 368
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  809 => 368,  803 => 364,  795 => 358,  792 => 357,  785 => 353,  781 => 351,  779 => 350,  775 => 349,  771 => 348,  768 => 347,  766 => 346,  763 => 345,  757 => 341,  750 => 337,  747 => 336,  745 => 335,  742 => 334,  737 => 331,  731 => 329,  728 => 328,  722 => 326,  719 => 325,  713 => 323,  710 => 322,  704 => 320,  701 => 319,  695 => 317,  692 => 316,  686 => 314,  683 => 313,  677 => 311,  674 => 310,  668 => 308,  665 => 307,  659 => 305,  657 => 304,  653 => 302,  651 => 301,  647 => 300,  643 => 299,  640 => 298,  638 => 297,  635 => 296,  629 => 292,  621 => 287,  617 => 286,  611 => 285,  608 => 284,  605 => 283,  597 => 278,  593 => 277,  587 => 276,  584 => 275,  581 => 274,  573 => 269,  569 => 268,  563 => 267,  560 => 266,  558 => 265,  553 => 263,  549 => 262,  546 => 261,  544 => 260,  541 => 259,  538 => 258,  532 => 254,  524 => 249,  520 => 248,  514 => 247,  511 => 246,  508 => 245,  500 => 240,  496 => 239,  490 => 238,  487 => 237,  484 => 236,  476 => 231,  472 => 230,  466 => 229,  463 => 228,  460 => 227,  452 => 222,  448 => 221,  442 => 220,  439 => 219,  437 => 218,  433 => 217,  429 => 216,  426 => 215,  423 => 214,  421 => 213,  413 => 207,  405 => 202,  401 => 201,  395 => 200,  392 => 199,  389 => 198,  381 => 193,  377 => 192,  371 => 191,  368 => 190,  365 => 189,  357 => 184,  353 => 183,  347 => 182,  344 => 181,  342 => 180,  338 => 178,  331 => 174,  327 => 173,  324 => 172,  322 => 171,  318 => 170,  314 => 169,  310 => 167,  302 => 162,  298 => 161,  294 => 160,  291 => 159,  289 => 158,  286 => 157,  283 => 156,  277 => 152,  269 => 147,  265 => 146,  259 => 145,  256 => 144,  253 => 143,  245 => 138,  241 => 137,  235 => 136,  232 => 135,  229 => 134,  221 => 129,  217 => 128,  211 => 127,  208 => 126,  206 => 125,  202 => 124,  198 => 123,  195 => 122,  192 => 121,  190 => 120,  187 => 119,  179 => 114,  175 => 113,  171 => 112,  168 => 111,  166 => 110,  163 => 109,  155 => 104,  151 => 103,  147 => 102,  144 => 101,  142 => 100,  139 => 99,  131 => 94,  125 => 91,  121 => 90,  115 => 89,  112 => 88,  110 => 87,  104 => 83,  98 => 81,  95 => 80,  87 => 76,  85 => 75,  81 => 74,  75 => 73,  69 => 70,  66 => 69,  58 => 64,  52 => 61,  45 => 59,  42 => 58,  39 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal-9.5.7\\themes\\contrib\\d8w3css\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 57);
        static $filters = array("escape" => 59, "t" => 59, "trim" => 171, "striptags" => 171, "render" => 171);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'trim', 'striptags', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
