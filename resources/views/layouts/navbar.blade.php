<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.jpg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                
                @auth
                    <li class="nav-item">
                        <a href="/cursos" class="nav-link">Cursos</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Cursos</a>
                    </li>
                @endauth
               
                @auth
                <li class="nav-item">
                    <form action="/logout" method="POST" class="text-xs font-semibold text-red-500 ml-6" >
                        @csrf
                    
                        <button type="submit" class="btn btn-primary mt-1" >Log Out</button>
                    </form> 
                </li>
                @else
                <li class="nav-item">
                    <a href="/register" class="nav-link calltoaction">Cadastro</a>
                </li>
                <li class="nav-item">     
                    <a href="/login" class="nav-link calltoaction">Login</a>
                </li>     

                @endauth
               
            </ul>
        </div>
    </div>
</nav>