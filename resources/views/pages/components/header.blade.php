<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        @if (Auth::user())
            <a href="{{route('dashboard')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>HIV</h2>
            </a>
        @else
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>HIV</h2>
            </a>
            
        @endif
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active ">Home</a>
                <a href="{{route('penyebab')}}" class="nav-item nav-link ">Penyebab</a>
                <a href="{{route('gejala')}}" class="nav-item nav-link">Gejala & Diagnosis</a>
                <a href="{{route('pencegahan')}}" class="nav-item nav-link">Pencegahan</a>
                @if (Auth::user())                    
                <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
                @endif
                @if (Auth::user())
                  <a href="{{route('doLogout')}}" class="nav-item nav-link">Logout</a>
                @else
                  <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                @endif
            </div>
        </div>
    </nav>