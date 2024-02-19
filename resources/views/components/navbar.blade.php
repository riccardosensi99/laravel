<nav class="navbar navbar-expand-lg bg-dark nv-custom" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homePage')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('articles')}}">annunci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('userName')}}">user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('service')}}">servizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homePage')}}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">contattaci</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{route('article_create')}}">aggiungi articoli</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category_create')}}">aggiungi categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category_index')}}">tutte le categorie</a>
                </li>
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                        Ciao,{{Auth::user()->name}} benvenuto!  
                        @else  
                        Ciao Accedi!
                        @endauth 
                        
                        
                        
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>      
                        @else
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                        <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                        @endguest
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</nav>