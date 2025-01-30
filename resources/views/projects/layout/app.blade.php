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
    <header class="container hero-head">
        <nav class="navbar-end">
            @auth
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar navbar-link is-link">
                    {{ Auth::user()->name }}
                </a>

                <div class="navbar navbar-dropdown is-link">
                    <a class="navbar-item">{{ Auth::user()->email }}</a>
                    <a class="navbar-item is-link" href="{{ route('profile.edit') }}">
                        Editar {{ __('Profile') }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="navbar-item is-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
            @endauth
        </nav>
    </header>
    <section class="hero is-primary is-fullheight-with-navbar">

        <div class="hero-body">
            <div class="container is-flex is-flex-direction-column has-text-centered">
                @yield('content')
            </div>
        </div>
    </section>

    <footer class="hero-foot container is-flex is-justify-content-center is-align-items-center">
        <p style="padding-top: 10px;">Todos os direitos reservados &copy;Copyright</p>
    </footer>
</body>

</html>