<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>@yield('title')</title>
</head>

<body>
    </div>
    <section class="hero is-primary is-fullheight-with-navbar">

        <div class="hero-body">
            <div class="container has-text-centered">
                @yield('content')
            </div>
        </div>
    </section>

    <footer class="hero-foot container is-flex is-justify-content-center is-align-items-center">
        <p style="padding-top: 10px;">Todos os direitos reservados &copy;Copyright</p>
    </footer>
</body>

</html>