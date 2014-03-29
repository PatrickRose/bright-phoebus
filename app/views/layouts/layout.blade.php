<!doctype html>
<html>
<head>
    {{ Bootstrapper\Helpers::get_CSS() }}
    <title>@yield('title') - Bright Phoebus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    {{ HTML::style('app.css') }}
</head>
<body data-spy="scroll" data-target=".subnav">

<div class='container'>

    @yield('content')

    <footer class="footer">
        <p class="pull-right">
            <a href="#">Back to top</a>
        </p>
        <p>
            Designed and built by Patrick Rose <a href="http://twitter.com/DrugCrazed" target="_blank">@DrugCrazed</a>.
        </p>
    </footer>
</div>
{{ Bootstrapper\Helpers::get_JS() }}
</body>
</html>
