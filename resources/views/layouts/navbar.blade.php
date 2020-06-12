<nav class="navbar navbar-expand-md navbar-light bg-white shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <div style="font-family: Balsamiq Sans">
                <a class="tw-ic" href="https://twitter.com/nndiaze" style="color: #1DA1F2; text-decoration: none">
                    <i class="fab fa-twitter fa-sm white-text mr-lg-3 mr-3 fa-2x"> </i>
                </a>
                <a class="ins-ic" href="https://www.instagram.com/rahmatullah_ashar/" style="color: pink; text-decoration: none">
                    <i class="fab fa-instagram fa-sm white-text mr-lg-3 mr-3 fa-2x"> </i>
                </a>
                <a class="pin-ic" href="https://github.com/rahmatullah18" style="color: black; text-decoration: none">
                    <i class="fab fa-github fa-sm white-text fa-2x"> </i>
                </a>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" style="font-family: Balsamiq Sans">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                        <a href="{{route('blog.post')}}" class="nav-link font-weight-bold">Artikel</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('source-code*') ? 'active' : '' }}">
                        <a href="{{route('categorysc.index')}}" class="nav-link">SourceCode</a>
                    </li>
                    <li class="nav-item {{ Request::is('download-ebook-informatika*') ? 'active' : '' }}">
                        <a href="{{route('category_ebook.index')}}" class="nav-link">Ebook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a href="{{route('blog.post')}}" class="nav-link">Artikel</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('categorysc.index')}}" class="nav-link">SourceCode</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category_ebook.index')}}" class="nav-link">Ebook</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{route('categori.sourcecode')}}" class="dropdown-item">Categori Source Code</a>
                            <a href="{{route('categori.ebook')}}" class="dropdown-item">Categori Ebook</a>
                            <a href="{{route('sourcecode')}}" class="dropdown-item">Data SourceCode</a>
                            <a href="{{route('ebook')}}" class="dropdown-item">Data Ebook</a>
                            <a href="{{route('canvas')}}" class="dropdown-item">Blog</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>