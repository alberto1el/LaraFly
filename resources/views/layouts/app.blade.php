<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="layout-pf layout-pf-fixed">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>

    <!--<link href="/css/app.css" rel="stylesheet" type="text/css">-->
    <link href="/css/patternfly.min.css" rel="stylesheet" type="text/css">
    <link href="/css/patternfly-additions.min.css" rel="stylesheet" type="text/css">
    <!--<link href="/css/so2platform/styles.css" rel="stylesheet" type="text/css">-->
</head>
<body>
    <nav class="navbar navbar-pf-vertical">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                <img class="navbar-brand-icon" src="/img/logo-alt.svg" alt=""/>
                <img class="navbar-brand-name" src="/img/brand-alt.svg" alt="PatternFly Enterprise Application" />
            </a>
        </div>
        <nav class="collapse navbar-collapse">
            {{--<ul class="nav navbar-nav">
                <li>
                    <a href="#" target="_blank" class="nav-item-iconic nav-item-iconic-new-window"><span title="Launch" class="fa fa-external-link"></span></a>
                </li>
            </ul>--}}
            <ul class="nav navbar-nav navbar-right navbar-iconic">
                <li>
                    <a href="#">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-item-iconic" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span title="Notifications" class="fa pficon-flag"></span>
                        <span class="badge">2</span>
                    </a>
                    <div class="dropdown-menu infotip bottom-right">
                        <div class="arrow"></div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="i pficon pficon-info"></span> Modified Datasources ExampleDS
                            </li>
                            <li class="list-group-item">
                                <span class="i pficon pficon-info"></span> Error: System Failure
                            </li>
                        </ul>
                        <div class="footer">
                            <a>Clear Messages</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span title="Help" class="fa pficon-help"></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span title="Username" class="fa pficon-user"></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="#">{{ Auth::user()->name }} (settings)</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>
    </nav> <!--/.navbar-->

    <div class="nav-pf-vertical nav-pf-vertical-with-sub-menus">

        <ul class="list-group">
            <li class="list-group-item active">
                <a>
                    <span class="fa fa-dashboard" data-toggle="tooltip" title="Dashboard"></span>
                    <span class="list-group-item-value">Dashboard</span>
                </a>
            </li>
            <li class="list-group-item">
                <a>
                    <span class="fa fa-shield" data-toggle="tooltip" title="Dolor"></span>
                    <span class="list-group-item-value">Dolor</span>

                </a>
            </li>
            <li class="list-group-item secondary-nav-item-pf" data-target="#ipsum-secondary">
                <a>
                    <span class="fa fa-space-shuttle" data-toggle="tooltip" title="Ipsum"></span>
                    <span class="list-group-item-value">Ipsum</span>
                </a>

                <div id="ipsum-secondary" class="nav-pf-secondary-nav">
                    <div class="nav-item-pf-header">
                        <a class="secondary-collapse-toggle-pf" data-toggle="collapse-secondary-nav"></a>
                        <span>Ipsum</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item active " data-target="#ipsum-intellegam-tertiary">
                            <a>
                                <span class="list-group-item-value">Intellegam</span>
                            </a>
                        </li>
                        <li class="list-group-item " data-target="#ipsum-copiosae-tertiary">
                            <a>
                                <span class="list-group-item-value">Copiosae</span>
                            </a>
                        </li>
                        <li class="list-group-item " data-target="#ipsum-patrioque-tertiary">
                            <a>
                                <span class="list-group-item-value">Patrioque</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item secondary-nav-item-pf" data-target="#amet-secondary">
                <a>
                    <span class="fa fa-paper-plane" data-toggle="tooltip" title="Amet"></span>
                    <span class="list-group-item-value">Amet</span>
                </a>
                <div id="amet-secondary" class="nav-pf-secondary-nav">
                    <div class="nav-item-pf-header">
                        <a class="secondary-collapse-toggle-pf" data-toggle="collapse-secondary-nav"></a>
                        <span>Amet</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item " data-target="#amet-detracto-tertiary">
                            <a>
                                <span class="list-group-item-value">Detracto Suscipiantur</span>
                            </a>
                        </li>
                        <li class="list-group-item " data-target="#amet-mediocrem-tertiary">
                            <a>
                                <span class="list-group-item-value">Mediocrem</span>
                            </a>
                        </li>
                        <li class="list-group-item " data-target="#amet-corrumpit-tertiary">
                            <a>
                                <span class="list-group-item-value">Corrumpit Cupidatat Proident Deserunt</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item">
                <a>
                    <span class="fa fa-graduation-cap" data-toggle="tooltip" title="Adipscing"></span>
                    <span class="list-group-item-value">Adipscing</span>
                </a>
            </li>
            <li class="list-group-item">
                <a>
                    <span class="fa fa-gamepad" data-toggle="tooltip" title="Lorem"></span>
                    <span class="list-group-item-value">Lorem</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid container-cards-pf container-pf-nav-pf-vertical" id="app">

        <div class="row row-cards-pf">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script>
        window.Laravel = {
            'csrfToken' : '{{csrf_token()}}'
        };
    </script>
    <!--<script src="/js/manifest.js"></script>-->
    <!--<script src="/js/vendor.js"></script>-->
    <!--<script src="/js/app.js"></script>-->
    <script src="/js/patternfly.js"></script>
    <script>
        var app = new Vue({
            el: '#app'
        });
    </script>
    <script>
        $(document).ready(function() {
            $().setupVerticalNavigation(true);
        });
    </script>
    @section('scripts')
    @show
</body>
</html>

