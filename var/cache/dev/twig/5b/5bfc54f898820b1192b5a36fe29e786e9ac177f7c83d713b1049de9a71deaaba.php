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

/* produto/show.html.twig */
class __TwigTemplate_1127c62fe941ceb49bf62283391759c00e07124df0f139fab55455ba7e7a7d83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produto/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produto/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"card\">

        <div class=\"card-header\">
            <h5>Produto</h5>
        </div>

        <div class=\"card-body\">

            <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 22, $this->source); })()), "descricao", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Categoria</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 26, $this->source); })()), "categoria", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Unidade</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 30, $this->source); })()), "unidade", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Preço</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 34, $this->source); })()), "preco", [], "any", false, false, false, 34), 2, ",", "."), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=\"card-footer\">
            <div class=\"form-row\">
                <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produto_index");
        echo "\">Voltar</a>
                <a class=\"btn btn-sm btn-warning mr-2 ml-2\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produto_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new RuntimeError('Variable "produto" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">Alterar</a>
                ";
        // line 44
        echo twig_include($this->env, $context, "produto/_delete_form.html.twig");
        echo "
            </div>
        <div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 44,  145 => 43,  141 => 42,  130 => 34,  123 => 30,  116 => 26,  109 => 22,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produto{% endblock %}

{% block body %}
    <div class=\"card\">

        <div class=\"card-header\">
            <h5>Produto</h5>
        </div>

        <div class=\"card-body\">

            <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ produto.id }}</td>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <td>{{ produto.descricao }}</td>
                    </tr>
                    <tr>
                        <th>Categoria</th>
                        <td>{{ produto.categoria }}</td>
                    </tr>
                    <tr>
                        <th>Unidade</th>
                        <td>{{ produto.unidade }}</td>
                    </tr>
                    <tr>
                        <th>Preço</th>
                        <td>{{ produto.preco|number_format(2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=\"card-footer\">
            <div class=\"form-row\">
                <a class=\"btn btn-sm btn-primary\" href=\"{{ path('produto_index') }}\">Voltar</a>
                <a class=\"btn btn-sm btn-warning mr-2 ml-2\" href=\"{{ path('produto_edit', {'id': produto.id}) }}\">Alterar</a>
                {{ include('produto/_delete_form.html.twig') }}
            </div>
        <div>
{% endblock %}
", "produto/show.html.twig", "C:\\wamp64\\www\\estoque\\templates\\produto\\show.html.twig");
    }
}
