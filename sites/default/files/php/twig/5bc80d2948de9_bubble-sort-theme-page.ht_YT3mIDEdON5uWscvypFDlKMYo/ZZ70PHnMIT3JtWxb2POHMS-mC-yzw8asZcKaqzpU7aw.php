<?php

/* modules/Bubble-Sort-Module/templates/bubble-sort-theme-page.html.twig */
class __TwigTemplate_d5461e2c90841be3da2d7dfdd50eab0cdb5b8e88fbe14e8b03a17f3ebc2f1a8b extends Twig_Template
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
        $tags = array("trans" => 90);
        $filters = array();
        $functions = array("attach_library" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
<link href=\"https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css\" rel=stylesheet>

";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bubble_sort_module/bubble-sort-library"), "html", null, true));
        echo "

<script>

</script>

<section>

    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"alert alert-success text-center\" role=\"alert\">
                <strong id=\"message\">SORT</strong>
            </div>
            <div class=\"well well-sm\" id=\"sorting-algorithm\">
                <img
                  style=\"height: 400px; width: 100%\"
                  src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Bubblesort-edited-color.svg/1200px-Bubblesort-edited-color.svg.png\" class=\"thumbnail\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"well well-sm\">
                <div class=\"alert alert-success text-center\" role=\"alert\">
                    <strong>Initialize Vector</strong>
                </div>
                <div id=\"initialize-array\" class=\"list-group\" style=\"overflow-y: scroll; min-height: 400px; max-height: 400px\">
                    Click shuffle
                </div>
            </div>
        </div>
    </div>

    <form name=\"form-sort\">

        <div class=\"well well-sm clearfix col-md-5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <h3>Range of integers</h3>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"\">Min</label>
                  <input type=\"number\" name=\"range-min\" class=\"form-control\" id=\"range-min\" placeholder=\"range min\">
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"\">Max</label>
                  <input type=\"number\" name=\"range-max\" class=\"form-control\" id=\"range-max\" placeholder=\"range max\">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-md-2\"></div>

        <div class=\"well well-sm clearfix col-md-5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <h3>Vector: number of integers</h3>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"\">Max number array</label>
                  <input type=\"number\" name=\"max-number\" class=\"form-control\" id=\"max-number\" placeholder=\"max number array\">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-md-12 text-center\">
            <button type=\"button\" class=\"btn btn-primary btn-lg shuffle-btn\">
                <span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span> Shuffle
            </button>
            <button type=\"button\" class=\"btn btn-warning btn-lg step-btn\">
                <span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span> Step
            </button>
            <button type=\"button\" class=\"btn btn-success btn-lg play-btn\">
                <span class=\"glyphicon glyphicon-play\" aria-hidden=\"true\"></span> Play
            </button>
            <button type=\"button\" class=\"btn btn-danger btn-lg reset-btn\">
                <span class=\"glyphicon glyphicon-stop\" aria-hidden=\"true\"></span> Reset
            </button>
        </div>

    </form>

  ";
        // line 90
        echo t("", array());
        // line 93
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/Bubble-Sort-Module/templates/bubble-sort-theme-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 93,  137 => 90,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/Bubble-Sort-Module/templates/bubble-sort-theme-page.html.twig", "/var/www/html/drupal8/modules/Bubble-Sort-Module/templates/bubble-sort-theme-page.html.twig");
    }
}
